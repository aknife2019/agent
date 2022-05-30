<?php
namespace Aknife\Agent\Rules;

class Bots
{
    public static $ipRule = [
        '35.185.241.0/24'   =>  ['name'=>'谷歌快照','category'=>'Search Bot','checked'=>'true'],
    ];

    // 规则来源 -- https://github.com/matomo-org/device-detector/blob/master/regexes/bots.yml
    // 未采用上述规则，只收录了部分热门搜索引擎,欢迎提交补充
    // 当然主要原因还是我只需要这部分搜索...
    public static $rule = [
        // 'Baidu Spider' - 百度搜索
        'baiduspider(-image)?|baidu Transcoder|baidu.*spider' => [
            'name'=>'BaiduSpider',
            'category'=>'Search Bot',
            'checkMethod'=>'domain',
            'rule'=>'baidu.com'
        ],

         // 'Sogou Spider' - 搜狗搜索
        'Sogou (web|wap|inst|Pic|News|Video|Push)? spider|New-Sogou-Spider' => [
            'name'=>'Sogou Spider',
            'category'=>'Search Bot',
            'checkMethod'=>'domain',
            'rule'=>'sogou.com'
            
        ],

        // '360 Spider' - 360搜索
        '360Spider(-Image|-Video)?' => [
            'name'=>'360Spider',
            'category'=>'Search Bot',
            'checkMethod'=>'ip',
            'rule'=> [
                '180.153.232.0/24',
                '180.153.234.0/24',
                '180.153.236.0/24',
                '180.163.220.0/24',
                '42.236.101.0/24',
                '42.236.102.0/24',
                '42.236.103.0/24',
                '42.236.10.0/24',
                '42.236.12.0/24',
                '42.236.13.0/24',
                '42.236.14.0/24',
                '42.236.15.0/24',
                '42.236.16.0/24',
                '42.236.17.0/24',
                '42.236.46.0/24',
                '42.236.48.0/24',
                '42.236.49.0/24',
                '42.236.50.0/24',
                '42.236.51.0/24',
                '42.236.52.0/24',
                '42.236.53.0/24',
                '42.236.54.0/24',
                '42.236.55.0/24',
                '42.236.99.0/24',
            ]
        ],

        // YisouSpider - 神马搜索
        'YisouSpider' => [
            'name'=>'YisouSpider',
            'category'=>'Search Bot',
            'checkMethod'=>'domain',
            'rule'=>'sm.cn'
        ],

        // PetalBot - 华为花瓣搜索
        'PetalBot' => [
            'name'=>'PetalBot',
            'category'=>'Search Bot',
            'checkMethod'=>'domain',
            'rule'=>'petalsearch.com'
        ],

        // Bytespider - 头条搜索
        'Bytespider' => [
            'name'=>'Bytespider',
            'category'=>'Search Bot',
            'checkMethod'=>'domain',
            'rule'=>[
                '110.249.201.0/24',
                '110.249.202.0/24',
                '111.225.148.0/24',
                '111.225.149.0/24',
                '220.243.135.0/24',
                '220.243.136.0/24',
                '220.243.188.0/24',
                '220.243.189.0/24',
                '60.8.123.0/24',
                '60.8.151.0/24'
            ]
        ],

         // 'Googlebot' - 谷歌搜索
        'Googlebot(-Mobile|-Image|-Video|-News)?|Feedfetcher-Google|Google-Test|Google-Site-Verification|Google Web Preview|AdsBot-Google(-Mobile)?|Google-Adwords-Instant|APIs-Google|Mediapartners-Google|Google.0/24,/\+/web/snippet|GoogleProducer|Google[ -]Publisher[ -]Plugin|Google-Shopping-Quality|Google-Adwords-DisplayAds|Google-Assess|Google-AdWords-Express|Google-speakr|Google-Read-Aloud' => [
            'name'=>'Googlebot',
            'category'=>'Search Bot',
            'checkMethod'=>'domain',
            'rule'=>'google.com|googlebot.com'
        ],

        // 'BingBot' - 必应搜索
        'MSNBot|msrbot|bingbot|BingPreview|BingWeb|msnbot-(UDiscovery|NewsBlogs)|adidxbot' => [
            'name'=>'BingBot',
            'category'=>'Search Bot',
            'checkMethod'=>'domain',
            'rule'=>'msn.com'
        ],

        // 'DuckDuckGo Bot'
        'DuckDuck' => [
            'name'=>'DuckDuckGoBot',
            'category'=>'Search Bot',
            'checkMethod'=>'ip',
            'rule'=>'20.191.45.212|40.88.21.235|40.76.173.151|40.76.163.7|20.185.79.47|52.142.26.175|20.185.79.15|52.142.24.149|40.76.162.208|40.76.163.23|40.76.162.191|40.76.162.247'
        ],

        // 'Yandex Bot'
        'Yandex(SpravBot|ScreenshotBot|MobileBot|AccessibilityBot|ForDomain|Vertis|Market|Catalog|Calendar|Sitelinks|AdNet|Pagechecker|Webmaster|Media|Video|Bot|Images|Antivirus|Direct|Blogs|Favicons|ImageResizer|Verticals|News|Metrika|\.Gazeta Bot)|YaDirectFetcher|YandexTurbo|YandexTracker|YandexSearchShop|YandexRCA|YandexPartner|YandexOntoDBAPI|YandexOntoDB|YandexMobileScreenShotBot' => [
            'name'=>'YandexBot',
            'category'=>'Search Bot',
            'checkMethod'=>'domain',
            'rule'=>'yandex.ru|yandex.net|yandex.com'
        ],

        // 其他搜索
        '(Aboundex|AcoonBot|ia_archiver|alexabot|verifybot|Ask Jeeves/Teoma|Blekkobot|BountiiBot|(?<!HTC)[ _]Butterfly/|coccoc.com|Daum(oa)?[ /][0-9]|Dazoobot|discobot|EasouSpider|ExactSeek Crawler|GigablastOpenSource|ichiro/mobile goo|linkdexbot|linkdex\.com|Mail\.RU|meanpathbot|MJ12bot|Mnogosearch|MojeekBot|Netcraft( Web Server Survey| SSL Server Survey|SurveyAgent)|omgili|OpenindexSpider|OrangeBot|VoilaBot|PaperLiBot|psbot|SeznamBot|SklikBot|Seznam screenshot-generator|ShopWiki|Sosospider|Sosoimagespider|SurveyBot|TarmotGezgin|WeSEE|Wotbox|yacybot|Yahoo! Slurp|Yahoo!-AdCrawler|Yeti|NaverJapan|AdsBot-Naver|YoudaoBot|YRSpider|YYSpider|ZumBot|woorankreview|(Match|LinkCheck) by Siteimprove.com|CATExplorador|Buck|tracemyfile|weborama-fetcher|BoardReader Favicon Fetcher|IDG/IT|WikiDo|AwarioSmartBot|oBot|SMTBot|LCC|Startpagina-Linkchecker|Neevabot/([\d+\.]))' => [
            'name'=>'$1',
            'category'=>'Search Bot'
        ],

        // 蜘蛛爬虫
        '(ApacheBench|AhrefsBot|Amazonbot|AmorankSpider|Applebot|AspiegelBot|Curious George|archive\.org_bot|special_archiver|Backlink-Check\.de|BacklinkCrawler|BLEXBot|BoardReader Blog Indexer|BUbiNG|CareerBot|CCBot|Cliqzbot|Cloudflare-AMP|CSS Certificate Spider|Datanyze|Dataprovider|Domain Re-Animator Bot|support@domainreanimator.com|DotBot|eCairn-Grabber|EMail Exractor|evc-batch|Exabot|ExaleadCloudview|Ezooms|Findxbot|Gluten Free Crawler|SeznamEmailProxy|Seznam-Zbozi-robot|Heurekabot-Feed|ShopAlike|heritrix|HubSpot|ICC-Crawler|iisbot|ips-agent|IP-Guide\.com|larbin|masscan|MetaJobBot|MetaInspector|MixrankBot|NalezenCzBot|nbertaupete95\(at\)gmail.com|netEstate NE Crawler|nlcrawler|Nuzzel|spbot|OpenWebSpider|PritTorrent|Quora Link Preview|Quora-Bot|RamblerMail|QuerySeekerSpider|Qwantify|Rainmeter|rogerbot|ROI Hunter|SafeDNSBot|Scrapy|Screaming Frog SEO Spider|ScreenerBot|SemrushBot|SensikaBot|SEOENG(World)?Bot|SEOkicks-Robot|seoscanners\.net|shopify-partner-homepage-scraper|SISTRIX Crawler|compatible; (?:SISTRIX )?Optimizer|SiteSucker|Slackbot|Slack-ImgProxy|Sprinklr|Sparkler/[0-9]|Spinn3r|SputnikBot|SputnikFaviconBot|SputnikImageBot|TinEye-bot|trendictionbot|TurnitinBot|TweetedTimes Bot|TweetmemeBot|Twingly Recon|via secureurl\.fwdcdn\.com|URLAppendBot|Vagabondo|vkShare|VSMCrawler|WebbCrawler|Yahoo Link Preview|Yahoo:LinkExpander:Slingstone|YahooCacheSystem|Y!J-BRW|YOURLS v[0-9]|Zookabot|Yahoo Ad monitoring.*yahoo-ad-monitoring-SLN24857.*|.*Java.*outbrain|HubPages.*crawlingpolicy|Pinterest(bot)?/\d\.\d.*www\.pinterest\.com.*|s~snapchat-proxy|GrapeshotCrawler|bitlybot|Zao/|The Knowledge AI|Embedly|BrandVerity|eZ Publish Link Validator|GTmetrix|Nutch|Seobility|Robozilla|Domains Project|SerendeputyBot|SemanticScholarBot|VelenPublicWebCrawler|Barkrowler|BDCbot|adbeat|BW/(?:(\d+[\.\d]+))|MicroAdBot|WebDataStats|parse.ly scraper|Project-Resonance|Cocolyzebot|veryhip|LinkpadBot|MuscatFerret|PageThing\.com|ArchiveBox|Choosito|datagnionbot|WhatCMS|httpx|HuaweiWebCatBot|Hatena-Favicon|RyowlEngine/(\d+)|OdklBot/(\d+)|Mediatoolkitbot|ZoominfoBot|WeViKaBot/([\d+\.])|SEOkicks|Plukkie/([\d+\.])|proximic|SurdotlyBot/([\d+\.])|Gowikibot/([\d+\.])|SabsimBot/([\d+\.])|LumtelBot/([\d+\.])|PiplBot|woobot/([\d+\.])|Cookiebot/([\d+\.])|gdnplus\.com|WellKnownBot/([\d+\.])|Adsbot/([\d+\.])|MTRobot/([\d+\.])|serpstatbot/([\d+\.])|colly|l9tcpid/v([\d+\.])|MegaIndex.ru/([\d+\.])|Seekport|seolyt/([\d+\.])|YaK/([\d+\.])|KomodiaBot/([\d+\.])|JungleKeyThumbnail/([\d+\.])|SitemapParser-VIPnytt/([\d+\.])|^Turnitin|ThinkChaos/|DataForSeoBot|Linespider/([\d+.]+)|Cincraw/([\d+.]+)|CISPA Web Analyzer|IonCrawl|Crawldad|TigerBot/([\d+.]+)|TestCrawler/([\d+.]+)|CrowdTanglebot/([\d+.]+)|Sellers.Guide Crawler by Primis|OnalyticaBot|deepnoc|Newslitbot/([\d+.]+)|um-LN/([\d+.]+)|Abonti/([\d+.]+)|collection@infegy.com|ev-crawler/([\d+.]+)|webprosbot/([\d+.]+)|^sentry|AdMantX.*admantx\.com|EmailWolf|Willow Internet Crawler|NetLyzer FastProbe|Server Density Service Monitoring.*|WebThumbnail|PagePeeker|ichiro|Pompos|charlotte)' => [
            'name'=>'$1',
            'category'=>'Web Crawler'
        ],

        // 网站监控
        '(AhrefsSiteAudit/([\d+.]+)|alexa site audit|AppSignalBot|Better Uptime Bot|CloudflareDiagnostics|CloudFlare-AlwaysOnline|collectd|Datadog Agent|HTTPMon|munin|check_http/v|phantomas/|phpservermon|Pingdom(?:\.com|TMS)|sixy.ch|StatusCake|Uptimebot|UptimeRobot|PTST/|websitepulse[+ ]checker|YottaaMonitor|Site24x7|www\.monitor\.us|Catchpoint|https://whatis\.contentkingapp\.com|PingAdmin\.Ru|notifyninja\.+monitoring|Nimbostratus-Bot|rocketmonitor(?: |bot/)([\d+\.])|DMBrowser/\d+|DMBrowser-[UB]V|ELB-HealthChecker)' => [
            'name'=>'$1',
            'category'=>'Site Monitor'
        ],

        // 社交媒体
        '(AddThis\.com|facebookexternalhit|facebookplatform|facebookexternalua|facebookcatalog|LinkedInBot|magpie-crawler|Mastodon/|redditbot|Twitterbot)' => [
            'name'=>'$1',
            'category'=>'Social Media Agent'
        ],

        // 安全检测
        '(Arachni|Nmap Scripting Engine|sqlmap/|zgrab|Kaspersky Lab CFR link resolver|scaninfo@expanseinc\.com|NetSystemsResearch|CensysInspect/([\d+\.])|https://securitytxt-scan\.cs\.hm\.edu/|HTTP Banner Detection \(https://security\.ipip\.net\)|Riddler|Jigsaw|W3C_I18n-Checker|W3C-checklink|W3C_Validator|Validator\.nu|W3C-mobileOK|W3C_Unicorn|Faraday)' => [
            'name'=>'$1',
            'category'=>'Security Checker'
        ],

        // 服务代理 - 如兼容性检测，let's Encrypt ssl下发
        '(Amazon[ -]Route ?53[ -]Health[ -]Check[ -]Service|Castro 2, Episode Duration Lookup|Browsershots|SkypeUriPreview|WordPress|XenForo|YahooMailProxy|Snap URL Preview Service|Let\'s Encrypt validation server|HeartRails_Capture/\d|DataXu/\d|LinkPreview/([\d+\.])|Discordbot/([\d+.]+)|SSL Labs|TelegramBot|Vercelbot|Grammarly|ias-va.*admantx.*service-fetcher)' => [
            'name'=>'$1',
            'category'=>'Service Agent'
        ],

         // rss订阅
         '(BazQux|Bloglovin|Blogtrottr|CommaFeed|Feedbin|FeedBurner|Feed Wrangler|Feedly|Feedspot|Fever/[0-9]|FlipboardProxy|FlipboardRSS|FreshRSS|kouio|Netvibes|NewsBlur .*(Fetcher|Finder)|inoreader\.com|NewsGatorOnline|SilverReader|Superfeedr bot|Tiny Tiny RSS|UniversalFeedParser|zelist.ro feed parser|AwarioRssBot|RSSRadio \(Push Notification Scanner;support@dorada\.co\.uk\)|theoldreader\.com|MagpieRSS|SimplePie)' => [
            'name'=>'$1',
            'category'=>'Feed Fetcher'
        ],

        // 开发工具 
        '(python-httpx(?:/(\d+[\.\d]+))?|fasthttp(?:/(\d+[\.\d]+))?|geoipupdate(?:/(\d+[\.\d]+))?|PHP-Curl-Class(?:/(\d+[\.\d]+))?|Cpanel-HTTP-Client(?:/(\d+[\.\d]+))?|AnyEvent-HTTP(?:/(\d+[\.\d]+))?|SlimerJS/(\d+[\.\d]+)|Wget(?:/(\d+[\.\d]+))?|Guzzle(?:Http)?(?:/(\d+[\.\d]+))?|(?:lib)?curl(?:/(\d+[\.\d]+))?|python-requests(?:/(\d+[\.\d]+))?|Python-urllib(?:/?(\d+[\.\d]+))?|Apache-HttpClient(?:/?(\d+[\.\d]+))?|Java-http-client(?:/?(\d+[\.\d]+))?|Java(?:/?(\d+[\.\d]+))?|(?:perlclient|libwww-perl)(?:/?(\d+[\.\d]+))?|okhttp/([\d\.]+)|HTTP_Request2(?:/(\d+[\.\d]+))?|HTTP_Request2(?:/(\d+[\.\d]+))?|Mechanize(?:/(\d+[\.\d]+))?|aiohttp(?:/(\d+[\.\d]+))?|Google-HTTP-Java-Client(?:/(\d+[\.\w-]+))?|WWW-Mechanize(?:/(\d+[\.\d]+))?|Faraday(?: v(\d+[\.\d]+))?|(?:Go-http-client|Go )/?(?:(\d+[\.\d]+))?(?: package http)?|urlgrabber(?:/(\d+[\.\d]+))?|libdnf(?:/(\d+[\.\d]+))?|HTTPie(?:/(\d+[\.\d]+))?|rest-client/(\d+[\.\d]+).*ruby|RestSharp/(\d+[\.\d]+)|scalaj-http/(\d+[\.\d]+)|REST::Client/(\d+)|node-fetch/(\d+[\.\d]+)|ReactorNetty/(\d+[\.\d]+)|PostmanRuntime(?:/(\d+[\.\d]+))?|Jakarta Commons-HttpClient/([\.\d]+)|WinHttp.WinHttpRequest.+([\.\d]+)|WinHTTP|Embarcadero URI Client/([\.\d]+)|Mikrotik/([\.\d]+)|GRequests(?:/(\d+[\.\d]+))?|akka-http/([\.\d]+)|aria2(?:/(\d+[\.\d]+))?|BTWebClient/|gvfs/(?:(\d+[\.\d]+))?|uclient-fetch|cpprestsdk/([\.\d]+)|lua-resty-http/([\.\d]+).+ngx_|unirest-java/([\.\d]+)|jsdom/([\.\d]+))' => [
            'name'=>'$1',
            'category'=>'libraries',
        ],

        // 通用机器人
        '(A6-Indexer|nuhk|TsolCrawler|Yammybot|Openbot|Gulper Web Bot|grub-client|Download Demon|SearchExpress|Microsoft URL Control|borg|altavista|dataminr.com|tweetedtimes.com|TrendsmapResolver|teoma|blitzbot|oegp|furlbot|http client|polybot|htdig|mogimogi|larbin|scrubby|searchsight|seekbot|semanticdiscovery|snappy|vortex(?!(?: Build|Plus))|zeal|fast-webcrawler|converacrawler|dataparksearch|findlinks|BrowserMob|HttpMonitor|ThumbShotsBot|URL2PNG|ZooShot|GomezA|Google SketchUp|Read Later|RackspaceBot|robots|SeopultContentAnalyzer|7Siters|centuryb.o.t9|InterNaetBoten|EasyBib AutoCite|Bidtellect|tomnomnom/meg|My User Agent|cortex|CF-UC User Agent|Re-re Studio|adreview|AHC/|NameOfAgent|Request-Promise|ALittle Client|Hello, world|wp_is_mobile|0xAbyssalDoesntExist|[a-z0-9\-_]*((?<!cu|power[ _]|m[ _])bot(?![ _]TAB|[ _]?5[0-9]|[ _]Senior|[ _]Junior)|crawler|crawl|checker|archiver|transcoder|spider)([^a-z]|$))' => [
            'name'=>'$1',
            'category'=>'Generic Bot'
        ],
    ];       
}