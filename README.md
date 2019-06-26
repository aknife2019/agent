项目中的实际应用
 ![image](https://github.com/aknife2019/agent/master/screen.jpg)

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
如果未设置，默认调用英文

Agent::lang('en'); // zh_cn / zh_tw / en


### 解析特定的 header

Agent::header('Mozilla/5.0 (iPhone; CPU iPhone OS 10_3_3 like Mac OS X; zh-CN) AppleWebKit/537.51.1 (KHTML, like Gecko) Mobile/14G60 UCBrowser/11.7.7.1031 Mobile  AliApp(TUnionSDK/0.1.20)');


### 验证操作系统 / 手机 / 平板 / 浏览器

```php
Agnet::is("Windows"); // return true/false;

// 以首字母大写的驼峰写法表示 iPhone和iPad由于有固定写法，排除在外
// Windows / Windows XP / Windows 7 / Windows 8 / Windows 10 / Mac / FreeBSD / Linux
// 
// bots 
//
// Mobile
// Andorid / XiaoMi / HuaWei / Oppo / Nexus / ......
// iPhone 
// 
// Tablet / iPad / XiaoMiPad / ......
// 
// IE / IE6 / IE7 / IE8 / IE9 / IE10 / IE11 / Edge / Chrome / Firefox / Safari
```

------------------------

### 浏览器的语言
zh-cn / zh-tw / en-us
中文(简体) / 中文(繁体) / 英语(美国)

```php
Agent::languages(); // return "zh-cn/zh-tw/en-us";
```

### 操作系统

获取操作系统 Windows7 / Windows10 / Mac OS / FreeBSD / Linux，如果是手机，则获取 andorid / iphone /

```php
Agent::platform();  //  ['name'=>'Windows','version'=>'10']
```

### 浏览器名称

Get Browser Name. (Chrome / IE / Edge / Safari / Firefox / HuaWei Browser / XiaoMi Browser / QQ Own Browser / WeChat Own Browser / QQ Browser / ...)

获取浏览器的名称. (谷歌浏览器 / IE 浏览器 / Edge 浏览器 / 苹果浏览器 / 火狐浏览器 / 华为浏览器 / 小米浏览器 / QQ内置浏览器 / 微信内置浏览器 / QQ浏览器 / ...)

```php
$browser = Agent::browser(); // [ 'name'=>'Chrome','version'=>'74.0','full'=>'74.0.3729.131' ]

```

### 设备名称

获取设备名称，只针对手机 (HuaWei Pro 20 / XiaoMi 3 / Oppo P20 / iPhone 7/ ...)

```php
Agent::device();    //  ['brand'=>'Huawei','name'=>'honor V10','type'=>'smartphone']
```

### 机器人名称

get boot name. (Baiduspider / Curl / Python / Java ...)
获取机器人名称. (百度蜘蛛 / Curl / Python / Java ...)

```php
Agent::robot(); // ['name'=>'Baidu Spider','type'=>'Search bot']
```


## License

Laravel User Agent is licensed under [The MIT License (MIT)](LICENSE).
