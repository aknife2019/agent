<?php
namespace Aknife\Agent;

use Aknife\Ip\IpLocation;

use Aknife\Agent\Rules\Platform;
use Aknife\Agent\Rules\Browser;
use Aknife\Agent\Rules\Bots;
use Aknife\Agent\Rules\Device;

// 用于Webkit内核浏览器检测 Windows11
header('Accept-CH: Sec-CH-UA-Platform, Sec-CH-UA-Platform-Version', true);
if( $_SERVER['HTTP_SEC_CH_UA_PLATFORM'] == '"Windows"' && strstr(str_replace('"','',$_SERVER['HTTP_SEC_CH_UA_PLATFORM_VERSION']),'.',true) >= 13 ){
    $_SERVER['HTTP_USER_AGENT'] = str_replace('Win64;','Windows 11; Win64;',$_SERVER['HTTP_USER_AGENT']);
}

class Agent
{
    /**
     * 设置默认语言
     * @var string
     */
    private static $lang = 'zh-CN';

    /**
     * 设置header
     * @var string
     */
    private static $userAgent = null;

    /**
     * 设置 ip
     * @var string
     */
    private static $ip = null;

    /**
     * 设置返回的语言
     */
    public static function lang($lang)
    {
        $langPath = __DIR__."/lang/".$lang.'.php';

        // 判断语言文件
        if( is_file($langPath) ){
            self::$lang = $lang;
        }
    }

    /**
     * 设置 user agent
     * @var array
     */
    public static function setUserAgent($userAgent)
    {
        self::$userAgent = trim($userAgent);
    }

    /**
     * 设置 IP
     * @var array
     */
    public static function setIp($ip)
    {
        self::$ip = trim($ip);
    }

    /**
     * 获取header信息
     * @var array
     */
    public static function getUserAgent()
    {
        if( self::$userAgent ){
            $userAgent = self::$userAgent;
        }else{
            $userAgent = $_SERVER['HTTP_USER_AGENT'];
            self::$userAgent = $userAgent;
        }

        return $userAgent;
    }

    /**
     * 获取所有信息
     */
    public static function all()
    {
        $result['language'] = self::language();
        $result['ip'] = self::ip();
        $result['platform'] = self::platform();
        $result['browser'] = self::browser();
        $result['device'] = self::device();
        $result['bots'] = self::bots();
        $result['userAgent'] = self::getUserAgent();
        
        return $result;
    }

    /**
     * 获取ip信息
     */
    public static function ip( $ipAddress = '')
    {
        if( $ipAddress == '' ){
            $ip = self::$ip ?: $_SERVER['REMOTE_ADDR'];
            self::$ip = $ip;
        }else{
            $ip = $ipAddress;
        }
        
        $result = IpLocation::find($ip);

        return $result;
    }

    /**
     * 获取ip所属国家
     */
    public static function country( $ipAddress = '')
    {
        if( $ipAddress == '' ){
            $ip = self::$ip ?: $_SERVER['REMOTE_ADDR'];
            self::$ip = $ip;
        }else{
            $ip = $ipAddress;
        }
        
        $result = IpLocation::country($ip);

        return $result;
    }

    /**
     * 获取浏览器语言
     */
    public static function language()
    {
        $accept_language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        $language = explode(',',$accept_language);

        return self::returnLang('language',$language[0]);
    }

    /**
     * 获取操作系统
     */
    public static function platform()
    {
        $userAgent = self::getUserAgent();

        $platform = self::ruleMatch('platform',$userAgent);
        
        // 判断Windows10 与 Windows11
        if( $platform['name'] == 'Windows' && $platform['version'] == '10' && isset($_SERVER['HTTP_SEC_CH_UA_PLATFORM_VERSION']) && strstr(str_replace('"','',$_SERVER['HTTP_SEC_CH_UA_PLATFORM_VERSION']),'.',true) >= 13 ){
            $platform['version'] = '11';
        }

        return $platform['name'] == 'Unknow' ? null : self::returnLang('platform',$platform);
    }

    /**
     * 获取浏览器
     */
    public static function browser()
    {
        $userAgent = self::getUserAgent();

        // 获取设备信息
        $browser = self::ruleMatch('browser',$userAgent);

        if( isset($browser['version']) ){
            // 分割版本号
            $browser['full'] = $browser['version'];
            preg_match('/(\d+.\d+).\d+.\d+|(\d+.\d+).\d+|(\d+.\d+)|(\d+.\w+)|(\d+)/i',$browser['full'],$ver);
            $ver = array_values(array_filter($ver));

            $browser['version'] = isset($ver[1]) ? $ver[1] : '';
        }

        return $browser['name'] == 'Unknow' ? null : self::returnLang('browser',$browser);

    }
    
