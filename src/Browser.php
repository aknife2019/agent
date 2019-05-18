<?php
namespace Aknife\Agent;
class Browser
{
    // 规则来源于 : https://github.com/matomo-org/device-detector/blob/master/regexes/client/mobile_apps.yml
    // 规则来源于 : https://github.com/matomo-org/device-detector/blob/master/regexes/client/browsers.yml
    // 删除使用率极低的部分浏览器
    public static $rule = [
        //==================== 软件内置浏览器 ====================

        // WeChat
        'MicroMessenger(?:/(?:Mini)?([.\d]+))?.*miniProgram' => [
            'name'=>'WeChat App',
            'version'=>'$1',
            'category'=>'app'
        ],

        'MicroMessenger/(\d+[\.\d]+)' => [
            'name'=>'WeChat',
            'version'=>'$1',
            'category'=>'app'
        ],

        // QQ
        'QQ/(\d+[.\d]+)' => [
            'name'=>'QQ',
            'version'=>'$1',
            'category'=>'app'
        ],

        // baidu
        'lite baiduboxapp/(\d+[.\d]+)' => [
            'name'=>'Lite Baidu',
            'version'=>'$1',
            'category'=>'app'
        ],

        // baidu
        'baiduboxapp/(\d+[.\d]+)' => [
            'name'=>'Baidu',
            'version'=>'$1',
            'category'=>'app'
        ],

        // TikTok for China
        'aweme_\d+.*app_version/(\d+[.\d]+)' =>  [
            'name'=>'TikTok',
            'version'=> '$1',
            'category'=>'app'
        ],

        // Sina Weibo
        '.*__weibo__([0-9\.]+)__' => [
            'name'=>'Sina Weibo',
            'version'=>'$1',
            'category'=>'app'
        ],

        // Sogou Search 
        'SogouSearch.*version(\d+[.\d]+)' => [
            'name'=>'Sogou Search',
            'version'=>'$1',
            'category'=>'app'
        ],

        // Facebook Messenger
        '(?:MessengerForiOS|MESSENGER).(?:FBAV)(?:[ /]([\d\.]+))?' => [
            'name'=>'Facebook Messenger',
            'version'=>'$1',
            'category'=>'app'
        ],

        // Facebook
        '(?:FBAV|com.facebook.katana)(?:[ /]([\d\.]+))?' => [
            'name'=>'Facebook',
            'version'=>'$1',
            'category'=>'app'
        ],

        // Pinterest
        'Pinterest(?:/([\d\.]+))?' => [
            'name'=>'Pinterest',
            'version'=>'$1',
            'category'=>'app'
        ],

        // YouTube
        'com.google.android.youtube(?:/([\d\.]+))?' => [
            'name'=>'YouTube',
            'version'=>'$1',
            'category'=>'app'
        ],

        // WhatsApp
        'WhatsApp(?:[ /]([\d\.]+))?' => [
            'name'=>'WhatsApp',
            'version'=>'$1',
            'category'=>'app'
        ],

        // Line
        'Line(?:[ /]([\d\.]+))' => [
            'name'=>'Line',
            'version'=>'$1',
            'category'=>'app'
        ],

        // Yelp Mobile
        'YelpApp/([\d\.]+)' => [
            'name'=>'Yelp Mobile',
            'version'=>'$1',
            'category'=>'app'
        ],

        // Yahoo! Japan
        'jp.co.yahoo.android.yjtop/([\d\.]+)' => [
            'name'=>'Yahoo! Japan',
            'version'=>'$1',
            'category'=>'app'
        ],


        //==================== 浏览器列表 ====================

        //==================== China Browser List ====================
        // UC Browser
        'UC[ ]?Browser(?:[ /]?(\d+[.\d]+))?' => [
            'name'=>'UC Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        'UCWEB(?:[ /]?(\d+[.\d]+))?' => [
            'name'=>'UC Browser',
            'version'=>'$1',
            'category'=>'app'
        ],

        // Maxthon
        '(?:Maxthon|MxBrowser)[ /](\d+[.\d]+)' => [
            'name'=>'Maxthon',
            'version'=>'$1',
            'category'=>'browser'
        ],

        '(?:Maxthon|MyIE2|Uzbl)' => [
            'name'=>'Maxthon',
            'version'=>'',
            'category'=>'browser'
        ],

        // Liebao
        'LBBrowser(?:[ /](\d+[.\d]+))?' => [
            'name'=>'Liebao',
            'version'=>'$1',
            'category'=>'browser'
        ],

        'LieBaoFast/(\d+[.\d]+)' => [
            'name'=>'Liebao',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Sogou Explorer
        'SE (\d+[.\d]+)' => [
            'name'=>'Sogou Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Browser Mobile Browser
        'SoGouMobileBrowser/(\d+[.\d]+)' => [
            'name'=>'Sogou Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // QQ Browser
        'M?QQBrowser(?:/(?:Mini)?([.\d]+))?' => [
            'name'=>'QQ Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // MIUI Browser
        'MIUIBrowser(?:/(\d+[.\d]+))?' => [
            'name'=>'MIUI Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // 360 Browser
        'QIHU 360[ES]E' => [
            'name'=>'360 Browser',
            'version'=>'',
            'category'=>'browser'
        ],

        // 360 Phone Browser
        '360 Aphone Browser(?: \((\d+[.\d]+)(?:beta)?\))?' => [
            'name'=>'360 Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        '360 Alitephone Browser.*\(\d+[.\d]+/(\d+[.\d]+)\)?' => [
            'name'=>'360 Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // 2345 Browser
        '[Mb]2345Browser/(\d+[.\d]+)' => [
            'name'=>'2345 Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Oppo Browser
        'OppoBrowser(?:/(\d+[.\d]+))?' => [
            'name'=>'Oppo Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Baidu Browser
        'baidubrowser(?:[/ ](\d+[.\d]*))?' => [
            'name'=>'Baidu Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Baidu Spark
        '(?:(?:BD)?Spark|BIDUBrowser)[/ ](\d+[.\d]*)' => [
            'name'=>'Baidu Spark',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Quark Browser
        'Quark/(\d+[.\d]+)' => [
            'name'=>'Quark Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // e Browser
        'haowangzhi;ebrowser (\d+[.\d]+)' => [
            'name'=>'e Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // 115 Browser
        '115Browser/(\d+[.\d]+)' => [
            'name'=>'115 Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // 115 Browser
        'Qiyu/(\d+[.\d]+)' => [
            'name'=>'Qiyu Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // the world
        'the world(?:[ /]([\w.]+))?' => [
            'name'=>'the world',
            'version'=>'$1',
            'category'=>'browser'
        ],
        //==================== End ====================

        // Beaker distributed web browser (https:
        // beakerbrowser.com/)
        'Beaker ?Browser(?:[/ ](\d+[.\d]+))?' => [
            'name'=>'Beaker Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Qwant Mobile
        'QwantMobile(?:/(\d+[.\d]+))?' => [
            'name'=>'Qwant Mobile',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // TenFourFox
        'TenFourFox(?:/(\d+[.\d]+))?' => [
            'name'=>'TenFourFox',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // AOL Shield
        'AOLShield(?:/(\d+[.\d]+))?' => [
            'name'=>'AOL Shield',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Microsoft Edge (Spartan Edge)
        'Edge[ /](\d+[.\d]+)' => [
            'name'=>'Microsoft Edge',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Microsoft Edge for iOS
        'EdgiOS[ /](\d+[.\d]+)' => [
            'name'=>'Microsoft Edge',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Microsoft Edge for Android
        'EdgA[ /](\d+[.\d]+)' => [
            'name'=>'Microsoft Edge',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Microsoft Edge (Anaheim Edge)
        'Edg[ /](\d+[.\d]+)' => [
            'name'=>'Microsoft Edge',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // SailfishBrowser
        'SailfishBrowser(?:/(\d+[.\d]+))?' => [
            'name'=>'Sailfish Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // SeaMonkey
        '(Iceape|SeaMonkey|gnuzilla)(?:/(\d+[.\d]+))?' => [
            'name'=>'$1',
            'version'=>'$2',
            'category'=>'browser'
        ],

        // Camino
        'Camino(?:/(\d+[.\d]+))?' => [
            'name'=>'Camino',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Waterfox
        'Waterfox(?:/(\d+[.\d]+))?' => [
            'name'=>'Waterfox',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // AlohaBrowser
        'AlohaBrowser(?:/(\d+[.\d]+))?' => [
            'name'=>'Aloha Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Avast Secure Browser
        'Avast(?:/(\d+[.\d]+))?' => [
            'name'=>'Avast Secure Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Epic
        'Epic(?:/(\d+[.\d]+))?' => [
            'name'=>'Epic',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Fennec (Firefox for mobile)
        'Fennec(?:/(\d+[.\d]+))?' => [
            'name'=>'Fennec',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // MicroB
        'Firefox.*Tablet browser (\d+[.\d]+)' => [
            'name'=>'MicroB',
            'version'=>'$1',
            'category'=>'browser'
        ],

        'Maemo Browser(?: (\d+[.\d]+))?' => [
            'name'=>'MicroB',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Deepnet Explorer
        'Deepnet Explorer (\d+[.\d]+)?' => [
            'name'=>'Deepnet Explorer',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Avant Browser
        'Avant Browser' => [
            'name'=>'Avant Browser',
            'version'=>'',
            'category'=>'browser'
        ],

        // Amigo
        'Chrome/(\d+[.\d]+).*MRCHROME' => [
            'name'=>'Amigo',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Atomic Web Browser
        'AtomicBrowser(?:/(\d+[.\d]+))?' => [
            'name'=>'Atomic Web Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Bunjalloo
        'Bunjalloo(?:/(\d+[.\d]+))?' => [
            'name'=>'Bunjalloo',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Brave
        'Brave(?:/(\d+[.\d]+))?' => [
            'name'=>'Brave',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Iridium
        'Iridium(?:/(\d+[.\d]+))?' => [
            'name'=>'Iridium',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Iceweasel
        'Iceweasel(?:/(\d+[.\d]+))?' => [
            'name'=>'Iceweasel',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // WebPositive
        'WebPositive' => [
            'name'=>'WebPositive',
            'version'=>'',
            'category'=>'browser'
        ],

        // Pale Moon
        'PaleMoon(?:/(\d+[.\d]+))?' => [
            'name'=>'Pale Moon',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // CometBird
        'CometBird(?:/(\d+[.\d]+))?' => [
            'name'=>'CometBird',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // IceDragon
        'IceDragon(?:/(\d+[.\d]+))?' => [
            'name'=>'IceDragon',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Flock
        'Flock(?:/(\d+[.\d]+))?' => [
            'name'=>'Flock',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Jig Browser
        'jig browser(?: web;|9i?)?(?:[/ ](\d+[.\d]+))?' => [
            'name'=>'Jig Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Kapiko
        'Kapiko(?:/(\d+[.\d]+))?' => [
            'name'=>'Kapiko',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Kylo
        'Kylo(?:/(\d+[.\d]+))?' => [
            'name'=>'Kylo',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Cunaguaro
        'Cunaguaro(?:/(\d+[.\d]+))?' => [
            'name'=>'Cunaguaro',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Firefox Focus / Firefox Klar
        '(?:Focus|Klar)(?:/(\d+[.\d]+))?' => [
            'name'=>'Firefox Focus',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Cyberfox
        'Cyberfox(?:/(\d+[.\d]+))?' => [
            'name'=>'Cyberfox',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Swiftfox
        'Firefox/(\d+[.\d]+).*\(Swiftfox\)' => [
            'name'=>'Swiftfox',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Firefox Mobile
        '(Mobile|Tablet).*Firefox(?:/(\d+[.\d]+))?' => [
            'name'=>'Firefox',
            'version'=>'$2',
            'category'=>'browser'
        ],

        // Firefox
        'Firefox(?:/(\d+[.\d]+))?' => [
            'name'=>'Firefox',
            'version'=>'$1',
            'category'=>'browser'
        ],

        '(BonEcho|GranParadiso|Lorentz|Minefield|Namoroka|Shiretoko)/(\d+[.\d]+)' => [
            'name'=>'Firefox',
            'version'=>'$1 ($2)',
            'category'=>'browser'
        ],

        'FxiOS/(\d+[.\d]+)' => [
            'name'=>'Firefox Mobile',
            'version'=>'iOS $1',
            'category'=>'browser'
        ],

        // ANT Fresco
        'ANTFresco(?:[/ ](\d+[.\d]+))?' => [
            'name'=>'ANT Fresco',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // ANTGalio
        'ANTGalio(?:/(\d+[.\d]+))?' => [
            'name'=>'ANTGalio',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Espial TV Browser
        '(?:Espial|Escape)(?:[/ ](\d+[.\d]+))?' => [
            'name'=>'Espial TV Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // RockMelt
        'RockMelt(?:/(\d+[.\d]+))?' => [
            'name'=>'RockMelt',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Fireweb Navigator
        'Fireweb Navigator(?:/(\d+[.\d]+))?' => [
            'name'=>'Fireweb Navigator',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Fireweb
        'Fireweb(?:/(\d+[.\d]+))?' => [
            'name'=>'Fireweb',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Netscape
        '(?:Navigator|Netscape6?)(?:/(\d+[.\d]+))?' => [
            'name'=>'Netscape',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Polarity
        '(?:Polarity)(?:[/ ](\d+[.\d]+))?' => [
            'name'=>'Polarity',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // QupZilla
        '(?:QupZilla)(?:[/ ](\d+[.\d]+))?' => [
            'name'=>'QupZilla',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Dooble
        '(?:Dooble)(?:[/ ](\d+[.\d]+))?' => [
            'name'=>'Dooble',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Opera Mobile
        '(?:Opera Tablet.*Version|Opera/.+Opera Mobi.+Version|Mobile.+OPR)/(\d+[.\d]+)' => [
            'name'=>'Opera',
            'version'=>'$1',
            'category'=>'browser'
        ],

        '(?:OPT)/(\d+[.\d]+)' => [
            'name'=>'Opera Touch',
            'version'=>'$1',
            'category'=>'browser'
        ],

        'Opera/(\d+[.\d]+).+Opera Mobi' => [
            'name'=>'Opera',
            'version'=>'$1',
            'category'=>'browser'
        ],

        'Opera ?Mini/(?:att/)?(\d+[.\d]+)' => [
            'name'=>'Opera Mini',
            'version'=>'$1',
            'category'=>'browser'
        ],

        'Opera ?Mini.+Version/(\d+[.\d]+)' => [
            'name'=>'Opera Mini',
            'version'=>'$1',
            'category'=>'browser'
        ],

        'Opera.+Edition Next.+Version/(\d+[.\d]+)' => [
            'name'=>'Opera Next',
            'version'=>'$1',
            'category'=>'browser'
        ],

        '(?:Opera|OPR)[/ ](?:9.80.*Version/)?(\d+[.\d]+).+Edition Next' => [
            'name'=>'Opera Next',
            'version'=>'$1',
            'category'=>'browser'
        ],

        '(?:Opera[/ ]?|OPR[/ ])(?:9.80.*Version/)?(\d+[.\d]+)' => [
            'name'=>'Opera',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Rekonq
        'rekonq(?:/(\d+[.\d]+))?' => [
            'name'=>'Rekonq',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // CoolNovo (former ChromePlus)
        'CoolNovo(?:/(\d+[.\d]+))?' => [
            'name'=>'CoolNovo',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Comodo Dragon
        'Comodo[ _]Dragon(?:/(\d+[.\d]+))?' => [
            'name'=>'Comodo Dragon',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // ChromePlus
        'ChromePlus(?:/(\d+[.\d]+))?' => [
            'name'=>'ChromePlus',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Conkeror
        'Conkeror(?:/(\d+[.\d]+))?' => [
            'name'=>'Conkeror',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Konqueror
        'Konqueror(?:/(\d+[.\d]+))?' => [
            'name'=>'Konqueror',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Yandex Browser
        'YaBrowser(?:/(\d+[.\d]*))?' => [
            'name'=>'Yandex Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Vivaldi
        'Vivaldi(?:/(\d+[.\d]+))?' => [
            'name'=>'Vivaldi',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // TweakStyle
        'TweakStyle(?:/(\d+[.\d]+))?' => [
            'name'=>'TweakStyle',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Midori
        'Midori(?:/(\d+[.\d]+))?' => [
            'name'=>'Midori',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Mercury
        'Mercury(?:/(\d+[.\d]+))?' => [
            'name'=>'Mercury',
            'version'=>'$1',
            'category'=>'browser'
        ],
        
        // Puffin
        'Puffin(?:/(\d+[.\d]+))?' => [
            'name'=>'Puffin',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Iron
        'Iron(?:/(\d+[.\d]+))?' => [
            'name'=>'Iron',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // GNOME Web
        'Epiphany(?:/(\d+[.\d]+))?' => [
            'name'=>'GNOME Web',
            'version'=>'$1',
            'category'=>'browser'
        ],

        
        // Coc Coc
        // This browser (http:
        // coccoc.vn/) is built on top of Chromium with
        // additional features for Vietnamese users. Its regex has to be placed
        // before generic Chrome regex, or Chrome regex will match first and
        // the browser is mistaken as "Chrome".
        'coc_coc_browser(?:/(\d+[.\d]+))?' => [
            'name'=>'Coc Coc',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Samsung Browser
        'Samsung ?Browser(?:[/ ](\d+[.\d]+))?' => [
            'name'=>'Samsung Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Streamy
        // This browser is built on top of Chromium.
        // It should be checked first.
        'Streamy(?:/(\d+[.\d]+))?' => [
            'name'=>'Streamy',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Isivioo
        // Andorid version of the browser is built on top of Chrome Mobile.
        // It should be checked first.
        'isivioo' => [
            'name'=>'Isivioo',
            'version'=>'',
            'category'=>'browser'
        ],

        // Tenta Browser
        // It should be checked before Chrome since the UA contains the Chrome
        'Tenta/(\d+[.\d]+)' => [
            'name'=>'Tenta Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Chrome Mobile
        'CrMo(?:/(\d+[.\d]+))?' => [
            'name'=>'Chrome',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Chrome Mobile iOS
        'CriOS(?:/(\d+[.\d]+))?' => [
            'name'=>'Chrome',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Chrome Mobile
        'Chrome(?:/(\d+[.\d]+))? Mobile' => [
            'name'=>'Chrome',
            'version'=>'$1',
            'category'=>'browser'
        ],

        'chromeframe(?:/(\d+[.\d]+))?' => [
            'name'=>'Chrome Frame',
            'version'=>'$1',
            'category'=>'browser'
        ],

        'Chromium(?:/(\d+[.\d]+))?' => [
            'name'=>'Chromium',
            'version'=>'$1',
            'category'=>'browser'
        ],

        'HeadlessChrome(?:/(\d+[.\d]+))?' => [
            'name'=>'Headless Chrome',
            'version'=>'$1',
            'category'=>'browser'
        ],

        'Chrome(?:/(\d+[.\d]+))?' => [
            'name'=>'Chrome',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Tizen Browser
        '(?:Tizen|SLP) Browser(?:/(\d+[.\d]+))?' => [
            'name'=>'Tizen Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Palm Blazer
        'Blazer(?:/(\d+[.\d]+))?' => [
            'name'=>'Palm Blazer',
            'version'=>'$1',
            'category'=>'browser'
        ],

        'Pre/(\d+[.\d]+)' => [
            'name'=>'Palm Pre',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // wOSBrowser
        '(?:hpw|web)OS/(\d+[.\d]+)' => [
            'name'=>'wOSBrowser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Palm WebPro
        'WebPro(?:[ /](\d+[.\d]+))?' => [
            'name'=>'Palm WebPro',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Palmscape
        'Palmscape(?:[ /](\d+[.\d]+))?' => [
            'name'=>'Palmscape',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Jasmine
        'Jasmine(?:[ /](\d+[.\d]+))?' => [
            'name'=>'Jasmine',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Lynx
        'Lynx(?:/(\d+[.\d]+))?' => [
            'name'=>'Lynx',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // NCSA Mosaic
        'NCSA_Mosaic(?:/(\d+[.\d]+))?' => [
            'name'=>'NCSA Mosaic',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // ABrowse
        'ABrowse(?: (\d+[.\d]+))?' => [
            'name'=>'ABrowse',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Amaya
        'amaya(?:/(\d+[.\d]+))?' => [
            'name'=>'Amaya',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Amiga Voyager
        'AmigaVoyager(?:/(\d+[.\d]+))?' => [
            'name'=>'Amiga Voyager',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Amiga Aweb
        'Amiga-Aweb(?:/(\d+[.\d]+))?' => [
            'name'=>'Amiga Aweb',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Arora
        'Arora(?:/(\d+[.\d]+))?' => [
            'name'=>'Arora',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Beonex
        'Beonex(?:/(\d+[.\d]+))?' => [
            'name'=>'Beonex',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // B-Line
        'bline(?:/(\d+[.\d]+))?' => [
            'name'=>'B-Line',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // BrowseX
        'BrowseX \((\d+[.\d]+)' => [
            'name'=>'BrowseX',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Charon
        'Charon(?:[/ ](\d+[.\d]+))?' => [
            'name'=>'Charon',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Cheshire
        'Cheshire(?:/(\d+[.\d]+))?' => [
            'name'=>'Cheshire',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // dbrowser
        'dbrowser' => [
            'name'=>'dbrowser',
            'version'=>'',
            'category'=>'browser'
        ],

        // Dillo
        'Dillo(?:/(\d+[.\d]+))?' => [
            'name'=>'Dillo',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Dolphin
        'Dolfin(?:/(\d+[.\d]+))?|dolphin' => [
            'name'=>'Dolphin',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Elinks
        'Elinks(?:/(\d+[.\d]+))?' => [
            'name'=>'Elinks',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Element Browser
        'Element Browser(?:[ /](\d+[.\d]+))?' => [
            'name'=>'Element Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Firebird
        'Firebird(?! Build)(?:/(\d+[.\d]+))?' => [
            'name'=>'Firebird',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Fluid
        'Fluid(?:/(\d+[.\d]+))?' => [
            'name'=>'Fluid',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Galeon
        'Galeon(?:/(\d+[.\d]+))?' => [
            'name'=>'Galeon',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Google Earth
        'Google Earth(?:/(\d+[.\d]+))?' => [
            'name'=>'Google Earth',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // HotJava
        'HotJava(?:/(\d+[.\d]+))?' => [
            'name'=>'HotJava',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // IBrowse
        'IBrowse(?:[ /](\d+[.\d]+))?' => [
            'name'=>'IBrowse',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // iCabMobile
        'iCabMobile(?:[ /](\d+[.\d]+))?' => [
            'name'=>'iCab Mobile',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // iCab
        'iCab(?:[ /](\d+[.\d]+))?' => [
            'name'=>'iCab',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Sleipnir
        'Sleipnir(?:[ /](\d+[.\d]+))?' => [
            'name'=>'Sleipnir',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Lunascape
        'Lunascape(?:[/ ](\d+[.\d]+))?' => [
            'name'=>'Lunascape',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Internet Explorer
        'IEMobile[ /](\d+[.\d]+)' => [
            'name'=>'IE Mobile',
            'version'=>'$1',
            'category'=>'browser'
        ],

        'MSIE (\d+[.\d]+).*XBLWP7' => [
            'name'=>'IE Mobile',
            'version'=>'$1',
            'category'=>'browser'
        ],

        'MSIE.*Trident/4.0' => [
            'name'=>'Internet Explorer',
            'version'=>8.0,
            'category'=>'browser'
        ],

        'MSIE.*Trident/5.0' => [
            'name'=>'Internet Explorer',
            'version'=>9.0,
            'category'=>'browser'
        ],

        'MSIE.*Trident/6.0' => [
            'name'=>'Internet Explorer',
            'version'=>10.0,
            'category'=>'browser'
        ],

        'Trident/7.0' => [
            'name'=>'Internet Explorer',
            'version'=>11.0,
            'category'=>'browser'
        ],

        'MSIE (\d+[.\d]+)' => [
            'name'=>'Internet Explorer',
            'version'=>'$1',
            'category'=>'browser'
        ],

        'IE[ /](\d+[.\d]+)' => [
            'name'=>'Internet Explorer',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Kazehakase
        'Kazehakase(?:/(\d+[.\d]+))?' => [
            'name'=>'Kazehakase',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Kindle Browser
        'Kindle/(\d+[.\d]+)' => [
            'name'=>'Kindle Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // K-meleon
        'K-meleon(?:/(\d+[.\d]+))?' => [
            'name'=>'K-meleon',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Links
        'Links(?: \((\d+[.\d]+))?' => [
            'name'=>'Links',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // LG Browser
        'LG Browser(?:/(\d+[.\d]+))' => [
            'name'=>'LG Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // LuaKit
        'LuaKit(?:/(\d+[.\d]+))?' => [
            'name'=>'LuaKit',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Openwave Mobile Browser
        'UP.Browser(?:/(\d+[.\d]+))?' => [
            'name'=>'Openwave Mobile Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        'Openwave(?:/(\d+[.\d]+))?' => [
            'name'=>'Openwave Mobile Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // OmniWeb
        'OmniWeb(?:/[v]?(\d+[.\d]+))?' => [
            'name'=>'OmniWeb',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Phoenix
        'Phoenix(?:/(\d+[.\d]+))?' => [
            'name'=>'Phoenix',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Mobile Silk
        'Silk(?:/(\d+[.\d]+))?' => [
            'name'=>'Mobile Silk',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // NetFront
        'NetFrontLifeBrowser(?:/(\d+[.\d]+))?' => [
            'name'=>'NetFront Life',
            'version'=>'$1',
            'category'=>'browser'
        ],

        'NetFront(?:/(\d+[.\d]+))?' => [
            'name'=>'NetFront',
            'version'=>'$1',
            'category'=>'browser'
        ],

        'PLAYSTATION|NINTENDO 3|AppleWebKit.+ NX/\d+\.\d+\.\d+' => [
            'name'=>'NetFront',
            'version'=>'',
            'category'=>'browser'
        ],

        // NetPositive
        'NetPositive(?:/(\d+[.\d]+))?' => [
            'name'=>'NetPositive',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // NTENT Browser
        'NTENTBrowser(?:/(\d+[.\d]+))?' => [
            'name'=>'NTENT Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Obigo
        'Obigo[ ]?(?:InternetBrowser|Browser)?(?:[ /]([a-z0-9]*))?' => [
            'name'=>'Obigo',
            'version'=>'$1',
            'category'=>'browser'
        ],

        'Obigo|Teleca' => [
            'name'=>'Obigo',
            'version'=>'',
            'category'=>'browser'
        ],

        // Odyssey Web Browser
        'Odyssey Web Browser(?:.*OWB/(\d+[.\d]+))?' => [
            'name'=>'Odyssey Web Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Off By One
        'OffByOne' => [
            'name'=>'Off By One',
            'version'=>'',
            'category'=>'browser'
        ],

        // ONE Browser
        'OneBrowser(?:[ /](\d+[.\d]+))?' => [
            'name'=>'ONE Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Oregano
        'Oregano(?:[ /](\d+[.\d]+))?' => [
            'name'=>'Oregano',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Otter Browser
        'Otter(?:[ /](\d+[.\d]+))?' => [
            'name'=>'Otter Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Polaris
        '(?:Polaris|Embider)(?:[/ ](\d+[.\d]+))?' => [
            'name'=>'Polaris',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // SEMC Browser
        'SEMC-Browser(?:[/ ](\d+[.\d]+))?' => [
            'name'=>'SEMC-Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Seraphic Sraf
        'Sraf(?:[/ ](\d+[.\d]+))?' => [
            'name'=>'Seraphic Sraf',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Shiira
        'Shiira(?:[/ ](\d+[.\d]+))?' => [
            'name'=>'Shiira',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Skyfire
        'Skyfire(?:[/ ](\d+[.\d]+))?' => [
            'name'=>'Skyfire',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Snowshoe
        'Snowshoe(?:/(\d+[.\d]+))?' => [
            'name'=>'Snowshoe',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Sunrise
        'Sunrise(?:Browser)?(?:/(\d+[.\d]+))?' => [
            'name'=>'Sunrise',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // SuperBird
        'SuperBird(?:/(\d+[.\d]+))?' => [
            'name'=>'SuperBird',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Vision Mobile Browser
        'Vision-Browser(?:/(\d+[.\d]+))' => [
            'name'=>'Vision Mobile Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // WeTab Browser
        'WeTab-Browser' => [
            'name'=>'WeTab Browser',
            'version'=>'',
            'category'=>'browser'
        ],

        // Xiino
        'Xiino(?:/(\d+[.\d]+))?' => [
            'name'=>'Xiino',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Nokia Browser
        '(?:NokiaBrowser|BrowserNG)(?:/(\d+[.\d]+))?' => [
            'name'=>'Nokia Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        'Series60/5\.0' => [
            'name'=>'Nokia Browser',
            'version'=>'7.0',
            'category'=>'browser'
        ],

        'Series60/(\d+[.\d]+)' => [
            'name'=>'Nokia OSS Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        'S40OviBrowser/(\d+[.\d]+)' => [
            'name'=>'Nokia Ovi Browser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        '^Nokia|Nokia[EN]?\d+' => [
            'name'=>'Nokia Browser',
            'version'=>'',
            'category'=>'browser'
        ],

        // BlackBerry Browser
        'BlackBerry|PlayBook|BB10' => [
            'name'=>'BlackBerry Browser',
            'version'=>'',
            'category'=>'browser'
        ],

        // BriskBard
        'BriskBard(?:/(\d+[.\d]+))?' => [
            'name'=>'BriskBard',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Android Browser
        'Android' => [
            'name'=>'Android Browser',
            'version'=>'',
            'category'=>'browser'
        ],

        // Coast
        'Coast(?:/(\d+[.\d]+))?' => [
            'name'=>'Coast',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Qutebrowser
        'qutebrowser(?:/(\d+[.\d]+))?' => [
            'name'=>'Qutebrowser',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Safari
        '(?:(?:iPod|iPad|iPhone).+Version|MobileSafari)/(\d+[.\d]+)' => [
            'name'=>'Mobile Safari',
            'version'=>'$1',
            'category'=>'browser'
        ],

        '(?:Version/(\d+[.\d]+).*)?Mobile.*Safari/' => [
            'name'=>'Mobile Safari',
            'version'=>'$1',
            'category'=>'browser'
        ],

        '(?:iPod|iPhone|iPad)' => [
            'name'=>'Mobile Safari',
            'version'=>'',
            'category'=>'browser'
        ],

        'Version/(\d+[.\d]+).*Safari/|Safari/\d+' => [
            'name'=>'Safari',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // Dorado
        'Dorado WAP-Browser[/ ](\d+[.\d]+)' => [
            'name'=>'Dorado',
            'version'=>'$1',
            'category'=>'browser'
        ],

        // NetSurf
        'NetSurf(?:/(\d+[.\d]+))?' => [
            'name'=>'NetSurf',
            'version'=>'$1',
            'category'=>'browser'
        ],
    ];
}