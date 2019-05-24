<?php
namespace Aknife\Agent;

class Platform
{
    // 规则来源于 : https://github.com/matomo-org/device-detector/blob/master/regexes/oss.yml
    // 删除了 无效数据/过时数据/第三方Rom/嵌入式系统/电视系统
    public static $rule = [
        // Tizen 韩国.三星
        'Tizen[ /]?(\d+[\.\d]+)?' => [
            'name'=>'Tizen',
            'version'=>'$1'
        ],

        // Sailfish OS 基于 Sailfish OS  - 俄罗斯
        'Sailfish|Jolla' => [
            'name'=>'Sailfish OS',
            'version'=>''
        ],

        // YunOS (Android based) - 中国.阿里云
        '(?:Ali)?YunOS[ /]?(\d+[\.\d]+)?' => [
            'name'=>'YunOS',
            'version'=>'$1'
        ],

        // Windows Mobile
        'Windows Phone (?:OS)?[ ]?(\d+[\.\d]+)' => [
            'name'=>'Windows Phone',
            'version'=>'$1'
        ],
          
        'XBLWP7|Windows Phone' => [
            'name'=>'Windows Phone',
            'version'=>''
        ],

        '(?:IEMobile|Windows ?Mobile)(?: (\d+[\.\d]+))?' => [
            'name'=>'Windows Phone',
            'version'=>'$1'
        ],
          
        'Windows NT 6.2; ARM;' => [
            'name'=>'Windows RT',
            'version'=>'8'
        ],
          
        'Windows NT 6.3; ARM;' => [
            'name'=>'Windows RT',
            'version'=>'8.1'
        ],

        // KaiOS 继承自Firefox操作系统 - 印度
        'KAIOS(?:/(\d+[\.\d]+))?' => [
            'name'=>'KaiOS',
            'version'=>'$1'
        ],

        // Android
        '(?:(?:Orca-)?Android|Adr)[ /](?:[a-z]+ )?(\d+[\.\d]*)' => [
            'name'=>'Android',
            'version'=>'$1'
        ],

        // AmigaOS
        'AmigaOS[ ]?(\d+[\.\d]+)' => [
            'name'=>'AmigaOS',
            'version'=>'$1'
        ],

        // Linux
        'Maemo' => [
            'name'=>'Maemo',
            'version'=>''
        ],

        'Arch ?Linux(?:[ /\-](\d+[\.\d]+))?' => [
            'name'=>'Arch Linux',
            'version'=>'$1'
        ],

        'VectorLinux(?: package)?(?:[ /\-](\d+[\.\d]+))?' => [
            'name'=>'VectorLinux',
            'version'=>'$1'
        ],

        'Linux; .*((?:Debian|Knoppix|Mint|Ubuntu|Kubuntu|Xubuntu|Lubuntu|Fedora|Red Hat|Mandriva|Gentoo|Sabayon|Slackware|SUSE|CentOS|BackTrack))[ /](\d+[\.\d]+)' => [
            'name'=>'$1',
            'version'=>'$2'
        ],

        '(Debian|Knoppix|Mint|Ubuntu|Kubuntu|Xubuntu|Lubuntu|Fedora|Red Hat|Mandriva|Gentoo|Sabayon|Slackware|SUSE|CentOS|BackTrack)(?:(?: Enterprise)? Linux)?(?:[ /\-](\d+[\.\d]+))?' => [
            'name'=>'$1',
            'version'=>'$2'
        ],

        // Windows
        'CYGWIN_NT-6.4|Windows NT 6.4|CYGWIN_NT-10.0|Windows NT 10.0|Windows 10' => [
            'name'=>'Windows',
            'version'=>'10'
        ],

        'CYGWIN_NT-6.3|Windows NT 6.3|Windows 8.1' => [
            'name'=>'Windows',
            'version'=>'8.1'
        ],

        'CYGWIN_NT-6.2|Windows NT 6.2|Windows 8' => [
            'name'=>'Windows',
            'version'=>'8'
        ],
          
        'CYGWIN_NT-6.1|Windows NT 6.1|Windows 7' => [
            'name'=>'Windows',
            'version'=>'7'
        ],
          
        'CYGWIN_NT-6.0|Windows NT 6.0|Windows Vista' => [
            'name'=>'Windows',
            'version'=>'Vista'
        ],
          
        'CYGWIN_NT-5.2|Windows NT 5.2|Windows Server 2003 / XP x64' => [
            'name'=>'Windows',
            'version'=>'Server 2003'
        ],
          
        'CYGWIN_NT-5.1|Windows NT 5.1|Windows XP' => [
            'name'=>'Windows',
            'version'=>'XP'
        ],
          
        'CYGWIN_NT-5.0|Windows NT 5.0|Windows 2000' => [
            'name'=>'Windows',
            'version'=>'2000'
        ],
          
        'CYGWIN_NT-4.0|Windows NT 4.0|WinNT|Windows NT' => [
            'name'=>'Windows',
            'version'=>'NT'
        ],
          
        'CYGWIN_ME-4.90|Win 9x 4.90|Windows ME' => [
            'name'=>'Windows',
            'version'=>'ME'
        ],
          
        'CYGWIN_98-4.10|Win98|Windows 98' => [
            'name'=>'Windows',
            'version'=>'98'
        ],
          
        'CYGWIN_95-4.0|Win32|Win95|Windows 95|Windows_95' => [
            'name'=>'Windows',
            'version'=>'95'
        ],
          
        'Windows' => [
            'name'=>'Windows',
            'version'=>''
        ],

        // Haiku OS
        'Haiku' => [
            'name'=>'Haiku OS',
            'version'=>''
        ],
          
        // iOS
        'CFNetwork/889' => [
            'name'=>'iOS',
            'version'=>'11.1'
        ],

        'CFNetwork/887.*(x86_64)' => [
            'name'=>'Mac',
            'version'=>'10.13'
        ],

        'CFNetwork/887' => [
            'name'=>'iOS',
            'version'=>'11.0'
        ],

        'CFNetwork/811.*(x86_64)' => [
            'name'=>'Mac',
            'version'=>'10.12'
        ],

        'CFNetwork/811' => [
            'name'=>'iOS',
            'version'=>'10.3'
        ],

        'CFNetwork/808\.3' => [
            'name'=>'iOS',
            'version'=>'10.3'
        ],

        'CFNetwork/808\.2' => [
            'name'=>'iOS',
            'version'=>'10.2'
        ],

        'CFNetwork/808\.1' => [
            'name'=>'iOS',
            'version'=>'10.1'
        ],

        'CFNetwork/808\.0' => [
            'name'=>'iOS',
            'version'=>'10.0'
        ],

        'CFNetwork/808' => [
            'name'=>'iOS',
            'version'=>'10'
        ],

        'CFNetwork/758\.4\.3' => [
            'name'=>'iOS',
            'version'=>'9.3.2'
        ],

        'CFNetwork/758\.3\.15' => [
            'name'=>'iOS',
            'version'=>'9.3'
        ],

        'CFNetwork/758\.2\.[78]' => [
            'name'=>'iOS',
            'version'=>'9.2'
        ],

        'CFNetwork/758\.1\.6' => [
            'name'=>'iOS',
            'version'=>'9.1'
        ],

        'CFNetwork/758\.0\.2' => [
            'name'=>'iOS',
            'version'=>'9.0'
        ],

        'CFNetwork/711\.5\.6' => [
            'name'=>'iOS',
            'version'=>'8.4.1'
        ],

        'CFNetwork/711\.4\.6' => [
            'name'=>'iOS',
            'version'=>'8.4'
        ],

        'CFNetwork/711\.3\.18' => [
            'name'=>'iOS',
            'version'=>'8.3'
        ],

        'CFNetwork/711\.2\.23' => [
            'name'=>'iOS',
            'version'=>'8.2'
        ],

        'CFNetwork/711\.1\.1[26]' => [
            'name'=>'iOS',
            'version'=>'8.1'
        ],

        'CFNetwork/711\.0\.6' => [
            'name'=>'iOS',
            'version'=>'8.0'
        ],

        'CFNetwork/672\.1' => [
            'name'=>'iOS',
            'version'=>'7.1'
        ],

        'CFNetwork/672\.0' => [
            'name'=>'iOS',
            'version'=>'7.0'
        ],

        'CFNetwork/609\.1' => [
            'name'=>'iOS',
            'version'=>'6.1'
        ],

        'CFNetwork/60[29]' => [
            'name'=>'iOS',
            'version'=>'6.0'
        ],

        'CFNetwork/548\.1' => [
            'name'=>'iOS',
            'version'=>'5.1'
        ],

        'CFNetwork/548\.0' => [
            'name'=>'iOS',
            'version'=>'5.0'
        ],

        'CFNetwork/485\.13' => [
            'name'=>'iOS',
            'version'=>'4.3'
        ],

        'CFNetwork/485\.12' => [
            'name'=>'iOS',
            'version'=>'4.2'
        ],

        'CFNetwork/485\.10' => [
            'name'=>'iOS',
            'version'=>'4.1'
        ],

        'CFNetwork/485\.2' => [
            'name'=>'iOS',
            'version'=>'4.0'
        ],

        'CFNetwork/467\.12' => [
            'name'=>'iOS',
            'version'=>'3.2'
        ],

        'CFNetwork/459' => [
            'name'=>'iOS',
            'version'=>'3.1'
        ],

        '(?:CPU OS|iPh(?:one)?[ _]OS|iOS)[ _/](\d+(?:[_\.]\d+)*)' => [
            'name'=>'iOS',
            'version'=>'$1'
        ],

        '(?:Apple-)?(?:iPhone|iPad|iPod)(?:.*Mac OS X.*Version/(\d+\.\d+)|; Opera)?' => [
            'name'=>'iOS',
            'version'=>'$1'
        ],

        'Podcasts/(?:[\d\.]+)|Instacast(?:HD)?/(?:\d\.[\d\.abc]+)|Pocket Casts, iOS|Overcast|Castro|Podcat|i[cC]atcher' => [
            'name'=>'iOS',
            'version'=>''
        ],

        'iTunes-(iPod|iPad|iPhone)/(?:[\d\.]+)' => [
            'name'=>'iOS',
            'version'=>''
        ],

        // Mac
        'CFNetwork/807' => [
            'name'=>'Mac',
            'version'=>'10.12'
        ],

        'CFNetwork/760' => [
            'name'=>'Mac',
            'version'=>'10.11'
        ],

        'CFNetwork/720' => [
            'name'=>'Mac',
            'version'=>'10.10'
        ],

        'CFNetwork/673' => [
            'name'=>'Mac',
            'version'=>'10.9'
        ],

        'CFNetwork/596' => [
            'name'=>'Mac',
            'version'=>'10.8'
        ],

        'CFNetwork/520' => [
            'name'=>'Mac',
            'version'=>'10.7'
        ],

        'CFNetwork/454' => [
            'name'=>'Mac',
            'version'=>'10.6'
        ],

        'CFNetwork/(?:438|422|339|330|221|220|217)' => [
            'name'=>'Mac',
            'version'=>'10.5'
        ],

        'CFNetwork/12[89]' => [
            'name'=>'Mac',
            'version'=>'10.4'
        ],

        'CFNetwork/1\.2' => [
            'name'=>'Mac',
            'version'=>'10.3'
        ],

        'CFNetwork/1\.1' => [
            'name'=>'Mac',
            'version'=>'10.2'
        ],

        'Mac[ +]OS[ +]X(?:[ /](?:Version )?(\d+(?:[_\.]\d+)+))?' => [
            'name'=>'Mac',
            'version'=>'$1'
        ],
          
        'Mac (\d+(?:[_\.]\d+)+)' => [
            'name'=>'Mac',
            'version'=>'$1'
        ],

        'Darwin|Macintosh|Mac_PowerPC|PPC|Mac PowerPC|iMac|MacBook' => [
            'name'=>'Mac',
            'version'=>''
        ],
          
        // ChromeOS
        'CrOS [a-z0-9_]+ .* Chrome/(\d+[\.\d]+)' => [
            'name'=>'Chrome OS',
            'version'=>'$1'
        ],
          
        // BlackBerry
        '(?:BB10;.+Version|Black[Bb]erry[0-9a-z]+|Black[Bb]erry.+Version)/(\d+[\.\d]+)' => [
            'name'=>'BlackBerry OS',
            'version'=>'$1'
        ],
          
        'RIM Tablet OS (\d+[\.\d]+)' => [
            'name'=>'BlackBerry Tablet OS',
            'version'=>'$1'
        ],
          
        'RIM Tablet OS|QNX|Play[Bb]ook' => [
            'name'=>'BlackBerry Tablet OS',
            'version'=>''
        ],
          
        'BlackBerry' => [
            'name'=>'BlackBerry OS',
            'version'=>''
        ],
          
        'bPod' => [
            'name'=>'BlackBerry OS',
            'version'=>''
        ],

        // BeOS
        'BeOS' => [
            'name'=>'BeOS',
            'version'=>''
        ],

        // Symbian - 已淘汰
        'Symbian/3.+NokiaBrowser/7\.3' => [
            'name'=>'Symbian OS',
            'version'=>'Anna'
        ],

        'Symbian/3.+NokiaBrowser/7\.4' => [
            'name'=>'Symbian OS',
            'version'=>'Belle'
        ],

        'Symbian/3' => [
            'name'=>'Symbian OS',
            'version'=>''
        ],

        '(?:Series ?60|SymbOS|S60)(?:[ /]?(\d+[\.\d]+|V\d+))?' => [
            'name'=>'Symbian OS',
            'version'=>'$1'
        ],

        'Series40' => [
            'name'=>'Symbian',
            'version'=>''
        ],

        'SymbianOS/(\d+[\.\d]+)' => [
            'name'=>'Symbian OS',
            'version'=>'$1'
        ],
          
        'MeeGo|WeTab' => [
            'name'=>'MeeGo',
            'version'=>''
        ],
          
        'Symbian(?: OS)?|SymbOS' => [
            'name'=>'Symbian OS',
            'version'=>''
        ],
          
        'Nokia' => [
            'name'=>'Symbian OS',
            'version'=>''
        ],

        // RISC OS
        'RISC OS(?:-NC)?(?:[ /](\d+[\.\d]+))?' => [
            'name'=>'RISC OS',
            'version'=>'$1'
        ],

        // Remix OS - 技德
        'RemixOS 5.1.1' => [
            'name'=>'Remix OS',
            'version'=>'1'
        ],

        'RemixOS 6.0' => [
            'name'=>'Remix OS',
            'version'=>'2'
        ],

        'RemixOS' => [
            'name'=>'Remix OS',
            'version'=>''
        ],


        // Unix
        '(?:SunOS|Solaris)(?:[/ ](\d+[\.\d]+))?' => [
            'name'=>'Solaris',
            'version'=>'$1'
        ],
          
        'AIX(?:[/ ]?(\d+[\.\d]+))?' => [
            'name'=>'AIX',
            'version'=>'$1'
        ],
          
        'HP-UX(?:[/ ]?(\d+[\.\d]+))?' => [
            'name'=>'HP-UX',
            'version'=>'$1'
        ],
          
        'FreeBSD(?:[/ ]?(\d+[\.\d]+))?' => [
            'name'=>'FreeBSD',
            'version'=>'$1'
        ],
          
        'NetBSD(?:[/ ]?(\d+[\.\d]+))?' => [
            'name'=>'NetBSD',
            'version'=>'$1'
        ],
          
        'OpenBSD(?:[/ ]?(\d+[\.\d]+))?' => [
            'name'=>'OpenBSD',
            'version'=>'$1'
        ],
          
        'DragonFly(?:[/ ]?(\d+[\.\d]+))?' => [
            'name'=>'DragonFly',
            'version'=>'$1'
        ],
          
        'Syllable(?:[/ ]?(\d+[\.\d]+))?' => [
            'name'=>'Syllable',
            'version'=>'$1'
        ],
          
        'IRIX(?:;64)?(?:[/ ]?(\d+[\.\d]+))' => [
            'name'=>'IRIX',
            'version'=>'$1'
        ],
          
        'OSF1(?:[/ ]?v?(\d+[\.\d]+))?' => [
            'name'=>'OSF1',
            'version'=>'$1'
        ],
          
        // Linux (Generic)#
        'Linux(?:OS)?[^a-z]' => [
            'name'=>'GNU/Linux',
            'version'=>''
        ],

    ];
}