    /**
     * 获取设备
     */
    public static function device()
    {
        $userAgent = self::getUserAgent();

        // 获取设备信息
        $device = self::ruleMatch('device',$userAgent);

        if( $device['name'] != 'Unknow' && $device['version'] != 'Unknow' ){
            $result = [
                'model' =>  $device['name'] ?: $device['version'],
                'brand' =>  $device['brand'],
                'category'  =>  $device['category']
            ];
            return self::returnLang('device',$result);
        }else{
            return null;
        }
    }
    
    /**
     * 获取机器人/蜘蛛
     * nslookup 
     */
    public static function bots()
    {
        $userAgent = self::getUserAgent();

        // 获取设备信息
        $bots = self::ruleMatch('bots',$userAgent);

        // 如果是搜索蜘蛛，判断真假
        if( $bots['category'] == 'Search Bot' ){
            $checkResult = self::isRealSpider($bots['checkMethod'],$bots['rule']) ? 'true' : 'false';
            $bots['checked'] = self::returnLang('base',$checkResult);

        }
        
        unset($bots['checkMethod']);
        unset($bots['rule']);

        return $bots['name'] == 'Unknow' ? null : self::returnLang('bots',$bots);
    }

    /**
     * 判断类型是否是手机
     */
    public static function isMobile()
    {
        // 判断是否是手机APP
        $browser = self::browser();
        if( self::returnLangKey('browser',$browser['category']) == 'App' ){
            return true;
        }

        // 判断设备是否是智能手机、功能手机
        $device = self::device();
        if( in_array(self::returnLangKey('device',$device['category']),['smartphone','feature phone']) ){
            return true;
        }

        return false;
    }

    /**
     * 判断是否是手机App
     */
    public static function isMobileApp()
    {
        // 判断是否是手机APP
        $browser = self::browser();
        if( self::returnLangKey('browser',$browser['category']) == 'App' ){
            return true;
        }

        return false;
    }

    /**
     * 判断是否是平板
     */
    public static function isTablet()
    {
        // 判断设备是否是智能手机、功能手机
        $device = self::device();
        if( in_array(self::returnLangKey('device',$device['category']),['tablet','phablet']) ){
            return true;
        }

        return false;
    }

    /**
     * 判断是否搜索蜘蛛
     * 需要 nslookup 
     * @var boolean
     */
    private static function isRealSpider($method,$rule)
    {
        $ip = self::$ip;

        $domain = htmlentities($ip, ENT_QUOTES | ENT_IGNORE, "UTF-8");
        $rbl = 'in-addr.arpa';
        $rev = array_reverse(explode('.', $domain));
        $lookup = implode('.', $rev) . '.' . $rbl;

        if( $method == 'domain' ){
            // 校验域名
            $dns = dns_get_record($lookup);
            if( strpos($dns[0]['target'],$rule) === true ){
                return true;
            }
        }else{
            // IP校验
            if( is_array($rule) ){
                foreach( $rule as $val ){
                    $result = self::checkIpAddr($ip,$val);

                    if( $result ){
                        return true;
                    }
                }
                return false;
            }else{
                if( preg_match("/{$ip}/",$rule) ){
                    return true;
                }else{
                    return false;
                }
            }
        }
        

        return $dns;
    }

    // 解析IP段
    public static function checkIpAddr($ip,$ipAddr) {
        $arr = explode('/',$ipAddr);//对IP段进行解剖
        $ip_addr = $arr[0];//得到IP地址
        $netbits = intval($arr[1]);//得到掩码位
        $subnet_mask = long2ip(ip2long("255.255.255.255") << (32 - $netbits));
        $ip_lang = ip2long($ip_addr);
        $nm = ip2long($subnet_mask);
        $nw = ($ip_lang & $nm);
        $bc = $nw | (~$nm);

        $ips['ip_start'] = long2ip($nw + 1);//可用IP开始
        $ips['ip_end'] = long2ip($bc - 1);//可用IP结束

        if($bc <= 0) $bc += 4294967296;//修复32位服务器和64位服务的差别
        if($nw <= 0) $nw += 4294967296;//32位long2ip后会出现负数

        return ip2long($ip) >= $nw+1 && ip2long($ip) <= $bc-1 ? true : false;
    }

