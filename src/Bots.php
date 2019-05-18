<?php
namespace Aknife\Agent;

class Bots
{
    // 仅仅收录 热门搜索引擎
    public static $rule = [
        // 'Baidu Spider'
        'baiduspider(-image)?|baidu Transcoder|baidu.*spider' => [
            'name'=>'Baidu Spider',
            'category'=>'Search bot',
        ],

         // 'Sogou Spider'
        '(Sogou (web|inst|Pic) spider)|New-Sogou-Spider' => [
            'name'=>'Sogou Spider',
            'category'=>'Search bot',
        ],

        // '360 Spider'
        '360Spider(-Image|-Video)?' => [
            'name'=>'360Spider',
            'category'=>'Search bot',
        ],

        // YisouSpider - 神马搜索
        'YisouSpider' => [
            'name'=>'YisouSpider',
            'category'=>'Search bot',
        ],

         // 'Googlebot'
        'Googlebot(-Mobile|-Image|-Video|-News)?|Feedfetcher-Google|Google-Test|Google-Site-Verification|Google Web Preview|AdsBot-Google(-Mobile)?|Google-Adwords-Instant|APIs-Google|Mediapartners-Google|Google.*/\+/web/snippet|GoogleProducer|Google[ -]Publisher[ -]Plugin|Google-Shopping-Quality|Google-Adwords-DisplayAds|Google-Assess|Google-AdWords-Express|Google-speakr|Google-Read-Aloud' => [
            'name'=>'Googlebot',
            'category'=>'Search bot',
        ],

         // 'Yahoo! Slurp'
        'Yahoo! Slurp|Yahoo!-AdCrawler' => [
            'name'=>'Yahoo! Slurp',
            'category'=>'Search bot',
        ],

        // 'BingBot'
        'MSNBot|msrbot|bingbot|BingPreview|msnbot-(UDiscovery|NewsBlogs)|adidxbot' => [
            'name'=>'BingBot',
            'category'=>'Search bot',
        ],

        // 'DuckDuckGo Bot'
        'DuckDuck' => [
            'name'=>'DuckDuckGo Bot',
            'category'=>'Search bot',
        ],

        // 'Yandex Bot'
        'Yandex(SpravBot|ScreenshotBot|MobileBot|AccessibilityBot|ForDomain|Vertis|Market|Catalog|Calendar|Sitelinks|AdNet|Pagechecker|Webmaster|Media|Video|Bot|Images|Antivirus|Direct|Blogs|Favicons|ImageResizer|Verticals|News(links)?|Metrika|\.Gazeta Bot)|YaDirectFetcher' => [
            'name'=>'Yandex Bot',
            'category'=>'Search bot',
        ],

        // 'Ask Jeeves'
        'Ask Jeeves/Teoma' => [
            'name'=>'Ask Bot',
            'category'=>'Search bot',
        ],

        // 常见的Web爬虫
        '(curl|Wget|python-requests|Python-urllib|Java|Guzzle|perlclient|libwww-perl|okhttp|HTTP_Request2|Mechanize|aiohttp|Google-HTTP-Java-Client|WWW-Mechanize|Faraday|Go-http-client|urlgrabber|libdnf|HTTPie)' => [
            'name'=>'$1',
            'category'=>'Web Crawler',
        ]
    ];       
}