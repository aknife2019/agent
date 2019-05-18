<?php
namespace Aknife\Agent;

use Aknife\Agent\Platform;
use Aknife\Agent\Browser;
use Aknife\Agent\Bots;
use Aknife\Agent\Device;

class Agent
{
    /**
     * 设置默认语言
     * @var string
     */
    protected static $lang = null;

     /**
     * 设置header
     * @var string
     */
    protected static $header = null;

    /**
     * 设置platform
     * @var string
     */
    protected static $platform = null;

    /**
     * 设置browser
     * @var string
     */
    protected static $browser = null;

    /**
     * 设置bots
     * @var string
     */
    protected static $bots = null;

    /**
     * 设置device
     * @var string
     */
    protected static $device = null;

    /**
     * 设置返回的语言
     */
    public static function lang($lang)
    {
        $langPath = __DIR__."/lang/".$lang.'.php';

        // 判断语言文件
        if( is_file($langPath) ){
            require_once $langPath;
            self::$lang = $lang;
        }
    }

    /**
     * 设置自定义的header
     */
    public static function header($header)
    {
        self::$header = $header;
        self::$platform = null;
        self::$browser = null;
        self::$device = null;
    }

    /**
     * 获取header信息
     * @var array
     */
    public static function getHeader()
    {
        $header['user_agent'] = self::$header ?: $_SERVER['HTTP_USER_AGENT'];
        if( !isset($a['HTTP_ACCEPT_LANGUAGE']) ){
            $header['accept_language'] = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        }

        return $header;
    }

    /**
     * 判断状态
     * @var boolean
     */
    public static function is($type)
    {
        // 判断机器人
        if( $type == 'bots' ){
            $bots = self::bots();
            if( $bots['name'] != 'Unknow' ){
                return true;
            }else{
                return false;
            }
        }

        // 获取操作系统
        $platform = self::platform();
        if( strpos($platform['name'].$platform['version'], $type) !== false ){
            return true;
        }

        // 获取浏览器
        $browser = self::browser();
        if( strpos($browser['name'].$browser['version'], $type) !== false ){
            return true;
        }

        // 获取设备名
        $device = self::device();
        if( strpos($device['name'], $type) !== false || strpos($device['brand'], $type) !== false  ){
            return true;
        }

        return false;
    }

    /**
     * 获取所有信息
     */
    public static function all()
    {
        $result['language'] = self::language();
        $result['platform'] = self::platform();
        $result['browser'] = self::browser();
        $result['device'] = self::device();

        return $result;
    }

    /**
     * 获取浏览器语言
     */
    public static function language()
    {
        $header = self::getHeader();
        $accept_language = $header['accept_language'];
        $language = explode(',',$accept_language);
        return self::resultLang('language',$language[0]);
    }

    /**
     * 获取操作系统
     */
    public static function platform()
    {
        $platform = self::$platform ?: self::getPlatform();

        return $platform;
    }

    /**
     * 判断操作系统
     */
    protected static function getPlatform()
    {
        $header = self::getHeader();
        $userAgent = $header['user_agent'];

        $platform = self::ruleMatch(Platform::$rule,$userAgent);

        // 设置静态变量
        self::$platform = $platform;

        return self::resultLang('platform',$platform);
    }

    /**
     * 获取浏览器
     */
    public static function browser()
    {
        $browser =  self::$browser ?: self::getBrowser();

        if( isset($browser['version']) ){
            // 分割版本号
            $browser['full'] = $browser['version'];
            preg_match('/(\d+.\d+).\d+.\d+|(\d+.\d+).\d+|(\d+.\d+)|(\d+.\w+)|(\d+)/i',$browser['full'],$ver);
            $ver = array_values(array_filter($ver));
            $browser['version'] = $ver[1];
        }
        return $browser;
    }

    /**
     * 判断浏览器
     */
    protected static function getBrowser()
    {
        $header = self::getHeader();
        $userAgent = $header['user_agent'];

        // 获取设备信息
        $browser = self::ruleMatch(Browser::$rule,$userAgent);
        // 设置静态变量
        self::$browser = $browser;
        return self::resultLang('browser',$browser);
    }

    /**
     * 获取机器人/蜘蛛
     */
    public static function bots()
    {
        $bots = self::$bots ?: self::getBots();

        return $bots['name'] == 'Unknow' ? false : $bots ;
    }

    /**
     * 判断浏览器
     */
    protected static function getBots()
    {
        $header = self::getHeader();
        $userAgent = $header['user_agent'];

        // 获取设备信息
        $bots = self::ruleMatch(Bots::$rule,$userAgent);
        // 设置静态变量
        self::$bots = $bots;

        return self::resultLang('bots',$bots);
    }

    /**
     * 获取设备
     */
    public static function device()
    {
        $device =  self::$device ?: self::getDevice();
        return $device;
    }

    /**
     * 判断设备
     */
    protected static function getDevice()
    {
        $header = self::getHeader();
        $userAgent = $header['user_agent'];

        // 获取设备信息
        $device = self::ruleMatch(Device::$rule,$userAgent);

        // 设置静态变量
        self::$device = $device;

        return self::resultLang('device',$device);
    }

    /**
     * 正则匹配
     * @var string
     */
    protected static function ruleMatch($rule,$string)
    {
        $result = ['name'=>'Unknow'];
        foreach( $rule as $key=>$val ){
            if( preg_match("/".str_replace('/','\/',$key)."/i",$string,$arr) ){
                // 判断设备的时候，判断是否有子规则
                if( isset($val['sub']) ){
                    foreach( $val['sub'] as $sub_key=>$sub_val ){
                        if( preg_match("/".str_replace('/','\/',$sub_key)."/i",$string,$sub_arr) ){
                            if( preg_match('/\$(\d+)/',$sub_val['name'],$regexNums) ){
                                $result['name'] = str_replace('$'.$regexNums[1],$sub_arr[$regexNums[1]] ?: '',$sub_val['name']) ?: $sub_val['name'];
                            }else{
                                $result['name'] = strpos($sub_val['name'],"$") !== false ? $sub_arr[str_replace('$','',$sub_val['name'])] : $sub_val['name'];
                            }

                            $result['name'] = trim($result['name']);
                            $result['brand'] = trim($val['name']);
                            $result['type'] = trim($sub_val['category'] ?: $val['category']);
                            break;
                        }
                    }
                }else{
                    $result['name'] = strpos($val['name'],"$") !== false ? $arr[str_replace('$','',$val['name'])] : $val['name'];
                    if( $val['version'] ){
                        $result['version'] = trim(strpos($val['version'],"$") !== false ? $arr[str_replace('$','',$val['version'])] : $val['version']);
                    }
                    if( isset($val['category']) ){
                        $result['type'] = trim(strpos($val['category'],"$") !== false ? $arr[str_replace('$','',$val['category'])] : $val['category']);
                    }
                }
                break;
            }
        }
        return $result;
    }

    /**
     * 返回对应的语言
     * @var string
     */
    protected static function resultLang($type,$arg)
    {
        if( self::$lang ){

            if( is_array($arg) ){
                $result = $arg;
                foreach( $arg as $key=>$val ){
                    $result[$key] = self::$lang[$type][$arg[$key]] ?: $arg[$key];
                }
            }else{
                $result = self::$lang[$type][$arg] ?: $arg;
            }
            
            return $result;
        }else{
            return $arg;
        }
    }

    /**
     * 方法不存在时
     * @var string
     */
    public function __call($name,$args){
        echo $name. self::returnLang('Not Found');
    }  
}