    /**
     * 正则匹配
     * @var string
     */
    private static function ruleMatch($type,$string)
    {

        switch( $type ){
            case 'platform':
                $rule = Platform::$rule;
                break;
            case 'browser':
                $rule = Browser::$rule;
                break;
            case 'device':
                $rule = Device::$rule;
                break;
            case 'bots':
                $rule = Bots::$rule;
                break;
        }

        $result = ['name'=>'Unknow'];

        foreach( $rule as $key=>$val ){
            if( preg_match("/".str_replace('/','\/',$key)."/i",$string,$arr) ){
                // 判断是否有子规则
                if( isset($val['sub']) ){
                    foreach( $val['sub'] as $sub_key=>$sub_val ){
                        if( preg_match("/".str_replace('/','\/',$sub_key)."/i",$string,$sub_arr) ){
                            foreach( $sub_val as $keyName=>$valName ){
                                if( strpos($valName,'$') !== false ){
                                    if( preg_match('/\$(\d+)/',$sub_val[$keyName],$regexNums) && isset($sub_arr[1]) ){
                                        $result[$keyName] = str_replace('$'.$regexNums[1],$sub_arr[$regexNums[1]] ?: '',$sub_val[$keyName]) ?: $sub_val[$keyName];
                                    }else{
                                        $result[$keyName] = trim(preg_replace('/\$\d+/','',$sub_val[$keyName]));
                                    }
                                }else{
                                    $result[$keyName] = $sub_val[$keyName];
                                }
                            }

                            if( $type == 'device' ){
                                $result['name'] = trim($result['name']);
                                $result['brand'] = $sub_val['brand'] ?: trim($val['brand']);
                                $result['category'] = $sub_val['category'] ?: $val['category'];
                            }

                            break;
                        }
                    }
                }else{
                    $result = $val;
                    $result['name'] = strpos($val['name'],"$") !== false ? $arr[str_replace('$','',$val['name'])] : $val['name'];

                    if( preg_match("/".str_replace('/','\/',$key)."/i",$string,$sub_arr) ){
                        foreach( $val as $keyName=>$valName ){
                            if( strpos($valName,'$') !== false ){
                                if( preg_match('/\$(\d+)/',$val[$keyName],$regexNums) && isset($sub_arr[1]) ){
                                    $result[$keyName] = str_replace('$'.$regexNums[1],$sub_arr[$regexNums[1]] ?: '',$val[$keyName]) ?: $val[$keyName];
                                }else{
                                    $result[$keyName] = trim(preg_replace('/\$\d+/','',$val[$keyName]));
                                }
                            }else{
                                $result[$keyName] = $val[$keyName];
                            }
                        }
                    }
                }
                break;
            }
        }

        $result['version'] && $result['version'] = str_replace(['_','-'],'.',$result['version']);

        return $result;
    }

    /**
     * 返回对应的语言
     * @var string
     */
    private static function returnLang($type,$arg)
    {
        $langPath = __DIR__."/lang/".self::$lang.'.php';

        // 判断语言文件
        if( is_file($langPath) ){
            require $langPath;

            if( is_array($arg) ){
                $result = $arg;
                foreach( $arg as $key=>$val ){
                    $result[$key] = isset($lang[$type][$val]) ? $lang[$type][$val] : $val;
                }
            }else{
                $result = isset($lang[$type][$arg]) ? $lang[$type][$arg] : $arg;
            }
            return $result;
        }else{
            return $arg;
        }
    }

    /**
     * 根据翻译获取key
     */
    private static function returnLangKey($type,$value)
    {
        if( $value == '' ){
            return $value;
        }
        
        $langPath = __DIR__."/lang/".self::$lang.'.php';

        // 判断语言文件
        if( is_file($langPath) ){
            require $langPath;

            if( isset($lang[$type]) && $lang[$type] && is_array($lang[$type]) ){
                $searchValue = array_search($value,$lang[$type]);

                return  $searchValue ?: $value;
            }else{
                return $value;
            }
        }else{
            return $value;
        }
    }

    /**
     * 方法不存在时
     * @var string
     */
    public static function __callStatic($method, $arguments)
    {
        echo $method.' '. self::returnLang('base','Method Not Found');
    }  
}