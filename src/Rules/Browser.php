<?php
namespace Aknife\Agent\Rules;
class Browser
{
    // 规则来源于 : https://github.com/matomo-org/device-detector/blob/master/regexes/client/mobile_apps.yml
    // 规则来源于 : https://github.com/matomo-org/device-detector/blob/master/regexes/client/browsers.yml
    public static $rule = [
        //==================== 软件内置浏览器 ====================
        # Naver (https://apps.apple.com/app/id393499958)
        'NAVER/(\d+[\.\d]+) CFNetwork' => [
            'name' => 'Naver',
            'version' => '$1',
            'category' => 'App'
        ],

        # Naver (https://play.google.com/store/apps/details?id=com.nhn.android.search)
        'NAVER\(inapp; search; .+; (\d+[\.\d]+);.+\)' => [
            'name' => 'Naver',
            'version' => '$1',
            'category' => 'App'
        ],
        'NAVER\(inapp; search; .+; (\d+[\.\d]+)\)' => [
            'name' => 'Naver',
            'version' => '$1',
            'category' => 'App'
        ],

        # Soldier
        'Chrome/Soldier_([\d\.]+)' => [
            'name' => 'Soldier',
            'version' => '$1',
            'category' => 'App'
        ],

        # AndroidDownloadManager
        'AndroidDownloadManager(?:[ /]([\d\.]+))?' => [
            'name' => 'AndroidDownloadManager',
            'version' => '$1',
            'category' => 'App'
        ],

        # Apple News
        '(?:Apple)?News(?:[ /][\d\.]+)? Version(?:[ /]([\d\.]+))?' => [
            'name' => 'Apple News',
            'version' => '$1',
            'category' => 'App'
        ],

        'bPod' => [
            'name' => 'bPod',
            'version' => '',
            'category' => 'App'
        ],

        # Facebook Audience Network
        'AudienceNetworkForAndroid.+(?:FBAV)(?:[ /]([\d\.]+))?' => [
            'name' => 'Facebook Audience Network',
            'version' => '$1',
            'category' => 'App'
        ],

        # Facebook Messenger (https://play.google.com/store/apps/details?id=com.facebook.orca)
        '(?:MessengerForiOS|MESSENGER|FB_IAB/Orca-Android).(?:FBAV)(?:[ /]([\d\.]+))?' => [
            'name' => 'Facebook Messenger',
            'version' => '$1',
            'category' => 'App'
        ],

        # Facebook Messenger Lite
        '(?:mLite|MessengerLite(?:ForiOS)?).(?:FBAV)(?:[ /]([\d\.]+))?' => [
            'name' => 'Facebook Messenger Lite',
            'version' => '$1',
            'category' => 'App'
        ],

        # Facebook Groups
        '(?:GroupsForiOS).(?:FBAV)(?:[ /]([\d\.]+))?' => [
            'name' => 'Facebook Groups',
            'version' => '$1',
            'category' => 'App'
        ],

        # Facebook Lite (https://play.google.com/store/apps/details?id=com.facebook.lite)
        'FBAN/EMA.+FBAV(?:[ /]([\d\.]+))?' => [
            'name' => 'Facebook Lite',
            'version' => '$1',
            'category' => 'App'
        ],

        # Meta Business Suite (https://apps.apple.com/us/app/facebook-business-suite/id514643583)
        'FBAN/FBPageAdmin.+FBAV(?:[ /]([\d\.]+))?' => [
            'name' => 'Meta Business Suite',
            'version' => '$1',
            'category' => 'App'
        ],

        # Facebook
        '(?:FBAV|com.facebook.katana)(?:[ /]([\d\.]+))?' => [
            'name' => 'Facebook',
            'version' => '$1',
            'category' => 'App'
        ],
        '(?:FBAN|FBSV|FBID|FBBV)/' => [
            'name' => 'Facebook',
            'version' => '',
            'category' => 'App'
        ],

        # FeedR
        'FeedR(?:/([\d\.]+))?' => [
            'name' => 'FeedR',
            'version' => '$1',
            'category' => 'App'
        ],

        # Google Go
        'com.google.android.apps.searchlite' => [
            'name' => 'Google Go',
            'version' => '',
            'category' => 'App'
        ],

        # Google Play Kiosk
        'com.google.android.apps.magazines' => [
            'name' => 'Google Play Newsstand',
            'version' => '',
            'category' => 'App'
        ],

        # Google Plus
        'com.google.GooglePlus' => [
            'name' => 'Google Plus',
            'version' => '',
            'category' => 'App'
        ],

        # Google Drive (https://apps.apple.com/us/app/google-drive/id507874739)
        'Google.DriveExtension(?:/([\d\.]+))?' => [
            'name' => 'Google Drive',
            'version' => '$1',
            'category' => 'App'
        ],

        # WeChat
        'MicroMessenger/([\d\.]+)' => [
            'name' => 'WeChat',
            'version' => '$1',
            'category' => 'App'
        ],
        'WeChat/([\d\.]+)' => [
            'name' => 'WeChat',
            'version' => '$1',
            'category' => 'App'
        ],
        'WeChatShareExtensionNew/([\d\.]+)' => [
            'name' => 'WeChat Share Extension',
            'version' => '$1',
            'category' => 'App'
        ],

        # DingTalk
        'DingTalk/([0-9\.]+)' => [
            'name' => 'DingTalk',
            'version' => '$1',
            'category' => 'App'
        ],

        # Sina Weibo
        '.*__weibo__([0-9\.]+)__' => [
            'name' => 'Sina Weibo',
            'version' => '$1',
            'category' => 'App'
        ],

        # Pinterest
        'Pinterest(?: for (?:Android(?: Tablet)?|iOS))?(?:/([\d\.]+))?' => [
            'name' => 'Pinterest',
            'version' => '$1',
            'category' => 'App'
        ],

        # Podcatcher Deluxe
        'Podcatcher Deluxe' => [
            'name' => 'Podcatcher Deluxe',
            'version' => '',
            'category' => 'App'
        ],

        # YouTube
        'com.google.android.youtube(?:/([\d\.]+))?' => [
            'name' => 'YouTube',
            'version' => '$1',
            'category' => 'App'
        ],

        # Netflix (https://play.google.com/store/apps/details?id=com.netflix.mediaclient)
        'com.netflix.mediaclient(?:/(\d+\.[\d\.]+))?' => [
            'name' => 'Netflix',
            'version' => '$1',
            'category' => 'App'
        ],

        # Downcast (www.downcastapp.com | https://apps.apple.com/us/app/downcast/id393858566)
        'Downcast/(\d+\.[\d\.]+)?(?:.+(?:!Mac)|$)' => [
            'name' => 'Downcast',
            'version' => '$1',
            'category' => 'App'
        ],

        # Flipp (https://apps.apple.com/us/app/flipp-weekly-shopping/id725097967)
        'Flipp-iOS/.+CFNetwork' => [
            'name' => 'Flipp',
            'version' => '',
            'category' => 'App'
        ],

        'Flipp-iOS/(\d+[\.\d]+)' => [
            'name' => 'Flipp',
            'version' => '$1',
            'category' => 'App'
        ],

        # AFNetworking generic
        '([^/]+)/(\d+(?:\.\d+)+) \((?:iPhone|iPad); iOS [0-9\.]+; Scale/[0-9\.]+\)' => [
            'name' => '$1',
            'version' => '$2',
            'category' => 'App'
        ],

        # WhatsApp
        'WhatsApp(?:[ /]([\d\.]+))?' => [
            'name' => 'WhatsApp',
            'version' => '$1',
            'category' => 'App'
        ],

        # Line
        'Line(?:[ /]([\d\.]+))' => [
            'name' => 'Line',
            'version' => '$1',
            'category' => 'App'
        ],

        # Instacast
        'Instacast(?:HD)?/(\d\.[\d\.abc]+) CFNetwork/([\d\.]+) Darwin/([\d\.]+)' => [
            'name' => 'Instacast',
            'version' => '$1',
            'category' => 'App'
        ],
        'Podcasts/([\d\.]+)' => [
            'name' => 'Podcasts',
            'version' => '$1',
            'category' => 'App'
        ],
        'Pocket Casts(?:, (?:Android|iOS) v([\d\.]+))?' => [
            'name' => 'Pocket Casts',
            'version' => '$1',
            'category' => 'App'
        ],
        'Podcat/([\d\.]+)' => [
            'name' => 'Podcat',
            'version' => '$1',
            'category' => 'App'
        ],
        'BeyondPod' => [
            'name' => 'BeyondPod',
            'version' => '',
            'category' => 'App'
        ],
        'AntennaPod/?([\d\.]+)?' => [
            'name' => 'AntennaPod',
            'version' => '$1',
            'category' => 'App'
        ],
        'Overcast/([\d\.]+)' => [
            'name' => 'Overcast',
            'version' => '$1',
            'category' => 'App'
        ],
        '(?:CastBox|fm.castbox.audiobook.radio.podcast)/?([\d\.]+)?' => [
            'name' => 'CastBox',
            'version' => '$1',
            'category' => 'App'
        ],
        'Player FM' => [
            'name' => 'Player FM',
            'version' => '',
            'category' => 'App'
        ],
        'Podkicker( (?:Pro|Classic))?/([\d\.]+)' => [
            'name' => 'Podkicker$1',
            'version' => '$2',
            'category' => 'App'
        ],
        'PodcastRepublic/([\d\.]+)' => [
            'name' => 'Podcast Republic',
            'version' => '$1',
            'category' => 'App'
        ],
        'Castro/(\d+)' => [
            'name' => 'Castro',
            'version' => '$1',
            'category' => 'App'
        ],
        'Castro 2 ([\d\.]+)/[\d]+ Like iTunes' => [
            'name' => 'Castro 2',
            'version' => '$1',
            'category' => 'App'
        ],
        'Castro 2' => [
            'name' => 'Castro 2',
            'version' => '',
            'category' => 'App'
        ],
        'DoggCatcher' => [
            'name' => 'DoggCatcher',
            'version' => '',
            'category' => 'App'
        ],
        'PodcastAddict/v([\d]+)' => [
            'name' => 'Podcast & Radio Addict',
            'version' => '$1',
            'category' => 'App'
        ],
        'Podcat(?: 2)?/([\d]+) CFNetwork' => [
            'name' => 'Podcat',
            'version' => '$1',
            'category' => 'App'
        ],
        'iCatcher[^\d]+([\d\.]+)' => [
            'name' => 'iCatcher',
            'version' => '$1',
            'category' => 'App'
        ],
        'YelpApp/([\d\.]+)' => [
            'name' => 'Yelp Mobile',
            'version' => '$1',
            'category' => 'App'
        ],
        'jp.co.yahoo.android.yjtop/([\d\.]+)' => [
            'name' => 'Yahoo! Japan',
            'version' => '$1',
            'category' => 'App'
        ],
        'RSSRadio/([\d]+)?' => [
            'name' => 'RSSRadio',
            'version' => '$1',
            'category' => 'App'
        ],
        'SogouSearch Android[\d\.]+ version([\d\.]+)?' => [
            'name' => 'SogouSearch App',
            'version' => '$1',
            'category' => 'App'
        ],
        'NewsArticle/([\d\.]+)?' => [
            'name' => 'NewsArticle App',
            'version' => '$1',
            'category' => 'App'
        ],
        'tieba/([\d\.]+)?' => [
            'name' => 'tieba',
            'version' => '$1',
            'category' => 'App'
        ],
        'com\.douban\.group/([\d\.]+)?' => [
            'name' => 'douban App',
            'version' => '$1',
            'category' => 'App'
        ],
        'BingWeb/([\d\.]+)?' => [
            'name' => 'BingWebApp',
            'version' => '$1',
            'category' => 'App'
        ],
        '(?:com.google.GoogleMobile|GSA)/([\d\.]+)?' => [
            'name' => 'Google Search App',
            'version' => '$1',
            'category' => 'App'
        ],
        'Flipboard/([\d\.]+)?' => [
            'name' => 'Flipboard App',
            'version' => '$1',
            'category' => 'App'
        ],
        'Instagram[ /]([\d\.]+)?' => [
            'name' => 'Instagram App',
            'version' => '$1',
            'category' => 'App'
        ],
        'baiduboxapp/([\d\.]+)?' => [
            'name' => 'Baidu Box App',
            'version' => '$1',
            'category' => 'App'
        ],
        'Crosswalk(?!.*(?:Streamy|QwantMobile))/([\d\.]+)?' => [
            'name' => 'CrosswalkApp',
            'version' => '$1',
            'category' => 'App'
        ],
        'Twitter for iPhone[/]?([\d\.]+)?' => [
            'name' => 'Twitter',
            'version' => '$1',
            'category' => 'App'
        ],
        'Twitter/([\d\.]+)' => [
            'name' => 'Twitter',
            'version' => '$1',
            'category' => 'App'
        ],
        'TwitterAndroid[/]?([\d\.]+)?' => [
            'name' => 'Twitter',
            'version' => '$1',
            'category' => 'App'
        ],
        # Pocket Casts (https://pocketcasts.com)
        '^Pocket Casts' => [
            'name' => 'Pocket Casts',
            'version' => '',
            'category' => 'App'
        ],
        # Gaana (https://gaana.com)
        '^GaanaAndroid-([\d\.]+)' => [
            'name' => 'Gaana',
            'version' => '$1',
            'category' => 'App'
        ],
        'TopBuzz/([\d\.]+)' => [
            'name' => 'TopBuzz',
            'version' => '$1',
            'category' => 'App'
        ],
        'Snapchat/([\d\.]+)' => [
            'name' => 'Snapchat',
            'version' => '$1',
            'category' => 'App'
        ],
        'AhaRadio2/([\d\.]+)' => [
            'name' => 'Aha Radio 2',
            'version' => '$1',
            'category' => 'App'
        ],
        # Unibox (https://apps.apple.com/app/id933879046)
        'Unibox/([\d\.]+)' => [
            'name' => 'Unibox',
            'version' => '',
            'category' => 'App'
        ],

        # Strimio (https://www.strimio.com/)
        'strimio(?:-desktop)/(\d+\.(?:[\.\d]+))?' => [
            'name' => 'Strimio',
            'version' => '$1',
            'category' => 'App'
        ],

        # UnityPlayer
        'UnityPlayer/([\d\.]+)' => [
            'name' => 'UnityPlayer',
            'version' => '$1',
            'category' => 'App'
        ],

        # (https://play.google.com/store/apps/details?id=cl.uchile.ing.adi.ucursos)
        'UCURSOS/v([\d\.]+)' => [
            'name' => 'U-Cursos',
            'version' => '$1',
            'category' => 'App'
        ],

        # HeyTabBrowser or HeyTabAccount
        'HeyTapBrowser/([\d\.]+)' => [
            'name' => 'HeyTapBrowser',
            'version' => '$1',
            'category' => 'App'
        ],

        # Roblox App
        'RobloxApp/([\d\.]+)' => [
            'name' => 'Roblox',
            'version' => '$1',
            'category' => 'App'
        ],

        'Viber/([\d\.]+)' => [
            'name' => 'Viber',
            'version' => '$1',
            'category' => 'App'
        ],

        'Siri/1' => [
            'name' => 'Siri',
            'version' => '1.0',
            'category' => 'App'
        ],

        'LinkedIn(?:App)?(?:/([\d\.]+))?' => [
            'name' => 'LinkedIn',
            'version' => '$1',
            'category' => 'App'
        ],

        # https://apps.apple.com/ru/app/instapaper/id288545208
        'Instapaper/([\d\.]+)' => [
            'name' => 'Instapaper',
            'version' => '$1',
            'category' => 'App'
        ],

        # https://apps.apple.com/us/app/keeper-password-manager/id287170072
        'Keeper/([\d\.]+)' => [
            'name' => 'Keeper Password Manager',
            'version' => '$1',
            'category' => 'App'
        ],

        # https://apps.apple.com/us/app/skyeng-teachers/id1483049537
        'Skyeng Teachers/([\d\.]+)' => [
            'name' => 'Skyeng Teachers',
            'version' => '$1',
            'category' => 'App'
        ],

        'Kik/([\d\.]+) \(Android' => [
            'name' => 'Kik',
            'version' => '$1',
            'category' => 'App'
        ],

        'Procast/?([\d\.]+)?' => [
            'name' => 'Procast',
            'version' => '$1',
            'category' => 'App'
        ],

        # DeviantArt (https://apps.apple.com/us/app/deviantart/id925219396)
        'DeviantArt/([\d\.]+)' => [
            'name' => 'DeviantArt',
            'version' => '',
            'category' => 'App'
        ],

        # Discord (https://apps.apple.com/us/app/discord-talk-chat-hang-out/id985746746)
        'discord/([\d\.]+).+Electron' => [
            'name' => 'Discord',
            'version' => '$1',
            'category' => 'App'
        ],

        'discord(?:-Updater)?/([\d\.]+)' => [
            'name' => 'Discord',
            'version' => '',
            'category' => 'App'
        ],

        # Covenant Eyes (https://apps.apple.com/us/app/covenant-eyes/id335318146)
        'Covenant Eyes/([\d\.]+)' => [
            'name' => 'Covenant Eyes',
            'version' => '$1',
            'category' => 'App'
        ],

        # HP Smart (https://apps.apple.com/us/app/hp-smart/id469284907)
        'HP Smart/([\d\.]+)' => [
            'name' => 'HP Smart',
            'version' => '',
            'category' => 'App'
        ],

        # Bitsboard (https://apps.apple.com/us/app/bitsboard-flashcards-games/id516842210)
        'Bitsboard/([\d\.]+)' => [
            'name' => 'Bitsboard',
            'version' => '$1',
            'category' => 'App'
        ],

        # BetBull (https://apps.apple.com/us/app/betbull-sport-tips-casino/id1032680895)
        'Betbull/([\d\.]+)' => [
            'name' => 'BetBull',
            'version' => '',
            'category' => 'App'
        ],

        # U-Cursos (https://apps.apple.com/us/app/u-cursos/id834515435)
        'U-Cursos/([\d\.]+)' => [
            'name' => 'U-Cursos',
            'version' => '',
            'category' => 'App'
        ],

        # https://apps.apple.com/mt/app/1password-password-manager/id568903335
        '1PasswordThumbs/([\d\.]+)' => [
            'name' => '1Password',
            'version' => '$1',
            'category' => 'App'
        ],

        '(?:Microsoft Office )?(Access|Excel|OneDrive for Business|OneNote|PowerPoint|Project|Publisher|Visio|Word)[ /]([\d\.]+)' => [
            'name' => 'Microsoft Office $1',
            'version' => '$2',
            'category' => 'App'
        ],

        # https://apps.apple.com/us/app/microsoft-onedrive/id477537958
        'OneDriveiOSApp/([\d\.]+)' => [
            'name' => 'Microsoft OneDrive',
            'version' => '$1',
            'category' => 'App'
        ],

        'Microsoft Office Mobile/([\d\.]+)' => [
            'name' => 'Microsoft Office Mobile',
            'version' => '$1',
            'category' => 'App'
        ],

        # Skype
        'Skype/([\d\.]+)' => [
            'name' => 'Skype',
            'version' => '$1',
            'category' => 'App'
        ],

        'OC/([\d\.]+) \(Skype for Business\)' => [
            'name' => 'Skype for Business',
            'version' => '$1',
            'category' => 'App'
        ],

        # https://apps.apple.com/us/app/skype-for-business/id605841731
        'iPhoneLync/([\d\.]+)' => [
            'name' => 'Skype for Business',
            'version' => '$1',
            'category' => 'App'
        ],

        # GroupMe (https://apps.apple.com/us/app/groupme/id392796698)
        'GroupMe/([\d\.]+)' => [
            'name' => 'GroupMe',
            'version' => '$1',
            'category' => 'App'
        ],

        # TikTok (https://apps.apple.com/app/id835599320 | https://play.google.com/store/apps/details?id=com.zhiliaoapp.musically)
        '(?:TikTok[/ ]|musical_ly_|AppName/musical_ly app_version/)(\d+\.(?:[\.\d]+))?' => [
            'name' => 'TikTok',
            'version' => '$1',
            'category' => 'App'
        ],

        # https://apps.apple.com/app/id1026349850
        'Copied/(\d+[\.\d]+) CFNetwork' => [
            'name' => 'Copied',
            'version' => '',
            'category' => 'App'
        ],

        # https://apps.apple.com/app/id448639966
        'Pic Collage/(\d+[\.\d]+) CFNetwork' => [
            'name' => 'Pic Collage',
            'version' => '$1',
            'category' => 'App'
        ],

        # https://apps.apple.com/app/id506003812
        'Papers/(\d+[\.\d]+) CFNetwork' => [
            'name' => 'Papers',
            'version' => '$1',
            'category' => 'App'
        ],

        # https://apps.apple.com/app/id331787573
        'RoboForm/(\d+[\.\d]+) CFNetwork' => [
            'name' => 'RoboForm',
            'version' => '',
            'category' => 'App'
        ],

        # https://apps.apple.com/app/id618783545
        'Slack/(\d+[\.\d]+) CFNetwork' => [
            'name' => 'Slack',
            'version' => '',
            'category' => 'App'
        ],
        'com.tinyspeck.chatlyio/(\d+[\.\d]+)' => [
            'name' => 'Slack',
            'version' => '$1',
            'category' => 'App'
        ],

        # https://apps.apple.com/us/app/id362057947
        'KAKAOTALK (\d+\.(?:[\.\d]+))?' => [
            'name' => 'KakaoTalk',
            'version' => '$1',
            'category' => 'App'
        ],

        # https://apps.apple.com/us/app/shopee-t%E1%BA%BFt-sale-27-01/id959841449
        'ShopeeVN/([\d\.]+)' => [
            'name' => 'Shopee',
            'version' => '$1',
            'category' => 'App'
        ],

        # https://apps.apple.com/us/app/sport1/id1185932089
        'SPORT1/([\d\.]+)' => [
            'name' => 'SPORT1',
            'version' => '',
            'category' => 'App'
        ],

        # https://apps.apple.com/us/app/clovia-lingerie-shopping-app/id1243996857
        'Clovia/([\d\.]+)' => [
            'name' => 'Clovia',
            'version' => '$1',
            'category' => 'App'
        ],

        # https://apps.apple.com/us/app/showme-interactive-whiteboard/id445066279
        'ShowMe/([\d\.]+)' => [
            'name' => 'ShowMe',
            'version' => '$1',
            'category' => 'App'
        ],

        # https://apps.apple.com/us/app/wattpad-read-write-stories/id306310789
        'Wattpad/([\d\.]+)' => [
            'name' => 'Wattpad',
            'version' => '$1',
            'category' => 'App'
        ],

        # https://apps.apple.com/us/app/the-wall-street-journal/id364387007
        'WSJ/([\d\.]+)' => [
            'name' => 'The Wall Street Journal',
            'version' => '',
            'category' => 'App'
        ],

        # https://apps.apple.com/us/app/wh-question-cards-pro-who-what-when-where-why/id544870563
        'WH Questions/([\d\.]+)' => [
            'name' => 'WH Questions',
            'version' => '$1',
            'category' => 'App'
        ],

        # https://apps.apple.com/us/app/whisper-share-express-meet/id506141837
        'whisper/([\d\.]+)' => [
            'name' => 'Whisper',
            'version' => '',
            'category' => 'App'
        ],

        # https://apps.apple.com/us/app/opal-travel/id941006607
        'Opal/([\d\.]+)' => [
            'name' => 'Opal Travel',
            'version' => '$1',
            'category' => 'App'
        ],

        # https://apps.apple.com/us/app/zalo/id579523206
        'Zalo/([\d\.]+)' => [
            'name' => 'Zalo',
            'version' => '$1',
            'category' => 'App'
        ],

        # https://apps.apple.com/us/app/%D1%8F%D0%BD%D0%B4%D0%B5%D0%BA%D1%81/id1050704155
        'Yandex/([\d\.]+)' => [
            'name' => 'Yandex',
            'version' => '',
            'category' => 'App'
        ],

        'Zoho Chat/([\d\.]+)' => [
            'name' => 'Zoho Chat',
            'version' => '$1',
            'category' => 'App'
        ],

        # Thunder (https://xl11.xunlei.com/)
        'Thunder/(\d+[\.\d]+)' => [
            'name' => 'Thunder',
            'version' => '$1',
            'category' => 'App'
        ],

        # CGN (https://www.cgn.it/)
        'CGNBrowser/(\d+[\.\d]+)' => [
            'name' => 'CGN',
            'version' => '$1',
            'category' => 'App'
        ],

        # Podbean (http://podbean.com | https://play.google.com/store/apps/details?id=com.podbean.app.podcast)
        'Podbean/.+App (\d+[\.\d]+)' => [
            'name' => 'Podbean',
            'version' => '$1',
            'category' => 'App'
        ],

        # Alexa Media Player
        'AlexaMediaPlayer/(\d+[\.\d]+)' => [
            'name' => 'Alexa Media Player',
            'version' => '$1',
            'category' => 'App'
        ],

        # TuneIn Radio Pro
        'TuneIn Radio Pro(?:[^/]*)/(\d+[\.\d]+)' => [
            'name' => 'TuneIn Radio Pro',
            'version' => '$1',
            'category' => 'App'
        ],
        'TuneIn(?: Radio(?:[^/]*))?/(\d+[\.\d]+)' => [
            'name' => 'TuneIn Radio',
            'version' => '$1',
            'category' => 'App'
        ],

        # Podcaster
        'Podcaster/(\d+[\.\d]+)' => [
            'name' => 'Podcaster',
            'version' => '$1',
            'category' => 'App'
        ],

        # DevCasts (https://apps.apple.com/app/id1481596184)
        'devcasts/(\d+[\.\d]+)' => [
            'name' => 'DevCasts',
            'version' => '$1',
            'category' => 'App'
        ],

        # Swoot
        'Swoot/(\d+[\.\d]+)' => [
            'name' => 'Swoot',
            'version' => '$1',
            'category' => 'App'
        ],

        # RadioPublic (https://play.google.com/store/apps/details?id=com.radiopublic.android)
        'RadioPublic/android-(\d+[\.\d]+)' => [
            'name' => 'RadioPublic',
            'version' => '$1',
            'category' => 'App'
        ],

        # Podimo (https://play.google.com/store/apps/details?id=com.podimo)
        'Podimo/(\d+[\.\d]+)' => [
            'name' => 'Podimo',
            'version' => '$1',
            'category' => 'App'
        ],

        # Evolve Podcast (https://apps.apple.com/us/app/id1199070742)
        'com.evolve.podcast/(\d+[\.\d]+)' => [
            'name' => 'Evolve Podcast',
            'version' => '$1',
            'category' => 'App'
        ],

        ' Rocket.Chat\+?/(\d+[\.\d]+)' => [
            'name' => 'Rocket Chat',
            'version' => '$1',
            'category' => 'App'
        ],

        # Pandora
        '^Pandora Audio.+Android' => [
            'name' => 'Pandora',
            'version' => '',
            'category' => 'App'
        ],

        # NPR One https://play.google.com/store/apps/details?id=org.npr.one
        '^NPROneAndroid' => [
            'name' => 'NPR One',
            'version' => '',
            'category' => 'App'
        ],

        # Wirtschafts Woche Nachrichte https://apps.apple.com/de/app/wirtschaftswoche-nachrichten/id1339187646
        '^WirtschaftsWoche-iOS-(\d+[\.\d]+)' => [
            'name' => 'Wirtschafts Woche',
            'version' => '$1',
            'category' => 'App'
        ],

        '^TVirl/(\d+[\.\d]+)' => [
            'name' => 'TVirl',
            'version' => '$1',
            'category' => 'App'
        ],

        # ChMate https://play.google.com/store/apps/details?id=jp.co.airfront.android.a2chMate
        '2?chMate/(\d+[\.\d]+)' => [
            'name' => 'ChMate',
            'version' => '$1',
            'category' => 'App'
        ],

        # 2tch https://apps.apple.com/jp/app/2tch/id305982914
        '2tch/(\d+[\.\d]+)' => [
            'name' => '2tch',
            'version' => '$1',
            'category' => 'App'
        ],

        # Ciisaa https://play.google.com/store/apps/details?id=com.gmail.aosoan.ciisaa
        'Ciisaa/(\d+[\.\d]+)' => [
            'name' => 'Ciisaa',
            'version' => '$1',
            'category' => 'App'
        ],

        # BB2C https://itunes.apple.com/us/app/bb2c/id298820042?mt=8
        'BB2C (\d+[\.\d]+)' => [
            'name' => 'BB2C',
            'version' => '$1',
            'category' => 'App'
        ],

        # twinkle https://itunes.apple.com/app/twinkle/id463142843
        'twinkle/(\d+[\.\d]+)' => [
            'name' => 'twinkle',
            'version' => '$1',
            'category' => 'App'
        ],

        # JaneStyle https://apps.apple.com/app/id1157926535
        'JaneStyle_iOS/(\d+[\.\d]+)' => [
            'name' => 'JaneStyle',
            'version' => '$1',
            'category' => 'App'
        ],

        # Binance https://play.google.com/store/apps/details?id=com.binance.dev
        'BNC/.+\(Android (\d+[\.\d]+)\)' => [
            'name' => 'Binance',
            'version' => '$1',
            'category' => 'App'
        ],

        # Binance (https://www.binance.com/en/desktop-download)
        'Binance/(\d+[\.\d]+)' => [
            'name' => 'Binance',
            'version' => '$1',
            'category' => 'App'
        ],

        # My World https://apps.apple.com/app/id598556821
        'ru\.mail\.my/(\d+[\.\d]+)' => [
            'name' => 'My World',
            'version' => '$1',
            'category' => 'App'
        ],

        # Odnoklassniki https://play.google.com/store/apps/details?id=ru.ok.android https://apps.apple.com/app/id398465290
        'OK(?:Android|iOS)/([\d\.]+)' => [
            'name' => 'Odnoklassniki',
            'version' => '$1',
            'category' => 'App'
        ],

        # YakYak https://github.com/yakyak/yakyak
        'yakyak/(\d+[\.\d]+)' => [
            'name' => 'YakYak',
            'version' => '$1',
            'category' => 'App'
        ],

        # Microsoft Teams (https://www.microsoft.com/en/microsoft-teams/group-chat-software)
        'Teams/(\d+[\.\d]+)' => [
            'name' => 'Teams',
            'version' => '$1',
            'category' => 'App'
        ],

        'TeamsMobile-(?:Android|iOS)' => [
            'name' => 'Teams',
            'version' => '',
            'category' => 'App'
        ],

        # Streamlabs OBS (https://streamlabs.com/)
        'StreamlabsOBS/(\d+[\.\d]+)' => [
            'name' => 'Streamlabs OBS',
            'version' => '$1',
            'category' => 'App'
        ],

        # Blitz (https://blitz.gg/)
        'Blitz/([\d\.]+)' => [
            'name' => 'Blitz',
            'version' => '$1',
            'category' => 'App'
        ],

        # OfferUp (https://play.google.com/store/apps/details?id=com.offerup)
        'OfferUp/([\d\.]+)' => [
            'name' => 'OfferUp',
            'version' => '$1',
            'category' => 'App'
        ],

        # Vuhuv (https://play.google.com/store/apps/details?id=com.vuhuv)
        'Vuhuv/([\d\.]+)' => [
            'name' => 'Vuhuv',
            'version' => '$1',
            'category' => 'App'
        ],

        '.+/(?:gfibertv|gftv200)-([\d]+)-' => [
            'name' => 'Google Fiber TV',
            'version' => '$1',
            'category' => 'App'
        ],

        # QuickCast (https://play.google.com/store/apps/details?id=com.wukongtv.wkcast.intl)
        'QuickCast$' => [
            'name' => 'QuickCast',
            'version' => '',
            'category' => 'App'
        ],

        # AliExpress (https://play.google.com/store/apps/details?id=com.alibaba.aliexpresshd)
        'Aliexpress(?:Android)?/([\d\.]+)' => [
            'name' => 'AliExpress',
            'version' => '$1',
            'category' => 'App'
        ],

        # Blue Proxy (https://play.google.com/store/apps/details?id=com.udicorn.proxy)
        'Blue Proxy/([\d\.]+)' => [
            'name' => 'Blue Proxy',
            'version' => '$1',
            'category' => 'App'
        ],

        # https://www.n-tv.de/
        'ntvmobil/' => [
            'name' => 'NTV Mobil',
            'version' => '',
            'category' => 'App'
        ],

        # COAF SMART Citizen (https://apps.apple.com/app/id1478339047)
        'COAF SMART Citizen/' => [
            'name' => 'COAF SMART Citizen',
            'version' => '',
            'category' => 'App'
        ],

        # GitHub Desktop (https://desktop.github.com/)
        'GitHubDesktop/([\d\.]+)' => [
            'name' => 'GitHub Desktop',
            'version' => '$1',
            'category' => 'App'
        ],

        # Logi Options+ (https://www.logitech.com/en-us/software/logi-options-plus.html)
        'logioptionsplus/([\d\.]+)' => [
            'name' => 'Logi Options+',
            'version' => '$1',
            'category' => 'App'
        ],

        # Emby Theater (https://emby.media/emby-theater.html)
        'EmbyTheater/([\d\.]+)' => [
            'name' => 'Emby Theater',
            'version' => '$1',
            'category' => 'App'
        ],

        # Y8 Browser (https://www.y8.com/)
        'y8-browser/([\d\.]+)' => [
            'name' => 'Y8 Browser',
            'version' => '$1',
            'category' => 'App'
        ],

        # NuMuKi Browser (https://www.numuki.com/app-download/)
        'NuMuKiBrowser/([\d\.]+)' => [
            'name' => 'NuMuKi Browser',
            'version' => '$1',
            'category' => 'App'
        ],

        # Landis+Gyr AIM Browser (https://www.landisgyr.eu/product/gridstream-aim/)
        'LandisGyrAIMbrowser/(\d+[\.\d]+)' => [
            'name' => 'Landis+Gyr AIM Browser',
            'version' => '$1',
            'category' => 'App'
        ],

        # Visual Studio Code (https://code.visualstudio.com/)
        'Code/(\d+[\.\d]+)' => [
            'name' => 'Visual Studio Code',
            'version' => '$1',
            'category' => 'App'
        ],

        # Wireshark (https://www.wireshark.org)
        'Wireshark/(\d+[\.\d]+)' => [
            'name' => 'Wireshark',
            'version' => '$1',
            'category' => 'App'
        ],

        # Samsung Magician (https://www.samsung.com/semiconductor/minisite/ssd/product/consumer/magician/)
        'Magician' => [
            'name' => 'Samsung Magician',
            'version' => '',
            'category' => 'App'
        ],

        # Razer Synapse (https://www.razer.com/synapse-3)
        'Razer Central PC' => [
            'name' => 'Razer Synapse',
            'version' => '',
            'category' => 'App'
        ],

        # Git (https://git-scm.com/download/win)
        'git/(\d+[\.\d]+)' => [
            'name' => 'Git',
            'version' => '$1',
            'category' => 'App'
        ],

        # Google Podcasts (https://apps.apple.com/us/app/google-podcasts/id1398000105)
        'GooglePodcasts/(\d+[\.\d]+)' => [
            'name' => 'Google Podcasts',
            'version' => '$1',
            'category' => 'App'
        ],

        # Windows CryptoAPI (https://www.microsoft.com/en-us/)
        'Microsoft-CryptoAPI/(\d+[\.\d]+)' => [
            'name' => 'Windows CryptoAPI',
            'version' => '',
            'category' => 'App'
        ],

        # Windows Delivery Optimization (https://www.microsoft.com/en-us/)
        'Microsoft-Delivery-Optimization' => [
            'name' => 'Windows Delivery Optimization',
            'version' => '',
            'category' => 'App'
        ],

        # Windows Update Agent (https://www.microsoft.com/en-us/)
        'Windows-Update-Agent' => [
            'name' => 'Windows Update Agent',
            'version' => '',
            'category' => 'App'
        ],

        # Dr. Watson (https://www.microsoft.com/en-us/)
        '^MSDW' => [
            'name' => 'Dr. Watson',
            'version' => '',
            'category' => 'App'
        ],

        # qBittorrent (https://www.qbittorrent.org/)
        'qBittorrent/(\d+[\.\d]+)' => [
            'name' => 'qBittorrent',
            'version' => '$1',
            'category' => 'App'
        ],

        # CPU-Z (https://www.cpuid.com/)
        '^CPUID' => [
            'name' => 'CPU-Z',
            'version' => '',
            'category' => 'App'
        ],

        # AIDA64 (https://www.aida64.com/)
        'AIDA64' => [
            'name' => 'AIDA64',
            'version' => '',
            'category' => 'App'
        ],

        # HandBrake (https://handbrake.fr/)
        'HandBrake Win Upd (\d+[\.\d]+)' => [
            'name' => 'HandBrake',
            'version' => '$1',
            'category' => 'App'
        ],

        # CCleaner (https://www.ccleaner.com/)
        'CCleaner, (\d+[\.\d]+)' => [
            'name' => 'CCleaner',
            'version' => '$1',
            'category' => 'App'
        ],

        # Edge Update (https://www.microsoft.com/en-us/)
        'Microsoft Edge Update/(\d+[\.\d]+)' => [
            'name' => 'Edge Update',
            'version' => '$1',
            'category' => 'App'
        ],

        # Chrome Update (https://www.google.com/chrome/)
        'Google(?:Software| )Update/(\d+[\.\d]+)' => [
            'name' => 'Chrome Update',
            'version' => '$1',
            'category' => 'App'
        ],

        # Bose Music (https://apps.apple.com/us/app/bose-music/id1364986984)
        'Bose Music' => [
            'name' => 'Bose Music',
            'version' => '',
            'category' => 'App'
        ],

        # HikConnect (https://apps.apple.com/us/app/hik-connect-for-end-user/id1087803190)
        'HikConnect' => [
            'name' => 'Hik-Connect',
            'version' => '',
            'category' => 'App'
        ],

        # Cortana (https://www.microsoft.com/en-us/)
        'Cortana (\d+[\.\d]+)' => [
            'name' => 'Cortana',
            'version' => '$1',
            'category' => 'App'
        ],

        # Opera News (https://play.google.com/store/apps/details?id=com.opera.app.news)
        'Opera News/(\d+[\.\d]+)' => [
            'name' => 'Opera News',
            'version' => '$1',
            'category' => 'App'
        ],

        # Adobe Creative Cloud (https://apps.apple.com/us/app/adobe-creative-cloud/id852473028)
        'CreativeCloud/(\d+[\.\d]+)' => [
            'name' => 'Adobe Creative Cloud',
            'version' => '$1',
            'category' => 'App'
        ],

        # rekordbox (https://rekordbox.com/en/)
        'rekordbox/(\d+[\.\d]+)' => [
            'name' => 'rekordbox',
            'version' => '$1',
            'category' => 'App'
        ],

        # Windows Push Notification Services (https://www.microsoft.com/en-us/)
        'Microsoft-WNS/(\d+[\.\d]+)' => [
            'name' => 'Windows Push Notification Services',
            'version' => '$1',
            'category' => 'App'
        ],

        # Background Intelligent Transfer Service (https://www.microsoft.com/en-us/)
        'Microsoft BITS/(\d+[\.\d]+)' => [
            'name' => 'Background Intelligent Transfer Service',
            'version' => '$1',
            'category' => 'App'
        ],

        # ESET Remote Administrator (https://www.eset.com/me/business/remote-management/remote-administrator/)
        'ERA Agent Update' => [
            'name' => 'ESET Remote Administrator',
            'version' => '',
            'category' => 'App'
        ],

        # Epic Games Launcher (https://www.epicgames.com/store/en-US/download)
        'EpicGamesLauncher/(\d+[\.\d]+)' => [
            'name' => 'Epic Games Launcher',
            'version' => '$1',
            'category' => 'App'
        ],

        # WebDAV (https://www.microsoft.com/en-us/)
        'Microsoft-WebDAV-MiniRedir' => [
            'name' => 'WebDAV',
            'version' => '',
            'category' => 'App'
        ],

        # Battle.net  (https://eu.shop.battle.net/en-us)
        'Battle.net/(\d+[\.\d]+)' => [
            'name' => 'Battle.net',
            'version' => '$1',
            'category' => 'App'
        ],

        # Bookshelf (https://play.google.com/store/apps/details?id=com.vitalsource.bookshelf)
        'Bookshelf-Android/(\d+[\.\d]+)' => [
            'name' => 'Bookshelf',
            'version' => '$1',
            'category' => 'App'
        ],

        # Rave Social (https://www.ravesocial.com/)
        'RaveSocial/(\d+[\.\d]+)' => [
            'name' => 'Rave Social',
            'version' => '$1',
            'category' => 'App'
        ],

        # Word Cookies! (https://apps.apple.com/us/app/word-cookies/id1153883316)
        'wordcookies/(\d+[\.\d]+)' => [
            'name' => 'Word Cookies!',
            'version' => '$1',
            'category' => 'App'
        ],

        # Bible KJV (https://apps.apple.com/us/app/bible-kjv/id544098932)
        'com.meevii.bibleKJV/(\d+[\.\d]+)' => [
            'name' => 'Bible KJV',
            'version' => '$1',
            'category' => 'App'
        ],

        # MetaTrader (https://www.metatrader5.com/)
        'MetaTrader 5 Terminal/(\d+[\.\d]+)' => [
            'name' => 'MetaTrader',
            'version' => '$1',
            'category' => 'App'
        ],

        # Paint by Number (https://apps.apple.com/us/app/paint-by-number-coloring-games/id1420058690)
        'com.paint.bynumber/(\d+[\.\d]+)' => [
            'name' => 'Paint by Number',
            'version' => '$1',
            'category' => 'App'
        ],

        # ZEPETO (https://apps.apple.com/app/id1350301428)
        'zepeto_global/(\d+[\.\d]+)' => [
            'name' => 'ZEPETO',
            'version' => '$1',
            'category' => 'App'
        ],

        # Jungle Disk (https://www.jungledisk.com/)
        'Jungle Disk Workgroup HTTP' => [
            'name' => 'Jungle Disk',
            'version' => '',
            'category' => 'App'
        ],

        # Nextcloud (https://play.google.com/store/apps/details?id=com.nextcloud.client)
        '(?:mirall|Nextcloud-android)/(\d+[\.\d]+)' => [
            'name' => 'Nextcloud',
            'version' => '$1',
            'category' => 'App'
        ],

        # GoNative (https://gonative.io/)
        'GoNativeIOS/(\d+[\.\d]+)' => [
            'name' => 'GoNative',
            'version' => '$1',
            'category' => 'App'
        ],

        # Pandora (https://apps.apple.com/us/app/pandora-music-podcasts/id284035177)
        'Pandora/(\d+[\.\d]+)' => [
            'name' => 'Pandora',
            'version' => '$1',
            'category' => 'App'
        ],

        # Blackboard (https://apps.apple.com/us/app/blackboard/id950424861)
        'Blackboard/(\d+[\.\d]+)' => [
            'name' => 'Blackboard',
            'version' => '$1',
            'category' => 'App'
        ],

        'Blackboard/unspecified' => [
            'name' => 'Blackboard',
            'version' => '',
            'category' => 'App'
        ],

        # QQMusic (https://apps.apple.com/cn/app/qq%E9%9F%B3%E4%B9%90-%E5%90%AC%E6%88%91%E6%83%B3%E5%90%AC/id414603431)
        'QQMusic/(\d+[\.\d]+)' => [
            'name' => 'QQMusic',
            'version' => '$1',
            'category' => 'App'
        ],

        # eToro (https://www.etoro.com/)
        'etoro-cordova-app' => [
            'name' => 'eToro',
            'version' => '',
            'category' => 'App'
        ],

        # Avid Link (https://www.avid.com/products/avid-link)
        'Avid Link Desktop App/(\d+[\.\d]+)' => [
            'name' => 'Avid Link',
            'version' => '$1',
            'category' => 'App'
        ],

        # Netflix (https://www.netflix.com/)
        'Netflix/(\d+[\.\d]+)' => [
            'name' => 'Netflix',
            'version' => '$1',
            'category' => 'App'
        ],

        # Google Tag Manager (https://www.google.com/)
        'GoogleTagManager/(\d+[\.\d]+)' => [
            'name' => 'Google Tag Manager',
            'version' => '$1',
            'category' => 'App'
        ],

        # Adobe Synchronizer (https://www.adobe.com/)
        'Adobe Synchronizer (\d+[\.\d]+)' => [
            'name' => 'Adobe Synchronizer',
            'version' => '$1',
            'category' => 'App'
        ],

        # BlueStacks (https://www.bluestacks.com/)
        'BlueStacks(?: 5)?/(\d+[\.\d]+)' => [
            'name' => 'BlueStacks',
            'version' => '$1',
            'category' => 'App'
        ],

        # PowerShell (https://www.microsoft.com/en-us/)
        'WindowsPowerShell/(\d+[\.\d]+)' => [
            'name' => 'PowerShell',
            'version' => '$1',
            'category' => 'App'
        ],

        # GlobalProtect (https://www.paloaltonetworks.com/products/globalprotect)
        'PAN GlobalProtect/(\d+[\.\d]+)' => [
            'name' => 'GlobalProtect',
            'version' => '$1',
            'category' => 'App'
        ],

        # Theyub
        'Theyub v(\d+[\.\d]+)' => [
            'name' => 'Theyub',
            'version' => '$1',
            'category' => 'App'
        ],

        # BBC News
        'BBCNewsUKWatchApp/(\d+[\.\d]+)' => [
            'name' => 'BBC News',
            'version' => '$1',
            'category' => 'App'
        ],

        # TradingView (https://www.tradingview.com/)
        'TradingView/(\d+[\.\d]+)' => [
            'name' => 'TradingView',
            'version' => '$1',
            'category' => 'App'
        ],

        # Instabridge (https://instabridge.com/en/)
        'Instabridge' => [
            'name' => 'Instabridge',
            'version' => '',
            'category' => 'App'
        ],

        # Be Focused (https://apps.apple.com/app/id973130201)
        'Be Focused/(\d+\.[\.\d]+)?' => [
            'name' => 'Be Focused',
            'version' => '$1',
            'category' => 'App'
        ],

        # Focus Matrix (https://apps.apple.com/app/id1087284172)
        'Focus Matrix/(\d+\.[\.\d]+)?' => [
            'name' => 'Focus Matrix',
            'version' => '$1',
            'category' => 'App'
        ],

        # Focus Keeper (https://apps.apple.com/app/id867374917)
        'Focuskeeper/(\d+\.[\.\d]+)?' => [
            'name' => 'Focus Keeper',
            'version' => '$1',
            'category' => 'App'
        ],

        # Quick Search TV (https://play.google.com/store/apps/details?id=com.aospstudio.tvsearch)
        'Quick Search TV/(\d+\.[\.\d]+)' => [
            'name' => 'Quick Search TV',
            'version' => '$1',
            'category' => 'App'
        ],

        # Microsoft Store (https://www.microsoft.com/en-us/store/apps/windows)
        'WindowsStoreSDK' => [
            'name' => 'Microsoft Store',
            'version' => '',
            'category' => 'App'
        ],

        # ASUS Updater (https://www.asus.com/)
        'Asus Update/(\d+\.[\.\d]+)' => [
            'name' => 'ASUS Updater',
            'version' => '$1',
            'category' => 'App'
        ],

        # IMO.IM HD Version https://play.google.com/store/apps/details?id=com.imo.android.imoimhd
        'imoAndroid/(20\d{2}.[\.\d]+)' => [
            'name' => 'IMO HD Video Calls & Chat',
            'version' => '$1',
            'category' => 'App'
        ],

        # IMO.IM https://play.google.com/store/apps/details?id=com.imo.android.imoim
        'imoAndroid/(\d+\.[\.\d]+)' => [
            'name' => 'IMO International Calls & Chat',
            'version' => '$1',
            'category' => 'App'
        ],

        # Microsoft Bing Search (https://play.google.com/store/apps/details?id=com.microsoft.bing | https://apps.apple.com/us/app/microsoft-bing-search/id345323231)
        'BingSapphire/(\d+\.[\.\d]+)' => [
            'name' => 'Microsoft Bing Search',
            'version' => '$1',
            'category' => 'App'
        ],

        # HiSearch
        '.+HiSearch/(\d+\.[\.\d]+)' => [
            'name' => 'HiSearch',
            'version' => '$1',
            'category' => 'App'
        ],

        # RDDocuments (https://apps.apple.com/app/id364901807)
        'RDDocuments/(\d+\.[\.\d]+)' => [
            'name' => 'RDDocuments',
            'version' => '$1',
            'category' => 'App'
        ],

        # F-Secure SAFE (https://apps.apple.com/app/f-secure-safe/id572847748)
        'FSCDCSafe (\d+\.[\.\d]+)' => [
            'name' => 'F-Secure SAFE',
            'version' => '$1',
            'category' => 'App'
        ],

        # Twitterrific (https://apps.apple.com/us/app/twitterrific-tweet-your-way/id580311103)
        'Twitterrific' => [
            'name' => 'Twitterrific',
            'version' => '',
            'category' => 'App'
        ],

        # Uconnect LIVE (https://apps.apple.com/it/app/uconnect-live/id881830261?l=en)
        'UconnectLive' => [
            'name' => 'Uconnect LIVE',
            'version' => '',
            'category' => 'App'
        ],

        # Wayback Machine (https://apps.apple.com/us/app/wayback-machine/id1472432422)
        'Wayback Machine Extension' => [
            'name' => 'Wayback Machine',
            'version' => '',
            'category' => 'App'
        ],

        # Q-municate (https://www.qmunicateh10.com | https://apps.apple.com/gb/app/q-municate/id909698517)
        'com.Nanoteq.QmunicateH10p.+/(\d+\.[\.\d]+) \(' => [
            'name' => 'Q-municate',
            'version' => '$1',
            'category' => 'App'
        ],

        # NET.mede (https://apps.apple.com/us/app/net-mede/id597007101)
        'NET.mede' => [
            'name' => 'NET.mede',
            'version' => '',
            'category' => 'App'
        ],

        # My Bentley (https://apps.apple.com/us/app/my-bentley/id1008052243)
        'My Bentley' => [
            'name' => 'My Bentley',
            'version' => '',
            'category' => 'App'
        ],

        # Skyeng (https://apps.apple.com/us/app/skyeng-english-online/id1065290732)
        'Skyeng App' => [
            'name' => 'Skyeng',
            'version' => '',
            'category' => 'App'
        ],

        # Skyeng Teachers (https://apps.apple.com/us/app/skyeng-teachers/id1483049537)
        'Skyeng Teachers' => [
            'name' => 'Skyeng Teachers',
            'version' => '',
            'category' => 'App'
        ],

        # Bank Millenium (https://apps.apple.com/us/app/bank-millennium/id412646128)
        '(Millennium/|Millennium Corp)' => [
            'name' => 'Bank Millenium',
            'version' => '',
            'category' => 'App'
        ],

        # MBolsa (https://apps.apple.com/us/app/mbolsa/id1533621499)
        'MBolsa' => [
            'name' => 'MBolsa',
            'version' => '',
            'category' => 'App'
        ],

        # MEmpresas (https://apps.apple.com/us/app/mempresas/id669516182)
        '(MEmpresas|Millennium Empresas)' => [
            'name' => 'MEmpresas',
            'version' => '',
            'category' => 'App'
        ],

        # Orange Radio (https://apps.apple.com/fr/app/orange-radio/id1201284975?l=en)
        'OrangeRadio/(\d+\.[\.\d]+)' => [
            'name' => 'Orange Radio',
            'version' => '$1',
            'category' => 'App'
        ],

        # Radio Italiane https://apps.apple.com/us/app/radio-italiane-radio-it/id1390350146)
        'Radio Italiane/(\d+\.[\.\d]+)' => [
            'name' => 'Radio Italiane',
            'version' => '$1',
            'category' => 'App'
        ],

        # Safari Search Helper
        'com.apple.Safari.SearchHelper/(\d+\.[\.\d]+)' => [
            'name' => 'Safari Search Helper',
            'version' => '$1',
            'category' => 'App'
        ],

        # Citrix Workspace (https://apps.apple.com/us/app/citrix-workspace/id363501921)
        'Citrix Viewer' => [
            'name' => 'Citrix Workspace',
            'version' => '',
            'category' => 'App'
        ],

        # Mercantile Bank of Michigan (https://apps.apple.com/us/app/mercantile-bank-of-michigan/id428982831)
        'com.mercbank.s1mobileipad' => [
            'name' => 'Mercantile Bank of Michigan',
            'version' => '',
            'category' => 'App'
        ],

        # DStream Air (https://apps.apple.com/us/app/dstream-air/id1214400521)
        'D-Stream Air' => [
            'name' => 'DStream Air',
            'version' => '',
            'category' => 'App'
        ],

        # Expedia (https://apps.apple.com/us/app/expedia-hotels-flights-car/id427916203)
        'ExpediaBookings' => [
            'name' => 'Expedia',
            'version' => '',
            'category' => 'App'
        ],

        # Windows Antivirus
        'Windows Antivirus (\d+\.[\.\d]+)' => [
            'name' => 'Windows Antivirus',
            'version' => '$1',
            'category' => 'App'
        ],

        # Macrium Reflect (https://www.macrium.com/reflectfree)
        '^Reflect' => [
            'name' => 'Macrium Reflect',
            'version' => '',
            'category' => 'App'
        ],

        'Opera autoupdate agent' => [
            'name' => 'Opera Updater',
            'version' => '',
            'category' => 'App'
        ],

        # Ballz (https://apps.apple.com/us/app/ballz/id1139609950)
        'Ballz/(\d+\.[\.\d]+)' => [
            'name' => 'Ballz',
            'version' => '$1',
            'category' => 'App'
        ],

        # RNPS Action Cards
        'rnps-action-cards/(\d+\.[\.\d]+)' => [
            'name' => 'RNPS Action Cards',
            'version' => '$1',
            'category' => 'App'
        ],

        # Plex Media Server (https://www.plex.tv/sv/media-server-downloads/)
        'PlexMediaServer/(\d+\.[\.\d]+)' => [
            'name' => 'Plex Media Server',
            'version' => '$1',
            'category' => 'App'
        ],

        # SafeIP (https://www.freesafeip.com/)
        'FreeSafeIP' => [
            'name' => 'SafeIP',
            'version' => '',
            'category' => 'App'
        ],

        # Surfshark (https://play.google.com/store/apps/details?id=com.surfshark.vpnclient.android)
        'SurfsharkAndroid/(\d+\.[\.\d]+)' => [
            'name' => 'Surfshark',
            'version' => '$1',
            'category' => 'App'
        ],

        # Hago (https://play.google.com/store/apps/details?id=com.yy.hiyo)
        'APP/yym-hago-and(\d+\.[\.\d]+)' => [
            'name' => 'Hago',
            'version' => '$1',
            'category' => 'App'
        ],


        //==================== 浏览器列表 ====================

        # Viasat Browser (https://browser.viasat.com/)
        'Chrome/(\d+\.[\.\d]+).+Sparrow' => [
            'name' => 'Viasat Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Sparrow/.+CFNetwork' => [
            'name' => 'Viasat Browser',
            'version' => '',
            'category' => 'Browser'
        ],
        
        # Lilo (https://play.google.com/store/apps/details?id=org.lilo.mobile.android2020)
        'Lilo/(\d+\.[\.\d]+)' => [
            'name' => 'Lilo',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Lexi Browser (https://play.google.com/store/apps/details?id=com.lexi.browser)
        'lexi/(\d+[\.\d]+)' => [
            'name' => 'Lexi Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Floorp (https://floorp.ablaze.one/)
        'Floorp/(\d+[\.\d]+)' => [
            'name' => 'Floorp',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Surf Browser (https://play.google.com/store/apps/details?id=com.gl9.cloudBrowser)
        'SurfBrowser/(\d+[\.\d]+)' => [
            'name' => 'Surf Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Decentr (https://decentr.net/)
        'Decentr' => [
            'name' => 'Decentr',
            'version' => '',
            'category' => 'Browser'
        ],
        
        # YouCare (https://play.google.com/store/apps/details?id=com.youcare.browser)
        'youcare-android-app' => [
            'name' => 'YouCare',
            'version' => '',
            'category' => 'Browser'
        ],
        'youcare-ios-app' => [
            'name' => 'YouCare',
            'version' => '',
            'category' => 'Browser'
        ],
        
        # AdBlock Browser (https://play.google.com/store/apps/details?id=org.adblockplus.browser)
        'ABB/(\d+[\.\d]+)' => [
            'name' => 'AdBlock Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Navegador
        'Navegador' => [
            'name' => 'Navegador',
            'version' => '',
            'category' => 'Browser'
        ],
        
        # BrowseHere
        '\d+/tclwebkit(?:\d+[\.\d]*)' => [
            'name' => 'BrowseHere',
            'version' => "",
            'category' => 'Browser'
        ],

        # Hi Browser (https://play.google.com/store/apps/details?id=com.talpa.hibrowser)
        'HiBrowser/(\d+[\.\d]+)' => [
            'name' => 'Hi Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # CYBrowser (https://www.cgl.ucsf.edu/cytoscape/utilities3/cybrowser.shtml)
        'CYBrowser/(\d+[\.\d]+)' => [
            'name' => 'CyBrowser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # SiteKiosk (https://www.sitekiosk.com/)
        'Chrome/.+ SiteKiosk (\d+[\.\d]+)' => [
            'name' => 'SiteKiosk',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'SiteKiosk (\d+[\.\d]+)' => [
            'name' => 'SiteKiosk',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Reqwireless WebViewer
        'ReqwirelessWeb/(\d+[\.\d]+)' => [
            'name' => 'Reqwireless WebViewer',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # T+Browser (https://t.chanjet.com/tplus/view/login/downloadBrowser.html | https://dad.chanapp.chanjet.com/tplusapp/TPlusBrowser.exe)
        'T\+Browser/(\d+[\.\d]+)' => [
            'name' => 'T+Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # ChanjetCloud (https://dad.chanapp.chanjet.com/tplusapp/HsySetup.exe)
        'ChanjetCloud/(\d+[\.\d]+)' => [
            'name' => 'ChanjetCloud',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Sushi Browser (https://sushi-browser.com/)
        'SushiBrowser/(\d+[\.\d]+)' => [
            'name' => 'Sushi Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Peeps dBrowser (https://peepsx.com/dbrowser.html)
        'dBrowser/(\d+[\.\d]+)' => [
            'name' => 'Peeps dBrowser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # LT Browser (https://www.lambdatest.com/lt-browser)
        'LTBrowser/(\d+[\.\d]+)' => [
            'name' => 'LT Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Lagatos Browser (https://lagatos.com/)
        'lagatos-browser/(\d+[\.\d]+)' => [
            'name' => 'Lagatos Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # PSI Secure Browser (https://tca.psiexams.com/portal/testdelivery/sb_rpnow_download.jsp?)
        'psi-secure-browser/(\d+[\.\d]+)' => [
            'name' => 'PSI Secure Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Harman Browser (https://www.harman.com/)
        'Harman_Browser/(\d+[\.\d]+)' => [
            'name' => 'Harman Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Bonsai (https://bonsaibrowser.com/)
        'bonsai-browser/(\d+[\.\d]+)' => [
            'name' => 'Bonsai',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Spectre Browser (https://spectrebots.com/products/spectre-desktop-browser)
        'spectre-browser/(\d+[\.\d]+)' => [
            'name' => 'Spectre Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Flash Browser (https://github.com/asteroid-dev/FlashBrowser or https://github.com/radubirsan/FlashBrowser)
        'FlashBrowser/(\d+[\.\d]+)' => [
            'name' => 'Flash Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Secure Browser (https://safertechnologies.io/)
        'Secure/(?:(\d+[\.\d]+))?' => [
            'name' => 'Secure Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Arvin (https://play.google.com/store/apps/details?id=com.browser.arvin.anti.blokir&hl=sv&gl=US)
        'Arvin/(\d+[\.\d]+)' => [
            'name' => 'Arvin',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Edge Webview (https://docs.microsoft.com/en-us/microsoft-edge/webview2/)
        'Version/.+Chrome/.+EdgW/(\d+[\.\d]+)' => [
            'name' => 'Edge WebView',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Mandarin (https://mandarin-browser.com/)
        'Mandarin Browser/(\d+[\.\d]+)' => [
            'name' => 'Mandarin',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Maelstrom (https://www.bittorrent.com/)
        'Torrent/(\d+[\.\d]+)' => [
            'name' => 'Maelstrom',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Helio (https://developer.magicleap.com/en-us/learn/guides/lumin-os-release-notes-summary)
        'Helio/(\d+[\.\d]+)' => [
            'name' => 'Helio',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # 7654 Browser (http://7654browser.shzhanmeng.com/)
        '7654Browser/(\d+[\.\d]+)' => [
            'name' => '7654 Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Qazweb (http://www.qazweb.com/)
        'Qazweb/(\d+[\.\d]+)' => [
            'name' => 'Qazweb',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # deg-degan (https://degdegan.com/)
        'Degdegan/(\d+[\.\d]+)' => [
            'name' => 'deg-degan',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # JavaFX (https://docs.oracle.com/javase/8/javafx/embedded-browser-tutorial/overview.htm)
        'JavaFX/(\d+[\.\d]+)' => [
            'name' => 'JavaFX',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Chedot (https://landing.chedot.com/)
        'Chedot/(\d+[\.\d]+)' => [
            'name' => 'Chedot',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Chromium GOST (https://github.com/deemru/chromium-gost)
        'Chrome/(\d+[\.\d]+).+\(Chromium GOST\)' => [
            'name' => 'Chromium GOST',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Deledao (https://www.deledao.com/)
        '(?:DeledaoPersonal|DeledaoFamily)/(\d+[\.\d]+)' => [
            'name' => 'Deledao',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # HasBrowser (https://browser.hascoding.com)
        'HasBrowser/(\d+[\.\d]+)' => [
            'name' => 'HasBrowser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Byffox (https://byffox.sourceforge.io/index.php)
        'Byffox/(\d+[\.\d]+)' => [
            'name' => 'Byffox',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # CoolBrowser (https://play.google.com/store/apps/details?id=com.easybrowser.browser.coolbrowser)
        'Chrome/(\d+[\.\d]+).+AgentWeb.+UCBrowser' => [
            'name' => 'CoolBrowser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Dot Browser (https://dothq.co/)
        'DotBrowser/(\d+[\.\d]+)' => [
            'name' => 'Dot Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Craving Explorer (https://www.crav-ing.com/)
        'CravingExplorer/(\d+[\.\d]+)' => [
            'name' => 'Craving Explorer',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # DeskBrowse (https://web.archive.org/web/20170614060014/http://deskbrowse.org/)
        'DeskBrowse/(\d+[\.\d]+)' => [
            'name' => 'DeskBrowse',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Lolifox
        'Lolifox/(\d+[\.\d]+)' => [
            'name' => 'Lolifox',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Qutebrowser (https://qutebrowser.org/)
        'qutebrowser/(\d+[\.\d]+).+Chrome' => [
            'name' => 'Qutebrowser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'qutebrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'Qutebrowser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Flast (https://github.com/FascodeNet/Flast)
        'flast/(\d+[\.\d]+)' => [
            'name' => 'Flast',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # PolyBrowser (https://github.com/PolySuite/PolyBrowser)
        'PolyBrowser/(\d+[\.\d]+)' => [
            'name' => 'PolyBrowser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # BriskBard (https://www.briskbard.com/)
        'Chrome.+BriskBard/(\d+[\.\d]+)' => [
            'name' => 'BriskBard',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'BriskBard(?:/(\d+[\.\d]+))?' => [
            'name' => 'BriskBard',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # GinxDroid Browser (https://play.google.com/store/apps/details?id=ginxdroid.gdm)
        'GinxDroidBrowser/(\d+[\.\d]+)' => [
            'name' => 'GinxDroid Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Avira Scout (http://www.avira.com/en/avira-scout)
        'AviraScout/(\d+[\.\d]+)' => [
            'name' => 'Avira Scout',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Venus Browser (https://play.google.com/store/apps/details?id=com.venus.browser)
        'VenusBrowser/(\d+[\.\d]+)' => [
            'name' => 'Venus Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Otter Browser (https://github.com/OtterBrowser/otter-browser)
        'Chrome.+Otter(?:[ /](\d+[\.\d]+))?' => [
            'name' => 'Otter Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Otter(?:[ /](\d+[\.\d]+))?' => [
            'name' => 'Otter Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Smooz (https://smoozapp.com/)
        'Chrome.+Smooz/(\d+[\.\d]+)' => [
            'name' => 'Smooz',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Smooz/(\d+[\.\d]+)' => [
            'name' => 'Smooz',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Cornowser (https://github.com/xdevs23/Cornowser)
        'Cornowser/(\d+[\.\d]+)' => [
            'name' => 'Cornowser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Orca (http://www.orcabrowser.com)
        'Orca/(\d+[\.\d]+)' => [
            'name' => 'Orca',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Flow Browser (https://play.google.com/store/apps/details?id=org.flow.browser)
        'Android (?:[\d\.]+;) ?(?:[^;]+;)? Flow\) AppleWebKit/537.+Chrome/\d{3}' => [
            'name' => 'Flow Browser',
            'version' => '',
            'category' => 'Browser'
        ],
        # Flow (https://www.ekioh.com/)
        'Flow/(?:(\d+[\.\d]+))' => [
            'name' => 'Flow',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Ekioh/(?:(\d+[\.\d]+))' => [
            'name' => 'Flow',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # xStand (https://www.adnx.com/)
        'xStand/(\d+[\.\d]+)' => [
            'name' => 'xStand',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Biyubi (http://www.biyubi.com/)
        'Biyubi/(\d+[\.\d]+)' => [
            'name' => 'Biyubi',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Perfect Browser (http://www.perfectbrowser.com/)
        '(?:Perfect Browser(?:-iPad)?|Perfect(?:BrowserPro)?)/(\d+[\.\d]+)' => [
            'name' => 'Perfect Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Phantom Browser (https://www.lg.com/)
        'Browser/Phantom/V(\d+[\.\d]+)' => [
            'name' => 'Phantom Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # AwoX (https://www.awox.com.tr/)
        'AwoX(?:/(\d+[\.\d]+))? Browser' => [
            'name' => 'AwoX',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Zetakey (https://www.zetakey.com/)
        'Zetakey/(\d+[\.\d]+)' => [
            'name' => 'Zetakey',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # PlayFree Browser
        'PlayFreeBrowser/(?:(\d+[\.\d]+))?' => [
            'name' => 'PlayFree Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Chim Lac (https://chimlac.com.vn/)
        '(?:chimlac_browser|chimlac)/(?:(\d+[\.\d]+))' => [
            'name' => 'Chim Lac',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Odin (https://www.hisense.com/)
        'Odin/(?:(\d+[\.\d]+))' => [
            'name' => 'Odin',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # T-Browser (https://play.google.com/store/apps/details?id=com.tcl.browser)
        'Tbrowser/(\d+[\.\d]+)' => [
            'name' => 'T-Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # SFive (https://sfive.vn/)
        'SFive(?:_Android)?/.+ Chrome/(\d+[\.\d]+)' => [
            'name' => 'SFive',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'SFive_IOS/(\d+[\.\d]+)' => [
            'name' => 'SFive',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Navigateur Web
        'Navigateur web/(?:(\d+[\.\d]+))?' => [
            'name' => 'Navigateur Web',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Seraphic Sraf (https://www.seraphic-corp.com/)
        'Sraf(?:[/ ](\d+[\.\d]+))?' => [
            'name' => 'Seraphic Sraf',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Seewo Browser (http://e.seewo.com/)
        'SeewoBrowser/(?:(\d+[\.\d]+))?' => [
            'name' => 'Seewo Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Kode Browser (https://www.kodebrowser.com/ | https://play.google.com/store/apps/details?id=com.app.downloadmanager | https://apps.apple.com/us/app/kode-browser-fast-private/id625458492)
        '(?:Kode(?:iOS)?/(?:(\d+[\.\d]+))?|TansoDL)' => [
            'name' => 'Kode Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # UR Browser (https://www.ur-browser.com/)
        'UR/(?:(\d+[\.\d]+))' => [
            'name' => 'UR Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # OceanHero (https://oceanhero.today)
        'OceanHero/([\.\d]+)' => [
            'name' => 'OceanHero',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Smart Lenovo Browser (https://www.lenovo.com.cn/)
        'Chrome/.+ SLBrowser/(?:(\d+[\.\d]+))?' => [
            'name' => 'Smart Lenovo Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'SLBrowser/(?:(\d+[\.\d]+))?' => [
            'name' => 'Smart Lenovo Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Browzar (https://www.browzar.com/)
        'Browzar' => [
            'name' => 'Browzar',
            'version' => '',
            'category' => 'Browser'
        ],

        # Stargon (http://www.stargon.org/ | https://play.google.com/store/apps/details?id=net.onecook.browser)
        'Stargon/(?:(\d+[\.\d]+))?' => [
            'name' => 'Stargon',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # NFS Browser (https://github.com/nfschina/nfs-browser)
        'NFSBrowser/(?:(\d+[\.\d]+))?' => [
            'name' => 'NFS Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Borealis Navigator (https://binaryoutcast.com/projects/borealis/)
        'Borealis/(\d+[\.\d]+)' => [
            'name' => 'Borealis Navigator',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Yolo Browser
        'YoloBrowser/(?:(\d+[\.\d]+))?' => [
            'name' => 'Yolo Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Phoenix Browser (http://phoenix-browser.com/ | https://play.google.com/store/apps/details?id=com.transsion.phoenix)
        'PHX/(?:(\d+[\.\d]+))?' => [
            'name' => 'Phoenix Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # PrivacyWall (https://play.google.com/store/apps/details?id=org.privacywall.browser)
        'PrivacyWall/(?:(\d+[\.\d]+))?' => [
            'name' => 'PrivacyWall',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Ghostery Privacy Browser (https://play.google.com/store/apps/details?id=com.ghostery.android.ghostery | https://apps.apple.com/us/app/ghostery-privacy-browser/id472789016)
        'Ghostery:?(\d+[\.\d]+)?' => [
            'name' => 'Ghostery Privacy Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Yaani Browser
        'Firefox/.*(?:Turkcell-)?YaaniBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'Yaani Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        '(?:Turkcell-)?YaaniBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'Yaani Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Safe Exam Browser (https://safeexambrowser.org/)
        'SEB/(?:(\d+[\.\d]+))?' => [
            'name' => 'Safe Exam Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Colibri (https://colibri.opqr.co/)
        'Colibri/(?:(\d+[\.\d]+))?' => [
            'name' => 'Colibri',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Xvast (https://www.xvast.com/)
        'Xvast/(?:(\d+[\.\d]+))?' => [
            'name' => 'Xvast',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Tungsten (https://en.tungsten-start.net/)
        'TungstenBrowser/(?:(\d+[\.\d]+))?' => [
            'name' => 'Tungsten',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Lulumi (https://github.com/LulumiProject/lulumi-browser)
        'Lulumi-browser/(?:(\d+[\.\d]+))?' => [
            'name' => 'Lulumi',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Yahoo! Japan Browser (https://promo-ybrowser.yahoo.co.jp/)
        'ybrowser/(?:(\d+[\.\d]+))?' => [
            'name' => 'Yahoo! Japan Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Lunascape Lite (https://www.lunascape.tv/)
        'iLunascapeLite/(?:(\d+\.[.\d]+))?' => [
            'name' => 'Lunascape Lite',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Lunascape
        'Chrome/.+ i?Lunascape(?:[/ ](\d+\.[.\d]+))?' => [
            'name' => 'Lunascape',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'i?Lunascape(?:[/ ](\d+\.[.\d]+))?' => [
            'name' => 'Lunascape',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Polypane (https://polypane.app/)
        'Polypane/(?:(\d+[\.\d]+))?' => [
            'name' => 'Polypane',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # OhHai Browser (https://ohhaibrowser.com/)
        'OhHaiBrowser/(?:(\d+[\.\d]+))?' => [
            'name' => 'OhHai Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Sizzy (https://sizzy.co/)
        'Sizzy/(?:(\d+[\.\d]+))?' => [
            'name' => 'Sizzy',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Glass Browser (https://github.com/mitchas/glass-browser)
        'GlassBrowser/(?:(\d+[\.\d]+))?' => [
            'name' => 'Glass Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # ToGate (https://tmaxanc.com/#!/product-introduce/ToGate)
        'ToGate/(?:(\d+[\.\d]+))?' => [
            'name' => 'ToGate',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # VMware AirWatch (https://www.air-watch.com/)
        'AirWatch Browser v(?:(\d+[\.\d]+))?' => [
            'name' => 'VMware AirWatch',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # AOL Desktop (https://beta.aol.com/projects/desktop/windows)
        'ADG/(?:(\d+[\.\d]+))?' => [
            'name' => 'AOL Desktop',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Elements Browser (https://elementsbrowser.com/)
        'Elements Browser/(?:(\d+[\.\d]+))?' => [
            'name' => 'Elements Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Light (https://sourceforge.net/projects/lightfirefox/)
        'Light/(\d+[\.\d]+)' => [
            'name' => 'Light',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Steam (https://www.valvesoftware.com/)
        'Valve Steam GameOverlay/(?:(\d+[\.\d]+))?' => [
            'name' => 'Steam In-Game Overlay',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # 115 Browser (https://pc.115.com/)
        '115Browser/(?:(\d+[\.\d]+))?' => [
            'name' => '115 Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Atom (https://browser.ru/)
        'Atom/(?:(\d+[\.\d]+))?' => [
            'name' => 'Atom',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Firefox Reality (https://mixedreality.mozilla.org/firefox-reality/)
        'Mobile VR.+Firefox' => [
            'name' => 'Firefox Reality',
            'version' => '',
            'category' => 'Browser'
        ],

        # AVG Secure Browser (https://www.avg.com/en-us/secure-browser)
        'AVG(?:/(\d+[\.\d]+))?' => [
            'name' => 'AVG Secure Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # START Internet Browser (https://play.google.com/store/apps/details?id=fyi.start.web.browser)
        'Start/(?:(\d+[\.\d]+))?' => [
            'name' => 'START Internet Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Lovense Browser (https://www.lovense.com/cam-model/download)
        'Lovense(?:/(\d+[\.\d]+))?' => [
            'name' => 'Lovense Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Delta Browser (https://play.google.com/store/apps/details?id=com.airfind.deltabrowser)
        '(?:com.airfind.deltabrowser|AirSearch)(?:/(\d+[\.\d]+))?' => [
            'name' => 'Delta Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Ordissimo (https://www.ordissimo.fr/)
        '(?:Ordissimo|webissimo3)(?:/(\d+[\.\d]+))?' => [
            'name' => 'Ordissimo',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # CCleaner (https://www.ccleaner.com/ccleaner/browser)
        'CCleaner(?:/(\d+[\.\d]+))?' => [
            'name' => 'CCleaner',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Aloha Browser Lite (https://play.google.com/store/apps/details?id=com.alohamobile.browser.lite)
        'AlohaLite(?:/(\d+[\.\d]+))?' => [
            'name' => 'Aloha Browser Lite',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Tao Browser (https://browser.taobao.com/)
        'TaoBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'Tao Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Falkon (https://www.falkon.org/)
        'Falkon(?:/(\d+[\.\d]+))?' => [
            'name' => 'Falkon',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # mCent (http://mcentbrowser.com/)
        'mCent(?:/(\d+[\.\d]+))?' => [
            'name' => 'mCent',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # SalamWeb (https://salamweb.com/)
        'SalamWeb(?:/(\d+[\.\d]+))?' => [
            'name' => 'SalamWeb',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # BlackHawk (http://www.netgate.sk/blackhawk/)
        'BlackHawk(?:/(\d+[\.\d]+))?' => [
            'name' => 'BlackHawk',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Minimo (https://www-archive.mozilla.org/projects/minimo/)
        'Minimo(?:/(\d+[\.\d]+))?' => [
            'name' => 'Minimo',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Wear Internet Browser (https://play.google.com/store/apps/details?id=com.appfour.wearbrowser)
        'WIB(?:/(\d+[\.\d]+))?' => [
            'name' => 'Wear Internet Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Origyn Web Browser (https://en.wikipedia.org/wiki/Origyn_Web_Browser)
        'Origyn Web Browser' => [
            'name' => 'Origyn Web Browser',
            'version' => '',
            'category' => 'Browser'
        ],

        # Kinza (https://www.kinza.jp/en/)
        'Kinza(?:/(\d+[\.\d]+))?' => [
            'name' => 'Kinza',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Beamrise (https://web.archive.org/web/20170520043839/http://beamrise.com/)
        'Beamrise(?:/(\d+[\.\d]+))?' => [
            'name' => 'Beamrise',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Faux Browser (https://apps.apple.com/us/app/faux-browser/id472250940)
        'Faux(?:/(\d+[\.\d]+))?' => [
            'name' => 'Faux Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Splash (https://scrapinghub.com/splash)
        'splash Version(?:/(\d+[\.\d]+))?' => [
            'name' => 'Splash',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Meizu Browser (https://www.meizu.com/)
        'MZBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'Meizu Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # COS Browser (https://sj.qq.com/myapp/detail.htm?apkName=com.qcloud.cos.client)
        'COSBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'COS Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Crusta (https://github.com/Crusta/CrustaBrowser)
        'Crusta(?:/(\d+[\.\d]+))?' => [
            'name' => 'Crusta',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Hawk Turbo Browser
        'Hawk/TurboBrowser(?:/v?(\d+[\.\d]+))?' => [
            'name' => 'Hawk Turbo Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Hawk Quick Browser
        'Hawk/QuickBrowser(?:/v?(\d+[\.\d]+))?' => [
            'name' => 'Hawk Quick Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # FreeU (https://freeu.online/)
        'FreeU(?:/(\d+[\.\d]+))?' => [
            'name' => 'FreeU',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Nox Browser (https://play.google.com/store/apps/details?id=com.noxgroup.app.browser)
        'NoxBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'Nox Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Basilisk (https://www.basilisk-browser.org/)
        'Basilisk(?:/(\d+[\.\d]+))?' => [
            'name' => 'Basilisk',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Sputnik Browser (https://play.google.com/store/apps/details?id=ru.sputnik.browser)
        'SputnikBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'Sputnik Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # K.Browser (https://play.google.com/store/apps/details?id=com.tnsua.browser)
        'TNSBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'K.Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Oculus Browser (https://developer.oculus.com/documentation/oculus-browser/latest/concepts/)
        'OculusBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'Oculus Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Jio Browser (https://play.google.com/store/apps/details?id=com.jio.web)
        'Jio(?:Browser|Pages)(?:/(\d+[\.\d]+))?' => [
            'name' => 'Jio Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # https://play.google.com/store/apps/details?id=app.stampy.browser
        'SY/(\d+[\.\d]+) Chrome/' => [
            'name' => 'Stampy Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # hola! Browser (https://hola.org/browser)
        'Chrome/.+ Hola(?:/(\d+[\.\d]+))?' => [
            'name' => 'hola! Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Slimjet (https://slimjet.com)
        'Slimjet/(?:(\d+[\.\d]+))' => [
            'name' => 'Slimjet',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # 7Star
        '7Star/(?:(\d+[\.\d]+))' => [
            'name' => '7Star',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # MxNitro
        'MxNitro/(?:(\d+[\.\d]+))' => [
            'name' => 'MxNitro',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Huawei Browser Mobile
        'HuaweiBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'Huawei Browser Mobile',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Huawei Browser
        'HBPC/(\d+[\.\d]+)' => [
            'name' => 'Huawei Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # vivo Browser
        'VivoBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'vivo Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Realme Browser
        'RealmeBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'Realme Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Beaker distributed web browser (https://beakerbrowser.com/)
        'Beaker ?Browser(?:[/ ](\d+[\.\d]+))?' => [
            'name' => 'Beaker Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Qwant Mobile
        'QwantiOS/(\d+[\.\d]+)' => [
            'name' => 'Qwant Mobile',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'QwantMobile(?:/(\d+[\.\d]+))?' => [
            'name' => 'Qwant Mobile',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Qwant/(\d+[\.\d]+)' => [
            'name' => 'Qwant Mobile',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # TenFourFox
        'TenFourFox(?:/(\d+[\.\d]+))?' => [
            'name' => 'TenFourFox',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # AOL Shield
        'AOLShield(?:/(\d+[\.\d]+))?' => [
            'name' => 'AOL Shield',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Microsoft Edge (Spartan Edge)
        '(?<!motorola )Edge[ /](\d+[\.\d]+)' => [
            'name' => 'Microsoft Edge',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Microsoft Edge for iOS
        'EdgiOS[ /](\d+[\.\d]+)' => [
            'name' => 'Microsoft Edge',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Microsoft Edge for Android
        'EdgA[ /](\d+[\.\d]+)' => [
            'name' => 'Microsoft Edge',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Microsoft Edge (Anaheim Edge)
        'Edg[ /](\d+[\.\d]+)' => [
            'name' => 'Microsoft Edge',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # 360 Browser
        'QIHU 360[ES]E' => [
            'name' => '360 Browser',
            'version' => '',
            'category' => 'Browser'
        ],

        # 360 Phone Browser
        '360 Aphone Browser(?: \((\d+[\.\d]+)(?:beta)?\))?' => [
            'name' => '360 Phone Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #SailfishBrowser
        'SailfishBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'Sailfish Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # IceCat
        'IceCat(?:/(\d+[\.\d]+))?' => [
            'name' => 'IceCat',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Mobicip
        'Mobicip' => [
            'name' => 'Mobicip',
            'version' => '',
            'category' => 'Browser'
        ],
        
        # Camino
        'Camino(?:/(\d+[\.\d]+))?' => [
            'name' => 'Camino',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Waterfox
        'Waterfox(?:/(\d+[\.\d]+))?' => [
            'name' => 'Waterfox',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #AlohaBrowser
        'Chrome/.+ AlohaBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'Aloha Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'AlohaBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'Aloha Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Aloha/' => [
            'name' => 'Aloha Browser',
            'version' => '',
            'category' => 'Browser'
        ],

        # Avast Secure Browser | Avast SafeZone Browser (https://www.avast.com/)
        'Chrome.+(?:Avast(?:SecureBrowser)?|ASW|Safer)(?:/(\d+[\.\d]+))?' => [
            'name' => 'Avast Secure Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        '(?:Avast(?:SecureBrowser)?|ASW|Safer)(?:/(\d+[\.\d]+))?' => [
            'name' => 'Avast Secure Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Epic
        'Epic(?:/(\d+[\.\d]+))' => [
            'name' => 'Epic',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Fennec (Firefox for mobile)
        'Fennec(?:/(\d+[\.\d]+))?' => [
            'name' => 'Fennec',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #MicroB
        'Firefox.*Tablet browser (\d+[\.\d]+)' => [
            'name' => 'MicroB',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Maemo Browser(?: (\d+[\.\d]+))?' => [
            'name' => 'MicroB',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Deepnet Explorer
        'Deepnet Explorer (\d+[\.\d]+)?' => [
            'name' => 'Deepnet Explorer',
            'version' => '$1',
            'category' => 'Browser'
        ],


        #Avant Browser
        'Avant ?Browser' => [
            'name' => 'Avant Browser',
            'version' => '',
            'category' => 'Browser'
        ],

        #Oppo Browser
        'OppoBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'Oppo Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Amigo
        'Chrome/(\d+[\.\d]+).*MRCHROME' => [
            'name' => 'Amigo',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Atomic Web Browser
        'AtomicBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'Atomic Web Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Bunjalloo
        'Bunjalloo(?:/(\d+[\.\d]+))?' => [
            'name' => 'Bunjalloo',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Brave
        'Brave(?:/(\d+[\.\d]+))?' => [
            'name' => 'Brave',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Iridium
        'Iridium(?:/(\d+[\.\d]+))?' => [
            'name' => 'Iridium',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Iceweasel
        'Iceweasel(?:/(\d+[\.\d]+))?' => [
            'name' => 'Iceweasel',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #WebPositive
        'WebPositive' => [
            'name' => 'WebPositive',
            'version' => '',
            'category' => 'Browser'
        ],
        

        #Pale Moon
        '.*Goanna.*PaleMoon(?:/(\d+[\.\d]+))?' => [
            'name' => 'Pale Moon',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'PaleMoon(?:/(\d+[\.\d]+))?' => [
            'name' => 'Pale Moon',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #CometBird
        'CometBird(?:/(\d+[\.\d]+))?' => [
            'name' => 'CometBird',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #IceDragon
        'IceDragon(?:/(\d+[\.\d]+))?' => [
            'name' => 'IceDragon',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Flock
        'Flock(?:/(\d+[\.\d]+))?' => [
            'name' => 'Flock',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Jig Browser Plus (https://jig.jp/)
        'JigBrowserPlus/(?:(\d+[\.\d]+))?' => [
            'name' => 'Jig Browser Plus',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Jig Browser
        'jig browser(?: web;|9i?)?(?:[/ ](\d+[\.\d]+))?' => [
            'name' => 'Jig Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Kapiko
        'Kapiko(?:/(\d+[\.\d]+))?' => [
            'name' => 'Kapiko',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Kylo
        'Kylo(?:/(\d+[\.\d]+))?' => [
            'name' => 'Kylo',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Origin (https://www.origin.com/)
        'Origin/(?:(\d+[\.\d]+))?' => [
            'name' => 'Origin In-Game Overlay',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Cunaguaro
        'Cunaguaro(?:/(\d+[\.\d]+))?' => [
            'name' => 'Cunaguaro',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # t-online.de Browser (https://www.t-online.de/computer/browser/)
        '(?:TO-Browser/TOB|DT-Browser/DTB)(\d+[\.\d]+)' => [
            'name' => 't-online.de Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Kazehakase
        'Kazehakase(?:/(\d+[\.\d]+))?' => [
            'name' => 'Kazehakase',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # ArcticFox (https://github.com/wicknix/Arctic-Fox)
        'ArcticFox(?:/(\d+[\.\d]+))?' => [
            'name' => 'Arctic Fox',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Mypal (https://github.com/Feodor2/Mypal)
        'Mypal(?:/(\d+[\.\d]+))?' => [
            'name' => 'Mypal',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Centaury (https://github.com/Feodor2/Centaury)
        'Centaury(?:/(\d+[\.\d]+))?' => [
            'name' => 'Centaury',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Firefox Focus / Firefox Klar
        '(?:Focus|Klar)(?:/(\d+[\.\d]+))' => [
            'name' => 'Firefox Focus',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Cyberfox
        'Cyberfox(?:/(\d+[\.\d]+))?' => [
            'name' => 'Cyberfox',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Swiftfox
        'Firefox/(\d+[\.\d]+).*\(Swiftfox\)' => [
            'name' => 'Swiftfox',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Firefox Mobile
        '(?:Mobile|Tablet).*Servo.*Firefox(?:/(\d+[\.\d]+))?' => [
            'name' => 'Firefox Mobile',
            'version' => '$1',
            'category' => 'Browser'
        ],
        '(?:Mobile|Tablet).*Firefox(?:/(\d+[\.\d]+))?' => [
            'name' => 'Firefox Mobile',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'FxiOS/(\d+[\.\d]+)' => [
            'name' => 'Firefox Mobile iOS',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Firefox
        '.*Servo.*Firefox(?:/(\d+[\.\d]+))?' => [
            'name' => 'Firefox',
            'version' => '$1',
            'category' => 'Browser'
        ],
        '(?!.*Opera[ /])Firefox(?:/(\d+[\.\d]+))?' => [
            'name' => 'Firefox',
            'version' => '$1',
            'category' => 'Browser'
        ],
        '(?:BonEcho|GranParadiso|Lorentz|Minefield|Namoroka|Shiretoko)/(\d+[\.\d]+)' => [
            'name' => 'Firefox',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #ANT Fresco
        'ANTFresco(?:[/ ](\d+[\.\d]+))?' => [
            'name' => 'ANT Fresco',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #ANTGalio
        'ANTGalio(?:/(\d+[\.\d]+))?' => [
            'name' => 'ANTGalio',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Espial TV Browser
        '(?:Espial|Escape)(?:[/ ](\d+[\.\d]+))?' => [
            'name' => 'Espial TV Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #RockMelt
        'RockMelt(?:/(\d+[\.\d]+))?' => [
            'name' => 'RockMelt',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Fireweb Navigator
        'Fireweb Navigator(?:/(\d+[\.\d]+))?' => [
            'name' => 'Fireweb Navigator',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Fireweb
        'Fireweb(?:/(\d+[\.\d]+))?' => [
            'name' => 'Fireweb',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Netscape
        '(?:Navigator|Netscape6?)(?:/(\d+[\.\d]+))?' => [
            'name' => 'Netscape',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Polarity
        '(?:Polarity)(?:[/ ](\d+[\.\d]+))?' => [
            'name' => 'Polarity',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #QupZilla
        '(?:QupZilla)(?:[/ ](\d+[\.\d]+))?' => [
            'name' => 'QupZilla',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Dooble
        '(?:Dooble)(?:[/ ](\d+[\.\d]+))?' => [
            'name' => 'Dooble',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Whale
        'Whale/(\d+[\.\d]+)' => [
            'name' => 'Whale Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Obigo
        'Obigo[ ]?(?:InternetBrowser|Browser)?(?:[ /]([a-z0-9]*))?' => [
            'name' => 'Obigo',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Obigo|Teleca' => [
            'name' => 'Obigo',
            'version' => '',
            'category' => 'Browser'
        ],

        # UC Browser HD
        'UCBrowserHD/(\d[\d\.]+)' => [
            'name' => 'UC Browser HD',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #UC Browser Mini
        'UCMini(?:[ /]?(\d+[\.\d]+))?' => [
            'name' => 'UC Browser Mini',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'UC[ ]?Browser.* \(UCMini\)' => [
            'name' => 'UC Browser Mini',
            'version' => '',
            'category' => 'Browser'
        ],
        'Chrome.+uc mini browser(\d+[\.\d]+)?' => [
            'name' => 'UC Browser Mini',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # UC Browser Turbo
        'UCTurbo(?:[ /]?(\d+[\.\d]+))?' => [
            'name' => 'UC Browser Turbo',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'UC[ ]?Browser.* \(UCTurbo\)' => [
            'name' => 'UC Browser Turbo',
            'version' => '',
            'category' => 'Browser'
        ],

        # Opera GX (https://www.opera.com/gx#start | http://ftp.opera.com/pub/opera_gx/)
        'Chrome/.+ OP(?:RG)?X(?:/(\d+[\.\d]+))?' => [
            'name' => 'Opera GX',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        'OP(?:RG)?X(?:/(\d+[\.\d]+))?' => [
            'name' => 'Opera GX',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Opera
        '(?:Opera Tablet.*Version|Opera/.+Opera Mobi.+Version|Mobile.+OPR)/(\d+[\.\d]+)' => [
            'name' => 'Opera Mobile',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'MMS/(\d+[\.\d]+)' => [
            'name' => 'Opera Neon',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'OMI/(\d+[\.\d]+)' => [
            'name' => 'Opera Devices',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Opera Touch/(\d+[\.\d]+)? CFNetwork/.+Darwin/.+(?!.*x86_64)' => [
            'name' => 'Opera Touch',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Opera Touch/.+CFNetwork/.+Darwin/.+(?!.*x86_64)' => [
            'name' => 'Opera Touch',
            'version' => '',
            'category' => 'Browser'
        ],
        'OPT/(\d+[\.\d]+)' => [
            'name' => 'Opera Touch',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Opera/(\d+[\.\d]+).+Opera Mobi' => [
            'name' => 'Opera Mobile',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Opera ?Mini/(?:att/)?(\d+[\.\d]+)' => [
            'name' => 'Opera Mini',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Opera ?Mini.+Version/(\d+[\.\d]+)' => [
            'name' => 'Opera Mini',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'OPiOS/(\d+[\.\d]+)' => [
            'name' => 'Opera Mini iOS',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Opera Mini/(\d+[\.\d]+) CFNetwork' => [
            'name' => 'Opera Mini iOS',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        'Opera.+Edition Next.+Version/(\d+[\.\d]+)' => [
            'name' => 'Opera Next',
            'version' => '$1',
            'category' => 'Browser'
        ],
        '(?:Opera|OPR)[/ ](?:9.80.*Version/)?(\d+[\.\d]+).+Edition Next' => [
            'name' => 'Opera Next',
            'version' => '$1',
            'category' => 'Browser'
        ],
        '(?:Opera[/ ]?|OPR[/ ])(?:9.80.*Version/)?(\d+[\.\d]+)' => [
            'name' => 'Opera',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Opera/.+CFNetwork' => [
            'name' => 'Opera',
            'version' => '',
            'category' => 'Browser'
        ],
        'Chrome.+Opera/' => [
            'name' => 'Opera',
            'version' => '',
            'category' => 'Browser'
        ],
        
        #Rekonq
        'rekonq(?:/(\d+[\.\d]+))?' => [
            'name' => 'Rekonq',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #CoolNovo (former ChromePlus)
        'CoolNovo(?:/(\d+[\.\d]+))?' => [
            'name' => 'CoolNovo',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Comodo Dragon
        '(?:Comodo[ _])?Dragon(?!fruit)(?:/(\d+[\.\d]+))?' => [
            'name' => 'Comodo Dragon',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #ChromePlus
        'ChromePlus(?:/(\d+[\.\d]+))?' => [
            'name' => 'ChromePlus',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Conkeror
        'Conkeror(?:/(\d+[\.\d]+))?' => [
            'name' => 'Conkeror',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Konqueror
        'Konqueror(?:/(\d+[\.\d]+))?' => [
            'name' => 'Konqueror',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Baidu Browser
        '(?:baidubrowser|bdbrowser(?:(?:hd)?_i18n)?|FlyFlow|BaiduHD)(?:[/ ](\d+[\.\d]*))?' => [
            'name' => 'Baidu Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Baidu Spark
        '(?:(?:BD)?Spark(?:Safe)?|BIDUBrowser)[/ ](\d+[\.\d]*)' => [
            'name' => 'Baidu Spark',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Yandex Browser Lite
        'YaBrowser(?:/(\d+[\.\d]*)) \(lite\)?' => [
            'name' => 'Yandex Browser Lite',
            'version' => '$1',
            'category' => 'Browser'
        ],
        #Yandex Browser
        'YaBrowser(?:/(\d+[\.\d]*))(?: \((alpha|beta)\))?' => [
            'name' => 'Yandex Browser',
            'version' => '$1 $2',
            'category' => 'Browser'
        ],
        # Yandex Browser + voice assistant alisa
        'Ya(?:ndex)?SearchBrowser(?:/(\d+[\.\d]*))' => [
            'name' => 'Yandex Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Vivaldi
        'Vivaldi(?:/(\d+[\.\d]+))?' => [
            'name' => 'Vivaldi',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #TweakStyle
        'TweakStyle(?:/(\d+[\.\d]+))?' => [
            'name' => 'TweakStyle',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Midori
        'Chrome.+Midori Browser/(\d+[\.\d]+)' => [
            'name' => 'Midori',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Midori(?:/(\d+[\.\d]+))?' => [
            'name' => 'Midori',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Mercury
        'Mercury/(?:(\d+[\.\d]+))?' => [
            'name' => 'Mercury',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Maxthon
        'Chrome.+Maxthon/\d{4}' => [
            'name' => 'Maxthon',
            'version' => '',
            'category' => 'Browser'
        ],
        'Chrome.+(?:MxBrowser|Maxthon)(?:.+\(portable\))?/(\d+\.[\.\d]+)' => [
            'name' => 'Maxthon',
            'version' => '$1',
            'category' => 'Browser'
        ],
            
        '(?:Maxthon(?: Browser)?|MxBrowser(?:-inhouse|-iPhone)?|MXiOS)[ /](\d+[\.\d]+)?' => [
            'name' => 'Maxthon',
            'version' => '$1',
            'category' => 'Browser'
        ],

        '(?:Maxthon|MyIE2)' => [
            'name' => 'Maxthon',
            'version' => '',
            'category' => 'Browser'
        ],

        #Puffin
        'Puffin(?:/(\d+[\.\d]+))?' => [
            'name' => 'Puffin',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #MobileIron
        'MobileIron(?:/(\d+[\.\d]+))?' => [
            'name' => 'Iron Mobile',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Iron
        'Chrome(?:/(\d+[\.\d]+))?.*Iron' => [
            'name' => 'Iron',
            'version' => '$1',
            'category' => 'Browser'
        ],

        'Iron(?:/(\d+[\.\d]+))?' => [
            'name' => 'Iron',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #GNOME Web
        'Epiphany(?:/(\d+[\.\d]+))?' => [
            'name' => 'GNOME Web',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # LieBaoFast
        'LieBaoFast(?:[ /](\d+[\.\d]+))?' => [
            'name' => 'LieBaoFast',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Cheetah Browser
        'LBBrowser(?:[ /](\d+[\.\d]+))?' => [
            'name' => 'Cheetah Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Sogou Explorer
        'SE (\d+[\.\d]+)' => [
            'name' => 'Sogou Explorer',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # QQ Browser Lite
        'QQBrowserLite/([\d\.]+)' => [
            'name' => 'QQ Browser Lite',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # QQ Browser Mini
        'M?QQBrowser/Mini([\.\d]+)?' => [
            'name' => 'QQ Browser Mini',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # QQ Browser
        'M?QQBrowser(?:/([\.\d]+))?' => [
            'name' => 'QQ Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # MIUI Browser
        '(?:MIUIBrowser|MiuiBrowser)(?:/(\d+[\.\d]+))?' => [
            'name' => 'MIUI Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Coc Coc
        # This browser (http://coccoc.vn/) is built on top of Chromium with
        # additional features for Vietnamese users. Its regex has to be placed
        # before generic Chrome regex, or Chrome regex will match first and
        # the browser is mistaken as 'Chrome".
        '(?:coc_coc_browser|coccocbrowser|CocCoc)(?:/(\d+[\.\d]+))?' => [
            'name' => 'Coc Coc',
            'version' => '$1',
            'category' => 'Browser'
        ],

        'DuckDuckGo/(\d+[\.\d]*)' => [
            'name' => 'DuckDuckGo Privacy Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Samsung Browser
        'Samsung ?Browser(?:[/ ](\d+[\.\d]+))?' => [
            'name' => 'Samsung Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Super Fast Browser (https://play.google.com/store/apps/details?id=com.browser.tssomas)
        '(?:SFB(?:rowser)?)/(\d+[\.\d]+)' => [
            'name' => 'Super Fast Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'com.browser.tssomas(?:/(\d+[\.\d]+))?' => [
            'name' => 'Super Fast Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # EUI Browser
        'EUI Browser(?:/(\d+[\.\d]+))?' => [
            'name' => 'EUI Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # UBrowser (https://callumprentice.github.io/)
        'UBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'UBrowser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Streamy (Chromium based)
        'Streamy(?:/(\d+[\.\d]+))?' => [
            'name' => 'Streamy',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Isivioo (Android version is Chrome based)
        'isivioo' => [
            'name' => 'Isivioo',
            'version' => '',
            'category' => 'Browser'
        ],
        
        #UC Browser
        'UC[ ]?Browser(?:[ /]?(\d+[\.\d]+))?' => [
            'name' => 'UC Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'UCWEB(?:[ /]?(\d+[\.\d]+))?' => [
            'name' => 'UC Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'UC AppleWebKit' => [
            'name' => 'UC Browser',
            'version' => '',
            'category' => 'Browser'
        ],
        'UC Browser/(\d+[\.\d]+)? CFNetwork/.+Darwin/.+(?!.*x86_64)' => [
            'name' => 'UC Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Chrome.+UC Browser(\d+[\.\d]+)' => [
            'name' => 'UC Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #It should be checked before Chrome since the UA contains the Chrome

        #Tenta Browser (https://play.google.com/store/apps/details?id=com.tenta.android)
        'Chrome/.+Tenta/(\d+[\.\d]+)' => [
            'name' => 'Tenta Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Tenta/(\d+[\.\d]+)' => [
            'name' => 'Tenta Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Firefox Rocket
        'Rocket/(\d+[\.\d]+)' => [
            'name' => 'Firefox Rocket',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Web Explorer
        'Web Explorer/(\d+[\.\d]+).*Chrome' => [
            'name' => 'Web Explorer',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'webexplorer/(\d+)' => [
            'name' => 'Web Explorer',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Seznam Browser
        'SznProhlizec/(\d+[\.\d]+)' => [
            'name' => 'Seznam Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # SogouMobileBrowser
        'SogouMobileBrowser/(\d+[\.\d]+)' => [
            'name' => 'Sogou Mobile Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Mint Browser
        'Mint Browser/(\d+[\.\d]+)' => [
            'name' => 'Mint Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Ecosia
        'Ecosia (?:android|ios)@(\d+[\.\d]+)' => [
            'name' => 'Ecosia',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # CM Browser
        'ACHEETAHI' => [
            'name' => 'CM Browser',
            'version' => '',
            'category' => 'Browser'
        ],

        # Lenovo Browser
        'Chrome/.+ (?:LeBrowser|MobileLenovoBrowser)(?:/(\d+[\.\d]+))?' => [
            'name' => 'Lenovo Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'LeBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'Lenovo Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Kiwi Browser
        'Kiwi Chrome' => [
            'name' => 'Kiwi',
            'version' => '',
            'category' => 'Browser'
        ],

        # 2345 Browser
        'Mb2345Browser/(\d+[\.\d]+)' => [
            'name' => '2345 Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Mobile Silk
        'Silk/(\d+[\.\d]+) like Chrome' => [
            'name' => 'Mobile Silk',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Silk(?:/(\d+[\.\d]+))?' => [
            'name' => 'Mobile Silk',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # iBrowser Mini
        'iBrowser/Mini(\d+\.\d+)' => [
            'name' => 'iBrowser Mini',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # iBrowser
        'iBrowser/(\d+\.[.\d]+)?' => [
            'name' => 'iBrowser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #IBrowse
        'IBrowse(?:[ /](\d+[\.\d]+))?' => [
            'name' => 'IBrowse',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Openwave Mobile Browser
        'UP.Browser(?:/(\d+[\.\d]+))?' => [
            'name' => 'Openwave Mobile Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Openwave(?:/(\d+[\.\d]+))?' => [
            'name' => 'Openwave Mobile Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #ONE Browser
        'OneBrowser(?:[ /](\d+[\.\d]+))?' => [
            'name' => 'ONE Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # GoBrowser
        'GoBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'GoBrowser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Nokia Browser
        '(?:NokiaBrowser|BrowserNG)(?:/(\d+[\.\d]+))?' => [
            'name' => 'Nokia Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Series60/5\.0' => [
            'name' => 'Nokia Browser',
            'version' => '7.0',
            'category' => 'Browser'
        ],
        'Series60/(\d+[\.\d]+)' => [
            'name' => 'Nokia OSS Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'S40OviBrowser/(\d+[\.\d]+)' => [
            'name' => 'Nokia Ovi Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        '^Nokia|Nokia[EN]?\d+' => [
            'name' => 'Nokia Browser',
            'version' => '',
            'category' => 'Browser'
        ],

        #Sleipnir
        'Sleipnir(?:(?: Browser)?[ /](\d+[\.\d]+))?' => [
            'name' => 'Sleipnir',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # NTENT Browser
        'NTENTBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'NTENT Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # TV Bro
        'TV Bro/(\d+[\.\d]+)' => [
            'name' => 'TV Bro',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Quark
        'Chrome/.+ Quark(?:/(\d+[\.\d]+))?' => [
            'name' => 'Quark',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Monument Browser
        'MonumentBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'Monument Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Blue Browser
        'BlueBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'Blue Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Japan Browser (https://play.google.com/store/apps/details?id=com.japan.browser.anti.blokir)
        'JAPAN Browser(?:/(\d+[\.\d]+))?' => [
            'name' => 'Japan Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        'OpenFin/(?:(\d+[\.\d]+))' => [
            'name' => 'OpenFin',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # SuperBird
        'SuperBird(?:/(\d+[\.\d]+))?' => [
            'name' => 'SuperBird',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Soul Browser (https://play.google.com/store/apps/details?id=com.mycompany.app.soulbrowser)
        'Soul(?:Browser)?$|Soul/' => [
            'name' => 'Soul Browser',
            'version' => '',
            'category' => 'Browser'
        ],
        
        # LG Browser
        'LG Browser(?:/(\d+[\.\d]+))' => [
            'name' => 'LG Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # QtWebEngine should be placed after LG Browser
        'QtWebEngine/(\d+[\.\d]+)' => [
            'name' => 'QtWebEngine',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # Chrome Webview
        'Version/.* Chrome(?:/(\d+[\.\d]+))?' => [
            'name' => 'Chrome Webview',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Chrome
        'CrMo(?:/(\d+[\.\d]+))?' => [
            'name' => 'Chrome Mobile',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'CriOS(?:/(\d+[\.\d]+))?' => [
            'name' => 'Chrome Mobile iOS',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Chrome(?:/(\d+[\.\d]+))? Mobile' => [
            'name' => 'Chrome Mobile',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'chromeframe(?:/(\d+[\.\d]+))?' => [
            'name' => 'Chrome Frame',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Chromium(?:/(\d+[\.\d]+))?' => [
            'name' => 'Chromium',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'HeadlessChrome(?:/(\d+[\.\d]+))?' => [
            'name' => 'Headless Chrome',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Chrome(?!book)(?:/(\d+[\.\d]+))?' => [
            'name' => 'Chrome',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # PocketBook Browser
        'PocketBook/' => [
            'name' => 'PocketBook Browser',
            'version' => '',
            'category' => 'Browser'
        ],
        
        #Tizen Browser
        '(?:Tizen|SLP) ?Browser(?:/(\d+[\.\d]+))?' => [
            'name' => 'Tizen Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Tizen (?:\d+[\.\d]+).+ Version/(\d+[\.\d]+) (?:TV|Mobile|like)' => [
            'name' => 'Tizen Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Palm Blazer
        'Blazer(?:/(\d+[\.\d]+))?' => [
            'name' => 'Palm Blazer',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Pre/(\d+[\.\d]+)' => [
            'name' => 'Palm Pre',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #wOSBrowser
        '(?:hpw|web)OS/(\d+[\.\d]+)' => [
            'name' => 'wOSBrowser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Palm WebPro
        'WebPro(?:[ /](\d+[\.\d]+))?' => [
            'name' => 'Palm WebPro',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Palmscape
        'Palmscape(?:[ /](\d+[\.\d]+))?' => [
            'name' => 'Palmscape',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Jasmine
        'Jasmine(?:[ /](\d+[\.\d]+))?' => [
            'name' => 'Jasmine',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Lynx
        'Lynx(?:/(\d+[\.\d]+))?' => [
            'name' => 'Lynx',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #NCSA Mosaic
        'NCSA_Mosaic(?:/(\d+[\.\d]+))?' => [
            'name' => 'NCSA Mosaic',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #ABrowse
        'ABrowse(?: (\d+[\.\d]+))?' => [
            'name' => 'ABrowse',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Amaya
        'amaya(?:/(\d+[\.\d]+))?' => [
            'name' => 'Amaya',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Amiga Voyager
        'AmigaVoyager(?:/(\d+[\.\d]+))?' => [
            'name' => 'Amiga Voyager',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Amiga Aweb
        'Amiga-Aweb(?:/(\d+[\.\d]+))?' => [
            'name' => 'Amiga Aweb',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Arora
        'Arora(?:/(\d+[\.\d]+))?' => [
            'name' => 'Arora',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Beonex
        'Beonex(?:/(\d+[\.\d]+))?' => [
            'name' => 'Beonex',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #B-Line
        'bline(?:/(\d+[\.\d]+))?' => [
            'name' => 'B-Line',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #BrowseX
        'BrowseX \((\d+[\.\d]+)' => [
            'name' => 'BrowseX',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Charon
        'Charon(?:[/ ](\d+[\.\d]+))?' => [
            'name' => 'Charon',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Cheshire
        'Cheshire(?:/(\d+[\.\d]+))?' => [
            'name' => 'Cheshire',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #dbrowser
        'dbrowser' => [
            'name' => 'dbrowser',
            'version' => '',
            'category' => 'Browser'
        ],
        
        #Dillo
        'Dillo(?:/(\d+[\.\d]+))?' => [
            'name' => 'Dillo',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Dolphin
        'Dolfin(?:/(\d+[\.\d]+))?|dolphin' => [
            'name' => 'Dolphin',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Elinks
        'Elinks(?:/(\d+[\.\d]+))?' => [
            'name' => 'Elinks',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Element Browser
        'Element Browser(?:[ /](\d+[\.\d]+))?' => [
            'name' => 'Element Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # eZ Browser (https://play.google.com/store/apps/details?id=com.asc.csbrowser)
        'eZBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'eZ Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Firebird
        'Firebird(?! Build)(?:/(\d+[\.\d]+))?' => [
            'name' => 'Firebird',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Fluid
        'Fluid(?:/(\d+[\.\d]+))?' => [
            'name' => 'Fluid',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Galeon
        'Galeon(?:/(\d+[\.\d]+))?' => [
            'name' => 'Galeon',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Google Earth Pro (https://www.google.se/intl/en/earth/versions/)
        '(?:Google Earth Pro|Google Earth Pro)(?:/(\d+[\.\d]+))?' => [
            'name' => 'Google Earth Pro',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'GoogleEarth/(\d+[\.\d]+).+client:(?:Plus|Pro)' => [
            'name' => 'Google Earth Pro',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Google Earth (https://www.google.se/intl/en/earth/versions/)
        'Google ?Earth(?:/v?(\d+[\.\d]+))?' => [
            'name' => 'Google Earth',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #HotJava
        'HotJava(?:/(\d+[\.\d]+))?' => [
            'name' => 'HotJava',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #iCabMobile
        'iCabMobile(?:[ /](\d+[\.\d]+))?' => [
            'name' => 'iCab Mobile',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #iCab
        'iCab(?:[ /](\d+[\.\d]+))?' => [
            'name' => 'iCab',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Crazy Browser
        'Crazy Browser (\d+[\.\d]+)' => [
            'name' => 'Crazy Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Internet Explorer
        'IEMobile[ /](\d+[\.\d]+)' => [
            'name' => 'IE Mobile',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'MSIE (\d+[\.\d]+).*XBLWP7' => [
            'name' => 'IE Mobile',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'MSIE.*Trident/4.0' => [
            'name' => 'Internet Explorer',
            'version' => '8.0',
            'category' => 'Browser'
        ],
        'MSIE.*Trident/5.0' => [
            'name' => 'Internet Explorer',
            'version' => '9.0',
            'category' => 'Browser'
        ],
        'MSIE.*Trident/6.0' => [
            'name' => 'Internet Explorer',
            'version' => '10.0',
            'category' => 'Browser'
        ],
        'Trident/[78].0' => [
            'name' => 'Internet Explorer',
            'version' => '11.0',
            'category' => 'Browser'
        ],
        'MSIE (\d+[\.\d]+)' => [
            'name' => 'Internet Explorer',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'IE[ /](\d+[\.\d]+)' => [
            'name' => 'Internet Explorer',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Kindle Browser
        'Kindle/(\d+[\.\d]+)' => [
            'name' => 'Kindle Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #K-meleon
        'K-meleon(?:/(\d+[\.\d]+))?' => [
            'name' => 'K-meleon',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Links
        'Links(?: \((\d+[\.\d]+))?' => [
            'name' => 'Links',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # LuaKit
        'LuaKit(?:/(\d+[\.\d]+))?' => [
            'name' => 'LuaKit',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #OmniWeb
        'OmniWeb(?:/[v]?(\d+[\.\d]+))?' => [
            'name' => 'OmniWeb',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Phoenix
        'Phoenix(?:/(\d+[\.\d]+))?' => [
            'name' => 'Phoenix',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #NetFront
        'NetFrontLifeBrowser(?:/(\d+[\.\d]+))?' => [
            'name' => 'NetFront Life',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'NetFront(?:/(\d+[\.\d]+))?' => [
            'name' => 'NetFront',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'PLAYSTATION|NINTENDO 3|AppleWebKit.+ N[XF]/\d+\.\d+\.\d+' => [
            'name' => 'NetFront',
            'version' => '',
            'category' => 'Browser'
        ],

        #NetPositive
        'NetPositive(?:/(\d+[\.\d]+))?' => [
            'name' => 'NetPositive',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Odyssey Web Browser
        'Odyssey Web Browser(?:.*OWB/(\d+[\.\d]+))?' => [
            'name' => 'Odyssey Web Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Off By One
        'OffByOne' => [
            'name' => 'Off By One',
            'version' => '',
            'category' => 'Browser'
        ],

        #Oregano (https://oregan.net/)
        '(?:Oregano|OreganMediaBrowser)(?:[ /](\d+[\.\d]+))?' => [
            'name' => 'Oregano',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Polaris
        '(?:Polaris|Embider)(?:[/ ](\d+[\.\d]+))?' => [
            'name' => 'Polaris',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #SEMC Browser
        'SEMC-Browser(?:[/ ](\d+[\.\d]+))?' => [
            'name' => 'SEMC-Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Shiira
        'Shiira(?:[/ ](\d+[\.\d]+))?' => [
            'name' => 'Shiira',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Skyfire
        'Skyfire(?:[/ ](\d+[\.\d]+))?' => [
            'name' => 'Skyfire',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Snowshoe
        'Snowshoe(?:/(\d+[\.\d]+))?' => [
            'name' => 'Snowshoe',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Sunrise
        'Sunrise(?:Browser)?(?:/(\d+[\.\d]+))?' => [
            'name' => 'Sunrise',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #Vision Mobile Browser
        'Vision-Browser(?:/(\d+[\.\d]+))' => [
            'name' => 'Vision Mobile Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #WeTab Browser
        'WeTab-Browser' => [
            'name' => 'WeTab Browser',
            'version' => '',
            'category' => 'Browser'
        ],

        #Xiino
        'Xiino(?:/(\d+[\.\d]+))?' => [
            'name' => 'Xiino',
            'version' => '$1',
            'category' => 'Browser'
        ],

        #BlackBerry Browser
        'BlackBerry|PlayBook|BB10' => [
            'name' => 'BlackBerry Browser',
            'version' => '',
            'category' => 'Browser'
        ],

        #Android Browser
        '(?<! like )Android' => [
            'name' => 'Android Browser',
            'version' => '',
            'category' => 'Browser'
        ],
        
        #Coast
        'Coast(?:/(\d+[\.\d]+))?' => [
            'name' => 'Coast',
            'version' => '$1',
            'category' => 'Browser'
        ],
        'Opera Coast/(\d+[\.\d]+)? CFNetwork/.+Darwin/.+(?!.*x86_64)' => [
            'name' => 'Coast',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # surf (https://surf.suckless.org/)
        'Surf(?:/(\d+[\.\d]+))?' => [
            'name' => 'surf',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Safari Technology Preview (https://developer.apple.com/safari/technology-preview/)
        'Safari Technology Preview/(\d+[\.\d]+)' => [
            'name' => 'Safari Technology Preview',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        #Safari
        '(?:(?:iPod|iPad|iPhone).+Version|MobileSafari)/(\d+[\.\d]+)' => [
            'name' => 'Mobile Safari',
            'version' => '$1',
            'category' => 'Browser'
        ],
        '(?:Version/(\d+[\.\d]+).*)?Mobile.*Safari/' => [
            'name' => 'Mobile Safari',
            'version' => '$1',
            'category' => 'Browser'
        ],
        '(?:iPod|(?<!Apple TV; U; CPU )iPhone|iPad)' => [
            'name' => 'Mobile Safari',
            'version' => '',
            'category' => 'Browser'
        ],
        'Version/(\d+[\.\d]+).*Safari/|(?:Safari|Safari(?: )?%E6%B5%8F%E8%A7%88%E5%99%A8)/?\d+' => [
            'name' => 'Safari',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Dorado
        'Dorado WAP-Browser(?:[/ ](\d+[\.\d]+))?' => [
            'name' => 'Dorado',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # NetSurf
        'NetSurf(?:/(\d+[\.\d]+))?' => [
            'name' => 'NetSurf',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # Uzbl (https://www.uzbl.org/)
        'Uzbl' => [
            'name' => 'Uzbl',
            'version' => '',
            'category' => 'Browser'
        ],

        # SimpleBrowser (https://github.com/SimpleBrowserDotNet/SimpleBrowser)
        'SimpleBrowser' => [
            'name' => 'SimpleBrowser',
            'version' => '',
            'category' => 'Browser'
        ],

        # Zvu
        'Zvu(?:/(\d+[\.\d]+))?' => [
            'name' => 'Zvu',
            'version' => '$1',
            'category' => 'Browser'
        ],
        
        # GOG Galaxy
        'GOGGalaxyClient/(\d+[\.\d]+)?' => [
            'name' => 'GOG Galaxy',
            'version' => '$1',
            'category' => 'Browser'
        ],

        # MAUI Wap Browser
        'WAP Browser/MAUI|(?:\w*)Maui Wap Browser|MAUI[- ]Browser' => [
            'name' => 'MAUI WAP Browser',
            'version' => '',
            'category' => 'Browser'
        ],

        # SP Browser
        'SP Browser/(\d+[\.\d]+)' => [
            'name' => 'SP Browser',
            'version' => '$1',
            'category' => 'Browser'
        ],
    ];
}