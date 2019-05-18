<?php
namespace Aknife\Agent;

class Device
{
    // 规则来源于 : https://github.com/matomo-org/device-detector/blob/master/regexes/device/mobiles.yml
    // 未做 过滤 和 测试
    public static $rule = [
         // Huawei
        '(HW-)?(?:Huawei|Ideos|Honor[ _]?|(?:(?:AGS2|AGS|ALE|ALP|ANE|ARE|ATH|ATU|AUM|BAC|BAH|BG2|BGO|BKL|BLA|BLL|BLN|BND|BTV|CAG|CAM|CAN|CAZ|CHC|CHE[12]|CHM|CLT|CMR|COL|COR|CPN|CRO|CRR|CUN|DIG|DLI|DRA|DUA|DUB|DUK|EDI|EML|EVA|EVR|FDR|FIG|FLA|FRD|G(?:527|620S|621|630|735)|GRA|H[36]0|HMA|HRY|INE|JKM|JMM|JSN|KIW|KOB|LDN|LLD|LND|LON|LUA|LYA|MHA|MYA|NEM|NEO|NXT|PAR|PIC|PLE|PLK|POT|PRA|RIO|RNE|SCC|SCL|SHT|SLA|SNE|STF|TAG|TIT|TNY|TRT|VEN|VIE|VKY|VNS|VTR|WAS|Y(?:221|330|550|6[23]5))-[A-Z]{0,2}[0-9]{1,4}[A-Z]?|H1711|U(?:8230|8500|8661|8665|8667|8800|8818|8860|9200|9508))[);/ ])|hi6210sft|DIG-L21HN'   =>  [
            'name'=>'Huawei',
            'category'=>'smartphone',
            'sub'=>[
                'U(8230|8661|8667)[);/ ]'=>[
                    'name'=>'U$1',
                ],
                'TAG-[ACT]L00'=>[
                    'name'=>'Enjoy 5S',
                ],
                'DUA-AL00'=>[
                    'name'=>'Enjoy 7',
                ],
                'LDN-(?:AL20|TL20)'=>[
                    'name'=>'Enjoy 8',
                ],
                'ATU-AL1'=>[
                    'name'=>'Enjoy 8e',
                ],
                'U8500[);/ ]'=>[
                    'name'=>'Ideos X2',
                ],
                'U8510[);/ ]'=>[
                    'name'=>'Ideos X3',
                ],
                'U8665[);/ ]'=>[
                    'name'=>'Fusion 2',
                ],
                'G735-L(?:03|12|23)'=>[
                    'name'=>'G Play',
                ],
                'CHC-U(?:0[13]|23)'=>[
                    'name'=>'G Play Mini',
                ],
                'DIG-L21HN'=>[
                    'name'=>'Honor 6C',
                ],
                'DIG-L2[12]'=>[
                    'name'=>'GR3 (2017)',
                ],
                'BLL-L2[12]'=>[
                    'name'=>'GR5 (2017)',
                ],
                'U8800[);/ ]'=>[
                    'name'=>'Ideos X5',
                ],
                'U8818[);/ ]'=>[
                    'name'=>'Ascend G300',
                ],
                'G527-U081'=>[
                    'name'=>'Ascend G527',
                ],
                'G620S-L03'=>[
                    'name'=>'Ascend G620S',
                ],
                'G630-U251'=>[
                    'name'=>'Ascend G630',
                ],
                'U8860[);/ ]'=>[
                    'name'=>'Honor',
                ],
                'H1711[);/ ]'=>[
                    'name'=>'Ascend XT2',
                ],
                'U9200[);/ ]'=>[
                    'name'=>'Ascend P1',
                ],
                'U9500[);/ ]'=>[
                    'name'=>'Ascend D1',
                ],
                'Y221-U(?:[12]2|[0345]3)'=>[
                    'name'=>'Ascend Y221',
                ],
                'Y550-L03'=>[
                    'name'=>'Ascend Y550',
                ],
                'U9508[);/ ]'=>[
                    'name'=>'Honor 2',
                ],
                'CHE2?-[UT]L00[HM]?|CHE1-CL[12]0|CHE2-L(?:11|23)|Che1-L04'=>[
                    'name'=>'Honor 4X',
                ],
                'CHM-[CUT]L00[HM]?'=>[
                    'name'=>'Honor Play 4C',
                ],
                'DUK-AL20'=>[
                    'name'=>'Honor V9',
                ],
                'JMM-AL00'=>[
                    'name'=>'Honor V9 Play',
                ],
                'BKL-(?:AL00|AL20|AL30|L09|TL10)'=>[
                    'name'=>'Honor V10',
                ],
                '(?:Honor_|HW-)?G621-TL00M?[);/ ]'=>[
                    'name'=>'G621',
                ],
                '(?:Honor_|HW-)?H30-(?:C00|L01M?|L02|U10|T00|T10)(?:_TD)?[);/ ]'=>[
                    'name'=>'Honor 3C',
                ],
                '(?:Honor_|HW-)?SCL-(?:AL00|CL00|TL00H?)(?:_TD)?[);/ ]'=>[
                    'name'=>'Honor 4A',
                ],
                '(?:Honor_|HW-)?CAM-(?:AL00|TL00H|TL00)(?:_TD)?[);/ ]'=>[
                    'name'=>'Honor 5A',
                ],
                '(?:Honor_|HW-)?KIW-(?:AL10|TL00H|L2[124]|UL00)(?:_TD)?[);/ ]'=>[
                    'name'=>'Honor 5X',
                ],
                '(?:Honor_|HW-)?CHM-U01(?:_TD)?[);/ ]'=>[
                    'name'=>'Honor 4C',
                ],
                '(?:Honor_|HW-)?H60-L(?:01|02|03|04|11|12)(?:_TD)?[);/ ]'=>[
                    'name'=>'Honor 6',
                ],
                'MYA-TL10'=>[
                    'name'=>'Honor 6 Play',
                ],
                '(?:Honor_|HW-)?SCL-L01(?:_TD)?[);/ ]'=>[
                    'name'=>'Honor Y6',
                ],
                '(?:Honor_|HW-)?PLK-(?:AL10|CL00|TL00|TL01H?|UL00|L01)[);/ ]'=>[
                    'name'=>'Honor 7',
                ],
                'AUM-(?:AL20|L33)'=>[
                    'name'=>'Honor 7A',
                ],
                'AUM-L29'=>[
                    'name'=>'Honor 7A Pro',
                ],
                '(?:Honor_|HW-)?(?:LND-AL[34]0|LND-L29|AUM-L41)[);/ ]'=>[
                    'name'=>'Honor 7C',
                ],
                '(?:Honor_|HW-)?DUA-L22[);/ ]'=>[
                    'name'=>'Honor 7S',
                ],
                '(?:Honor_|HW-)?NEM-(?:AL10|L51|UL10)[);/ ]'=>[
                    'name'=>'Honor 5C',
                ],
                '(?:Honor_|HW-)?NEM-(?:L22|TL00H)[);/ ]'=>[
                    'name'=>'Honor 5C Dual SIM',
                ],
                '(?:Honor_|HW-)?NEM-L21[);/ ]'=>[
                    'name'=>'Honor 7 Lite',
                ],
                '(?:HONOR[ _]?)?DLI-(?:AL10|L[24]2|TL20)'=>[
                    'name'=>'Honor 6A',
                ],
                'JMM-L22'=>[
                    'name'=>'Honor 6C Pro',
                ],
                '(?:HONOR[ _]?)?BLN-(?:L2[124]|AL[123]0|TL[01]0)'=>[
                    'name'=>'Honor 6X',
                ],
                'ATH-AL00'=>[
                    'name'=>'Honor 7i',
                ],
                '(?:HONOR[ _]?)?BND-(?:AL[01]0|TL10|L2[14]|L31)'=>[
                    'name'=>'Honor 7X',
                ],
                'FRD-(?:AL[01]0|L0[249]|L1[49])'=>[
                    'name'=>'Honor 8',
                ],
                'BKK-(?:AL10|L21|L22|LX2)'=>[
                    'name'=>'Honor 8C',
                ],
                'JSN-L(?:2[123]|42)'=>[
                    'name'=>'Honor 8X',
                ],
                'ARE-AL00'=>[
                    'name'=>'Honor 8X Max',
                ],
                'PRA-(?:AL00X|AL00|TL10)'=>[
                    'name'=>'Honor 8 Lite',
                ],
                'DUK-L09'=>[
                    'name'=>'Honor 8 Pro',
                ],
                'VEN-L22'=>[
                    'name'=>'Honor 8 Smart',
                ],
                'STF-(?:AL10|L09)'=>[
                    'name'=>'Honor 9',
                ],
                'LLD-AL[23]0'=>[
                    'name'=>'Honor 9i',
                ],
                'LLD-(?:AL[01]0|L[23]1)'=>[
                    'name'=>'Honor 9 Lite',
                ],
                'COL-(?:AL[01]0|TL[01]0|L29)'=>[
                    'name'=>'Honor 10',
                ],
                'HRY-LX[12]'=>[
                    'name'=>'Honor 10 Lite',
                ],
                'CAM-UL00'=>[
                    'name'=>'Honor Holly 3',
                ],
                'TRT-AL00'=>[
                    'name'=>'Honor Holly 4 Plus',
                ],
                'TNY-AL00'=>[
                    'name'=>'Honor Magic 2',
                ],
                'COR-(?:AL[01]0|L29)'=>[
                    'name'=>'Honor Play',
                ],
                'EDI-AL10'=>[
                    'name'=>'Honor Note 8',
                ],
                'GRA-(?:L09|UL00)'=>[
                    'name'=>'P8',
                ],
                'ALE-L(?:02|21|23)'=>[
                    'name'=>'P8 Lite (2015)',
                ],
                'PRA-L(?:A1|X2|X1|X3)|hi6210sft'=>[
                    'name'=>'P8 Lite (2017)',
                ],
                'CAN-L[01][123]'=>[
                    'name'=>'Nova',
                ],
                'CAZ-(?:AL[01]0|TL[12]0)'=>[
                    'name'=>'Nova',
                ],
                'PIC-(?:[AT]L00|LX9)'=>[
                    'name'=>'Nova 2',
                ],
                'BAC-L01'=>[
                    'name'=>'Nova 2 Plus',
                ],
                'BAC-(?:AL00|L2[12])'=>[
                    'name'=>'Nova 2 Plus Dual SIM',
                ],
                'RNE-L[02]2'=>[
                    'name'=>'Nova 2I',
                ],
                'PAR-(?:AL00|LX[19])'=>[
                    'name'=>'Nova 3',
                ],
                'ANE-AL00'=>[
                    'name'=>'Nova 3e',
                ],
                'INE-(?:AL00|LX1r|LX[12]|TL00)'=>[
                    'name'=>'Nova 3i',
                ],
                'WAS-AL00'=>[
                    'name'=>'Nova Youth',
                ],
                'DIG-L01'=>[
                    'name'=>'Nova Smart',
                ],
                'RIO-L03'=>[
                    'name'=>'GX8',
                ],
                'EVA-L[012]9'=>[
                    'name'=>'P9',
                ],
                'VNS-L(?:[23]1|62)'=>[
                    'name'=>'P9 Lite',
                ],
                'SLA-L(?:02|03|22|23)'=>[
                    'name'=>'P9 Lite Mini',
                ],
                'DIG-L(?:03|23)'=>[
                    'name'=>'P9 Lite Smart',
                ],
                'VIE-(?:AL10|L[02]9)'=>[
                    'name'=>'P9 Plus',
                ],
                'VTR-(?:L[02]9|AL00|TL00)'=>[
                    'name'=>'P10',
                ],
                'WAS-(?:L(?:X1|X1A|X2|X2J|X3|03T)|TL10)'=>[
                    'name'=>'P10 Lite',
                ],
                'BAC-L[02]3'=>[
                    'name'=>'P10 Selfie',
                ],
                'VKY-(?:AL00|L09|L29)'=>[
                    'name'=>'P10 Plus',
                ],
                'EML-(?:AL00|L09|L29)'=>[
                    'name'=>'P20',
                ],
                'ANE-LX[123]'=>[
                    'name'=>'P20 Lite',
                ],
                'CLT-(?:AL0[01]|L(?:04|[02]9))'=>[
                    'name'=>'P20 Pro',
                ],
                'FIG-L(?:A1|X[123])'=>[
                    'name'=>'P smart',
                ],
                'POT-LX[13]'=>[
                    'name'=>'P smart (2019)',
                ],
                'CRO-(?:L[02]2|U00)'=>[
                    'name'=>'Y3 (2017)',
                ],
                'CAG-L[02]2'=>[
                    'name'=>'Y3 (2018)',
                ],
                'LUA-U22'=>[
                    'name'=>'Y3II',
                ],
                'CUN-L(?:0[123]|2[123]|33)'=>[
                    'name'=>'Y5II',
                ],
                'CUN-U29'=>[
                    'name'=>'Y5II',
                ],
                'MYA-(?:L(?:02|03|2[23])|U29)'=>[
                    'name'=>'Y5 (2017)',
                ],
                'CRO-L[02]3'=>[
                    'name'=>'Y5 Lite (2017)',
                ],
                'CAG-L[02]3'=>[
                    'name'=>'Y5 Lite (2018)',
                ],
                'DRA-LX2'=>[
                    'name'=>'Y5 Prime (2018)',
                ],
                'MYA-L13'=>[
                    'name'=>'Y5 Pro (2017)',
                ],
                'SCC-U21'=>[
                    'name'=>'Y6',
                ],
                'MYA-L11'=>[
                    'name'=>'Y6 (2016)',
                ],
                'MYA-L41'=>[
                    'name'=>'Y6 (2017)',
                ],
                'CAM-L(?:03|21|23|32)'=>[
                    'name'=>'Y6II',
                ],
                'ATU-L(?:11|21|22|X3)'=>[
                    'name'=>'Y6 (2018)',
                ],
                'TIT-AL00'=>[
                    'name'=>'Y6 Pro',
                ],
                'ATU-L31'=>[
                    'name'=>'Y6 Prime',
                ],
                'TRT-LX[123]'=>[
                    'name'=>'Y7 (2017)',
                ],
                'LDN-L(?:01|X3)'=>[
                    'name'=>'Y7 (2018)',
                ],
                'DUB-LX[13]'=>[
                    'name'=>'Y7 (2019)',
                ],
                'LDN-(?:AL00|L21)'=>[
                    'name'=>'Y7 Prime',
                ],
                '(?:LDN-LX2|TRT-(?:L21A|L53))'=>[
                    'name'=>'Y7 Prime (2018)',
                ],
                'DUB-LX2'=>[
                    'name'=>'Y7 Pro (2019)',
                ],
                'FLA-LX[123]'=>[
                    'name'=>'Y9 (2018)',
                ],
                'JKM-(?:AL00|LX[123])'=>[
                    'name'=>'Y9 (2019)',
                ],
                'Y625-U03'=>[
                    'name'=>'Y625',
                ],
                'Y635-L0[123]'=>[
                    'name'=>'Y635',
                ],
                'Y635-L21'=>[
                    'name'=>'Y635 Dual SIM',
                ],
                'NXT-(?:AL10|L29)'=>[
                    'name'=>'Mate 8',
                ],
                'MHA-(?:L[02]9|AL00)'=>[
                    'name'=>'Mate 9',
                ],
                'BLL-L23'=>[
                    'name'=>'Mate 9 Lite',
                ],
                'LON-L29'=>[
                    'name'=>'Mate 9 Pro',
                ],
                'ALP-(?:AL00|L[02]9)'=>[
                    'name'=>'Mate 10',
                ],
                'RNE-(?:AL00|L(?:01|03|21|23))'=>[
                    'name'=>'Mate 10 Lite',
                ],
                'BLA-(?:A09|L[02]9|AL00)'=>[
                    'name'=>'Mate 10 Pro',
                ],
                'HMA-(?:AL00|L[02]9)'=>[
                    'name'=>'Mate 20',
                ],
                'LYA-(?:AL00|L[02]9)'=>[
                    'name'=>'Mate 20 Pro',
                ],
                'SNE-LX[0-3]'=>[
                    'name'=>'Mate 20 Lite',
                ],
                'EVR-(?:AL00|L29)'=>[
                    'name'=>'Mate 20 X',
                ],
                'CRR-(?:L09|UL00)'=>[
                    'name'=>'Mate S',
                ],
                'NEO-AL00'=>[
                    'name'=>'Mate RS',
                ],
                'NEO-L29'=>[
                    'name'=>'Mate RS Porsche Design',
                ],
                'BND-L34'=>[
                    'name'=>'Mate SE',
                ],
                'Bucare Y330-U05'=>[
                    'name'=>'Y330-U05',
                ],
                'DRA-L(?:01|03|21|23|X3)'=>[
                    'name'=>'Y5 (2018)',
                ],
                'ATH-UL0[16]'=>[
                    'name'=>'ShotX',
                ],
                'T1-A21w'=>[
                    'name'=>'Honor Tablet Note',
                    'category'=>'tablet',
                ],
                'CMR-(?:AL[01]9|W09)'=>[
                    'name'=>'MediaPad M5 10.8',
                    'category'=>'tablet',
                ],
                'SHT-(?:AL|W)09'=>[
                    'name'=>'MediaPad M5 8.4',
                    'category'=>'tablet',
                ],
                'BTV-W09'=>[
                    'name'=>'MediaPad M3 8',
                    'category'=>'tablet',
                ],
                'BAH-W09|CPN-(?:L|W)09'=>[
                    'name'=>'MediaPad M3 Lite',
                    'category'=>'tablet',
                ],
                'BAH-L09'=>[
                    'name'=>'MediaPad M3 Lite 10',
                    'category'=>'tablet',
                ],
                'BTV-DL09'=>[
                    'name'=>'MediaPad M3',
                    'category'=>'tablet',
                ],
                'AGS2-(?:L|W)09'=>[
                    'name'=>'MediaPad T5 10',
                    'category'=>'tablet',
                ],
                'AGS-(?:L0[39]|W09)'=>[
                    'name'=>'MediaPad T3 10',
                    'category'=>'tablet',
                ],
                'KOB-(?:L|W)09'=>[
                    'name'=>'MediaPad T3 8',
                    'category'=>'tablet',
                ],
                'BG2-(?:U0[13]|W09)'=>[
                    'name'=>'MediaPad T3 7',
                    'category'=>'tablet',
                ],
                'BGO-L03'=>[
                    'name'=>'MediaPad T2 7.0',
                    'category'=>'tablet',
                ],
                'PLE-70[13]L'=>[
                    'name'=>'MediaPad T2 7.0 Pro',
                    'category'=>'tablet',
                ],
                'FDR-A01(?:L|w)'=>[
                    'name'=>'MediaPad T2 10.0 Pro',
                    'category'=>'tablet',
                ],
                'T1-A21L'=>[
                    'name'=>'MediaPad T1 10',
                    'category'=>'tablet',
                ],
                '(MediaPad[^/;]*) Build'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'Ideos([^;/]*) Build'=>[
                    'name'=>'Ideos$1',
                ],
                '(?:HUAWEI )?MT([0-9]+)'=>[
                    'name'=>'Ascend Mate $1',
                    'category'=>'phablet',
                ],
                'Huawei[ _\-]?([^/;]*) Build'=>[
                    'name'=>'$1',
                ],
                '(?:HW-)?Huawei(?:/1\.0/0?(?:Huawei))?[_\- /]?([a-z0-9\-_]+)'=>[
                    'name'=>'$1',
                ],
                'Huawei; ([a-z0-9 \-]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        //Xiaomi
        'Xiaomi(?!/MiuiBrowser)|(MI [a-z0-9]+|Mi-4c|MI-One[ _]?[a-z0-9]+|MIX 2S?)[);/ ]|HM ([^/;]+) (?:Build|MIUI)|(2014501|2014011|201481[138]|201302[23]|2013061) Build|Redmi|POCOPHONE|SKR-H0'   =>  [
            'name'=>'Xiaomi',
            'category'=>'smartphone',
            'sub'=>[
                // specific smartphone models
                'SKR-H0'=>[
                    'name'=>'Black Shark',
                ],
                'Xiaomi_2014501|2014501 Build'=>[
                    'name'=>'Hongmi 4G',
                ],
                'Xiaomi_2014011|2014011 Build'=>[
                    'name'=>'Hongmi 1S',
                ],
                'Xiaomi_201302[23]|201302[23] Build'=>[
                    'name'=>'Hongmi',
                ],
                'Xiaomi_201481[138]|201481[138] Build'=>[
                    'name'=>'Hongmi 2',
                ],
                'Xiaomi_2013061|2013061 Build'=>[
                    'name'=>'MI 3',
                ],
                'Mi-4c[);/ ]'=>[
                    'name'=>'MI 4C',
                ],
                'MIX 2S[);/ ]'=>[
                    'name'=>'MI MIX 2S',
                ],
                'MIX 2[);/ ]'=>[
                    'name'=>'MI MIX 2',
                ],
                'POCOPHONE F1'=>[
                    'name'=>'Pocophone F1',
                ],

                'Redmi Note ([^;/) ]+)?'=>[
                    'name'=>'Redmi Note $1',
                    'category'=>'phablet',
                ],
                'Redmi ([^;/) ]+)?'=>[
                    'name'=>'Redmi $1',
                ],
                'MI Note ([^;/) ]+)?'=>[
                    'name'=>'MI Note $1',
                    'category'=>'phablet',
                ],
                '(MI(?:-One)?[ _](?:[^;/]*))Build'=>[
                    'name'=>'$1',
                ],
                '(MI [a-z0-9]+|MI-One[ _]?[a-z0-9]+)[);/ ]'=>[
                    'name'=>'$1',
                ],
                'HM Note ([^/;]+) (?:Build|MIUI)'=>[
                    'name'=>'Note',
                    'category'=>'phablet',
                ],
                'HM ([^/;]+) (?:Build|MIUI)'=>[
                    'name'=>'HM $1',
                ],
                'Xiaomi[ _]([^/;]+)(?: Build|$)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // HTC
        'HTC|Sprint (?:APA|ATP)|ADR(?!910L)[a-z0-9]+|NexusHD2|Amaze[ _]4G[);/ ]|(Desire|Sensation|Evo ?3D|IncredibleS|Wildfire|Butterfly)[ _]?([^;/]+) Build|(Amaze[ _]4G|One ?[XELSV\+]+)[);/ ]|SPV E6[05]0|One M8|X525a|PG86100|PC36100|XV6975|PJ83100[);/ ]|2PYB2|0PJA10|0PJA2'   =>  [
            'name'=>'HTC',
            'category'=>'smartphone',
            'sub'=>[
                // explicit smartphone models
                'XV6975[);/ ]'=>[
                    'name'=>'Imagio',
                ],
                'PG86100[);/ ]'=>[
                    'name'=>'Evo 3G',
                ],
                'PC36100[);/ ]'=>[
                    'name'=>'Evo 4G',
                ],
                'PJ83100[);/ ]'=>[
                    'name'=>'One X',
                ],
                '(?:0PJA2|0PJA10)[);/ ]'=>[
                    'name'=>'One M9',
                ],
                'ADR6300'=>[
                    'name'=>'Droid Incredible',
                ],
                'ADR6400L'=>[
                    'name'=>'ThunderBolt',
                ],
                'ADR6410LRA'=>[
                    'name'=>'Droid Incredible 3',
                ],
                'SPV E600'=>[
                    'name'=>'Excalibur',
                ],
                'SPV E650'=>[
                    'name'=>'Vox',
                ],
                'X525a'=>[
                    'name'=>'One X+',
                ],
                '2PYB2'=>[
                    'name'=>'Bolt',
                ],

                'NexusHD2'=>[
                    'name'=>'HD2',
                ],
                'HTC[ _\-]P715a'=>[
                    'name'=>'P715a',
                    'category'=>'tablet',
                ],
                'HTC[ _\-]Flyer Build'=>[
                    'name'=>'Flyer',
                    'category'=>'tablet',
                ],
                'HTC[ _\-]Flyer[ _\-]([\w]{1,5})'=>[
                    'name'=>'Flyer $1',
                    'category'=>'tablet',
                ],
                'HTC[ _\-]One[ _\-]max[);/ ]'=>[
                    'name'=>'One max',
                    'category'=>'phablet',
                ],
                'HTC[ _]([^/;]+) [0-9]+(?:\.[0-9]+)+ Build'=>[
                    'name'=>'$1',
                ],
                'HTC[ _]([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                'HTC[ _]([a-z0-9]+[ _\-]?(?:[a-z0-9_+\-])*)'=>[
                    'name'=>'$1',
                ],
                'USCCHTC(\d+)'=>[
                    'name'=>'$1',
                ],
                'Sprint (ATP.*) Build'=>[
                    'name'=>'$1 (Sprint)',
                    'category'=>'tablet',
                ],
                'Sprint (APA.*) Build'=>[
                    'name'=>'$1 (Sprint)',
                ],
                'HTC(?:[\-/ ])?([a-z0-9\-_]+)'=>[
                    'name'=>'$1',
                ],
                'HTC;(?: )?([a-z0-9 ]+)'=>[
                    'name'=>'$1',
                ],
                '(Desire|Sensation|Evo ?3D|IncredibleS|Wildfire|Butterfly)[ _]?([^;/]+) Build'=>[
                    'name'=>'$1 $2',
                ],
                '(Amaze[ _]4G|One ?[XELSV\+]*) Build'=>[
                    'name'=>'$1',
                ],
                '(ADR[^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                '(ADR[a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                '(One M8)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Meizu
        'Meizu|MZ-[a-z]|(M04[05]|M35[1356]|M6T|MX[ -]?[2345](?: Pro)?|(?:MZ-)?m[1-6] note|M57[18]C|M3[ESX]|M031|m1 metal|M1 E|M2|M2 E|M5s Build|PRO 6|PRO 7-H)[);/ ]'   =>  [
            'name'=>'Meizu',
            'category'=>'smartphone',
            'sub'=>[
                '(?:MZ-)?M571C'=>[
                    'name'=>'M2 Note',
                    'category'=>'phablet',
                ],
                '(?:MZ-)?m([1-6]) note[);/ ]'=>[
                    'name'=>'M$1 Note',
                    'category'=>'phablet',
                ],
                'M1 E[);/ ]'=>[
                    'name'=>'M1E',
                ],
                'M2 E[);/ ]'=>[
                    'name'=>'M2E',
                ],
                '(?:MZ-)?M578C|M2[);/ ]'=>[
                    'name'=>'M2',
                ],
                'M6T'=>[
                    'name'=>'M6T',
                ],
                'M3E'=>[
                    'name'=>'M3E',
                ],
                'M3S'=>[
                    'name'=>'M3S',
                ],
                'M3X'=>[
                    'name'=>'M3X',
                ],
                'M5S'=>[
                    'name'=>'M5S',
                ],
                '(M04[05]|MX[ -]?2)[);/ ]'=>[
                    'name'=>'MX2',
                ],
                '(M35[1356]|MX[ -]?3)[);/ ]'=>[
                    'name'=>'MX3',
                ],
                'MX[ -]?4 Pro[);/ ]'=>[
                    'name'=>'MX4 Pro',
                ],
                'MX[ -]?4[);/ ]'=>[
                    'name'=>'MX4',
                ],
                'MX[ -]?5[);/ ]'=>[
                    'name'=>'MX5',
                ],
                'm1 metal'=>[
                    'name'=>'M1 Metal',
                ],
                'PRO 6'=>[
                    'name'=>'PRO 6',
                ],
                'PRO 7-H'=>[
                    'name'=>'PRO 7',
                ],
                'M031'=>[
                    'name'=>'MX Dual Core',
                ],
                '(?:MZ-)?Meizu[_ ]([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                '(?:MZ-)?Meizu[_ ]([a-z0-9_]+)'=>[
                    'name'=>'$1',
                ],
                'MZ-([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Vivo
        '(?:VIV-|BBG-)?vivo'   =>  [
            'name'=>'Vivo',
            'category'=>'smartphone',
            'sub'=>[
                '(?:VIV-|BBG-)?vivo[ _]1601 Build'=>[
                    'name'=>'V5',
                ],
                '(?:VIV-|BBG-)?vivo[ _]([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                '(?:VIV-|BBG-)?vivo[ _]([^);/]+)[);/]+'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // öwn
        'OWN'   =>  [
            'name'=>'öwn',
            'category'=>'smartphone',
            'sub'=>[
                'FUN ([67])'=>[
                    'name'=>'Fun $1',
                ],
                'FUN 5\(4G\)'=>[
                    'name'=>'Fun 5 4G',
                ],
                'OWN[ _](S3000D|S3010|S3020D|S4010|S4025)'=>[
                    'name'=>'$1',
                ],
                'One Plus'=>[
                    'name'=>'One Plus',
                ],
                'One'=>[
                    'name'=>'One',
                ],
                'SMART 9'=>[
                    'name'=>'Smart 9',
                ],
            ]
        ],

        // Apple
        '(?:iTunes-)?Apple[ _]?TV|(?:Apple-|iTunes-)?(?:iPad|iPhone)|iPh[0-9],[0-9]|CFNetwork'  =>  [
            'name'=>'Apple',
            'category'=>'smartphone',
            'sub'=>[
                // specific smartphone devices
                '(?:Apple-)?iPh(?:one)?1[C,]1'=>[
                    'name'=>'iPhone',
                    'category'=>'smartphone',
                ],
                '(?:Apple-)?iPh(?:one)?1[C,]2'=>[
                    'name'=>'iPhone 3G',
                    'category'=>'smartphone',
                ],
                '(?:Apple-)?iPh(?:one)?2[C,]1'=>[
                    'name'=>'iPhone 3GS',
                    'category'=>'smartphone',
                ],
                '(?:Apple-)?iPh(?:one)?3[C,][123]'=>[
                    'name'=>'iPhone 4',
                    'category'=>'smartphone',
                ],
                '(?:Apple-)?iPh(?:one)?4[C,]1'=>[
                    'name'=>'iPhone 4S',
                    'category'=>'smartphone',
                ],
                '(?:Apple-)?iPh(?:one)?5[C,][12]'=>[
                    'name'=>'iPhone 5',
                    'category'=>'smartphone',
                ],
                '(?:Apple-)?iPh(?:one)?5[C,][34]'=>[
                    'name'=>'iPhone 5C',
                    'category'=>'smartphone',
                ],
                '(?:Apple-)?iPh(?:one)?6[C,][12]'=>[
                    'name'=>'iPhone 5S',
                    'category'=>'smartphone',
                ],
                '(?:Apple-)?iPh(?:one)?7[C,]1'=>[
                    'name'=>'iPhone 6 Plus',
                    'category'=>'phablet',
                ],
                '(?:Apple-)?iPh(?:one)?7[C,]2'=>[
                    'name'=>'iPhone 6',
                    'category'=>'smartphone',
                ],
                '(?:Apple-)?iPh(?:one)?8[C,]1'=>[
                    'name'=>'iPhone 6s',
                    'category'=>'smartphone',
                ],
                '(?:Apple-)?iPh(?:one)?8[C,]2'=>[
                    'name'=>'iPhone 6s Plus',
                    'category'=>'phablet',
                ],
                '(?:Apple-)?iPh(?:one)?8[C,]4'=>[
                    'name'=>'iPhone SE',
                    'category'=>'smartphone',
                ],
                '(?:Apple-)?iPh(?:one)?9[C,][13]'=>[
                    'name'=>'iPhone 7',
                    'category'=>'smartphone',
                ],
                '(?:Apple-)?iPh(?:one)?9[C,][24]'=>[
                    'name'=>'iPhone 7 Plus',
                    'category'=>'phablet',
                ],
                '(?:Apple-)?iPh(?:one)?10[C,][14]'=>[
                    'name'=>'iPhone 8',
                    'category'=>'smartphone',
                ],
                '(?:Apple-)?iPh(?:one)?10[C,][25]'=>[
                    'name'=>'iPhone 8 Plus',
                    'category'=>'phablet',
                ],
                '(?:Apple-)?iPh(?:one)?10[C,][36]'=>[
                    'name'=>'iPhone X',
                    'category'=>'phablet',
                ],

                // specific tablet devices
                '(?:Apple-)?iPad1[C,]1'=>[
                    'name'=>'iPad',
                    'category'=>'tablet',
                ],
                '(?:Apple-)?iPad2[C,][1234]'=>[
                    'name'=>'iPad 2',
                    'category'=>'tablet',
                ],
                '(?:Apple-)?iPad2[C,][567]'=>[
                    'name'=>'iPad Mini',
                    'category'=>'tablet',
                ],
                '(?:Apple-)?iPad3[C,][123]'=>[
                    'name'=>'iPad 3',
                    'category'=>'tablet',
                ],
                '(?:Apple-)?iPad3[C,][456]'=>[
                    'name'=>'iPad 4',
                    'category'=>'tablet',
                ],
                '(?:Apple-)?iPad4[C,][123]'=>[
                    'name'=>'iPad Air',
                    'category'=>'tablet',
                ],
                '(?:Apple-)?iPad4[C,][456]'=>[
                    'name'=>'iPad Mini 2',
                    'category'=>'tablet',
                ],
                '(?:Apple-)?iPad4[C,][789]'=>[
                    'name'=>'iPad Mini 3',
                    'category'=>'tablet',
                ],
                '(?:Apple-)?iPad5[C,][12]'=>[
                    'name'=>'iPad Mini 4',
                    'category'=>'tablet',
                ],
                '(?:Apple-)?iPad5[C,][34]'=>[
                    'name'=>'iPad Air 2',
                    'category'=>'tablet',
                ],
                '(?:Apple-)?iPad6[C,][34]'=>[
                    'name'=>'iPad Pro 9.7',
                    'category'=>'tablet',
                ],
                '(?:Apple-)?iPad6[C,][78]'=>[
                    'name'=>'iPad Pro 12.9',
                    'category'=>'tablet',
                ],
                '(?:Apple-)?iPad6[C,](?:11|12)'=>[
                    'name'=>'iPad 5',
                    'category'=>'tablet',
                ],
                '(?:Apple-)?iPad7[C,][12]'=>[
                    'name'=>'iPad Pro 2 12.9',
                    'category'=>'tablet',
                ],
                '(?:Apple-)?iPad7[C,][34]'=>[
                    'name'=>'iPad Pro 10.5',
                    'category'=>'tablet',
                ],
                '(?:Apple-)?iPad7[C,][56]'=>[
                    'name'=>'iPad 6',
                    'category'=>'tablet',
                ],

                '(?:iTunes-)?Apple[ _]?TV'=>[
                    'name'=>'Apple TV',
                    'category'=>'tv',
                ],
                'iTunes-iPad/[0-9]+(?:\.[0-9]+)* \(([^;]+);'=>[
                    'name'=>'iPad $1',
                    'category'=>'tablet',
                ],
                '(?:Apple-)?iPad'=>[
                    'name'=>'iPad',
                    'category'=>'tablet',
                ],
                'iTunes-iPhone/[0-9]+(?:\.[0-9]+)* \(([^;]+);'=>[
                    'name'=>'iPhone $1',
                    'category'=>'smartphone',
                ],
                '(?:Apple-)?iPhone ?(3GS?|4S?|5[CS]?|6(:? Plus)?)?'=>[
                    'name'=>'iPhone $1',
                    'category'=>'smartphone',
                ],
            ]
        ],

        // Samsung
        'SAMSUNG(?! ?Browser)|Maple |SC-(?:02[CH]|04E|01F)|N[57]100|N5110|N9100|S(?:CH|GH|PH|EC|AM|HV|HW|M)-|SMART-TV|GT-|Galaxy|(?:portalmmm|o2imode)/2\.0 [SZ]|sam[rua]|vollo Vi86[);/ ]|(?:OTV-)?SMT-E5015|ISW11SC|SCV3[1-9]|404SC'   =>  [
            'name'=>'Samsung',
            'category'=>'smartphone',
            'sub'=>[
                // explicit tv models
                'GT-B9150'=>[
                    'name'=>'Home Sync',
                    'category'=>'tv',
                ],
                '(?:OTV-)?SMT-E5015'=>[
                    'name'=>'SMT-E5015',
                    'category'=>'tv',
                ],
                'Maple '=>[
                    'name'=>'',
                    'category'=>'tv',
                ],
                 // explicit tablet models
                '(?:SAMSUNG-)?(?:GT-)?N5100'=>[
                    'name'=>'GALAXY Note 8.0"',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?(?:GT-)?N5110'=>[
                    'name'=>'GALAXY Note 8.0" WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?GT-N5120'=>[
                    'name'=>'GALAXY Note 8.0" LTE',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?GT-N8000'=>[
                    'name'=>'GALAXY Note 10.1"',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?GT-N8010'=>[
                    'name'=>'GALAXY Note 10.1" WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?GT-N8020'=>[
                    'name'=>'GALAXY Note 10.1" LTE',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?GT-P1000M?|SCH-I800'=>[
                    'name'=>'GALAXY Tab',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?GT-P3100B?'=>[
                    'name'=>'GALAXY Tab 2 7"',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?GT-P311[03]'=>[
                    'name'=>'GALAXY Tab 2 7" WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?GT-P5100|SCH-I915'=>[
                    'name'=>'GALAXY Tab 2 10.1"',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?GT-P511[03]'=>[
                    'name'=>'GALAXY Tab 2 10.1" WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?GT-P5200'=>[
                    'name'=>'GALAXY Tab 3 10.1"',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?GT-P5210'=>[
                    'name'=>'GALAXY Tab 3 10.1" WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?GT-P5220'=>[
                    'name'=>'GALAXY Tab 3 10.1" LTE',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?GT-P6200'=>[
                    'name'=>'GALAXY Tab 7" Plus',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?GT-P6201'=>[
                    'name'=>'GALAXY Tab 7" Plus N',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?GT-P6810'=>[
                    'name'=>'GALAXY Tab 7.7"',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?GT-P7100'=>[
                    'name'=>'GALAXY Tab 10.1v',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?GT-P7500'=>[
                    'name'=>'GALAXY Tab 10.1" P7500',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-P600'=>[
                    'name'=>'GALAXY Note 10.1" 2014 Edition WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-P60[12]'=>[
                    'name'=>'GALAXY Note 10.1" 2014 Edition',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-(?:P605|P607T)'=>[
                    'name'=>'GALAXY Note 10.1" 2014 Edition LTE',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-P900'=>[
                    'name'=>'GALAXY NotePRO 12.2" WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-P901'=>[
                    'name'=>'GALAXY NotePRO 12.2"',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-P905'=>[
                    'name'=>'GALAXY NotePRO 12.2" LTE',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T110'=>[
                    'name'=>'GALAXY Tab 3 7.0" Lite WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T111'=>[
                    'name'=>'GALAXY Tab 3 7.0" Lite',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T116(?:BU|NU|NY)?'=>[
                    'name'=>'GALAXY Tab 3 V',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T2105'=>[
                    'name'=>'GALAXY Tab 3 7.0" Kids',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T210R?'=>[
                    'name'=>'GALAXY Tab 3 7.0" WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T21(?:1|7[AS])'=>[
                    'name'=>'GALAXY Tab 3 7.0"',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T230(?:NU)?'=>[
                    'name'=>'GALAXY Tab 4 7.0" WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T231'=>[
                    'name'=>'GALAXY Tab 4 7.0" 3G',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T310'=>[
                    'name'=>'GALAXY Tab 3 8.0" WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T311'=>[
                    'name'=>'GALAXY Tab 3 8.0"',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T315'=>[
                    'name'=>'GALAXY Tab 3 8.0" LTE',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T330'=>[
                    'name'=>'GALAXY Tab 4 8.0" WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T335'=>[
                    'name'=>'GALAXY Tab 4 8.0" LTE',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T520'=>[
                    'name'=>'GALAXY TabPRO 10.1" WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T535'=>[
                    'name'=>'GALAXY Tab 4 10.1" LTE',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T320'=>[
                    'name'=>'GALAXY TabPRO 8.4" WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T325'=>[
                    'name'=>'GALAXY TabPRO 8.4" LTE',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T525'=>[
                    'name'=>'GALAXY TabPRO 10.1" LTE',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T530(?:NU)?'=>[
                    'name'=>'GALAXY Tab 4 10.1" WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T700'=>[
                    'name'=>'GALAXY Tab S 8.4" WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T705'=>[
                    'name'=>'GALAXY Tab S 8.4" LTE',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T800'=>[
                    'name'=>'GALAXY Tab S 10.5" WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T805'=>[
                    'name'=>'GALAXY Tab S 10.5" LTE',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T813'=>[
                    'name'=>'GALAXY Tab S2 9.7" WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T815'=>[
                    'name'=>'GALAXY Tab S2 9.7" LTE',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T820'=>[
                    'name'=>'GALAXY Tab S3 9.7" WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T825'=>[
                    'name'=>'GALAXY Tab S3 9.7" LTE',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T900'=>[
                    'name'=>'GALAXY TabPRO 12.2" WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T280'=>[
                    'name'=>'GALAXY Tab A 7.0" WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T285'=>[
                    'name'=>'GALAXY Tab A 7.0" LTE',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T350'=>[
                    'name'=>'GALAXY Tab A 8.0" WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-(?:P350|T3[58]5(?:Y)?)'=>[
                    'name'=>'GALAXY Tab A 8.0" LTE',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-(?:P355([MY])?|T550)'=>[
                    'name'=>'GALAXY Tab A 9.7" WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-(?:P550|P555(M)?|T555)'=>[
                    'name'=>'GALAXY Tab A 9.7" LTE',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-(?:T58[05]|P58[05])'=>[
                    'name'=>'GALAXY Tab A 10.1" WiFi (2016)',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T597'=>[
                    'name'=>'GALAXY Tab A 10.5" LTE (2018)',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T37[57]'=>[
                    'name'=>'GALAXY Tab E 8.0"',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T560'=>[
                    'name'=>'GALAXY Tab E 9.6" WiFi',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T561'=>[
                    'name'=>'GALAXY Tab E 9.6" 3G',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T365'=>[
                    'name'=>'GALAXY Tab Active',
                    'category'=>'tablet',
                ],
                '(?:SAMSUNG-)?SM-T39[57]'=>[
                    'name'=>'GALAXY Tab Active 2',
                    'category'=>'tablet',
                ],

                // explicit smartphone models
                '(?:SAMSUNG-)?SM-G850[AMSWY]'=>[
                    'name'=>'GALAXY Alpha',
                ],
                '(?:SAMSUNG-)?GT-B5330'=>[
                    'name'=>'GALAXY Chat',
                ],
                '(?:SAMSUNG-)?SM-A605K'=>[
                    'name'=>'GALAXY Jean',
                ],
                '(?:SAMSUNG-)?GT-B5510'=>[
                    'name'=>'GALAXY Y Pro',
                ],
                '(?:SAMSUNG-)?GT-B5512'=>[
                    'name'=>'GALAXY Y Pro Duos',
                ],
                '(?:SAMSUNG-)?GT-B7510'=>[
                    'name'=>'GALAXY Pro',
                ],
                '(?:SAMSUNG-)?GT-I5700'=>[
                    'name'=>'GALAXY Spica',
                ],
                '(?:SAMSUNG-)?GT-I5801'=>[
                    'name'=>'GALAXY Apollo',
                ],
                '(?:SAMSUNG-)?GT-I5800'=>[
                    'name'=>'GALAXY 3',
                ],
                '(?:SAMSUNG-)?GT-I8000'=>[
                    'name'=>'Omnia II',
                ],
                '(?:SAMSUNG-)?GT-I8150'=>[
                    'name'=>'GALAXY W',
                ],
                '(?:SAMSUNG-)?GT-S5830'=>[
                    'name'=>'GALAXY Ace',
                ],
                '(?:SAMSUNG-)?GT-I8160'=>[
                    'name'=>'GALAXY Ace 2',
                ],
                '(?:SAMSUNG-)?SM-G313(?:HY|M[LUY]|[FM])'=>[
                    'name'=>'GALAXY Ace 4',
                ],
                '(?:SAMSUNG-)?SM-G313[HU]'=>[
                    'name'=>'GALAXY Ace 4 Lite',
                ],
                '(?:SAMSUNG-)?GT-I8190'=>[
                    'name'=>'GALAXY S III mini',
                ],
                '(?:SAMSUNG-)?GT-I8200'=>[
                    'name'=>'GALAXY S III mini Value Edition',
                ],
                '(?:SAMSUNG-)?GT-I826[02]'=>[
                    'name'=>'GALAXY Core',
                ],
                '(?:SAMSUNG-)?GT-I8320'=>[
                    'name'=>'H1',
                ],
                '(?:SAMSUNG-)?GT-I85[23]0'=>[
                    'name'=>'GALAXY Beam',
                ],
                '(?:SAMSUNG-)?SM-G600S'=>[
                    'name'=>'GALAXY Wide',
                ],
                '(?:SAMSUNG-)?GT-I855[028]'=>[
                    'name'=>'GALAXY Win',
                ],
                '(?:SAMSUNG-)?GT-I8580'=>[
                    'name'=>'GALAXY Core Advance',
                ],
                '(?:SAMSUNG-)?GT-I8730'=>[
                    'name'=>'GALAXY Express',
                ],
                '(?:SAMSUNG-)?SM-E500(?:F|H|HQ|M)'=>[
                    'name'=>'GALAXY E5',
                ],
                '(?:SAMSUNG-)?SM-E700(?:0|9|F|H|M)'=>[
                    'name'=>'GALAXY E7',
                ],
                '(?:SAMSUNG-)?GT-I90(?:00|08|18|88)'=>[
                    'name'=>'GALAXY S',
                ],
                '(?:SAMSUNG-)?GT-I9001'=>[
                    'name'=>'GALAXY S Plus',
                ],
                '(?:SAMSUNG-)?GT-I9003'=>[
                    'name'=>'GALAXY SL',
                ],
                '(?:SAMSUNG-)?GT-I9010'=>[
                    'name'=>'GALAXY S Giorgio Armani',
                ],
                '(?:SAMSUNG-)?GT-I9070'=>[
                    'name'=>'GALAXY S Advance',
                ],
                '(?:SAMSUNG-)?GT-I910[08]'=>[
                    'name'=>'GALAXY S II',
                ],
                '(?:SAMSUNG-)?ISW11SC'=>[
                    'name'=>'GALAXY S II WiMAX',
                ],
                '(?:SAMSUNG-)?GT-I9103'=>[
                    'name'=>'GALAXY R',
                ],
                '(?:SAMSUNG-)?GT-I9105'=>[
                    'name'=>'GALAXY S II Plus',
                ],
                '(?:SAMSUNG-)?SM-G730(?:W8|[AV])'=>[
                    'name'=>'GALAXY S3 mini',
                ],
                '(?:SAMSUNG-)?(?:GT-I919[05]|SCH-I435)'=>[
                    'name'=>'GALAXY S4 mini',
                ],
                '(?:SAMSUNG-)?GT-I9515'=>[
                    'name'=>'GALAXY S4 Value Edition',
                ],
                '(?:SAMSUNG-)?GT-I9295'=>[
                    'name'=>'GALAXY S4 ACTIVE',
                ],
                '(?:SAMSUNG-)?(?:GT-I9300|SCH-I535|SCH-L710)'=>[
                    'name'=>'GALAXY S III',
                ],
                '(?:SAMSUNG-)?(?:GT-I9305|SCH-R530)'=>[
                    'name'=>'GALAXY S III LTE',
                ],
                '(?:SAMSUNG-)?(?:GT-I9500|GT-I9502|GT-I9505|SCH-I545|SCH-I959|SCH-R970|GALAXY-S4|SGH-M919N?)'=>[
                    'name'=>'GALAXY S4',
                ],
                '(?:SAMSUNG-)?GT-I9506'=>[
                    'name'=>'GALAXY S4 with LTE+',
                ],
                '(?:SAMSUNG-)?GT-S5280'=>[
                    'name'=>'GALAXY STAR',
                ],
                '(?:SAMSUNG-)?GT-S5301'=>[
                    'name'=>'GALAXY POCKET Plus',
                ],
                '(?:SAMSUNG-)?GT-S5310'=>[
                    'name'=>'GALAXY POCKET Neo',
                ],
                '(?:SAMSUNG-)?SM-G110[BHM]'=>[
                    'name'=>'GALAXY POCKET 2',
                ],
                '(?:SAMSUNG-)?GT-S5360'=>[
                    'name'=>'GALAXY Y Hello Kitty',
                ],
                '(?:SAMSUNG-)?GT-S6310'=>[
                    'name'=>'GALAXY Young',
                ],
                '(?:SAMSUNG-)?GT-S6312'=>[
                    'name'=>'GALAXY Young DUOS',
                ],
                '(?:SAMSUNG-)?SM-G130(?:BT|HN|[EHMU])'=>[
                    'name'=>'GALAXY Young 2',
                ],
                '(?:SAMSUNG-)?SM-G130BU'=>[
                    'name'=>'GALAXY Young 2 Pro',
                ],
                '(?:SAMSUNG-)?GT-S6790'=>[
                    'name'=>'GALAXY FAME Lite with NFC',
                ],
                '(?:SAMSUNG-)?GT-S6810'=>[
                    'name'=>'GALAXY FAME',
                ],
                '(?:SAMSUNG-)?GT-S7275'=>[
                    'name'=>'GALAXY ACE 3',
                ],
                '(?:SAMSUNG-)?GT-S7390'=>[
                    'name'=>'GALAXY Trend Lite',
                ],
                '(?:SAMSUNG-)?GT-S7500'=>[
                    'name'=>'GALAXY ACE Plus',
                ],
                '(?:SAMSUNG-)?(?:GT-S7560|SCH-I699)'=>[
                    'name'=>'GALAXY Trend',
                ],
                '(?:SAMSUNG-)?(?:GT-S7562|SCH-I919)'=>[
                    'name'=>'GALAXY S DUOS',
                ],
                '(?:SAMSUNG-)?GT-S7582'=>[
                    'name'=>'GALAXY S DUOS 2',
                ],
                '(?:SAMSUNG-)?SM-(?:G31[36]HU|G313HZ)'=>[
                    'name'=>'GALAXY S DUOS 3',
                ],
                '(?:SAMSUNG-)?GT-S7580'=>[
                    'name'=>'GALAXY Trend Plus',
                ],
                '(?:SAMSUNG-)?GT-S7710'=>[
                    'name'=>'GALAXY Xcover 2',
                ],
                '(?:SAMSUNG-)?GT-S8500'=>[
                    'name'=>'Wave',
                ],
                '(?:SAMSUNG-)?GT-S8530'=>[
                    'name'=>'Wave II',
                ],
                '(?:SAMSUNG-)?GT-S8600'=>[
                    'name'=>'Wave 3',
                ],
                '(?:SAMSUNG-)?GT-S5380'=>[
                    'name'=>'Wave Y',
                ],
                '(?:SAMSUNG-)?GT-S7250'=>[
                    'name'=>'Wave M',
                ],
                '(?:SAMSUNG-)?GT-S5250'=>[
                    'name'=>'Wave 525',
                ],
                '(?:SAMSUNG-)?GT-S5330'=>[
                    'name'=>'Wave 533',
                ],
                '(?:SAMSUNG-)?GT-S5780'=>[
                    'name'=>'Wave 578',
                ],
                '(?:SAMSUNG-)?GT-S7230'=>[
                    'name'=>'Wave 723',
                ],
                '(?:SAMSUNG-)?SM-(?:C101|C105([AL])?)'=>[
                    'name'=>'GALAXY S4 zoom',
                ],
                '(?:SAMSUNG-)?SM-(?:C111(M)?|C115)'=>[
                    'name'=>'GALAXY K zoom',
                ],
                '(?:SAMSUNG-)?SM-G350'=>[
                    'name'=>'GALAXY CORE Plus',
                ],
                '(?:SAMSUNG-)?SM-G360[FH]?'=>[
                    'name'=>'GALAXY CORE Prime',
                ],
                '(?:SAMSUNG-)?SM-G361[FH]?'=>[
                    'name'=>'GALAXY CORE Prime Value Edition',
                ],
                '(?:SAMSUNG-)?SM-G386F'=>[
                    'name'=>'GALAXY CORE LTE',
                ],
                '(?:SAMSUNG-)?SM-G3815'=>[
                    'name'=>'GALAXY EXPRESS II',
                ],
                '(?:SAMSUNG-)?SM-G388F'=>[
                    'name'=>'GALAXY Xcover 3',
                ],
                '(?:SAMSUNG-)?SM-G390F'=>[
                    'name'=>'GALAXY Xcover 4',
                ],
                '(?:SAMSUNG-)?SM-G800'=>[
                    'name'=>'GALAXY S5 mini',
                ],
                '(?:SAMSUNG-)?SM-G9009D'=>[
                    'name'=>'GALAXY S5 Dual-SIM',
                ],
                '(?:SAMSUNG-)?SM-(?:G900|G906[KLS])|GALAXY-S5'=>[
                    'name'=>'GALAXY S5',
                ],
                '(?:SAMSUNG-)?SM-G901F'=>[
                    'name'=>'GALAXY S5 LTE+',
                ],
                '(?:SAMSUNG-)?SM-G870[AFW]'=>[
                    'name'=>'GALAXY S5 Active',
                ],
                '(?:SAMSUNG-)?SM-G903[FMW]'=>[
                    'name'=>'GALAXY S5 Neo',
                ],
                '(?:SAMSUNG-)?SM-G860P'=>[
                    'name'=>'GALAXY S5 K Sport',
                ],
                '(?:SAMSUNG-)?SM-G920(?:F[DQ]|W8|[089AFIKLPRSTVX])'=>[
                    'name'=>'GALAXY S6',
                ],
                '(?:SAMSUNG-)?SM-G890A'=>[
                    'name'=>'GALAXY S5 Active',
                ],
                '404SC'=>[
                    'name'=>'GALAXY S6 edge (Softbank)',
                ],
                '(?:SAMSUNG-)?SM-G925[0ADFIKLPRSTVW]|SCV31'=>[
                    'name'=>'GALAXY S6 edge',
                ],
                '(?:SAMSUNG-)?SM-G928(?:7C|R4|W8|[07ACFGIKLPSTV])'=>[
                    'name'=>'GALAXY S6 edge+',
                ],
                '(?:SAMSUNG-)?SM-G930(?:FD|W8|[0AFKLPRSTUV])'=>[
                    'name'=>'GALAXY S7',
                ],
                '(?:SAMSUNG-)?SM-G935(?:R4|W8|[0AFKLPSTUVX])|SC-02H|SCV33'=>[
                    'name'=>'GALAXY S7 edge',
                ],
                '(?:SAMSUNG-)?SM-G891A'=>[
                    'name'=>'GALAXY S7 active',
                ],
                '(?:SAMSUNG-)?SM-G950[08FNUW]?|SCV36'=>[
                    'name'=>'GALAXY S8',
                ],
                '(?:SAMSUNG-)?SM-G892[AU]'=>[
                    'name'=>'GALAXY S8 Active',
                ],
                '(?:SAMSUNG-)?SM-G955[AFKLNPRTUVW0]|SCV35'=>[
                    'name'=>'GALAXY S8+',
                ],
                '(?:SAMSUNG-)?SM-G960[FNUWX0]|SCV38'=>[
                    'name'=>'GALAXY S9',
                ],
                '(?:SAMSUNG-)?SM-G965[FNUWX0]|SCV39'=>[
                    'name'=>'GALAXY S9+',
                ],
                '(?:SAMSUNG-)?SCH-I200'=>[
                    'name'=>'GALAXY Stellar',
                ],
                '(?:SAMSUNG-)?SCH-I829'=>[
                    'name'=>'GALAXY Style Duos',
                ],
                '(?:SAMSUNG-)?(?:SGH-S730|SCH-R740)'=>[
                    'name'=>'GALAXY Discover',
                ],
                '(?:SAMSUNG-)?SCH-S738'=>[
                    'name'=>'GALAXY Centura',
                ],
                'vollo Vi86[);/ ]'=>[
                    'name'=>'Vollo Vi86',
                ],
                '(?:SAMSUNG-)?SM-A300(?:FU|YZ|[0FGHMY])'=>[
                    'name'=>'GALAXY A3 (2015)',
                ],
                '(?:SAMSUNG-)?SM-A310(?:N0|[FMY])'=>[
                    'name'=>'GALAXY A3 (2016)',
                ],
                '(?:SAMSUNG-)?SM-A320(?:FL|F|Y)'=>[
                    'name'=>'GALAXY A3 (2017)',
                ],
                '(?:SAMSUNG-)?SM-A500[LSWY]'=>[
                    'name'=>'GALAXY A5',
                ],
                '(?:SAMSUNG-)?SM-A500[FGHKM0]'=>[
                    'name'=>'GALAXY A5 Duos',
                ],
                '(?:SAMSUNG-)?SM-A500FU'=>[
                    'name'=>'GALAXY A5 (2015)',
                ],
                '(?:SAMSUNG-)?SM-A510[0FKLMSY]'=>[
                    'name'=>'GALAXY A5 (2016)',
                ],
                '(?:SAMSUNG-)?SM-A520[FKLSW]'=>[
                    'name'=>'GALAXY A5 (2017)',
                ],
                '(?:SAMSUNG-)?SM-A600(?:AZ|FN|GN|T1|[AFGNPT])'=>[
                    'name'=>'GALAXY A6',
                ],
                '(?:SAMSUNG-)?SM-A605(?:[FG]N|[FG])'=>[
                    'name'=>'GALAXY A6+',
                ],
                '(?:SAMSUNG-)?SM-A700(?:YD|[0FHKLS])'=>[
                    'name'=>'GALAXY A7',
                ],
                '(?:SAMSUNG-)?SM-A710[08FKLMSY]'=>[
                    'name'=>'GALAXY A7 (2016)',
                ],
                '(?:SAMSUNG-)?SM-A720[FS]'=>[
                    'name'=>'GALAXY A7 (2017)',
                ],
                '(?:SAMSUNG-)?SM-A750(?:GN|[FG])'=>[
                    'name'=>'GALAXY A7 (2018)',
                ],
                '(?:SAMSUNG-)?SM-A(?:530F|800[0FISY])|SCV32'=>[
                    'name'=>'GALAXY A8',
                ],
                '(?:SAMSUNG-)?SM-G885[FSY]'=>[
                    'name'=>'GALAXY A8 Star',
                ],
                '(?:SAMSUNG-)?SM-A810(?:YZ|[FS])'=>[
                    'name'=>'GALAXY A8 (2016)',
                ],
                '(?:SAMSUNG-)?SM-A530[NW]'=>[
                    'name'=>'GALAXY A8 (2018)',
                ],
                '(?:SAMSUNG-)?SM-A730F'=>[
                    'name'=>'GALAXY A8+ (2018)',
                ],
                '(?:SAMSUNG-)?SM-A9000'=>[
                    'name'=>'GALAXY A9',
                ],
                'SM-A9\[7\]'=>[
                    'name'=>'GALAXY A9 7',
                ],
                '(?:SAMSUNG-)?SM-A920F'=>[
                    'name'=>'GALAXY A9 (2018)',
                ],
                '(?:SAMSUNG-)?SM-A910[0F]'=>[
                    'name'=>'GALAXY A9 Pro',
                ],
                '(?:SAMSUNG-)?GT-I9301I'=>[
                    'name'=>'GALAXY S III Neo',
                ],
                '(?:SAMSUNG-)?SM-J100(?:FN|MU|[FHM])'=>[
                    'name'=>'GALAXY J1',
                ],
                '(?:SAMSUNG-)?SM-J105(?:B|H)'=>[
                    'name'=>'GALAXY J1 mini',
                ],
                '(?:SAMSUNG-)?SM-J120[AFHMT]'=>[
                    'name'=>'GALAXY J1 (2016)',
                ],
                '(?:SAMSUNG-)?SM-J110[FHML]'=>[
                    'name'=>'GALAXY J1 Ace',
                ],
                '(?:SAMSUNG-)?SM-J111[FM]'=>[
                    'name'=>'GALAXY J1 Ace',
                ],
                '(?:SAMSUNG-)?SM-J200[FGHY]'=>[
                    'name'=>'GALAXY J2',
                ],
                '(?:SAMSUNG-)?SM-J2[15]0F'=>[
                    'name'=>'GALAXY J2 Pro',
                ],
                '(?:SAMSUNG-)?SM-J320(?:FN|[AFGHMNPV])'=>[
                    'name'=>'GALAXY J3 (2016)',
                ],
                '(?:SAMSUNG-)?SM-J330(?:F|G)'=>[
                    'name'=>'GALAXY J3 (2017)',
                ],
                '(?:SAMSUNG-)?SM-J400(?:F|G)'=>[
                    'name'=>'GALAXY J4',
                ],
                '(?:SAMSUNG-)?SM-J500(?:F|FN|G|Y|M|H)'=>[
                    'name'=>'GALAXY J5 (2015)',
                ],
                '(?:SAMSUNG-)?SM-J510(?:F|FN|MN)'=>[
                    'name'=>'GALAXY J5 (2016)',
                ],
                '(?:SAMSUNG-)?SM-J530[FY]'=>[
                    'name'=>'GALAXY J5 (2017)',
                ],
                '(?:SAMSUNG-)?SM-G570[FMY]'=>[
                    'name'=>'GALAXY J5 Prime',
                ],
                '(?:SAMSUNG-)?SM-J600[FG]'=>[
                    'name'=>'GALAXY J6',
                ],
                '(?:SAMSUNG-)?SM-J7[01]0(?:8|F|FN|H|K|M|MN)'=>[
                    'name'=>'GALAXY J7',
                ],
                '(?:SAMSUNG-)?SM-J700P'=>[
                    'name'=>'GALAXY J7 (2015)',
                ],
                '(?:SAMSUNG-)?SM-J700(?:T1|T)'=>[
                    'name'=>'GALAXY J7 (2016)',
                ],
                '(?:SAMSUNG-)?SM-C710F'=>[
                    'name'=>'GALAXY J7+ (C7)',
                ],
                '(?:SAMSUNG-)?SM-G610[FMY]'=>[
                    'name'=>'GALAXY J7 Prime',
                ],
                '(?:SAMSUNG-)?SM-G611(?:FF|MT|M)'=>[
                    'name'=>'GALAXY J7 Prime 2',
                ],
                '(?:SAMSUNG-)?SM-G615[F]'=>[
                    'name'=>'GALAXY J7 Max',
                ],
                '(?:SAMSUNG-)?SM-J730(?:F|G|GM)'=>[
                    'name'=>'GALAXY J7 Pro',
                ],
                '(?:SAMSUNG-)?SM-J701(?:F|M)'=>[
                    'name'=>'GALAXY J7 Core',
                ],
                '(?:SAMSUNG-)?SM-J727(?:P|T|V)'=>[
                    'name'=>'GALAXY J7 V',
                ],
                'SM-J7\[7\]'=>[
                    'name'=>'GALAXY J7 7',
                ],
                'SM-J8 Pro'=>[
                    'name'=>'GALAXY J8 Pro',
                ],
                'SM-J9\[7\] Prime'=>[
                    'name'=>'GALAXY J9 7 Prime',
                ],
                'SM-J9\[8\] Pro'=>[
                    'name'=>'GALAXY J9 8 Pro',
                ],
                '(?:SAMSUNG-)?SM-M105F'=>[
                    'name'=>'GALAXY M10',
                ],
                '(?:SAMSUNG-)?SM-M205[FG]'=>[
                    'name'=>'GALAXY M20',
                ],
                '(?:SAMSUNG-)?SM-G850F'=>[
                    'name'=>'GALAXY Alpha',
                ],
                '(?:SAMSUNG-)?SM-G910S'=>[
                    'name'=>'GALAXY Round',
                ],
                '(?:SAMSUNG-)?SM-(?:G550FY|G5510|G5520)'=>[
                    'name'=>'GALAXY On5',
                ],
                '(?:SAMSUNG-)?SM-G600(?:FY|[0F])'=>[
                    'name'=>'GALAXY On7'     ,
                ],
                '(?:SAMSUNG-)?SM-G610[0KLS]'=>[
                    'name'=>'GALAXY On7 (2016)',
                ],
                '(?:SAMSUNG-)?SM-G611[FS]'=>[
                    'name'=>'GALAXY On7 Prime',
                ],
                '(?:SAMSUNG-)?SM-C5000'=>[
                    'name'=>'GALAXY C5',
                ],
                '(?:SAMSUNG-)?SM-C501[08]'=>[
                    'name'=>'GALAXY C5 Pro',
                ],
                '(?:SAMSUNG-)?SM-C7000'=>[
                    'name'=>'GALAXY C7',
                ],
                '(?:SAMSUNG-)?SM-C701[08F]'=>[
                    'name'=>'GALAXY C7 Pro',
                ],
                '(?:SAMSUNG-)?SM-C710[08]'=>[
                    'name'=>'GALAXY C8',
                ],
                '(?:SAMSUNG-)?SM-C900[08FY]'=>[
                    'name'=>'GALAXY C9 Pro',
                ],
                '(?:SAMSUNG-)?SM-Z130H'=>[
                    'name'=>'GALAXY Z1',
                ],
                '(?:SAMSUNG-)?SM-Z200[FMY]'=>[
                    'name'=>'GALAXY Z2',
                ],
                '(?:SAMSUNG-)?SM-Z300H'=>[
                    'name'=>'GALAXY Z3',
                ],
                '(?:SAMSUNG-)?SM-Z400[FY]'=>[
                    'name'=>'GALAXY Z4',
                ],
                '(?:SAMSUNG-)?SM-G150'=>[
                    'name'=>'GALAXY Folder',
                ],
                '(?:SAMSUNG-)?SM-G165'=>[
                    'name'=>'GALAXY Folder 2',
                ],

                    // explicit phablet models
                '(?:SAMSUNG-)?GT-I9060'=>[
                    'name'=>'GALAXY Grand Neo',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?GT-I9063'=>[
                    'name'=>'GALAXY Grand Neo Duos',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?GT-I9(?:080|128)'=>[
                    'name'=>'GALAXY Grand',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?GT-I9168'=>[
                    'name'=>'GALAXY Grand Neo+',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?GT-I9082'=>[
                    'name'=>'GALAXY Grand Duos',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?GT-N7000'=>[
                    'name'=>'GALAXY Note',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?(?:(?:GT-)?N7100|SCH-I605|SCH-N719|SCH-R950|SPH-L900)'=>[
                    'name'=>'GALAXY Note II',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?GT-N7105'=>[
                    'name'=>'GALAXY Note II LTE',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?SM-G710[25L]?'=>[
                    'name'=>'GALAXY Grand 2',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?SM-G720(?:AX|N0|2)'=>[
                    'name'=>'GALAXY Grand Max',
                ],
                '(?:SAMSUNG-)?SM-G53(?:0F|0FZ|0Y|0H|0FZ|1F|1H)'=>[
                    'name'=>'GALAXY Grand Prime',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?SM-G532F'=>[
                    'name'=>'GALAXY Grand Prime Plus',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?SM-G532MT'=>[
                    'name'=>'GALAXY J2 Prime (TV)',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?SM-G532[MG]'=>[
                    'name'=>'GALAXY J2 Prime',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?SM-N7502'=>[
                    'name'=>'GALAXY Note 3 Neo Duos',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?SM-N750[L50]?'=>[
                    'name'=>'GALAXY Note 3 Neo',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?SM-N9002'=>[
                    'name'=>'GALAXY Note 3 Duos',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?SM-N900(?:[05689][VQ]?|[AKLPSTV]|W8)?'=>[
                    'name'=>'GALAXY Note 3',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?SM-N910|N9100'=>[
                    'name'=>'GALAXY Note 4',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?SM-N915'=>[
                    'name'=>'GALAXY Note 4 Edge',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?SM-N920[0ACGIKLST]'=>[
                    'name'=>'GALAXY Note 5',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?SM-N9208'=>[
                    'name'=>'GALAXY Note 5 Duos',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?SM-G750(?:8Q|[9AFH])'=>[
                    'name'=>'GALAXY Mega 2',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?GT-I915[028]'=>[
                    'name'=>'GALAXY Mega 5.8',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?GT-I920[05]'=>[
                    'name'=>'GALAXY Mega 6.3',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG-)?SM-N930F|SCV34'=>[
                    'name'=>'GALAXY Note 7',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG[- ])?SM-N950|SCV37'=>[
                    'name'=>'GALAXY Note 8',
                    'category'=>'phablet',
                ],
                '(?:SAMSUNG[- ])?SM-N960'=>[
                    'name'=>'GALAXY Note 9',
                    'category'=>'phablet',
                ],

                    // explicit feature phones
                '(?:SAMSUNG-)?GT-E2152'=>[
                    'name'=>'E2152',
                    'category'=>'feature phone',
                ],

                    // general detections
                '(?:SAMSUNG-)?(GT-(P|N8|N5)[0-9]+[a-z]?)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'SC-02C'=>[
                    'name'=>'GALAXY S II',
                ],
                'SC-01F'=>[
                    'name'=>'GALAXY Note 3',
                    'category'=>'phablet',
                ],
                'SC-04E'=>[
                    'name'=>'GALAXY S4',
                ],
                '(?:SAMSUNG-)?((?:SM-[TNP]|GT-P)[a-z0-9_\-]+)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                '((?:SCH|SGH|SPH|SHV|SHW|GT|SM)-[a-z0-9_\-]+)'=>[
                    'name'=>'$1',
                ],
                'SMART-TV'=>[
                    'name'=>'Smart TV',
                    'category'=>'tv',
                ],
                'Galaxy ([^/;]+) Build'=>[
                    'name'=>'GALAXY $1',
                ],
                'Galaxy ([a-z0-9]+)'=>[
                    'name'=>'GALAXY $1',
                ],
                'SAMSUNG[\-][ ]?([a-z0-9]+[\-_][a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'SAMSUNG;[ ]?([a-z0-9]+[\-_][a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'SAMSUNG[ _/\-]?([a-z0-9\-]+)'=>[
                    'name'=>'$1',
                ],
                'SAMSUNG;[ ]?([a-z0-9 ]+)'=>[
                    'name'=>'$1',
                ],
                'SEC-([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'SAM-([a-z0-9]+)'=>[
                    'name'=>'SCH-$1',
                ],
                '(?:portalmmm|o2imode)/2\.0 ([SZ][a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'sam([rua][0-9]+)'=>[
                    'name'=>'SCH-$1',
                ],
            ]
        ],

         // Google
        'Nexus|GoogleTV|Glass|CrKey[^a-z0-9]|Pixel Build|Pixel (?:XL|C|[23]|[23] XL)'   =>  [
            'name'=>'Google',
            'category'=>'smartphone',
            'sub'=>[
                'Glass'=>[
                    'name'=>'Glass',
                ],
                'Galaxy Nexus'=>[
                    'name'=>'Galaxy Nexus',
                ],
                '(Nexus (?:S|4|5X?|One))'=>[
                    'name'=>'$1',
                ],
                '(Nexus (?:6P?))'=>[
                    'name'=>'$1',
                    'category'=>'phablet',
                ],
                '(Nexus (?:7|9|10))'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'CrKey[^a-z0-9]'=>[
                    'name'=>'Chromecast',
                    'category'=>'tv',
                ],
                'GoogleTV'=>[
                    'name'=>'GoogleTV',
                    'category'=>'tv',
                ],
                'Pixel Build'=>[
                    'name'=>'Pixel',
                ],
                'Pixel XL'=>[
                    'name'=>'Pixel XL',
                ],
                'Pixel 3 XL'=>[
                    'name'=>'Pixel 3 XL',
                ],
                'Pixel 2 XL'=>[
                    'name'=>'Pixel 2 XL',
                ],
                'Pixel 3'=>[
                    'name'=>'Pixel 3',
                ],
                'Pixel 2'=>[
                    'name'=>'Pixel 2',
                ],
                'Pixel C'=>[
                    'name'=>'Pixel C',
                    'category'=>'tablet',
                ],
            ]
        ],

        // SFR
        'StarShine|StarTrail|STARADDICT|StarText|StarNaute|StarXtrem|StarTab'   =>  [
            'name'=>'SFR',
            'category'=>'smartphone',
            'sub'=>[
                'StarXtrem[);/ ]'=>[
                    'name'=>'StarXtrem',
                ],
                'StarTrail ?4[);/ ]'=>[
                    'name'=>'StarTrail 4',
                ],
                'StarTrail III[);/ ]'=>[
                    'name'=>'StarTrail 3',
                ],
                'StarTrail II[);/ ]'=>[
                    'name'=>'StarTrail 2',
                ],
                'StarTrail[);/ ]'=>[
                    'name'=>'StarTrail',
                ],
                'StarShine II[);/ ]'=>[
                    'name'=>'StarShine 2',
                ],
                'StarShine[);/ ]'=>[
                    'name'=>'StarShine',
                ],
                'STARADDICT III[);/ ]'=>[
                    'name'=>'Staraddict 3',
                ],
                'STARADDICT II Plus[);/ ]'=>[
                    'name'=>'Staraddict 2 Plus',
                ],
                'STARADDICT II[);/ ]'=>[
                    'name'=>'Staraddict 2',
                ],
                'STARADDICT[);/ ]'=>[
                    'name'=>'Staraddict',
                ],
                'StarText II[);/ ]'=>[
                    'name'=>'StarText 2',
                ],
                'StarText[);/ ]'=>[
                    'name'=>'StarText',
                ],
                'StarNaute II[);/ ]'=>[
                    'name'=>'StarNaute 2',
                ],
                'StarNaute[);/ ]'=>[
                    'name'=>'StarNaute',
                ],
                'StarTab'=>[
                    'name'=>'StarTab',
                    'category'=>'tablet',
                ],

                '((?:StarShine|StarTrail|STARADDICT|StarText|StarNaute|StarXtrem)[^;/]*) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // microsoft
        'KIN\.(One|Two)|RM-(?:1031|106[57]|109[02]|1096|1099|1109|1114|1127|1141|1154)|Microsoft; Lumia'   =>  [
            'name'=>'Microsoft',
            'category'=>'smartphone',
            'sub'=>[
                'KIN\.(One|Two)'=>[
                    'name'=>'Kin $1',
                    'category'=>'feature phone',
                ],

                'RM-1031'=>[
                    'name'=>'Lumia 532',
                ],
                'RM-106[57]'=>[
                    'name'=>'Lumia 640 XL',
                ],
                'RM-1096'=>[
                    'name'=>'Lumia 640 XL',
                ],
                'RM-109[02]'=>[
                    'name'=>'Lumia 535',
                ],
                'RM-1099'=>[
                    'name'=>'Lumia 430',
                ],
                'RM-1109'=>[
                    'name'=>'Lumia 640',
                ],
                'RM-1114'=>[
                    'name'=>'Lumia 435',
                ],
                'RM-1127'=>[
                    'name'=>'Lumia 550',
                ],
                'RM-1141'=>[
                    'name'=>'Lumia 540',
                ],
                'RM-1154'=>[
                    'name'=>'Lumia 650',
                ],

                'Microsoft; Lumia ([^;/)]+)[;/)]'=>[
                    'name'=>'Lumia $1',
                ],
            ]
        ],
                
        // NOKIA
        'Nokia|Lumia|Maemo RX|portalmmm/2\.0 N7|portalmmm/2\.0 NK|nok[0-9]+|Symbian.*\s([a-z0-9]+)$|RX-51 N900|TA-[0-9]{4}'   =>  [
            'name'=>'Nokia',
            'category'=>'smartphone',
            'sub'=>[
                // Nokia branded phones by HMD Global
                // 2017 Models
                'TA-10(07|23|29|35)'=>[
                    'name'=>'2',
                ],
                'TA-10(20|28|32|38)'=>[
                    'name'=>'3',
                ],
                'TA-10(24|27|44|53)'=>[
                    'name'=>'5',
                ],
                'TA-10(00|03|21|25|33|39|54)'=>[
                    'name'=>'6',
                ],
                'TA-1041'=>[
                    'name'=>'7',
                ],
                'TA-10(04|12|52)'=>[
                    'name'=>'8',
                ],
                    // 2018 Models
                'Nokia ([A-Za-z0-9\. ]+) Build'=>[
                    'name'=>'$1',
                ],

                    // Nokia phones
                'RX-51 N900'=>[
                    'name'=>'N900',
                ],
                'Nokia(N[0-9]+)'=>[
                    'name'=>'$1',
                ],
                'Nokia-([a-z0-9]+)'=>[
                    'name'=>'N$1',
                ],
                'NOKIA; (?!Qt;)([a-z0-9\- ]+)'=>[
                    'name'=>'$1',
                ],
                'NOKIA[ _]?([a-z0-9\-]+)'=>[
                    'name'=>'$1',
                ],
                'NOKIA/([a-z0-9 ]+)'=>[
                    'name'=>'$1',
                ],
                '(Lumia [a-z0-9\-]+ XL)'=>[
                    'name'=>'$1',
                    'category'=>'phablet',
                ],
                '(Lumia [a-z0-9\-]+)'=>[
                    'name'=>'$1',
                ],
                'Maemo RX-51 ([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'Maemo RX-34'=>[
                    'name'=>'N800',
                ],
                'NokiaInternal|Nokia-WAP-Toolkit|Nokia-MIT-Browser|Nokia Mobile|Nokia Browser|Nokia/Series'=>[
                    'name'=>'',
                ],
                'portalmmm/2\.0 (N7[37]|NK[a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'nok([0-9]+)'=>[
                    'name'=>'$1',
                ],
                'Symbian.*\s([a-z0-9]+)$'=>[
                    'name'=>'$1',
                    'category'=>'feature phone',
                ],

                // CnM
                'CnM'   =>  [
                    'name'=>'CnM',
                    'category'=>'tablet',
                    'sub'=>[
                    ]
                ],
                'CnM[ \-](?:Touchpad|TP)[ \-]([0-9\.]+)'=>[
                    'name'=>'Touchpad $1',
                ],
            ]
        ],
                

        // RIM/BlackBerry
        'BB10;|BlackBerry|rim[0-9]+|PlayBook|STV100-[1234]|STH100-[12]|BBA100-[12]|BBB100-[1234567]|BBC100-1|BBD100-[126]|BBE100-[123456789]|BBF100-[123456789]|BBG100-1|BBH100-1'   =>  [
            'name'=>'RIM',
            'category'=>'smartphone',
            'sub'=>[
                'BBA100-[12]'=>[
                    'name'=>'BlackBerry DTEK60',
                ],
                'BBB100-[1234567]'=>[
                    'name'=>'KEYone',
                ],
                'BBC100-1'=>[
                    'name'=>'Aurora',
                ],
                'BBD100-[126]'=>[
                    'name'=>'Motion',
                ],
                'BBE100-[123456789]'=>[
                    'name'=>'KEY2 LE',
                ],
                'BBF100-[1234567]'=>[
                    'name'=>'KEY2',
                ],
                'BBF100-8'=>[
                    'name'=>'KEY2 Silver',
                ],
                'BBF100-9'=>[
                    'name'=>'KEY2 Black',
                ],
                'BBG100-1'=>[
                    'name'=>'Evolve',
                ],
                'BBH100-1'=>[
                    'name'=>'Evolve X',
                ],
                'STV100-[1234]'=>[
                    'name'=>'BlackBerry Priv',
                ],
                'STH100-[12]'=>[
                    'name'=>'BlackBerry DTEK50',
                ],
                'BB10; ([a-z0-9\- ]+)\)'=>[
                    'name'=>'BlackBerry $1',
                ],
                'PlayBook.+RIM Tablet OS'=>[
                    'name'=>'BlackBerry Playbook',
                    'category'=>'tablet',
                ],
                'BlackBerry(?: )?([a-z0-9]+)'=>[
                    'name'=>'BlackBerry $1',
                ],
                'rim([0-9]+)'=>[
                    'name'=>'BlackBerry $1',
                ],
                'BlackBerry'=>[
                    'name'=>'BlackBerry',
                ],

                // PALM
                '(?:Pre|Pixi)/(\d+)\.(\d+)|Palm|Treo|Xiino'   =>  [
                    'name'=>'Palm',
                    'category'=>'smartphone',
                    'sub'=>[
                    ]
                ],
                '((?:Pre|Pixi))/(\d+\.\d+)'=>[
                    'name'=>'$1 $2',
                ],
                'Palm(?:[ \-])?((?!OS|Source|scape)[a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'Treo([a-z0-9]+)'=>[
                    'name'=>'Treo $1',
                ],
                'Tungsten'=>[
                    'name'=>'Tungsten',
                ],
                'Xiino|Palmscape'=>[
                    'name'=>'',
                ],

                // HP
                'TouchPad/\d+\.\d+|hp-tablet|HP ?iPAQ|webOS.*P160U|HP Slate|HP [78]|Compaq [7|8]|HP; [^;/)]+'   =>  [
                    'name'=>'HP',
                    'category'=>'smartphone',
                    'sub'=>[
                    ]
                ],
                'HP Slate 6 Voice Tab'=>[
                    'name'=>'Slate 6 VoiceTab',
                    'category'=>'phablet',
                ],
                'HP ([78][^/;]*) Build'=>[
                    'name'=>'Slate $1',
                    'category'=>'tablet',
                ],
                'Compaq ([78][^/;]*) Build'=>[
                    'name'=>'Compaq $1',
                    'category'=>'tablet',
                ],
                'HP Slate ?(.+) Build'=>[
                    'name'=>'Slate $1',
                    'category'=>'tablet',
                ],
                'HP Slate ?([0-9]+)'=>[
                    'name'=>'Slate $1',
                    'category'=>'tablet',
                ],
                'TouchPad/(\d+\.\d+)|hp-tablet'=>[
                    'name'=>'TouchPad',
                    'category'=>'tablet',
                ],
                'HP; ([^;/)]+)'=>[
                    'name'=>'$1',
                ],
                'HP(?: )?iPAQ(?: )?([a-z0-9]+)'=>[
                    'name'=>'iPAQ $1',
                ],
                'webOS.*(P160U)'=>[
                    'name'=>'Veer',
                ],
            ]
        ],


        // TiPhone
        'TiPhone ?([a-z0-9]+)'  =>  [
            'name'=>'TiPhone',
            'category'=>'smartphone',
            'sub'=>[
                'TiPhone ?([a-z0-9]+)'=>[
                    'name'=>'$1'
                ]
            ]
        ],

        // micromax
        '(?:MicroMax[ \-\_]?[a-z0-9]+|Q327)|P70221 Build'   =>  [
            'name'=>'MicroMax',
            'category'=>'smartphone',
            'sub'=>[
                'AQ5001'=>[
                    'name'=>'Canvas Juice 2',
                ],
                'E481'=>[
                    'name'=>'Canvas 5',
                ],
                'P70221 Build'=>[
                    'name'=>'Canvas Tab',
                    'category'=>'tablet',
                ],
                'Q327'=>[
                    'name'=>'Bolt',
                ],
                'Q417'=>[
                    'name'=>'Canvas Mega',
                ],
                'Q424'=>[
                    'name'=>'Bolt Selfie',
                ],
                'Q426'=>[
                    'name'=>'Canvas Mega 2',
                ],
                'MicroMax(?:[ \-\_])?(P[a-z0-9]+)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'MicroMax(?:[ \-\_])?([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // 3Q
        '(AC0731B|AC1024C|AC7803C|BC9710AM|EL72B|LC0720C|LC0723B|LC0725B|LC0804B|LC0808B|LC0809B|LC0810C|LC0816C|LC0901D|LC1016C|MT0724B|MT0729B|MT0729D|MT0811B|OC1020A|RC0709B|RC0710B|RC0718C|RC0719H|RC0721B|RC0722C|RC0726B|RC0734H|RC0743H|RC0817C|RC1018C|RC1019G|RC1025F|RC1301C|RC7802F|RC9711B|RC9712C|RC9716B|RC9717B|RC9724C|RC9726C|RC9727F|RC9730C|RC9731C|TS0807B|TS1013B|VM0711A|VM1017A|RC0813C|QS9719D|QS9718C|QS9715F|QS1023H|QS0815C|QS0730C|QS0728C|QS0717D|QS0716D|QS0715C|MT7801C)'=>[
            'name'=>'3Q',
            'category'=>'tablet',
            'sub'=>[
                '(AC0731B|AC1024C|AC7803C|BC9710AM|EL72B|LC0720C|LC0723B|LC0725B|LC0804B|LC0808B|LC0809B|LC0810C|LC0816C|LC0901D|LC1016C|MT0724B|MT0729B|MT0729D|MT0811B|OC1020A|RC0709B|RC0710B|RC0718C|RC0719H|RC0721B|RC0722C|RC0726B|RC0734H|RC0743H|RC0817C|RC1018C|RC1019G|RC1025F|RC1301C|RC7802F|RC9711B|RC9712C|RC9716B|RC9717B|RC9724C|RC9726C|RC9727F|RC9730C|RC9731C|TS0807B|TS1013B|VM0711A|VM1017A|RC0813C|QS9719D|QS9718C|QS9715F|QS1023H|QS0815C|QS0730C|QS0728C|QS0717D|QS0716D|QS0715C|MT7801C)'=>[
                    'name'=>'$1'
                ]
            ]
        ],

        // 4Good
        '4Good[ _]|(?:4Good)?(S450m [43]G|S555m 4G|S501m 3G|T700i_3G|Light A103)'   =>  [
            'name'=>'4Good',
            'category'=>'smartphone',
            'sub'=>[
                'T700i_3G'=>[
                    'name'=>'T700i 3G',
                    'category'=>'tablet',
                ],
                '(S(?:450m|555m|501m)[_ ][43]G|Light A103)'=>[
                    'name'=>'$1',
                ],
                '4Good[ _]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                '4Good[ _]([^);/ ]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // AllCall
        'AllCall_|Heat[34]|Hot ?[125][^;/]+ Build'   =>  [
            'name'=>'AllCall',
            'category'=>'smartphone',
            'sub'=>[
                'AllCall_(Alpha|Atom|Bro|Madrid)'=>[
                    'name'=>'$1',
                ],
                'AllCall_S1_X'=>[
                    'name'=>'S1 X',
                ],
                'AllCall_S1'=>[
                    'name'=>'S1',
                ],
                'AllCall_RIO_S'=>[
                    'name'=>'Rio S',
                ],
                'AllCall_RIO_PRO'=>[
                    'name'=>'Rio Pro',
                ],
                'AllCall_RIO'=>[
                    'name'=>'Rio',
                ],
                'Heat([34])'=>[
                    'name'=>'Heat $1',
                ],
                'Hot ?([125][^;/]+) Build'=>[
                    'name'=>'Hot $1',
                ],
            ]
        ],
                

        // Bravis
        'Bravis|A501 Bright|NB(?:10[56]|751|7[145])|NP101'   =>  [
            'name'=>'Bravis',
            'category'=>'smartphone',
            'sub'=>[
                'A501 Bright'=>[
                    'name'=>'A501 Bright',
                ],
                'Bravis[_ ]([^;\)]+) Build'=>[
                    'name'=>'$1',
                ],
                '(NB(?:10[156]|751|7[145])|NP101)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
            ]
        ],
                

        // Acer
        'acer|(?<!ZTE BLADE |ImSmart )a(?:101|110|2[10]0|211|50[10]|51[10]|70[10])[);/ ]|Android.*V3[67]0[);/ ]|Android.*Z1[23456]0 Build|Android.*Z5\d{2} Build|Android.*T0[234678] Build|A1-830|A1-81[01]|A3-A[1234][01]|B1-7[1235678][01]|B1-7[23]3|B1-8[1235]0|B1-A71|B3-A[12]0|B3-A3[02]|E39 Build|S5[12]0 Build|DA[0-9]+HQ?L[);/ ]'   =>  [
            'name'=>'Acer',
            'category'=>'smartphone',
            'sub'=>[
                // smart displays
                'DA220HQL[);/ ]'=>[
                    'name'=>'DA220HQL',
                    'category'=>'smart display',
                ],
                'DA241HL[);/ ]'=>[
                    'name'=>'DA241HL',
                    'category'=>'smart display',
                ],
                '(DA[0-9]+HQ?L)[);/ ]'=>[
                    'name'=>'$1',
                    'category'=>'smart display',
                ],

                // explicit tablet models
                'A1-81[01]'=>[
                    'name'=>'Iconia A',
                    'category'=>'tablet',
                ],
                'A1-830'=>[
                    'name'=>'Iconia A1',
                    'category'=>'tablet',
                ],
                'A3-A[12][01]'=>[
                    'name'=>'Iconia A3',
                    'category'=>'tablet',
                ],
                'A3-A[34]0'=>[
                    'name'=>'Iconia Tab 10',
                    'category'=>'tablet',
                ],
                'B1-7[1235][01]|B1-A71'=>[
                    'name'=>'Iconia B1',
                    'category'=>'tablet',
                ],
                'B1-7[23]3'=>[
                    'name'=>'Iconia Talk 7',
                    'category'=>'tablet',
                ],
                'B1-7[678]0'=>[
                    'name'=>'Iconia One 7',
                    'category'=>'tablet',
                ],
                'B1-8[1235]0'=>[
                    'name'=>'Iconia One 8',
                    'category'=>'tablet',
                ],
                'B3-A[12]0|B3-A3[02]'=>[
                    'name'=>'Iconia One 10',
                    'category'=>'tablet',
                ],

                // explicit smartphone models
                'E39 Build'=>[
                    'name'=>'Liquid E700',
                ],
                'Android.*V360[);/ ]'=>[
                    'name'=>'Liquid E1',
                ],
                'Android.*V370[);/ ]'=>[
                    'name'=>'Liquid E2',
                ],
                'S510 Build'=>[
                    'name'=>'Liquid S1',
                ],
                'S520 Build'=>[
                    'name'=>'Liquid S2',
                ],
                'Android.*Z1([2345])0 Build'=>[
                    'name'=>'Liquid Z$1',
                ],
                'Android.*Z160 Build'=>[
                    'name'=>'Liquid Z4',
                ],
                'Android.*Z(5\d{2}) Build'=>[
                    'name'=>'Liquid Z$1',
                ],
                'Android.*T02 Build'=>[
                    'name'=>'Liquid Z530',
                ],
                'Android.*T03 Build'=>[
                    'name'=>'Liquid Z630',
                ],
                'Android.*T04 Build'=>[
                    'name'=>'Liquid Z630S',
                ],
                'Android.*T06 Build'=>[
                    'name'=>'Liquid Zest',
                ],
                'Android.*T07 Build'=>[
                    'name'=>'Liquid Zest 4G',
                ],
                'Android.*T08 Build'=>[
                    'name'=>'Liquid Zest Plus',
                ],
                'Acer; ?([^;\)]+)'=>[
                    'name'=>'$1',
                ],
                'Acer[ _\-]?([^;\)]+) Build'=>[
                    'name'=>'$1',
                ],
                'acer[\-_]([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'a(101|110|2[10]0|211|50[10]|51[10]|70[10])[);/ ]'=>[
                    'name'=>'Iconia Tab A$1',
                    'category'=>'tablet',
                ],
            ]
        ],
                

        // Advance
        'Hollogram|HL6246|IntroTr3544|Tr3845'   =>  [
            'name'=>'Advance',
            'category'=>'smartphone',
            'sub'=>[
                'IntroTr3544|Tr3845'=>[
                    'name'=>'Intro',
                    'category'=>'tablet',
                ],
                'HL6246'=>[
                    'name'=>'Hollogram HL6246',
                ],
                'Hollogram ([^;\)]+) Build'=>[
                    'name'=>'Hollogram $1',
                ],

                // AGM
                'AGM ([^/;\)]+)(?: Build|\))'   =>  [
                    'name'=>'AGM',
                    'category'=>'smartphone',
                    'sub'=>[
                    ]
                ],
                'AGM ([^/;\)]+)(?: Build|\))'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Airness
        'AIRNESS-([\w]+)'   =>  [
            'name'=>'Airness',
            'category'=>'feature phone',
            'sub'=>[
                'AIRNESS-([\w]+)'=>[
                    'name'=>'$1'
                ]
            ]
        ],

        // Aiwa
        'AW790|M300'   =>  [
            'name'=>'Aiwa',
            'category'=>'smartphone',
            'sub'=>[
                'AW790'=>[
                    'name'=>'AW790',
                ],
                'M300'=>[
                    'name'=>'M300',
                    'category'=>'phablet',
                ],
            ]
        ],
                

        // Akai
        'Akai[ _-]|Eco[ _]E2|Glory[ _](?:G[1235]|L[123]|O[125])|TAB-[79]8[03]0Q?|X6 METAL|AKTB-703MZ'   =>  [
            'name'=>'Akai',
            'category'=>'smartphone',
            'sub'=>[
                'TAB-([79]8[03]0Q?)'=>[
                    'name'=>'TAB $1',
                    'category'=>'tablet',
                ],
                '(AKTB-703MZ)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],

                'X6 METAL'=>[
                    'name'=>'iLike',
                ],
                'Glory[ _](G[1235]|L[123]|O[125])'=>[
                    'name'=>'Glory $1',
                ],
                'Eco[ _]E2'=>[
                    'name'=>'Eco E2',
                ],
                'Akai[ _-]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Akai[ _-]([^;/]+)[;/)]'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Alcatel
        'Alcatel|Alc[a-z0-9]+|One[ _]?Touch|idol3|(?:4003[AJ]|4009[ADEFIKMSX]|4013[DEJKMX]|4014[ADEKMX]|4015[ADNTX]|4016[ADX]|4017[ADEFSX]|4018[ADEFMX]|4024[EDX]|4027[ADNX]|4028[AEJS]|4032[ADEX]|4034[ADEFGX]|4035[ADXY]|4045[ADEX]|4047[ADFGNX]|4049[DEGMX]|4060[SW]|4114E|5009[AD]|5010[DEGSUX]|5011A|5012[DFG]|5015[ADEX]|5016[AXJ]|5017[ABDEOX]|5019D|5022[EDX]|5023[EF]|5025[DG]|5026[AD]|5027B|5033[AX]|5038[ADEX]|5041C|5042[ADEFGWX]|5044[ADGIKOPSTY]|5045[ADFGIJTXY]|5046[ADGIJSTUY]|5047[DIUY]|5049[EGSWZ]|5050[ASXY]|5051[ADEJMTWX]|5052[AD]|5054[ADNSWX]|5056[ADEGIJMNTUWX]|5057M|5058[AIY]|5059[ADXYZ]|5065[ADNWX]|5070D|5080[ADFQUX]|5085[ABCDGHIJNOQY]|5086[ADY]|5090[AIY]|5095[IKY]|5098[OS]|5099[ADYUI]|5116J|5145A|6016[ADEX]|6036[AXY]|6037[BKY]|6039[AHJKY]|6043[AD]|6044D|6045[BFIKOY]|6050[AFY]|6055[ABDHIKPUYZ]|6058[ADX]|6060S|6062W|6070K|7040[ADEFKRT]|7041[DX]|7043[AEKY]|7044[AX]|7045Y|7048[ASWX]|7055A|7070X|8030Y|8050[DEGX]|8063|9001[DIX]|9002X|9003[AX]|9024O|9005X|9007[ATX]|9008[ADIJNTUX]|9010X|9022X|9203A|A570BL|I213|I216X)[);/ ]|TIMXL'   =>  [
            'name'=>'Alcatel',
            'category'=>'smartphone',
            'sub'=>[
                '(?:5022[EDX]|5070D)[);/ ]'=>[
                    'name'=>'One Touch Pop Star',
                ],
                '6044D[);/ ]'=>[
                    'name'=>'One Touch Pop Up',
                ],
                '(?:4015[ATX]|4016A)[);/ ]'=>[
                    'name'=>'One Touch Pop C1',
                ],
                '(?:4015[DN]|4016[DX])[);/ ]'=>[
                    'name'=>'One Touch Pop C1 Dual SIM',
                ],
                '4032[AX][);/ ]'=>[
                    'name'=>'One Touch Pop C2',
                ],
                '4032[DE][);/ ]'=>[
                    'name'=>'One Touch Pop C2 Dual SIM',
                ],
                '(?:7040[AFK]|7041X)[);/ ]'=>[
                    'name'=>'One Touch Pop C7',
                ],
                '(?:7040[DE]|7041D)[);/ ]'=>[
                    'name'=>'One Touch Pop C7 Dual SIM',
                ],
                '4018[ADEFMX][);/ ]'=>[
                    'name'=>'One Touch Pop D1',
                ],
                '4035[ADXY][);/ ]'=>[
                    'name'=>'One Touch Pop D3',
                ],
                '5038[ADEX][);/ ]'=>[
                    'name'=>'One Touch Pop D5',
                ],
                '4045[AX][);/ ]'=>[
                    'name'=>'One Touch Pop 2 4"',
                ],
                '4045[DE][);/ ]'=>[
                    'name'=>'One Touch Pop 2 4" Dual SIM',
                ],
                '5042[AFGWX][);/ ]'=>[
                    'name'=>'One Touch Pop 2 4.5"',
                ],
                '5042[DE][);/ ]'=>[
                    'name'=>'One Touch Pop 2 4.5" Dual SIM',
                ],
                '(?:7043[AY]|7044[AX])[);/ ]'=>[
                    'name'=>'One Touch Pop 2 5"',
                ],
                '7043[EK][);/ ]'=>[
                    'name'=>'One Touch Pop 2 5" Dual SIM',
                ],
                '50[16]5X[);/ ]'=>[
                    'name'=>'One Touch Pop 3',
                ],
                '(?:5015[AE]|5016[AJ]|5065[ADWX]|5116J)[);/ ]'=>[
                    'name'=>'One Touch Pop 3 5"',
                ],
                '(?:5025[DG]|5054[ADSX])[);/ ]'=>[
                    'name'=>'One Touch Pop 3 5.5"',
                ],
                '5015D[);/ ]'=>[
                    'name'=>'One Touch Pop 3 Dual SIM',
                ],
                '5051[AEJMTWX][);/ ]'=>[
                    'name'=>'One Touch Pop 4',
                ],
                '5051D[);/ ]'=>[
                    'name'=>'One Touch Pop 4 Dual SIM',
                ],
                '5095[IKY][);/ ]'=>[
                    'name'=>'One Touch Pop 4S',
                ],
                '5056[ADEGJMTUX][);/ ]'=>[
                    'name'=>'One Touch Pop 4+',
                ],
                '7070X[);/ ]'=>[
                    'name'=>'One Touch Pop 4 6"',
                ],
                '5057M[);/ ]'=>[
                    'name'=>'One Touch Pop Mirage',
                ],
                '5050[ASXY][);/ ]'=>[
                    'name'=>'One Touch Pop S3',
                ],
                '7045Y[);/ ]'=>[
                    'name'=>'One Touch Pop S7',
                ],
                '6037[BKY][);/ ]'=>[
                    'name'=>'One Touch Idol 2',
                ],
                '5027B[);/ ]'=>[
                    'name'=>'One Touch Dawn',
                ],
                '7040[RT][);/ ]'=>[
                    'name'=>'One Touch Fierce 2',
                ],
                '5056[NW]'=>[
                    'name'=>'One Touch Fierce 4',
                ],
                '5054[NW]'=>[
                    'name'=>'One Touch Fierce XL',
                ],
                '6016[AX][);/ ]'=>[
                    'name'=>'One Touch Idol 2 mini',
                ],
                '6016[DE][);/ ]'=>[
                    'name'=>'One Touch Idol 2 mini Dual SIM',
                ],
                '6036[AXY][);/ ]'=>[
                    'name'=>'One Touch Idol 2 mini S',
                ],
                '6050[AFY][);/ ]'=>[
                    'name'=>'One Touch Idol 2S',
                ],
                '6039[AHJKY][);/ ]|idol3'=>[
                    'name'=>'One Touch Idol 3',
                ],
                '6045[BFIKOY][);/ ]'=>[
                    'name'=>'One Touch Idol 3 5.5"',
                ],
                '6055[ABDHIKPUYZ][);/ ]'=>[
                    'name'=>'One Touch Idol 4',
                ],
                '6070K[);/ ]'=>[
                    'name'=>'One Touch Idol 4S',
                ],
                '6058[ADX][);/ ]'=>[
                    'name'=>'One Touch Idol 5',
                ],
                '6060S[);/ ]'=>[
                    'name'=>'One Touch Idol 5S',
                ],
                '6043[AD][);/ ]'=>[
                    'name'=>'One Touch Idol X+',
                ],
                '8030Y[);/ ]'=>[
                    'name'=>'One Touch Hero 2',
                ],
                '7055A[);/ ]'=>[
                    'name'=>'One Touch Hero 2C',
                ],
                '5065N[);/ ]'=>[
                    'name'=>'TRU',
                ],
                '5056I'=>[
                    'name'=>'One Touch Optus X Smart',
                ],
                'A570BL'=>[
                    'name'=>'One Touch Pixi Avion LTE',
                ],
                '4024[DEX][);/ ]'=>[
                    'name'=>'One Touch Pixi First',
                ],
                '4014D[);/ ]'=>[
                    'name'=>'One Touch Pixi 2',
                ],
                '4009[AFIKMSX][);/ ]'=>[
                    'name'=>'One Touch Pixi 3 3.5"',
                ],
                '4009[DE][);/ ]'=>[
                    'name'=>'One Touch Pixi 3 3.5" Dual SIM',
                ],
                '(?:4003[AJ]|4013[DEJKMX]|4014[AEKMX]|4114E)[);/ ]'=>[
                    'name'=>'One Touch Pixi 3 4"',
                ],
                '(?:4027[ADNX]|4028[AEJS]|5019D)[);/ ]'=>[
                    'name'=>'One Touch Pixi 3 4.5"',
                ],
                '5017[ABDEOX][);/ ]'=>[
                    'name'=>'One Touch Pixi 3 4.5" 4G',
                ],
                '9002X[);/ ]'=>[
                    'name'=>'One Touch Pixi 3 7"',
                    'category'=>'phablet',
                ],
                '9007A[);/ ]'=>[
                    'name'=>'One Touch Pixi 3 7"',
                    'category'=>'tablet',
                ],
                '9007[TX][);/ ]'=>[
                    'name'=>'One Touch Pixi 3 7" 4G',
                    'category'=>'tablet',
                ],
                '9022X[);/ ]'=>[
                    'name'=>'One Touch Pixi 3 8"',
                    'category'=>'phablet',
                ],
                '9010X[);/ ]'=>[
                    'name'=>'One Touch Pixi 3 10"',
                    'category'=>'tablet',
                ],
                '4017[ADEFSX][);/ ]'=>[
                    'name'=>'One Touch Pixi 4 3.5"',
                ],
                '4034[ADEFGX][);/ ]'=>[
                    'name'=>'One Touch Pixi 4 4"',
                ],
                '4060[SW][);/ ]'=>[
                    'name'=>'One Touch Pixi 4 4.5"',
                ],
                '5023[EF][);/ ]'=>[
                    'name'=>'One Touch Pixi 4 Plus Power',
                ],
                '5010[DEGSUX][);/ ]'=>[
                    'name'=>'One Touch Pixi 4 5" 3G',
                ],
                '5012[DFG][);/ ]'=>[
                    'name'=>'One Touch Pixi 4 5.5" 3G',
                ],
                '(?:5045[ADFGIJTXY]|5145A)[);/ ]'=>[
                    'name'=>'One Touch Pixi 4 5" 4G',
                ],
                '5098O[);/ ]'=>[
                    'name'=>'One Touch Pixi Theatre',
                ],
                '5046[ADIJTUY][);/ ]'=>[
                    'name'=>'A3',
                ],
                '(?:5011A|5049[EG])[);/ ]'=>[
                    'name'=>'A3 Plus',
                ],
                '9008[ADIJNTUX]'=>[
                    'name'=>'A3 XL',
                ],
                '9203A[);/ ]'=>[
                    'name'=>'A3 7" 3G',
                    'category'=>'tablet',
                ],
                '5085[BQ][);/ ]'=>[
                    'name'=>'A5',
                ],
                '5085[ADHIJY][);/ ]'=>[
                    'name'=>'A5 LED',
                ],
                '5085N[);/ ]'=>[
                    'name'=>'A5 Max LED',
                ],
                '5090[AIY][);/ ]'=>[
                    'name'=>'A7',
                ],
                '5046[GS][);/ ]'=>[
                    'name'=>'A30',
                ],
                '5049S[);/ ]'=>[
                    'name'=>'A30 Plus',
                ],
                '5049Z[);/ ]'=>[
                    'name'=>'A30 Fierce',
                ],
                '5085[GO]'=>[
                    'name'=>'A50',
                ],
                '5049W[);/ ]'=>[
                    'name'=>'Revvl',
                ],
                '8050[GX][);/ ]'=>[
                    'name'=>'One Touch Pixi 4 6" 3G',
                ],
                '8050[ED][);/ ]'=>[
                    'name'=>'One Touch Pixi 4 6" 3G Dual SIM',
                ],
                '(?:5098S|9001[DIX])[);/ ]'=>[
                    'name'=>'One Touch Pixi 4 6" 4G',
                ],
                '9003[AX][);/ ]'=>[
                    'name'=>'One Touch Pixi 4 7" 3G',
                    'category'=>'tablet',
                ],
                '8063[);/ ]'=>[
                    'name'=>'One Touch Pixi 4 7" WiFi',
                    'category'=>'tablet',
                ],
                '9024O[);/ ]'=>[
                    'name'=>'One Touch Pixi 5',
                    'category'=>'tablet',
                ],
                'I216X[);/ ]'=>[
                    'name'=>'One Touch Pixi 7',
                    'category'=>'tablet',
                ],
                'I213[);/ ]'=>[
                    'name'=>'One Touch Pixi 7',
                    'category'=>'tablet',
                ],
                '9005X[);/ ]'=>[
                    'name'=>'One Touch Pixi 8',
                    'category'=>'tablet',
                ],
                'P320X'=>[
                    'name'=>'One Touch POP 8',
                    'category'=>'tablet',
                ],
                'P310X'=>[
                    'name'=>'One Touch POP 7',
                    'category'=>'tablet',
                ],
                '7048[ASWX][);/ ]'=>[
                    'name'=>'One Touch Go Play',
                ],
                '(?:Alcatel[ _])?One[ _]?Touch[ _]((?:T[0-9]+|TAB[^/;]+|EVO[78](?:HD)?)) Build'=>[
                    'name'=>'One Touch $1',
                    'category'=>'tablet',
                ],
                '(?:Alcatel[ _])?One[ _]?Touch([^/;]*) Build'=>[
                    'name'=>'One Touch$1',
                ],
                '(?:Alcatel[ _])?One[ _]?Touch([^/;\)]*)\)'=>[
                    'name'=>'One Touch$1',
                ],
                '5080[ADFQUX][);/ ]'=>[
                    'name'=>'Shine Lite',
                ],
                'TIMXL'=>[
                    'name'=>'TIM XL',
                ],
                '5085C'=>[
                    'name'=>'PulseMix',
                ],
                '4049[DEGMX][);/ ]'=>[
                    'name'=>'U3',
                ],
                '5044[ADIKOPTY][);/ ]'=>[
                    'name'=>'U5',
                ],
                '4047[DFXN][);/ ]'=>[
                    'name'=>'U5 3G',
                ],
                '5047[DIUY][);/ ]'=>[
                    'name'=>'U5 HD',
                ],
                '4047G[);/ ]'=>[
                    'name'=>'U5 Lite',
                ],
                '4047A[);/ ]'=>[
                    'name'=>'U5 Plus',
                ],
                '5044[GS][);/ ]'=>[
                    'name'=>'U50',
                ],
                '5033[AX][);/ ]'=>[
                    'name'=>'1',
                ],
                '5009[AD][);/ ]'=>[
                    'name'=>'1C',
                ],
                '5059[ADXYZ][);/ ]'=>[
                    'name'=>'1X',
                ],
                '5052[AD][);/ ]'=>[
                    'name'=>'3',
                ],
                '5099[ADYUI][);/ ]'=>[
                    'name'=>'3V',
                ],
                '5026[AD][);/ ]'=>[
                    'name'=>'3C',
                ],
                '5058[AIY][);/ ]'=>[
                    'name'=>'3X',
                ],
                '5086[ADY][);/ ]'=>[
                    'name'=>'5',
                ],
                '6062W[);/ ]'=>[
                    'name'=>'7',
                ],
                'Alcatel UP'=>[
                    'name'=>'',
                ],
                '5041C'=>[
                    'name'=>'TETRA',
                ],
                'ALCATEL([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                'ALCATEL[ \-]?([^/;\)]+)'=>[
                    'name'=>'$1',
                ],
                'ALCATEL_([^/;\)]+)'=>[
                    'name'=>'$1',
                ],
                'Alc([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Allview
        'Allview|A4You|A5_(?:Easy(?:_TM)?|Ready(?:_TM)?|Quad|Quad_Plus_TM)|A[56789]_Lite|A5Smiley|A6_Duo|AX4Nano|C6_Duo|E[23]_Living|E3_(?:Jump|Sign)|E4_Lite|M9_Connect|P(?:43_Easy|[5689]_Energy|6_Energy_Lite|[68]_Energy_Mini(?:_TM)?|(41|[458])_eMagic(?:_TM)?|[589](?:_)?Life(?:_TM)?|[567]_Lite(?:_TM)?|6_plus|[45678]_Pro|7_Seon|10_Style|7_Xtreme|6_Qmax|4_Quad)|V(?:[13]_Viper|1_Viper_I|2_Viper_(?:E|I|S|X|X_plus|Xe))|X(?:[1234]_Soul_Xtreme|[12345]_Soul|3_Soul_Lite|[24]Soul_Mini(?:_TM)?|4_Soul_Mini_S(?:_TM)?|[234]_Soul_Style(?:_TM)?|2_Soul_Style_Plus|2_Twin)|Viva_H801'   =>  [
            'name'=>'Allview',
            'category'=>'smartphone',
            'sub'=>[
                    'A4You'=>[
                    'name'=>'A4 You',
                ],
                'AX4Nano'=>[
                    'name'=>'AX4 Nano',
                ],
                'C6_Duo'=>[
                    'name'=>'C6 Duo',
                ],
                'E([23])_Living'=>[
                    'name'=>'E$1 Living',
                ],
                'E3_Jump'=>[
                    'name'=>'E3 Jump',
                ],
                'E3_Sign'=>[
                    'name'=>'E3 Sign',
                ],
                'E4_Lite'=>[
                    'name'=>'E4 Lite',
                ],
                'M9_Connect'=>[
                    'name'=>'M9 Connect',
                ],
                'P43_Easy'=>[
                    'name'=>'P43 Easy',
                ],
                'P(41|[458])_eMagic(?:_TM)?'=>[
                    'name'=>'P$1 eMagic',
                ],
                'P([567])_Lite(?:_TM)?'=>[
                    'name'=>'P$1 Lite',
                ],
                'P6_plus'=>[
                    'name'=>'P6 Plus',
                ],
                'P6_Qmax'=>[
                    'name'=>'P6 Qmax',
                ],
                'P([45678])_Pro'=>[
                    'name'=>'P$1 Pro',
                ],
                'P4_Quad'=>[
                    'name'=>'P4 Quad',
                ],
                'P9_Energy_Lite_2017'=>[
                    'name'=>'P9 Energy Lite (2017)',
                ],
                'P9_Energy_S'=>[
                    'name'=>'P9 Energy S',
                ],
                'P([69])_Energy_Lite'=>[
                    'name'=>'P$1 Energy Lite',
                ],
                'P8_Energy_PRO'=>[
                    'name'=>'P8 Energy Pro',
                ],
                'P([689])_Energy_mini(?:_TM)?'=>[
                    'name'=>'P$1 Energy Mini',
                ],
                'P([5689])_Energy'=>[
                    'name'=>'P$1 Energy',
                ],
                'P7_Seon'=>[
                    'name'=>'P7 Seon',
                ],
                'P7_Xtreme'=>[
                    'name'=>'P7 Xtreme',
                ],
                'P([589])(?:_)?Life(?:_TM)?'=>[
                    'name'=>'P$1 Life',
                ],
                'P10_Style'=>[
                    'name'=>'P10 Style',
                ],
                'V([12])_Viper_I4G(?:_TM)?'=>[
                    'name'=>'V$1 Viper I 4G',
                ],
                'V1_Viper_I'=>[
                    'name'=>'V1 Viper I',
                ],
                'V([13])_Viper'=>[
                    'name'=>'V$1 Viper',
                ],
                'V2_Viper_X_plus'=>[
                    'name'=>'V2 Viper X Plus',
                ],
                'V2_Viper_(E|I|S|X(?:e)?)'=>[
                    'name'=>'V2 Viper $1',
                ],
                'X([124])_Soul_Xtreme'=>[
                    'name'=>'X$1 Soul Xtreme',
                ],
                'X4_Soul_Infinity_(L|N|S|Z)'=>[
                    'name'=>'X4 Soul Infinity $1',
                ],
                'X([34])_Soul_Lite'=>[
                    'name'=>'X$1 Soul Lite',
                ],
                'X4_Soul_Mini_S(?:_TM)?'=>[
                    'name'=>'X4 Soul Mini S',
                ],
                'X([2345])_Soul_Mini(?:_TM)?'=>[
                    'name'=>'X$1 Soul Mini',
                ],
                'X3_Soul_PLUS'=>[
                    'name'=>'X3 Soul Plus',
                ],
                'X([35])_Soul_Pro'=>[
                    'name'=>'X$1 Soul Pro',
                ],
                'X2_Soul_Style_Plus'=>[
                    'name'=>'X2 Soul Style Plus',
                ],
                'X([234])_Soul_Style(?:_TM)?'=>[
                    'name'=>'X$1 Soul Style',
                ],
                'X([12345])_Soul'=>[
                    'name'=>'X$1 Soul',
                ],
                'X2_Twin'=>[
                    'name'=>'X2 Twin',
                ],
                'A5_Easy(?:_TM)?'=>[
                    'name'=>'A5 Easy',
                ],
                'A([56789])_Lite'=>[
                    'name'=>'A$1 Lite',
                ],
                'A5_Ready(?:_TM)?'=>[
                    'name'=>'A5 Ready',
                ],
                'A5Smiley'=>[
                    'name'=>'A5 Smiley',
                ],
                'A5_Quad_Plus_TM'=>[
                    'name'=>'A5 Quad Plus',
                ],
                'A5_Quad'=>[
                    'name'=>'A5 Quad',
                ],
                'A6_Duo'=>[
                    'name'=>'A6 Duo',
                ],
                'Allview[ _-]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Allview[ _-]([^;/]+)[;/)]'=>[
                    'name'=>'$1',
                ],

                // explicit tablet models
                'AllviewCityPlus'=>[
                    'name'=>'City Plus',
                    'category'=>'tablet',
                ],
                'AllviewCity'=>[
                    'name'=>'City',
                    'category'=>'tablet',
                ],
                'AllviewAX2Frenzy'=>[
                    'name'=>'AX2 Frenzy',
                    'category'=>'tablet',
                ],
                'Allview2SpeedDuo'=>[
                    'name'=>'Alldro 2 Speed Duo',
                    'category'=>'tablet',
                ],
                'Allview3SpeedQuad'=>[
                    'name'=>'Alldro 3 Speed Quad',
                    'category'=>'tablet',
                ],
                'Viva_H801'=>[
                    'name'=>'Viva H801',
                    'category'=>'tablet',
                ],
            ]
        ],


        // altron
        'AL-555|GI-626'   =>  [
            'name'=>'altron',
            'category'=>'smartphone',
            'sub'=>[
                'AL-555'=>[
                    'name'=>'AL-555',
                ],
                'GI-626'=>[
                    'name'=>'GI-626',
                    'category'=>'phablet',
                ],
            ]
        ],
                

        // AMGOO
        'AM(350|355|40[257]|41[05]|450|50[89]|52[037]|51[58]|53[05])'   =>  [
            'name'=>'AMGOO',
            'category'=>'smartphone',
            'sub'=>[
                'AM350'=>[
                    'name'=>'Jack Pro',
                ],
                'AM(355|407)'=>[
                    'name'=>'Tigo',
                ],
                'AM402'=>[
                    'name'=>'Pronto',
                ],
                'AM410'=>[
                    'name'=>'Unico',
                ],
                'AM450'=>[
                    'name'=>'Swift',
                ],
                'AM508'=>[
                    'name'=>'Fuego',
                ],
                'AM509'=>[
                    'name'=>'Uno',
                ],
                'AM515'=>[
                    'name'=>'D1',
                ],
                'AM518'=>[
                    'name'=>'C1',
                ],
                'AM520'=>[
                    'name'=>'Pro',
                ],
                'AM523'=>[
                    'name'=>'Plus',
                ],
                'AM527'=>[
                    'name'=>'Geo',
                ],
                'AM530'=>[
                    'name'=>'A1',
                ],
                'AM535'=>[
                    'name'=>'P1',
                ],
                'AM([0-9]{3})'=>[
                    'name'=>'AM$1',
                ],
            ]
        ],
                
        // Amoi
        'Amoi|A862W'   =>  [
            'name'=>'Amoi',
            'category'=>'smartphone',
            'sub'=>[
                // explicit smartphone models
                'A862W'=>[
                    'name'=>'A862W',
                ],
                'Amoi[\- /]([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'Amoisonic-([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Ainol
        'Numy|novo[0-9]'   =>  [
            'name'=>'Ainol',
            'category'=>'tablet',
            'sub'=>[
                'Numy[ _]([^;/]+) Build'=>[
                    'name'=>'Numy $1',
                ],
                'Novo([0-9]+)[ \-]([^;/]+) Build'=>[
                    'name'=>'Novo $1 $2',
                ],
            ]
        ],
                

        // Archos
        '(?:YL-)?Archos'   =>  [
            'name'=>'Archos',
            'category'=>'smartphone',
            'sub'=>[
                'Archos ?5[);/ ]'=>[
                    'name'=>'5',
                    'category'=>'tablet',
                ],
                '(?:YL-)?Archos ([^/;]*(?:PAD)[^/;]*) Build'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'Archos ((?:[789]|10)[0-9]?[a-z]* ?(?:G9|G10|Helium|Titanium|Cobalt|Platinum|Xenon|Carbon|Neon|XS|IT)[^/;]*) Build'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                '(?:YL-)?Archos ([a-z0-9 ]+) Build'=>[
                    'name'=>'$1',
                ],
                '(?:YL-)?Archos ([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
               
        // Meu
        'MEU ([a-z0-9]+) Build'  =>  [
            'name'=>'Meu',
            'category'=>'smartphone',
            'sub'=>[
                'MEU ([a-z0-9]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Arnova
        'arnova|ARCHM901|AN7CG2|AN7G2(DTE|I)?|AN7[BCDFH]?G3|A80KSC|AN8G2|AN8[BC]?G3|AN9G2I?|AN9G3|A101[BC]|AN10G2|AN10BG2(DT|I)?|AN10BG3(DT)?|AN10[CD]G3'   =>  [
            'name'=>'Arnova',
            'category'=>'tablet',
            'sub'=>[
                // explicit tablet models
                'ARCHM901'=>[
                    'name'=>'M901',
                ],
                'AN7CG2'=>[
                    'name'=>'7c G2',
                ],
                'AN7G2I|AN7G2|AN7G2DTE'=>[
                    'name'=>'7 G2',
                ],
                'AN7G3'=>[
                    'name'=>'7 G3',
                ],
                'AN7BG3'=>[
                    'name'=>'7b G3',
                ],
                'AN7CG3'=>[
                    'name'=>'7c G3',
                ],
                'AN7DG3-CP'=>[
                    'name'=>'Childpad',
                ],
                'AN7DG3'=>[
                    'name'=>'7d G3',
                ],
                'AN7FG3'=>[
                    'name'=>'7f G3',
                ],
                'AN7HG3'=>[
                    'name'=>'7h G3',
                ],
                'A80KSC'=>[
                    'name'=>'8',
                ],
                'AN8G2'=>[
                    'name'=>'8 G2',
                ],
                'AN8G3'=>[
                    'name'=>'8 G3',
                ],
                'AN8BG3'=>[
                    'name'=>'8b G3',
                ],
                'AN8CG3'=>[
                    'name'=>'8c G3',
                ],
                'AN9G2I'=>[
                    'name'=>'9i G2',
                ],
                'AN9G2'=>[
                    'name'=>'9 G2',
                ],
                'AN9G3'=>[
                    'name'=>'9 G3',
                ],
                'A101B2|A101C|AN10G2'=>[
                    'name'=>'10 G2',
                ],
                'A101B'=>[
                    'name'=>'10',
                ],
                'AN10BG2|AN10BG2DT|AN10BG2I'=>[
                    'name'=>'10b G2',
                ],
                'AN10BG3|AN10BG3DT|AN10BG3-LZ'=>[
                    'name'=>'10b G3',
                ],
                'AN10CG3'=>[
                    'name'=>'10c G3',
                ],
                'AN10DG3'=>[
                    'name'=>'10d G3',
                ],
                'ARNOVA 90G3'=>[
                    'name'=>'90 G3',
                ],
                'ARNOVA 90 G4'=>[
                    'name'=>'90 G4',
                ],
                'ARNOVA 97G4'=>[
                    'name'=>'97 G4',
                ],
                'ARNOVA 101 G4'=>[
                    'name'=>'101 G4',
                ],

                'Arnova ([^/;]*) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // ARRIS
        'ARRIS'   =>  [
            'name'=>'ARRIS',
            'category'=>'tv',
            'sub'=>[
                'ARRIS[,;] ([^),;/]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Ask
        'ASK '   =>  [
            'name'=>'Ask',
            'category'=>'smartphone',
            'sub'=>[
                'SP618'=>[
                    'name'=>'SP618',
                ],
            ]
        ],
                

        // Garmin-Asus
        'Garmin-Asus|Garminfone'   =>  [
            'name'=>'Garmin-Asus',
            'category'=>'smartphone',
            'sub'=>[
                'Garminfone[ \-_]([^;/]*)Build'=>[
                    'name'=>'Garminfone $1',
                ],
                'Garmin-Asus[ \-_]([^;/]+)Build'=>[
                    'name'=>'$1',
                ],
                'Garmin-Asus[ \-_]([^;/]+)[\)/]'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Asus
        'Asus|Transformer|TF300T|Slider SL101|PadFone|ME302(?:C|KL)|ME301T|ME371MG|ME17(?:1|2V|3X)|(?:K0[01][0-9a-z]|P(?:00[18ACIL]|01[MTVWYZ]|01MA|01T_1|02[13478])(?: Build|\))|X015D|X018D|X003|X00[7ABT]D|Z00D|Z00[MTY]D|Z01[7FGHKMR]D)[);/ ]|ZB(602|555)KL|ZC553KL|ZA550KL|ZE(520|620|55[2345])KL'   =>  [
            'name'=>'Asus',
            'category'=>'smartphone',
            'sub'=>[
                // explicit tablet models
                'ME171[);/ ]'=>[
                    'name'=>'Eee Pad MeMO 171',
                    'category'=>'tablet',
                ],
                'ME172V'=>[
                    'name'=>'MeMO Pad',
                    'category'=>'tablet',
                ],
                'ME302C[);/ ]'=>[
                    'name'=>'MeMO Pad FHD 10',
                    'category'=>'tablet',
                ],
                'ME302KL[);/ ]'=>[
                    'name'=>'MeMO Pad FHD 10 LTE',
                    'category'=>'tablet',
                ],
                'ME301T[);/ ]'=>[
                    'name'=>'MeMO Pad Smart 10',
                    'category'=>'tablet',
                ],
                '(?:K01[3A]|K007|K00R)[);/ ]|MeMO Pad 7'=>[
                    'name'=>'MeMO Pad 7',
                    'category'=>'tablet',
                ],
                'K01E[);/ ]'=>[
                    'name'=>'MeMO Pad 10 ME103K',
                    'category'=>'tablet',
                ],
                'K00U|ME173X[);/ ]'=>[
                    'name'=>'MeMO Pad HD 7',
                    'category'=>'tablet',
                ],
                '(?:K011|K00L)[);/ ]'=>[
                    'name'=>'MeMO Pad 8',
                    'category'=>'tablet',
                ],
                'K014[);/ ]'=>[
                    'name'=>'MeMO Pad 8.9',
                    'category'=>'tablet',
                ],
                'K00S[);/ ]'=>[
                    'name'=>'MeMO Pad HD 7 Dual SIM',
                    'category'=>'tablet',
                ],
                'K00F[);/ ]'=>[
                    'name'=>'MeMO Pad 10',
                    'category'=>'tablet',
                ],
                'K00C[);/ ]'=>[
                    'name'=>'Transformer Pad TF701T',
                    'category'=>'tablet',
                ],
                'K010[);/ ]'=>[
                    'name'=>'Transformer Pad TF103C',
                    'category'=>'tablet',
                ],
                'K018[);/ ]'=>[
                    'name'=>'Transformer Pad TF103CG',
                    'category'=>'tablet',
                ],
                'TF300T[);/ ]'=>[
                    'name'=>'Transformer Pad TF300T',
                    'category'=>'tablet',
                ],
                'K01B[);/ ]'=>[
                    'name'=>'Transformer Pad TF303K',
                    'category'=>'tablet',
                ],
                'Slider SL101'=>[
                    'name'=>'Eee Pad Slider SL101',
                    'category'=>'tablet',
                ],
                'P01[YZ]'=>[
                    'name'=>'ZenPad C 7.0',
                    'category'=>'tablet',
                ],
                'P008 Build'=>[
                    'name'=>'ZenPad Z8',
                    'category'=>'tablet',
                ],
                'P001'=>[
                    'name'=>'ZenPad Z10',
                    'category'=>'tablet',
                ],
                '(?:ASUS_)?P00J'=>[
                    'name'=>'ZenPad Z8s',
                    'category'=>'tablet',
                ],
                'P01[VW]'=>[
                    'name'=>'ZenPad 7.0',
                    'category'=>'tablet',
                ],
                'P024 Build|P00A'=>[
                    'name'=>'ZenPad 8.0',
                    'category'=>'tablet',
                ],
                'P01MA(?: Build|\))|P01M(?: Build|\))'=>[
                    'name'=>'ZenPad S 8.0',
                    'category'=>'tablet',
                ],
                'P027'=>[
                    'name'=>'ZenPad 3S 10',
                    'category'=>'tablet',
                ],
                '(?:ASUS_)?P00I'=>[
                    'name'=>'ZenPad 3S 10 LTE',
                    'category'=>'tablet',
                ],
                '(?:ASUS_)?P00C|P02[138]|P00L|P01T_1'=>[
                    'name'=>'ZenPad 10',
                    'category'=>'tablet',
                ],

                // explicit phablet models
                'ME371MG[);/ ]'=>[
                    'name'=>'Fonepad',
                    'category'=>'phablet',
                ],
                'K00G[);/ ]'=>[
                    'name'=>'Fonepad Note 6',
                    'category'=>'phablet',
                ],
                '(?:K012|K00E)[);/ ]'=>[
                    'name'=>'Fonepad 7',
                    'category'=>'phablet',
                ],
                'K00Z[);/ ]'=>[
                    'name'=>'Fonepad 7 Dual SIM',
                    'category'=>'phablet',
                ],
                'K016[);/ ]'=>[
                    'name'=>'Fonepad 8',
                    'category'=>'phablet',
                ],

                // explicit smartphone models
                '(?:ASUS_)?T00N'=>[
                    'name'=>'PadFone S',
                ],
                '(?:ASUS_)?A002(A)?'=>[
                    'name'=>'ZenFone AR',
                ],
                '(?:ASUS_)?A006'=>[
                    'name'=>'ZenFone V',
                ],
                '(?:ASUS_)?A009'=>[
                    'name'=>'ZenFone V Live',
                ],
                '(?:ASUS_)?Z007'=>[
                    'name'=>'ZenFone C',
                ],
                '(?:ASUS_)?(X00PD|ZB555KL)'=>[
                    'name'=>'ZenFone Max M1',
                ],
                '(?:ASUS_)?X01AD'=>[
                    'name'=>'ZenFone Max M2',
                ],
                '(?:ASUS_)?(?:Z00[AD]|Z008D|Z008|Z00AD[AB]?)'=>[
                    'name'=>'ZenFone 2',
                ],
                '(?:ASUS_)?A007|ZA550KL'=>[
                    'name'=>'ZenFone Live',
                ],
                '(?:ASUS_)?X00RD'=>[
                    'name'=>'ZenFone Live L1',
                ],
                '(?:ASUS_)Z00YD'=>[
                    'name'=>'Live',
                ],
                '(?:ASUS_)?(?:Z00[ERLMT]D|Z011D)'=>[
                    'name'=>'ZenFone 2 Laser',
                ],
                '(?:ASUS_)?(?:T00[IQ1]|Z01KD)'=>[
                    'name'=>'ZenFone 4',
                ],
                '(?:ASUS_)?(?:T00[JF]|X00QD|X00QSA|ZE620KL)'=>[
                    'name'=>'ZenFone 5',
                ],
                '(?:ASUS_)?T00P'=>[
                    'name'=>'ZenFone 5 LTE',
                ],
                '(?:ASUS_)?(?:T00K|X017DA|X017D)'=>[
                    'name'=>'ZenFone 5 Lite',
                ],
                '(?:ASUS_)?Z01RD'=>[
                    'name'=>'ZenFone 5Z',
                ],
                '(?:ASUS_)?(?:T00G|Z002)'=>[
                    'name'=>'ZenFone 6',
                ],
                '(?:ASUS_)?Z010D'=>[
                    'name'=>'ZenFone Max',
                ],
                '(?:ASUS_)?X018D'=>[
                    'name'=>'ZenFone Max Plus M1',
                ],
                '(?:ASUS_)?X00TD'=>[
                    'name'=>'ZenFone Max Pro M1',
                ],
                '(?:ASUS_)?X01BDA'=>[
                    'name'=>'ZenFone Max Pro M2',
                ],
                '(?:ASUS_)?X014D'=>[
                    'name'=>'ZenFone Go Plus',
                ],
                '(?:ASUS_)?(L001|X00[7AB]D|X009[DB][DA]|Z00[SV]D)'=>[
                    'name'=>'ZenFone Go',
                ],
                '(?:ASUS_)?X013D'=>[
                    'name'=>'ZenFone Go Life',
                ],
                '(?:ASUS_)?(X003)'=>[
                    'name'=>'ZenFone Pegasus',
                ],
                '(?:ASUS_)?X005'=>[
                    'name'=>'ZenFone Pegasus 5000',
                ],
                '(?:ASUS_)?X550'=>[
                    'name'=>'ZenFone Pegasus 2 Plus',
                ],
                '(?:ASUS_)?(X00GD)'=>[
                    'name'=>'ZenFone Pegasus 3S Max',
                ],
                '(?:ASUS_)?(X008)'=>[
                    'name'=>'ZenFone 3 Pegasus',
                ],
                '(?:ASUS_)?(ZE553KL|Z01HD)'=>[
                    'name'=>'ZenFone 3 Zoom',
                ],
                '(?:ASUS_)?Z00UD'=>[
                    'name'=>'ZenFone Selfie',
                ],
                '(?:ASUS_)?(Z016[DS]|Z01FD)'=>[
                    'name'=>'ZenFone 3 Deluxe',
                ],
                '(?:ASUS_)?(Z017DA|ZE520KL|ZE552KL|Z017D|Z012(D|S))'=>[
                    'name'=>'ZenFone 3',
                ],
                '(?:ASUS_)?Z01B[DS]'=>[
                    'name'=>'ZenFone 3 Laser',
                ],
                '(?:ASUS_)?X00DD|ZC553KL'=>[
                    'name'=>'ZenFone 3 Max',
                ],
                '(?:ASUS_)?A001'=>[
                    'name'=>'ZenFone 3 Ultra',
                ],
                '(?:ASUS_)?(X00LDA|Z01MD)'=>[
                    'name'=>'ZenFone 4 Selfie',
                ],
                '(?:ASUS_)?(?:X00LD|Z01KS|Z01KDA|ZE554KL)'=>[
                    'name'=>'ZenFone 4',
                ],
                '(?:ASUS_)?X00[HIK]D'=>[
                    'name'=>'ZenFone 4 Max',
                ],
                '(?:ASUS_)?X015D'=>[
                    'name'=>'ZenFone 4 Max Plus',
                ],
                '(?:ASUS_)?Z01GD'=>[
                    'name'=>'ZenFone 4 Pro',
                ],
                '(?:ASUS_)?ZB602KL'=>[
                    'name'=>'ZenFone Max Pro',
                ],
                '(?:ASUS_)?Z00XS'=>[
                    'name'=>'ZenFone Zoom',
                ],
                '(?:ASUS_)?Z01QD'=>[
                    'name'=>'ROG Phone',
                ],

                // general detections
                'Asus(?:-|;)?([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                '(PadFone(?: [^;/]+)?) Build'=>[
                    'name'=>'$1',
                ],
                '(PadFone(?: [a-z0-9]+)?)'=>[
                    'name'=>'$1',
                ],
                '(?:Asus|Transformer) ((?:Pad |Prime )?TF[0-9a-z]+)'=>[
                    'name'=>'Transformer $1',
                    'category'=>'tablet',
                ],
                'Chromebook Flip C100PA'=>[
                    'name'=>'Chromebook Flip C100PA',
                    'category'=>'tablet',
                ],
            ]
        ],
                
              

        // Audiovox
        'Audiovox|CDM|UTS(?:TARCOM)?\-|audio[a-z0-9\-]+'   =>  [
            'name'=>'Audiovox',
            'category'=>'smartphone',
            'sub'=>[
                'Audiovox[_\-]([a-z0-9\-]+)'=>[
                    'name'=>'$1',
                ],
                'CDM(?:-)?([a-z0-9]+)'=>[
                    'name'=>'CDM-$1',
                ],
                'UTS(?:TARCOM)?-([a-z0-9\-]+)'=>[
                    'name'=>'CDM-$1',
                ],
                'audio([a-z0-9\-]+)'=>[
                    'name'=>'CDM-$1',
                ],
            ]
        ],
                

        // AVH
        'Excer_10_PRO'   =>  [
            'name'=>'AVH',
            'category'=>'smartphone',
            'sub'=>[
                'Excer_10_PRO'=>[
                    'name'=>'Excer 10 Pro',
                    'category'=>'tablet',
                ],
            ]
        ],
                

        // Avvio
        'Avvio[ _]?([a-z0-9\-]+)'   =>  [
            'name'=>'Avvio',
            'category'=>'smartphone',
            'sub'=>[
                'Avvio[ _]PAD'=>[
                    'name'=>'PAD',
                    'category'=>'tablet',
                ],
                'Avvio[ _]?([a-z0-9\-]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Azumi Mobile
        'Azumi[_ ]'   =>  [
            'name'=>'"Azumi Mobile"',
            'category'=>'smartphone',
            'sub'=>[
                'Azumi[_ ]([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                'Azumi[_ ]([a-z0-9_]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        //Barnes & Noble
        'Nook|BN[TR]V[0-9]+'   =>  [
            'name'=>'Barnes & Noble',
            'category'=>'tablet',
            'sub'=>[
                'Nook([a-z0-9]+)'=>[
                    'name'=>'Nook $1',
                ],
                'Nook[ _]([^/;]+)[ _]Build'=>[
                    'name'=>'Nook $1',
                ],
                '(BN[TR]V[0-9]+)'=>[
                    'name'=>'Nook $1',
                ],
            ]
        ],
                

        // BGH
        '(?!Positivo )BGH ([^/;\)]+)(?: Build|\))'   =>  [
            'name'=>'BGH',
            'category'=>'smartphone',
            'sub'=>[
                'Y([17]00|2[01]0|1010)'=>[
                    'name'=>'Y$1',
                    'category'=>'tablet',
                ],
                'BGH (\+Simple|Mini)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'Y710 KIDS'=>[
                    'name'=>'Y710 Kids',
                    'category'=>'tablet',
                ],
                'JOY X2'=>[
                    'name'=>'Joy X2',
                ],
                'BGH ([^/;\)]+)(?: Build|\))'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Bitel
        'Bitel[ _-]([^/;]+) Build|B(840[5789]|841[0456]|850[2346]|860[146]|9401|950[12345])'   =>  [
            'name'=>'Bitel',
            'category'=>'smartphone',
            'sub'=>[
                '(B(840[5789]|841[0456]|850[2346]|860[146]|9401|950[12345]))'=>[
                    'name'=>'$1',
                ],
                'Bitel[ _-]([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Blu
        'BLU |(?:blu|Dash)[ _]([^/;]+) Build|Studio (5.5|View XL|Mega|C 8\+8|C HD|C|G|Selfie LTE|Touch|M HD|M5 Plus|J[1258]|X|X8 HD)|Advance (4.0 ?[LM]|5.0(?: HD)?|A4)|ENERGY (DIAMOND|XL)|LIFE XL|Dash XL|PURE XL|Life One X2|GRAND 5.5 HD|R1 (HD|PLUS)|Tank Xtreme 5.0|Tank Xtreme Pro'   =>  [
            'name'=>'Blu',
            'category'=>'smartphone',
            'sub'=>[
                'Advance (4.0 ?[LM]|4.0|5.0(?: HD)?|A4)'=>[
                    'name'=>'Advance $1',
                ],
                'Studio (5.0 C|5.5|View XL|Mega|C 8\+8|C HD|C|G|Touch|M HD|M5 Plus|J[1258]|X|X8 HD)'=>[
                    'name'=>'Studio $1',
                ],
                'STUDIO SELFIE LTE'=>[
                    'name'=>'Studio Selfie LTE',
                ],
                'STUDIO ONE'=>[
                    'name'=>'Studio One',
                ],
                'STUDIO SELFIE (2|LTE)'=>[
                    'name'=>'Studio Selfie $1',
                ],
                'ENERGY DIAMOND'=>[
                    'name'=>'Energy Diamond',
                ],
                'ENERGY XL'=>[
                    'name'=>'Energy XL',
                ],
                'ENERGY X PLUS 2'=>[
                    'name'=>'Energy X Plus 2',
                ],
                'ENERGY X PLUS'=>[
                    'name'=>'Energy X Plus',
                ],
                'LIFE XL'=>[
                    'name'=>'Life XL',
                ],
                'Dash XL'=>[
                    'name'=>'Dash XL',
                ],
                'PURE XL'=>[
                    'name'=>'Pure XL',
                ],
                'Life One X2'=>[
                    'name'=>'Life One X2',
                ],
                'LIFE ONE'=>[
                    'name'=>'Life One',
                ],
                'NEO X PLUS'=>[
                    'name'=>'Neo X Plus',
                ],
                'NEO (XL|X)'=>[
                    'name'=>'Neo $1',
                ],
                'GRAND 5.5 HD'=>[
                    'name'=>'Grand 5.5 HD',
                ],
                'Grand X LTE'=>[
                    'name'=>'Grand X LTE',
                ],
                'R1 HD'=>[
                    'name'=>'R1 HD',
                ],
                'R1 PLUS'=>[
                    'name'=>'R1 Plus',
                ],
                'Tank Xtreme 5.0'=>[
                    'name'=>'Tank Xtreme 5.0',
                ],
                'Tank Xtreme Pro'=>[
                    'name'=>'Tank Xtreme Pro',
                ],
                'VIVO AIR LTE'=>[
                    'name'=>'Vivo Air LTE',
                ],
                'DASH[ _]([^/;]+) Build'=>[
                    'name'=>'Dash $1',
                ],
                'DASH (5.0|L|M|X2|X)'=>[
                    'name'=>'Dash $1',
                ],
                'blu[ _]([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Bluegood
        'BLUEGOOD'   =>  [
            'name'=>'Bluegood',
            'category'=>'smartphone',
            'sub'=>[
                'V6'=>[
                    'name'=>'V6',
                ],
            ]
        ],
                

        // Blackview
        '(BV([2456789]000|(58|9[56])00)(?:[ _](?:PRO))?|(P10000(?:[ _](?:PRO))?)|omega[ _]pro|Alife[ _][PS]1|Heatwave|DM550)'   =>  [
            'name'=>'Blackview',
            'category'=>'smartphone',
            'sub'=>[
                '(BV6000S)'=>[
                    'name'=>'$1',
                ],
                'BV9000Pro-F'=>[
                    'name'=>'BV9000 Pro F',
                ],
                '(BV([48]000||9[56]00))Pro'=>[
                    'name'=>'$1 Pro',
                ],
                '(BV([2456789]000|(58|95)00)(?:[ _](?:PRO))?)'=>[
                    'name'=>'$1',
                ],
                '(P10000(?:[ _](?:PRO))?)'=>[
                    'name'=>'$1',
                ],
                'omega[ _]pro'=>[
                    'name'=>'Omega Pro',
                ],
                '(Alife[ _][PS]1|DM550|Heatwave)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Bluboo
        'Bluboo|Xfire|Maya Build'   =>  [
            'name'=>'Bluboo',
            'category'=>'smartphone',
            'sub'=>[
                'Maya Build'=>[
                    'name'=>'Maya',
                ],
                'Xfire2'=>[
                    'name'=>'Xfire 2',
                ],
                'Xfire'=>[
                    'name'=>'Xfire',
                ],
                'Bluboo[ _-]?([^;/)]+) Build'=>[
                    'name'=>'$1',
                ],
                'Bluboo[ _-]?([^;/)]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // bogo
        'BO-(FRSP4|LFSPBS5)'   =>  [
            'name'=>'bogo',
            'category'=>'smartphone',
            'sub'=>[
                'BO-(FRSP4|LFSPBS5)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Boway
        '(?:sprd-)?(BOWAY)'   =>  [
            'name'=>'Boway',
            'category'=>'smartphone',
            'sub'=>[
                'BOWAY[ _-]([^/;]+)[ _]Build'=>[
                    'name'=>'$1',
                ],
                '([^/;]+) Build/BOWAY'=>[
                    'name'=>'$1',
                ],
                '.*BOWAY[ _-]([^/;]+)/'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Brondi
        '(?:CENTURION|GLADIATOR| GLORY|LUXURY|SENSUELLE|VICTORY)(?:[ _-]?[2-6])?[);/ ]|Surfing Tab'   =>  [
            'name'=>'Brondi',
            'category'=>'smartphone',
            'sub'=>[
                'CENTURION(?:[ _-]?([2-6]))?[);/ ]'=>[
                    'name'=>'CENTURION $1',
                ],
                'GLADIATOR(?:[ _-]?([2-6]))?[);/ ]'=>[
                    'name'=>'GLADIATOR $1',
                ],
                'GLORY(?:[ _-]?([2-6]))?[);/ ]'=>[
                    'name'=>'GLORY $1',
                ],
                'LUXURY(?:[ _-]?([2-6]))?[);/ ]'=>[
                    'name'=>'LUXURY $1',
                ],
                'SENSUELLE(?:[ _-]?([2-6]))?[);/ ]'=>[
                    'name'=>'SENSUELLE $1',
                ],
                'VICTORY(?:[ _-]?([2-6]))?[);/ ]'=>[
                    'name'=>'VICTORY $1',
                ],

                'Surfing Tab ([^;/]+) Build'=>[
                    'name'=>'SURFING TAB $1',
                    'category'=>'tablet',
                ],
                'Surfing Tab ([^;/]+)[);/ ]'=>[
                    'name'=>'SURFING TAB $1',
                    'category'=>'tablet',
                ],
            ]
        ],     

        // Vinsoc
        '(XA Pro) Build'   =>  [
            'name'=>'Vinsoc',
            'category'=>'smartphone',
            'sub'=>[
                '(XA Pro) Build'=>[
                    'name'=>'$1'
                ]
            ]
        ],

        // Bird
        'BIRD[\-. _]([^;/]+)'   =>  [
            'name'=>'Bird',
            'category'=>'feature phone',
            'sub'=>[
                'BIRD[\-. _]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'BIRD[\-. _]([^;/]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Becker
        'Becker-([a-z0-9]+)'   =>  [
            'name'=>'Becker',
            'category'=>'feature phone',
            'sub'=>[
                'Becker-([a-z0-9]+)'=>[
                    'name'=>'$1'
                ]
            ]
        ],

        // Beeline
        'Beeline'   =>  [
            'name'=>'Beeline',
            'category'=>'smartphone',
            'sub'=>[
                'Beeline_Pro_6'=>[
                    'name'=>'Pro 6',
                ],
            ]
        ],
                

        // Beetel
        'Beetel ([a-z0-9]+)'   =>  [
            'name'=>'Beetel',
            'category'=>'feature phone',
            'sub'=>[
                'Beetel ([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // BenQ-Siemens
        'BENQ-SIEMENS - ([a-z0-9]+)'   =>  [
            'name'=>'BenQ-Siemens',
            'category'=>'feature phone',
            'sub'=>[
                'BENQ-SIEMENS - ([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // BenQ
        'BENQ(?:[ \-])?([a-z0-9]+)'   =>  [
            'name'=>'BenQ',
            'category'=>'feature phone',
            'sub'=>[
                'BENQ(?:[ \-])?([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Blaupunkt
        'Blaupunkt|Atlantis[_ ](?:1001A|1010A|A10\.G402)|Discovery[_ ](?:111C|1000C|1001A?)|Endeavour[_ ](?:785|101[GLM]|1000|1001|101[03]|1100)|Polaris[_ ]803'   =>  [
            'name'=>'Blaupunkt',
            'category'=>'tablet',
            'sub'=>[
                'Discovery[_ ]111C'=>[
                    'name'=>'Discovery 111C',
                ],
                'Discovery[_ ]1000C'=>[
                    'name'=>'Discovery 1000C',
                ],
                'Discovery[_ ]1001A'=>[
                    'name'=>'Discovery 1001A',
                ],
                'Discovery[_ ]1001'=>[
                    'name'=>'Discovery 1001',
                ],
                'Endeavour[_ ](101[GLM]|785|100[01]|101[03]|1100)'=>[
                    'name'=>'Endeavour $1',
                ],
                'Polaris[_ ](803)'=>[
                    'name'=>'Polaris $1',
                ],
                'Atlantis[_ ](1001A|1010A|A10\.G402)'=>[
                    'name'=>'Atlantis $1',
                ],
                'Blaupunkt (SL 0[24]|SM 01)'=>[
                    'name'=>'$1',
                    'category'=>'smartphone',
                ],
            ]
        ],
                

        // Bmobile
        'Bmobile[_ ]|AX-?([1-9][0-9]{2,3}[eEO+]?|7OO)'   =>  [
            'name'=>'Bmobile',
            'category'=>'smartphone',
            'sub'=>[
                'AX-?([1-9][0-9]{2,3}[eEO+]?)'=>[
                    'name'=>'AX$1',
                ],
                'AX7OO'=>[
                    'name'=>'AX700',
                ],
                'Bmobile[_ ]([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                'Bmobile[_ ]([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // bq
        'Aquaris|bq [^/;]+ Build|BQS-4007'   =>  [
            'name'=>'bq',
            'category'=>'tablet',
            'sub'=>[
                'BQS-4007'=>[
                    'name'=>'Valencia',
                    'category'=>'smartphone',
                ],
                '(?:bq )?(Aquaris[^/;]*) Build'=>[
                    'name'=>'$1',
                    'category'=>'smartphone',
                ],
                'Aquaris M8'=>[
                    'name'=>'Aquaris M8',
                ],
                'Aquaris (E(4.5|[56])|M(5|10)|U2 Lite|U2|U (Lite|Plus)|V Plus|X5 Plus|X5|X Pro|[CMUVX])'=>[
                    'name'=>'Aquaris $1',
                    'category'=>'smartphone',
                ],
                'bq ([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Bush
        'Bush[ _-]'   =>  [
            'name'=>'Bush',
            'category'=>'smartphone',
            'sub'=>[
                'BUSH ([^;/]+)Tablet Build'=>[
                    'name'=>'$1Tablet',
                    'category'=>'tablet',
                ],
                'BUSH ([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // CAGI
        'CAGI-'   =>  [
            'name'=>'CAGI',
            'category'=>'smartphone',
            'sub'=>[
                'CAGI-OMEGA'=>[
                    'name'=>'Omega',
                ],
                'CAGI-([a-z0-9_\-]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Capitel
        'Capitel-([a-z0-9]+)'   =>  [
            'name'=>'Capitel',
            'category'=>'feature phone',
            'sub'=>[
                'Capitel-([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Captiva
        'Captiva[ _-]([^;/]+) Build'   =>  [
            'name'=>'Captiva',
            'category'=>'tablet',
            'sub'=>[
                'Captiva[ _-]([^;/]+) Build'=>[
                    'name'=>'Pad $1',
                ],
            ]
        ],

        // Casio
        '(C811|C7[57]1)(?: 4G)?[);/ ]'   =>  [
            'name'=>'Casio',
            'category'=>'smartphone',
            'sub'=>[
                'C751[);/ ]'=>[
                    'name'=>"G'zOne Ravine",
                ],
                'C771[);/ ]'=>[
                    'name'=>"G'zOne Commando",
                ],
                'C811 4G[);/ ]'=>[
                    'name'=>"G'zOne Commando 4G LTE",
                ],
            ]
        ],
                

        // Cat
        'Cat ?(tablet|stargate|nova)|B15Q'   =>  [
            'name'=>'Cat',
            'category'=>'tablet',
            'sub'=>[
                'B15Q'=>[
                    'name'=>'B15Q',
                    'category'=>'smartphone',
                ],
                'Cat ?(?:tablet)? ?((?:Galactica|Nova|StarGate|PHOENIX)[^/;]*) Build'=>[
                    'name'=>'$1',
                ],
                'Cat ?tablet'=>[
                    'name'=>'Nova',
                ],
            ]
        ],
                

        // Carrefour
        'CT(?:10[0123]0|7[12]0|820)(?:W|FR)?[);/ ]'   =>  [
            'name'=>'Carrefour',
            'category'=>'tablet',
            'sub'=>[
                'CT820'=>[
                    'name'=>'Touch Tablet Neo2',
                ],
                'CT(10[0123]0(?:W|FR)?)'=>[
                    'name'=>'CT$1',
                ],
                'CT(7[12]0(?:W|FR)?)'=>[
                    'name'=>'CT$1',
                ],
            ]
        ],
                

        // Celkon
        'Celkon'   =>  [
            'name'=>'Celkon',
            'category'=>'smartphone',
            'sub'=>[
                'Celkon[ _*](C[78]20)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'Celkon[ _*](CT[^;/]+) Build'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'Celkon[ _*]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Celkon[\. _*]([^;/\)]+)[\)/]'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Changhong
        'Changhong'   =>  [
            'name'=>'Changhong',
            'category'=>'tv',
            'sub'=>[
                'Changhong-([^);/]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Cherry Mobile
        'Cherry|Flare([ _])?(2X|4|A[123]|J[1235]|P[13]|S[456]|X2)|Flare S Play|Flare_HD_MAX|FLARE LITE|Flare XL Plus|Fusion Bolt|OMEGA HD 4'   =>  [
            'name'=>'Cherry Mobile',
            'category'=>'smartphone',
            'sub'=>[
                'Cherry(?: ?Mobile)?[ _]?([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                '(Flare2X)'=>[
                    'name'=>'$1',
                ],
                'Flare_HD_MAX'=>[
                    'name'=>'Flare HD Max',
                ],
                'FLARE LITE'=>[
                    'name'=>'Flare Lite',
                ],
                'Flare S Play'=>[
                    'name'=>'Flare S Play',
                ],
                'Flare XL Plus'=>[
                    'name'=>'Flare XL Plus',
                ],
                'Flare[ _](A2|J3|P1|S[46])[ _]Lite'=>[
                    'name'=>'Flare $1 Lite',
                ],
                'Flare[ _](J[12]|S5)[ _]mini'=>[
                    'name'=>'Flare $1 Mini',
                ],
                'Flare J2S'=>[
                    'name'=>'Flare J2s',
                ],
                'Flare S4 Max LTE'=>[
                    'name'=>'Flare S4 Max LTE',
                ],
                'Flare S4 Max'=>[
                    'name'=>'Flare S4 Max',
                ],
                'FlareS5LiteDTV '=>[
                    'name'=>'Flare S5 Lite DTV',
                ],
                'Flare_S6_Plus'=>[
                    'name'=>'Flare S6 Plus',
                ],
                'FLARE S6 POWER'=>[
                    'name'=>'Flare S6 Power',
                ],
                'Flare(?:[ _])?(4|A[13]|J[135]|P[13]|S4|X2)'=>[
                    'name'=>'Flare $1',
                ],
                'OMEGA HD 4'=>[
                    'name'=>'Omega HD 4',
                ],
                '(Fusion Bolt)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
            ]
        ],
                

        // China Mobile
        '(M812C|1501_M02|9930i|A1303|A309W|M651CY) Build'   =>  [
            'name'=>'China Mobile',
            'category'=>'smartphone',
            'sub'=>[
                'M651CY'=>[
                    'name'=>'A3',
                ],
                '(M812C|1501_M02|9930i|A1303|A309W)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Comio
        'Comio|CT701G PLUS|CT701W|GT100'   =>  [
            'name'=>'Comio',
            'category'=>'smartphone',
            'sub'=>[
                'GT100'=>[
                    'name'=>'GT100',
                    'category'=>'tablet',
                ],
                'CT701W'=>[
                    'name'=>'CT701W',
                    'category'=>'tablet',
                ],
                'CT701G PLUS'=>[
                    'name'=>'CT701G Plus',
                    'category'=>'tablet',
                ],

                'Comio[ _-]?([^;/)]+) Build'=>[
                    'name'=>'$1',
                ],
                'Comio[ _-]?([^;/)]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Compal
        'Compal-[a-z0-9]+'   =>  [
            'name'=>'Compal',
            'category'=>'feature phone',
            'sub'=>[
                'Compal-[a-z0-9]+'=>[
                    'name'=>'$1'
                ]
            ]
        ],

        // ComTrade Tesla
        'Tesla|Impulse 7.85 3G|Smartphone_6.1|SP(?:6.2|6.2_Lite)|TTL(?:713G|8)'   =>  [
            'name'=>'ComTrade Tesla',
            'category'=>'smartphone',
            'sub'=>[
                'TeslaEvo5.0'=>[
                    'name'=>'Evo 5.0',
                ],
                '(Gravity 9.7 SHD)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                '(Impulse 7.85 3G)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'Tesla_SP([^/;]+)L Build'=>[
                    'name'=>'Smartphone $1 Lite',
                ],
                'Smartphone_6.1'=>[
                    'name'=>'Smartphone 6.1',
                ],
                'SP6.2_Lite'=>[
                    'name'=>'Smartphone 6.2 Lite',
                ],
                'Tesla_SP([^/;]+) Build'=>[
                    'name'=>'Smartphone $1',
                ],
                'SP([^/;]+) Build'=>[
                    'name'=>'Smartphone $1',
                ],
                'Smartphone ([36])'=>[
                    'name'=>'Smartphone $1',
                ],
                'Tesla_Tablet_785'=>[
                    'name'=>'7.85"',
                    'category'=>'tablet',
                ],
                'TTH7'=>[
                    'name'=>'H7',
                    'category'=>'tablet',
                ],
                'TTL7 Build'=>[
                    'name'=>'L7',
                    'category'=>'tablet',
                ],
                'Tesla_Tablet_L7_3G'=>[
                    'name'=>'L7 3G',
                    'category'=>'tablet',
                ],
                '(L7.1)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'TTL713G'=>[
                    'name'=>'L7.1 3G',
                    'category'=>'tablet',
                ],
                '(L7 Quad) Build'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                '(L7 Quad Lite)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'TTL8 Build'=>[
                    'name'=>'L8',
                    'category'=>'tablet',
                ],
                '(L8.1)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'TESLA_TABLET_M7'=>[
                    'name'=>'M7',
                    'category'=>'tablet',
                ],
                'Tesla_Tablet_M8'=>[
                    'name'=>'M8',
                    'category'=>'tablet',
                ],
            ]
        ],
                
        // ConCorde
        'ConCorde ([^/;]+) Build'   =>  [
            'name'=>'ConCorde',
            'category'=>'smartphone',
            'sub'=>[
                'ConCorde Tab ?([^/;]+) Build'=>[
                    'name'=>'Tab $1',
                    'category'=>'tablet',
                ],
                'ConCorde ReadMan ?([^/;]+) Build'=>[
                    'name'=>'ReadMan $1',
                    'category'=>'tablet',
                ],
                'ConCorde ([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Condor
        '(?:PGN\-?[456][012][0-9]|PHS\-601|Plume L1)[;/) ]|CTAB[^/;]+ Build'   =>  [
            'name'=>'Condor',
            'category'=>'smartphone',
            'sub'=>[
                'CTAB([^/;]+) Build'=>[
                    'name'=>'CTAB $1',
                    'category'=>'tablet',
                ],
                'PHS\-601'=>[
                    'name'=>'C8',
                ],
                'PGN\-?403'=>[
                    'name'=>'C4+ Noir',
                ],
                'PGN\-?404'=>[
                    'name'=>'C7 Mini',
                ],
                'PGN\-?409'=>[
                    'name'=>'Plume P4',
                ],
                'PGN\-?504'=>[
                    'name'=>'C5',
                ],
                'PGN\-?505'=>[
                    'name'=>'C8S',
                ],
                'PGN\-?506'=>[
                    'name'=>'C7',
                ],
                'PGN\-?507'=>[
                    'name'=>'Allure A9',
                ],
                'PGN\-?508'=>[
                    'name'=>'C6+',
                ],
                'PGN\-?509'=>[
                    'name'=>'C6 Pro',
                ],
                'PGN\-?511'=>[
                    'name'=>'Allure A9 Plus',
                ],
                'PGN\-?513'=>[
                    'name'=>'Griffe G4',
                ],
                'PGN\-?514'=>[
                    'name'=>'Plume P7',
                ],
                'PGN\-?515'=>[
                    'name'=>'Plume P4 Pro',
                ],
                'PGN\-?516'=>[
                    'name'=>'Plume P5',
                ],
                'PGN\-?51[78]'=>[
                    'name'=>'Plume P6',
                ],
                'PGN\-?521'=>[
                    'name'=>'Griffe G4 Plus',
                ],
                'PGN\-?522'=>[
                    'name'=>'P6 Plus',
                ],
                'PGN\-?523'=>[
                    'name'=>'P7 Plus',
                ],
                'PGN\-?527'=>[
                    'name'=>'Plume P4 Plus',
                ],
                'PGN\-?528'=>[
                    'name'=>'Plume P6 Pro Lte',
                ],
                'PGN\-?605'=>[
                    'name'=>'Plume P8',
                ],
                'PGN\-?606'=>[
                    'name'=>'Allure A55',
                ],
                'PGN\-?607'=>[
                    'name'=>'Allure A100',
                ],
                'PGN\-?608'=>[
                    'name'=>'Allure A55 Slim',
                ],
                'PGN\-?609'=>[
                    'name'=>'Allure A100 Lite',
                ],
                'PGN\-?610'=>[
                    'name'=>'Plume P8 Lite',
                ],
                'PGN\-?611'=>[
                    'name'=>'Allure A8',
                ],
                'PGN\-?612'=>[
                    'name'=>'Allure A8 Plus',
                ],
                'PGN\-?613'=>[
                    'name'=>'Allure A55 Plus',
                ],
                'Plume L1'=>[
                    'name'=>'Plume L1',
                ],
                'PGN\-?([0-9]{3})'=>[
                    'name'=>'PGN-$1',
                ],
            ]
        ],
                

        // Coolpad
        '(?:YL-)?Coolpad|8190Q[ ;/\)]|(8295|5860S) Build|CP8676_I0[23] Build|CP8298_I00 Build|REVVLPLUS C3701A|VCR-I0'   =>  [
            'name'=>'Coolpad',
            'category'=>'smartphone',
            'sub'=>[
                'VCR-I0'=>[
                    'name'=>'Cool Play 6',
                ],
                'REVVLPLUS C3701A'=>[
                    'name'=>'REVVL Plus',
                    'category'=>'phablet',
                ],
                '8190Q[ ;/\)]'=>[
                    'name'=>'8190Q',
                ],
                '(5860S|8295) Build'=>[
                    'name'=>'$1',
                ],
                'CP8676_I02 Build'=>[
                    'name'=>'Note 3',
                ],
                'CP8676_I03 Build'=>[
                    'name'=>'Note 3 Plus',
                ],
                'CP8298_I00 Build'=>[
                    'name'=>'Note 3 Lite',
                ],
                '(?:YL-)?Coolpad[ _\-]?([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                '(?:YL-)?Coolpad[ _\-]?([a-z0-9\-]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Cricket
        'Cricket-([a-z0-9]+)'   =>  [
            'name'=>'Crosscall',
            'category'=>'feature phone',
            'sub'=>[
                'Cricket-([a-z0-9]+)'=>[
                    'name'=>'$1'
                ]
            ]
        ],


        // Crius
        '(Q7A\+?)[);/ ]'   =>  [
            'name'=>'Crius Mea',
            'category'=>'tablet',
            'sub'=>[
                '(Q7A\+?)[);/ ]'=>[
                    'name'=>'$1'
                ]
            ]
        ],

        // Crosscall
        'Crosscall|ODYSSEY_Plus|Odyssey S1|Trekker-[MSX][1234]|Action-X3'   =>  [
            'name'=>'Crosscall',
            'category'=>'smartphone',
            'sub'=>[
                'Action-X3'=>[
                    'name'=>'Action-X3',
                ],
                'Crosscall ([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'ODYSSEY_Plus'=>[
                    'name'=>'ODYSSEY+',
                ],
                'Odyssey S1'=>[
                    'name'=>'ODYSSEY S1',
                ],
                'Trekker-([MSX][1234](?: Core)?)'=>[
                    'name'=>'Trekker-$1',
                ],
            ]
        ],
                

        // Cube
        '(<!myPhone ?)Cube|(U[0-9]+GT|K8GT)'   =>  [
            'name'=>'Cube',
            'category'=>'tablet',
            'sub'=>[
                'U27GT'=>[
                    'name'=>'Talk 8',
                ],
                'U55GT'=>[
                    'name'=>'Talk 79',
                ],
                'U65GT'=>[
                    'name'=>'Talk 9X',
                ],

                '(U[0-9]+GT[^;/]*) Build'=>[
                    'name'=>'$1',
                ],
                '(U[0-9]+GT(?:[0-9]|[\-_][a-z]+)?)'=>[
                    'name'=>'$1',
                ],
                '(K8GT)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // CUBOT
        'CUBOT'   =>  [
            'name'=>'CUBOT',
            'category'=>'smartphone',
            'sub'=>[
                'CHEETAH 2'=>[
                    'name'=>'Cheetah 2',
                ],
                'DINOSAUR'=>[
                    'name'=>'Dinosaur',
                ],
                'KING KONG'=>[
                    'name'=>'King Kong',
                ],
                'CUBOT_MANITO'=>[
                    'name'=>'Manito',
                ],
                'MAX'=>[
                    'name'=>'Max',
                ],
                'NOTE Plus'=>[
                    'name'=>'Note Plus',
                ],
                'CUBOT_NOTE_S'=>[
                    'name'=>'Note S',
                ],
                'CUBOT_NOVA'=>[
                    'name'=>'Nova',
                ],
                'CUBOT_POWER'=>[
                    'name'=>'Power',
                ],
                'CUBOT_X18_Plus'=>[
                    'name'=>'X18 Plus',
                ],
                'CUBOT[ _](H3|J3|P7|P20|C6W|X18)'=>[
                    'name'=>'$1',
                ],
                'CUBOT ([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                '([^;/]+) Build/CUBOT'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Concord
        'Concord[ _-]|Flyfix 6|C-721[);/ ]'   =>  [
            'name'=>'Concord',
            'category'=>'smartphone',
            'sub'=>[
                'M10'=>[
                    'name'=>'M10',
                ],
                'Flyfix 6'=>[
                    'name'=>'Flyfix 6',
                ],
                'C-721'=>[
                    'name'=>'Flyfix Q',
                    'category'=>'tablet',
                ],
            ]
        ],

        // Crescent
        'WING 5|WING9|Venus[ _][14]'   =>  [
            'name'=>'Crescent',
            'category'=>'smartphone',
            'sub'=>[
                'WING 5'=>[
                    'name'=>'Wing 5',
                ],
                'WING9'=>[
                    'name'=>'Wing 9',
                ],
                'Venus[ _]([14])'=>[
                    'name'=>'Venus $1',
                ],
            ]
        ],

        // Cyrus
        'Cyrus[ _-]'   =>  [
            'name'=>'Cyrus',
            'category'=>'smartphone',
            'sub'=>[
                'Cyrus[ _-]?([^;/)]+) Build'=>[
                    'name'=>'$1',
                ],
                'Cyrus[ _-]?([^;/)]+)[);/ ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Datang
        'DATANG'   =>  [
            'name'=>'Datang',
            'category'=>'smartphone',
            'sub'=>[
                '(?:DATANG[ _-])+([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                '(?:DATANG[ _-])+([^;/)]+)[;/)]'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Datsun
        'DATSUN'   =>  [
            'name'=>'Datsun',
            'category'=>'smartphone',
            'sub'=>[
                'DATSUN_D5500'=>[
                    'name'=>'D5500',
                ],
            ]
        ],
                

        // Danew
        'Dslide ?([^;/]+) Build|Konnect_(504|601)'   =>  [
            'name'=>'Danew',
            'category'=>'smartphone',
            'sub'=>[
                'Konnect_(504|601)'=>[
                    'name'=>'Konnect $1',
                ],
                'Dslide ?([^;/]+) Build'=>[
                    'name'=>'DSlide $1',
                    'category'=>'tablet',
                ],
            ]
        ],

        // Denver Electronics
        '(TA[CDQ]-[0-9]+)'   =>  [
            'name'=>'Denver',
            'category'=>'tablet',
            'sub'=>[
                '(TA[CDQ]-[0-9]+)'=>[
                    'name'=>'$1'
                ]
            ]
        ],


        // Dell
        'Dell[^a-z]|Venue|XCD35'   =>  [
            'name'=>'Dell',
            'category'=>'smartphone',
            'sub'=>[
                'XCD35'=>[
                    'name'=>'XCD35',
                ],
                '(?:Dell )?(Streak|Venue) ?([^/;]*) Build'=>[
                    'name'=>'$1 $2',
                    'category'=>'tablet',
                ],
                'Dell; ((?:Streak|Venue)[^;/\)]*)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'Dell; ([^;/\)]+)'=>[
                    'name'=>'$1',
                ],
                'Dell[ _\-]([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Desay
        'Desay'   =>  [
            'name'=>'Desay',
            'category'=>'smartphone',
            'sub'=>[
                'Desay[ _-]?([^;/)]+) Build'=>[
                    'name'=>'$1',
                ],
                'Desay[ _-]?([^;/)]+)[);/ ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // DEXP
        'DEXP|(?:Ursus|Ixion)[ _]([^;/]+) Build|H135[ _]Build'   =>  [
            'name'=>'DEXP',
            'category'=>'smartphone',
            'sub'=>[
                'Ixion[_ ]([^;/]+) Build'=>[
                    'name'=>'Ixion $1',
                ],

                'Ursus ([^;/]+) Build'=>[
                    'name'=>'Ursus $1',
                    'category'=>'tablet',
                ],

                'H135[ _]Build'=>[
                    'name'=>'Atlas',
                    'category'=>'desktop',
                ],

                'DEXP[ _]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'DEXP[ _]([^);/]+)[);/ ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],


        // Dbtel
        'DBTEL(?:[\-/])?([a-z0-9]+)'   =>  [
            'name'=>'Dbtel',
            'category'=>'feature phone',
            'sub'=>[
                'DBTEL(?:[\-/])?([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
        'Desay'   =>  [
            'name'=>'Desay',
            'category'=>'smartphone',
            'sub'=>[
                'Desay[ _-]?([^;/)]+) Build'=>[
                    'name'=>'$1',
                ],
                'Desay[ _-]?([^;/)]+)[);/ ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],
        // Dialog
        'Dialog ?([^;/]+) Build'   =>  [
            'name'=>'Dialog',
            'category'=>'smartphone',
            'sub'=>[
                'Dialog ?([^;/]+) Build'=>[
                    'name'=>'$1',
                ]
            ]
        ],

        // Dicam
        'DICAM-([a-z0-9]+)'   =>  [
            'name'=>'Dicam',
            'category'=>'feature phone',
            'sub'=>[
                'DICAM-([a-z0-9]+)'=>[
                    'name'=>'$1',
                ]
            ]
        ],

        // Digicel
        'DIGICEL'   =>  [
            'name'=>'Digicel',
            'category'=>'smartphone',
            'sub'=>[
                'DL810'=>[
                    'name'=>'DL810',
                ],
                'DIGICEL ([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Digiland
        'DL1008M'   =>  [
            'name'=>'Digiland',
            'category'=>'smartphone',
            'sub'=>[
                'DL1008M'=>[
                    'name'=>'DL1008M',
                    'category'=>'tablet',
                ],
            ]
        ],

        // Digma
        'Digma[_ ]([^;/]+) Build|HIT HT707[10]MG|CITI 1902 3G|(CITI (?:[A-Z0-9]+) 3G) C[ST]500[67]PG|iDrQ10 3G|iDxD8 3G|iDnD7|HIT 4G HT7074ML|IDX5|(iDx10|iDx7)|MVM900H(?:WZ|C)|MVM908HCZ|iDxD10 3G|(iDxD[45]|iDxQ5)|iDxD7[_ ]3G|PS604M|PT452E|Linx A400 3G LT4001PG|Linx C500 3G LT5001PG|Linx PS474S|NS6902QL|NS9797MG|((?:Optima|Platina|Plane)[ _](?:[EM])?(?:[0-9\.ST]+|Prime)(?:[ _][43]G)?)|(VOX[ _](?:[0-9\.A-Z]+)[_ ][43]G)'   =>  [
            'name'=>'Digma',
            'category'=>'smartphone',
            'sub'=>[
                'HIT HT707[10]MG'=>[
                    'name'=>'HIT 3G',
                    'category'=>'tablet',
                ],
                'iDx5'=>[
                    'name'=>'iDx5',
                ],
                'iDxD10 3G'=>[
                    'name'=>'iDxD10 3G',
                    'category'=>'tablet',
                ],
                '(VOX[ _](?:[0-9\.A-Z]+)[_ ][43]G)'=>[
                    'name'=>'$1',
                ],
                'PS604M'=>[
                    'name'=>'Linx 6.0',
                ],
                '(Linx A400 3G) LT4001PG'=>[
                    'name'=>'$1',
                ],
                '(Linx C500 3G) LT5001PG'=>[
                    'name'=>'$1',
                ],
                '(Linx PS474S)'=>[
                    'name'=>'$1',
                ],
                'PT452E'=>[
                    'name'=>'Linx 4.5',
                ],
                'MVM900H(?:WZ|C)'=>[
                    'name'=>'iDx8',
                    'category'=>'tablet',
                ],
                'MVM908HCZ'=>[
                    'name'=>'iDx9',
                    'category'=>'tablet',
                ],
                '(iDxD7[_ ]3G)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                '(iDx10|iDx7)'=>[
                    'name'=>'$1',
                ],
                '(iDxD[45]|iDxQ5)'=>[
                    'name'=>'$1',
                ],
                'HIT 4G HT7074ML'=>[
                    'name'=>'HIT 4G',
                    'category'=>'tablet',
                ],
                '(CITI 1902 3G)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                '(CITI (?:[A-Z0-9]+) 3G) C[ST]500[67]PG'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'iDxD8 3G'=>[
                    'name'=>'D-Plane2 8',
                    'category'=>'tablet',
                ],
                '(iDrQ10 3G|iDnD7)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'NS6902QL'=>[
                    'name'=>'Platina 7.2 4G',
                    'category'=>'tablet',
                ],
                'NS9797MG'=>[
                    'name'=>'Platina 7.2 3G',
                    'category'=>'tablet',
                ],
                '((?:Optima|Platina|Plane)[ _](?:[EM])?(?:[0-9\.ST]+|Prime)(?:[ _][43]G)?)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'Digma[_ ]([^;/]+) Build'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
            ]
        ],

        // DoCoMo
        'DoCoMo|\;FOMA|KGT/1\.0'   =>  [
            'name'=>'DoCoMo',
            'category'=>'feature phone',
            'sub'=>[
                'DoCoMo/[12]\.0[/ ]([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                '([a-z0-9]+)(?:_W)?\;FOMA'=>[
                    'name'=>'$1',
                ],
                'KGT/1\.0 ([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Doogee
        'DOOGEE[ _-]|Valencia2_Y100pro|X5max(?:[_ ]PRO)?|(BIGBOY|COLLO[23]?|DAGGER|DISCOVERY2?|FIND|HOTWIND|LATTE|MAX|MINT|MOON|PIXELS|RAINBOX|TURBO|VALENCIA|VOYAGER2?|TITANS2?)[ -_](DG[0-9]+C?)[);/ ]|BL[57]000[);/ ]|BL12000'   =>  [
            'name'=>'Doogee',
            'category'=>'smartphone',
            'sub'=>[
                'Valencia2_Y100pro'=>[
                    'name'=>'Valencia2 Y100pro',
                ],
                'BL5000'=>[
                    'name'=>'BL5000',
                ],
                'BL7000'=>[
                    'name'=>'BL7000',
                ],
                'BL12000 PRO'=>[
                    'name'=>'BL12000 Pro',
                ],
                'BL12000'=>[
                    'name'=>'BL12000',
                ],
                '(X5max(?:[_ ]PRO)?)'=>[
                    'name'=>'$1',
                ],
                '(?:DOOGEE[ _-])?(BIGBOY|COLLO[23]?|DAGGER|DISCOVERY2?|FIND|HOTWIND|LATTE|MAX|MINT|MOON|PIXELS|RAINBOX|TURBO|VALENCIA|Valencia2_Y100pro|VOYAGER2?|TITANS2?)[ -_](DG[0-9]+C?)[);/ ]'=>[
                    'name'=>'$1 $2',
                ],
                'DOOGEE[ _-]([^);/]+) Build'=>[
                    'name'=>'$1',
                ],
                'DOOGEE[ _-]([^);/]+)[);/ ]'=>[
                    'name'=>'$1',
                ],

                // Doov
                '(?:Doov-)?Doov[ _]'   =>  [
                    'name'=>'Doov',
                    'category'=>'smartphone',
                    'sub'=>[
                    ]
                ],
                '(?:Doov-)?Doov[ _]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                '(?:Doov-)?Doov[ _]([^);/]+)[);/ ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Dopod
        'Dopod(?: )?([a-z0-9]+)'   =>  [
            'name'=>'Dopod',
            'category'=>'feature phone',
            'sub'=>[
                'Dopod(?: )?([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
        'DL1008M'   =>  [
            'name'=>'Digiland',
            'category'=>'smartphone',
            'sub'=>[
                'DL1008M'=>[
                    'name'=>'DL1008M',
                    'category'=>'tablet',
                ],
            ]
        ],

        // Doro
        'Doro'   =>  [
            'name'=>'Doro',
            'category'=>'smartphone',
            'sub'=>[
            ]
        ],
        'Doro[ _-]?([^;/)]+) Build'=>[
            'name'=>'$1',
        ],
        'Doro[ _-]([0-9a-z]+)'=>[
            'name'=>'$1',
        ],

        // Dune HD
        'DuneHD'   =>  [
            'name'=>'Dune HD',
            'category'=>'tv',
            'sub'=>[
                'DuneHD/\d.\d \([a-z]+__([a-z0-9_-]+);'=>[
                    'name'=>'$1',
                ],
                'DuneHD/\d.\d \(([a-z0-9_-]+);'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // DNS
        '(?:DNS|AirTab)[ _\-]([^;/]+)Build|S4505M[);/ ]'   =>  [
            'name'=>'DNS',
            'category'=>'smartphone',
            'sub'=>[
                'S4505M[);/ ]'=>[
                    'name'=>'S4505M',
                ],
                'AirTab[ _\-]([^;/]+)Build'=>[
                    'name'=>'AirTab $1',
                    'category'=>'tablet',
                ],
                'DNS[ _\-]([^;/]+)Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // E-Boda
        'E-Boda|Eclipse_(?:G400M|G500)'   =>  [
            'name'=>'E-Boda',
            'category'=>'smartphone',
            'sub'=>[
                'E-Boda ((?:Revo|Izzycomm|Essential|Intelligence|Supreme)[^/;]+) Build'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'Eclipse_(G400M|G500)'=>[
                    'name'=>'Eclipse $1',
                ],
                'E-Boda ([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Easypix
        'EasyPad|EasyPhone'   =>  [
            'name'=>'Easypix',
            'category'=>'smartphone',
            'sub'=>[
                '(EasyPhone[^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                '(EasyPad[^/;]+) Build'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
            ]
        ],
                

        // Ebest
        'EBEST'   =>  [
            'name'=>'EBEST',
            'category'=>'smartphone',
            'sub'=>[
                'EBEST[ _-]?([^;/)]+) Build'=>[
                    'name'=>'$1',
                ],
                'EBEST[ _-]?([^;/)]+)[);/ ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Echo Mobiles
        'ECHO[ _](HOLI|HORIZON|MAX|MOSS|NOTE|POWER|SMART)'   =>  [
            'name'=>'Echo Mobiles',
            'category'=>'smartphone',
            'sub'=>[
                'ECHO_HORIZON_LITE'=>[
                    'name'=>'HORIZON Lite',
                ],
                'ECHO_SMART_4G'=>[
                    'name'=>'SMART 4G',
                ],
                'ECHO[ _](HOLI|MAX|MOSS|NOTE|POWER|SMART)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // ECS
        '(?:TA10CA3|TM105A?|TR10CS1)[);/ ]'   =>  [
            'name'=>'ECS',
            'category'=>'tablet',
            'sub'=>[
                'TA10CA3[);/ ]'=>[
                    'name'=>'TA10CA3',
                ],
                'TR10CS1[);/ ]'=>[
                    'name'=>'TR10CS1',
                ],
                'TM105A[);/ ]'=>[
                    'name'=>'TM105A',
                ],
                'TM105[);/ ]'=>[
                    'name'=>'TM105',
                ],
            ]
        ],
                

        // EE
        'Hawk_from_EE'   =>  [
            'name'=>'EE',
            'category'=>'smartphone',
            'sub'=>[
                'Hawk_from_EE'=>[
                    'name'=>'Hawk',
                ],
            ]
        ],
                

        // Eks Mobility
        'S5LS|X4UPlus'   =>  [
            'name'=>'Eks Mobility',
            'category'=>'smartphone',
            'sub'=>[
                'S5LS'=>[
                    'name'=>'S5LS',
                ],
                'X4UPlus'=>[
                    'name'=>'X4U Plus',
                ],
            ]
        ],
                

        // Elephone
        'Elephone|P6000( ?Pro| ?Plus|\+| ?02)? Build'   =>  [
            'name'=>'Elephone',
            'category'=>'smartphone',
            'sub'=>[
                'Elephone[ _\-]([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                'P6000(\+| ?Plus) Build'=>[
                    'name'=>'P6000 Plus',
                ],
                'P6000 02 Build'=>[
                    'name'=>'P6000 02',
                ],
                'P6000 ?Pro Build'=>[
                    'name'=>'P6000 Pro',
                ],
                '(P[68]000)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Energy Sistem
        'ENERGY[ _-]?([^;/]+) Build'   =>  [
            'name'=>'Energy Sistem',
            'category'=>'tablet',
            'sub'=>[
                'ENERGY[ _-]?([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Ericy
        'Ericy-([a-z0-9]+)'   =>  [
            'name'=>'Ericy',
            'category'=>'feature phone',
            'sub'=>[
                'Ericy-([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Essential
        'PH-1[ )]'   =>  [
            'name'=>'Essential',
            'category'=>'smartphone',
            'sub'=>[
            ]
        ],
        'PH-1[ )]'=>[
            'name'=>'PH-1',
        ],

        // Eton
        'Eton'   =>  [
            'name'=>'Eton',
            'category'=>'smartphone',
            'sub'=>[
                'Eton[ _-]?([^;/)]+) Build'=>[
                    'name'=>'$1',
                ],
                'Eton[ _-]?([^;/)]+)[);/ ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Essentielb
        '(Wooze[_ ](?:I5|L|XL)) Build'   =>  [
            'name'=>'Essentielb',
            'category'=>'smartphone',
            'sub'=>[
                '(Wooze[_ ](?:I5|L|XL)) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Rikomagic
        'MK(80[28][^/;]*) Build'   =>  [
            'name'=>'Rikomagic',
            'category'=>'tv',
            'sub'=>[
                'MK(80[28][^/;]*) Build'=>[
                    'name'=>'MK$1',
                ],
            ]
        ],

        // Riviera
        'RIVIERA '   =>  [
            'name'=>'Riviera',
            'category'=>'smartphone',
            'sub'=>[
                'F23'=>[
                    'name'=>'F23',
                ],
            ]
        ],


        // Senseit
        'SENSEIT[ _]?([^;/)]+) Build'   =>  [
            'name'=>'Senseit',
            'category'=>'smartphone',
            'sub'=>[
                'SENSEIT[ _]?([^;/)]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Sony & Sony Ericsson (combined as they are mixed up)
        'Sony(?: ?Ericsson)?|SGP|Xperia|([456]0[12]|701)SO|C1[569]0[45]|C2[01]0[45]|C230[45]|C530[236]|C550[23]|C6[56]0[236]|C6616|C68(?:0[26]|[34]3)|C69(?:0[236]|16|43)|D200[45]|D21(?:0[45]|14)|D22(?:0[236]|12|43)|D230[2356]|D240[36]|D25(?:02|33)|D510[236]|D530[36]|D5316|D5322|D5503|D58[03]3|D65(?:0[23]|43|63)|D66[0345]3|D66[14]6|D6708|E(?:20[0345]3|2006|210[45]|2115|2124|230[36]|2312|23[356]3|530[36]|53[3456]3|5506|55[356]3|56[46305][36]|58[02]3|65[35]3|66[0358]3|68[358]3)|F311[12356]|F331[13]|F321[12356]|F5[13]21|F5122|F813[12]|F833[12]|G312[135]|G311[26]|G322[136]|G3212|G331[123]|G3412|G3416|G342[136]|G823[12]|G834[123]|G8[14]4[12]|H(?:3113|3123|3133|3213|3223|3311|3321|4113|4133|4213|4233|4311|4331|4413|4433|82[167]6|83[12]4|8416|9436)|(?:WT|LT|SO|ST|SK|MK)[0-9]+[a-z]+[0-9]*(?: Build|\))|X?L39H|XM50[ht]|W960|portalmmm/2\.0 K|S3[69]h|SOL2[246]|SOV3[1234567]|X10[ia]v?|E1[05][ai]v?|MT[0-9]{2}[a-z]? Build|SO-0(?:[12]C|[345]D|[234]E|[1235]F|[1234]G|[134]H|[1234]J|2K)|R800[aix]|LiveWithWalkman'   =>  [
            'name'=>'Sony',
            'category'=>'smartphone',
            'sub'=>[
                // SONY ERICSSON: explicit smartphone models
                '(?:Sony(?:Ericsson)?)?E10[ai]v?'=>[
                    'name'=>'Xperia X10 mini',
                ],
                '(?:Sony(?:Ericsson)?)?U20'=>[
                    'name'=>'Xperia X10 mini pro',
                ],
                '(?:Sony(?:Ericsson)?)?E15[ai]v?'=>[
                    'name'=>'Xperia X8',
                ],
                '(?:Sony(?:Ericsson)?)?(LT15[ai]?v?|SO-01C)'=>[
                    'name'=>'Xperia arc',
                ],
                '(?:Sony(?:Ericsson)?)?LT18[ai]v?'=>[
                    'name'=>'Xperia arc S',
                ],
                '(?:Sony(?:Ericsson)?)?MT11'=>[
                    'name'=>'Xperia neo V',
                ],
                '(?:Sony(?:Ericsson)?)?MT15'=>[
                    'name'=>'Xperia neo',
                ],
                '(?:Sony(?:Ericsson)?)?MT27'=>[
                    'name'=>'Xperia Sola',
                ],
                '(?:Sony(?:Ericsson)?)?MK16[ai]'=>[
                    'name'=>'Xperia pro',
                ],
                '(?:Sony(?:Ericsson)?)?ST15[ai]'=>[
                    'name'=>'Xperia mini',
                ],
                '(?:Sony(?:Ericsson)?)?ST17[ai]'=>[
                    'name'=>'Xperia active',
                ],
                '(?:Sony(?:Ericsson)?)?ST18[ai]'=>[
                    'name'=>'Xperia ray',
                ],
                '(?:Sony(?:Ericsson)?)?SK17[ai]?'=>[
                    'name'=>'Xperia mini pro',
                ],
                '(?:Sony(?:Ericsson)?)?X10[ai]v?'=>[
                    'name'=>'Xperia X10',
                ],
                '(?:Sony(?:Ericsson)?)M1'=>[
                    'name'=>'Aspen',
                ],
                '(?:Sony(?:Ericsson)?)?R800'=>[
                    'name'=>'Xperia PLAY',
                ],
                '(?:Sony(?:Ericsson)?)?WT19|LiveWithWalkman'=>[
                    'name'=>'Live with Walkman',
                ],

                // SONY ERICSSON: explicit feature phone models
                '(?:Sony(?:Ericsson)?)?CK13i'=>[
                    'name'=>'txt',
                    'category'=>'feature phone'

                ],
                '(?:Sony(?:Ericsson)?)?CK15[ai]'=>[
                    'name'=>'txt pro',
                    'category'=>'feature phone'
                ],
                '(?:Sony(?:Ericsson)?)?F100i'=>[
                    'name'=>'Jalou',
                    'category'=>'feature phone'
                ],
                '(?:Sony(?:Ericsson)?)?J105'=>[
                    'name'=>'Naite',
                    'category'=>'feature phone'
                ],
                '(?:Sony(?:Ericsson)?)?J108'=>[
                    'name'=>'Cedar',
                    'category'=>'feature phone'
                ],
                '(?:Sony(?:Ericsson)?)?J10'=>[
                    'name'=>'Elm',
                    'category'=>'feature phone'
                ],
                '(?:Sony(?:Ericsson)?)?J20'=>[
                    'name'=>'Hazel',
                    'category'=>'feature phone'
                ],
                '(?:Sony(?:Ericsson)?)?U10'=>[
                    'name'=>'Aino',
                    'category'=>'feature phone'
                ],
                '(?:Sony(?:Ericsson)?)?U100'=>[
                    'name'=>'Yari',
                    'category'=>'feature phone'
                ],
                '(?:Sony(?:Ericsson)?)?U1'=>[
                    'name'=>'Satio',
                    'category'=>'feature phone'
                ],
                '(?:Sony(?:Ericsson)?)?U5'=>[
                    'name'=>'Vivaz',
                    'category'=>'feature phone'
                ],
                '(?:Sony(?:Ericsson)?)?U8'=>[
                    'name'=>'Vivaz pro',
                    'category'=>'feature phone'
                ],
                '(?:Sony(?:Ericsson)?)?W20'=>[
                    'name'=>'Zylo',
                    'category'=>'feature phone'
                ],
                '(?:Sony(?:Ericsson)?)?W100'=>[
                    'name'=>'Spiro',
                    'category'=>'feature phone'
                ],
                '(?:Sony(?:Ericsson)?)?W150'=>[
                    'name'=>'Yendo',
                    'category'=>'feature phone'
                ],
                '(?:Sony(?:Ericsson)?)?W960'=>[
                    'name'=>'W960',
                    'category'=>'feature phone'
                ],
                '(?:Sony(?:Ericsson)?)?WT13'=>[
                    'name'=>'Mix Walkman',
                    'category'=>'feature phone'
                ],

                // SONY: explicit smartphone models
                'SO-04G'=>[
                    'name'=>'Xperia A4',
                ],
                '(?:Sony(?:Ericsson)?)?LT22i'=>[
                    'name'=>'Xperia P',
                ],
                '(?:Sony(?:Ericsson)?)?LT25i'=>[
                    'name'=>'Xperia V',
                ],
                '(?:Sony(?:Ericsson)?)?LT26ii'=>[
                    'name'=>'Xperia SL',
                ],
                '(?:Sony(?:Ericsson)?)?LT26i'=>[
                    'name'=>'Xperia S',
                ],
                '(?:Sony(?:Ericsson)?)?SO-02C'=>[
                    'name'=>'Xperia arco',
                ],
                '(?:Sony(?:Ericsson)?)?SO-03D'=>[
                    'name'=>'Xperia arco HD',
                ],
                '(?:Sony(?:Ericsson)?)?LT26w'=>[
                    'name'=>'Xperia arco S',
                ],
                '(?:Sony(?:Ericsson)?)?LT28[aih]'=>[
                    'name'=>'Xperia ion',
                ],
                '(?:Sony(?:Ericsson)?)?LT29i'=>[
                    'name'=>'Xperia TX',
                ],
                '(?:Sony(?:Ericsson)?)?LT30a'=>[
                    'name'=>'Xperia T LTE',
                ],
                '(?:Sony(?:Ericsson)?)?LT30p'=>[
                    'name'=>'Xperia T',
                ],
                '(?:Sony(?:Ericsson)?)?ST21[ia]2'=>[
                    'name'=>'Xperia tipo dual',
                ],
                '(?:Sony(?:Ericsson)?)?ST21[ia]'=>[
                    'name'=>'Xperia tipo',
                ],
                '(?:Sony(?:Ericsson)?)?ST23[ia]'=>[
                    'name'=>'Xperia miro',
                ],
                '(?:Sony(?:Ericsson)?)?ST25[ia]'=>[
                    'name'=>'Xperia U',
                ],
                '(?:Sony(?:Ericsson)?)?SOL22'=>[
                    'name'=>'Xperia UL',
                ],
                '(?:Sony(?:Ericsson)?)?ST26[ia]'=>[
                    'name'=>'Xperia J',
                ],
                '(?:Sony(?:Ericsson)?)?ST27[ia]'=>[
                    'name'=>'Xperia go',
                ],
                '(?:Sony(?:Ericsson)?)?C150[45]'=>[
                    'name'=>'Xperia E',
                ],
                '(?:Sony(?:Ericsson)?)?C160[45]'=>[
                    'name'=>'Xperia E Dual',
                ],
                '(?:Sony(?:Ericsson)?)?(?:E210[45]|E2115|E2124)'=>[
                    'name'=>'Xperia E4',
                ],
                '(?:Sony(?:Ericsson)?)?E20[05]3|E2006'=>[
                    'name'=>'Xperia E4G',
                ],
                '(?:Sony(?:Ericsson)?)?C190[45]'=>[
                    'name'=>'Xperia M',
                ],
                '(?:Sony(?:Ericsson)?)?C200[45]'=>[
                    'name'=>'Xperia M Dual',
                ],
                '(?:Sony(?:Ericsson)?)?C210[45]|S36h'=>[
                    'name'=>'Xperia L',
                ],
                '(?:Sony(?:Ericsson)?)?C230[45]|S39h'=>[
                    'name'=>'Xperia C',
                ],
                '(?:Sony(?:Ericsson)?)?C530[236]'=>[
                    'name'=>'Xperia SP',
                ],
                '(?:Sony(?:Ericsson)?)?C550[23]'=>[
                    'name'=>'Xperia ZR',
                ],
                '(?:Sony(?:Ericsson)?)?C650[236]'=>[
                    'name'=>'Xperia ZL',
                ],
                '(?:Sony(?:Ericsson)?)?(?:C66(?:0[236]|16)|SO-02E)'=>[
                    'name'=>'Xperia Z',
                ],
                '(?:Sony(?:Ericsson)?)?(?:C68(?:0[26]|[34]3)|XL39H|SOL24)'=>[
                    'name'=>'Xperia Z Ultra',
                    'category'=>'phablet',
                ],
                '(?:Sony(?:Ericsson)?)?(?:C69(?:0[236]|16|43)|L39H|SO-0[12]F)'=>[
                    'name'=>'Xperia Z1',
                ],
                '(?:Sony(?:Ericsson)?)?D200[45]'=>[
                    'name'=>'Xperia E1',
                ],
                '(?:Sony(?:Ericsson)?)?D21(?:0[45]|14)'=>[
                    'name'=>'Xperia E1 Dual',
                ],
                '(?:Sony(?:Ericsson)?)?D22(?:0[236]|43)'=>[
                    'name'=>'Xperia E3',
                ],
                '(?:Sony(?:Ericsson)?)?D2212'=>[
                    'name'=>'Xperia E3 Dual',
                ],
                '(?:Sony(?:Ericsson)?)?E20[34]3'=>[
                    'name'=>'Xperia E4g Dual',
                ],
                'H33[12]1'=>[
                    'name'=>'Xperia L2',
                ],
                'H43[13]1'=>[
                    'name'=>'Xperia L2 Dual',
                ],
                '(?:Sony(?:Ericsson)?)?D2302'=>[
                    'name'=>'Xperia M2 Dual',
                ],
                '(?:Sony(?:Ericsson)?)?D230[356]'=>[
                    'name'=>'Xperia M2',
                ],
                '(?:Sony(?:Ericsson)?)?D240[36]'=>[
                    'name'=>'Xperia M2 Aqua',
                ],
                '(?:Sony(?:Ericsson)?)?(?:E230[36]|E23[35]3)'=>[
                    'name'=>'Xperia M4 Aqua',
                ],
                '(?:Sony(?:Ericsson)?)?(?:E2312|E2363)'=>[
                    'name'=>'Xperia M4 Aqua Dual',
                ],
                '(?:Sony(?:Ericsson)?)?E56[05][36]'=>[
                    'name'=>'Xperia M5',
                ],
                '(?:Sony(?:Ericsson)?)?E56[436]3'=>[
                    'name'=>'Xperia M5 Dual',
                ],
                '(?:Sony(?:Ericsson)?)?D2502'=>[
                    'name'=>'Xperia C3 Dual',
                ],
                '(?:Sony(?:Ericsson)?)?D2533'=>[
                    'name'=>'Xperia C3',
                ],
                '(?:Sony(?:Ericsson)?)?E53[05]3|E5306'=>[
                    'name'=>'Xperia C4',
                ],
                '(?:Sony(?:Ericsson)?)?E53[0346]3'=>[
                    'name'=>'Xperia C4 Dual',
                ],
                '(?:Sony(?:Ericsson)?)?E5506|E5553'=>[
                    'name'=>'Xperia C5 Ultra',
                ],
                '(?:Sony(?:Ericsson)?)?E55[36]3'=>[
                    'name'=>'Xperia C5 Ultra Dual',
                ],
                '(?:Sony(?:Ericsson)?)?D510[236]'=>[
                    'name'=>'Xperia T3',
                ],
                '(?:Sony(?:Ericsson)?)?(?:D530[36]|D5316|XM50[ht])'=>[
                    'name'=>'Xperia T2 Ultra',
                    'category'=>'phablet',
                ],
                '(?:Sony(?:Ericsson)?)?D5322'=>[
                    'name'=>'Xperia T2 Ultra Dual',
                    'category'=>'phablet',
                ],
                '(?:Sony(?:Ericsson)?)?D5503'=>[
                    'name'=>'Xperia Z1 Compact',
                ],
                '(?:Sony(?:Ericsson)?)?(?:D58[03]3|SO-02G)'=>[
                    'name'=>'Xperia Z3 Compact',
                ],
                '(?:Sony(?:Ericsson)?)?(?:D65(?:0[23]|43)|SO-03F)'=>[
                    'name'=>'Xperia Z2',
                ],
                'D6563'=>[
                    'name'=>'Xperia Z2a',
                ],
                '(?:Sony(?:Ericsson)?)?(?:D66[045]3|D66[14]6|SO-01G|SOL26|401SO)'=>[
                    'name'=>'Xperia Z3',
                ],
                '(?:Sony(?:Ericsson)?)?(?:D6633)'=>[
                    'name'=>'Xperia Z3 Dual',
                ],
                '(?:Sony(?:Ericsson)?)?(?:E65[35]3)'=>[
                    'name'=>'Xperia Z3+',
                ],
                '(?:Sony(?:Ericsson)?)?(?:D6708)'=>[
                    'name'=>'Xperia Z3v',
                ],
                'SOV31|402SO|SO-03G'=>[
                    'name'=>'Xperia Z4',
                ],
                '(?:Sony(?:Ericsson)?)?(?:E58[02]3)'=>[
                    'name'=>'Xperia Z5 Compact',
                ],
                '(?:Sony(?:Ericsson)?)?(?:E66[05]3|SOV32|501SO|SO-01H)'=>[
                    'name'=>'Xperia Z5',
                ],
                '(?:Sony(?:Ericsson)?)?E66[38]3'=>[
                    'name'=>'Xperia Z5 Dual',
                ],
                '(?:Sony(?:Ericsson)?)?(?:E68[58]3|SO-03H)'=>[
                    'name'=>'Xperia Z5 Premium',
                ],
                '(?:Sony(?:Ericsson)?)?E6833'=>[
                    'name'=>'Xperia Z5 Premium Dual',
                ],
                '(?:Sony(?:Ericsson)?)?F311[135]'=>[
                    'name'=>'Xperia XA',
                ],
                '(?:Sony(?:Ericsson)?)?F311[26]'=>[
                    'name'=>'Xperia XA Dual',
                ],
                '(?:Sony(?:Ericsson)?)?F321[135]'=>[
                    'name'=>'Xperia XA Ultra',
                ],
                '(?:Sony(?:Ericsson)?)?F321[26]'=>[
                    'name'=>'Xperia XA Ultra Dual',
                ],
                '(?:Sony(?:Ericsson)?)?F833[12]|SOV34|601SO|SO-01J'=>[
                    'name'=>'Xperia XZ',
                ],
                '(?:Sony(?:Ericsson)?)?(?:701SO|SOV36|G834[123])'=>[
                    'name'=>'Xperia XZ1',
                ],
                '(?:Sony(?:Ericsson)?)?G8441|SO-02K'=>[
                    'name'=>'Xperia XZ1 Compact',
                ],
                '(?:Sony(?:Ericsson)?)?F331[13]'=>[
                    'name'=>'Xperia E5',
                ],
                '(?:Sony(?:Ericsson)?)?G312[135]|G311[26]'=>[
                    'name'=>'Xperia XA1',
                ],
                '(?:Sony(?:Ericsson)?)?G341[26]|G342[13]'=>[
                    'name'=>'Xperia XA1 Plus',
                ],
                '(?:Sony(?:Ericsson)?)?G3426'=>[
                    'name'=>'Xperia XA1 Plus Dual',
                ],
                '(?:Sony(?:Ericsson)?)?G322[136]|G3212'=>[
                    'name'=>'Xperia XA1 Ultra',
                ],
                '(?:Sony(?:Ericsson)?)?H31[123]3'=>[
                    'name'=>'Xperia XA2',
                ],
                '(?:Sony(?:Ericsson)?)?H41[13]3'=>[
                    'name'=>'Xperia XA2 Dual',
                ],
                'H4413'=>[
                    'name'=>'Xperia XA2 Plus Dual',
                ],
                'H4433'=>[
                    'name'=>'H4433',
                ],
                '(?:Sony(?:Ericsson)?)?H(?:3213|3223|4213|4233)'=>[
                    'name'=>'Xperia XA2 Ultra',
                ],
                '(?:Sony(?:Ericsson)?)?G823[12]|SOV35|602SO|SO-03J'=>[
                    'name'=>'Xperia XZs',
                ],
                '(?:Sony(?:Ericsson)?)?G814[12]|SO-04J'=>[
                    'name'=>'Xperia XZ Premium',
                ],
                '(?:Sony(?:Ericsson)?)?(?:H83[12]4|H82[17]6|SOV37)'=>[
                    'name'=>'Xperia XZ2',
                ],
                'H8266'=>[
                    'name'=>'Xperia XZ2 Dual',
                ],
                '(?:Sony(?:Ericsson)?)?H8416|H9436'=>[
                    'name'=>'Xperia XZ3',
                ],
                '(?:Sony(?:Ericsson)?)?G331[13]'=>[
                    'name'=>'Xperia L1',
                ],
                '(?:Sony(?:Ericsson)?)?G3312'=>[
                    'name'=>'Xperia L1 Dual',
                ],
                '(?:Sony(?:Ericsson)?)?SO-04E'=>[
                    'name'=>'Xperia A',
                ],
                '(?:Sony(?:Ericsson)?)?SO-04D'=>[
                    'name'=>'Xperia GX',
                ],
                '(?:Sony(?:Ericsson)?)?SO-05D'=>[
                    'name'=>'Xperia SX',
                ],
                '(?:Sony(?:Ericsson)?)?F5121'=>[
                    'name'=>'Xperia X',
                ],
                '(?:Sony(?:Ericsson)?)?F5122'=>[
                    'name'=>'Xperia X Dual',
                ],
                '(?:Sony(?:Ericsson)?)?F5321|SO-02J'=>[
                    'name'=>'Xperia X Compact',
                ],
                '(?:Sony(?:Ericsson)?)?(?:F8131|502SO|SOV33|SO-04H)'=>[
                    'name'=>'Xperia X Performance',
                ],
                '(?:Sony(?:Ericsson)?)?F8132'=>[
                    'name'=>'Xperia X Performance Dual',
                ],

                // SONY: explicit tablet models
                'SGP(?:311|312|321)[);/ ]|SO-03E'=>[
                    'name'=>'Xperia Tablet Z',
                    'category'=>'tablet',
                ],
                'SGP(?:511|512|521)[);/ ]|SO-05F'=>[
                    'name'=>'Xperia Tablet Z2',
                    'category'=>'tablet',
                ],
                'SGP(?:6[24]1)[);/ ]'=>[
                    'name'=>'Xperia Tablet Z3 Compact',
                    'category'=>'tablet',
                ],
                'SGPT(?:12|121|122|123|13|131|132|133)[);/ ]'=>[
                    'name'=>'Xperia Tablet S',
                    'category'=>'tablet',
                ],

                // general detections
                'SonyBDP|SonyDBV'=>[
                    'name'=>'Blu-ray Player',
                    'category'=>'tv',
                ],
                '(?:Sony-)?(KDL?-?[0-9a-z]+)'=>[
                    'name'=>'$1',
                    'category'=>'tv',
                ],
                'Opera TV Store.*(?:Sony-)([0-9a-z\-_]+)'=>[
                    'name'=>'$1',
                    'category'=>'tv',
                ],
                '((?:WT|SO|ST|SK|MK)[0-9]+[a-z]*[0-9]*)(?: Build|\))'=>[
                    'name'=>'$1',
                ],
                '(MT[0-9]{2}[a-z]?)[);/ ]'=>[
                    'name'=>'$1',
                ],
                'portalmmm/2.0 K([a-z0-9]+)'=>[
                    'name'=>'K$1',
                ],
                'Sony ?Ericsson?([^/;]*) Build'=>[
                    'name'=>'$1',
                ],
                'SonyEricsson([CGJKPTWZ][0-9]+[a-z]+)/'=>[
                    'name'=>'$1',
                    'category'=>'feature phone'

                ],
                'Sony ?Ericsson ?([a-z0-9\-]+)'=>[
                    'name'=>'$1',
                ],
                'Sony (Tablet[^/;]*) Build'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                '(SGP[^/;]*) Build'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'Xperia ([^/;]*Tablet[^/;]*) Build'=>[
                    'name'=>'Xperia $1',
                    'category'=>'tablet',
                ],
                'Xperia ([^;/]+) Build'=>[
                    'name'=>'Xperia $1',
                ],
                'Sony[ -]?([^/;]*) Build'=>[
                    'name'=>'$1',
                ],
                'Sony[ -]?([a-z0-9\-]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Ericsson
        '(?:Ericsson(?:/ )?[a-z0-9]+)|(?:R380 2.0 WAP1.1)'   =>  [
            'name'=>'Ericsson',
            'category'=>'feature phone',
            'sub'=>[
                'Ericsson(?:/ )?([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'R380 2.0 WAP1.1'=>[
                    'name'=>'R380',
                ],
            ]
        ],
                
        // Energizer
        'PowerMax'   =>  [
            'name'=>'Energizer',
            'category'=>'smartphone',
            'sub'=>[
                'PowerMax(P[0-9]+S?)'=>[
                    'name'=>'Power Max $1',
                ],
            ]
        ],

        // eTouch
        'eTouch ?([a-z0-9]+)'   =>  [
            'name'=>'eTouch',
            'category'=>'smartphone',
            'sub'=>[
                'eTouch ?([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Storex
        "eZee[^a-z]*Tab ?([^;/]*) Build|STOREX LinkBox"   =>  [
            'name'=>'Storex',
            'category'=>'tablet',
            'sub'=>[
                "eZee[^a-z]*Tab ?([^;/]*) Build"=>[
                    'name'=>"eZee'Tab$1",
                ],
                'STOREX LinkBox'=>[
                    'name'=>'LinkBox',
                    'category'=>'tv',
                ],
            ]
        ],
                

        // Evertek
        '(Ever(?:Glory|Shine|Miracle|Mellow|Classic|Trendy|Fancy|Vivid|Slim|Glow|Magic|Smart|Star)[^/;]*) Build|E70[25]0HD|E805[01]HD|E9054HD|E8050HG|E7914HG'   =>  [
            'name'=>'Evertek',
            'category'=>'smartphone',
            'sub'=>[
                '(E70[25]0HD|E805[01]HD|E9054HD|E8050HG|E7914HG)'=>[
                    'name'=>'Everpad $1',
                    'category'=>'tablet',
                ],
                '(Ever(?:Glory|Shine|Miracle|Mellow|Classic|Trendy|Fancy|Vivid|Slim|Glow|Magic|Smart|Star)[^/;]*) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Evolio
        'Evolio|M4MAGIC'   =>  [
            'name'=>'Evolio',
            'category'=>'smartphone',
            'sub'=>[
                'M4MAGIC'=>[
                    'name'=>'M4 Magic',
                ],
                'Evolio[ _](M6|S4 Cobalt|S5|X10|Yuppi)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Evolveo
        'EVOLVEO[ _]([^;/]*) Build'   =>  [
            'name'=>'Evolveo',
            'category'=>'smartphone',
            'sub'=>[
                'Smart TV ([^;/]*) Build'=>[
                    'name'=>'Smart TV $1',
                    'category'=>'tv',
                ],
                'EVOLVEO[ _]([^;/]*) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Explay
        'Explay|ActiveD[ _]|Atlant |Informer[ _][0-9]+|CinemaTV 3G|Surfer[ _][0-9\.]|sQuad[ _][0-9\.]|Onliner[1-3]|RioPlay|Leader'   =>  [
            'name'=>'Explay',
            'category'=>'tablet',
            'sub'=>[
                'ActiveD[ _]7.4[ _]3G'=>[
                    'name'=>'ActiveD 7.4 3G',
                ],
                'ActiveD[ _]8.2[ _]3G'=>[
                    'name'=>'ActiveD 8.2 3G',
                ],
                'CinemaTV[ _]3G'=>[
                    'name'=>'CinemaTV 3G',
                ],
                'Informer[ _]([0-9]+(?:[ _]3G)?)'=>[
                    'name'=>'Informer $1',
                ],
                'Surfer[ _]([0-9\.]+(?:[ _]3G)?)'=>[
                    'name'=>'Surfer $1',
                ],
                'sQuad[ _]([0-9\.]+(?:[ _]3G)?)'=>[
                    'name'=>'sQuad $1',
                ],
                'Onliner([1-3])'=>[
                    'name'=>'Onliner $1',
                ],
                'Atlant[;/) ]'=>[
                    'name'=>'Atlant',
                    'category'=>'smartphone',
                ],
                'Explay[ _-]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Explay[ _-]([^;/]+)[;/)]'=>[
                    'name'=>'$1',
                ],
                '(RioPlay)[;/) ]'=>[
                    'name'=>'Rio Play',
                    'category'=>'smartphone',
                ],
                'Leader'=>[
                    'name'=>'Leader',
                ],
            ]
        ],

        // EKO
        'EKO'   =>  [
            'name'=>'EKO',
            'category'=>'smartphone',
            'sub'=>[
                'EKO[ _-]?([^;/)]+) Build'=>[
                    'name'=>'$1',
                ],
                'EKO[ _-]?([^;/)]+)[);/ ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Extrem
        'Rock X9+'   =>  [
            'name'=>'Extrem',
            'category'=>'smartphone',
            'sub'=>[
                'Rock X9+'=>[
                    'name'=>'Rock X9+',
                ],
            ]
        ],

        // Ezze
        'EZZE-|EZ[a-z0-9]+'   =>  [
            'name'=>'Ezze',
            'category'=>'feature phone',
            'sub'=>[
                'EZZE-([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'EZ([a-z0-9]+)'=>[
                    'name'=>'EZ$1',
                ],
            ]
        ],

        // Ezio
        'EZIO-([a-z0-9]+)'   =>  [
            'name'=>'Ezio',
            'category'=>'feature phone',
            'sub'=>[
                'EZIO-([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Forstar
        'Amosta 3G5'   =>  [
            'name'=>'Forstar',
            'category'=>'smartphone',
            'sub'=>[
                'Amosta 3G5'=>[
                    'name'=>'Amosta 3G5',
                ],
            ]
        ],
                
        // Foxconn
        'InFocus M[0-9]+[a-z]?'   =>  [
            'name'=>'Foxconn',
            'category'=>'smartphone',
            'sub'=>[
                'InFocus M([0-9]+[a-z]?)'=>[
                    'name'=>'InFocus M$1',
                ],
            ]
        ],
                

        // Fairphone
        '(FP(?:1U?|2))[);/ ]'   =>  [
            'name'=>'Fairphone',
            'category'=>'smartphone',
            'sub'=>[
                '(FP(?:1U?|2))[);/ ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // FiGO
        'ATRIUM II F55L2'   =>  [
            'name'=>'FiGO',
            'category'=>'smartphone',
            'sub'=>[
                'ATRIUM II F55L2'=>[
                    'name'=>'Atrium II',
                ],
            ]
        ],
                
        // FNB
        'ConeXis (A[12]|X[12])|SP5045V'   =>  [
            'name'=>'FNB',
            'category'=>'smartphone',
            'sub'=>[
                'SP5045V'=>[
                    'name'=>'SP5045V',
                ],
                'ConeXis A1'=>[
                    'name'=>'ConeXis A1',
                ],
                'ConeXis A2'=>[
                    'name'=>'ConeXis A2',
                ],
                'ConeXis X1'=>[
                    'name'=>'ConeXis X1',
                ],
                'ConeXis X2'=>[
                    'name'=>'ConeXis X2',
                ],
            ]
        ],
                
        // Fujitsu
        'F-01[FHJK]|F-02[EFGH]|F-03[DEFGH]|F-04[EG]|F-05[DEFJ]|F-06E|F-07[DE]|F-08D|F-09[DE]|F-10D|F-11D|F-12C|M532|FARTM933KZ[);/ ]'   =>  [
            'name'=>'Fujitsu',
            'category'=>'smartphone',
            'sub'=>[
                'F-01F'=>[
                    'name'=>'Arrows NX F-01F',
                ],
                'F-01J'=>[
                    'name'=>'Arrows NX F-01J',
                ],
                'F-01K'=>[
                    'name'=>'Arrows NX F-01K',
                ],
                'F-01H'=>[
                    'name'=>'Arrows Fit F-01H',
                ],
                'F-02E'=>[
                    'name'=>'Arrows X F-02E',
                ],
                'F-02G'=>[
                    'name'=>'Arrows NX F-02G',
                ],
                'F-02H'=>[
                    'name'=>'Arrows NX F-02H',
                ],
                'F-03D'=>[
                    'name'=>'Arrows Kiss F-03D',
                ],
                'F-03E'=>[
                    'name'=>'Arrows Kiss F-03E',
                ],
                'F-03F'=>[
                    'name'=>'Disney Mobile F-03F',
                ],
                'F-03H'=>[
                    'name'=>'Arrows SV F-03H',
                ],
                'F-04E'=>[
                    'name'=>'Arrows V F-04E',
                ],
                'F-04G'=>[
                    'name'=>'Arrows NX F-04G',
                ],
                'F-05D'=>[
                    'name'=>'Arrows X LTE F-05D',
                ],
                'F-05F'=>[
                    'name'=>'Arrows NX F-05F',
                ],
                'F-05J'=>[
                    'name'=>'Arrows Be F-05J',
                ],
                'F-06E'=>[
                    'name'=>'Arrows NX F-06E',
                ],
                'F-07D'=>[
                    'name'=>'Arrows μ F-07D',
                ],
                'F-07E'=>[
                    'name'=>'Disney Mobile F-07E',
                ],
                'F-08D'=>[
                    'name'=>'Disney Mobile F-08D',
                ],
                'F-09D'=>[
                    'name'=>'ANTEPRIMA F-09D',
                ],
                'F-09E'=>[
                    'name'=>'Raku-Raku Smartphone Premium F-09E',
                ],
                'F-10D'=>[
                    'name'=>'Arrows X F-10D',
                ],
                'F-11D'=>[
                    'name'=>'Arrows Me F-11D',
                ],
                'F-12C'=>[
                    'name'=>'F-12C',
                ],

                'F-02F'=>[
                    'name'=>'Arrows Tab F-02F',
                    'category'=>'tablet',
                ],
                'F-03G'=>[
                    'name'=>'Arrows Tab F-03G',
                    'category'=>'tablet',
                ],
                'F-05E'=>[
                    'name'=>'Arrows Tab F-05E',
                    'category'=>'tablet',
                ],
                'FARTM933KZ'=>[
                    'name'=>'Arrows Tab M504/HA4',
                    'category'=>'tablet',
                ],
                'M532[);/ ]'=>[
                    'name'=>'Stylistic',
                    'category'=>'tablet',
                ],
            ]
        ],
                

        // G-TiDE
        'G-TiDE'   =>  [
            'name'=>'G-TiDE',
            'category'=>'smartphone',
            'sub'=>[
                'Shining7'=>[
                    'name'=>'Shining 7',
                ],
                'G-TiDE_(A1|S3)'=>[
                    'name'=>'$1',
                ],
                'E(57|60|66|72|77)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Gemini
        '(GEM[0-9]+[a-z]*)'   =>  [
            'name'=>'Gemini',
            'category'=>'tablet',
            'sub'=>[
                '(GEM[0-9]+[a-z]*)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Geotel
        'GEOTEL'   =>  [
            'name'=>'Geotel',
            'category'=>'smartphone',
            'sub'=>[
                'G1'=>[
                    'name'=>'G1',
                ],
            ]
        ],

        // Ghia
        'GHIA|QS702'   =>  [
            'name'=>'Ghia',
            'category'=>'smartphone',
            'sub'=>[
                'QS702'=>[
                    'name'=>'QS702',
                ],
                'GHIA_ZEUS_3G'=>[
                    'name'=>'Zeus 3G',
                ],
                'GHIA_AXIS7'=>[
                    'name'=>'Axis 7',
                    'category'=>'tablet',
                ],
            ]
        ],

        // Gigabyte
        'GSmart [a-z0-9 ]+ Build|Gigabyte-[a-z0-9]+'   =>  [
            'name'=>'Gigabyte',
            'category'=>'smartphone',
            'sub'=>[
                '(GSmart [a-z0-9 ]+) Build'=>[
                    'name'=>'$1',
                ],
                'Gigabyte-([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Gigaset
        'Gigaset'   =>  [
            'name'=>'Gigaset',
            'category'=>'smartphone',
            'sub'=>[
                'Gigaset QV(1030|830)'=>[
                    'name'=>'Gigaset QV$1',
                    'category'=>'tablet',
                ],
                'Gigaset ([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Gigaset ([^;/)]+)[);/ ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Gionee
        '(?:GIO-)?GIONEE[ _-]?[a-z0-9]+|(?:Dream_D1|V188S?|GN[0-9]{3,4}[a-z]?)[);/ ]|F103(?: Pro)? Build|P5 mini Build|M7 Power '   =>  [
            'name'=>'Gionee',
            'category'=>'smartphone',
            'sub'=>[
                'GN810[);/ ]'=>[
                    'name'=>'GN810',
                    'category'=>'phablet',
                ],
                'GN([0-9]{3,4}[a-z]?)[);/ ]'=>[
                    'name'=>'GN$1',
                ],
                'V188S[);/ ]'=>[
                    'name'=>'V188S',
                ],
                'V188[);/ ]'=>[
                    'name'=>'V188',
                ],
                'F103( Pro)? Build'=>[
                    'name'=>'F103$1',
                ],
                'M7 Power'=>[
                    'name'=>'M7 Power',
                ],
                'P5 mini Build'=>[
                    'name'=>'P5 mini',
                ],
                '(?:(?:GIO-)?GIONEE[ _-])?Dream_D1[);/ ]'=>[
                    'name'=>'Dream D1',
                ],
                '(?:GIO-)?GIONEE[ _-]([a-z0-9_-]+).*Android'=>[
                    'name'=>'$1',
                ],
                'Android.*(?:GIO-)?GIONEE[ _-]([a-z0-9_-]+)'=>[
                    'name'=>'$1',
                ],
                '(?:GIO-)?GIONEE[ _-]?([a-z0-9]+)'=>[
                    'name'=>'$1',
                    'category'=>'feature phone',
                ],
            ]
        ],
                

        // Grape
        '(?:Grape[ _])?GTM-5([^;/]+) Build'   =>  [
            'name'=>'Grape',
            'category'=>'smartphone',
            'sub'=>[
                '(?:Grape[ _])?GTM-5([^;/]+) Build'=>[
                    'name'=>'GTM-5$1',
                ],
            ]
        ],

        // Vizio
        'Vizio|VAP430|VTAB1008'   =>  [
            'name'=>'Vizio',
            'category'=>'tv',
            'sub'=>[
                'VAP430'=>[
                    'name'=>'VAP430',
                ],
                'VTAB1008'=>[
                    'name'=>'VTAB1008',
                    'category'=>'tablet',
                ],
            ]
        ],
                

        // GOCLEVER
        'GOCLEVER|QUANTUM_[0-9]{3}|QUANTUM [0-9]{1}|QUANTUM 700N|QUANTUM_(1010N|1010M|900)|ARIES|INSIGNIA|ORION_|ELIPSO|LIBRA[ _]97'   =>  [
            'name'=>'GOCLEVER',
            'category'=>'smartphone',
            'sub'=>[
                'QUANTUM_(1010N|1010M|900)'=>[
                    'name'=>'QUANTUM $1',
                    'category'=>'tablet',
                ],
                'INSIGNIA_785_PRO'=>[
                    'name'=>'INSIGNIA 785 PRO',
                    'category'=>'tablet',
                ],
                '(ORION|ARIES|ELIPSO)[_ ](71|101|102)'=>[
                    'name'=>'$1 $2',
                    'category'=>'tablet',
                ],
                'TQ700N'=>[
                    'name'=>'QUANTUM 700N',
                    'category'=>'tablet',
                ],
                '((?:QUANTUM|ARIES|INSIGNIA|ORION|ELIPSO)[ _-]?[^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'GOCLEVER[ _-]TAB[ _-]?([^;/]+) Build'=>[
                    'name'=>'TAB $1',
                    'category'=>'tablet',
                ],
                'GOCLEVER[ _-]?([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'TAB ([^;/)]+) Build/GOCLEVER'=>[
                    'name'=>'TAB $1',
                    'category'=>'tablet',
                ],
                '([^;/)]+) Build/GOCLEVER'=>[
                    'name'=>'$1',
                ],
                'GOCLEVER[ _-]?TAB[ _-]([^;/)]+)[;/)]'=>[
                    'name'=>'TAB $1',
                    'category'=>'tablet',
                ],
                'GOCLEVER[ _-]?([^;/)]+)[;/)]'=>[
                    'name'=>'$1',
                ],
                'LIBRA[ _]97'=>[
                    'name'=>'Libra 97',
                    'category'=>'tablet',
                ],
            ]
        ],

        // GoMobile
        'GO Onyx|GO[0-9]{3,4}'   =>  [
            'name'=>'GoMobile',
            'category'=>'smartphone',
            'sub'=>[
                'GO Onyx'=>[
                    'name'=>'Go Onyx',
                ],
                'GO([0-9]{3,4})'=>[
                    'name'=>'Go$1',
                ],
            ]
        ],
                
        // Goly
        'Goly[ _-]'   =>  [
            'name'=>'Goly',
            'category'=>'smartphone',
            'sub'=>[
                'Goly[ _-]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Goly[ _-]([^;/)]+)[;/)]'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
       
        // Gradiente
        'GRADIENTE'   =>  [
            'name'=>'Gradiente',
            'category'=>'feature phone',
            'sub'=>[
                'GRADIENTE-([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'GRADIENTE ([a-z0-9\-]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],    

        // Grundig
        'GR?-TB[0-9]+[a-z]*|GRUNDIG|portalmmm/2\.0 G'   =>  [
            'name'=>'Grundig',
            'category'=>'tv',
            'sub'=>[
                '(GR?-TB[0-9]+[a-z]*)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'GRUNDIG ([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'portalmmm/2\.0 G([a-z0-9]+)'=>[
                    'name'=>'G$1',
                ],
            ]
        ],
                
        // Hafury
        'HAFURY'   =>  [
            'name'=>'Hafury',
            'category'=>'smartphone',
            'sub'=>[
                '(MIX|UMAX)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Haier
        'Haier|(?:HW-)?W(?:716|757|860|970)[);/ ]|(?:HM-)?(G(?:152|303|353|552|70[01])?-FL|G(?:303)?-W|I(?:557)?-FL)|(?:PAD[ _](D71|G781|d85))'   =>  [
            'name'=>'Haier',
            'category'=>'smartphone',
            'sub'=>[
                '(?:HM-)?(G(?:152|353|552|70[01])|G(?:303)|I(?:557))'=>[
                    'name'=>'$1',
                ],
                '(?:HW-)?W(716|757|860|970)[);/ ]'=>[
                    'name'=>'W$1',
                ],
                'PAD[ -_](D71|G781|d85)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'Haier[ _\-](H[WT]-[^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                'Haier[ _\-](H[WT]-[a-z0-9_\-]+)'=>[
                    'name'=>'$1',
                ],
                'Haier[ _\-](sy[0-9]+)'=>[
                    'name'=>'$1',
                ],
                'Haier[ _\-]([a-z0-9\-]+)'=>[
                    'name'=>'$1',
                    'category'=>'feature phone',
                ],
            ]
        ],

        // HannSpree
        '(HSG[0-9]{4})|SN97T41W|SN1AT71W\(B\)|SN70T51A|SN70T31?|T7-QC'   =>  [
            'name'=>'HannSpree',
            'category'=>'tablet',
            'sub'=>[
                '(HSG[0-9]{4})'=>[
                    'name'=>'$1',
                ],
                'SN1AT71W\(B\)'=>[
                    'name'=>'SN1AT71W(B)',
                ],
                'SN70T31'=>[
                    'name'=>'SN70T31',
                ],
                'SN70T3'=>[
                    'name'=>'SN70T3',
                ],
                'SN70T51A'=>[
                    'name'=>'SN70T51A',
                ],
                'SN97T41W'=>[
                    'name'=>'SN97T41W',
                ],
                'T7-QC'=>[
                    'name'=>'SNAT71BUE',
                ],
            ]
        ],

        // Hasee
        'Hasee'   =>  [
            'name'=>'Hasee',
            'category'=>'smartphone',
            'sub'=>[
                'Hasee ([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Hasee ([^;/)]+)[);/ ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Hisense
        '(?:HS-)?Hisense ([^;/]+) Build|Hisense [^);/]+|HS-(?:G|U|EG?|I|L|T|X)[0-9]+[a-z0-9\-]*|E270BSA|M470BS[AE]|E2281|EG680|HLTE700T'   =>  [
            'name'=>'Hisense',
            'category'=>'smartphone',
            'sub'=>[
                // explicit tablet models
                'E270BSA'=>[
                    'name'=>'Sero 7',
                    'category'=>'tablet',
                ],
                'M470BS[AE]'=>[
                    'name'=>'Sero 7 Pro',
                    'category'=>'tablet',
                ],
                'E2281'=>[
                    'name'=>'Sero 8',
                    'category'=>'tablet',
                ],
                'HLTE700T'=>[
                    'name'=>'A6',
                ],
                'EG680'=>[
                    'name'=>'Smartfren Andromax Z',
                ],

                '(HS-(?:G|U|EG?|I|L|T|X)[0-9]+[a-z0-9\-]*)'=>[
                    'name'=>'$1',
                ],
                '(?:HS-)?Hisense ([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Hisense ([^);/]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Hi-Level
        'HLV-T([a-z0-9]+)'   =>  [
            'name'=>'Hi-Level',
            'category'=>'tablet',
            'sub'=>[
                'HLV-T([a-z0-9]+)'=>[
                    'name'=>'HLV-T$1',
                ],
            ]
        ],

        // Homtom
        'Homtom|(?:HT[0-9]{1,2})(?: ?Pro)? Build'   =>  [
            'name'=>'Homtom',
            'category'=>'smartphone',
            'sub'=>[
                '(HT[0-9]{1,2}(?: ?Pro)?) Build'=>[
                    'name'=>'$1',
                ],
                'Homtom ([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Hosin
        'HOSIN[ _-]'   =>  [
            'name'=>'Hosin',
            'category'=>'smartphone',
            'sub'=>[
                'HOSIN[ _-]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'HOSIN[ _-]([^;/]+)[;/)]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Hyundai
        'Hyundai|Ultra (?:Active|Air|Charm|Dream|Energy|Latitude|Link|Live|Shadow|Shine|Storm|Style|Sync|Trend|Vision|Wave)|G(24027|2552[34])K|W25042L'   =>  [
            'name'=>'Hyundai',
            'category'=>'smartphone',
            'sub'=>[
                'Ultra (Active|Air|Charm|Dream|Energy Lite|Energy Plus|Energy|Latitude|Link|Live II|Live|Shadow|Shine|Storm|Style|Sync|Trend|Vision|Wave)'=>[
                    'name'=>'Ultra $1',
                ],
                'G25523K'=>[
                    'name'=>'Eternity G23',
                ],
                'G25524K'=>[
                    'name'=>'Eternity G24',
                ],
                'G24027K'=>[
                    'name'=>'Eternity G27',
                ],
                'W25042L'=>[
                    'name'=>'Eternity W42',
                ],
                'Hyundai ([^;/]+) Build'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'Hyundai[ _\-]?([a-z0-9_-]+)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
            ]
        ],

        //i-Joy
        'i-Joy|i-Call|(?:Neon[79]|Sygnus|Deox|Elektra (?:M|L|XL|XXL))[);/ ]'   =>  [
            'name'=>'i-Joy',
            'category'=>'smartphone',
            'sub'=>[
                // explicit smartphone models
                'Elektra M[);/ ]'=>[
                    'name'=>'Elektra M',
                ],
                'Elektra L[);/ ]'=>[
                    'name'=>'Elektra L',
                ],
                'Elektra XL[);/ ]'=>[
                    'name'=>'Elektra XL',
                ],
                'Elektra XXL[);/ ]'=>[
                    'name'=>'Elektra XXL',
                    'category'=>'phablet',
                ],

                // explicit tablet models
                'Neon([79])[);/ ]'=>[
                    'name'=>'Neon $1',
                    'category'=>'tablet',
                ],
                'Sygnus[);/ ]'=>[
                    'name'=>'Sygnus',
                    'category'=>'tablet',
                ],
                'Deox[);/ ]'=>[
                    'name'=>'Deox',
                    'category'=>'tablet',
                ],

                'i-Call ([^;/]+) Build'=>[
                    'name'=>'i-Call $1',
                ],
                'i-Joy ([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // iBall
        'iBall[ _]([^/;]*)[ _]Build'   =>  [
            'name'=>'iBall',
            'category'=>'tablet',
            'sub'=>[
                'iBall[ _]([^/;]*)[ _]Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // AUXUS
        'AUXUS ([^/;]+) Build'=>[
            'name'=>'AUXUS',
            'category'=>'smartphone',
            'sub'=>[
                'AUXUS (Core[^/;]+) Build'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'AUXUS ([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // iHunt
        'iHunt|One_ Love_|TITAN_P11000_PRO|Like_(3|4U|3_Pro)|X300 Elite'   =>  [
            'name'=>'iHunt',
            'category'=>'smartphone',
            'sub'=>[
                'iHunt_Like'=>[
                    'name'=>'Like',
                ],
                'One_ Love_'=>[
                    'name'=>'One Love',
                ],
                'TITAN_P11000_PRO'=>[
                    'name'=>'Titan P11000 Pro',
                ],
                'Like_3_Pro'=>[
                    'name'=>'Like 3 Pro',
                ],
                'Like_3'=>[
                    'name'=>'Like 3',
                ],
                'Like_4U'=>[
                    'name'=>'Like 4U',
                ],
                'X300 Elite'=>[
                    'name'=>'X300 Elite',
                ],
            ]
        ],
                
        // IconBIT
        'NT-(3506M|0704S|0909T|1009T|10[01]1T|1017T|3601P/3602P|3603P|3702S|3805C|3905T|3701S|0701S|0805C|0902S|370[23]M)'   =>  [
            'name'=>'IconBIT',
            'category'=>'tablet',
            'sub'=>[
                'NT-3506M'=>[
                    'name'=>'NetTAB Mercury Quad FHD',
                    'category'=>'smartphone',
                ],
                'NT-0704S'=>[
                    'name'=>'NetTAB Sky LE',
                ],
                'NT-0909T'=>[
                    'name'=>'NetTAB Thor IZ',
                ],
                'NT-1009T'=>[
                    'name'=>'NetTAB Thor quad II',
                ],
                'NT-10[01]1T'=>[
                    'name'=>'NetTAB Thor LE',
                ],
                'NT-1017T'=>[
                    'name'=>'NetTAB Thor 3G quad',
                ],
                'NT-3601P/3602P'=>[
                    'name'=>'NetTAB Pocket 3G',
                ],
                'NT-3603P'=>[
                    'name'=>'NetTAB Pocket 3G Slim',
                ],
                'NT-3702S'=>[
                    'name'=>'NetTAB Sky HD 3G',
                ],
                'NT-3805C'=>[
                    'name'=>'NetTAB Skat 3G quad',
                ],
                'NT-3701S'=>[
                    'name'=>'NetTAB Sky 3G duo',
                ],
                'NT-3905T'=>[
                    'name'=>'NetTAB Thor ZX 3G',
                ],
                'NT-0701S'=>[
                    'name'=>'NetTAB Sky net',
                ],
                'NT-0805C'=>[
                    'name'=>'NetTAB Skat MX',
                ],
                'NT-0902S'=>[
                    'name'=>'NetTAB Space quad RX',
                ],
                'NT-3702M'=>[
                    'name'=>'NetTAB Matrix 3G duo',
                ],
                'NT-3703M'=>[
                    'name'=>'NetTAB Matrix 3GT',
                ],
            ]
        ],

        // LYF
        '(LYF[ _])?LS-[456][0-9]{3}|LYF/[^/]+/'   =>  [
            'name'=>'LYF',
            'category'=>'smartphone',
            'sub'=>[
                'LS-4004'=>[
                    'name'=>'Flame 2',
                ],
                'LS-5501'=>[
                    'name'=>'Earth 1',
                ],
                'LS-5021'=>[
                    'name'=>'Earth 2',
                ],
                'LS-5505'=>[
                    'name'=>'Water F1',
                ],
                'LS-4503'=>[
                    'name'=>'Flame LS-4503',
                ],
                'LS-4001'=>[
                    'name'=>'Flame 3',
                ],
                'LS-4003'=>[
                    'name'=>'Flame 4',
                ],
                'LS-4002'=>[
                    'name'=>'Flame 5',
                ],
                'LS-4005'=>[
                    'name'=>'Flame 6',
                ],
                '(LYF[ _])?LS-4006'=>[
                    'name'=>'Flame 7',
                ],
                'LS-4008'=>[
                    'name'=>'Flame 7S',
                ],
                'LS-450[58]'=>[
                    'name'=>'Flame 8',
                ],
                'LS-5002'=>[
                    'name'=>'Water 1',
                ],
                'LS-5005'=>[
                    'name'=>'Water 4',
                ],
                'LS-5006'=>[
                    'name'=>'Water 6',
                ],
                'LS-5008'=>[
                    'name'=>'Water 2',
                ],
                'LS-5009'=>[
                    'name'=>'Wind 6',
                ],
                'LS-5013'=>[
                    'name'=>'Wind 5',
                ],
                'LS-5014'=>[
                    'name'=>'Wind 4',
                ],
                'LS-5010'=>[
                    'name'=>'Wind 1',
                ],
                'LS-5015'=>[
                    'name'=>'Water 8',
                ],
                'LS-5016'=>[
                    'name'=>'Wind 7',
                ],
                'LS-5504'=>[
                    'name'=>'Water 7',
                ],
                'LS-5017'=>[
                    'name'=>'Water 11',
                ],
                'LS-5018'=>[
                    'name'=>'Wind 4S',
                ],
                'LS-5020'=>[
                    'name'=>'Water 10',
                ],
                'LS-5201'=>[
                    'name'=>'Water F1S',
                ],
                'LS-5502'=>[
                    'name'=>'Wind 3',
                ],
                'LS-5503'=>[
                    'name'=>'Water 3',
                ],
                'LS-5506'=>[
                    'name'=>'Water 9',
                ],
                'LS-6001'=>[
                    'name'=>'Wind 2',
                ],

                'LYF/([^/]+)/'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // M4tel
        'M4 SS[0-9]{4}(?:-R)?|M4_B[23]'   =>  [
            'name'=>'M4tel',
            'category'=>'smartphone',
            'sub'=>[
                'SS1050'=>[
                    'name'=>'Joy',
                ],
                'SS1060'=>[
                    'name'=>'Live',
                ],
                'SS1070'=>[
                    'name'=>'Sense',
                ],
                'SS1080'=>[
                    'name'=>'Max One',
                ],
                'SS1090'=>[
                    'name'=>'Max Ultra',
                ],
                'SS4020'=>[
                    'name'=>'Play',
                ],
                'SS4040'=>[
                    'name'=>'In Touch',
                ],
                'SS4045'=>[
                    'name'=>'Style',
                ],
                'SS4345'=>[
                    'name'=>'Soul Mini',
                ],
                'SS4350'=>[
                    'name'=>'Soul',
                ],
                'SS4445'=>[
                    'name'=>'Style Access',
                ],
                'SS4450'=>[
                    'name'=>'Share',
                ],
                'SS4451'=>[
                    'name'=>'Believe',
                ],
                'SS4452'=>[
                    'name'=>'Dream',
                ],
                'SS4453'=>[
                    'name'=>'Inspiration',
                ],
                'SS4455'=>[
                    'name'=>'Excite',
                ],
                'SS4456'=>[
                    'name'=>'Evolution',
                ],
                'SS4457-R'=>[
                    'name'=>'Ever',
                ],
                'SS4457'=>[
                    'name'=>'Elegance',
                ],
                'SS4458-R'=>[
                    'name'=>'Feel Plus',
                ],
                'SS4458'=>[
                    'name'=>'Attitude',
                ],
                'M4_B([23])'=>[
                    'name'=>'B$1',
                ],
            ]
        ],

        // IMO Mobile
        'IMO Q2'   =>  [
            'name'=>'IMO Mobile',
            'category'=>'smartphone',
            'sub'=>[
                'IMO Q2'=>[
                    'name'=>'Q2',
                ],
            ]
        ],

        // iNew
        'iNew|(?:V7A|V3 Plus|V3-?E|V3C)(?: Build|[;/\)])'   =>  [
            'name'=>'iNew',
            'category'=>'smartphone',
            'sub'=>[
                'V3C(?: Build|[;/\)])'=>[
                    'name'=>'V3C',
                ],
                'V3-?E(?: Build|[;/\)])'=>[
                    'name'=>'V3-E',
                ],
                'V3 Plus(?: Build|[;/\)])'=>[
                    'name'=>'V3 Plus',
                ],
                'V7A(?: Build|[;/\)])'=>[
                    'name'=>'V7A',
                ],
                'iNew[ -_]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // iPro
        'Kylin[ _]5.[05]'   =>  [
            'name'=>'iPro',
            'category'=>'smartphone',
            'sub'=>[
                'Kylin_5.0S'=>[
                    'name'=>'Kylin 5.0S',
                ],
                'Kylin 5.0'=>[
                    'name'=>'Kylin 5.0',
                ],
                'Kylin 5.5'=>[
                    'name'=>'Kylin 5.5',
                ],
            ]
        ],

        // Infinix
        'Infinix'   =>  [
            'name'=>'Infinix',
            'category'=>'smartphone',
            'sub'=>[
                'Infinix[ _-]X260'=>[
                    'name'=>'Buzz',
                ],
                'Infinix[ _-]X502'=>[
                    'name'=>'Alpha Marvel',
                ],
                'Infinix[ _-]X570'=>[
                    'name'=>'Alpha',
                ],
                'Infinix[ _-]X350'=>[
                    'name'=>'Surf Smart',
                ],
                'Infinix[ _-]X351'=>[
                    'name'=>'Surf Smart 3G',
                ],
                'Infinix[ _-]X352'=>[
                    'name'=>'Surf Smart 2',
                ],
                'Infinix[ _-]X403'=>[
                    'name'=>'Surf Spice',
                ],
                'Infinix[ _-]X503'=>[
                    'name'=>'Surf Bravo',
                ],
                'Infinix[ _-]X511'=>[
                    'name'=>'Surf Noir',
                ],

                'Infinix[ _-]X400'=>[
                    'name'=>'Race',
                ],
                'Infinix[ _-]X401'=>[
                    'name'=>'Race Lite',
                ],
                'Infinix[ _-]X450'=>[
                    'name'=>'Race Bolt',
                ],
                'Infinix[ _-]X451'=>[
                    'name'=>'Race Bolt Q',
                ],
                'Infinix[ _-]X454'=>[
                    'name'=>'Race Bolt 2',
                ],
                'Infinix[ _-]X500'=>[
                    'name'=>'Race Eagle',
                ],
                'Infinix[ _-]X501'=>[
                    'name'=>'Race Jet',
                ],

                'Infinix[ _-]X506'=>[
                    'name'=>'Zero',
                ],
                'Infinix[ _-]X509'=>[
                    'name'=>'Zero 2',
                ],
                'Infinix[ _-]X552'=>[
                    'name'=>'Zero 3',
                ],
                'Infinix[ _-]X555'=>[
                    'name'=>'Zero 4',
                ],
                'Infinix[ _-]X(?:574|602)'=>[
                    'name'=>'Zero 4 Plus',
                ],
                'Infinix[ _-]X603'=>[
                    'name'=>'Zero 5',
                ],
                'Infinix[ _-]X603B'=>[
                    'name'=>'Zero 5 Pro',
                ],

                'Infinix[ _-]X507'=>[
                    'name'=>'Hot',
                ],
                'Infinix[ _-]X510'=>[
                    'name'=>'Hot 2',
                ],
                'Infinix[ _-]X55[34]'=>[
                    'name'=>'Hot 3',
                ],
                'Infinix[ _-]X521'=>[
                    'name'=>'Hot S',
                ],
                'Infinix[ _-]X522'=>[
                    'name'=>'Hot S2',
                ],
                'Infinix[ _-]X557'=>[
                    'name'=>'Hot 4',
                ],
                'Infinix[ _-]X556'=>[
                    'name'=>'Hot 4 Pro',
                ],
                'Infinix[ _-]X559c'=>[
                    'name'=>'Hot 5',
                ],
                'Infinix[ _-]X559'=>[
                    'name'=>'Hot 5 Lite',
                ],
                'Infinix[ _-]X606B?'=>[
                    'name'=>'Hot 6',
                ],
                'Infinix[ _-]X573B?'=>[
                    'name'=>'Hot S3',
                ],
                'Infinix[ _-]X556'=>[
                    'name'=>'Hot 4 Pro',
                ],

                'Infinix[ _-]X5010'=>[
                    'name'=>'Smart',
                ],
                'Infinix[ _-]X5515F'=>[
                    'name'=>'Smart 2',
                ],
                'Infinix[ _-]X5514D'=>[
                    'name'=>'Smart 2 Pro',
                ],

                'Infinix[ _-]X551'=>[
                    'name'=>'Hot Note',
                    'category'=>'phablet',
                ],
                'Infinix[ _-]X600'=>[
                    'name'=>'Note 2',
                    'category'=>'phablet',
                ],
                'Infinix[ _-]X601'=>[
                    'name'=>'Note 3',
                    'category'=>'phablet',
                ],
                'Infinix[ _-]X572'=>[
                    'name'=>'Note 4',
                    'category'=>'phablet',
                ],
                'Infinix[ _-]X571'=>[
                    'name'=>'Note 4 Pro',
                    'category'=>'phablet',
                ],
                'Infinix[ _-]X604'=>[
                    'name'=>'Note 5',
                    'category'=>'phablet',
                ],

                'Infinix HOT ([a-z]?[1-6])( (?:Lite|Plus|Pro))?'=>[
                    'name'=>'Hot $1$2',
                ],
                'Infinix[ _-](X[78]00)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'Infinix[ _-](X\d+)'=>[
                    'name'=>'$1',
                ],
                'Infinix[ _-]([a-z0-9_\-]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // InnJoo
        'InnJoo'   =>  [
            'name'=>'InnJoo',
            'category'=>'smartphone',
            'sub'=>[
                'InnJoo[ _]X'=>[
                    'name'=>'X',
                ],
            ]
        ],
                

        // Inkti
        'intki[ _]([^/;]*)[ _]Build'   =>  [
            'name'=>'Inkti',
            'category'=>'smartphone',
            'sub'=>[
                'intki[ _]([^/;]*)[ _]Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Innostream
        'INNO([a-z0-9]+)'   =>  [
            'name'=>'Innostream',
            'category'=>'feature phone',
            'sub'=>[
                'INNO([a-z0-9]+)'=>[
                    'name'=>'INNO$1',
                ],
            ]
        ],

        // Inq
        'INQ[/ ]'   =>  [
            'name'=>'INQ',
            'category'=>'feature phone',
            'sub'=>[
                'INQ/([a-z0-9\-]+)'=>[
                    'name'=>'$1',
                ],
                'INQ ([^;/]+) Build'=>[
                    'name'=>'$1',
                    'category'=>'smartphone',
                ],
            ]
        ],
                
        // Intex
        'Intex|(Aqua|Cloud[ _][XY][0-9]{1})'   =>  [
            'name'=>'Intex',
            'category'=>'smartphone',
            'sub'=>[
                'Intex[ _]([^/;]*)[ _]Build'=>[
                    'name'=>'$1',
                ],
                '(Aqua|Cloud)[ _\.]([^/;\)]+)(?:[ _]Build|(?<!Build)/|\))'=>[
                    'name'=>'$1 $2',
                ],
                'Intex[ _]([a-z0-9_+\-]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // i-mate
        'i-mate ([a-z0-9]+)'   =>  [
            'name'=>'i-mate',
            'category'=>'feature phone',
            'sub'=>[
                'i-mate ([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // i-mobile
        'i-mobile ?[a-z0-9]+|i-Style|IQ ?(9\.1|5\.5|5\.6A?)'   =>  [
            'name'=>'i-mobile',
            'category'=>'feature phone',
            'sub'=>[
                'i-mobile (i-note[^/;]*) Build'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'i-Style ?([^;/]+) Build'=>[
                    'name'=>'i-Style $1',
                    'category'=>'smartphone',
                ],
                'IQ ?(9\.1|5\.5|5\.6A?)'=>[
                    'name'=>'IQ $1',
                    'category'=>'smartphone',
                ],
                'i-mobile (IQ[^/;]*) Build'=>[
                    'name'=>'$1',
                    'category'=>'smartphone',
                ],
                'i-mobile(?: )?([a-z0-9\- ]+) Build'=>[
                    'name'=>'$1',
                ],
                'i-mobile(?: )?([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // ikomo
        'iKoMo ([a-z0-9]+)'   =>  [
            'name'=>'iKoMo',
            'category'=>'feature phone',
            'sub'=>[
                'iKoMo ([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // iOcean
        'iOCEAN'   =>  [
            'name'=>'iOcean',
            'category'=>'smartphone',
            'sub'=>[
                'iOCEAN[ _\-]?([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                'iOCEAN[ _\-]?([^);/ ]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // iView
        '733TPC'   =>  [
            'name'=>'iView',
            'category'=>'smartphone',
            'sub'=>[
                '733TPC'=>[
                    'name'=>'733TPC',
                    'category'=>'tablet',
                ],
            ]
        ],

        // Impression
        '(?:Impression[ _\-]?([^/;]+)|A502|I10\-LE|ImPad[ _]?(.*)|ImSmart[ _]?(.*)) Build'   =>  [
            'name'=>'Impression',
            'category'=>'tablet',
            'sub'=>[
                '(A502)'=>[
                    'name'=>'$1',
                    'category'=>'smartphone',
                ],
                'ImSmart[ _]?(.*) Build'=>[
                    'name'=>'ImSmart $1',
                    'category'=>'smartphone',
                ],
                'ImPad[ _]?(.*) Build'=>[
                    'name'=>'ImPad $1',
                ],
                '(I10\-LE)'=>[
                    'name'=>'$1',
                    'category'=>'smartphone',
                ],
                'Impression[ _\-]?([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // iTel
        'itel|iNote'   =>  [
            'name'=>'iTel',
            'category'=>'smartphone',
            'sub'=>[
                'iNote ([^/;]*)Build'=>[
                    'name'=>'iNote $1',
                ],
                'iNote_([a-z0-9\-_]+)'=>[
                    'name'=>'iNote $1',
                ],
                'iTel ([^/;]*)Build'=>[
                    'name'=>'$1',
                ],
                'iTel_([a-z0-9\-_]*)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // JAY-Tech
        'TPC-[A-Z0-9]+'   =>  [
            'name'=>'JAY-Tech',
            'category'=>'tablet',
            'sub'=>[
                'TPC-([A-Z0-9]+)'=>[
                    'name'=>'Tablet PC $1',
                ],
            ]
        ],

        // Jiayu
        '(JY-[a-z0-9]+)[);/ ]'   =>  [
            'name'=>'Jiayu',
            'category'=>'smartphone',
            'sub'=>[
                '(JY-[a-z0-9]+)[);/ ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Jolla
        'Jolla'   =>  [
            'name'=>'Jolla',
            'category'=>'smartphone',
            'sub'=>[
                'Jolla'=>[
                    'name'=>'',
                ],
            ]
        ],

        // Kalley
        'ELEMENT Q'   =>  [
            'name'=>'Kalley',
            'category'=>'smartphone',
            'sub'=>[
                'ELEMENT Q'=>[
                    'name'=>'Element Q',
                ],
            ]
        ],
                

        // Kazam
        'Kazam ([^;/]+) Build|Trooper_X[0-9][0-9][);/ ]|Tornado 348'   =>  [
            'name'=>'Kazam',
            'category'=>'smartphone',
            'sub'=>[
                'Tornado 348'=>[
                    'name'=>'Tornado 348',
                ],
                'Trooper_X([0-9])([0-9])[);/ ]'=>[
                    'name'=>'Trooper X$1.$2',
                ],
                'Kazam ([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Kempler & Strauss
        'Alumini_?3_?Plus|Alumini ?[23]|KEMPLER_(TV|X)'   =>  [
            'name'=>'Kempler & Strauss',
            'category'=>'smartphone',
            'sub'=>[
                'Alumini ?2'=>[
                    'name'=>'Alumini 2',
                ],
                'Alumini_?3_?Plus'=>[
                    'name'=>'Alumini 3 Plus',
                ],
                'Alumini3'=>[
                    'name'=>'Alumini 3',
                ],
                'KEMPLER_TV'=>[
                    'name'=>'TV',
                ],
                'KEMPLER_X'=>[
                    'name'=>'X',
                ],
            ]
        ],

        // Kiano
        'Kiano|Elegance_5_0|CORE 10.1 DUAL 3G|Intelect ?(7|8|10)|Slim ?Tab ?\d+(?:[_ ]3GR?)?[);/ ]|Cavion[_ ]'   =>  [
            'name'=>'Kiano',
            'category'=>'smartphone',
            'sub'=>[
                'Slim ?Tab ?(\d+)(?:[_ ]3GR?)?'=>[
                    'name'=>'Slim Tab $1',
                    'category'=>'tablet',
                ],
                'Cavion[_ ](?:Base[_ ])?(\d+)'=>[
                    'name'=>'Cavion Base $1',
                    'category'=>'tablet',
                ],
                'CORE 10.1 DUAL 3G'=>[
                    'name'=>'CORE 10.1 DUAL 3G',
                    'category'=>'tablet',
                ],
                'Elegance_5_0'=>[
                    'name'=>'Elegance 5.0',
                ],
                '(Kiano)?(Intelect|Elegance) ?(7|8|10)?'=>[
                    'name'=>'$2 $3',
                    'category'=>'tablet',
                ],
                'Kiano[ _]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Kingsun
        'Kingsun[ _-]'   =>  [
            'name'=>'Kingsun',
            'category'=>'smartphone',
            'sub'=>[
                'Kingsun[ _-]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Kingsun[ -]((?!Build)[a-z0-9_-]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Kocaso
        'Kocaso|M(?:729|7[357][026][hw]?|76[01236][bw]?|83[016]|8[567]0|1050s|106[012368]w?|1070|X736(?:-kit)?|X780)[);/ ]'   =>  [
            'name'=>'Kocaso',
            'category'=>'tablet',
            'sub'=>[
                'M729[);/ ]'=>[
                    'name'=>'M729',
                ],
                'M(7[357][026])[hw]?[);/ ]'=>[
                    'name'=>'M$1',
                ],
                'M(76[01236])[bw]?[);/ ]'=>[
                    'name'=>'M$1',
                ],
                'MX780[);/ ]'=>[
                    'name'=>'MX780',
                ],
                'M(83[016])[);/ ]'=>[
                    'name'=>'M$1',
                ],
                'M(8[567]0)[);/ ]'=>[
                    'name'=>'M$1',
                ],
                'M851[);/ ]'=>[
                    'name'=>'M851',
                ],
                'M1050S[);/ ]'=>[
                    'name'=>'M1050s',
                ],
                'M(106[012368])W?[);/ ]'=>[
                    'name'=>'M$1',
                ],
                'M1070[);/ ]'=>[
                    'name'=>'M1070',
                ],
                'MX736(?:-kit)?[);/ ]'=>[
                    'name'=>'MX736',
                ],
                'MX780[);/ ]'=>[
                    'name'=>'MX780',
                ],
                'Kocaso[ _\-]?([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Kocaso[ _\-]?([a-z0-9_-]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Kogan
        'Kogan'   =>  [
            'name'=>'Kogan',
            'category'=>'smartphone',
            'sub'=>[
                'Kogan[ _-]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Kogan[ _-]([a-z0-9_-]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Komu
        'Komu[ -]'   =>  [
            'name'=>'Komu',
            'category'=>'smartphone',
            'sub'=>[
                'Komu[ -]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Komu[ -]([a-z0-9_-]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Koobee
        'Koobee'   =>  [
            'name'=>'Koobee',
            'category'=>'smartphone',
            'sub'=>[
                'Koobee[ _\-]?([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Koobee[ _\-]?([a-z0-9_-]+)'=>[
                    'name'=>'$1',
                ],

            ]
        ],
                
        // Kumai
        '(?:KM-)?Kumai'   =>  [
            'name'=>'Kumai',
            'category'=>'smartphone',
            'sub'=>[
                '(?:KM-)?Kumai[ _\-]?([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                '(?:KM-)?Kumai[ _\-]?([a-z0-9_-]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // KT-Tech
        '(KM-[a-z0-9]+|EV-[a-z0-9]+)[);/ ]'   =>  [
            'name'=>'KT-Tech',
            'category'=>'smartphone',
            'sub'=>[
                '(KM-[a-z0-9]+|EV-[a-z0-9]+)[);/ ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // kddi
        'kddi-([a-z0-9]+)'   =>  [
            'name'=>'KDDI',
            'category'=>'feature phone',
            'sub'=>[
                'kddi-([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Kodak
        'KODAK'   =>  [
            'name'=>'Kodak',
            'category'=>'smartphone',
            'sub'=>[
                'KODAK_SMARTWAY_((M|T)1)'=>[
                    'name'=>'Smartway $1',
                ],
                'SMARTWAY X1'=>[
                    'name'=>'Smartway X1',
                ],
            ]
        ],
                
        // KOPO
        'KOPO[ _-]'   =>  [
            'name'=>'KOPO',
            'category'=>'smartphone',
            'sub'=>[
                'KOPO[ _\-]?([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                'KOPO[ _\-]?([^);/ ]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Koridy
        'KORIDY[ _-]([^/;]+) Build'   =>  [
            'name'=>'Koridy',
            'category'=>'smartphone',
            'sub'=>[
                'KORIDY[ _-]([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // KRONO
        'NET1100'   =>  [
            'name'=>'KRONO',
            'category'=>'smartphone',
            'sub'=>[
                'NET1100'=>[
                    'name'=>'NET 1100',
                ],
            ]
        ],

        //k-touch
        'K-?Touch[ _][a-z0-9]+'   =>  [
            'name'=>'K-Touch',
            'category'=>'smartphone',
            'sub'=>[
                'K-?Touch[ _]([^/;]*)[ _]Build'=>[
                    'name'=>'$1',
                ],
                'K-?Touch[ _]([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // kyocera
        'Kyocera|KWC-|QC-|C5120|C5170|C5155|C5215|C6730|C6750|C6522N?|C6530N|C6740|C6743|E6810|KYL21|KYY23|S2151|KC-S701'   =>  [
            'name'=>'Kyocera',
            'category'=>'smartphone',
            'sub'=>[
                // explicit smartphone models
                'C5120'=>[
                    'name'=>'Milano',
                ],
                'C5155'=>[
                    'name'=>'Rise',
                ],
                'C5170'=>[
                    'name'=>'Hydro',
                ],
                'C5215'=>[
                    'name'=>'Hydro EDGE',
                ],
                'C6522N?'=>[
                    'name'=>'Hydro XTRM',
                ],
                'C6730'=>[
                    'name'=>'Hydro ICON',
                ],
                'C6750'=>[
                    'name'=>'Hydro ELITE',
                ],
                'C6530N'=>[
                    'name'=>'Hydro LIFE',
                ],
                'C6740(N)?'=>[
                    'name'=>'Hydro WAVE',
                ],
                'C6743'=>[
                    'name'=>'Hydro Reach',
                ],
                'E6810'=>[
                    'name'=>'DuraForce Pro',
                ],
                'KC-S701'=>[
                    'name'=>'Torque',
                ],
                'KYL21'=>[
                    'name'=>'Digno S',
                ],
                'KYY23'=>[
                    'name'=>'Urbano L03',
                ],

                // explicit feature phone models
                'S2151'=>[
                    'name'=>'Coast',
                    'category'=>'feature phone',
                ],

                'Kyocera-KZ-([a-z0-9]+)'=>[
                    'name'=>'KZ $1',
                ],
                'Kyocera(?:[\-/])?([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                '(?:KWC|QC)-([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Krüger&Matz
        'Kruger Matz|MOVE_'   =>  [
            'name'=>'Krüger&Matz',
            'category'=>'smartphone',
            'sub'=>[
                'MOVE_6_mini'=>[
                    'name'=>'MOVE 6 Mini',
                ],
                'MOVE_([78])'=>[
                    'name'=>'MOVE $1',
                ],
                'DRIVE 4 mini LTE'=>[
                    'name'=>'DRIVE 4 mini LTE',
                ],
            ]
        ],
                
        // LAIQ
        'LAIQ'   =>  [
            'name'=>'LAIQ',
            'category'=>'smartphone',
            'sub'=>[
                '(Glam|New York)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Lava
        'Lava[ _]|iris[ _]?([^/;]+)(?:\)| Build)|A(?:67|76) Build|X1 Selfie Build|X41 Plus Build|Flair Z1|PixelV1|Z61_2GB'   =>  [
            'name'=>'Lava',
            'category'=>'smartphone',
            'sub'=>[
                'Flair Z1'=>[
                    'name'=>'Flair Z1',
                ],
                'A67 Build'=>[
                    'name'=>'A67',
                ],
                'A76 Build'=>[
                    'name'=>'A76',
                ],
                'PixelV1'=>[
                    'name'=>'Pixel V1',
                ],
                'X1 Selfie Build'=>[
                    'name'=>'Iris X1 Selfie',
                ],
                'X41 Plus Build'=>[
                    'name'=>'X41 Plus',
                ],
                'LAVA_A3'=>[
                    'name'=>'A3',
                ],
                'LAVA_R1'=>[
                    'name'=>'R1',
                ],
                'Z61_2GB'=>[
                    'name'=>'Z61',
                ],
                'iris[ _]?([^/;]+)(?:\)| Build)'=>[
                    'name'=>'Iris $1',
                ],
                'Lava[ _]?([^/;]+)(?:/| Build)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Landvo
        'XM[123]00|(?<!Blade )S6 Build'   =>  [
            'name'=>'Landvo',
            'category'=>'smartphone',
            'sub'=>[
                'S6 Build'=>[
                    'name'=>'S6',
                ],
                'XM([123])00([^/;]*) Build'=>[
                    'name'=>'XM$100$2',
                ],
            ]
        ],
                
        // lanix
        'LANIX-([a-z0-9]+)|Ilium[ _]|X120C'   =>  [
            'name'=>'Lanix',
            'category'=>'smartphone',
            'sub'=>[
                'ILIUM[ _]PAD[ _]([^;/]+) Build'=>[
                    'name'=>'Ilium Pad $1',
                    'category'=>'tablet',
                ],
                'X120C'=>[
                    'name'=>'Ilium X120C',
                ],
                'Ilium[ _](Alpha 3|L(?:200|6[12]0|9[125]0|1[0124]00|1050|1120)|LT5[012]0|M[139]|S(?:106|520|6[27]0)|X(?:1[12]0|2[0126]0|5[12]0|500B|710))'=>[
                    'name'=>'Ilium $1',
                ],
                'ILIUM[ _]([^;/]+) Build'=>[
                    'name'=>'Ilium $1',
                ],
                'LANIX-([a-z0-9]+)'=>[
                    'name'=>'$1',
                    'category'=>'feature phone',
                ],
            ]
        ],

        // lct
        'LCT_([a-z0-9]+)'   =>  [
            'name'=>'LCT',
            'category'=>'feature phone',
            'sub'=>[
                'LCT_([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Le Pan
        'Le ?Pan|TC970 ([^;/]+)Build'   =>  [
            'name'=>'Le Pan',
            'category'=>'tablet',
            'sub'=>[
                'TC802A'=>[
                    'name'=>'Le Pan Mini',
                ],
                'TC970 ([^;/]+)Build'=>[
                    'name'=>'TC970 $1',
                ],
                'Le ?Pan ?(II|S)[);/ ]'=>[
                    'name'=>'Le Pan $1',
                ],
                'Le ?Pan ?([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Leagoo
        'M5 EDGE'   =>  [
            'name'=>'Leagoo',
            'category'=>'smartphone',
            'sub'=>[
                    'M5 EDGE'=>[
                    'name'=>'M5 Edge',
                ],
            ]
        ],
            
        // Ledstar
        'Trendy 5.0'   =>  [
            'name'=>'Ledstar',
            'category'=>'smartphone',
            'sub'=>[
                'Trendy 5.0'=>[
                    'name'=>'Trendy 5.0',
                ],
            ]
        ],
                
        // LeEco
        'LeEco|Le ?X[0-9][^;/]+|Le Max|Le [12]|X900 Build'   =>  [
            'name'=>'LeEco',
            'category'=>'smartphone',
            'sub'=>[
                'X900 Build'=>[
                    'name'=>'Le X900',
                ],
                'Le ?X526 Build'=>[
                    'name'=>'Le 2',
                ],
                'Le ?X([^;/]+) Build'=>[
                    'name'=>'Le X$1',
                ],
                'Le ?X([^ ;/]+)'=>[
                    'name'=>'Le X$1',
                ],
                'Le ?([12][^;/]+) Build'=>[
                    'name'=>'Le $1',
                ],
                'Le Max([^;/]*) Build'=>[
                    'name'=>'Le Max$1',
                ],
                'Le Max([^ ;/]*)'=>[
                    'name'=>'Le Max$1',
                ],
                'LeEco ([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Leotec
        'LESPH501[14]'   =>  [
            'name'=>'Leotec',
            'category'=>'smartphone',
            'sub'=>[
                'LESPH5011'=>[
                    'name'=>'Argon e250',
                ],
                'LESPH5014'=>[
                    'name'=>'Krypton K150',
                ],
            ]
        ],
                
        // lenco
        'Lenco ([^/;]*) Build'   =>  [
            'name'=>'Lenco',
            'category'=>'tablet',
            'sub'=>[
                'Lenco ([^/;]*) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // lenovo
        '(?:LNV-)?Lenovo|IdeaTab|IdeaPad|Thinkpad|Yoga Tablet|Tab2A[0-9]-[0-9]{2}[a-z]?|YT3-X50L|ZUK[ -_]|K50a40|TB-(8504F|X304F|X704V|X704A)|A2107A-H|S6000[ ;)]'   =>  [
            'name'=>'Lenovo',
            'category'=>'smartphone',
            'sub'=>[
                'Lenovo ?G780'=>[
                    'name'=>'G780',
                    'category'=>'desktop',
                ],
                'Lenovo ?A3500-FL'=>[
                    'name'=>'IdeaTab A7-40',
                    'category'=>'tablet',
                ],
                'Lenovo ?A3500-(H|HV|F)'=>[
                    'name'=>'IdeaTab A7-50',
                    'category'=>'tablet',
                ],
                'Lenovo ?A5500-[HF]'=>[
                    'name'=>'IdeaTab A8-50',
                    'category'=>'tablet',
                ],
                'Lenovo ?A7600-[HF]'=>[
                    'name'=>'IdeaTab A10-70',
                    'category'=>'tablet',
                ],
                'A2107A-H'=>[
                    'name'=>'A2107',
                    'category'=>'tablet',
                ],
                'TB2-X30[FL]'=>[
                    'name'=>'Tab 2 A10-30',
                    'category'=>'tablet',
                ],
                'YT3-X50[FL]'=>[
                    'name'=>'Yoga Tab 3',
                    'category'=>'tablet',
                ],
                'TB3-710[IF]'=>[
                    'name'=>'TAB3 7 Essential',
                    'category'=>'tablet',
                ],
                'TB3-850[FM]'=>[
                    'name'=>'TAB3 8',
                    'category'=>'tablet',
                ],
                'Lenovo TB-X304[FL]'=>[
                    'name'=>'TAB4 10',
                    'category'=>'tablet',
                ],
                'TB-X704V'=>[
                    'name'=>'TAB4 10 Plus',
                    'category'=>'tablet',
                ],
                'TB-X704A'=>[
                    'name'=>'Moto Tab',
                    'category'=>'tablet',
                ],
                'Lenovo ?B8000(-[FH])?'=>[
                    'name'=>'Yoga Tablet 10',
                    'category'=>'tablet',
                ],
                'Lenovo ?B6000(-[FH])?'=>[
                    'name'=>'Yoga Tablet 8',
                    'category'=>'tablet',
                ],
                'YT3-X90(L|F|X)'=>[
                    'name'=>'Yoga 3 Pro',
                    'category'=>'tablet',
                ],
                'YT3-850[FL]'=>[
                    'name'=>'Yoga Tab 3 8',
                    'category'=>'tablet',
                ],

                'S6000[ ;)]'=>[
                    'name'=>'IdeaTab S6000',
                    'category'=>'tablet',
                ],
                'Lenovo ([ASB][0-9]{4})[A-Z]?\-[EHF]'=>[
                    'name'=>'IdeaTab $1',
                    'category'=>'tablet',
                ],
                'ThinkPadTablet_(A[0-9]{3})_'=>[
                    'name'=>'ThinkPad Tablet $1',
                    'category'=>'tablet',
                ],
                'ThinkPad ?Tablet([^;/]*) Build'=>[
                    'name'=>'ThinkPad Tablet$1',
                    'category'=>'tablet',
                ],
                'IdeaPad ?([^;/]*) Build'=>[
                    'name'=>'IdeaPad $1',
                    'category'=>'tablet',
                ],
                'Lenovo TAB ?([^/;]*) Build'=>[
                    'name'=>'TAB $1',
                    'category'=>'tablet',
                ],
                'Lenovo ?A3300-(?:GV|H)'=>[
                    'name'=>'TAB 2 A7-30',
                    'category'=>'tablet',
                ],
                'TB-8504F'=>[
                    'name'=>'TAB 4 8',
                    'category'=>'tablet',
                ],
                'TB-X304F'=>[
                    'name'=>'TAB 4 10',
                    'category'=>'tablet',
                ],
                'Tab2A([0-9]-[0-9]{2}[a-z]?)'=>[
                    'name'=>'TAB 2 A$1',
                    'category'=>'tablet',
                ],
                'IdeaTab[ \-_]?([a-z0-9]+)'=>[
                    'name'=>'IdeaTab $1',
                    'category'=>'tablet',
                ],
                'Yoga Tablet([^;/]+) Build'=>[
                    'name'=>'Yoga Tablet$1',
                    'category'=>'tablet',
                ],
                'Lenovo TB\-X704F Build/NMF26F'=>[
                    'name'=>'Tab 4 10 Plus',
                    'category'=>'tablet',
                ],
                'Lenovo (TB[0-9]?\-[a-z0-9\-]+) Build'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'ZUK[ -_]([^/;]*) Build'=>[
                    'name'=>'ZUK $1',
                ],
                'Z2151'=>[
                    'name'=>'ZUK Edge',
                ],
                'Z2132'=>[
                    'name'=>'ZUK Z2',
                ],
                'Z2121'=>[
                    'name'=>'ZUK Z2 Pro',
                ],
                'K10a40 Build'=>[
                    'name'=>'C2',
                ],
                'k50a40 Build'=>[
                    'name'=>'K3 Note',
                ],
                'A7010a48 Build'=>[
                    'name'=>'K4 Note',
                ],
                'A7020a48 Build'=>[
                    'name'=>'K5 Note',
                ],
                '(?:Lenovo-)?A6020(?:a40|l36) Build'=>[
                    'name'=>'K5 Vibe',
                ],
                'A6020a46 Build'=>[
                    'name'=>'K5 Vibe Plus',
                ],
                'k33a48 Build'=>[
                    'name'=>'K6',
                ],
                'k53a48 Build'=>[
                    'name'=>'K6 Note',
                ],
                'K33a42 Build'=>[
                    'name'=>'K6 Power',
                ],
                'P1(?:ma40|a42) Build'=>[
                    'name'=>'P1 Vibe',
                ],
                'P2a42 Build'=>[
                    'name'=>'P2',
                ],
                'Z90a40 Build'=>[
                    'name'=>'Vibe Shot',
                ],
                'S1a40 Build'=>[
                    'name'=>'Vibe S1',
                ],
                'Lenovo ([^/;]*) Build'=>[
                    'name'=>'$1',
                ],
                '(?:LNV-|Lenovo-)?Lenovo[ \-_]?([a-z0-9_+\-]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Lexand
        '(?:SC7 PRO HD|S5A[1-4]|S4A[1-5]|S6A1|A811|A802)[);/ ]|Lexand ([^;/]+) Build'   =>  [
            'name'=>'Lexand',
            'category'=>'smartphone',
            'sub'=>[
                'A(811|802)'=>[
                    'name'=>'A$1',
                    'category'=>'tablet',
                ],

                'S4A1'=>[
                    'name'=>'Vega',
                ],
                'S4A2'=>[
                    'name'=>'Irida',
                ],
                'S4A3'=>[
                    'name'=>'Pallada',
                ],
                'S4A5'=>[
                    'name'=>'Oxygen',
                ],
                'S4A4 NEON'=>[
                    'name'=>'S4A4 Neon',
                ],
                'S5A1'=>[
                    'name'=>'Callisto',
                ],
                'S5A2'=>[
                    'name'=>'Overon',
                ],
                'S5A3'=>[
                    'name'=>'Capella',
                ],
                'S5A4'=>[
                    'name'=>'Argon',
                ],
                'S6A1'=>[
                    'name'=>'Antares',
                ],
                'SC7 PRO HD'=>[
                    'name'=>'SC7 PRO HD',
                ],

                'Lexand ([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // lexibook
        '(MFC[0-9]{3}[a-z]{2,})'   =>  [
            'name'=>'Lexibook',
            'category'=>'tablet',
            'sub'=>[
                // Explicit tablet models
                'MFC191FR'=>[
                    'name'=>'Tablet Ultra 3 XL',
                ],
                'MFC045FR'=>[
                    'name'=>'TabTab',
                ],
                'MFC163FR'=>[
                    'name'=>'Tablet Master 3',
                ],
                'MFC142FR'=>[
                    'name'=>'Tablet Kids',
                ],
                'MFC250FR'=>[
                    'name'=>'Tablet Junior',
                ],
                'MFC270FR'=>[
                    'name'=>'Tablet Junior Power Touch',
                ],
                'MFC280FR'=>[
                    'name'=>'Tablet Junior 2',
                ],
                'MFC156FR'=>[
                    'name'=>'Tablet One',
                ],
                'MFC155FR'=>[
                    'name'=>'Tablet Master',
                ],
                'MFC157FR'=>[
                    'name'=>'Tablet Master 2',
                ],
                'MFC17[05]FR'=>[
                    'name'=>'Tablet Ultra',
                ],
                'MFC375FR'=>[
                    'name'=>'Tablet Ultra 2',
                ],
                'MFC162FR'=>[
                    'name'=>'Power Tablet',
                ],
                'MFC180FR'=>[
                    'name'=>'Tablet Advanced',
                ],
                'MFC181FR'=>[
                    'name'=>'Tablet Advanced 2',
                ],
                'MFC500FR'=>[
                    'name'=>'Tablet XL',
                ],
                'MFC190BBFR'=>[
                    'name'=>'Barbie Tablet',
                ],
                'MFC195DCFR'=>[
                    'name'=>'Tablet Disney Cars HD',
                ],
                'MFC195FUFR'=>[
                    'name'=>'Furby Tablet',
                ],
                'MFC195DPFR'=>[
                    'name'=>'Tablet Disney Princesse HD',
                ],
                'MFC140FR'=>[
                    'name'=>'LapTab',
                ],
                'MFC141FR'=>[
                    'name'=>'LapTab 2',
                ],

                '(MFC[0-9]{3}[a-z]{2,})'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // LG
        'LG|portalmmm/2\.0 (?:KE|KG|KP|L3)|(?:VX[0-9]+|L-0[12]D|L-07C|P713|LM-Q710(?:\(FGN\)|\.FGN?)?|LM-X210(?:\(G\)|CM)?|LM-G710N?|LM-V405|LM-X410(?:\(FGN?\)|\.F(?:GN?)?))[);/ ]|NetCast|RS987|VS(?:501|988|99[56]|(410|415|425|500)PP)|Nexsus 5|LML211BL|LML212VL'   =>  [
            'name'=>'LG',
            'category'=>'smartphone',
            'sub'=>[
                'LG-D325'=>[
                    'name'=>'L70',
                ],
                'LG-D85[0125]'=>[
                    'name'=>'G3',
                ],
                'LG-D72[2458]'=>[
                    'name'=>'G3 Beat',
                ],
                'LG-H81[158]'=>[
                    'name'=>'G4',
                ],
                'LG-H525n?'=>[
                    'name'=>'G4c',
                ],
                'LG-H540'=>[
                    'name'=>'G4 Stylus',
                ],
                'LG-H735'=>[
                    'name'=>'G4 Beat',
                ],
                'LG-H8(?:20|30|5[08]|60)'=>[
                    'name'=>'G5',
                ],
                'LG-H84[05]'=>[
                    'name'=>'G5 SE',
                ],
                'VS988'=>[
                    'name'=>'G6',
                ],
                'VS501'=>[
                    'name'=>'K20',
                ],
                '(?:LG-)?H502'=>[
                    'name'=>'Magna',
                ],
                '(?:LG-)?H343'=>[
                    'name'=>'Risio',
                ],
                '(?:LG-)?H650'=>[
                    'name'=>'Zero',
                ],
                '(?:LG-)?M154'=>[
                    'name'=>'Risio 2',
                ],
                '(?:LG-)?P500H'=>[
                    'name'=>'Optimus One',
                ],
                'P713'=>[
                    'name'=>'Optimus L7II',
                ],
                'L-01D'=>[
                    'name'=>'Optimus LTE L-01D',
                ],
                'L-02D'=>[
                    'name'=>'PRADA phone L-02D',
                ],
                'L-07C'=>[
                    'name'=>'Optimus Bright L-07C',
                ],
                '(?:LG-)?F800(?:S|K|L)?'=>[
                    'name'=>'V20',
                ],
                'LM-Q710(?:\(FGN\)|\.FGN)'=>[
                    'name'=>'Q Stylus Plus',
                ],
                'LM-Q710\.FG'=>[
                    'name'=>'Q7',
                ],
                'LM-Q710'=>[
                    'name'=>'Stylo 4',
                ],
                'LM-G710N?'=>[
                    'name'=>'G7 ThinQ',
                ],
                'LM-X210CM'=>[
                    'name'=>'Fortune 2',
                ],
                'LM-X410\.F[);/ ]'=>[
                    'name'=>'Premier Pro',
                ],
                'LM-X410'=>[
                    'name'=>'LM-X410',
                ],
                'LM-X210'=>[
                    'name'=>'Aristo 2',
                ],
                'LM-V405'=>[
                    'name'=>'V40 ThinQ',
                ],
                '(?:LG-)?(?:RS987|H901)'=>[
                    'name'=>'V10',
                ],
                '(?:LG-)?H91[058]'=>[
                    'name'=>'V20',
                ],
                '(?:LG-)?H990(?:DS|N|T)?'=>[
                    'name'=>'V20',
                ],
                '(?:LG-)?LS997'=>[
                    'name'=>'V20',
                ],
                '(?:LG-)?VS995'=>[
                    'name'=>'V20',
                ],
                '(?:LG-)?US999'=>[
                    'name'=>'V20',
                ],
                'VS996'=>[
                    'name'=>'V30',
                ],
                '(?:LG-)?VS410PP'=>[
                    'name'=>'Optimus Zone',
                ],
                '(?:LG-)?VS415PP'=>[
                    'name'=>'Optimus Zone 2',
                ],
                '(?:LG-)?VS425PP'=>[
                    'name'=>'Optimus Zone 3',
                ],
                '(?:LG-)?K100'=>[
                    'name'=>'K3',
                ],
                '(?:LG-?)?(?:K|MS)33[02]'=>[
                    'name'=>'K7',
                ],
                '(?:LG-?)?(?:K|MS)350'=>[
                    'name'=>'K8',
                ],
                'VS500PP'=>[
                    'name'=>'K8 V',
                ],
                '(?:LG-)?K420(?:N)?'=>[
                    'name'=>'K10',
                ],
                '(?:LG-)?K430(?:DS|DSF|DSY)?'=>[
                    'name'=>'K10',
                ],
                '(?:LG-)?M250N?'=>[
                    'name'=>'K10 (2017)',
                ],
                '(?:LG-)?F670[KLS]?'=>[
                    'name'=>'K10',
                ],
                '(?:LG-)?M255'=>[
                    'name'=>'K20',
                ],
                '(?:LG-?)?[MT]P260'=>[
                    'name'=>'K20 Plus',
                ],
                '(?:LG-)?M700(?:N|A|DSK|AN)?'=>[
                    'name'=>'Q6',
                ],
                '(?:LG-?)?K220'=>[
                    'name'=>'X Power',
                ],
                '(?:LG-)?K371'=>[
                    'name'=>'Phoenix 2',
                ],
                '(?:LG-)?M150'=>[
                    'name'=>'Phoenix 3',
                ],
                '(?:LG-)?F100[SL]'=>[
                    'name'=>'Optimus Vu',
                ],
                '(?:LG-)?P880'=>[
                    'name'=>'Optimus 4X HD',
                ],
                '(?:LG-)?H340n?'=>[
                    'name'=>'Leon',
                ],
                '(?:LG)?C660'=>[
                    'name'=>'Optimus Pro',
                ],
                'LML211BL|LML212VL'=>[
                    'name'=>'Rebel 4',
                ],

                'LG-V490'=>[
                    'name'=>'G Pad 8.0',
                    'category'=>'tablet',
                ],
                'LG-V500'=>[
                    'name'=>'G Pad 8.3',
                    'category'=>'tablet',
                ],
                'LG-V700'=>[
                    'name'=>'G Pad 10.1',
                    'category'=>'tablet',
                ],
                'LG-V935'=>[
                    'name'=>'G Pad II 10.1',
                    'category'=>'tablet',
                ],
                'LG-V521'=>[
                    'name'=>'G Pad X 8.0',
                    'category'=>'tablet',
                ],

                'webOS.TV'=>[
                    'name'=>'WebOS TV',
                    'category'=>'tv',
                ],
                'LGE_DLNA_SDK|NetCast'=>[
                    'name'=>'NetCast',
                    'category'=>'tv',
                ],

                'LGE(?: |-LG| LG-AX|-)([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'LGE;([a-z0-9\-]+)'=>[
                    'name'=>'$1',
                ],
                'LG[ _\-](V90.*|Optimus[ _\-]Pad.*) Build'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'LG(?:/|-LG| |-)?([^/;]*) Build'=>[
                    'name'=>'$1',
                ],
                'LG(?:/|-LG| |-)?([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'LG; ([a-z0-9 ]+)'=>[
                    'name'=>'$1',
                ],
                'portalmmm/2.0 ((?:KE|KG|KP|L3)[a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                '(VX[0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Lingwin
        'Lingwin[ _\-]'   =>  [
            'name'=>'Lingwin',
            'category'=>'smartphone',
            'sub'=>[
                'Lingwin[ _\-]?([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                'Lingwin[ _\-]?([^);/ ]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Logicom
        '(TAB950|TAB1062|E731|E812|E912|E1031|POWER BOT|(?:B|C|M|ID|VR)[ _]?BOT[ _]?(?:TAB[ _])?([0-9]+\+?)(?:PLUS)?|KT712A_4\.4|L-?IXIR[0-9]*|L-ITE|L-?EMENT|Le Lift)[_);/ ]'   =>  [
            'name'=>'Logicom',
            'category'=>'tablet',
            'sub'=>[
                'KT712A_4.4'=>[
                    'name'=>'L-ixir Tab 701',
                ],
                'LIXIR1041'=>[
                    'name'=>'L-ixir Tab 1041',
                ],
                'L-?IXIR TAB ([^;/]+) Build'=>[
                    'name'=>'L-ixir Tab $1',
                ],
                'L-ITE[ _]([^;/]+) Build'=>[
                    'name'=>'L-ite Tab $1',
                ],
                'L-?EMENT[ _](?:TAB)?([^;/]+) Build'=>[
                    'name'=>'L-ement Tab $1',
                ],
                '(TAB950|TAB1062|E731|E812|E912|E1031)[);/ ]'=>[
                    'name'=>'$1',
                ],
                'POWER BOT'=>[
                    'name'=>'POWER BOT',
                ],
                '((?:B|C|M|ID|VR))[ _]?BOT[ _]?((?:TAB[ _])?([0-9]+\+?)(?:PLUS)?)'=>[
                    'name'=>'$1 BOT $2',
                ],
                'Le Lift'=>[
                    'name'=>'Le Lift',
                    'category'=>'smartphone',
                ],
            ]
        ],

        // Konka
        'KONKA[_ ]([a-z0-9]+)'   =>  [
            'name'=>'Konka',
            'category'=>'smartphone',
            'sub'=>[
                // Explicit smartphone models
                'E5660S'=>[
                    'name'=>'Viva 5660s',
                ],
                'W830'=>[
                    'name'=>'Tango 830',
                ],
                'W(9[67]0)'=>[
                    'name'=>'Expose $1',
                ],
                'W990'=>[
                    'name'=>'Tuxedo 990',
                ],

                'KONKA[_ ]([a-z0-9]+)'=>[
                    'name'=>'$1',
                    'category'=>'feature phone',
                ],
            ]
        ],
                

        // Konrow
        '(?:BIGCOOL|COOLFIVE|COOL-K|Just5|Link5)[);/ ]'   =>  [
            'name'=>'Konrow',
            'category'=>'smartphone',
            'sub'=>[
                'BIGCOOL[);/ ]'=>[
                    'name'=>'BigCool',
                ],
                'COOL-K[);/ ]'=>[
                    'name'=>'Cool-K',
                ],
                'COOLFIVE[);/ ]'=>[
                    'name'=>'Cool Five',
                ],
                'Just5[);/ ]'=>[
                    'name'=>'Just 5',
                ],
                'Link5[);/ ]'=>[
                    'name'=>'Link 5',
                ],
            ]
        ],
                
        // Karbonn
        '(?:Browser-)?Karbonn|K9 Kavach 4G|K9 Music 4G|K9 Smart|K9 VIRAAT 4G'   =>  [
            'name'=>'Karbonn',
            'category'=>'smartphone',
            'sub'=>[
                'K9 Kavach 4G'=>[
                    'name'=>'K9 Kavach 4G',
                ],
                'K9 Music 4G'=>[
                    'name'=>'K9 Music 4G',
                ],
                'K9 Smart 1GB'=>[
                    'name'=>'K9 Smart',
                ],
                'K9 Smart 4G'=>[
                    'name'=>'K9 Smart 4G',
                ],
                'K9 Smart Grand'=>[
                    'name'=>'K9 Smart Grand',
                ],
                'K9 Smart Yuva'=>[
                    'name'=>'K9 Smart Yuva',
                ],
                'K9 Smart'=>[
                    'name'=>'K9 Smart',
                ],
                'karbonnK9 Viraat 4G|K9 VIRAAT 4G'=>[
                    'name'=>'K9 Viraat 4G',
                ],
                'Titanium[ _]S2[ _]Plus'=>[
                    'name'=>'Titanium S2 Plus',
                ],
                'Titanium_S99'=>[
                    'name'=>'Titanium S99',
                ],
                'Karbonn ([a-z0-9]+) WAP-Browser'=>[
                    'name'=>'$1',
                    'category'=>'feature phone',
                ],
                'WAP Browser-Karbonn ([a-z0-9]+)/'=>[
                    'name'=>'$1',
                    'category'=>'feature phone',
                ],
                'Karbonn_([^;/)]+)'=>[
                    'name'=>'$1',
                ],
                'Karbonn ([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Karbonn ([^;/]+)/'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Sagem
        'SAGEM|portalmmm/2.0 (?:SG|my)'   =>  [
            'name'=>'Sagem',
            'category'=>'smartphone',
            'sub'=>[
                'SAGEM-(my[a-z0-9\-]+)'=>[
                    'name'=>'$1',
                    'category'=>'feature phone',
                ],
                'SAGEM ([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'SAGEM-([a-z0-9\-]+)'=>[
                    'name'=>'$1',
                ],
                'portalmmm/2.0 ((?:SG|my)[a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Coby Kyros
        '(MID(?:1024|1125|1126|1045|1048|1060|1065|4331|7012|7015A?|7016|7022|7032|7035|7036|7042|7047|7048|7052|7065|7120|8024|8042|8048|8065|8125|8127|8128|9724|9740|9742))[);/ ]'   =>  [
            'name'=>'Coby Kyros',
            'category'=>'tablet',
            'sub'=>[
                '(MID(?:1024|1125|1126|1045|1048|1060|1065|4331|7012|7015A?|7016|7022|7032|7035|7036|7042|7047|7048|7052|7065|7120|8024|8042|8048|8065|8125|8127|8128|9724|9740|9742))[);/ ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Mpman
        '(?:MPQC|MPDC)[0-9]+|PH(?:150|340|350|360|451|500|520)|(?:MID(?:7C|74C|82C|84C|801|811|701|711|170|77C|43C|102C|103C|104C|114C)|MP(?:843|717|718|1010|7007|7008|843|888|959|969)|MGP7)[);/ ]'   =>  [
            'name'=>'Mpman',
            'category'=>'tablet',
            'sub'=>[
                '((?:MPQC|MPDC)[0-9]+[^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                '(MID(?:7C|74C|82C|84C|801|811|701|711|170|77C|43C|102C|103C|104C|114C)|MP(?:843|717|718|1010|7007|7008|843|888|959|969)|MGP7)[);/ ]'=>[
                    'name'=>'$1',
                ],
                '(PH(?:150|340|350|360|451|500|520))'=>[
                    'name'=>'$1',
                    'category'=>'smartphone',
                ],
            ]
        ],

        // Majestic
        'MAJESTIC[ _-]|CRONO ?[0-9]+'   =>  [
            'name'=>'Majestic',
            'category'=>'smartphone',
            'sub'=>[
                 'MAJESTIC[ _]Tab([^;/]+)Build'=>[
                    'name'=>'Tab$1',
                    'category'=>'tablet',
                ],
                      
                'MAJESTIC[ _]Tab([^);/]+)[);/]'=>[
                    'name'=>'Tab$1',
                    'category'=>'tablet',
                ],
                      
                'MAJESTIC[ _]([^;/]+)Build'=>[
                    'name'=>'$1',
                ],
                      
                'MAJESTIC[ _]([^);/]+)[);/]'=>[
                    'name'=>'$1',
                ],
                      
                'CRONO ?([0-9]+) Build'=>[
                    'name'=>'Crono $1',
                ],
                      
                'CRONO ?([0-9]+)[);/]'=>[
                    'name'=>'Crono $1',
                ],
            ]
        ],

        // Manta Multimedia
        '((?<!/)MID713|MID(?:06[SN]|08[S]?|12|13|14|15|701|702|703|704|705(?:DC)?|706[AS]?|707|708|709|711|712|714|717|781|801|802|901|1001|1002|1003|1004(?: 3G)?|1005|1009|1010|7802|9701|9702))[);/ ]'   =>  [
            'name'=>'Manta Multimedia',
            'category'=>'tablet',
            'sub'=>[
                '((?<!/)MID713|MID(?:06[SN]|08[S]?|12|13|14|15|701|702|703|704|705(?:DC)?|706[AS]?|707|708|709|711|712|714|717|781|801|802|901|1001|1002|1003|1004(?: 3G)?|1005|1009|1010|7802|9701|9702))[);/ ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Maxwest
        'Astro_5N_LTE|Virtue Z5'   =>  [
            'name'=>'Maxwest',
            'category'=>'smartphone',
            'sub'=>[
                'Astro_5N_LTE'=>[
                    'name'=>'Astro 5N LTE',
                ],
                'Virtue Z5'=>[
                    'name'=>'Virtue Z5',
                ],
            ]
        ],
                
        // Mediacom
        '(?:SmartPad7503G|SmartPad970s2(?:3G)?|M[_-][MPS]P[0-9a-z]+|M-IPRO[0-9a-z]+)[);/ ]'   =>  [
            'name'=>'Mediacom',
            'category'=>'tablet',
            'sub'=>[
                'SmartPad7503G[);/ ]'=>[
                    'name'=>'SmartPad 750 3G',
                ],
                'SmartPad970s23G[);/ ]'=>[
                    'name'=>'SmartPad 970 S2 3G',
                ],
                'SmartPad970s2[);/ ]'=>[
                    'name'=>'SmartPad 970 S2',
                ],
                'M-MP84[02]M[);/ ]'=>[
                    'name'=>'SmartPad 8.0 Mobile',
                ],
                'M-MP940M[);/ ]'=>[
                    'name'=>'SmartPad 9.7 Mobile',
                ],
                'M-MP(?:710|720|725|726|740)GOx?[);/ ]'=>[
                    'name'=>'SmartPad 7.0 Go',
                ],
                'M-MP876S2[);/ ]'=>[
                    'name'=>'SmartPad 8.0 S2',
                ],
                'M-MP8S2[AB]?3G[);/ ]'=>[
                    'name'=>'SmartPad 8.0 S2 3G',
                ],
                'M-MP(101|102|860|875)S2[BW]?[);/ ]'=>[
                    'name'=>'SmartPad $1 S2',
                ],
                'M-MP85S23G[);/ ]'=>[
                    'name'=>'SmartPad 875 S2 3G',
                ],
                'M-SP1AGO3G'=>[
                    'name'=>'SmartPad 10 Go 3G',
                ],
                'M-MP10[45][01]S2[);/ ]'=>[
                    'name'=>'SmartPad 10.1 S2',
                ],
                'M-MP1S2[AB]3G[);/ ]'=>[
                    'name'=>'SmartPad 10.1 S2 3G',
                ],
                'M-MP8[24]S4[);/ ]'=>[
                    'name'=>'SmartPad 8.0 S4',
                ],
                'M-MP8S4[AB]3G[);/ ]'=>[
                    'name'=>'SmartPad 8.0 S4 3G',
                ],
                'M-MP9S4A3G[);/ ]'=>[
                    'name'=>'SmartPad 9.7 S4 3G',
                ],
                'M-MP1[02]S4[);/ ]'=>[
                    'name'=>'SmartPad 10.1 S4',
                ],
                'M-MP1040MC?[);/ ]'=>[
                    'name'=>'SmartPad 10.1 HD S4 3G',
                ],
                'M-MP1S4[AB]3G[);/ ]'=>[
                    'name'=>'SmartPad 10.1 S4 3G',
                ],
                'M-MP8PA3G[);/ ]'=>[
                    'name'=>'SmartPad 8.0 HD Pro 3G',
                ],
                'M-MP10PA[);/ ]'=>[
                    'name'=>'SmartPad 10.1 HD Pro',
                ],
                'M-MP10PA3G[);/ ]'=>[
                    'name'=>'SmartPad 10.1 HD Pro 3G',
                ],
                'M-IPRO([18][01]0)[BW][);/ ]'=>[
                    'name'=>'SmartPad 8.0 HD iPro$1 3G',
                ],

                '(?:M-MP75S23G|M-MP72[01]M)[);/ ]'=>[
                    'name'=>'SmartPad 7.0 Mobile',
                    'category'=>'phablet',
                ],
                'M-MP7S2[ABDK]3G[);/ ]'=>[
                    'name'=>'SmartPad 7.0 S2 3G',
                    'category'=>'phablet',
                ],
                'M-MP5303G[);/ ]'=>[
                    'name'=>'SmartPad Mini Mobile',
                    'category'=>'phablet',
                ],
                'M-PPAG550[);/ ]'=>[
                    'name'=>'PhonePad Duo G550',
                    'category'=>'phablet',
                ],
                'M-PP2G530[);/ ]'=>[
                    'name'=>'PhonePad Duo G530',
                    'category'=>'phablet',
                ],
                'M-PPG700[);/ ]'=>[
                    'name'=>'PhonePad Duo G700',
                    'category'=>'phablet',
                ],
                'M-PPxS531[);/ ]'=>[
                    'name'=>'PhonePad Duo S531',
                    'category'=>'phablet',
                ],
                'M-PP2S550[);/ ]'=>[
                    'name'=>'PhonePad Duo S550',
                    'category'=>'phablet',
                ],
                'M-PP2S650C?[);/ ]'=>[
                    'name'=>'PhonePad Duo S650',
                    'category'=>'phablet',
                ],
                'M-PPxS551U[);/ ]'=>[
                    'name'=>'PhonePad Duo S551U',
                    'category'=>'phablet',
                ],

                'M-PP[ABC]G500[);/ ]'=>[
                    'name'=>'PhonePad Duo G500',
                    'category'=>'smartphone',
                ],
                'M-PP2S500[BC]?[);/ ]'=>[
                    'name'=>'PhonePad Duo S500',
                    'category'=>'smartphone',
                ],
                'M[_-]PP[Ax]X(470|510|520)U[);/ ]'=>[
                    'name'=>'PhonePad Duo X$1U',
                    'category'=>'smartphone',
                ],
                'M-PPxG(400|501)[);/ ]'=>[
                    'name'=>'PhonePad Duo G$1',
                    'category'=>'smartphone',
                ],
                'M-PPxS(470|501)[);/ ]'=>[
                    'name'=>'PhonePad Duo S$1',
                    'category'=>'smartphone',
                ],

                'M-MP([0-9a-z]+)'=>[
                    'name'=>'SmartPad $1',
                ],
            ]
        ],
                
        // Medion
        'Medion|(?:MD_)?LIFETAB|X5001[);/ ]|[SPX]10[0-9]{2}X[);/ ]'   =>  [
            'name'=>'Medion',
            'category'=>'smartphone',
            'sub'=>[
                '(?:MD_)?LIFETAB_([a-z0-9]+)'=>[
                    'name'=>'Lifetab $1',
                    'category'=>'tablet',
                ],
                'X5001'=>[
                    'name'=>'Life X5001',
                ],
                '([SPX]10[0-9]{2}X)[);/ ]'=>[
                    'name'=>'Lifetab $1',
                    'category'=>'tablet',
                ],
                'Medion(?: Smartphone)? ([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // MEEG
        'MEEG[ _-]'   =>  [
            'name'=>'MEEG',
            'category'=>'smartphone',
            'sub'=>[
                'MEEG[ _\-]?([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                'MEEG[ _\-]?([^);/ ]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Memup
        'SlidePad ?([^;/]*) Build|SPNG?[0-9]{2,4}[a-z]{0,2}[ ;/)]|SP704CE?'   =>  [
            'name'=>'Memup',
            'category'=>'tablet',
            'sub'=>[
                'SlidePad ?([^;/]*) Build'=>[
                    'name'=>'SlidePad $1',
                ],
                'SPNG([0-9]{2,4}[a-z]{0,2})[ ;/)]'=>[
                    'name'=>'SlidePad NG$1',
                ],
                'SP704(CE?)'=>[
                    'name'=>'SlidePad 704$1',
                ],
            ]
        ],

        // Mecer
        '(M785|800P3[12]C|101P51C|X1010)[);/ ]'   =>  [
            'name'=>'Mecer',
            'category'=>'tablet',
            'sub'=>[
                'M785[);/ ]'=>[
                    'name'=>'Xpress Smartlife M785',
                ],
                'X1010[);/ ]'=>[
                    'name'=>'X1010',
                ],
                '800P31C[);/ ]'=>[
                    'name'=>'Xpress Smartlife 800P31C',
                ],
                '800P32C[);/ ]'=>[
                    'name'=>'Xpress Smartlife 800P32C',
                ],
                '101P51C[);/ ]'=>[
                    'name'=>'Xpress Smartlife 101P51C',
                ],
            ]
        ],

        // mio
        'MIO(?:/)?([a-z0-9]+)'   =>  [
            'name'=>'Mio',
            'category'=>'smartphone',
            'sub'=>[
                'MIO(?:/)?([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Miray
        'MIDM[_-]|MPM[_-]'   =>  [
            'name'=>'Miray',
            'category'=>'smartphone',
            'sub'=>[
                'MIDM[_-]([a-z0-9]+)'=>[
                    'name'=>'MIDM $1',
                    'category'=>'tablet',
                ],
                'MPM[_-]([a-z0-9]+)'=>[
                    'name'=>'MPM $1',
                ],
            ]
        ],

        // mitsubishi
        'MITSU|portalmmm/[12]\.0 M'   =>  [
            'name'=>'Mitsubishi',
            'category'=>'feature phone',
            'sub'=>[
                'MITSU/[a-z0-9.]+ \(([a-z0-9]+)\)'=>[
                    'name'=>'$1',
                ],
                'MITSU[ \-]?([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'portalmmm/[12]\.0 (M[a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // MIXC
        '(M35|M20|G7106|G7108)[ );/]'   =>  [
            'name'=>'MIXC',
            'category'=>'smartphone',
            'sub'=>[
                '(M[0-9]{1,2})[ );/]'=>[
                    'name'=>'$1',
                ],
                '(G[0-9]{4})[ );/]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Mobiistar
        'Mobiistar|Zumbo_|PRIME X MAX'   =>  [
            'name'=>'Mobiistar',
            'category'=>'smartphone',
            'sub'=>[
                'mobiistar_LAI_Zumbo Build'=>[
                    'name'=>'Zumbo',
                ],
                'Zumbo_S_2017 Build'=>[
                    'name'=>'Lai Zumbo S (2017)',
                ],
                'Zumbo_S_2017_Lite Build'=>[
                    'name'=>'Lai Zumbo S Lite (2017)',
                ],
                'mobiistar ZUMBO S2( Dual)? Build'=>[
                    'name'=>'Zumbo S2',
                ],
                'Mobiistar_LAI_Zumbo_J Build'=>[
                    'name'=>'Lai Zumbo J',
                ],
                'Mobiistar_LAI_Zumbo_J_2017 Build'=>[
                    'name'=>'Lai Zumbo J (2017)',
                ],
                'Mobiistar_Zumbo_J2'=>[
                    'name'=>'Lai Zumbo J2',
                ],
                'mobiistar ZUMBO Power'=>[
                    'name'=>'Zumbo Power',
                ],
                'mobiistar[ _]LAI[ _]YUNA[ _]([1XCS])'=>[
                    'name'=>'Lai Yuna $1',
                ],
                'mobiistar LAI Yuki'=>[
                    'name'=>'Lai Yuki',
                ],
                'mobiistar[ _]LAI[ _]ZORO[ _]([23])'=>[
                    'name'=>'Lai Zoro $1',
                ],
                'mobiistar[ _]LAI[ _]Zena'=>[
                    'name'=>'Lai Zena',
                ],
                'mobiistar[ _]LAI[ _]Z([12])?'=>[
                    'name'=>'Lai Z$1',
                ],
                'mobiistar_ZORO_4G'=>[
                    'name'=>'Zoro 4G',
                ],
                'mobiistar touch LAI 512'=>[
                    'name'=>'Touch Lai 512',
                ],
                'mobiistar LAI 504([KC])'=>[
                    'name'=>'Lai 504$1',
                ],
                'mobiistar LAI Y Build'=>[
                    'name'=>'Lai Y',
                ],
                'mobiistar PRIME X 2017 Build'=>[
                    'name'=>'Prime X',
                ],
                'mobiistar[ _]PRIME[ _](X1|558|X[ _]Plus|X[ _]Grand) Build'=>[
                    'name'=>'Prime $1',
                ],
                'PRIME X MAX 2018'=>[
                    'name'=>'Prime X Max',
                ],
                'mobiistar[ _]KOOL([ _]Lite)?'=>[
                    'name'=>'Kool$1',
                ],
                'mobiistar KAT 452 Build'=>[
                    'name'=>'Kat 452',
                ],
                'mobiistar_LAI_YOLLO Build'=>[
                    'name'=>'Lai Yollo',
                ],
                'Mobiistar[ _]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // MSI
        'Primo ?(?:91|76)|Enjoy 7 Plus'   =>  [
            'name'=>'MSI',
            'category'=>'tablet',
            'sub'=>[
                // explicit tablet models
                'Primo ?76'=>[
                    'name'=>'Primo 76',
                ],
                'Primo ?91'=>[
                    'name'=>'Primo 91',
                ],
                'Enjoy 7 Plus'=>[
                    'name'=>'Enjoy 7 Plus',
                ],
            ]
        ],
                
        // MLLED
        'MLLED[ _]'   =>  [
            'name'=>'MLLED',
            'category'=>'smartphone',
            'sub'=>[
                'MLLED[ _]([^;/]+)Build'=>[
                    'name'=>'$1',
                ],
                'MLLED[ _]([^);/]+)[);/]'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Mobistel
        '(Cynus[ _][^/;]+) Build'   =>  [
            'name'=>'Mobistel',
            'category'=>'smartphone',
            'sub'=>[
                '(Cynus[ _][^/;]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Modecom
        'Modecom|Free(?:Way )?Tab|xino z[\d]+ x[\d]+'   =>  [
            'name'=>'Modecom',
            'category'=>'tablet',
            'sub'=>[
                'xino Z([\d]+) X([\d]+)'=>[
                    'name'=>'Xino Z$1 X$2',
                    'category'=>'smartphone',
                ],
                'FreeTab[ _\-]?([^/;]+)? Build'=>[
                    'name'=>'FreeTab $1',
                ],
                'FreeTab[ _\-]?((?!Build)[^);/ ]+)?'=>[
                    'name'=>'FreeTab $1',
                ],
                'FreeWay Tab[ _\-]?([^/;]+) Build'=>[
                    'name'=>'FreeWay Tab $1',
                ],
                'FreeWay Tab[ _\-]?((?!Build)[^);/ ]+)'=>[
                    'name'=>'FreeWay Tab $1',
                ],
            ]
        ],

        // Mofut
        'Mofut'   =>  [
            'name'=>'Mofut',
            'category'=>'smartphone',
            'sub'=>[
                'Mofut[ _\-]?([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                'Mofut[ _\-]?((?!Build)[^);/ ]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // motorola
        'MOT|(?<!AN)DROID ?(?:Build|[a-z0-9]+)|portalmmm/2.0 (?:E378i|L6|L7|v3)|XOOM [^;/]*Build|(?:XT|MZ|MB|ME)[0-9]{3,4}[a-z]?(?:\(Defy\)|-0[1-5])?(?: Build|\))'   =>  [
            'name'=>'Motorola',
            'category'=>'smartphone',
            'sub'=>[
                // Explicit feature phone models
                'MOT-V360'=>[
                    'name'=>'V360',
                    'category'=>'feature phone',
                ],

                // Explicit smartphone models
                '(?:MOT-|Motorola-)?XT300'=>[
                    'name'=>'Spice',
                ],
                '(?:MOT-|Motorola-)?XT30[35]'=>[
                    'name'=>'Motosmart ME',
                ],
                '(?:MOT-|Motorola-)?XT31[16]'=>[
                    'name'=>'Fire',
                ],
                '(?:MOT-|Motorola-)?XT32[01]'=>[
                    'name'=>'Defy Mini',
                ],
                '(?:MOT-|Motorola-)?XT3(?:89|90)'=>[
                    'name'=>'Motosmart',
                ],
                '(?:MOT-|Motorola-)?XT502'=>[
                    'name'=>'Quench',
                ],
                '(?:MOT-|Motorola-)?XT531'=>[
                    'name'=>'Fire XT',
                ],
                '(?:MOT-|Motorola-)?XT535'=>[
                    'name'=>'Defy',
                ],
                '(?:MOT-|Motorola-)?XT55[567]C?'=>[
                    'name'=>'Defy XT',
                ],
                '(?:MOT-|Motorola-)?XT603'=>[
                    'name'=>'Admiral',
                ],
                '(?:MOT-|Motorola-)?XT610'=>[
                    'name'=>'Droid Pro',
                ],
                '(?:MOT-|Motorola-)?XT615'=>[
                    'name'=>'Motoluxe',
                ],
                '(?:MOT-|Motorola-)?XT621'=>[
                    'name'=>'Primus',
                ],
                '(?:MOT-|Motorola-)?XT626'=>[
                    'name'=>'IronRock',
                ],
                '(?:MOT-|Motorola-)?XT682'=>[
                    'name'=>'Atrix',
                ],
                '(?:MOT-|Motorola-)?XT685'=>[
                    'name'=>'Motoluxe Dual-SIM',
                ],
                '(?:MOT-|Motorola-)?XT687'=>[
                    'name'=>'Atrix TV',
                ],
                '(?:MOT-|Motorola-)?XT720'=>[
                    'name'=>'Milestone',
                ],
                '(?:MOT-|Motorola-)?XT800W'=>[
                    'name'=>'Glam',
                ],
                '(?:MOT-|Motorola-)?XT860'=>[
                    'name'=>'Milestone 3',
                ],
                '(?:MOT-|Motorola-)?XT881'=>[
                    'name'=>'Electrify 2',
                ],
                '(?:MOT-|Motorola-)?XT882'=>[
                    'name'=>'Moto XT882',
                ],
                '(?:MOT-|Motorola-)?XT88[56]'=>[
                    'name'=>'Droid RAZR V',
                ],
                '(?:MOT-|Motorola-)?XT890'=>[
                    'name'=>'Droid RAZR i',
                ],
                '(?:MOT-|Motorola-)?XT894'=>[
                    'name'=>'Droid 4',
                ],
                '(?:MOT-|Motorola-)?XT897'=>[
                    'name'=>'Photon Q',
                ],
                '(?:MOT-|Motorola-)?XT901'=>[
                    'name'=>'Electrify M',
                ],
                '(?:MOT-|Motorola-)?XT90[567]'=>[
                    'name'=>'Droid RAZR M',
                ],
                '(?:MOT-|Motorola-)?XT910S?'=>[
                    'name'=>'Droid RAZR',
                ],
                '(?:MOT-|Motorola-)?XT91[4568]'=>[
                    'name'=>'Droid RAZR D1',
                ],
                '(?:MOT-|Motorola-)?XT9(?:19|20)'=>[
                    'name'=>'Droid RAZR D3',
                ],
                '(?:MOT-|Motorola-)?XT925'=>[
                    'name'=>'Droid RAZR HD',
                ],
                '(?:MOT-|Motorola-)?XT1022'=>[
                    'name'=>'Moto E',
                ],
                '(?:MOT-|Motorola-)?XT1706'=>[
                    'name'=>'Moto E3 Power',
                ],
                '(?:MOT-|Motorola-)?XT1030'=>[
                    'name'=>'Droid Mini',
                ],
                '(?:MOT-|Motorola-)?XT1254'=>[
                    'name'=>'Droid Turbo',
                ],
                '(?:MOT-|Motorola-)?XT10(?:28|3[1234]|68)'=>[
                    'name'=>'Moto G',
                ],
                '(?:MOT-|Motorola-)?XT10(?:49|5[23568]|60|9[2345])'=>[
                    'name'=>'Moto X',
                ],
                '(?:MOT-|Motorola-)?XT1562'=>[
                    'name'=>'Moto X Play',
                ],
                '(?:MOT-|Motorola-)?XT1080'=>[
                    'name'=>'Droid Ultra',
                ],
                '(?:MOT-|Motorola-)?XT1650-05'=>[
                    'name'=>'Moto Z',
                ],
                '(?:MOT-|Motorola-)?XT1635(?:-0[1-3])?'=>[
                    'name'=>'Moto Z Play',
                ],
                '(?:MOT-|Motorola-)?XT1663'=>[
                    'name'=>'Moto M',
                ],

                'Moto ([CGEZ]) \(([a-z0-9]+)\)( Plus| Play)?'=>[
                    'name'=>'Moto $1$2$3',
                ],
                'Moto ?([CGEZ])([0-9]+)( Plus| Play)?'=>[
                    'name'=>'Moto $1$2$3',
                ],
                'Moto ?([CGEZ])( Plus| Play)?'=>[
                    'name'=>'Moto $1$2',
                ],

                'Motorola[ _\-]([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'MOTORAZR[ _\-]([a-z0-9]+)'=>[
                    'name'=>'RAZR $1',
                ],
                'MOTORIZR[ _\-]([a-z0-9]+)'=>[
                    'name'=>'RIZR $1',
                ],
                'MOT(?!OROLA)[O]?[_\-]?([a-z0-9.]+)'=>[
                    'name'=>'$1',
                ],
                '(?<!AN)DROID ?([a-z0-9 ]*) Build'=>[
                    'name'=>'DROID $1',
                ],
                '(?<!AN)DROID ?([a-z0-9]+)'=>[
                    'name'=>'DROID $1',
                ],
                'portalmmm/2.0 ((?:E378i|L6|L7|V3)[a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                '(XOOM [^;/]*)Build'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                '(MZ[0-9]{3})[);/ ]'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                '((?:ME|MB|XT)[0-9]{3,4}(?:\(Defy\))?)[);/ ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Movic
        'MOVIC'   =>  [
            'name'=>'Movic',
            'category'=>'smartphone',
            'sub'=>[
                'MOVIC[ -]W([2345])'=>[
                    'name'=>'W$1',
                ],
            ]
        ],
                
        // MTN
        'MTN-'   =>  [
            'name'=>'MTN',
            'category'=>'smartphone',
            'sub'=>[
                'MTN-(L860|S620)'=>[
                    'name'=>'Sm@rt Mini $1',
                ],
                'MTN-8978P'=>[
                    'name'=>'Steppa',
                    'category'=>'tablet',
                ],
                'MTN-([a-z0-9_\-]+)'=>[
                    'name'=>'MTN-$1',
                ],
            ]
        ],
                
        // myphone
        '(?:MyPhone|MyPad|MyTab)[ _][^;/]+ Build|Cube_LTE|myTab10II|HAMMER[ _]ENERGY|HAMMER_AXE_M_LTE|Hammer Titan 2|C-Smart_pix'   =>  [
            'name'=>'MyPhone',
            'category'=>'smartphone',
            'sub'=>[
                'MyPad[ _]([^;/]+) Build'=>[
                    'name'=>'MyPad $1',
                    'category'=>'tablet',
                ],
                'MyTab[ _]([^;/]+) Build'=>[
                    'name'=>'MyTab $1',
                    'category'=>'tablet',
                ],
                'myTab10II'=>[
                    'name'=>'MyTab 10 II',
                    'category'=>'tablet',
                ],
                'Cube_LTE'=>[
                    'name'=>'Cube LTE',
                ],
                'HAMMER[ _]ENERGY'=>[
                    'name'=>'Hammer Energy',
                ],
                'HAMMER_AXE_M_LTE'=>[
                    'name'=>'Hammer Axe M LTE',
                ],
                'Hammer Titan 2'=>[
                    'name'=>'Hammer Titan 2',
                ],
                'C-Smart_pix'=>[
                    'name'=>'C-Smart Pix',
                ],
                'MyPhone[ _]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // MyWigo
        'MyWigo '   =>  [
            'name'=>'MyWigo',
            'category'=>'smartphone',
            'sub'=>[
                'City3'=>[
                    'name'=>'City 3',
                ],
            ]
        ],
                
        // Myria
        ' (Myria_[^/;]+|502M|Cozy|Easy tab 9|Grand) Build|Myria_FIVE|Myria_Grand_4G|Myria_Wide_2|Myria_Wide_4G'   =>  [
            'name'=>'Myria',
            'category'=>'smartphone',
            'sub'=>[
                'Myria_([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                'Myria_FIVE'=>[
                    'name'=>'Five',
                ],
                '(502M|Grand)'=>[
                    'name'=>'$1',
                ],
                'Myria_Grand_4G'=>[
                    'name'=>'Grand 4G',
                ],
                'Myria_Wide_4G'=>[
                    'name'=>'Wide 4G',
                ],
                'Myria_Wide_2'=>[
                    'name'=>'Wide 2',
                ],
                '(Cozy|Easy tab 9)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
            ]
        ],
                
        // M.T.T.
        'M.T.T.'   =>  [
            'name'=>'M.T.T.',
            'category'=>'smartphone',
            'sub'=>[
                'M.T.T. ?Tablet([^;/]+)? Build'=>[
                    'name'=>'Tablet$1',
                    'category'=>'tablet',
                ],
                'M.T.T. ?([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Navon
        'Superme_Max'   =>  [
            'name'=>'Navon',
            'category'=>'smartphone',
            'sub'=>[
                'Superme_Max'=>[
                    'name'=>'Supreme Max',
                ],
            ]
        ],

        // nec
        'NEC[ _\-]|KGT/2\.0|portalmmm/1\.0 (?:DB|N)|(?:portalmmm|o2imode)/2.0[ ,]N'   =>  [
            'name'=>'NEC',
            'category'=>'smartphone',
            'sub'=>[
                '(?:NEC[ _\-]|KGT/2\.0 )([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'portalmmm/1\.0 ((?:DB|N)[a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                '(?:portalmmm|o2imode)/2\.0[ ,](N[a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Neffos
        'Neffos'   =>  [
            'name'=>'Neffos',
            'category'=>'smartphone',
            'sub'=>[
                'Neffos ([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                'Neffos ([^/;]+)/'=>[
                    'name'=>'$1',
                ],
                'Neffos_C9A'=>[
                    'name'=>'C9A',
                ],
                'Neffos_(C|X)9'=>[
                    'name'=>'$19',
                ],
            ]
        ],

        // Nextbit
        '(Robin) Build'   =>  [
            'name'=>'Nextbit',
            'category'=>'smartphone',
            'sub'=>[
                '(Robin) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // newgen
        'NEWGEN\-([a-z0-9]+)'   =>  [
            'name'=>'Newgen',
            'category'=>'feature phone',
            'sub'=>[
                'NEWGEN\-([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Netgear
        'GTV100'   =>  [
            'name'=>'Netgear',
            'category'=>'tv',
            'sub'=>[
                'GTV100'=>[
                    'name'=>'NeoTV Prime',
                ],
            ]
        ],
                
        // NeuImage
        'NIM-'   =>  [
            'name'=>'NeuImage',
            'category'=>'smartphone',
            'sub'=>[
                'NIM-(450D|550O|600Q)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // NextBook
        'Next[0-9]|NX785QC8G|NXM900MC|NX008HD8G|NX010HI8G|NXM908HC|NXM726'   =>  [
            'name'=>'NextBook',
            'category'=>'tablet',
            'sub'=>[
                'NX008HD8G'=>[
                    'name'=>'Premium 8 HD',
                ],
                'NXM908HC'=>[
                    'name'=>'Premium 9',
                ],
                'NX010HI8G'=>[
                    'name'=>'Premium 10 Hi',
                ],
                'NX785QC8G'=>[
                    'name'=>'8',
                ],
                'NXM900MC'=>[
                    'name'=>'8 HD',
                ],
                'NXM726'=>[
                    'name'=>'Premium 7',
                ],

                'Next([0-9]+[^;/]+) Build'=>[
                    'name'=>'Next $1',
                ],
            ]
        ],

        // ngm
        'NGM[_ ][a-z0-9]+|(Forward|Dynamic)[ _]?[^/;]+(?:Build|/)'   =>  [
            'name'=>'NGM',
            'category'=>'smartphone',
            'sub'=>[
                '(Forward|Dynamic)[ _]?([^/;]+) Build'=>[
                    'name'=>'$1 $2',
                ],
                '(Forward|Dynamic)[ _]?([^/;]+)/'=>[
                    'name'=>'$1 $2',
                ],
                'NGM ([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'NGM_([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // nexian
        'S?Nexian'   =>  [
            'name'=>'Nexian',
            'category'=>'smartphone',
            'sub'=>[
                'S?Nexian[ ]?([a-z0-9\-]+)'=>[
                    'name'=>'$1',
                ],
                'S?Nexian-([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Noain
        'NOAIN'   =>  [
            'name'=>'Noain',
            'category'=>'smartphone',
            'sub'=>[
                'NOAIN[ _-]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'NOAIN[ _-]([^;/)]+)[;/)]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Noblex
        'Noblex|NBX-'   =>  [
            'name'=>'Noblex',
            'category'=>'smartphone',
            'sub'=>[
                '(?:Noblex|NBX)[ _-]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                '(?:Noblex|NBX)[ _-]([^;/)]+)[;/)]'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Nomi
        'Nomi[ _-]'   =>  [
            'name'=>'Nomi',
            'category'=>'smartphone',
            'sub'=>[
                'Nomi[ _-]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Nomi[ _-]([^;/)]+)[;/)]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // NUU Mobile
        'N5702L'   =>  [
            'name'=>'NUU Mobile',
            'category'=>'smartphone',
            'sub'=>[
                'N5702L'=>[
                    'name'=>'G3',
                ],
            ]
        ],

        // NYX Mobile
        'NYX[ _]'   =>  [
            'name'=>'NYX Mobile',
            'category'=>'smartphone',
            'sub'=>[
                'NYX_A1'=>[
                    'name'=>'A1',
                ],
                'NYX_Blink'=>[
                    'name'=>'Blink',
                ],
                'NYX_EGO'=>[
                    'name'=>'Ego',
                ],
                'NYX_FENIX'=>[
                    'name'=>'Fenix',
                ],
                'NYX_FLY_II'=>[
                    'name'=>'Fly II',
                ],
                'NYX_FLY_MINI'=>[
                    'name'=>'Fly Mini',
                ],
                'NYX_FLY'=>[
                    'name'=>'Fly',
                ],
                'NYX_HIT'=>[
                    'name'=>'Hit',
                ],
                'NYX_JAK'=>[
                    'name'=>'Jak',
                ],
                'NYX_JOIN'=>[
                    'name'=>'Join',
                ],
                'NYX_NOBA_II'=>[
                    'name'=>'Noba II',
                ],
                'NYX_NOBA'=>[
                    'name'=>'Noba',
                ],
                'NYX_ORBIS'=>[
                    'name'=>'Orbis',
                ],
                'NYX[ _]REX'=>[
                    'name'=>'Rex',
                ],
                'NYX_SHADE'=>[
                    'name'=>'Shade',
                ],
                'NYX_SKY'=>[
                    'name'=>'Sky',
                ],
                'NYX_SPARK'=>[
                    'name'=>'Spark',
                ],
                'NYX_VOX'=>[
                    'name'=>'Vox',
                ],
                'NYX_ZEUZ_HD'=>[
                    'name'=>'Zeus HD',
                ],
            ]
        ],

        // Nous
        'NS([356]|500[346]|5511) Build'   =>  [
            'name'=>'Nous',
            'category'=>'smartphone',
            'sub'=>[
                '(NS[0-9]{1,4}) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Nvidia
        '(SHIELD Tablet K1) Build'   =>  [
            'name'=>'Nvidia',
            'category'=>'tablet',
            'sub'=>[
                '(SHIELD Tablet K1) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // O+
        'O\+[ _](Air|Crunch|Ultra|Upsized|Venti)'   =>  [
            'name'=>'O+',
            'category'=>'smartphone',
            'sub'=>[
                'O\+[ _](Crunch|Ultra 2.0|Ultra|Upsized|Venti 4G)'=>[
                    'name'=>'$1',
                ],
                'O\+_AIR'=>[
                    'name'=>'Air',
                ],
            ]
        ],
                
        // o2
        'Xda|O2[ \-]|COCOON'   =>  [
            'name'=>'O2',
            'category'=>'smartphone',
            'sub'=>[
                '(Xda[ _][a-z0-9_]+)'=>[
                    'name'=>'$1',
                ],
                '(COCOON)'=>[
                    'name'=>'$1',
                ],
                'O2 ([a-z0-9 ]+)'=>[
                    'name'=>'$1',
                ],
                'O2-([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Obi
        'Obi[ _-]|(SJ1\.5|SJ2\.6|S400|S452\+|S451|S453|S501|S502|S503\+?|S507|S520|S550|S551|falcon)[ _]'   =>  [
            'name'=>'Obi',
            'category'=>'smartphone',
            'sub'=>[
                'SJ2\.6'=>[
                    'name'=>'SJ2.6',
                ],
                'SJ1\.5'=>[
                    'name'=>'SJ1.5',
                ],
                '(?:Obi_)?S400'=>[
                    'name'=>'Skipper',
                ],
                '(?:Obi_)?S451|falcon'=>[
                    'name'=>'Flacon',
                ],
                '(?:Obi_)?S452\+'=>[
                    'name'=>'Python',
                ],
                '(?:Obi_)?S453'=>[
                    'name'=>'Fox',
                ],
                '(?:Obi_)?S501'=>[
                    'name'=>'Wolverine',
                ],
                '(?:Obi_)?S502'=>[
                    'name'=>'Leopard',
                ],
                '(?:Obi_)?S503\+'=>[
                    'name'=>'Boa Plus',
                ],
                '(?:Obi_)?S503'=>[
                    'name'=>'Boa',
                ],
                '(?:Obi_)?S507'=>[
                    'name'=>'Pelican',
                ],
                '(?:Obi_)?S520'=>[
                    'name'=>'Octopus',
                ],
                '(?:Obi_)?S550'=>[
                    'name'=>'Crane',
                ],
                '(?:Obi_)?S551'=>[
                    'name'=>'Hornbill',
                ],
                '(?:Obi_)?S454'=>[
                    'name'=>'Alligator',
                ],
                'Obi[ _-]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Obi[ _-]([^;/)]+)[;/)]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Odys
        'ODYS[ _-]|IEOS[_ ]([^/;]+)|NOON(?:_PRO)? Build|SPACE10_(?:PLUS|PRO)_3G|THOR_?10|TAO_X10|RAPID_?(?:10|7)_?LTE|MAVEN_?10_|CONNECT[78]|ELEMENT10_PLUS_3G|XELIO[_0-9P]'   =>  [
            'name'=>'Odys',
            'category'=>'tablet',
            'sub'=>[
                'XELIOPHONETAB3'=>[
                    'name'=>'Xelio Phonetab 3',
                ],
                'XELIO_NEXT_10_PLUS_3G'=>[
                    'name'=>'Xelio Next 10 Plus 3G',
                ],
                'XELIO_PHONE_TAB7_3G'=>[
                    'name'=>'Xelio Phonetab 7 3G',
                ],
                'XELIO10EXTREME'=>[
                    'name'=>'Xelio 10 Xtreme',
                ],
                'XELIO10_PLUS_3G'=>[
                    'name'=>'Xelio 10 Plus 3G',
                ],
                'ELEMENT10_PLUS_3G'=>[
                    'name'=>'Element 10 Plus 3G',
                ],
                'CONNECT8PLUS'=>[
                    'name'=>'Connect 8 Plus',
                ],
                'CONNECT7PRO'=>[
                    'name'=>'Connect 7 Pro',
                ],
                'MAVEN_?10_PRO_PLUS_3G'=>[
                    'name'=>'Maven 10 Pro Plus 3G',
                ],
                'MAVEN_?10_?PLUS'=>[
                    'name'=>'Maven 10 Plus',
                ],
                'MAVEN_?10_?PRO'=>[
                    'name'=>'Maven 10 Pro',
                ],
                'MAVEN_?10_?HD'=>[
                    'name'=>'Maven 10 HD',
                ],
                'RAPID_?7_?LTE'=>[
                    'name'=>'Rapid 7 LTE',
                ],
                'RAPID_?10_?LTE'=>[
                    'name'=>'Rapid 10 LTE',
                ],
                'TAO_X10'=>[
                    'name'=>'Tao X10',
                ],
                'SPACE10_PLUS_3G'=>[
                    'name'=>'Space 10 Plus 3G',
                ],
                'SPACE10_PRO_3G'=>[
                    'name'=>'Space 10 Pro 3G',
                ],
                'THOR_?10 Build'=>[
                    'name'=>'Thor 10',
                ],
                'THOR_?10_PLUS_3G'=>[
                    'name'=>'Thor 10 Plus 3G',
                ],
                'IEOS[ _]([^/;]+) Build'=>[
                    'name'=>'Ieos $1',
                ],
                '(?:ODYS[ _-])?NOON Build'=>[
                    'name'=>'Noon',
                ],
                '(?:ODYS[ _-])?NOON_PRO Build'=>[
                    'name'=>'Noon Pro',
                ],
                'Odys[ _-]([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // onda
        'Onda'   =>  [
            'name'=>'Onda',
            'category'=>'smartphone',
            'sub'=>[
                // explicit tablet models
                'ONDA MID'=>[
                    'name'=>'MID',
                    'category'=>'tablet',
                ],

                '([a-z0-9]+)[ _]Onda'=>[
                    'name'=>'$1',
                ],
                'Onda ([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // OnePlus
        '(?:du_)?ONEPLUS|(?:A0001|A200[135]|A300[03]|A3010|A5000|A600[03]|A601[03]|E100[135])(?: Build|\))'   =>  [
            'name'=>'OnePlus',
            'category'=>'smartphone',
            'sub'=>[
                'A0001'=>[
                    'name'=>'One',
                ],
                'A200[135]|OnePlus2'=>[
                    'name'=>'2',
                ],
                'E100[135]'=>[
                    'name'=>'X',
                ],
                'A3010|OnePlus3T'=>[
                    'name'=>'3T',
                ],
                'A300[03]|OnePlus3'=>[
                    'name'=>'3',
                ],
                'A5010|OnePlus5T'=>[
                    'name'=>'5T',
                ],
                'A5000|OnePlus5'=>[
                    'name'=>'5',
                ],
                'A600[03]|OnePlus6'=>[
                    'name'=>'6',
                ],
                'A601[03]'=>[
                    'name'=>'6T',
                ],
                '(?:du_)?ONEPLUS ?([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // oppo
        '(?:OB-)?OPPO[ _]?([a-z0-9]+)|N1T|(?:X90[07][0679]|U707T?|X909T?|R(?:10[01]1|2001|201[07]|6007|7005|7007|80[13579]|81[13579]|82[01379]|83[013]|800[067]|8015|810[679]|811[13]|820[057])[KLSTW]?|N520[79]|N5117|A33f|A33fw|A37fw?|PAAM00|PAC[T|M]00|PBAM00)[);/ ]|R7kf|R7plusf|R7Plusm|A1601|CPH[0-9]{4}|PADM00|RMX18(0[1579]|11|3[13])'   =>  [
            'name'=>'OPPO',
            'category'=>'smartphone',
            'sub'=>[
                '(?:OPPO[ _]?)?U707T?[);/ ]'=>[
                    'name'=>'Find Way S',
                ],
                '(?:OPPO[ _]?)?X909T?[);/ ]'=>[
                    'name'=>'Find 5',
                ],
                '(?:OPPO[ _]?)?X907[067][);/ ]'=>[
                    'name'=>'Find 7',
                ],
                '(?:OPPO[ _]?)?X900[067][);/ ]'=>[
                    'name'=>'Find 7a',
                ],
                '(?:OPPO[ _]?)?X9009[);/ ]'=>[
                    'name'=>'F1 Plus',
                ],
                '(?:OPPO[ _]?)?R8006[);/ ]'=>[
                    'name'=>'R1L',
                ],
                '(?:OPPO[ _]?)?R800[07][);/ ]'=>[
                    'name'=>'R1S',
                ],
                '(?:OPPO[ _]?)?R8015[);/ ]'=>[
                    'name'=>'Find Guitar',
                ],
                '(?:OPPO[ _]?)?R810[679][);/ ]'=>[
                    'name'=>'R5',
                ],
                '(?:OPPO[ _]?)?R7kf[);/ ]'=>[
                    'name'=>'R7 Lite',
                ],
                '(?:OPPO[ _]?)?R7Plusf[);/ ]'=>[
                    'name'=>'R7 Plus F',
                ],
                '(?:OPPO[ _]?)?R7Plusm[);/ ]'=>[
                    'name'=>'R7 Plus',
                ],
                '(?:OPPO[ _]?)?R8111[);/ ]'=>[
                    'name'=>'Find Melody',
                ],
                '(?:OPPO[ _]?)?R8113[);/ ]'=>[
                    'name'=>'Piano',
                ],
                '(?:OPPO[ _]?)?R815[TW]?[);/ ]'=>[
                    'name'=>'Find Clover',
                ],
                '(?:OPPO[ _]?)?R821T?[);/ ]'=>[
                    'name'=>'Find Muse',
                ],
                '(?:OPPO[ _]?)?R827T?[);/ ]'=>[
                    'name'=>'Find 5 Mini',
                ],
                '(?:OPPO[ _]?)?A33fw[);/ ]'=>[
                    'name'=>'Neo 7s',
                ],
                '(?:OPPO[ _]?)?A33f[);/ ]'=>[
                    'name'=>'Neo 7',
                ],
                '(?:OPPO[ _]?)?R831[SL][);/ ]'=>[
                    'name'=>'Neo 5',
                ],
                '(?:OPPO[ _]?)?R831K[);/ ]'=>[
                    'name'=>'Neo 3',
                ],
                '(?:OPPO[ _]?)?R831T?[);/ ]'=>[
                    'name'=>'Neo',
                ],
                '(?:OPPO[ _]?)?N520[79][);/ ]'=>[
                    'name'=>'N3',
                ],
                '(?:OPPO[ _]?)?N5117[);/ ]'=>[
                    'name'=>'N1 Mini',
                ],
                '(?:OPPO[ _]?)?CPH1609[);/ ]'=>[
                    'name'=>'F3',
                ],
                '(?:OPPO[ _]?)?CPH1707[);/ ]'=>[
                    'name'=>'R11',
                ],
                '(?:OPPO[ _]?)?CPH1715[);/ ]'=>[
                    'name'=>'A77',
                ],
                '(?:OPPO[ _]?)?CPH1717[);/ ]'=>[
                    'name'=>'A71',
                ],
                '(?:OPPO[ _]?)?CPH1719[);/ ]'=>[
                    'name'=>'R11s',
                ],
                '(?:OPPO[ _]?)?CPH1721[);/ ]'=>[
                    'name'=>'R11s Plus',
                ],
                '(?:OPPO[ _]?)?CPH172[37][);/ ]'=>[
                    'name'=>'F5',
                ],
                '(?:OPPO[ _]?)?CPH1725[);/ ]'=>[
                    'name'=>'F5 Youth',
                ],
                '(?:OPPO[ _]?)?CPH1605[);/ ]'=>[
                    'name'=>'A39',
                ],
                '(?:OPPO[ _]?)?CPH1607[);/ ]'=>[
                    'name'=>'R9s',
                ],
                '(?:OPPO[ _]?)?CPH1611[);/ ]'=>[
                    'name'=>'R9s Plus',
                ],
                '(?:OPPO[ _]?)?CPH1613[);/ ]'=>[
                    'name'=>'F3 Plus',
                ],
                '(?:OPPO[ _]?)?CPH170[15][);/ ]'=>[
                    'name'=>'A57',
                ],
                '(?:OPPO[ _]?)?CPH1729[);/ ]'=>[
                    'name'=>'A83',
                ],
                '(?:OPPO[ _]?)?CPH1801[);/ ]'=>[
                    'name'=>'A71',
                ],
                '(?:OPPO[ _]?)?CPH18(0[35]|53)[);/ ]'=>[
                    'name'=>'A3s',
                ],
                '(?:OPPO[ _]?)?CPH1809[);/ ]'=>[
                    'name'=>'A5',
                ],
                '(?:OPPO[ _]?)?CPH18(19|21)[);/ ]'=>[
                    'name'=>'F7',
                ],
                '(?:OPPO[ _]?)?CPH1823[);/ ]'=>[
                    'name'=>'F9 Pro',
                ],
                '(?:OPPO[ _]?)?CPH1827[);/ ]'=>[
                    'name'=>'A83 (2018)',
                ],
                '(?:OPPO[ _]?)?CPH1831[);/ ]'=>[
                    'name'=>'R15 Pro',
                ],
                '(?:OPPO[ _]?)?CPH1835[);/ ]'=>[
                    'name'=>'R15',
                ],
                '(?:OPPO[ _]?)?CPH1837[);/ ]'=>[
                    'name'=>'A3',
                ],
                '(?:OPPO[ _]?)?CPH1851[);/ ]'=>[
                    'name'=>'AX5',
                ],
                '(?:OPPO[ _]?)?CPH1859[);/ ]'=>[
                    'name'=>'F7',
                ],
                '(?:OPPO[ _]?)?CPH1861[);/ ]'=>[
                    'name'=>'RealMe 1',
                ],
                'RMX1811'=>[
                    'name'=>'RealMe C1',
                ],
                'RMX1831'=>[
                    'name'=>'RealMe U1',
                ],
                '(?:OPPO[ _]?)?CPH187[15][);/ ]'=>[
                    'name'=>'Find X',
                ],
                '(?:OPPO[ _]?)?CPH1877[);/ ]'=>[
                    'name'=>'R17 Pro',
                ],
                '(?:OPPO[ _]?)?CPH1879[);/ ]'=>[
                    'name'=>'R17',
                ],
                '(?:OPPO[ _]?)?CPH1881[);/ ]'=>[
                    'name'=>'F9',
                ],
                '(?:OPPO[ _]?)?CPH1893[);/ ]'=>[
                    'name'=>'R17 Neo',
                ],
                '(?:OPPO[ _]?)?CPH1901[);/ ]'=>[
                    'name'=>'A7',
                ],
                '(?:OPPO[ _]?)?CPH1903[);/ ]'=>[
                    'name'=>'AX7',
                ],
                '(?:OPPO[ _]?)?A37f(w)? Build'=>[
                    'name'=>'A37f$1',
                ],
                '(?:OPPO[ _]?)?PADM00'=>[
                    'name'=>'A3',
                ],
                '(?:OPPO[ _]?)?PBAM00'=>[
                    'name'=>'A5',
                ],
                '(?:OPPO[ _]?)?A1601 Build'=>[
                    'name'=>'F1s',
                ],
                '(?:OPPO[ _]?)?R1011 Build'=>[
                    'name'=>'Joy Plus',
                ],
                '(?:OPPO[ _]?)?(?:PAC[TM]00|PAAM00) Build'=>[
                    'name'=>'R15',
                ],
                'RMX180[59]'=>[
                    'name'=>'Realme 2',
                ],
                'RMX180[17]'=>[
                    'name'=>'Realme 2 Pro',
                ],
                'RMX1833'=>[
                    'name'=>'Realme 3',
                ],
                'N1T?[);/ ]'=>[
                    'name'=>'N1T',
                    'category'=>'phablet',
                ],

                'R([0-9]{3,4}[KSTW]?)[);/ ]'=>[
                    'name'=>'R$1',
                ],

                '(?:OB-)?OPPO[ _]?([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Opsson
        'Opsson|IUSAI'   =>  [
            'name'=>'Opsson',
            'category'=>'smartphone',
            'sub'=>[
                'IUSAI[ _]([^/;]+) Build'=>[
                    'name'=>'Iusai $1',
                ],
                'IUSAI[ _]([^/;\)]+)[/;\)]'=>[
                    'name'=>'Iusai $1',
                ],
                'Opsson[ _]([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                '(?:Opsson-)?Opsson[ -_]([^/;]+)/'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // orange
        'SPV[ \-]?([a-z0-9]+)|Orange[ _-]([^/;]+) Build|SC/IHD92|FunTab ([^/;]+) Build'   =>  [
            'name'=>'Orange',
            'category'=>'smartphone',
            'sub'=>[
                'SC/IHD92'=>[
                    'name'=>'Livebox Play',
                    'category'=>'tv',
                ],
                'Sego'=>[
                    'name'=>'Sego',
                    'category'=>'tablet',
                ],
                'FunTab ([^/;]+) Build'=>[
                    'name'=>'FunTab $1',
                    'category'=>'tablet',
                ],
                'Orange[ _-]([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                'SPV[ \-]?([a-z0-9]+)'=>[
                    'name'=>'SPV $1',
                ],
            ]
        ],

        // Ouki
        'OUKI|OK[AU][0-9]+[a-z]* Build'   =>  [
            'name'=>'Ouki',
            'category'=>'smartphone',
            'sub'=>[
                'OUKI[ _-]?([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                '([^;/)]+) Build/OUKI'=>[
                    'name'=>'$1',
                ],
                'OUKI[ _-]?([^;/)]+)[;/)]'=>[
                    'name'=>'$1',
                ],
                '(OK[AU][0-9]+[a-z]*) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Overmax
        'OV-[a-z]+(?:[^;(/]*)[();/ ]|Qualcore 1010'   =>  [
            'name'=>'Overmax',
            'category'=>'tablet',
            'sub'=>[
                'OV-V10'=>[
                    'name'=>'Vertis Yard',
                    'category'=>'smartphone',
                ],
                'OV-Vertis[ _-]([^;/]+) Build'=>[
                    'name'=>'Vertis $1',
                    'category'=>'smartphone',
                ],
                'Qualcore 1010'=>[
                    'name'=>'Qualcore 1010',
                    'category'=>'tablet',
                ],
                '(OV-[a-z]+(?:[^;(/]*))(?<!Build)[();/ ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Oysters
        'Oysters'   =>  [
            'name'=>'Oysters',
            'category'=>'tablet',
            'sub'=>[
                'Oysters ((?:Arctic|Indian|Atlantic|Pacific)[^/;]+) Build'=>[
                    'name'=>'$1',
                    'category'=>'smartphone',
                ],
                'Oysters ([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        
                
        // Panacom
        'T-i708D'   =>  [
            'name'=>'Panacom',
            'category'=>'smartphone',
            'sub'=>[
                'T-i708D'=>[
                    'name'=>'T-i708D',
                    'category'=>'tablet',
                ],
            ]
        ],

        // panasonic
        'Panasonic|PANATV[0-9]+|Viera/|P902i[);/ ]|Eluga[ _]|FZ-N1|P55 Novo 4G'   =>  [
            'name'=>'Panasonic',
            'category'=>'smartphone',
            'sub'=>[
                'Eluga[ _-]([^;/]+) Build'=>[
                    'name'=>'Eluga $1',
                ],
                'Eluga[ _-]([^;/]+)[;/)]'=>[
                    'name'=>'Eluga $1',
                ],
                'FZ-N1'=>[
                    'name'=>'Toughpad',
                ],
                'P55 Novo 4G'=>[
                    'name'=>'P55 Novo 4G',
                ],
                'P902i[);/ ]'=>[
                    'name'=>'P902i',
                    'category'=>'feature phone',
                ],
                'Panasonic MIL DLNA'=>[
                    'name'=>'Viera Cast',
                    'category'=>'tv',
                ],
                'PANATV[0-9]+|Viera/'=>[
                    'name'=>'Smart TV',
                    'category'=>'tv',
                ],
                'Panasonic[ _\-]?([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'portalmmm/2.0 (P[a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // PCBOX
        'Art-PCB-V116|Bee-PCB-V216|Clap-PCB-I316|PCB-T(103|715)'   =>  [
            'name'=>'PCBOX',
            'category'=>'smartphone',
            'sub'=>[
                'Art-PCB-V116'=>[
                    'name'=>'Art',
                ],
                'Bee-PCB-V216'=>[
                    'name'=>'Bee',
                ],
                'Clap-PCB-I316'=>[
                    'name'=>'Clap',
                ],
                'PCB-T103'=>[
                    'name'=>'Curi Lite',
                    'category'=>'tablet',
                ],
                'PCB-T715'=>[
                    'name'=>'T715',
                    'category'=>'tablet',
                ],
            ]
        ],
                
        // PCD
        'PH4001'   =>  [
            'name'=>'PCD',
            'category'=>'smartphone',
            'sub'=>[
                'PH4001'=>[
                    'name'=>'PH4001',
                ],
            ]
        ],

        // PCD Argentina
        'PCD[ ]?50[689]'   =>  [
            'name'=>'PCD Argentina',
            'category'=>'smartphone',
            'sub'=>[
                'PCD[ ]?(50[689])'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Pentagram
        'Pentagram|Quadra|Monster X5'   =>  [
            'name'=>'Pentagram',
            'category'=>'tablet',
            'sub'=>[
                '(?:PENTAGRAM[_ ])?EON[_ ]PRIX'=>[
                    'name'=>'Eon Prix',
                ],
                'Quadra 7( UltraSlim)?'=>[
                    'name'=>'Quadra 7 UltraSlim',
                ],
                'Monster X5?'=>[
                    'name'=>'Monster X5',
                    'category'=>'smartphone',
                ],
                'Quadra ?([^);/]*) Build'=>[
                    'name'=>'Quadra $1',
                ],
                'Pentagram ?TAB ?([^);/]*) Build'=>[
                    'name'=>'Tab $1',
                ],
                'Pentagram ?([^);/]*) Build'=>[
                    'name'=>'$1',
                    'category'=>'smartphone',
                ],
            ]
        ],
                
        // philips
        'Philips|AND1E[);/ ]|NETTV/|PI3210G'   =>  [
            'name'=>'Philips',
            'category'=>'smartphone',
            'sub'=>[
                'AND1E(?: TV)?[);/ ]'=>[
                    'name'=>'Android TV',
                    'category'=>'tv',
                ],
                '(PI3210G)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'Philips, BDP([0-9]{4})'=>[
                    'name'=>'Blu-ray Player (BDP$1)',
                    'category'=>'tv',
                ],
                '(NETTV/[0-9\.]{5})'=>[
                    'name'=>'NetTV Series',
                    'category'=>'tv',
                ],
                'Philips-FISIO ([a-z0-9]+)'=>[
                    'name'=>'Fisio $1',
                ],
                'Philips[ _-]?([a-z0-9\-@]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // phoneOne
        'phoneOne[ \-]?([a-z0-9]+)'   =>  [
            'name'=>'phoneOne',
            'category'=>'smartphone',
            'sub'=>[
                'phoneOne[ \-]?([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Primepad
        'PD\-(3127NC|3127) Build'   =>  [
            'name'=>'Primepad',
            'category'=>'tablet',
            'sub'=>[
                'PD\-3127NC Build'=>[
                    'name'=>'PD-3127NC',
                ],
                'PD\-3127 Build'=>[
                    'name'=>'PD-3127',
                ],
            ]
        ],

        // Pioneer
        'Pioneer|.*; R1 Build'   =>  [
            'name'=>'Pioneer',
            'category'=>'smartphone',
            'sub'=>[
                '.*; R1 Build'=>[
                    'name'=>'R1',
                    'category'=>'tablet',
                ],
                'Pioneer[ _-]?([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Pioneer[ _-]?([^;/)]+)[;/)]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // PULID
        'PULID[ _]|F1[01357]\+? Build'   =>  [
            'name'=>'PULID',
            'category'=>'smartphone',
            'sub'=>[
                'F(1[01357]\+?) Build'=>[
                    'name'=>'F$1',
                ],
                'PULID[ _]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'PULID[ _]([a-z0-9_]+)\)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Point of View
        'POV_TV|POV_TAB|MOB-5045'   =>  [
            'name'=>'Point of View',
            'category'=>'tablet',
            'sub'=>[
                'POV_TV-HDMI-KB-01'=>[
                    'name'=>'HDMI Smart TV Dongle',
                    'category'=>'tv',
                ],
                'POV_TV-HDMI-200BT'=>[
                    'name'=>'Mini PC HDMI Dongle',
                    'category'=>'tv',
                ],
                'MOB-5045'=>[
                    'name'=>'Mobii Phone 5045',
                    'category'=>'smartphone',
                ],
                'POV_TAB-P506'=>[
                    'name'=>'ONYX 506 Navi',
                ],
                'POV_TAB[_-]NAVI7[_-]3G[_-]M'=>[
                    'name'=>'ONYX 507 Navi',
                ],
                'POV_TAB-P527S'=>[
                    'name'=>'ONYX 527S',
                ],
                'POV_TAB-P547'=>[
                    'name'=>'ONYX 547 Navi',
                ],
                'POV_TAB-PROTAB26'=>[
                    'name'=>'ProTab 26 XXL IPS',
                ],
                'POV_TAB-PROTAB25XXL8?'=>[
                    'name'=>'ProTab 25XXL',
                ],
                'POV_TAB-PL1015'=>[
                    'name'=>'Mobii 1015',
                ],

                'POV_TAB-PROTAB([a-z0-9]+)'=>[
                    'name'=>'ProTab $1',
                ],
                'POV_TAB-P?([a-z0-9]+)'=>[
                    'name'=>'Mobii $1',
                ],
            ]
        ],

        // Pomp
        'POMP[ _-]'   =>  [
            'name'=>'Pomp',
            'category'=>'smartphone',
            'sub'=>[
                'POMP[ _-]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'POMP[ _-]([^;/)]+)[;/)]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // PPTV
        '(KING 7S?)'   =>  [
            'name'=>'PPTV',
            'category'=>'smartphone',
            'sub'=>[
                '(KING 7S?)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // ProScan
        'PLT([^;/]+) Build'   =>  [
            'name'=>'ProScan',
            'category'=>'tablet',
            'sub'=>[
                'PLT([^;/]+) Build'=>[
                    'name'=>'PLT$1',
                ],
            ]
        ],

        // RCA Tablets
        'RCT([^;/]+) Build|RCA RLTP4028'   =>  [
            'name'=>'RCA Tablets',
            'category'=>'smartphone',
            'sub'=>[
                'RCA RLTP4028'=>[
                    'name'=>'RLTP4028',
                ],
                'RCT([^;/]+) Build'=>[
                    'name'=>'RCT$1',
                    'category'=>'tablet',
                ],
            ]
        ],

        // Readboy
        'Readboy[ _-]'   =>  [
            'name'=>'Readboy',
            'category'=>'tablet',
            'sub'=>[
                'Readboy[ _-]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Readboy[ _-]([^;/]+)[;/)]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Roku
        'Roku/DVP'   =>  [
            'name'=>'Roku',
            'category'=>'tv',
            'sub'=>[
                'Roku/DVP'=>[
                    'name'=>'Digital Video Player',
                ],
            ]
        ],

        // Rover
        'Rover ([0-9]+)'   =>  [
            'name'=>'Rover',
            'category'=>'feature phone',
            'sub'=>[
                'Rover ([0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // RT Project
        'Shock 5'   =>  [
            'name'=>'RT Project',
            'category'=>'smartphone',
            'sub'=>[
                'Shock 5'=>[
                    'name'=>'Shock 5',
                ],
            ]
        ],
                
        // Santin BiTBiZ
        'BiTBiZ'   =>  [
            'name'=>'Santin BiTBiZ',
            'category'=>'smartphone',
            'sub'=>[
                'BiTBiZ_V58'=>[
                    'name'=>'V58',
                ],
            ]
        ],

        // Siemens
        'SIEMENS|SIE-|portalmmm/2\.0 SI|S55|SL45i'   =>  [
            'name'=>'Siemens',
            'category'=>'smartphone',
            'sub'=>[
                'SIEMENS[ \-]([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'SIE(?:MENS )?[\-]?([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                '(S55|SL45i)'=>[
                    'name'=>'$1',
                ],
                'portalmmm/2.0 (SI[a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Sanei
        '(?:8312D|G(60[25]|70[3568]G?|785|803)|N83(?:-2cpu)?|N91) Build'   =>  [
            'name'=>'Sanei',
            'category'=>'smartphone',
            'sub'=>[
                'N83'=>[
                    'name'=>'N83',
                ],
                'N91'=>[
                    'name'=>'N91',
                ],
                '8312D'=>[
                    'name'=>'G101',
                ],
                'G(60[25]|70[3568]G?|785|803)'=>[
                    'name'=>'G$1',
                ],
            ]
        ],

        // Selfix
        'SELFIX'   =>  [
            'name'=>'Selfix',
            'category'=>'smartphone',
            'sub'=>[
                'SELFIX_SLASH6'=>[
                    'name'=>'Slash 6',
                ],
                'VOYAGER-V45'=>[
                    'name'=>'Voyager V45',
                ],
            ]
        ],

        // Sencor
        'Sencor|ELEMENT[ _]?(?:7|8|9\.7|10[ _]1)(?:[ _]?V[23])?[);/ ]|ELEMENT[ _]?(?:P[0-9]+)[);/ ]'   =>  [
            'name'=>'Sencor',
            'category'=>'tablet',
            'sub'=>[
                // explicit tablet models
                '(?:SENCOR[ _])?ELEMENT[ _]?7[ _]?V3'=>[
                    'name'=>'Element 7 V3',
                ],
                '(?:SENCOR[ _])?ELEMENT[ _]?7[ _]?V2[ _]BASIC'=>[
                    'name'=>'Element 7 V2 Basic',
                ],
                '(?:SENCOR[ _])?ELEMENT[ _]?7[ _]?V2'=>[
                    'name'=>'Element 7 V2',
                ],
                '(?:SENCOR[ _])?ELEMENT[ _]8[ _]?V3'=>[
                    'name'=>'Element 8 V3',
                ],
                '(?:SENCOR[ _])?ELEMENT[ _]8[ _]?V2'=>[
                    'name'=>'Element 8 V2',
                ],
                '(?:SENCOR[ _])?ELEMENT8'=>[
                    'name'=>'Element 8',
                ],
                '(?:SENCOR[ _])?ELEMENT[ _]9\.7[ _]?V3'=>[
                    'name'=>'Element 9.7 V3',
                ],
                '(?:SENCOR[ _])?ELEMENT[ _]9\.7[ _]?V2'=>[
                    'name'=>'Element 9.7 V2',
                ],
                '(?:SENCOR[ _])?ELEMENT[ _]9\.7'=>[
                    'name'=>'Element 9.7',
                ],
                '(?:SENCOR[ _])?ELEMENT10[ _]1'=>[
                    'name'=>'Element 10.1',
                ],

                '(?:SENCOR[ _])?ELEMENT[ _]?P([0-9]+)'=>[
                    'name'=>'Element P$1',
                    'category'=>'smartphone',
                ],

                'Sencor[ _]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Senwa
        'Senwa|(?:S\-?(?:471|7[12]5|6[01]5|915|905TL|1000)|V705B)[ /;\)]'   =>  [
            'name'=>'Senwa',
            'category'=>'smartphone',
            'sub'=>[
                'S\-?471[ /;\)]'=>[
                    'name'=>'Jazz',
                ],
                'S\-?605[ /;\)]'=>[
                    'name'=>'City',
                ],
                'S\-?905TL[ /;\)]'=>[
                    'name'=>'Odin',
                ],
                'S\-?1000[ /;\)]'=>[
                    'name'=>'Odin',
                ],
                'S\-?(615|7[12]5|915)[ /;\)]'=>[
                    'name'=>'S$1',
                ],
                'V705B[ /;\)]'=>[
                    'name'=>'V705B',
                ],
                'Senwa[ _-]*([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Senwa[ _-]*([^ ;/)]+)[ ;/)]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Sky
        '(SKY|Elite|Fuego)[_ ][3-7]\.[05]([A-Z]{1,2})?|Elite_5_5_Octa|Platinum_(5.0M|M5)'   =>  [
            'name'=>'Sky',
            'category'=>'smartphone',
            'sub'=>[
                'Platinum_(5.0M|M5)'=>[
                    'name'=>'Platinum 5.0M',
                ],
                'Elite_5_5_Octa'=>[
                    'name'=>'Elite 5.5 Octa',
                ],
                'Elite[_ ]([3-7]\.[05](?:[A-Z]{1,2})?\+?)'=>[
                    'name'=>'Elite $1',
                ],
                'Fuego[_ ]([3-7]\.[05](?:[A-Z]{1,2})?\+?)'=>[
                    'name'=>'Fuego $1',
                ],
                'SKY[_ ]([3-7]\.[05](?:[A-Z]{1,2})?)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Skyworth
        'Sky_?worth'   =>  [
            'name'=>'Skyworth',
            'category'=>'tv',
            'sub'=>[
                'Sky_?worth ([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Smartfren
        'Smartfren|Androtab|Andromax|PD6D1J|AD682J|AD68[89]G|AD6B1H|AD9A1H|AD682H|AD683G'   =>  [
            'name'=>'Smartfren',
            'category'=>'smartphone',
            'sub'=>[
                // explicit tablet models
                'S7 Build'=>[
                    'name'=>'Andromax Tab 7.0',
                    'category'=>'tablet',
                ],

                // explicit smartphone models
                'PD6D1J'=>[
                    'name'=>'Andromax V3s',
                ],
                'AD682J'=>[
                    'name'=>'Andromax T',
                ],
                'AD688G'=>[
                    'name'=>'Andromax C2',
                ],
                'AD689G'=>[
                    'name'=>'Andromax i3',
                ],
                'AD682H'=>[
                    'name'=>'Andromax i3s',
                ],
                'AD6B1H'=>[
                    'name'=>'Andromax G2 Hot',
                ],
                'AD9A1H'=>[
                    'name'=>'Andromax G2',
                ],
                'AD683G'=>[
                    'name'=>'Andromax I',
                ],
                'New Andromax-i'=>[
                    'name'=>'New Andromax I',
                ],

                'Andromax[ _\-]([^/;]+) Build'=>[
                    'name'=>'Andromax $1',
                ],
                'Andromax[ _\-]([a-z0-9]+)'=>[
                    'name'=>'Andromax $1',
                ],
                'Smartfren[ _\-]([^/;\)]+)(?: Build|[/;\)])'=>[
                    'name'=>'$1',
                ],
                '(Androtab[^/;]+) Build'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
            ]
        ],

        // Smartisan
        'SM(?:70[15]|801|901|919)|OD10[35]|YQ60[1357][ /;\)]'   =>  [
            'name'=>'Smartisan',
            'category'=>'smartphone',
            'sub'=>[
                'SM70[15]'=>[
                    'name'=>'T1',
                ],
                'SM801'=>[
                    'name'=>'T2',
                ],
                'SM901'=>[
                    'name'=>'M1',
                ],
                'SM919'=>[
                    'name'=>'M1L',
                ],
                'YQ60[1357]'=>[
                    'name'=>'U1',
                ],
                'OD10[35]'=>[
                    'name'=>'Pro',
                ],
            ]
        ],

        // STF Mobile
        'Fractal|AERIAL PLUS'   =>  [
            'name'=>'STF Mobile',
            'category'=>'smartphone',
            'sub'=>[
                'Fractal'=>[
                    'name'=>'Fractal',
                ],
                'AERIAL PLUS'=>[
                    'name'=>'Aerial Plus',
                ],
            ]
        ],

        // STK
        'STK[_ ]'   =>  [
            'name'=>'STK',
            'category'=>'smartphone',
            'sub'=>[
                'STK[_ ]([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                'STK[_ ]([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Stonex
        'STX[ -]([^;/]+)'   =>  [
            'name'=>'Stonex',
            'category'=>'smartphone',
            'sub'=>[
                'STX[ -]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'STX[ -]([a-z0-9_-]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // SuperSonic
        '(SC-[0-9]+[a-z]+)'   =>  [
            'name'=>'SuperSonic',
            'category'=>'tablet',
            'sub'=>[
                '(SC-[0-9]+[a-z]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Supra
        'SUPRA ([^;/]+) Build|NVTAB 7.0 3G'   =>  [
            'name'=>'Supra',
            'category'=>'smartphone',
            'sub'=>[
                'SUPRA ([^;/]+) Build'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                '(NVTAB 7.0 3G)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
            ]
        ],

        // Sumvision
        '(Cyclone [^/;]+) Build'   =>  [
            'name'=>'Sumvision',
            'category'=>'tablet',
            'sub'=>[
                '(Cyclone [^/;]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // SunVan
        'SUNVAN[ _\-]'   =>  [
            'name'=>'SunVan',
            'category'=>'smartphone',
            'sub'=>[
                'SUNVAN[ _\-]?([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                'SUNVAN[ _\-]?([^);/ ]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // SWISSMOBILITY
        'SCHR9GR|ZUR722M'   =>  [
            'name'=>'SWISSMOBILITY',
            'category'=>'smartphone',
            'sub'=>[
                'SCHR9GR'=>[
                    'name'=>'SCHON R9',
                ],
                'ZUR722M'=>[
                    'name'=>'Z72 go',
                    'category'=>'phablet',
                ],
            ]
        ],
                

        // Thomson
        '(?:Primo(7|8)|QM73[45]-8G|QM734-2|QM736-8G\(HD\)|8950|MID1002)[);/ ]|(?:Tlink|Every)[0-9]+'   =>  [
            'name'=>'Thomson',
            'category'=>'tablet',
            'sub'=>[
                'Primo(7|8)'=>[
                    'name'=>'Primo $1'
                ],
                'QM734-2'=>[
                    'name'=>'QM734-2',
                ],
                'QM734-8G'=>[
                    'name'=>'QM734-8G',
                ],
                'QM735-8G'=>[
                    'name'=>'QM735-8G',
                ],
                'QM736-8G\(HD\)'=>[
                    'name'=>'QM736-8G (HD)',
                ],
                '8950 Build'=>[
                    'name'=>'3G 8950',
                ],

                'Tlink([0-9]+)'=>[
                    'name'=>'Tlink$1',
                    'category'=>'smartphone',
                ],
                'Every([0-9]+)'=>[
                    'name'=>'Every$1',
                    'category'=>'smartphone',
                ],
            ]
        ],

        // pantech
        'Pantech|P[GN]-|PT-[a-z0-9]{3,}|TX[T]?[0-9]+|IM-[a-z0-9]+[);/ ]|ADR910L'   =>  [
            'name'=>'Pantech',
            'category'=>'smartphone',
            'sub'=>[
                // explicit smartphone models
                'ADR910L'=>[
                    'name'=>'Star Q',
                ],
                'IM-A870K'=>[
                    'name'=>'Vega Iron',
                ],

                'Pantech[ \-]?([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'Pantech_([a-z0-9\-]+)'=>[
                    'name'=>'$1',
                ],
                '(P[GTN]-[a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                '(TX[T]?[0-9]+)'=>[
                    'name'=>'$1',
                ],
                '(IM-[a-z0-9]+)[);/ ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Ployer
        'MOMO([0-9]|miniS)'   =>  [
            'name'=>'Ployer',
            'category'=>'tablet',
            'sub'=>[
                'MOMOminiS'=>[
                    'name'=>'MOMO mini S',
                ],
                'MOMO([0-9][^);/]*) Build'=>[
                    'name'=>'MOMO $1',
                ],
                'MOMO([0-9][^);/]*)[);/]'=>[
                    'name'=>'MOMO $1',
                ],
            ]
        ],
                
        // Plum
        'PLUM '   =>  [
            'name'=>'Plum',
            'category'=>'smartphone',
            'sub'=>[
                'Z405'=>[
                    'name'=>'Gator 3',
                ],
            ]
        ],
                
        // Polaroid
        'Polaroid|(?:PMID|MIDC)[0-9a-z]+[);/ ]|MID(?:1014|0714)|PRO[VG]?(?:[0-9]{3,}[a-z]*|[0-9]{2}[a-z])|P(400[56]|4526|500[56]|502[56]|504[67]|552[56])A|PSPC(505|550)|PSPCK21NA|PSPCL20A0|PSPCM20A0|PSPCZ20A0'   =>  [
            'name'=>'Polaroid',
            'category'=>'smartphone',
            'sub'=>[
                // explicit smartphone models
                'P4005A'=>[
                    'name'=>'Turbo C4',
                ],
                'P5005A'=>[
                    'name'=>'Turbo C5',
                ],
                'P4006A'=>[
                    'name'=>'Turbo D4',
                ],
                'P4526A'=>[
                    'name'=>'Turbo E',
                ],
                'PSPC(505|550)'=>[
                    'name'=>'Cosmo $1',
                ],
                'P5006A'=>[
                    'name'=>'Cosmo K',
                ],
                'P5526A'=>[
                    'name'=>'Cosmo K Plus',
                ],
                'PSPCK21NA'=>[
                    'name'=>'Cosmo K2 Plus',
                ],
                'P5026A'=>[
                    'name'=>'Cosmo L',
                ],
                'PSPCL20A0'=>[
                    'name'=>'Cosmo L2',
                ],
                'PSPCM20A0'=>[
                    'name'=>'Cosmo M2',
                ],
                'P5046A'=>[
                    'name'=>'Cosmo P5s',
                ],
                'P5525A'=>[
                    'name'=>'Cosmo Q5s',
                ],
                'P5047A'=>[
                    'name'=>'Cosmo Z',
                ],
                'PSPCZ20A0'=>[
                    'name'=>'Cosmo Z2',
                ],
                'P5025A'=>[
                    'name'=>'L5s',
                ],
                'PRO4611(?:PR201)?'=>[
                    'name'=>'Pro4611',
                ],
                'PROV400'=>[
                    'name'=>'Agate',
                ],
                'PROV350'=>[
                    'name'=>'ProV350',
                ],
                'PRO([VG]?(?:[0-9]{3,}[a-z]*|[0-9]{2}[a-z]))'=>[
                    'name'=>'Pro$1',
                ],

                '(MID(?:1014|0714))'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                '((?:PMID|MIDC)[0-9a-z]+)[);/ ]'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'Polaroid'=>[
                    'name'=>'',
                    'category'=>'tablet',
                ],
            ]
        ],

        // PolyPad
        'POLY ?PAD'   =>  [
            'name'=>'PolyPad',
            'category'=>'tablet',
            'sub'=>[
                'POLY ?PAD[_ \.]([a-z0-9]+)[);/ ]'=>[
                    'name'=>'$1',
                ],
                'POLY ?PAD[_\.]([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Positivo
        'YPY_S450'   =>  [
            'name'=>'Positivo',
            'category'=>'smartphone',
            'sub'=>[
                'YPY_S450'=>[
                    'name'=>'YPY S450',
                ],
            ]
        ],
                
        // Prestigio
        '(?:PMP|PAP|PMT|PSP)[0-9]+[a-z0-9_]+[);/ ]'   =>  [
            'name'=>'Prestigio',
            'category'=>'tablet',
            'sub'=>[
                'PMT3277_3G'=>[
                    'name'=>'MultiPad Ranger 7.0 3G',
                ],
                'PMT3287_3G'=>[
                    'name'=>'MultiPad Ranger 8.0 3G',
                ],

                '(PM[PT][0-9]+[a-z0-9_]+)[);/ ]'=>[
                    'name'=>'$1',
                ],
                '((?:PAP|PSP)[0-9]+[a-z0-9_]+(?: DUO)?)[);/ ]'=>[
                    'name'=>'$1',
                    'category'=>'smartphone',
                ],
            ]
        ],

        // Sanyo
        'Sanyo|MobilePhone[ ;]'   =>  [
            'name'=>'Sanyo',
            'category'=>'feature phone',
            'sub'=>[
                // explicit feature phone models
                'SCP-?6750'=>[
                    'name'=>'Katana Eclipse X',
                ],
                'SCP-?6760'=>[
                    'name'=>'Incognito',
                ],
                'SCP-?6780'=>[
                    'name'=>'Innuendo',
                ],

                'SANYO[ \-_]([a-z0-9\-]+)'=>[
                    'name'=>'$1',
                ],
                'MobilePhone ([a-z0-9\-]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Qilive
        'Qilive [0-9][^;/]*|Q8S55IN4G2'   =>  [
            'name'=>'Qilive',
            'category'=>'smartphone',
            'sub'=>[
                'Q8S55IN4G2'=>[
                    'name'=>'Q8S55IN4G2',
                ],
                'Qilive ([0-5][^;/]*) Build'=>[
                    'name'=>'$1',
                ],
                'Qilive ([0-5][^;/]*)/'=>[
                    'name'=>'$1',
                ],
                'Qilive ([6-9][^;/]*) Build'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'Qilive ([6-9][^;/]*)/'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
            ]
        ],
                

        // QMobile
        'QMobile|QTab|Q-Smart|Noir X1S'   =>  [
            'name'=>'QMobile',
            'category'=>'smartphone',
            'sub'=>[
                'QTab[ _-]([^;/]+) Build'=>[
                    'name'=>'$1 Tab',
                    'category'=>'tablet',
                ],
                'QTab[ _-]([^;/)]+)[;/)]'=>[
                    'name'=>'$1 Tab',
                    'category'=>'tablet',
                ],
                '(?:QMobile|Q-Smart)[ _-]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                '(?:QMobile|Q-Smart)[ _-]([^;/)]+)[;/)]'=>[
                    'name'=>'$1',
                ],
                'Noir X1S'=>[
                    'name'=>'Noir X1S',
                ],
            ]
        ],

        // Quantum
        'Quantum (Fit|Mini|V|You E)'   =>  [
            'name'=>'Quantum',
            'category'=>'smartphone',
            'sub'=>[
                'Quantum (Fit|Mini|V|You E)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Quechua
        'Quechua Phone 5'   =>  [
            'name'=>'Quechua',
            'category'=>'smartphone',
            'sub'=>[
                'Quechua Phone 5'=>[
                    'name'=>'Quechua Phone 5',
                ],
            ]
        ],

        // Ramos
        'Ramos ?([^/;]+) Build'   =>  [
            'name'=>'Ramos',
            'category'=>'tablet',
            'sub'=>[
                'Ramos ?([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Sendo
        'Sendo([a-z0-9]+)'   =>  [
            'name'=>'Sendo',
            'category'=>'feature phone',
            'sub'=>[
                'Sendo([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Turbo-X
        'Turbo-X'   =>  [
            'name'=>'Turbo-X',
            'category'=>'smartphone',
            'sub'=>[
                'Turbo-X Ice[);/ ]'=>[
                    'name'=>'Ice',
                    'category'=>'tablet',
                ],
                'Turbo-X Tablet([^;/]+) Build'=>[
                    'name'=>'Tablet$1',
                    'category'=>'tablet',
                ],
                'Turbo-X ([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Silent Circle
        'Blackphone 2'   =>  [
            'name'=>'Silent Circle',
            'category'=>'smartphone',
            'sub'=>[
                'Blackphone 2'=>[
                    'name'=>'Blackphone 2',
                ],
            ]
        ],

        // Spice
        'Spice'   =>  [
            'name'=>'Spice',
            'category'=>'smartphone',
            'sub'=>[
                'Spice[ _\-]?([^/;]+)(?:[\)]| Build)'=>[
                    'name'=>'$1',
                ],
                'Spice[ _\-]?([^/;]+)(?:/|$)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Sharp
        'SHARP|SBM|SH-?[0-9]+[a-z]?[);/ ]|AQUOS|506SH|SHL22|FS8010[);/ ]|TG-L900S'   =>  [
            'name'=>'Sharp',
            'category'=>'smartphone',
            'sub'=>[
                // explicit smartphone models
                '506SH'=>[
                    'name'=>'Aquos Xx3',
                ],
                'SH-02E'=>[
                    'name'=>'Aquos Phone Zeta',
                ],
                'SH06D'=>[
                    'name'=>'Aquos Phone SH-06D',
                ],
                'SHL22'=>[
                    'name'=>'Aquos Phone SHL22',
                ],
                'FS8010'=>[
                    'name'=>'Aquos S2',
                ],
                'TG-L900S'=>[
                    'name'=>'Luna S',
                ],
                // explicit tablet models
                'SH-08E'=>[
                    'name'=>'Sharp Aquos Pad',
                    'category'=>'tablet',
                ],

                '(LC-(?:[0-9]{2})[a-z0-9]+)(?:[);/ ]|$)'=>[
                    'name'=>'$1',
                    'category'=>'tv',
                ],
                'SHARP-AQUOS|AQUOSBrowser'=>[
                    'name'=>'Aquos Net Plus',
                    'category'=>'tv',
                ],
                'SHARP[ \-]([a-z0-9\-]+)'=>[
                    'name'=>'$1',
                ],
                '(?:SHARP|SBM)([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                '(SH-?[0-9]+[a-z]?)[);/ ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Softbank
        'Softbank|J-PHONE'   =>  [
            'name'=>'Softbank',
            'category'=>'smartphone',
            'sub'=>[
                'Softbank/[12]\.0/([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                '([a-z0-9]+);Softbank;'=>[
                    'name'=>'$1',
                ],
                'J-PHONE/[0-9]\.[0-9]/([a-z0-9\-]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Sonim
        'Sonim[ -]|XP[67]700[);/ ]'   =>  [
            'name'=>'Sonim',
            'category'=>'smartphone',
            'sub'=>[
                'Sonim-XP3400'=>[
                    'name'=>'XP3400',
                    'category'=>'feature phone',
                ],
                'XP6700[);/ ]'=>[
                    'name'=>'XP6700',
                ],
                'XP7700[);/ ]'=>[
                    'name'=>'XP7700',
                ],
            ]
        ],
                
        // Star
        'N(9[5678]00|8800|9000|9977)[);/ ]'   =>  [
            'name'=>'Star',
            'category'=>'smartphone',
            'sub'=>[
                'N9000'=>[
                    'name'=>'Note 3',
                ],

                'N(9[5678]00|8800|9977)[);/ ]'=>[
                    'name'=>'N$1',
                ],
            ]
        ],

        // Kindle
        'KF(?:OT|TT|JWI|JWA|[DFS]OWI|A[PRSU]WI|T[BH]WI|SAW[IA]|GIWI)[);/ ]|Kindle|Silk/\d+\.\d+|Amazon (?:Tate|Jem)|AFT[BMST]|SD4930UR'   =>  [
            'name'=>'Amazon',
            'category'=>'tablet',
            'sub'=>[
                'AFTB'=>[
                    'name'=>'Fire TV',
                    'category'=>'tv',
                ],
                'AFT[MST]'=>[
                    'name'=>'Fire TV stick',
                    'category'=>'tv',
                ],
                'KFFOWI[);/ ]'=>[
                    'name'=>'Fire 7"',
                ],
                'KFTT[);/ ]'=>[
                    'name'=>'Kindle Fire HD',
                ],
                'KFJWI[);/ ]|Amazon Jem'=>[
                    'name'=>'Kindle Fire HD 8.9" WiFi',
                ],
                'KFJWA[);/ ]'=>[
                    'name'=>'Kindle Fire HD 8.9" 4G',
                ],
                'KFSOWI[);/ ]|Amazon Tate'=>[
                    'name'=>'Kindle Fire HD 7" WiFi',
                ],
                'KFTHWI[);/ ]'=>[
                    'name'=>'Kindle Fire HDX 7" WiFi',
                ],
                'KFTHWA[);/ ]'=>[
                    'name'=>'Kindle Fire HDX 7" 4G',
                ],
                'KFAPWI[);/ ]'=>[
                    'name'=>'Kindle Fire HDX 8.9" WiFi',
                ],
                'KFAPWA[);/ ]'=>[
                    'name'=>'Kindle Fire HDX 8.9" 4G',
                ],
                'KFARWI[);/ ]'=>[
                    'name'=>'Fire HD 6',
                ],
                'KFASWI[);/ ]'=>[
                    'name'=>'Fire HD 7',
                ],
                'KFAUWI[);/ ]'=>[
                    'name'=>'Fire HD 7 2017',
                ],
                'KFGIWI[);/ ]'=>[
                    'name'=>'Fire HD 8 2016',
                ],
                'KFDOWI[);/ ]'=>[
                    'name'=>'Fire HD 8 2017',
                ],
                'KFSAWI[);/ ]'=>[
                    'name'=>'Fire HDX 8.9',
                ],
                'KFSAWA[);/ ]'=>[
                    'name'=>'Fire HDX 8.9 4G',
                ],
                'KFTBWI[);/ ]'=>[
                    'name'=>'Fire HD 10',
                ],
                'SD4930UR'=>[
                    'name'=>'Fire Phone',
                    'category'=>'smartphone',
                ],

                'KFOT|Kindle Fire|Silk/\d+\.\d+'=>[
                    'name'=>'Kindle Fire',
                ],
                'Kindle'=>[
                    'name'=>'Kindle',
                ],
            ]
        ],
                
        // Symphony
        'SYMPHONY[ \_]([a-z0-9]+)'   =>  [
            'name'=>'Symphony',
            'category'=>'smartphone',
            'sub'=>[
                'SYMPHONY[ \_]([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Qtek
        'Qtek[ _]?([a-z0-9]+)'   =>  [
            'name'=>'Qtek',
            'category'=>'smartphone',
            'sub'=>[
                'Qtek[ _]?([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // T-Mobile
        'T-Mobile[ _][a-z0-9 ]+'   =>  [
            'name'=>'T-Mobile',
            'category'=>'smartphone',
            'sub'=>[
                'T-Mobile[ _]([a-z0-9_ ]+) Build'=>[
                    'name'=>'$1',
                ],
                'T-Mobile[ _]([a-z0-9_ ]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // TB Touch
        'Ignis [89]'   =>  [
            'name'=>'TB Touch',
            'category'=>'tablet',
            'sub'=>[
                'Ignis ([89])'=>[
                    'name'=>'Ignis $1',
                ],
            ]
        ],
                

        // Tcl
        'TCL[ -][a-z0-9]+|(TCL[_ -][^;/]+|7040N) Build|TCLGalaG60|A502DL'   =>  [
            'name'=>'TCL',
            'category'=>'smartphone',
            'sub'=>[
                'TCLGalaG60'=>[
                    'name'=>'Gala G60',
                ],
                'TCL[_ -]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'TCL[ -]([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                '(7040N)'=>[
                    'name'=>'$1',
                ],
                'A502DL'=>[
                    'name'=>'LX',
                ],
            ]
        ],
                
        // Teclast
        'Teclast|Tbook'   =>  [
            'name'=>'Teclast',
            'category'=>'tablet',
            'sub'=>[
                'Tbook[_ -]([^;/]+) Build'=>[
                    'name'=>'Tbook $1',
                ],
                'Teclast[_ -]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Tecno Mobile
        'Tecno|Phantom6|Phantom6-Plus'   =>  [
            'name'=>'Tecno Mobile',
            'category'=>'smartphone',
            'sub'=>[
                'Phantom6-Plus'=>[
                    'name'=>'Phantom 6 Plus',
                ],
                'Phantom6'=>[
                    'name'=>'Phantom 6',
                ],
                'Tecno ([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Tecno[ _]?([a-z0-9_\-]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // TechPad
        'Tech ?pad|XTAB[ _-]|Dual C1081HD|S813G'   =>  [
            'name'=>'TechPad',
            'category'=>'tablet',
            'sub'=>[
                'S813G'=>[
                    'name'=>'S813G',
                ],
                'Dual C1081HD'=>[
                    'name'=>'XTAB C1081HD',
                ],
                'XTAB[ _-]([^/;]+) Build'=>[
                    'name'=>'XTAB $1',
                ],
                'Tech ?pad[ _-]([^/;]+) Build'=>[
                    'name'=>'$1',
                    'category'=>'smartphone',
                ],
            ]
        ],
                
        // Tesco
        'Hudl ([^/;]+) Build|W032i-C3[);/ ]'   =>  [
            'name'=>'Tesco',
            'category'=>'tablet',
            'sub'=>[
                'Hudl ([^/;]+) Build'=>[
                    'name'=>'Hudl $1',
                ],
                'W032i-C3[);/ ]'=>[
                    'name'=>'Op3n Dott',
                ],
            ]
        ],

        // teXet
        'Texet|(NaviPad [^/;]*) Build|TM-(?:1046|1058|1057|1067|3000|3200R|3500|4003|4071|450[34]|451[30]|4377|4082R|550[83]|5010|5017|5[23]77|6003|6906|702[13]|7055HD|709[69]|9747BT|9758|9751HD|9767|5513|520[410]|5505|507[13]|5581|7859|8044|9748[ _]3G|9720|7047HD[ _]3G|9757|9740|4982|4515|4083|500[3567]|5571|3204R|5016|8043|7047HD[ _]3G|8041HD|8066|705[23]|7041|8041HD|8051|8048|974[96]|973[78]W|974[10]|9743W|9750HD|7043XD|7049|7887|7037W|702[46])|TB-(771A|711A)|X-Force[\(-]?TM-5009\)?|X-Plus[\(-]?TM-5577\)?|X-pad (?:AIR 8|iX 7) 3G'   =>  [
            'name'=>'teXet',
            'category'=>'tablet',
            'sub'=>[
                'TM-9749'=>[
                    'name'=>'X-pad Plus 7.1 3G',
                ],
                'TM-9746'=>[
                    'name'=>'X-pad Plus 7 3G',
                ],
                'TM-8051'=>[
                    'name'=>'X-pad Force 8i 3G',
                ],
                'TM-1058'=>[
                    'name'=>'X-Force 10 3G',
                ],
                'TM-8048'=>[
                    'name'=>'X-pad Force 8 3G',
                ],
                '(NaviPad [^/;]*) Build'=>[
                    'name'=>'$1',
                ],
                'TM-7055HD'=>[
                    'name'=>'NaviPad 3G',
                ],
                'TM-9758'=>[
                    'name'=>'X-pad Style 10',
                ],
                '(X-pad (?:AIR 8|iX 7) 3G)'=>[
                    'name'=>'$1',
                ],
                'TM-7096'=>[
                    'name'=>'X-pad NAVI 7.3 3G',
                ],
                'TM-7099'=>[
                    'name'=>'X-pad NAVI 7.4 3G',
                ],
                'TM-1046'=>[
                    'name'=>'X-pad NAVI 10 3G',
                ],
                'TM-7859'=>[
                    'name'=>'X-pad NAVI 8.2 3G',
                ],
                'TM-7049'=>[
                    'name'=>'NaviPad TM-7049 3G',
                ],
                'TM-7887'=>[
                    'name'=>'NaviPad TM-7887 3G',
                ],
                'TM-8066'=>[
                    'name'=>'X-pad Rapid 8.2 4G',
                ],
                '(TM-(?:1057|1067|6906|8043|9748[_ ]3G|9740|9757(?:[_ ]3G)?|7047HD[ _]3G|9747BT|9751HD|702[13]|705[23]|7041|9720|7047HD[_ ]3G|8044|8041HD|973[78]W|9743W|974[10]|9750HD|7043XD|7037W|702[46])|TB-(?:771A|711A|8041HD))'=>[
                    'name'=>'$1',
                ],
                'TM-4503'=>[
                    'name'=>'X-Quad',
                    'category'=>'smartphone',
                ],
                '(TM-(?:3000|3200R|4003|4083|4377|4504|451[30]|500[35]|5[23]77|5571|3204R|520[04]|5581|5505|507[13]|5017|6003|5513))'=>[
                    'name'=>'$1',
                    'category'=>'smartphone',
                ],
                'TM-5006'=>[
                    'name'=>'X-Line',
                    'category'=>'smartphone',
                ],
                'TM-5007'=>[
                    'name'=>'X-Shine',
                    'category'=>'smartphone',
                ],
                'TM-5201'=>[
                    'name'=>'Rock',
                    'category'=>'smartphone',
                ],
                'TM-4515'=>[
                    'name'=>'X-Style',
                    'category'=>'smartphone',
                ],
                'TM-9767'=>[
                    'name'=>'X-pad Style 10 3G',
                ],
                'TM-(5016|3500)'=>[
                    'name'=>'X-Maxi 2',
                    'category'=>'smartphone',
                ],
                'TM-4071'=>[
                    'name'=>'X-Smart',
                    'category'=>'smartphone',
                ],
                'TM-4982'=>[
                    'name'=>'iX-Maxi',
                    'category'=>'smartphone',
                ],
                'TM-5010'=>[
                    'name'=>'X-Selfie',
                    'category'=>'smartphone',
                ],
                'TM-4082R'=>[
                    'name'=>'X-Driver Quad',
                    'category'=>'smartphone',
                ],
                'TM-5503'=>[
                    'name'=>'X-Mage',
                    'category'=>'smartphone',
                ],
                'TM-5508'=>[
                    'name'=>'X-Cosmo',
                    'category'=>'smartphone',
                ],
                'X-Force[\(-]?TM-5009\)?'=>[
                    'name'=>'X-Force',
                    'category'=>'smartphone',
                ],
                'X-Plus[\(-]?TM-5577\)?'=>[
                    'name'=>'X-Plus',
                    'category'=>'smartphone',
                ],
            ]
        ],
                

        // Telefunken
        'TEL-1013GIQA'   =>  [
            'name'=>'Telefunken',
            'category'=>'smartphone',
            'sub'=>[
                'TEL-1013GIQA'=>[
                    'name'=>'Giqa 10.1 3G',
                    'category'=>'tablet',
                ],
            ]
        ],
                
        // Telego
        'TELEGO'   =>  [
            'name'=>'Telego',
            'category'=>'smartphone',
            'sub'=>[
                'TELEGO-W503'=>[
                    'name'=>'W503',
                ],
            ]
        ],
                
        // Telenor
        'Telenor'   =>  [
            'name'=>'Telenor',
            'category'=>'smartphone',
            'sub'=>[
                'Telenor[ _]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Telenor[ _]([^a-z0-9_]+)\)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Telit
        'Telit'   =>  [
            'name'=>'Telit',
            'category'=>'feature phone',
            'sub'=>[
                'Telit_Mobile_Terminals-([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'Telit[\-_]?([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // ThL
        'ThL[ _-]'   =>  [
            'name'=>'ThL',
            'category'=>'smartphone',
            'sub'=>[
                'ThL[ _-]*([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'ThL[ _-]*([^ ;/)]+)[ ;/)]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Tianyu
        'TIANYU'   =>  [
            'name'=>'TIANYU',
            'category'=>'feature phone',
            'sub'=>[
                'TIANYU ([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'TIANYU-KTOUCH/([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Timovi
        'Tmovi|Infinit_Lite_2'   =>  [
            'name'=>'Timovi',
            'category'=>'smartphone',
            'sub'=>[
                'Tmovi[ _]Prime'=>[
                    'name'=>'Prime',
                ],
                'TMOVI_YEAH_BEAT'=>[
                    'name'=>'Yeah Beat',
                ],
                'YeahLIVE'=>[
                    'name'=>'Yeah LIVE',
                ],
                'Infinit Lite'=>[
                    'name'=>'Infinit Lite',
                ],
                'Infinit_Lite_2'=>[
                    'name'=>'Infinit Lite 2',
                ],
            ]
        ],
                
        // Tolino
        'Tolino Tab ([^/;]+) Build'   =>  [
            'name'=>'Tolino',
            'category'=>'tablet',
            'sub'=>[
                'Tolino Tab ([^/;]+) Build'=>[
                    'name'=>'Tolino Tab $1',
                ],
            ]
        ],

        // Top House
        'Coto[_ ]|X1013'   =>  [
            'name'=>'Top House',
            'category'=>'smartphone',
            'sub'=>[
                'Coto W418'=>[
                    'name'=>'Coto W418',
                ],
                'COTO_T117'=>[
                    'name'=>'Coto T117',
                    'category'=>'tablet',
                ],
                'X1013'=>[
                    'name'=>'X1013',
                    'category'=>'tablet',
                ],
                'COTO_T40017'=>[
                    'name'=>'T40017',
                ],
            ]
        ],

        // Toplux
        'Toplux ([a-z0-9]+)'   =>  [
            'name'=>'Toplux',
            'category'=>'feature phone',
            'sub'=>[
                'Toplux ([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Touchmate
        'TOUCHMATE|(TM-(?:MID1020A|MID710|MID798|MID792|MID788D|SM500N|SM410))'   =>  [
            'name'=>'Touchmate',
            'category'=>'smartphone',
            'sub'=>[
                '(TM-(?:MID1020A|MID710|MID798|MID792|MID788D))'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                '(TM-(?:SM500N|SM410))'=>[
                    'name'=> '$1',
                ],
                'Touchmate ([^/;]+) Build'=>[
                    'name'=> '$1',
                ],
            ]
        ],
                
        // TrekStor
        '(?:TrekStor|Surftab) ([^/;]+) Build|Surftab[^;\)]*(?:[;\)]|$)|ST10216-2A|VT10416-[12]'   =>  [
            'name'=>'TrekStor',
            'category'=>'tablet',
            'sub'=>[
                'ST10216-2A|VT10416-[12]'=>[
                    'name'=>'SurfTab 10.1',
                ],
                'TrekStor ([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                'Surftab ([^/;]+) Build'=>[
                    'name'=>'SurfTab $1',
                ],
                'Surftab[ _]([^;\)]*)(?:[;\)]|$)'=>[
                    'name'=>'SurfTab $1',
                ],
            ]
        ],

        // Trevi
        'Trevi[ _]|TAB[ _]10[ _]3G[ _]V16|TAB[ _](7|8)[ _]3G[ _]V8|TAB9 3G|MINITAB 3GV|Phablet[ _](?:4|4\.5|5|5\,3|6)[ _]?[CSQ]|REVERSE[ _]5\.5[ _]?Q'   =>  [
            'name'=>'Trevi',
            'category'=>'tablet',
            'sub'=>[
                'TAB[ _]?(7|8)[ _]3G[ _]V8'=>[
                    'name'=>'TAB $1 3G V8',
                ],
                'TAB[ _]?9[ _]3G[ _]V8'=>[
                    'name'=>'TAB 9 3G V8',
                ],
                'TAB[ _]?9[ _]3G'=>[
                    'name'=>'TAB 9 3G',
                ],
                'TAB[ _]10[ _]3G[ _]V16'=>[
                    'name'=>'TAB 10 3G V16',
                ],
                'MINITAB 3GV'=>[
                    'name'=>'MINITAB 3G V',
                ],
                '(?:Trevi_)?Phablet[ _]4[ _]?C'=>[
                    'name'=>'Phablet 4 C',
                    'category'=>'smartphone',
                ],
                '(?:Trevi_)?Phablet[ _]4[ _]?S'=>[
                    'name'=>'Phablet 4 S',
                    'category'=>'smartphone',
                ],
                '(?:Trevi_)?Phablet[ _]4.5[ _]?Q'=>[
                    'name'=>'Phablet 4.5Q',
                    'category'=>'smartphone',
                ],
                '(?:Trevi_)?PHABLET[ _]5[ _]?S'=>[
                    'name'=>'Phablet 5 S',
                    'category'=>'smartphone',
                ],
                '(?:Trevi_)?PHABLET[ _]5,3[ _]?Q'=>[
                    'name'=>'Phablet 5.3 Q',
                    'category'=>'phablet',
                ],
                '(?:Trevi_)?REVERSE[ _]5.5[ _]?Q'=>[
                    'name'=>'Phablet 5.5 Q REVERSE',
                    'category'=>'phablet',
                ],
                '(?:Trevi_)?PHABLET[ _]6[ _]?S'=>[
                    'name'=>'Phablet 6 S',
                    'category'=>'phablet',
                ],

                'Trevi[_]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        //TVC
        '(NuclearSX-SP5)'   =>  [
            'name'=>'TVC',
            'category'=>'smartphone',
            'sub'=>[
                '(NuclearSX-SP5)'=>[
                    'name'=>'Nuclear SX-SP5',
                ],
            ]
        ],

        // U.S. Cellular
        'USCC-'   =>  [
            'name'=>'U.S. Cellular',
            'category'=>'smartphone',
            'sub'=>[
                'USCC-E6762'=>[
                    'name'=>'Kyocera DuraForce',
                ],
                '(USCC-[a-z0-9_\-]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Uhappy
        'Uhappy|UP?580|UP350|UP[35679]20'   =>  [
            'name'=>'Uhappy',
            'category'=>'smartphone',
            'sub'=>[
                'UP([35679]20)'=>[
                    'name'=>'UP$1',
                ],
                'UP350'=>[
                    'name'=>'UP350',
                ],
                'UP580'=>[
                    'name'=>'UP580',
                ],
                'U580'=>[
                    'name'=>'U580',
                ],
                'Uhappy[ _-]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Uhappy[ _-]?([^;/)]+)[);/ ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Unimax
        'U(67[013]|680)C'   =>  [
            'name'=>'Unimax',
            'category'=>'smartphone',
            'sub'=>[
                'U(67[013]|680)C'=>[
                    'name'=>'U$1C',
                ],
            ]
        ],

        // Unowhy
        'QOOQ '   =>  [
            'name'=>'Unowhy',
            'category'=>'tablet',
            'sub'=>[
                'QOOQ '=>[
                    'name'=>'QOOQ',
                ],
            ]
        ],


        // UTStarcom
        'utstar[ _-]?([a-z0-9]+)'   =>  [
            'name'=>'UTStarcom',
            'category'=>'feature phone',
            'sub'=>[
                'utstar[ _-]?([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Ulefone
        'Ulefone|Power_[35]|(Armor(?:[ _]2)?|U00[78][ _]Pro|Be[ _]X|Be[ _]Touch(?:[ _][23])?|Be[ _](?:One|Pure)(?:[ _]Lite)?) Build'   =>  [
            'name'=>'Ulefone',
            'category'=>'smartphone',
            'sub'=>[
                'Be[ _]Touch([ _][23])?'=>[
                    'name'=>'Be Touch$1',
                ],
                'Be[ _]Pure[ _]Lite'=>[
                    'name'=>'Be Pure Lite',
                ],
                'Be[ _]Pure'=>[
                    'name'=>'Be Pure',
                ],
                'Be[ _]One[ _]Lite'=>[
                    'name'=>'Be One Lite',
                ],
                'Be[ _]One'=>[
                    'name'=>'Be One',
                ],
                'Be[ _]X'=>[
                    'name'=>'Be X',
                ],
                'U007 Pro'=>[
                    'name'=>'U007 Pro',
                ],
                'U008 Pro'=>[
                    'name'=>'U008 Pro',
                ],
                'Armor[ _]2 Build'=>[
                    'name'=>'Armor 2',
                ],
                'Armor Build'=>[
                    'name'=>'Armor',
                ],
                'Power_([35])'=>[
                    'name'=>'Power $1',
                ],
                'Ulefone[ _-]?([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Ulefone[ _-]?([^;/)]+)[;/)]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // UMIDIGI
        'UMI(?:DIGI)?[ _]'   =>  [
            'name'=>'UMIDIGI',
            'category'=>'smartphone',
            'sub'=>[
                'UMI(?:DIGI)?[ _]([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Uniscope
        'Uniscope'   =>  [
            'name'=>'Uniscope',
            'category'=>'smartphone',
            'sub'=>[
                'Uniscope[ _\-]?([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                'Uniscope[ _\-]?([^);/ ]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Unnecto
        'Unnecto|(?:U513|U5151|U61[1356]|U7[12]0|U-830|U90[35])[);/ ]'   =>  [
            'name'=>'Unnecto',
            'category'=>'smartphone',
            'sub'=>[
                'U513'=>[
                    'name'=>'Drone XT',
                ],
                'U5151'=>[
                    'name'=>'Bolt',
                ],
                'U611'=>[
                    'name'=>'Quattro X',
                ],
                'U613'=>[
                    'name'=>'Quattro S',
                ],
                'U615'=>[
                    'name'=>'Quattro M',
                ],
                'U616'=>[
                    'name'=>'U616',
                ],
                'U710'=>[
                    'name'=>'Quattro U710',
                ],
                'U720'=>[
                    'name'=>'Quattro Z',
                ],
                'U-830'=>[
                    'name'=>'Rush',
                ],
                'U903'=>[
                    'name'=>'Air',
                ],
                'U905'=>[
                    'name'=>'Air 5.5',
                ],
            ]
        ],

        // Unonu
        'Unonu[ _-]'   =>  [
            'name'=>'Unonu',
            'category'=>'smartphone',
            'sub'=>[
                'Unonu[ _-]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Unonu[ _-]?([^;/)]+)[);/ ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Vastking
        'M910A[);/ ]'   =>  [
            'name'=>'Vastking',
            'category'=>'tablet',
            'sub'=>[
                'M910A[);/ ]'=>[
                    'name'=>'M910A',
                ],
            ]
        ],
                
        // ViewSonic
        'ViewSonic|VSD[0-9]+[);/ ]|ViewPad|ViewPhone'   =>  [
            'name'=>'ViewSonic',
            'category'=>'smart display',
            'sub'=>[
                '(?:ViewSonic-)?V500[);/ ]'=>[
                    'name'=>'V500',
                    'category'=>'smartphone',
                ],
                '(?:ViewSonic-)?ViewPhone ?([^;/]+) Build'=>[
                    'name'=>'ViewPhone $1',
                    'category'=>'smartphone',
                ],
                '(?:ViewSonic-)?ViewPad ?([^;/]+) Build'=>[
                    'name'=>'ViewPad $1',
                    'category'=>'tablet',
                ],
                '(VSD[0-9]+)[);/ ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Vitelcom
        'Vitelcom|portalmmm/[12].0 TSM'   =>  [
            'name'=>'Vitelcom',
            'category'=>'feature phone',
            'sub'=>[
                'TSM-([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'TSM([a-z0-9\-]+)'=>[
                    'name'=>'$1',
                ],
                'portalmmm/[12].0 (TSM[a-z0-9 ]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // VK Mobile
        'VK(?!share)[\-]?([a-z0-9 ]+)[ ;\)/]'   =>  [
            'name'=>'VK Mobile',
            'category'=>'feature phone',
            'sub'=>[
                'VK(?!share)[\-]?([a-z0-9 ]+)[ ;\)/]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Vernee
        'Vernee|Mars Pro|Apollo (?:Lite|X)|Thor (?:E|Plus)'   =>  [
            'name'=>'Vernee',
            'category'=>'smartphone',
            'sub'=>[
                'Apollo Lite'=>[
                    'name'=>'Apollo Lite',
                ],
                'Apollo X'=>[
                    'name'=>'Apollo X',
                ],
                'Mars Pro'=>[
                    'name'=>'Mars Pro',
                ],
                'Thor E'=>[
                    'name'=>'Thor E',
                ],
                'Thor Plus'=>[
                    'name'=>'Thor Plus',
                ],
                'Vernee_M5'=>[
                    'name'=>'M5',
                ],
                'Vernee[ _-]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Vernee[ _-]([a-z0-9_-]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Vertu
        'Vertu[ ]?([a-z0-9]+)'   =>  [
            'name'=>'Vertu',
            'category'=>'feature phone',
            'sub'=>[
                'Vertu[ ]?([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Verykool
        'verykool'   =>  [
            'name'=>'Verykool',
            'category'=>'smartphone',
            'sub'=>[
                'verykool[ _]?([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Vestel
        'Venus[ _](V[1-9]|Z[1-9]0)|V_?TAB|VP74|VT97PRO|VSP145M|VSP250G|VSP355[GS]'   =>  [
            'name'=>'Vestel',
            'category'=>'smartphone',
            'sub'=>[
                'VT97PRO'=>[
                    'name'=>'VTab 9.7 Pro',
                    'category'=>'tablet',
                ],
                'VP74'=>[
                    'name'=>'VTab Lite II',
                    'category'=>'tablet',
                ],
                'VTAB10'=>[
                    'name'=>'VTab 10',
                    'category'=>'tablet',
                ],
                'V_TAB_7_ECO_III '=>[
                    'name'=>'VTab 7 Eco 3',
                    'category'=>'tablet',
                ],
                'V_TAB_([0-9]{4}[A-Z]?)'=>[
                    'name'=>'VTab $1',
                    'category'=>'tablet',
                ],
                'VSP145M'=>[
                    'name'=>'Venus 4.5',
                ],
                'VSP250G'=>[
                    'name'=>'Venus 5.0V',
                ],
                'VSP355G'=>[
                    'name'=>'Venus 5.5V',
                ],
                'VSP355S'=>[
                    'name'=>'Venus 5.5X',
                ],
                'Venus[ _]V([1-9])'=>[
                    'name'=>'Venus V$1',
                ],
                'Venus[ _]Z([1-9]0)'=>[
                    'name'=>'Venus Z$1',
                ],
            ]
        ],

        // Videocon
        'Videocon[_ \-]|VT75C'   =>  [
            'name'=>'Videocon',
            'category'=>'smartphone',
            'sub'=>[
                'Videocon[_ \-]([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'VT75C[/;) ]'=>[
                    'name'=>'VT75C',
                ],
            ]
        ],
                
        // Vodafone
        'Vodafone[ _-]|Smart ?Tab ?(?:III? ?)?(?:|4G|7|10)[);/ -]|VodafoneSmartChat|VFD[ _][0-9]+[;/) ]|VFD320|VF6[89]5|VF-795'   =>  [
            'name'=>'Vodafone',
            'category'=>'smartphone',
            'sub'=>[
                'VFD 100'=>[
                    'name'=>'Smart Mini',
                ],
                'VF685'=>[
                    'name'=>'Smart Kicka',
                ],
                'VF695'=>[
                    'name'=>'Smart First 6',
                ],
                'VFD 200'=>[
                    'name'=>'Smart First 7',
                ],
                'VFD 300'=>[
                    'name'=>'Smart Mini 7',
                ],
                'VFD 50[02]'=>[
                    'name'=>'Smart Turbo 7',
                ],
                'VFD 51[013]'=>[
                    'name'=>'Smart E8',
                ],
                'VFD 600'=>[
                    'name'=>'Smart Prime 7',
                ],
                'VFD320'=>[
                    'name'=>'Smart C9',
                ],
                'VFD 610'=>[
                    'name'=>'Smart N8',
                ],
                'VFD 700'=>[
                    'name'=>'Smart Ultra 7',
                ],
                'VFD 900'=>[
                    'name'=>'Smart Platinum 7',
                ],
                'Vodafone[ _]875[);/ ]'=>[
                    'name'=>'Smart Mini',
                ],
                'Vodafone[ _]975N?[);/ ]'=>[
                    'name'=>'Smart 3',
                ],
                'Vodafone[ _]785[);/ ]'=>[
                    'name'=>'Smart 4 Mini',
                ],
                'Vodafone[ _]890N[);/ ]'=>[
                    'name'=>'Smart 4 Turbo',
                ],
                'Vodafone[ _]985N[);/ ]'=>[
                    'name'=>'Smart 4 Power',
                ],
                'VodafoneSmartChat'=>[
                    'name'=>'Smart Chat',
                ],
                'VF-795'=>[
                    'name'=>'Smart Speed 6',
                ],

                // explicit table models
                'VFD 1100'=>[
                    'name'=>'Tab Mini 7',
                    'category'=>'tablet',
                ],
                'VFD 1300'=>[
                    'name'=>'Smart Tab N8',
                    'category'=>'tablet',
                ],
                'VFD 1400'=>[
                    'name'=>'Tab Prime 7',
                    'category'=>'tablet',
                ],
                'Smart ?Tab ?3G'=>[
                    'name'=>'Smart Tab 3G',
                    'category'=>'tablet',
                ],
                'Smart ?Tab ?4G'=>[
                    'name'=>'Smart Tab 4G',
                    'category'=>'tablet',
                ],
                'SmartTab7[);/ -]'=>[
                    'name'=>'Smart Tab 7',
                    'category'=>'tablet',
                ],
                'SmartTab10[);/ -]'=>[
                    'name'=>'Smart Tab 10',
                    'category'=>'tablet',
                ],
                'Smart ?Tab ?II ?7'=>[
                    'name'=>'Smart Tab II 7',
                    'category'=>'tablet',
                ],
                'Smart ?Tab ?II ?10'=>[
                    'name'=>'Smart Tab II 10',
                    'category'=>'tablet',
                ],
                'Smart ?Tab ?III ?7'=>[
                    'name'=>'Smart Tab III 7',
                    'category'=>'tablet',
                ],
                'Smart ?Tab ?III ?10'=>[
                    'name'=>'Smart Tab III 10',
                    'category'=>'tablet',
                ],

                'VFD[ _]([0-9]+)[;/) ]'=>[
                    'name'=>'VFD $1',
                ],
                'Vodafone[ _-]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Vodafone[ _-]([a-z0-9_-]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Vonino
        'Vonino|Zun[ _]X[OS]?|Xylo[ _][XSP]|Volt[ _][XS]|Gyga[ _](?:X|S|QS|XS)|Pluri[ _](?:[BCMQ]7|[CQ]8)|Magnet[ _]M[19]|Jax[ _](?:Q|QS|S|X|Mini)|Navo_QS|Xavy_T7'   =>  [
            'name'=>'Vonino',
            'category'=>'smartphone',
            'sub'=>[
                'Zun[ _]XO'=>[
                    'name'=>'Zun XO',
                ],
                'Zun[ _]XS'=>[
                    'name'=>'Zun XS',
                ],
                'Zun[ _]X'=>[
                    'name'=>'Zun X',
                ],
                'Xylo[ _](P|S|X)'=>[
                    'name'=>'Xylo $1',
                ],
                'Volt[ _]S_A7'=>[
                    'name'=>'Volt S A7',
                ],
                'Volt[ _]S'=>[
                    'name'=>'Volt S',
                ],
                'Volt[ _]X'=>[
                    'name'=>'Volt X',
                ],
                'Gyga[ _]QS'=>[
                    'name'=>'Gyga QS',
                ],
                'Gyga[ _]XS'=>[
                    'name'=>'Gyga XS',
                ],
                'Gyga[ _](S|X)'=>[
                    'name'=>'Gyga $1',
                ],
                'Jax[ _]QS'=>[
                    'name'=>'Jax QS',
                ],
                'Jax[ _]S_A7'=>[
                    'name'=>'Jax S A7',
                ],
                'Jax[ _](S|Q|X)'=>[
                    'name'=>'Jax $1',
                ],
                'Jax[ _]Mini'=>[
                    'name'=>'Jax Mini',
                ],
                'Pluri[ _](B|C|M|Q)7'=>[
                    'name'=>'Pluri $17',
                    'category'=>'tablet',
                ],
                'Pluri[ _](C|Q)8'=>[
                    'name'=>'Pluri $18',
                    'category'=>'tablet',
                ],
                'Magnet[ _]M([19])'=>[
                    'name'=>'Magnet M$1',
                    'category'=>'tablet',
                ],
                'Navo_QS'=>[
                    'name'=>'Navo QS',
                    'category'=>'tablet',
                ],
                'Xavy_T7'=>[
                    'name'=>'Xavy T7',
                    'category'=>'tablet',
                ],
            ]
        ],

        // Vorago
        'VORAGO'   =>  [
            'name'=>'Vorago',
            'category'=>'smartphone',
            'sub'=>[
                'CELL-500'=>[
                    'name'=>'CELL-500',
                ],
            ]
        ],
                
        // Voto
        'VOTO[ _\-]|VT8[89]8[;/) ]'   =>  [
            'name'=>'Voto',
            'category'=>'smartphone',
            'sub'=>[
                'VOTO[ _\-]?([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                'VOTO[ _\-]?([^);/ ]+)'=>[
                    'name'=>'$1',
                ],
                '(VT8[89]8)[;/) ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Voxtel
        'Voxtel_([a-z0-9]+)'   =>  [
            'name'=>'Voxtel',
            'category'=>'feature phone',
            'sub'=>[
                'Voxtel_([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Vulcan
        'VP5004A'   =>  [
            'name'=>'Vulcan',
            'category'=>'smartphone',
            'sub'=>[
                'VP5004A'=>[
                    'name'=>'VP5004A',
                ],
            ]
        ],

        // Walton
        'Walton|Walpad|Primo[ _](C[1234]?|D[12345]|E[12345]|EF[23]?|EM|F[1234567]i?|G[123457]|GF[234]?|GH[23]?|GM|H[2346]|HM|N|N1|NF|NX2?|R[1234]|RH2?|RM2?|RX[23]?|S[123456]|V1|X[1234]|Z|ZX)'   =>  [
            'name'=>'Walton',
            'category'=>'smartphone',
            'sub'=>[
                'Walpad ([^;/]+) Build'=>[
                    'name'=>'Primo Walpad $1',
                    'category'=>'tablet',
                ],
                'Primo S6 infinity'=>[
                    'name'=>'Primo S6 Infinity',
                ],
                'Walton[ _]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Walton[ _]([^;/]+)\)'=>[
                    'name'=>'$1',
                ],
                'Primo[ _]([^;/]+) Build'=>[
                    'name'=>'Primo $1',
                ],
                'Primo[ _]([0-9a-z]+)'=>[
                    'name'=>'Primo $1',
                ],
            ]
        ],

        // Wellcom
        'WELLCOM[ _\-/]([a-z0-9]+)'   =>  [
            'name'=>'WellcoM',
            'category'=>'smartphone',
            'sub'=>[
                'WELLCOM[ _\-/]([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Wexler
        'Wexler|TAB[ _]10Q[);/ ]|ZEN[ _](?:4\.5|4\.7|5)'   =>  [
            'name'=>'Wexler',
            'category'=>'tablet',
            'sub'=>[
                '(?:Wexler[ _\-\.])?ZEN[ _]4\.5[);/ ]'=>[
                    'name'=>'ZEN 4.5',
                    'category'=>'smartphone',
                ],
                '(?:Wexler[ _\-\.])?ZEN[ _]4\.7[);/ ]'=>[
                    'name'=>'ZEN 4.7',
                    'category'=>'smartphone',
                ],
                '(?:Wexler[ _\-\.])?ZEN[ _]5[);/ ]'=>[
                    'name'=>'ZEN 5',
                    'category'=>'smartphone',
                ],
                '(?:Wexler[ _\-\.])?TAB[ _]10Q[);/ ]'=>[
                    'name'=>'TAB 10Q',
                ],
                'Wexler[ _\-\.]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Wexler[ _\-\.]([^);/]+)[);/]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Wiko
        '(?:WIKO[_ -])|(?:WIKO-)?CINK_[a-z0-9_]+|(?:WIKO-)?HIGHWAY_[a-z0-9_]+|(?:WIKO-)?(?:Cink([^/;]*)|Highway([^/;]*)|Iggy|Stairway|Rainbow ?(Jam|Lite|Up)?|Darkside|Darkmoon|Darkfull|Darknight|Freddy|FEVER|Jerry[2]?|Sublim|Ozzy|JIMMY|Barry|Birdy|Bloom|Getaway|Goa|Kite|Robby|Lenny[2-9]?|Slide|Sunset[2-9]?|Sunny[2-9]?|Tommy[2-9]?|PULP(?: Fab)?|Wax|HARRY|WIM Lite|Ridge(?: Fab)?|U FEEL(?: Prime| Lite)?|U PULSE(?: LITE)?|View XL|View Prime)(?: Plus)?(?: 4G)?(?: Build|$)|W_(?:C800|K[346]00)|LENNY[234]|SUNSET2|JERRY|Tommy3|PULP FAB 4G|WC300'   =>  [
            'name'=>'Wiko',
            'category'=>'smartphone',
            'sub'=>[
                '(?:Wiko-)?Cink([^/;]*) Build'=>[
                    'name'=>'Cink$1',
                ],
                '(?:WIKO-)?CINK_([a-z0-9_]+)'=>[
                    'name'=>'Cink $1',
                ],
                '(?:Wiko-)?Highway([^/;]*) Build'=>[
                    'name'=>'Highway$1',
                ],
                '(?:WIKO-)?HIGHWAY_([a-z0-9_]+)'=>[
                    'name'=>'Highway $1',
                ],
                '(?:WIKO-)?Iggy'=>[
                    'name'=>'Iggy',
                ],
                '(?:WIKO-)?FEVER'=>[
                    'name'=>'Fever',
                ],
                '(?:WIKO-)?Stairway'=>[
                    'name'=>'Stairway',
                ],
                '(?:WIKO-)?Ridge Fab 4G'=>[
                    'name'=>'Ridge Fab 4G',
                ],
                '(?:WIKO-)?Ridge 4G'=>[
                    'name'=>'Ridge 4G',
                ],
                '(?:WIKO-)?Ridge'=>[
                    'name'=>'Ridge',
                ],
                '(?:WIKO-)?Rainbow ([^/;]+) Build'=>[
                    'name'=>'Rainbow $1',
                ],
                '(?:WIKO-)?Rainbow'=>[
                    'name'=>'Rainbow',
                ],
                '(?:WIKO-)?Darkside'=>[
                    'name'=>'Darkside',
                ],
                '(?:WIKO-)?Darkmoon'=>[
                    'name'=>'Darkmoon',
                ],
                '(?:WIKO-)?Darkfull'=>[
                    'name'=>'Darkfull',
                ],
                '(?:WIKO-)?Darknight'=>[
                    'name'=>'Darknight',
                ],
                '(?:WIKO-)?Sublim'=>[
                    'name'=>'Sublim',
                ],
                '(?:WIKO-)?Ozzy'=>[
                    'name'=>'Ozzy',
                ],
                '(?:WIKO-)?Barry'=>[
                    'name'=>'Barry',
                ],
                '(?:WIKO-)?Birdy'=>[
                    'name'=>'Birdy',
                ],
                '(?:WIKO-)?Bloom'=>[
                    'name'=>'Bloom',
                ],
                '(?:WIKO-)?JIMMY'=>[
                    'name'=>'Jimmy',
                ],
                'JERRY MAX'=>[
                    'name'=>'Jerry Max',
                ],
                'W_K300'=>[
                    'name'=>'Jerry 3',
                ],
                '(?:WIKO-)?Jerry2'=>[
                    'name'=>'Jerry 2',
                ],
                '(?:WIKO-)?Jerry'=>[
                    'name'=>'Jerry',
                ],
                '(?:WIKO-)?Getaway'=>[
                    'name'=>'Getaway',
                ],
                '(?:WIKO-)?Goa'=>[
                    'name'=>'Goa',
                ],
                '(?:WIKO-)?Freddy'=>[
                    'name'=>'Freddy',
                ],
                '(?:WIKO-)?Kite'=>[
                    'name'=>'Kite',
                ],
                'W_K400'=>[
                    'name'=>'Lenny 5',
                ],
                '(?:WIKO-)?Lenny[ -_]?3 Max'=>[
                    'name'=>'Lenny 3 Max',
                ],
                '(?:WIKO-)?Lenny[ -_]?4 Plus'=>[
                    'name'=>'Lenny 4 Plus',
                ],
                '(?:WIKO-)?Lenny[ -_]?([2-9])'=>[
                    'name'=>'Lenny $1',
                ],
                '(?:WIKO-)?Lenny'=>[
                    'name'=>'Lenny',
                ],
                '(?:WIKO-)?Slide'=>[
                    'name'=>'Slide',
                ],
                '(?:WIKO-)?Sunset2'=>[
                    'name'=>'Sunset 2',
                ],
                '(?:WIKO-)?Sunset'=>[
                    'name'=>'Sunset',
                ],
                '(?:WIKO-)?Sunny2 Plus'=>[
                    'name'=>'Sunny 2 Plus',
                ],
                '(?:WIKO-)?Sunny2'=>[
                    'name'=>'Sunny 2',
                ],
                '(?:WIKO-)?Sunny'=>[
                    'name'=>'Sunny',
                ],
                '(W_K600|Tommy3)'=>[
                    'name'=>'Tommy 3',
                ],
                '(?:WIKO-)?Tommy2 Plus'=>[
                    'name'=>'Tommy 2 Plus',
                ],
                '(?:WIKO-)?Tommy2'=>[
                    'name'=>'Tommy 2',
                ],
                '(?:WIKO-)?Tommy'=>[
                    'name'=>'Tommy',
                ],
                '(?:WIKO-)?Wax'=>[
                    'name'=>'Wax',
                ],
                '(?:WIKO-)?HARRY'=>[
                    'name'=>'Harry',
                ],
                '(?:WIKO-)?WIM Lite'=>[
                    'name'=>'WIM Lite',
                ],
                '(?:WIKO-)?Pulp Fab 4G'=>[
                    'name'=>'Pulp Fab 4G',
                ],
                '(?:WIKO-)?Pulp Fab'=>[
                    'name'=>'Pulp Fab',
                ],
                '(?:WIKO-)?Pulp 4G'=>[
                    'name'=>'Pulp 4G',
                ],
                '(?:WIKO-)?Pulp'=>[
                    'name'=>'Pulp',
                ],
                '(?:WIKO-)?Robby'=>[
                    'name'=>'Robby',
                ],
                '(?:WIKO-)?U PULSE LITE'=>[
                    'name'=>'U Pulse Lite',
                ],
                '(?:WIKO-)?U PULSE'=>[
                    'name'=>'U Pulse',
                ],
                '(?:WIKO-)?U FEEL LITE'=>[
                    'name'=>'U Feel Lite',
                ],
                '(?:WIKO-)?U FEEL PRIME'=>[
                    'name'=>'U Feel Prime',
                ],
                '(?:WIKO-)?U FEEL'=>[
                    'name'=>'U Feel',
                ],
                '(?:WIKO-)?View XL'=>[
                    'name'=>'View XL',
                ],
                '(?:WIKO-)?View Prime'=>[
                    'name'=>'View Prime',
                ],
                'WC300'=>[
                    'name'=>'View Lite',
                ],
                'W_C800'=>[
                    'name'=>'View 2',
                ],
                'Wiko ([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                'Wiko ([^/; ]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Wink
        'Wink_'   =>  [
            'name'=>'Wink',
            'category'=>'smartphone',
            'sub'=>[
                'Wink_City_(SE|S)'=>[
                    'name'=>'City $1',
                ],
            ]
        ],
                
        // Weimei
        'weplus_3'   =>  [
            'name'=>'Weimei',
            'category'=>'smartphone',
            'sub'=>[
                'weplus_3'=>[
                    'name'=>'WePlus 3',
                ],
            ]
        ],

        // Wileyfox
        '(?:Wileyfox [^/]+)|Swift([^/]+) Build'   =>  [
            'name'=>'Wileyfox',
            'category'=>'smartphone',
            'sub'=>[
                'Wileyfox ([^/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Swift ([^/]+) Build'=>[
                    'name'=>'Swift $1',
                ],
            ]
        ],

        // Wolder
        'miSmart|miTab|WIAM \//24'   =>  [
            'name'=>'Wolder',
            'category'=>'smartphone',
            'sub'=>[
                'WIAM \//24'=>[
                    'name'=>'Wiam //24',
                ],
                'miSmart[ \-_]?([^/]+) Build'=>[
                    'name'=>'miSmart $1',
                ],
                'miTab[ \-_]?([^/]+) Build'=>[
                    'name'=>'miTab $1',
                    'category'=>'tablet',
                ],
            ]
        ],

        // Wolfgang
        'AT[ _-]AS([0-9A-Z]+)[);/ ]'   =>  [
            'name'=>'Wolfgang',
            'category'=>'smartphone',
            'sub'=>[
                'AT[ _-]AS([0-9A-Z]+)[);/ ]'=>[
                    'name'=>'AT-AS$1',
                ],
            ]
        ],

        // Wonu
        'Wonu ([a-z0-9]+)'   =>  [
            'name'=>'Wonu',
            'category'=>'feature phone',
            'sub'=>[
                'Wonu ([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Woo
        'SP5026i-Scorpio'   =>  [
            'name'=>'Woo',
            'category'=>'smartphone',
            'sub'=>[
                'SP5026i-Scorpio'=>[
                    'name'=>'Scorpio',
                ],
            ]
        ],

        // Woxter
        'Woxter[ _]([^/;]+) Build'   =>  [
            'name'=>'Woxter',
            'category'=>'tablet',
            'sub'=>[
                'Woxter[ _]([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // X-View
        'ZEN_U5+'   =>  [
            'name'=>'X-View',
            'category'=>'smartphone',
            'sub'=>[
                'ZEN_U5+'=>[
                    'name'=>'ZEN U5+',
                ],
            ]
        ],

        // Xion
        'XI-CE(655|U[48])'   =>  [
            'name'=>'Xion',
            'category'=>'smartphone',
            'sub'=>[
                'XI-CE(655|U[48])'=>[
                    'name'=>'CE$1',
                ],
            ]
        ],

        // Xolo
        'Xolo|(?:Q600|Q700s?|Q800|Q1000s|Q1000[ _]Opus|Q1010i|Q2000|Omega[ _]5.[05])[);/ ]|BLACK-1XM'   =>  [
            'name'=>'Xolo',
            'category'=>'smartphone',
            'sub'=>[
                'BLACK-1XM'=>[
                    'name'=>'Black 1X',
                ],
                '(Q600|Q700s?|Q800|Q1000s|Q1000[ _]Opus|Q1010i|Q2000|Omega[ _]5.[05])[);/ ]'=>[
                    'name'=>'$1',
                ],
                'Xolo[ _]?([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Xolo[ _]?([a-z0-9_-]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Yarvik
        'Xenta[ \-]Tab|Luna TAB|TAB09-410|TAB10-410|TAB07-485|TAB0[78]-200|TAB08-201-3G|TAB9-200|TAB09-211|TAB10-2[01]1|TAB13-201'   =>  [
            'name'=>'Yarvik',
            'category'=>'tablet',
            'sub'=>[
                // explicit tablet models
                'Luna TAB07-920N'=>[
                    'name'=>'Luna 7',
                ],
                'Luna TAB07-10[01]'=>[
                    'name'=>'Luna 7c',
                ],
                'Luna TAB274'=>[
                    'name'=>'Luna 7c',
                ],
                'Luna TAB474'=>[
                    'name'=>'Luna 10',
                ],
                'Luna TAB10-150'=>[
                    'name'=>'Luna 10c',
                ],
                'TAB09-410'=>[
                    'name'=>'Noble 9.7',
                ],
                'TAB10-410'=>[
                    'name'=>'Noble 10.1',
                ],
                'TAB07-485'=>[
                    'name'=>'Noble Mini',
                ],
                'Xenta-TAB07-21[01]'=>[
                    'name'=>'Xenta 7c',
                ],
                'TAB07-200'=>[
                    'name'=>'Xenta 7ic',
                ],
                'TAB08-200'=>[
                    'name'=>'Xenta 8ic',
                ],
                'TAB08-201-3G'=>[
                    'name'=>'Xenta 8c',
                ],
                'TAB9-200'=>[
                    'name'=>'Xenta 9.7ic',
                ],
                'TAB09-211'=>[
                    'name'=>'Xenta 9.7ic+',
                ],
                'TAB10-2[01]1'=>[
                    'name'=>'Xenta 10ic',
                ],
                'TAB13-201'=>[
                    'name'=>'Xenta 13c',
                ],
            ]
        ],
                

        // Yes
        'M631Y'   =>  [
            'name'=>'Yes',
            'category'=>'smartphone',
            'sub'=>[
                'M631Y'=>[
                    'name'=>'Altitude',
                ],
            ]
        ],
                
        // Yezz
        'Yezz|ANDY[ _]|4E4|A5EI'   =>  [
            'name'=>'Yezz',
            'category'=>'smartphone',
            'sub'=>[
                'ANDY_35E2I'=>[
                    'name'=>'Andy 3.5E2I',
                ],
                'ANDY_35EI2'=>[
                    'name'=>'Andy 3.5EI2',
                ],
                'Andy 3.5EI'=>[
                    'name'=>'Andy 3.5EI',
                ],
                'ANDY_45EL'=>[
                    'name'=>'Andy 4.5EL',
                ],
                'Andy 4.7T'=>[
                    'name'=>'Andy 4.7T',
                ],
                'ANDY_4E2I'=>[
                    'name'=>'Andy 4E2I',
                ],
                '4E4'=>[
                    'name'=>'Andy 4E4',
                ],
                'ANDY_4EI2'=>[
                    'name'=>'Andy 4EI2',
                ],
                'Yezz-AC4EI'=>[
                    'name'=>'Andy 4EI',
                ],
                'ANDY_4EL2_LTE'=>[
                    'name'=>'Andy 4EL2 LTE',
                ],
                'Andy_55EI'=>[
                    'name'=>'Andy 55EI',
                ],
                'ANDY_5EI'=>[
                    'name'=>'Andy 5EI',
                ],
                'Andy 5EL2 LTE'=>[
                    'name'=>'Andy 5EL2 LTE',
                ],
                'Andy_5ML_LTE'=>[
                    'name'=>'Andy 5ML LTE',
                ],
                'Andy_5T'=>[
                    'name'=>'Andy 5T',
                ],
                'A3.5EP'=>[
                    'name'=>'Andy A3.5EP',
                ],
                'A5EI'=>[
                    'name'=>'Andy A5EI',
                ],
                'ANDY_C5QL'=>[
                    'name'=>'Andy C5QL',
                ],
            ]
        ],

        // Yu
        'YU5010A|AO5510'   =>  [
            'name'=>'Yu',
            'category'=>'smartphone',
            'sub'=>[
                'YU5010A'=>[
                    'name'=>'Yuphoria',
                ],
                'AO5510'=>[
                    'name'=>'Yureka',
                ],
            ]
        ],
                
        // Yuandao
        'N101[ _]DUAL(?:[ _]CORE)?(?:[ _]?2|\|\|)?(?:[ _]V11)?[);/ ]'   =>  [
            'name'=>'Yuandao',
            'category'=>'tablet',
            'sub'=>[
                'N101[ _]DUAL(?:[ _]CORE)?(?:[ _]?2|\|\|)?(?:[ _]V11)?[);/ ]'=>[
                    'name'=>'N101',
                ],
            ]
        ],

        // Yusun
        'Yusun|LA2-T'   =>  [
            'name'=>'Yusun',
            'category'=>'smartphone',
            'sub'=>[
                // explicit smartphone models
                'LA2-T'=>[
                    'name'=>'LA2-T',
                ],

                'Yusun ([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Yusun ([a-z0-9_\-\+]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Ytone
        'YTONE[ _\-]'   =>  [
            'name'=>'Ytone',
            'category'=>'smartphone',
            'sub'=>[
                'YTONE[ _\-]?([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                'YTONE[ _\-]?([^);/ ]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Zonda
        '(ZM(?:CK|EM|TFTV|TN)[a-z0-9]+)|ZA409'   =>  [
            'name'=>'Zonda',
            'category'=>'feature phone',
            'sub'=>[
                'ZA409'=>[
                    'name'=>'Muzic',
                    'category'=>'smartphone',
                ],
                '(ZM(?:CK|EM|TFTV|TN)[a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Toshiba
        'Toshiba|TSBNetTV/|portalmmm/[12].0 TS|T-01C|T-0[12]D|IS04|IS11T|AT1S0|AT300SE|AT(10-A|10[PL]E-A|100|200|270|300|330|374|400|470|500|503|570|703|830)'   =>  [
            'name'=>'Toshiba',
            'category'=>'smartphone',
            'sub'=>[
                // explicit smartphone models
                'T-01C'=>[
                    'name'=>'Regza T-01C',
                ],
                'T-01D'=>[
                    'name'=>'Regza T-01D',
                ],
                'T-02D'=>[
                    'name'=>'Regza T-02D',
                ],
                'IS04'=>[
                    'name'=>'Regza IS04',
                ],
                'IS11T'=>[
                    'name'=>'Regza IS11T',
                ],

                // explicit tablet models
                'AT1S0'=>[
                    'name'=>'Regza AT1S0',
                    'category'=>'tablet',
                ],
                'AT300SE'=>[
                    'name'=>'Regza AT300SE',
                    'category'=>'tablet',
                ],
                'AT500a'=>[
                    'name'=>'Regza AT500a',
                    'category'=>'tablet',
                ],
                'AT(100|200|270|300|330|374|400|470|500|503|570|703|830)'=>[
                    'name'=>'Regza AT$1',
                    'category'=>'tablet',
                ],
                'AT10([PL])E-A'=>[
                    'name'=>'Excite AT10$1-A',
                    'category'=>'tablet',
                ],
                'AT10-A'=>[
                    'name'=>'Excite AT10-A',
                    'category'=>'tablet',
                ],

                'TSBNetTV/'=>[
                    'name'=>'',
                    'category'=>'tv',
                ],
                'Toshiba[ /_\-]?([a-z0-9_ \-]+) Build'=>[
                    'name'=>'$1',
                ],
                'Toshiba[ /_\-]?([a-z0-9_\-]+)'=>[
                    'name'=>'$1',
                ],
                'portalmmm/[12].0 (TS[a-z0-9 ]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Fly
        'Fly(?!Flow|touch)|FS50[1-9]|FS511|FS551|FS40[1-7]|FS452|FS451|FS454|4FS06|MERIDIAN-|(?:IQ[0-9]{3,})[ _]?(?:Quad|Firebird|Quattro|Turbo|Magic)?(?: Build|[;/\)])'   =>  [
            'name'=>'Fly',
            'category'=>'smartphone',
            'sub'=>[
                '(?:Fly_)?IQ310(?: Build|[;/\)])'=>[
                    'name'=>'Panorama',
                    'category'=>'tablet',
                ],

                '(?:Fly_)?IQ236(?: Build|[;/\)])'=>[
                    'name'=>'Victory',
                ],
                'FS506'=>[
                    'name'=>'Cirrus 3',
                ],
                'FS403'=>[
                    'name'=>'Cumulus 1',
                ],
                'FS508'=>[
                    'name'=>'Cirrus 6',
                ],
                'FS511'=>[
                    'name'=>'Cirrus 7',
                ],
                'FS509'=>[
                    'name'=>'Nimbus 9',
                ],
                'FS406'=>[
                    'name'=>'Stratus 5',
                ],
                'FS404'=>[
                    'name'=>'Stratus 3',
                ],
                'FS504'=>[
                    'name'=>'Cirrus 2',
                ],
                'FS407'=>[
                    'name'=>'Stratus 6',
                ],
                'FS401'=>[
                    'name'=>'Stratus 1',
                ],
                'FS402'=>[
                    'name'=>'Stratus 2',
                ],
                'FS501'=>[
                    'name'=>'Nimbus 3',
                ],
                'FS502'=>[
                    'name'=>'Cirrus 1',
                ],
                'FS505'=>[
                    'name'=>'Nimbus 7',
                ],
                'FS551'=>[
                    'name'=>'Nimbus 4',
                ],
                'FS454'=>[
                    'name'=>'Nimbus 8',
                ],
                'FS452'=>[
                    'name'=>'Nimbus 2',
                ],
                'FS451'=>[
                    'name'=>'Nimbus 1',
                ],
                'FS405'=>[
                    'name'=>'Stratus 4',
                ],
                '(?:Fly_)?IQ237(?: Build|[;/\)])'=>[
                    'name'=>'Dynamic',
                ],
                '(?:Fly_)?IQ238(?: Build|[;/\)])'=>[
                    'name'=>'Jazz',
                ],
                '(?:Fly_)?IQ240(?: Build|[;/\)])'=>[
                    'name'=>'Whizz',
                ],
                '(?:Fly_)?IQ255(?: Build|[;/\)])'=>[
                    'name'=>'Pride',
                ],
                '(?:Fly_)?IQ270(?: Firebird)?(?: Build|[;/\)])'=>[
                    'name'=>'Firebird',
                ],
                '(?:Fly_)?IQ275(?: Build|[;/\)])'=>[
                    'name'=>'Marathon',
                ],
                '(?:Fly_)?IQ285(?: Turbo)?(?: Build|[;/\)])'=>[
                    'name'=>'Turbo',
                ],
                '(?:Fly_)?IQ430(?: Build|[;/\)])'=>[
                    'name'=>'Evoke',
                ],
                '(?:Fly_)?IQ431(?: Build|[;/\)])'=>[
                    'name'=>'Glory',
                ],
                '(?:Fly_)?IQ432(?: Build|[;/\)])'=>[
                    'name'=>'Era Nano 1',
                ],
                '(?:Fly_)?IQ434(?: Build|[;/\)])'=>[
                    'name'=>'Era Nano 5',
                ],
                '(?:Fly_)?IQ436(?: Build|[;/\)])'=>[
                    'name'=>'Era Nano 3',
                ],
                '(?:Fly_)?IQ440(?: Build|[;/\)])'=>[
                    'name'=>'Energy',
                ],
                '(?:Fly_)?IQ441(?: Build|[;/\)])'=>[
                    'name'=>'Radiance',
                ],
                '(?:Fly_)?IQ442(?: Build|[;/\)])'=>[
                    'name'=>'Miracle',
                ],
                '(?:Fly_)?IQ442 Quad(?: Build|[;/\)])'=>[
                    'name'=>'Miracle 2',
                ],
                '(?:Fly_)?IQ443(?: Build|[;/\)])'=>[
                    'name'=>'Trend',
                ],
                '(?:Fly_)?IQ444(?: Quattro)?(?: Build|[;/\)])'=>[
                    'name'=>'Diamond 2',
                ],
                '(?:Fly_)?IQ445(?: Build|[;/\)])'=>[
                    'name'=>'Genius',
                ],
                '(?:Fly_)?IQ446(?: Magic)?(?: Build|[;/\)])'=>[
                    'name'=>'Magic',
                ],
                '(?:Fly_)?IQ447(?: Build|[;/\)])'=>[
                    'name'=>'Era Life 1',
                ],
                '(?:Fly_)?IQ448(?: Build|[;/\)])'=>[
                    'name'=>'Chic',
                ],
                '(?:Fly_)?IQ449(?: Build|[;/\)])'=>[
                    'name'=>'Pronto',
                ],
                '(?:Fly_)?IQ450(?: Build|[;/\)])'=>[
                    'name'=>'Horizon',
                ],
                '(?:Fly_)?IQ450[ _]Quattro(?: Build|[;/\)])'=>[
                    'name'=>'Horizon 2',
                ],
                '(?:Fly_)?IQ451(?: Build|[;/\)])'=>[
                    'name'=>'Vista',
                ],
                '(?:Fly_)?IQ452 Quad(?: Build|[;/\)])'=>[
                    'name'=>'Ego Vision 1',
                ],
                '(?:Fly_)?IQ454(?: Build|[;/\)])'=>[
                    'name'=>'Evo Tech 1',
                ],
                '(?:Fly_)?IQ456(?: Build|[;/\)])'=>[
                    'name'=>'Era Life 2',
                ],
                '(?:Fly_)?IQ4403(?: Build|[;/\)])'=>[
                    'name'=>'Energy 3',
                ],
                '(?:Fly_)?IQ4404(?: Build|[;/\)])'=>[
                    'name'=>'Spark',
                ],
                '(?:Fly_)?IQ4406(?: Build|[;/\)])'=>[
                    'name'=>'Era Nano 6',
                ],
                '(?:Fly_)?IQ4410 Quad(?: Build|[;/\)])'=>[
                    'name'=>'Phoenix',
                ],
                '(?:Fly_)?IQ4411(?: Build|[;/\)])'=>[
                    'name'=>'Energy 2',
                ],
                '(?:Fly_)?IQ4412 Quad(?: Build|[;/\)])'=>[
                    'name'=>'Coral',
                ],
                '(?:Fly_)?IQ4413[ _]Quad(?: Build|[;/\)])'=>[
                    'name'=>'Evo Chic 3',
                ],
                '(?:Fly_)?IQ4414 Quad(?: Build|[;/\)])'=>[
                    'name'=>'Evo Tech 3',
                ],
                '(?:Fly_)?IQ4415 Quad(?: Build|[;/\)])'=>[
                    'name'=>'Era Style 3',
                ],
                '(?:Fly_)?IQ4490(?: Build|[;/\)])'=>[
                    'name'=>'Era Nano 4',
                ],
                '(?:Fly_)?IQ4504 Quad(?: Build|[;/\)])'=>[
                    'name'=>'Evo Energy 5',
                ],
                '(?:Fly_)?IQ([0-9]+) ?(?:Quad|Firebird|Quattro)? Build'=>[
                    'name'=>'IQ$1',
                ],
                'Fly[ _\-]?([a-z0-9_]+)/'=>[
                    'name'=>'$1',
                    'category'=>'feature phone',
                ],
                'Flylife[ _\-]?([^/;]+) Build'=>[
                    'name'=>'Flylife $1',
                    'category'=>'tablet',
                ],
                'Fly[ _\-]?([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
                'MERIDIAN-([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Freetel
        '(FTJ152[ABCD]|FT141B|FT142D_LTEXM|FT142A?|FTJ161B|FTJ152E|FTJ162D) Build'   =>  [
            'name'=>'Freetel',
            'category'=>'smartphone',
            'sub'=>[
                'FTJ152C'=>[
                    'name'=>'Samurai Miyabi',
                ],
                'FT141B'=>[
                    'name'=>'Nico',
                ],
                'FT142D_LTEXM'=>[
                    'name'=>'XM',
                ],
                'FT142A?'=>[
                    'name'=>'Priori 2',
                ],
                'FTJ152A'=>[
                    'name'=>'Priori 3',
                ],
                'FTJ162D'=>[
                    'name'=>'Priori 4',
                ],
                'FTJ152B'=>[
                    'name'=>'Priori 3S LTE',
                ],
                'FTJ152D'=>[
                    'name'=>'Samurai Kiwami',
                ],
                'FTJ161B'=>[
                    'name'=>'Samurai Rei',
                ],
                'FTJ152E'=>[
                    'name'=>'Katana 1',
                ],
            ]
        ],
                
        // Zeemi
        'ZEEMI[ _-]'   =>  [
            'name'=>'Zeemi',
            'category'=>'smartphone',
            'sub'=>[
                'ZEEMI[ _-]([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
                'ZEEMI[ _-]([^/;)]+)[/;)]'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Zenek
        'Z5007|Z551[679]|Z6001'   =>  [
            'name'=>'Zenek',
            'category'=>'smartphone',
            'sub'=>[
                'Z5517'=>[
                    'name'=>'Leopardo',
                ],
                'Z6001'=>[
                    'name'=>'Libelula',
                ],
                'Z5007'=>[
                    'name'=>'Oso',
                ],
                'Z5519'=>[
                    'name'=>'Pingûino',
                ],
                'Z5516'=>[
                    'name'=>'Zebra',
                ],
            ]
        ],
                
        // Zopo
        '(?:ZOPO[_ ])?(ZP[0-9]{2,}[^/;]+) Build'   =>  [
            'name'=>'Zopo',
            'category'=>'smartphone',
            'sub'=>[
                '(?:ZOPO[_ ])?(ZP[0-9]{2,}[^/;]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // ZTE
        'ZTE|AxonPhone|([a-z0-9]+)_USA_Cricket|(?:Blade (?:L110|L[2357]|L7A|S6|V[6789]|V8Q|V8 SE|V9 VITA|X7|A(310|460|465|475|520|530|602)|V580)|N9[15]8St|NX(?:403A|406E|40[X2]|507J|503A|505J|506J|508J|510J|511J|513J|521J|523J_V1|529J|531J|541J|549J|551J|563J|569[HJ]|573J|575J|591J|595J|597J|601J|907J)|N951[0579]|N9180|N9101|N913[67]|N952[01]|N9560|N9810|N799D|[UV]9180|[UV]9815|Z(?:233V|331|667T|768G|792|81[25]|82[08]|83[12359]|85[125]|851M|(557|717|798|836|861|916)BL|986DL|(232|718|828)TL|(233|353|558|717|799|837|862|899|917|963)VL|955A|95[678]|965|97[018]|98[1237]|986U|999)|Apex2|G (LTE|Lux)|Vec)[);/ ]|KIS II Max|Kis 3'   =>  [
            'name'=>'ZTE',
            'category'=>'smartphone',
            'sub'=>[
                // explicit smartphone models
                'N799D[);/ ]'=>[
                    'name'=>'MTS Blaze 4',
                ],
                'N918St[);/ ]'=>[
                    'name'=>'V5S',
                ],
                'N958St[);/ ]'=>[
                    'name'=>'V5 Max',
                ],
                'N9101[);/ ]'=>[
                    'name'=>'Imperial',
                ],
                'N9136[);/ ]'=>[
                    'name'=>'Prestige 2',
                ],
                'N9137[);/ ]'=>[
                    'name'=>'Tempo X',
                ],
                'N9180[);/ ]'=>[
                    'name'=>'V5',
                ],
                'N9510[);/ ]'=>[
                    'name'=>'Wrap 4G',
                ],
                'N9517[);/ ]'=>[
                    'name'=>'Blade Force',
                ],
                'N9515[);/ ]'=>[
                    'name'=>'Wrap Sync',
                ],
                'N9519[);/ ]'=>[
                    'name'=>'Warp 7',
                ],
                'N9520[);/ ]'=>[
                    'name'=>'Boost Max',
                ],
                'N9521[);/ ]'=>[
                    'name'=>'Boost Max+',
                ],
                'N9560[);/ ]'=>[
                    'name'=>'Max XL',
                ],
                'N9810[);/ ]'=>[
                    'name'=>'Vital',
                ],
                'NX40[X2][);/ ]'=>[
                    'name'=>'Nubia Z5 mini',
                ],
                'NX403A[);/ ]'=>[
                    'name'=>'Nubia Z5S mini',
                ],
                'NX503A[);/ ]'=>[
                    'name'=>'Nubia Z5S',
                ],
                'NX506J[);/ ]'=>[
                    'name'=>'Nubia Z7',
                ],
                'NX507J[);/ ]'=>[
                    'name'=>'Nubia Z7 mini',
                ],
                'NX505J[);/ ]'=>[
                    'name'=>'Nubia Z7 max',
                ],
                'NX508J[);/ ]'=>[
                    'name'=>'Nubia Z9',
                ],
                'NX5[12]1J[);/ ]'=>[
                    'name'=>'Nubia Z9 mini',
                ],
                'NX510J[);/ ]'=>[
                    'name'=>'Nubia Z9 max',
                ],
                'NX531J[);/ ]'=>[
                    'name'=>'Nubia Z11',
                ],
                'NX523J_V1'=>[
                    'name'=>'Nubia Z11 Max',
                ],
                'NX529J[);/ ]'=>[
                    'name'=>'Nubia Z11 mini',
                ],
                'NX549J[);/ ]'=>[
                    'name'=>'Nubia Z11 mini S',
                ],
                'NX551J[);/ ]'=>[
                    'name'=>'Nubia M2',
                ],
                '(?:NX569H|NX563J)[);/ ]'=>[
                    'name'=>'Nubia Z17',
                ],
                'NX595J'=>[
                    'name'=>'Nubia Z17S',
                ],
                'NX513J[);/ ]'=>[
                    'name'=>'Nubia My Prague',
                ],
                'NX591J[);/ ]'=>[
                    'name'=>'Nubia Z17 Lite',
                ],
                'NX569J'=>[
                    'name'=>'Nubia Z17 mini',
                ],
                'NX601J[);/ ]'=>[
                    'name'=>'Nubia X6',
                ],
                'NX573J'=>[
                    'name'=>'Nubia M2 Lite',
                ],
                'NX907J[);/ ]'=>[
                    'name'=>'Nubia M2 Play',
                ],
                'NX541J'=>[
                    'name'=>'Nubia N1',
                ],
                'NX597J'=>[
                    'name'=>'Nubia N1 Lite',
                ],
                'NX575J'=>[
                    'name'=>'Nubia N2',
                ],
                '[UV]9180[);/ ]'=>[
                    'name'=>'V5 Red Bull',
                ],
                '[UV]9815[);/ ]'=>[
                    'name'=>'Grand Memo',
                ],
                'Z987'=>[
                    'name'=>'Grand X Max+',
                ],
                'Z331[);/ ]'=>[
                    'name'=>'Z331',
                ],
                'Blade (A(310|460|465|475|520|530|602)|L110|V580)[);/ ]'=>[
                    'name'=>'Blade $1',
                ],
                'Blade L2 Plus[);/ ]'=>[
                    'name'=>'Blade L2 Plus',
                ],
                'Blade L2[);/ ]'=>[
                    'name'=>'Blade L2',
                ],
                'Blade L3 Plus[);/ ]'=>[
                    'name'=>'Blade L3 Plus',
                ],
                'Blade L3[);/ ]'=>[
                    'name'=>'Blade L3',
                ],
                'Blade L5[);/ ]'=>[
                    'name'=>'Blade L5',
                ],
                'Blade S6[);/ ]'=>[
                    'name'=>'Blade S6',
                ],
                'Blade V6 MAX[);/ ]'=>[
                    'name'=>'Blade V6 Max',
                ],
                'Blade V6 Plus[);/ ]'=>[
                    'name'=>'Blade V6 Plus',
                ],
                'Blade V6[);/ ]'=>[
                    'name'=>'Blade V6',
                ],
                'Blade L7A[);/ ]'=>[
                    'name'=>'Blade L7A',
                ],
                'Blade L7[);/ ]'=>[
                    'name'=>'Blade L7',
                ],
                'Blade V7[);/ ]'=>[
                    'name'=>'Blade V7',
                ],
                'Blade X7[);/ ]'=>[
                    'name'=>'Blade X7',
                ],
                'Blade V8Q[);/ ]'=>[
                    'name'=>'Blade V8Q',
                ],
                'Blade V8 SE[);/ ]'=>[
                    'name'=>'Blade V8 SE',
                ],
                'Blade V9 Vita[);/ ]'=>[
                    'name'=>'Blade V9 Vita',
                ],
                'Blade V9[);/ ]'=>[
                    'name'=>'Blade V9',
                ],
                '(Apex2|G (LTE|Lux)|Vec)'=>[
                    'name'=>'Blade $1',
                ],
                'Z768G[);/ ]'=>[
                    'name'=>'Midnight',
                ],
                'Z820'=>[
                    'name'=>'Obsidian',
                ],
                'Z986U'=>[
                    'name'=>'Blade Max 3',
                ],
                'Z971'=>[
                    'name'=>'Blade Spark',
                ],
                'Z978'=>[
                    'name'=>'Blade V8 Pro',
                ],
                'Z839'=>[
                    'name'=>'Blade Vantage',
                ],
                'Z965'=>[
                    'name'=>'Blade X',
                ],
                'Z981'=>[
                    'name'=>'Blade Z Max Pro',
                ],
                'Z982'=>[
                    'name'=>'Blade Z Max',
                ],
                'Z983'=>[
                    'name'=>'Blade X Max',
                ],
                'Z717[BV]L[);/ ]'=>[
                    'name'=>'Citrine LTE',
                ],
                'Z233V'=>[
                    'name'=>'Cymbal LTE',
                ],
                'Z233VL'=>[
                    'name'=>'Cymbal-C LTE',
                ],
                'Z232TL'=>[
                    'name'=>'Cymbal-G LTE',
                ],
                'Z353VL'=>[
                    'name'=>'Cymbal-T LTE',
                ],
                'Z95[67]'=>[
                    'name'=>'Grand X 4',
                ],
                'Z718TL'=>[
                    'name'=>'Jasper LTE',
                ],
                'KIS II Max'=>[
                    'name'=>'Kis II Max',
                ],
                'Kis 3'=>[
                    'name'=>'Kis 3',
                ],
                '(?:Z798BL|Z799VL)[);/ ]'=>[
                    'name'=>'Majesty Pro LTE',
                ],
                'Z899VL'=>[
                    'name'=>'Majesty Pro Plus LTE',
                ],
                'Z828TL'=>[
                    'name'=>'Midnight Pro LTE',
                ],
                'NX406E[);/ ]'=>[
                    'name'=>'Nubia Z5S',
                ],
                'Z792'=>[
                    'name'=>'Fanfare',
                ],
                'Z812'=>[
                    'name'=>'Maven',
                ],
                'Z815'=>[
                    'name'=>'Fanfare 2',
                ],
                'Z831'=>[
                    'name'=>'Maven 2',
                ],
                'Z832'=>[
                    'name'=>'Sonata 3',
                ],
                'Z835'=>[
                    'name'=>'Maven 3',
                ],
                'Z851[);/ ]'=>[
                    'name'=>'Prelude+',
                ],
                'Z851M'=>[
                    'name'=>'Overture 3',
                ],
                'Z852'=>[
                    'name'=>'Fanfare 3',
                ],
                'Z828'=>[
                    'name'=>'Avid Plus',
                ],
                'Z855'=>[
                    'name'=>'Avid 4',
                ],
                'Z833'=>[
                    'name'=>'Avid TRIO',
                ],
                '(?:Z836BL|Z837VL)[);/ ]'=>[
                    'name'=>'ZFive 2 LTE',
                ],
                'Z558VL'=>[
                    'name'=>'ZFive C LTE',
                ],
                'Z557BL'=>[
                    'name'=>'ZFive G LTE',
                ],
                '(?:Z861BL|Z862VL)[);/ ]'=>[
                    'name'=>'ZFive L LTE',
                ],
                'Z916BL'=>[
                    'name'=>'ZMax Grand LTE',
                ],
                'Z917VL'=>[
                    'name'=>'ZMax Champ LTE',
                ],
                '(?:Z958|Z955A)[);/ ]'=>[
                    'name'=>'ZMax 2',
                ],
                'Z963VL'=>[
                    'name'=>'Max Duo LTE',
                ],
                'Z970'=>[
                    'name'=>'ZMax Z970',
                ],
                'Z986DL'=>[
                    'name'=>'MAX Blue LTE',
                ],
                'Z999'=>[
                    'name'=>'Axon M',
                ],
                'A2017U'=>[
                    'name'=>'Axon 7',
                ],
                'B2017G'=>[
                    'name'=>'Axon 7 Mini',
                ],
                'Z667T'=>[
                    'name'=>'Zinger',
                ],
                      
                'AxonPhone ([^;/]+) Build'=>[
                    'name'=>'AxonPhone $1',
                ],
                '([a-z0-9]+)_USA_Cricket'=>[
                    'name'=>'$1',
                ],
                'ZTE[\- ](V98|V96A|V81|V70)[);/ ]'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
                'ZTE[\- ]([a-z0-9\-_ ]+) Build'=>[
                    'name'=>'$1',
                ],
                'ZTE-(?:G |G-)?([a-z0-9 _]+)'=>[
                    'name'=>'$1',
                ],
                'ZTE[ _]([a-z0-9]+)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                

        // Zen
        'Zuum[ _-]|COVET|MAGNO|ONIX S|STEDI|STELLAR Z'   =>  [
            'name'=>'Zuum',
            'category'=>'smartphone',
            'sub'=>[
                'COVET'=>[
                    'name'=>'Covet',
                ],
                'MAGNO'=>[
                    'name'=>'Magno',
                ],
                'ONIX S'=>[
                    'name'=>'Onix S',
                ],
                'STEDI'=>[
                    'name'=>'Stedi',
                ],
                'STELLAR Z'=>[
                    'name'=>'Stellar Z',
                ],
                'Zuum[ _-]([^;/]+) Build'=>[
                    'name'=>'$1',
                ],
                'Zuum[ _-]?([^;/)]+)[);/ ]'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // Zen
        '(Admire[_ ][^/;]+|Cinemax[^/;)]+)(?:Build|\))'   =>  [
            'name'=>'Zen',
            'category'=>'smartphone',
            'sub'=>[
                '(Admire[_ ][^/;]+|Cinemax[^/;)]+)(?:Build|\))'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Zync
        'ZYNC|(Cloud Z5|Z1000|Z18|Z99 Dual Core|Z99[_ ][23]G|Z99|Z900[_ ]Plus|Z909|Z930[+]|Z930)'   =>  [
            'name'=>'Zync',
            'category'=>'tablet',
            'sub'=>[
                '(Z18|Z99 Dual Core|Z99[_ ][23]G|Z99|Z900[_ ]Plus|Z909|Z930[+]|Z930)'=>[
                    'name'=>'$1',
                ],
                '(Z1000[^/;]+)Build'=>[
                    'name'=>'$1',
                ],
                'Cloud (Z5)'=>[
                    'name'=>'Cloud $1',
                ],
                'ZYNC Cloud[ _]([^;]+)Build'=>[
                    'name'=>'Cloud $1',
                ],
                'ZYNC[ _]([^;]+)Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Lemhoov
        'Lemhoov'   =>  [
            'name'=>'Lemhoov',
            'category'=>'smartphone',
            'sub'=>[
                'Lemhoov[ _-]([^/;]+) Build'=>[
                    'name'=>'$1',
                ],
            ]
        ],
                
        // MTC
        'MTC[ _](978|982[OT]|982)|SMART[ _]Race[ _]4G'   =>  [
            'name'=>'MTC',
            'category'=>'smartphone',
            'sub'=>[
                'MTC[ _](978|982[OT]|982)'=>[
                    'name'=>'$1',
                ],
                'SMART[ _]Race[ _]4G'=>[
                    'name'=>'Smart Race 4G',
                ],
            ]
        ],
                
        // MegaFon
        'MFLoginPh'   =>  [
            'name'=>'MegaFon',
            'category'=>'smartphone',
            'sub'=>[
                'MFLoginPh'=>[
                    'name'=>'Login+',
                ],
            ]
        ],

        // Inoi
        'INOI'   =>  [
            'name'=>'Inoi',
            'category'=>'smartphone',
            'sub'=>[
                'INOI_([^;/]+)(?:Build|\))'=>[
                    'name'=>'$1',
                ],
            ]
        ],

        // Vertex
        'Lion_Dual|V709X|Baccara|Eagle[ _]4G|Impress[ _]([^;/]+)(?:Build|\))'   =>  [
            'name'=>'Vertex',
            'category'=>'smartphone',
            'sub'=>[
                '(Lion_Dual|Baccara|Eagle[ _]4G)'=>[
                    'name'=>'$1',
                ],
                '(Impress[ _]([^;/]+))(?:Build|\))'=>[
                    'name'=>'$1',
                ],
                '(V709X)'=>[
                    'name'=>'$1',
                    'category'=>'tablet',
                ],
            ]
        ],

        // Devices with undectable brand, but detectable model
        'WebTV/(\d+\.\d+)'   =>  [
            'name'=>'Unknown',
            'category'=>'tv',
            'sub'=>[
                'WebTV/(\d+\.\d+)'=>[
                    'name'=>'Web TV',
                ],
            ]
        ],

        // Savio
        'TB-PO1 Build'   =>  [
            'name'=>'Savio',
            'category'=>'tv',
            'sub'=>[
                '(TB-PO1)'=>[
                    'name'=>'$1',
                ],
            ]
        ],
        
    ];
}