<?php
namespace Aknife\Agent\Rules;

class Platform
{
    // 规则来源于 : https://github.com/matomo-org/device-detector/blob/master/regexes/oss.yml
    public static $rule = [
        ##########
        # Bliss OS (https://blissos.org/)
        ##########
        'Android 10.+bliss_maple' => [
            'name' => 'Bliss OS',
            'version' => '12'
        ],

        ##########
        # TencentOS (https://github.com/Tencent/TencentOS-kernel)
        ##########
        'Linux/(\d+[\.\d]*).+tlinux' => [
            'name' => 'TencentOS',
            'version' => '$1'
        ],

        ##########
        # Amazon Linux (https://docs.aws.amazon.com/AL2/latest/relnotes/relnotes-al2.html)
        ##########
        '.+.amzn(\d).x86_64' => [
            'name' => 'Amazon Linux',
            'version' => '$1'
        ],

        ##########
        # COS (China Operating System - https://web.archive.org/web/20170825001023/http://www.china-cos.com/)
        ##########
        ' COS like Android' => [
            'name' => 'China OS',
            'version' => ''
        ],

        ##########
        # ClearOS Mobile (https://www.clearos.com/products/clearos-editions/clearos-mobile)
        ##########
        'Android (\d+[\.\d]*); ClearPHONE' => [
            'name' => 'ClearOS Mobile',
            'version' => '$1'
        ],

        ##########
        # Plasma Mobile (https://plasma-mobile.org/)
        ##########
        'Plasma Mobile' => [
            'name' => 'Plasma Mobile',
            'version' => ''
        ],

        ##########
        # KreaTV
        ##########
        'KreaTV/0.0.0.0' => [
            'name' => 'KreaTV',
            'version' => ''
        ],

        'KreaTV/(\d+[\.\d]+)' => [
            'name' => 'KreaTV',
            'version' => '$1'
        ],

        ##########
        # Opera TV (https://blogs.opera.com/news/2016/01/ces-2016-meet-opera-tv/)
        ##########
        'Linux (?:[^;]+); Opera TV(?: Store)?/|^Opera/\d+\.\d+ \(Linux mips' => [
            'name' => 'Opera TV',
            'version' => ''
        ],

        ##########
        # GridOS (https://web.archive.org/web/20111123141630/http://fusiongarage.com/grid-os/about)
        ##########
        'Grid OS (\d+[\.\d]+)' => [
            'name' => 'GridOS',
            'version' => '$1'
        ],

        ##########
        # Caixa Mágica (https://caixamagica.pt/)
        ##########
        'CaixaMagica' => [
            'name' => 'Caixa Mágica',
            'version' => ''
        ],

        ##########
        # Mageia (https://www.mageia.org/en/)
        ##########
        'Mageia; Linux' => [
            'name' => 'Mageia',
            'version' => ''
        ],

        ##########
        # Whale OS (https://www.zeasn.com/)
        ##########
        '(?:WH|WhaleTV/)(\d+[\.\d]+)' => [
            'name' => 'Whale OS',
            'version' => '$1'
        ],

        ##########
        # Tizen
        ##########
        'Tizen[ /]?(\d+[\.\d]+)?' => [
            'name' => 'Tizen',
            'version' => '$1'
        ],


        ##########
        # YunOS (Android based)
        ##########
        '(?:Ali)?YunOS[ /]?(\d+[\.\d]+)?' => [
            'name' => 'YunOS',
            'version' => '$1'
        ],

        ##########
        # Windows Mobile
        ##########
        'Windows Phone;FBSV/(\d+[\.\d]+)' => [
            'name' => 'Windows Phone',
            'version' => '$1'
        ],

        '(?:Windows Phone (?:OS)?|wds)[ /]?(\d+[\.\d]+)' => [
            'name' => 'Windows Phone',
            'version' => '$1'
        ],

        'XBLWP7|Windows Phone' => [
            'name' => 'Windows Phone',
            'version' => ''
        ],

        'Windows CE(?: (\d+[\.\d]+))?' => [
            'name' => 'Windows CE',
            'version' => '$1'
        ],

        '(?:IEMobile|Windows ?Mobile)(?: (\d+[\.\d]+))?' => [
            'name' => 'Windows Mobile',
            'version' => '$1'
        ],

        'Windows NT 6.2; ARM;' => [
            'name' => 'Windows RT',
            'version' => ''
        ],

        'Windows NT 6.3; ARM;' => [
            'name' => 'Windows RT',
            'version' => '8.1'
        ],

        ##########
        # Windows IoT
        ##########
        'Windows IoT 10.0' => [
            'name' => 'Windows IoT',
            'version' => '10'
        ],

        ##########
        # KaiOS
        ##########
        'KAIOS(?:/(\d+[\.\d]+))?' => [
            'name' => 'KaiOS',
            'version' => '$1'
        ],

        ##########
        # Custom Android Roms
        ##########
        'HarmonyOS(?:[/ ](\d+[\.\d]+))?' => [
            'name' => 'HarmonyOS',
            'version' => '$1'
        ],

        'RazoDroiD(?: v(\d+[\.\d]*))?' => [
            'name' => 'RazoDroiD',
            'version' => '$1'
        ],

        'MildWild(?: CM-(\d+[\.\d]*))?' => [
            'name' => 'MildWild',
            'version' => '$1'
        ],

        'CyanogenMod(?:[\-/](?:CM)?(\d+[\.\d]*))?' => [
            'name' => 'CyanogenMod',
            'version' => '$1'
        ],

        '(?:.*_)?MocorDroid(?:(\d+[\.\d]*))?' => [
            'name' => 'MocorDroid',
            'version' => '$1'
        ],

        'Fire OS(?:/(\d+[\.\d]*))?' => [
            'name' => 'Fire OS',
            'version' => '$1'
        ],

        '.+FIRETVSTICK2018' => [
            'name' => 'Fire OS',
            'version' => '6'
        ],

        'AFTSO001' => [
            'name' => 'Fire OS',
            'version' => '7'
        ],

        'FydeOS' => [
            'name' => 'FydeOS',
            'version' => ''
        ],

        ##########
        # Remix OS
        ##########
        'RemixOS|Remix (?:Pro|Mini)' => [
            'name' => 'Remix OS',
            'sub'=>[
                'RemixOS 5' => [
                    'version' =>  '1'
                ],
                'RemixOS 6|Remix Mini' => [
                    'version' =>  '2'
                ],
                'Remix Pro' => [
                    'version' =>  '3'
                ],
            ]
        ],

        ##########
        # FreeBSD
        ##########
        'FreeBSD.+Android' => [
            'name' => 'FreeBSD',
            'version' => ''
        ],

        ##########
        # Android TV (https://android.com/tv/)
        ##########
        'Linux; Andr0id[; ](\d+[\.\d]*)' => [
            'name' => 'Android TV',
            'version' => '$1'
        ],

        'Android[; ](\d+[\.\d]*).+Android TV' => [
            'name' => 'Android TV',
            'version' => '$1'
        ],

        ##########
        # Android SDK Level Api
        ##########
        '\d+/tclwebkit(?:\d+[\.\d]*)' => [
            'name' => 'Android',
            'sub'=>[
                '33/tclwebkit' => [
                    'version' =>  '13'
                ],
                '3[12]/tclwebkit' => [
                    'version' =>  '12'
                ],
                '30/tclwebkit' => [
                    'version' =>  '11'
                ],
                '29/tclwebkit' => [
                    'version' =>  '10'
                ],
                '28/tclwebkit' => [
                    'version' =>  '9'
                ],
                '27/tclwebkit' => [
                    'version' =>  '8.1'
                ],
                '26/tclwebkit' => [
                    'version' =>  '8'
                ],
                '25/tclwebkit' => [
                    'version' =>  '7.1'
                ],
                '24/tclwebkit' => [
                    'version' =>  '7'
                ],
                '23/tclwebkit' => [
                    'version' =>  '6'
                ],
                '22/tclwebkit' => [
                    'version' =>  '5.1'
                ],
                '21/tclwebkit' => [
                    'version' =>  '5'
                ],
                '(?:20|19)/tclwebkit' => [
                    'version' =>  '4.4'
                ],
                '18/tclwebkit' => [
                    'version' =>  '4.3'
                ],
                '17/tclwebkit' => [
                    'version' =>  '4.2'
                ],
                '16/tclwebkit' => [
                    'version' =>  '4.2'
                ],
                '15/tclwebkit' => [
                    'version' =>  '4.0.3'
                ],
                '15/tclwebkit' => [
                    'version' =>  '4.0.1'
                ],
            ]
        ],

        ##########
        # Android
        ##########
        'Android Marshmallow' => [
            'name' => 'Android',
            'version' => '6'
        ],

        '(?:Podbean|Podimo)(?:.*)/Android' => [
            'name' => 'Android',
            'version' => ''
        ],

        'Android OS/(\d+[\.\d]*)' => [
            'name' => 'Android',
            'version' => '$1'
        ],

        'Pinterest for Android/.*; (\d(?:[\d\.]*))\)$' => [
            'name' => 'Android',
            'version' => '$1'
        ],

        'Android; (\d+[\.\d]*); Mobile;' => [
            'name' => 'Android',
            'version' => '$1'
        ],

        '[ ]([\d\.]+)\) AppleWebKit.*ROBLOX Android App' => [
            'name' => 'Android',
            'version' => '$1'
        ],

        '(?:(?:Orca-)?(?<!like )Android|Adr|AOSP)[ /]?(?:[a-z]+ )?(\d+[\.\d]*)' => [
            'name' => 'Android',
            'version' => '$1'
        ],

        '(?:Allview_TX1_Quasar|Cosmote_My_mini_Tab) (\d+[\.\d]*)' => [
            'name' => 'Android',
            'version' => '$1'
        ],

        'Android ?(?:jelly bean|Kit Kat|S.O. Ginger Bread|The FireCyano|:) (\d+[\.\d]*)' => [
            'name' => 'Android',
            'version' => '$1'
        ],

        '(?:Orca-Android|FB4A).*FBSV/(\d+[\.\d]*);' => [
            'name' => 'Android',
            'version' => '$1'
        ],

        ' Adr |(?<!like )Android|Silk-Accelerated=[a-z]{4,5}' => [
            'name' => 'Android',
            'version' => ''
        ],

        '(?:TwitterAndroid).*[ /](?:[a-z]+ )?(\d+[\.\d]*)' => [
            'name' => 'Android',
            'version' => '$1'
        ],

        'BeyondPod|AntennaPod|Podkicker|DoggCatcher|Player FM|okhttp|Podcatcher Deluxe|.+K_?Android_?TV_|Sonos/.+\(ACR_' => [
            'name' => 'Android',
            'version' => ''
        ],

        # Inverted Android
        'Linux; diordnA[; ](\d+[\.\d]*)' => [
            'name' => 'Android',
            'version' => '$1'
        ],

        '^A/(\d+[\.\d]*)/' => [
            'name' => 'Android',
            'version' => '$1'
        ],

        ##########
        ## Sailfish OS
        ###########
        'Sailfish|Jolla' => [
            'name' => 'Sailfish OS',
            'version' => ''
        ],

        ##########
        # AmigaOS
        ##########
        'AmigaOS[ ]?(\d+[\.\d]+)' => [
            'name' => 'AmigaOS',
            'version' => '$1'
        ],

        'AmigaOS|AmigaVoyager|Amiga-AWeb' => [
            'name' => 'AmigaOS',
            'version' => ''
        ],

        ##########
        # ThreadX
        ##########
        'ThreadX(?:/(\d+[\.\d]*))?' => [
            'name' => 'ThreadX',
            'version' => '$1'
        ],

        ##########
        # MTK / Nucleus
        ##########
        'Nucleus(?:(?: |/v?)(\d+[\.\d]*))?' => [
            'name' => 'MTK / Nucleus',
            'version' => '$1'
        ],

        'MTK(?:(?: |/v?)(\d+[\.\d]*))?' => [
            'name' => 'MTK / Nucleus',
            'version' => '$1'
        ],

        ##########
        # MRE / MAUI Runtime Environment
        ##########
        'MRE/(\d+)\.(\d+).*;MAUI' => [
            'name' => 'MRE',
            'version' => '$1.$2'
        ],

        ##########
        # Linux
        ##########
        # Linspire (https://www.linspirelinux.com/)
        'Linspire' => [
            'name' => 'Linspire',
            'version' => ''
        ],

        # LindowsOS (https://web.archive.org/web/20040304161245/http://www.lindows.com/)
        'LindowsOS' => [
            'name' => 'LindowsOS',
            'version' => ''
        ],

        # Zenwalk (http://www.zenwalk.org/)
        'Zenwalk GNU Linux' => [
            'name' => 'Zenwalk',
            'version' => ''
        ],

        # Kanotix (http://www.kanotix.com/)
        'Linux.+kanotix' => [
            'name' => 'Kanotix',
            'version' => ''
        ],

        # moonOS (https://www.moonos.org/)
        'moonOS/(\d+.[\d.]+)' => [
            'name' => 'moonOS',
            'version' => '$1'
        ],

        # Foresight Linux (https://www.foresightlinux.org/)
        'Foresight Linux' => [
            'name' => 'Foresight Linux',
            'version' => ''
        ],

        # Pardus (https://www.pardus.org.tr/)
        'Pardus/(\d+.[\d.]+)' => [
            'name' => 'Pardus',
            'version' => '$1'
        ],

        # Pure OS (https://pureos.net/)
        'Librem 5' => [
            'name' => 'PureOS',
            'version' => ''
        ],

        # OpenWrt (https://openwrt.org/)
        'uclient-fetch' => [
            'name' => 'OpenWrt',
            'version' => ''
        ],

        # Roku OS (https://www.roku.com/how-it-works/roku-os)
        'RokuOS/.+RokuOS (\d+.[\d.]+)' => [
            'name' => 'Roku OS',
            'version' => '$1'
        ],

        'Roku(?:OS)?/(?:DVP|Pluto)?-?(\d+[\.\d]+)?' => [
            'name' => 'Roku OS',
            'version' => '$1'
        ],

        'Roku; (?:AP|UI); (\d+[\.\d]+)' => [
            'name' => 'Roku OS',
            'version' => '$1'
        ],

        # DVKBuntu (https://www.dvkbuntu.org/)
        'dvkbuntu' => [
            'name' => 'DVKBuntu',
            'version' => ''
        ],

        # Lumin OS (https://developer.magicleap.com/en-us/learn/guides/lumin-os-release-notes-summary)
        'Helio/(\d+[\.\d]+)' => [
            'name' => 'Lumin OS',
            'version' => '$1'
        ],

        # HasCodingOS (https://forum.hascoding.com/HasCodingOS)
        'HasCodingOs (\d+[\.\d]+)' => [
            'name' => 'HasCodingOS',
            'version' => '$1'
        ],

        # PCLinuxOS (https://www.pclinuxos.com/)
        'PCLinuxOS/(\d+[\.\d]+)|.+pc-linux-gnu' => [
            'name' => 'PCLinuxOS',
            'version' => '$1'
        ],

        '(Ordissimo|webissimo3)' => [
            'name' => 'Ordissimo',
            'version' => ''
        ],

        # Fenix (https://fenixlinux.com/)
        '(?:Win|Sistema )Fenix' => [
            'name' => 'Fenix',
            'version' => ''
        ],

        'TOS; Linux' => [
            'name' => 'TmaxOS',
            'version' => ''
        ],

        'Maemo' => [
            'name' => 'Maemo',
            'version' => ''
        ],

        'Arch ?Linux(?:[ /\-](\d+[\.\d]+))?' => [
            'name' => 'Arch Linux',
            'version' => '$1'
        ],

        'VectorLinux(?: package)?(?:[ /\-](\d+[\.\d]+))?' => [
            'name' => 'VectorLinux',
            'version' => '$1'
        ],

        'CentOS Stream (\d)' => [
            'name' => 'CentOS Stream',
            'version' => '$1'
        ],

        '.+.el(\d+(?:[_\.]\d+)*).(?:centos|x86_64)' => [
            'name' => 'CentOS',
            'version' => '$1'
        ],

        'CentOS Linux (\d)' => [
            'name' => 'CentOS',
            'version' => '$1'
        ],

        'Linux; .*((?:Debian|Knoppix|Mint|Ubuntu|Kubuntu|Xubuntu|Lubuntu|Fedora|Red Hat|Mandriva|Gentoo|Sabayon|Slackware|SUSE|CentOS|BackTrack))[ /](\d+[\.\d]+)' => [
            'name' => '$1',
            'version' => '$2'
        ],

        'Deepin[ /](\d+[\.\d]+)' => [
            'name' => 'Deepin',
            'version' => '$1'
        ],

        '(Debian|Knoppix|Mint(?! Browser)|Ubuntu|Kubuntu|Xubuntu|Lubuntu|Fedora|Red Hat|Mandriva|Gentoo|Sabayon|Slackware|SUSE|CentOS|BackTrack|Freebox)(?:(?: Enterprise)? Linux)?(?:[ /\-](\d+[\.\d]+))?' => [
            'name' => '$1',
            'version' => '$2'
        ],

        '.+redhat-linux-gnu' => [
            'name' => 'Red Hat',
            'version' => ''
        ],

        'OS ROSA; Linux' => [
            'name' => 'Rosa',
            'version' => ''
        ],

        ##########
        # webOS
        ##########
        '(?:Web0S; .*WEBOS|webOS|web0S|Palm webOS|hpwOS)(?:[/]?(\d+[\.\d]+))?' => [
            'name' => 'webOS',
            'version' => '$1',
            'sub' => [
                'WEBOS(\d+[\.\d]+)' => [
                    'version' =>  '$1'
                ],
                'Web0S; Linux/SmartTV.+Chr[o0]me/79' => [
                    'version' =>  '6'
                ],
                'Web0S; Linux/SmartTV.+Chr[o0]me/68' => [
                    'version' =>  '5'
                ],
                'Web0S; Linux/SmartTV.+Chr[o0]me/53' => [
                    'version' =>  '4'
                ],
                'Web0S; Linux/SmartTV.+Chr[o0]me/38' => [
                    'version' =>  '3'
                ],
                'WEBOS1' => [
                    'version' =>  '1'
                ],
                'Web0S; Linux/SmartTV.+Safari/538' => [
                    'version' =>  '2'
                ],
                'Web0S; Linux/SmartTV.+Safari/537' => [
                    'version' =>  '1'
                ],
            ]
        ],

        '(?:PalmOS|Palm OS)(?:[/ ](\d+[\.\d]+))?|Palm' => [
            'name' => 'palmOS',
            'version' => '$1'
        ],

        # palmOS only browser
        'Xiino(?:.*v\. (\d+[\.\d]+))?' => [
            'name' => 'palmOS',
            'version' => '$1'
        ],

        'MorphOS(?:[ /](\d+[\.\d]+))?' => [
            'name' => 'MorphOS',
            'version' => '$1'
        ],

        ##########
        # Windows
        ##########
        'FBW.+FBSV/(\d+[\.\d]*);' => [
            'name' => 'Windows',
            'version' => '$1'
        ],

        'Windows.+OS: (\d+[\.\d]*)' => [
            'name' => 'Windows',
            'version' => '$1'
        ],

        'Windows;(\d+[\.\d]*);' => [
            'name' => 'Windows',
            'version' => '$1'
        ],

        'mingw32|winhttp' => [
            'name' => 'Windows',
            'version' => ''
        ],

        '(?:Windows(?:-Update-Agent)?|Microsoft-(?:CryptoAPI|Delivery-Optimization|WebDAV-MiniRedir|WNS))/(\d+\.\d+)' => [
            'name' => 'Windows',
            'version' => '$1'
        ],

        'Windows 11' => [
            'name' => 'Windows',
            'version' => '11'
        ],

        'CYGWIN_NT-10.0|Windows NT 10.0|Windows 10' => [
            'name' => 'Windows',
            'version' => '10'
        ],

        'CYGWIN_NT-6.4|Windows NT 6.4|Windows 10|win10' => [
            'name' => 'Windows',
            'version' => '10'
        ],

        'CYGWIN_NT-6.3|Windows NT 6.3|Windows 8.1' => [
            'name' => 'Windows',
            'version' => '8.1'
        ],

        'CYGWIN_NT-6.2|Windows NT 6.2|Windows 8' => [
            'name' => 'Windows',
            'version' => '8'
        ],

        'CYGWIN_NT-6.1|Windows NT 6.1|Windows 7|win7|Windows \(6.1' => [
            'name' => 'Windows',
            'version' => '7'
        ],

        'CYGWIN_NT-6.0|Windows NT 6.0|Windows Vista' => [
            'name' => 'Windows',
            'version' => 'Vista'
        ],

        'CYGWIN_NT-5.2|Windows NT 5.2|Windows Server 2003 / XP x64' => [
            'name' => 'Windows',
            'version' => 'Server 2003'
        ],

        'CYGWIN_NT-5.1|Windows NT 5.1|Windows XP' => [
            'name' => 'Windows',
            'version' => 'XP'
        ],

        'CYGWIN_NT-5.0|Windows NT 5.0|Windows 2000' => [
            'name' => 'Windows',
            'version' => '2000'
        ],

        'CYGWIN_NT-4.0|Windows NT 4.0|WinNT|Windows NT' => [
            'name' => 'Windows',
            'version' => 'NT'
        ],

        'CYGWIN_ME-4.90|Win 9x 4.90|Windows ME' => [
            'name' => 'Windows',
            'version' => 'ME'
        ],

        'CYGWIN_98-4.10|Win98|Windows 98' => [
            'name' => 'Windows',
            'version' => '98'
        ],

        'CYGWIN_95-4.0|Win32|Win95|Windows 95|Windows_95' => [
            'name' => 'Windows',
            'version' => '95'
        ],

        'Windows 3.1' => [
            'name' => 'Windows',
            'version' => '3.1'
        ],

        'Windows|.+win32|Win64|MSDW|HandBrake Win Upd|Microsoft BITS' => [
            'name' => 'Windows',
            'version' => ''
        ],

        ##########
        # Haiku OS
        ##########
        'Haiku' => [
            'name' => 'Haiku OS',
            'version' => ''
        ],

        ##########
        # tvOS (https://developer.apple.com/tvos/)
        ##########
        'Apple ?TV.*CPU (?:iPhone )?OS ((?:9|1[0-5])[_\.]\d+(?:[_.]\d+)*)' => [
            'name' => 'tvOS',
            'version' => '$1'
        ],

        'iOS(?:; |/)((?:9|1[0-5]).\d+(?:[_\.]\d+)*) (?:model/)?AppleTV' => [
            'name' => 'tvOS',
            'version' => '$1'
        ],

        ##########
        # watchOS (https://developer.apple.com/watchos/)
        ##########
        '(?:Watch1,[12]/|Watch OS,|watchOS[ /])(\d+[\.\d]*)' => [
            'name' => 'watchOS',
            'version' => '$1'
        ],

        ##########
        # iPadOS (https://www.apple.com/ipados/)
        ##########
        'FBMD/iPad;.*FBSV/ ?(1[345]).(\d+[\.\d]*);' => [
            'name' => 'iPadOS',
            'version' => '$1.$2'
        ],

        'iPad/(1[345]).(\d+[\.\d]*)' => [
            'name' => 'iPadOS',
            'version' => '$1.$2'
        ],

        '^iPad(?:\d+[\,\d]*)/(1[345]).(\d+[\.\d]*)' => [
            'name' => 'iPadOS',
            'version' => '$1.$2'
        ],

        'iPad(?:; iOS|.+CPU OS) ((1[345])+(?:[_\.]\d+)*)' => [
            'name' => 'iPadOS',
            'version' => '$1'
        ],

        'iOS/(1[345]).(\d+[\.\d]*).+Apple/iPad' => [
            'name' => 'iPadOS',
            'version' => '$1.$2'
        ],

        'iPhone OS,(1[345]).(\d+[\.\d]*).+iPad' => [
            'name' => 'iPadOS',
            'version' => '$1.$2'
        ],

        ##########
        # iOS
        ##########
        'iPad/([89]|1[012]).(\d+[\.\d]*)' => [
            'name' => 'iOS',
            'version' => '$1.$2'
        ],

        '^(?:iPad|iPhone)(?:\d+[\,\d]*)[/_](\d+[\.\d]+)' => [
            'name' => 'iOS',
            'version' => '$1'
        ],

        'Pinterest for iOS/.*; (\d(?:[\d\.]*))[)]$' => [
            'name' => 'iOS',
            'version' => '$1'
        ],

        '(?:iPhone ?OS|iOS(?: Version)?)(?:/|; |,)(\d+[\.\d]+)' => [
            'name' => 'iOS',
            'version' => '$1'
        ],

        '^(?!com.apple.Safari.SearchHelper).*CFNetwork/.+ Darwin/(\d+[\.\d]+)(?!.*(?:x86_64|i386|PowerMac|Power%20Macintosh))' => [
            'name' => 'iOS',
            'sub'=>[
                'Darwin/21.4.0' => [
                    'version' =>  '15.4'
                ],
                'Darwin/21.3.0' => [
                    'version' =>  '15.3'
                ],
                'Darwin/21.2.0' => [
                    'version' =>  '15.2'
                ],
                'Darwin/21.1.0' => [
                    'version' =>  '15.1'
                ],
                'Darwin/21.0.0' => [
                    'version' =>  '15.0'
                ],
                'Darwin/20.6.0' => [
                    'version' =>  '14.7'
                ],
                'Darwin/20.5.0' => [
                    'version' =>  '14.6'
                ],
                'Darwin/20.4.0' => [
                    'version' =>  '14.5'
                ],
                'Darwin/20.3.0' => [
                    'version' =>  '14.4'
                ],
                'Darwin/20.2.0' => [
                    'version' =>  '14.3'
                ],
                'Darwin/20.1.0' => [
                    'version' =>  '14.2'
                ],
                'Darwin/20.0.0' => [
                    'version' =>  '14.0'
                ],
                'Darwin/19.6.0' => [
                    'version' =>  '13.6'
                ],
                'Darwin/19.5.0' => [
                    'version' =>  '13.5'
                ],
                'Darwin/19.4.0' => [
                    'version' =>  '13.4'
                ],
                'Darwin/19.3.0' => [
                    'version' =>  '13.3.1'
                ],
                'Darwin/19.2.0' => [
                    'version' =>  '13.3'
                ],
                'Darwin/19.0.0' => [
                    'version' =>  '13.0'
                ],
                'Darwin/18.7.0' => [
                    'version' =>  '12.4'
                ],
                'Darwin/18.6.0' => [
                    'version' =>  '12.3'
                ],
                'Darwin/18.5.0' => [
                    'version' =>  '12.2'
                ],
                'Darwin/18.2.0' => [
                    'version' =>  '12.1'
                ],
                'Darwin/18.0.0' => [
                    'version' =>  '12.0'
                ],
                'Darwin/17.7.0' => [
                    'version' =>  '11.4.1'
                ],
                'Darwin/17.6.0' => [
                    'version' =>  '11.4'
                ],
                'Darwin/17.5.0' => [
                    'version' =>  '11.3'
                ],
                'Darwin/17.4.0' => [
                    'version' =>  '11.2.6'
                ],
                'Darwin/17.3.0' => [
                    'version' =>  '11.2'
                ],
                'CFNetwork/889' => [
                    'version' =>  '11.1'
                ],
                'CFNetwork/887' => [
                    'version' =>  '11.0'
                ],
                'CFNetwork/811' => [
                    'version' =>  '10.3'
                ],
                'CFNetwork/808\.3' => [
                    'version' =>  '10.3'
                ],
                'CFNetwork/808\.2' => [
                    'version' =>  '10.2'
                ],
                'CFNetwork/808\.1' => [
                    'version' =>  '10.1'
                ],
                'CFNetwork/808\.0' => [
                    'version' =>  '10.0'
                ],
                'CFNetwork/808' => [
                    'version' =>  '10'
                ],
                'CFNetwork/758\.5\.3' => [
                    'version' =>  '9.3.5'
                ],
                'CFNetwork/758\.4\.3' => [
                    'version' =>  '9.3.2'
                ],
                'CFNetwork/758\.3\.15' => [
                    'version' =>  '9.3'
                ],
                'CFNetwork/758\.2\.[78]' => [
                    'version' =>  '9.2'
                ],
                'CFNetwork/758\.1\.6' => [
                    'version' =>  '9.1'
                ],
                'CFNetwork/758\.0\.2' => [
                    'version' =>  '9.0'
                ],
                'CFNetwork/711\.5\.6' => [
                    'version' =>  '8.4.1'
                ],
                'CFNetwork/711\.4\.6' => [
                    'version' =>  '8.4'
                ],
                'CFNetwork/711\.3\.18' => [
                    'version' =>  '8.3'
                ],
                'CFNetwork/711\.2\.23' => [
                    'version' =>  '8.2'
                ],
                'CFNetwork/711\.1\.1[26]' => [
                    'version' =>  '8.1'
                ],
                'CFNetwork/711\.0\.6' => [
                    'version' =>  '8.0'
                ],
                'CFNetwork/672\.1' => [
                    'version' =>  '7.1'
                ],
                'CFNetwork/672\.0' => [
                    'version' =>  '7.0'
                ],
                'CFNetwork/609\.1' => [
                    'version' =>  '6.1'
                ],
                'CFNetwork/60[29]' => [
                    'version' =>  '6.0'
                ],
                'CFNetwork/548\.1' => [
                    'version' =>  '5.1'
                ],
                'CFNetwork/548\.0' => [
                    'version' =>  '5.0'
                ],
                'CFNetwork/485\.13' => [
                    'version' =>  '4.3'
                ],
                'CFNetwork/485\.12' => [
                    'version' =>  '4.2'
                ],
                'CFNetwork/485\.10' => [
                    'version' =>  '4.1'
                ],
                'CFNetwork/485\.2' => [
                    'version' =>  '4.0'
                ],
                'CFNetwork/467\.12' => [
                    'version' =>  '3.2'
                ],
                'CFNetwork/459' => [
                    'version' =>  '3.1'
                ],
            ]
        ],

        '(?:iPhone|iPod_touch)/(\d+[\.\d]*) hw/' => [
            'name' => 'iOS',
            'version' => '$1'
        ],

        'iOS(\d+\.\d+\.\d+)' => [
            'name' => 'iOS',
            'version' => '$1'
        ],

        'iOS(\d+)\.(\d+)0' => [
            'name' => 'iOS',
            'version' => '$1.$2'
        ],

        'iPhone OS ([0-9]{1})([0-9]{1})([0-9]{1})' => [
            'name' => 'iOS',
            'version' => '$1.$2.$3'
        ],

        '(?:CPU OS|iPh(?:one)?[ _]OS|iOS)[ _/](\d+(?:[_\.]\d+)*)' => [
            'name' => 'iOS',
            'version' => '$1'
        ],

        'FBMD/iPhone;.*FBSV/ ?(\d+[\.\d]+);' => [
            'name' => 'iOS',
            'version' => '$1'
        ],

        '(?:FBIOS|Messenger(?:Lite)?ForiOS).*FBSV/ ?(\d+[\.\d]*);' => [
            'name' => 'iOS',
            'version' => '$1'
        ],

        'iPhone OS,([\d\.]+).+(?:iPhone|iPod)' => [
            'name' => 'iOS',
            'version' => '$1'
        ],

        'iPad.+; (\d+[\.\d]+);' => [
            'name' => 'iOS',
            'version' => '$1'
        ],

        'iPhone.+; Version (\d+[\.\d]+)' => [
            'name' => 'iOS',
            'version' => '$1'
        ],

        'OS=iOS;OSVer=(\d+[\.\d]+);' => [
            'name' => 'iOS',
            'version' => '$1'
        ],

        'os=Apple-iOS.+osversion=(\d+[\.\d]+)/' => [
            'name' => 'iOS',
            'version' => '$1'
        ],

        '(?:Apple-)?(?<!like )(?:iPhone|iPad|iPod)(?:.*Mac OS X.*Version/(\d+\.\d+)|; Opera)?' => [
            'name' => 'iOS',
            'version' => '$1'
        ],

        'dv\(iPh.+ov\((\d+(?:[_\.]\d+)*)\);' => [
            'name' => 'iOS',
            'version' => '$1'
        ],

        '(?:Podcasts/(?:[\d\.]+)|Instacast(?:HD)?/(?:\d\.[\d\.abc]+)|Pocket Casts, iOS|\(iOS\)|iOS; Opera|Overcast|Castro|Podcat|iCatcher|RSSRadio/|MobileSafari/)(?!.*x86_64)' => [
            'name' => 'iOS',
            'version' => ''
        ],

        'iTunes-(AppleTV|iPod|iPad|iPhone)/(?:[\d\.]+)' => [
            'name' => 'iOS',
            'version' => ''
        ],

        'iOS/Version ([\d\.]+)' => [
            'name' => 'iOS',
            'version' => '$1'
        ],

        'Sonos/.+\(ICRU_' => [
            'name' => 'iOS',
            'version' => ''
        ],

        'CaptiveNetworkSupport|AirPlay' => [
            'name' => 'iOS',
            'version' => ''
        ],

        ##########
        # Mac
        ##########
        'CFNetwork/.+ Darwin/(?:[\d\.]+).+(?:x86_64|i386|Power%20Macintosh)|(?:x86_64-apple-)?darwin(?:[\d\.]+)|PowerMac|com.apple.Safari.SearchHelper' => [
            'name' => 'Mac',
            'sub'=>[
                '(?:x86_64-apple-)?Darwin/?21.4.0' => [
                    'version' =>  '12.3'
                ],
                '(?:x86_64-apple-)?Darwin/?21.3.0' => [
                    'version' =>  '12.2'
                ],
                '(?:x86_64-apple-)?Darwin/?21.2.0' => [
                    'version' =>  '12.1'
                ],
                '(?:x86_64-apple-)?Darwin/?21.1.0' => [
                    'version' =>  '12.0.1'
                ],
                '(?:x86_64-apple-)?Darwin/?21.0.0' => [
                    'version' =>  '12.0'
                ],
                '(?:x86_64-apple-)?Darwin/?20.6.0' => [
                    'version' =>  '11.5'
                ],
                '(?:x86_64-apple-)?Darwin/?20.5.0' => [
                    'version' =>  '11.4'
                ],
                '(?:x86_64-apple-)?Darwin/?20.4.0' => [
                    'version' =>  '11.3'
                ],
                '(?:x86_64-apple-)?Darwin/?20.3.0' => [
                    'version' =>  '11.2'
                ],
                '(?:x86_64-apple-)?Darwin/?20.2.0.*' => [
                    'version' =>  '11.1'
                ],
                '(?:x86_64-apple-)?Darwin/?20.[01].0' => [
                    'version' =>  '11.0'
                ],
                '(?:x86_64-apple-)?Darwin/?19.6.0' => [
                    'version' =>  '10.15.6'
                ],
                '(?:x86_64-apple-)?Darwin/?19.5.0' => [
                    'version' =>  '10.15.5'
                ],
                '(?:x86_64-apple-)?Darwin/?19.4.0' => [
                    'version' =>  '10.15.4'
                ],
                '(?:x86_64-apple-)?Darwin/?19.3.0' => [
                    'version' =>  '10.15.3'
                ],
                '(?:x86_64-apple-)?Darwin/?19.2.0' => [
                    'version' =>  '10.15.2'
                ],
                '(?:x86_64-apple-)?Darwin/?19.0.0' => [
                    'version' =>  '10.15'
                ],
                '(?:x86_64-apple-)?Darwin/?18.7.0' => [
                    'version' =>  '10.14'
                ],
                '(?:x86_64-apple-)?Darwin/?18.6.0' => [
                    'version' =>  '10.14.5'
                ],
                '(?:x86_64-apple-)?Darwin/?18.5.0' => [
                    'version' =>  '10.14.4'
                ],
                '(?:x86_64-apple-)?Darwin/?18.2.0' => [
                    'version' =>  '10.14.1'
                ],
                '(?:x86_64-apple-)?Darwin/?18.0.0' => [
                    'version' =>  '10.14'
                ],
                '(?:x86_64-apple-)?Darwin/?17.7.0' => [
                    'version' =>  '10.13.6'
                ],
                '(?:x86_64-apple-)?Darwin/?17.6.0' => [
                    'version' =>  '10.13.5'
                ],
                '(?:x86_64-apple-)?Darwin/?17.5.0' => [
                    'version' =>  '10.13.4'
                ],
                '(?:x86_64-apple-)?Darwin/?17.4.0' => [
                    'version' =>  '10.13.3'
                ],
                '(?:x86_64-apple-)?Darwin/?17.3.0' => [
                    'version' =>  '10.13.2'
                ],
                '(?:x86_64-apple-)?Darwin/?17.2.0' => [
                    'version' =>  '10.13.1'
                ],
                '(?:x86_64-apple-)?Darwin/?17.0.0' => [
                    'version' =>  '10.13'
                ],
                '(?:x86_64-apple-)?Darwin/?16.7.0' => [
                    'version' =>  '10.12.6'
                ],
                '(?:x86_64-apple-)?Darwin/?16.6.0' => [
                    'version' =>  '10.12.5'
                ],
                '(?:x86_64-apple-)?Darwin/?16.5.0' => [
                    'version' =>  '10.12.4'
                ],
                '(?:x86_64-apple-)?Darwin/?16.4.0' => [
                    'version' =>  '10.12.3'
                ],
                '(?:x86_64-apple-)?Darwin/?16.3.0' => [
                    'version' =>  '10.12.2'
                ],
                '(?:x86_64-apple-)?Darwin/?16.2.0' => [
                    'version' =>  '10.12.2'
                ],
                '(?:x86_64-apple-)?Darwin/?16.1.0' => [
                    'version' =>  '10.12.1'
                ],
                '(?:x86_64-apple-)?Darwin/?16.0.0' => [
                    'version' =>  '10.12'
                ],
                '(?:x86_64-apple-)?Darwin/?15.6.0' => [
                    'version' =>  '10.11.6'
                ],
                '(?:x86_64-apple-)?Darwin/?15.5.0' => [
                    'version' =>  '10.11.5'
                ],
                '(?:x86_64-apple-)?Darwin/?15.4.0' => [
                    'version' =>  '10.11.4'
                ],
                '(?:x86_64-apple-)?Darwin/?15.3.0' => [
                    'version' =>  '10.11.3'
                ],
                '(?:x86_64-apple-)?Darwin/?15.2.0' => [
                    'version' =>  '10.11.2'
                ],
                'CFNetwork/760' => [
                    'version' =>  '10.11'
                ],
                '(?:x86_64-apple-)?Darwin/?14.5.0' => [
                    'version' =>  '10.10.5'
                ],
                '(?:x86_64-apple-)?Darwin/?14.4.0' => [
                    'version' =>  '10.10.4'
                ],
                '(?:x86_64-apple-)?Darwin/?14.3.0' => [
                    'version' =>  '10.10.3'
                ],
                '(?:x86_64-apple-)?Darwin/?14.1.0' => [
                    'version' =>  '10.10.2'
                ],
                '(?:x86_64-apple-)?Darwin/?14.0.0' => [
                    'version' =>  '10.10'
                ],
                '(?:x86_64-apple-)?Darwin/?13.4.0' => [
                    'version' =>  '10.9.5'
                ],
                '(?:x86_64-apple-)?Darwin/?13.3.0' => [
                    'version' =>  '10.9.4'
                ],
                '(?:x86_64-apple-)?Darwin/?13.2.0' => [
                    'version' =>  '10.9.3'
                ],
                '(?:x86_64-apple-)?Darwin/?13.1.0' => [
                    'version' =>  '10.9.2'
                ],
                '(?:x86_64-apple-)?Darwin/?13.0.0' => [
                    'version' =>  '10.9.0'
                ],
                '(?:x86_64-apple-)?Darwin/?12.6.0' => [
                    'version' =>  '10.8.5'
                ],
                '(?:x86_64-apple-)?Darwin/?12.5.0' => [
                    'version' =>  '10.8.5'
                ],
                '(?:x86_64-apple-)?Darwin/?12.4.0' => [
                    'version' =>  '10.8.4'
                ],
                '(?:x86_64-apple-)?Darwin/?12.3.0' => [
                    'version' =>  '10.8.3'
                ],
                '(?:x86_64-apple-)?Darwin/?12.2.0' => [
                    'version' =>  '10.8.2'
                ],
                '(?:x86_64-apple-)?Darwin/?12.1.0' => [
                    'version' =>  '10.8.1'
                ],
                '(?:x86_64-apple-)?Darwin/?11.5.0' => [
                    'version' =>  '10.7.5'
                ],
                '(?:x86_64-apple-)?Darwin/?11.4.2' => [
                    'version' =>  '10.7.5'
                ],
                '(?:x86_64-apple-)?Darwin/?11.4.0' => [
                    'version' =>  '10.7.4'
                ],
                '(?:x86_64-apple-)?Darwin/?11.3.0' => [
                    'version' =>  '10.7.3'
                ],
                '(?:x86_64-apple-)?Darwin/?11.2.0' => [
                    'version' =>  '10.7.2'
                ],
                '(?:x86_64-apple-)?Darwin/?11.1.0' => [
                    'version' =>  '10.7.1'
                ],
                '(?:x86_64-apple-)?Darwin/?10.8.0' => [
                    'version' =>  '10.6.8'
                ],
                '(?:x86_64-apple-)?Darwin/?10.7.[34]' => [
                    'version' =>  '10.6.7'
                ],
                '(?:x86_64-apple-)?Darwin/?10.3.0' => [
                    'version' =>  '10.6.3'
                ],
                '(?:x86_64-apple-)?Darwin/?10.0.0' => [
                    'version' =>  '10.6'
                ],
                '(?:x86_64-apple-)?Darwin/?9.8.0' => [
                    'version' =>  '10.5.8'
                ],
                '(?:x86_64-apple-)?Darwin/?9.7.1' => [
                    'version' =>  '10.5.7'
                ],
                '(?:x86_64-apple-)?Darwin/?9.6.2' => [
                    'version' =>  '10.5.6'
                ],
                '(?:x86_64-apple-)?Darwin/?9.5.[05]' => [
                    'version' =>  '10.5.5'
                ],
            ]
        ],

        'Macintosh;Mac OS X \((\d+[\.\d]+)\);' => [
            'name' => 'Mac',
            'version' => '$1'
        ],

        'Mac[ +]OS[ +]?X(?:[ /,](?:Version )?(\d+(?:[_\.]\d+)+))?' => [
            'name' => 'Mac',
            'version' => '$1'
        ],

        'Mac (?:OS/)?(\d+(?:[_\.]\d+)+)' => [
            'name' => 'Mac',
            'version' => '$1'
        ],

        '(?:macOS[/,]|Mac-)(\d+[\.\d]+)' => [
            'name' => 'Mac',
            'version' => '$1'
        ],

        'Macintosh; OS X (\d+[\.\d]+)' => [
            'name' => 'Mac',
            'version' => '$1'
        ],

        'Darwin|Macintosh|Mac_PowerPC|PPC|Mac PowerPC|iMac|MacBook|macOS|AppleExchangeWebServices|com.apple.trustd|Sonos/.+\(MDCR_' => [
            'name' => 'Mac',
            'version' => ''
        ],

        ##########
        # SeewoOS
        ##########
        'SeewoOS x86_64 (\d+[\.\d]+)' => [
            'name' => 'SeewoOS',
            'version' => '$1'
        ],

        ##########
        # ChromeOS
        ##########
        'CrOS [a-z0-9_]+ (\d+[\.\d]+)' => [
            'name' => 'Chrome OS',
            'version' => '$1'
        ],

        ##########
        # Fuchsia
        ##########
        'Fuchsia' => [
            'name' => 'Fuchsia',
            'version' => ''
        ],

        ##########
        # BlackBerry
        ##########
        '(?:BB10;.+Version|Black[Bb]erry[0-9a-z]+|Black[Bb]erry.+Version)/(\d+[\.\d]+)' => [
            'name' => 'BlackBerry OS',
            'version' => '$1'
        ],

        'RIM Tablet OS (\d+[\.\d]+)' => [
            'name' => 'BlackBerry Tablet OS',
            'version' => '$1'
        ],

        'RIM Tablet OS|QNX|Play[Bb]ook' => [
            'name' => 'BlackBerry Tablet OS',
            'version' => ''
        ],

        'BlackBerry' => [
            'name' => 'BlackBerry OS',
            'version' => ''
        ],

        'bPod' => [
            'name' => 'BlackBerry OS',
            'version' => ''
        ],

        ##########
        # BeOS
        ##########
        'BeOS' => [
            'name' => 'BeOS',
            'version' => ''
        ],

        ##########
        # Symbian
        ##########
        'Symbian/3.+NokiaBrowser/7\.3' => [
            'name' => 'Symbian^3',
            'version' => 'Anna'
        ],

        'Symbian/3.+NokiaBrowser/7\.4' => [
            'name' => 'Symbian^3',
            'version' => 'Belle'
        ],

        'Symbian/3' => [
            'name' => 'Symbian^3',
            'version' => ''
        ],

        '(?:Series ?60|SymbOS|S60)(?:[ /]?(\d+[\.\d]+|V\d+))?' => [
            'name' => 'Symbian OS Series 60',
            'version' => '$1'
        ],

        'Series40' => [
            'name' => 'Symbian OS Series 40',
            'version' => ''
        ],

        'SymbianOS/(\d+[\.\d]+)' => [
            'name' => 'Symbian OS',
            'version' => '$1'
        ],

        'MeeGo|WeTab' => [
            'name' => 'MeeGo',
            'version' => ''
        ],

        'Symbian(?: OS)?|SymbOS' => [
            'name' => 'Symbian OS',
            'version' => ''
        ],

        'Nokia' => [
            'name' => 'Symbian',
            'version' => ''
        ],

        ##########
        # Firefox OS
        ##########
        '(?:Mobile|Tablet);.+Firefox/\d+\.\d+' => [
            'name' => 'Firefox OS',
            'version' => ''
        ],

        ##########
        # RISC OS
        ##########
        'RISC OS(?:-NC)?(?:[ /](\d+[\.\d]+))?' => [
            'name' => 'RISC OS',
            'version' => '$1'
        ],

        ##########
        # Inferno
        ##########
        'Inferno(?:[ /](\d+[\.\d]+))?' => [
            'name' => 'Inferno',
            'version' => '$1'
        ],

        ##########
        # Bada
        ##########
        'bada(?:[ /](\d+[\.\d]+))?' => [
            'name' => 'Bada',
            'version' => '$1'
        ],

        ##########
        # REX
        ##########
        'REX; U;' => [
            'name' => 'REX',
            'version' => ''
        ],

        ##########
        # Brew
        ##########
        '(?:Brew(?!-Applet)(?: MP)?|BMP)(?:[ /](\d+[\.\d]+))?' => [
            'name' => 'Brew',
            'version' => '$1'
        ],

        ##########
        # Web TV
        ##########
        'GoogleTV(?:[ /](\d+[\.\d]+))?' => [
            'name' => 'Google TV',
            'version' => '$1'
        ],

        'AppleTV(?:/?(\d+[\.\d]+))?' => [
            'name' => 'tvOS',
            'version' => '$1'
        ],

        'WebTV/(\d+[\.\d]+)' => [
            'name' => 'WebTV',
            'version' => '$1' 
        ],


        ##########
        # Unix
        ##########
        '(?:SunOS|Solaris)(?:[/ ](\d+[\.\d]+))?' => [
            'name' => 'Solaris',
            'version' => '$1'
        ],

        'AIX(?:[/ ]?(\d+[\.\d]+))?' => [
            'name' => 'AIX',
            'version' => '$1'
        ],

        'HP-UX(?:[/ ]?(\d+[\.\d]+))?' => [
            'name' => 'HP-UX',
            'version' => '$1'
        ],

        'FreeBSD(?:[/ ]?(\d+[\.\d]+))?' => [
            'name' => 'FreeBSD',
            'version' => '$1'
        ],

        'NetBSD(?:[/ ]?(\d+[\.\d]+))?' => [
            'name' => 'NetBSD',
            'version' => '$1'
        ],

        'OpenBSD(?:[/ ]?(\d+[\.\d]+))?' => [
            'name' => 'OpenBSD',
            'version' => '$1'
        ],

        'DragonFly(?:[/ ]?(\d+[\.\d]+))?' => [
            'name' => 'DragonFly',
            'version' => '$1'
        ],

        'Syllable(?:[/ ]?(\d+[\.\d]+))?' => [
            'name' => 'Syllable',
            'version' => '$1'
        ],

        'IRIX(?:;64)?(?:[/ ]?(\d+[\.\d]+))' => [
            'name' => 'IRIX',
            'version' => '$1'
        ],

        'OSF1(?:[/ ]?v?(\d+[\.\d]+))?' => [
            'name' => 'OSF1',
            'version' => '$1'
        ],

        ##########
        # Gaming Console
        ##########
        'Nintendo (Wii|Switch)' => [
            'name' => 'Nintendo',
            'version' => '$1'
        ],

        'PlayStation.+; Linux (\d+[\.\d]+)' => [
            'name' => 'PlayStation',
            'version' => '$1'
        ],

        'PlayStation ?(\d)(?:[/ ](?:Pro )?(\d+[\.\d]+))?' => [
            'name' => 'PlayStation',
            'version' => '$1.$2'
        ],

        'Xbox|KIN\.(?:One|Two)' => [
            'name' => 'Xbox',
            'version' => '360'
        ],

        ##########
        # Mobile Gaming Console
        ##########
        'Nitro|Nintendo ([3]?DS[i]?)' => [
            'name' => 'Nintendo Mobile',
            'version' => '$1'
        ],

        'PlayStation ((?:Portable|Vita))' => [
            'name' => 'PlayStation Portable',
            'version' => '$1'
        ],

        ##########
        # IBM
        ##########
        'OS/2' => [
            'name' => 'OS/2',
            'version' => ''
        ],

        ###########
        # Linux (Generic)
        ###########
        'Linux/(\d+[\.\d]+)' => [
            'name' => 'GNU/Linux',
            'version' => '$1'
        ],

        'Linux(?:OS)?[^a-z]|Cinnamon/(?:\d+[\.\d]+)|.+unknown-linux-gnu' => [
            'name' => 'GNU/Linux',
            'version' => ''
        ],

        ##########
        # Java ME (Java Platform, Micro Edition)
        ##########
        'Java ME|(J2ME|Profile)/MIDP|MIDP-(?:\d+[\.\d]+)/CLDC|Configuration/CLDC|Java; U; MIDP|MMP/\d.\d' => [
            'name' => 'Java ME',
            'version' => ''
        ]

    ];
}
