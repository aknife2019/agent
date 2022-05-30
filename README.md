Agent
=====
规则更新于 2022年4月28日

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
Agent::ip('159.75.190.197');
/*
[
    'continent' => [
            'code' => 'AS',
            'name' => '亚洲',
    ],
    'country' => [
            'code' => 'CN',
            'name' => '中国',
    ],
    'region' => '广东省',
    'city' => '广州市',
]
*/
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

### 其他用法
```php
Agent::setIp('8.8.8.8');
Agent::isMobile();
Agent::isMobileApp();
Agent::isTablet();
```

## License

Laravel User Agent is licensed under [The MIT License (MIT)](LICENSE).
