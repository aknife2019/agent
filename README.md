Agent
=====
之前使用的 jenssegers/agent 包
因为国内手机型号比较多，无法获取国内的一些手机型号和浏览器
且包含过多停产、嵌入式等设备，才有了重写的想法，单纯的面对客户端
第一次写composer包，写法很多参考了 jenssegers/agent 

安装
------------

使用 composer:

```bash
composer require aknife/agent
```

### 基础用法
-----------

```php
use Aknife\Agent\Agent;
```
------------------------

### 设置返回的语言
如果未设置，默认调用中文
```php
Agent::lang('en'); // zh_cn / zh_tw / en

```

### 解析特定的 header

```php
Agent::setUserAgent('Mozilla/5.0 (iPhone; CPU iPhone OS 10_3_3 like Mac OS X; zh-CN) AppleWebKit/537.51.1 (KHTML, like Gecko) Mobile/14G60 UCBrowser/11.7.7.1031 Mobile AliApp(TUnionSDK/0.1.20)');
```

### 解析特定的 IP

```php
Agent::setIp('8.8.8.8');

Agent::ip(); // ['ip' => '182.240.131.220','country' => '中国','province' => '云南省','city' => '玉溪市','isp' => '中国电信']

Agent::ip('8.8.8.8'); // ['ip' => '8.8.8.8','country' => '美国','province' => '','city' => '','isp' => '加利福尼亚州圣克拉拉县山景市谷歌公司DNS服务器']
Agent::ip('159.75.190.197'); // ['ip' => '159.75.190.197','country' => '中国','province' => '广东省','city' => '广州市','isp' => '腾讯云']
Agent::ip('2402:4e00:40:40::2:331');// ['ip' => '2402:4e00:40:40::2:331','country' => '中国','province' => '广东省','city' => '深圳市','isp' => '深圳市腾讯计算机系统有限公司']
```

### 浏览器的语言

```php
Agent::languages(); // return "zh-CN/zh-TW/en-US";
```

### 操作系统

获取操作系统 Windows7 / Windows10 / Mac OS / FreeBSD / Linux，如果是手机，则获取 andorid / iphone /

```php
Agent::platform();  //  ['name'=>'Windows','version'=>'10']
```

### 浏览器名称

获取浏览器的名称. (谷歌浏览器 / IE 浏览器 / Edge 浏览器 / 苹果浏览器 / 火狐浏览器 / 华为浏览器 / 小米浏览器 / QQ内置浏览器 / 微信内置浏览器 / QQ浏览器 / ...)

```php
$browser = Agent::browser(); // [ 'name'=>'Chrome','version'=>'74.0','full'=>'74.0.3729.131' ]

```

### 设备名称

获取设备名称

```php
Agent::device();    //  ['model'=>'honor V10','brand'=>'Huawei','category'=>'smartphone']
```

### 机器人名称

获取机器人名称. (百度蜘蛛 / Curl / Python / Java ...),如果存在验证规则，则判断蜘蛛真假

```php
Agent::robot(); // ['name'=>'Baidu Spider','category'=>'Search bot','checked'=>'false']
```


## License

Laravel User Agent is licensed under [The MIT License (MIT)](LICENSE).
