


$denden = "\033[1;30m";
$red = "\033[1;31m";
$green = "\033[1;32m";
$yellow = "\033[1;33m";
$blue = "\033[1;34m";
$res = "\033[1;35m";
$nau = "\033[1;36m";
$trang = "\033[1;37m";
$cam = "\033[1;38;5;208m";
$hongnhac = "\033[1;38;5;218m";
$xam = "\033[1;38;5;250m";
$den = "\033[1;38;5;0m";
$xanhla = "\033[1;38;5;2m";
$xanhduong = "\033[1;38;5;4m";
$tim = "\033[1;38;5;5m";
$xanhngoc = "\033[1;38;5;6m";
$hongdam = "\033[1;38;5;201m";
$reset = "\033[0m";
$colors = [$den, $xanhla, $xanhduong, $tim, $xanhngoc, $hongdam, $xam, $hongnhac, $denden, $red, $green, $yellow, $blue, $res, $nau, $trang, $cam];

error_reporting(0);
@system('clear');












function call_bot_py($url, $headers, $proxy = '', $method = 'GET', $data = null) {
    $p = json_encode(['url'=>$url,'headers'=>$headers,'proxy'=>$proxy,'method'=>$method,'data'=>$data], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    // Ghi mã Python vào file
    file_put_contents('bot.py', "import json, cloudscraper, os\ntry:\n p=json.loads('''$p''')\n s=cloudscraper.create_scraper()\n if p.get('proxy'):s.proxies={'http':p['proxy'],'https':p['proxy']}\n r=s.get(p['url'],headers=p['headers'],timeout=10) if p['method']=='GET' else s.post(p['url'],headers=p['headers'],json=p.get('data'),timeout=10)\n print(json.dumps({'status':r.status_code,'data':r.json()}))\nexcept Exception as e:\n print(json.dumps({'error':str(e)}))\nfinally:\n if os.path.exists('bot.py'):\n   os.remove('bot.py')");
    // Chạy script Python, ẩn lỗi nếu có
    $res = json_decode(shell_exec('python3 bot.py 2>/dev/null'), true) ?: ['error' => 'KHONG THE REQUEST'];
    return $res;}

function get_url() { global $tsm, $proxy, $url; return call_bot_py($url, $tsm, $proxy, 'GET'); }
function post_url() { global $url, $data, $tsm, $proxy; return call_bot_py($url, $tsm, $proxy, 'POST', $data); }
function clear() {system('clear');}
function mothai() {echo "\r" . str_repeat(' ', 50) . "\r";}
///////// khong coppy o tren





function TONGGO(){global $ddd;
file_put_contents('tonggo.txt',"$ddd\n", FILE_APPEND);}








function printAllAccounts($accounts) {
    echo "\033c"; // Xóa màn hình terminal

    // Mã màu ANSI
    $nau = "\033[1;36m";
    $xanhduong = "\033[1;34m";
    $yellow    = "\033[1;33m";
    $xanhla    = "\033[1;32m";
    $hongnhac  = "\033[1;35m";
    $trang     = "\033[1;37m";
    $cam       = "\033[1;38;5;208m";
    $reset     = "\033[0m";
    $red       = "\033[1;31m";
    $xanhngoc = "\033[1;38;5;6m";
    $tim = "\033[1;38;5;5m";
    $denden = "\033[1;30m";

    // Tìm chiều rộng lớn nhất của USERNAME
    $maxNameWidth = 0;
    foreach ($accounts as $acc) {
        $name = ucwords($acc['name']);
        $width = mb_strwidth($name, 'UTF-8');
        if ($width > $maxNameWidth) {
            $maxNameWidth = $width;
        }
    }

    // Cấu hình độ rộng cột
    $sttWidth      = 3;
    $nameWidth     = $maxNameWidth + 2;
    $moneyAppWidth = 9;
    $tfWidth       = 11;
    $moneyWidth    = 9;
    $timeWidth     = 17;

    $colWidths = [$sttWidth, $nameWidth, $moneyAppWidth, $tfWidth, $moneyWidth, $timeWidth];

    echo buildLine($colWidths, 'top') . "\n";
    echo buildRow([
        "{$nau}STT{$reset}",
        "{$trang} TÀI KHOẢN{$reset}",
        "{$denden}TIỀN APP{$reset}",
        "{$xanhla}TC{$yellow}/{$red}TB{$reset}",
        "{$xanhla}TIỀN{$reset}",
        "{$trang}NGÀY {$cam}VỚI TIME{$reset}"
    ], $colWidths);
    echo buildLine($colWidths, 'mid') . "\n";

    $lastIndex = count($accounts) - 1;
    foreach ($accounts as $i => $acc) {
        $name     = $yellow . ucwords($acc['name']) . $reset;
        $moneyApp = $cam . ($acc['money_app'] ?? 0) . $reset;
        $tf       = $xanhla . $acc['success'] . $trang .'/' .$red . $acc['fail'] . $reset;
        $money    = $xanhngoc . $acc['money'] . $reset;
        $time     = $tim . $acc['time'] . $reset;
        $row      = [$trang . $i . $reset, $name, $moneyApp, $tf, $money, $time];
        echo buildRow($row, $colWidths);
        if ($i < $lastIndex) echo buildLine($colWidths, 'mid') . "\n";
    }

    echo buildLine($colWidths, 'bottom') . "\n";

    // 👉 Tổng tiền
    $tongTien  = array_sum(array_column($accounts, 'money'));
    $totalText = "{$cam}TỔNG TIỀN {$red}: {$trang}$tongTien {$yellow}VNĐ{$reset}";

    $totalWidth = array_sum($colWidths) + count($colWidths) + 1;
    $padLeft  = floor(($totalWidth - 2 - mb_strwidth(stripAnsi($totalText), 'UTF-8')) / 2);
    $padRight = $totalWidth - 2 - $padLeft - mb_strwidth(stripAnsi($totalText), 'UTF-8');

    echo "│" . str_repeat(' ', $padLeft) . $totalText . str_repeat(' ', $padRight) . "│\n";
    echo str_repeat('─', $totalWidth) . "\n";
}

function buildLine($widths, $type = 'mid') {
    $chars = [
        'top'    => ['┌', '┬', '┐'],
        'mid'    => ['├', '┼', '┤'],
        'bottom' => ['└', '┴', '┘'],
    ];

    [$left, $mid, $right] = $chars[$type];
    $line = $left;
    foreach ($widths as $i => $w) {
        $line .= str_repeat('─', $w);
        $line .= ($i === array_key_last($widths)) ? $right : $mid;
    }
    return $line;
}

function buildRow($values, $widths) {
    $row = '│';
    foreach ($values as $i => $value) {
        $text = (string)$value;
        $pad  = $widths[$i] - mb_strwidth(stripAnsi($text), 'UTF-8');
        $pad  = max(0, $pad);
        $row .= $text . str_repeat(' ', $pad) . '│';
    }
    return $row . "\n";
}





function printTimer($sec, $name) {global $khinao, $colors;


if ($khinao == 1) {

    for ($i = 1; $i <= $sec; $i++) {
        $mautong = $colors[array_rand($colors)];
        echo $mautong."\r⏳ HET JOB: $i/$sec (" . ucwords($name) . ") giây ";
        flush();
        sleep(1);
    }}

else if ($khinao == 2) {

    for ($i = 1; $i <= $sec; $i++) {
    $mautong = $colors[array_rand($colors)];
        echo $mautong."\r⏳ Đang đợi: $i/$sec (" . ucwords($name) . ") giây ";
        flush();
        sleep(1);
    }}


else if ($khinao == 3) {

    for ($i = 1; $i <= $sec; $i++) {
    $mautong = $colors[array_rand($colors)];
        echo $mautong."\r ⏳ HẾ TÀI KHOẢN : $i/$sec giây ";
        flush();
        sleep(1);
    }}


    echo "\r\033[K"; // Xóa dòng sau khi xong
}

function syncAccounts(&$accounts, $filename = "tonggo.txt") {
$lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
if (!$lines) return;

$currentNames = array_column($accounts, 'name');
$updated = false;
foreach ($lines as $line) {
$arr = explode('|', $line);
if (!isset($arr[3])) continue;
$name = strtolower(trim($arr[3]));
if (!in_array($name, $currentNames)) {
$accounts[] = [
'name'      => $name,
'success'   => 0,
'fail'      => 0,
'money'     => 0,
'money_app' => isset($arr[4]) ? (int)$arr[4] : 0,
'time'      => date("d/m")];
$updated = true;}}
if ($updated) {
printAllAccounts($accounts);}}









function stripAnsi($text) {
return preg_replace('/\033\[[0-9;]*m/', '', $text); }


























function commen (){global $binhluan, $tsm92, $video;
$inn = "https://m.youtube.com/youtubei/v1/next?prettyPrint=false";
$api1 = "2.20240729.04.00";
$dauu1 = [
"context" => [
"client" => [
"clientName" => "MWEB",
"clientVersion" => $api1,
"configInfo" => [
"appInstallData" => ""],
"mainAppWebInfo" => [
"isWebNativeShareAvailable" => true]],
"user" => [
"lockedSafetyMode" => false],
"request" => ["useSsl" => true],
"clickTracking" => ["clickTrackingParams" => ""],
"adSignalsInfo" => [
"params" => []]],
"videoId" => $video,
"racyCheckOk" => false,
"contentCheckOk" => false,
"autonavState" => "STATE_OFF",
"playbackContext" => [
"vis" => 0,
"lactMilliseconds" => "-1"],"captionsRequested" => false];
$dau1  = json_encode($dauu1, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
$link1 = GOIPOST($inn, $tsm92, $dau1, null)['html'];
////////////
$ji="0";while (true) {$ji++;
$token = explode('"',explode('continuationCommand":{"token":"',$link1)[$ji])[0];
if ($ji > 9) {$tcom="KHONG CO TOKEN";mothai();break;}
if ($token == false) {echo "DANG TIM LAI [ $ji ]\r";continue;}
/////////)
$datay = [
"context" => [
"client" => [
"clientName" => "MWEB",
"clientVersion" => $api1,],
"user" => ["lockedSafetyMode" => false],
"request" => ["useSsl" => true],
"clickTracking" => [
"clickTrackingParams" => ""],
"adSignalsInfo" => ["params" => []]],"continuation" => $token];
$dau2  = json_encode($datay, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
$link2 = GOIPOST($inn, $tsm92, $dau2, null)['html'];
$cret = explode('"',explode('createCommentParams":"',$link2)[1])[0];
if ($cret == false) {echo "DANG TIM LAI CRET [ $ji ]\r";continue;}
////////////////////////////////
$link3= "https://m.youtube.com/youtubei/v1/comment/create_comment?prettyPrint=false";
$datay8 = [
"context" => [
"client" => [
"clientName" => "MWEB",
"clientVersion" => $api1,
"configInfo" => ["appInstallData" => ""],
"mainAppWebInfo" => ["isWebNativeShareAvailable" => true]],
"user" => ["lockedSafetyMode" => false],
"request" => ["useSsl" => true,],
"clickTracking" => ["clickTrackingParams" => ""],
"adSignalsInfo" => ["params" => [],]],
"createCommentParams" => $cret,
"commentText" => $binhluan];
$dau3 = json_encode($datay8, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
$nhancom=GOIPOST($link3, $tsm92, $dau3, null)['html'];
$hcom = explode('"}]}}',explode('feedbackText":{"runs":[{"text":"',$nhancom)[1])[0];
if ($hcom == 'Comment added') {
$tcom = "COMMEN THANH CONG NHE";break;
}else{$tcom = "COMMEN THAT BAI";break;}} //// ji
return array('tcom' => $tcom);}
/////////////////////////////////////////////
/////////////////////////////////////////////
function dangky () {global $tsm05, $linkweb, $tsm92, $tsm93;
$i="0";
while (true) {


$rawUrl = $linkweb; // nhập gì cũng được
$url8 = preg_replace('#^(https?:\/\/)?(m\.)?(www\.)?youtube\.com#', 'https://www.youtube.com', $rawUrl);
$html = GOIGET($url8, $tsm05)['html'];
$html = preg_replace_callback('/\\\\x([0-9A-Fa-f]{2})/', fn($m) => chr(hexdec($m[1])), $html);
preg_match('/channel\/(UC[0-9A-Za-z_-]+)/', $html, $m);
$kenh = $m[1] ?? '';
if ($kenh) { $i++;
$pama = explode('"', explode(''.$kenh.'","params":"', $html)[$i])[0] ?? '';
if ($pama == false) {$hdk = "KENH NAY LOI";break;}
$dem1 = strlen($pama);
if ($dem1 > 11) {
if ($i > 15) {mothai();$hdk = "KENH NAY LOI";break;}
echo "DANG TIM LAI [ $i ] \r";continue;}
} else {echo "Không tìm thấy channel ID\r";
$hdk = "KENH NAY LOI";break;}
///////////////////////////
$api1 = "2.20240729.04.00";
$web  = "https://m.youtube.com/youtubei/v1/subscription/subscribe?prettyPrint=false";
/////////
$data4 = [
"context" => [
"client" => [
"clientName" => "MWEB",
"clientVersion" => $api1,
"configInfo" => ["appInstallData" => ""],
"mainAppWebInfo" => ["isWebNativeShareAvailable" => true]],
"user" => ["lockedSafetyMode" => false],
"request" => ["useSsl" => true,
"consistencyTokenJars" => [[]],
"internalExperimentFlags" => []],
"clickTracking" => [
"clickTrackingParams" => ""],
"adSignalsInfo" => [
"params" => [],]],
"channelIds" => [$kenh],
"params" => $pama];
$dau4  = json_encode($data4, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
$ponui = GOIPOST($web, $tsm92, $dau4, null)['html'];
$dangky  = explode('"}]}',explode('responseText":{"runs":[{"text":"',$ponui)[1])[0];
if ($dangky == 'Subscription added'){
$hdk = "DANG KY KENH THANH CONG";
break;}else{$hdk = "DANG KY KHONG THANH CONG";break;}} //// while
return array('hdk' => $hdk);}

















function funyou() {global $databao, $url, $data, $datanhan, $idyou, $pepe, $nhk, $tsm, $token, $user, $cait;



$tsm = [
"authorization" => $token,
"User-Agent" => $user,
"Accept" => "application/json",
"t" => $cait];




if ($nhk == 1) {
$url = "https://gateway.golike.net/api/users/me";
$goi = get_url($url, $tsm)['data'];
//print_r($goi);exit;

}


elseif ($nhk == 2) {
$url = "https://gateway.golike.net/api/youtube-account";
$goi = get_url($url, $tsm)['data'];}



elseif ($nhk == 3) {
$url = "https://gateway.golike.net/api/advertising/publishers/youtube/jobs?account_id=$idyou";
$goi = get_url($url, $tsm)['data'];}


elseif ($nhk == 4) {
$url = "https://gateway.golike.net/api/advertising/publishers/youtube/complete-jobs";
$data = $datanhan;
$goi = post_url($url, $tsm, $data)['data'];}

elseif ($nhk == 5) {
$url = "https://gateway.golike.net/api/advertising/publishers/youtube/skip-jobs";
$data = $databao;
$goi = post_url($url, $tsm, $data)['data'];}


return $goi;}





echo " [ 1 ] them tai khoan\n";
echo " [ 2 ] vao tool\n";
echo "con : ";
$you = trim(fgets(STDIN));




while (true) {

if ($you == 1) {
echo "NHAP AUTHU : ";
$token = trim(fgets(STDIN));
echo "nhap user :";
$user = trim(fgets(STDIN));
echo "nhap cat t :";
$cait = trim(fgets(STDIN));



$nhk="1";
$goi = funyou();
$tengo = $goi['data']['username'];
$tienapp = $goi['data']['coin'];

$nhk="2";
$goi = funyou();
$idyou = $goi['data'][0]['id'];
$tenyou = $goi['data'][0]['name'];
echo "NHAP COOKIE YOUTUBE $tenyou";
$cookie = trim(fgets(STDIN));
echo "NHAP AUTHU ";
$thuyou = trim(fgets(STDIN));
echo "NHAP XGO ";
$xgo = trim(fgets(STDIN));
$ddd = "$token|$user|$cait|$tengo|$tienapp|$idyou|$xgo|$thuyou|$cookie";
TONGGO();system('clear');
continue;} //////1




break;}









date_default_timezone_set("Asia/Ho_Chi_Minh");

// Load danh sách ban đầu từ file
$accounts = [];
$lines = file("tonggo.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach ($lines as $line) {
    $parts = explode('|', $line);
    $name = strtolower(trim($parts[3] ?? 'no_name'));
    $accounts[] = [
        'name'      => $name,
        'token'     => trim($parts[0] ?? ''),
        'user'      => trim($parts[1] ?? ''),
        'cait'      => trim($parts[2] ?? ''),
        'idyou'     => trim($parts[5] ?? ''),
        'xgo'       => trim($parts[6] ?? ''),
        'thuyou'    => trim($parts[7] ?? ''),
        'cookie'    => trim($parts[8] ?? ''),
        'success'   => 0,
        'fail'      => 0,
        'money'     => 0,
        'money_app' => isset($parts[4]) ? (int)$parts[4] : 0,
        'time'      => date("d/m : H:i"),
    ];
}

// In bảng tài khoản ban đầu
stripAnsi($text);
printAllAccounts($accounts);
//exit;

while (true) {
    for ($ii = 0; $ii < count($accounts); $ii++) {
        $acc       = $accounts[$ii];
        $taikhoan  = $acc['name'];
        $vitri     = $ii;
        $thanhcong = $accounts[$ii]['success'];
        $bai       = $accounts[$ii]['fail'];

        $token = $acc['token'];
        $user  = $acc['user'];
        $cait  = $acc['cait'];
        $idyou = $acc['idyou'];
        $xgo   = $acc['xgo'];
        $thuyou  = $acc['thuyou'];
        $cookie  = $acc['cookie'];

        while (true) {
            $mi = 0;
            while (true) {$nhk="3";
                $mi++;
                $goi = funyou();
                $idjob = $goi['lock']['ads_id'] ?? null;

                if (!$idjob) {
                    if ($mi >= 3) break;$khinao="1";
                    printTimer(10, $taikhoan);
                    continue;
                }
                break;
            }

            if ($mi >= 3) break;

            $video = $goi['lock']['object_id'];
            $pype  = $goi['lock']['type'];



            $databao = [
            "ads_id" => $idjob,
            "object_id" => $video,
            "account_id" => $idyou,
            "type" => $pype];


$tu1 = "Host: m.youtube.com";
$tu2 = "x-origin: https://m.youtube.com";
$tu5 = "sec-ch-ua-wow64: ?0";
$tu6 = "x-youtube-bootstrap-logged-in: true";
$tu7 = "sec-ch-ua-mobile: ?1";
$tu9 = "content-type: application/json";
$tu10 = "origin: https://m.youtube.com";
$tu11 = "x-client-data: CITjygE=";
$tu12 = "sec-fetch-site: same-origin";
$tu13 = "sec-fetch-mode: same-origin";
$tu14 = "sec-fetch-dest: empty";
$tu3 = "authorization: $thuyou";
$tu4 = "x-goog-authuser: $xgo";
$tu8 = "user-agent: $user";
$tu15= "cookie: $cookie";
$tu88="upgrade-insecure-requests:1";
$tsm92 = [$tu1, $tu2, $tu3, $tu4, $tu5, $tu6, $tu7, $tu8, $tu9, $tu10, $tu11, $tu12, $tu13, $tu14, $tu15];
$tsm93 = [$tu8, $tu88];
$tsm05 = [$tu8, $tu88, $tu15];


            if ($pype == "comment") {
                $chanid   = $goi['lock']['comment_id'];
                $binhluan = $goi['lock']['message'];
                $datanhan = [
                    "ads_id" => $idjob,
                    "account_id" => $idyou,
                    "async" => true,
                    "data" => null,
                    "comment_id" => $chanid,
                    "message" => $binhluan
                ];

                $mencom = commen();
                $tcom   = $mencom['tcom'];
                if ($tcom === "KHONG CO TOKEN" || $tcom === "COMMEN THAT BAI") {
                    echo "$tcom\r";$nhk="5";$goi = funyou();$nhk="0";
                    sleep(1);
                    continue;
                }
                echo "$tcom\r";
            } elseif ($pype == "subscribe") {
               $linkweb = $goi['data']['link'];
                $datanhan = [
                    "ads_id" => $idjob,
                    "account_id" => $idyou,
                    "async" => true
                ];
                $dangky = dangky();
                $hdk    = $dangky['hdk'];
                if ($hdk === "KENH NAY LOI" || $hdk === "DANG KY KHONG THANH CONG") {
                    echo "$hdk\r";$nhk="5";$goi = funyou();$nhk="0";
                    sleep(1);
                    continue;
                }
                echo "$hdk\r";
            }
$nhk = "4";

            $goi = funyou();
            $mkk = $goi['message'];
            $tiennhieu = $goi['data']['prices'] ?? 0;

            if ($mkk == 'Báo cáo thành công !') {
                $thanhcong++;
                $accounts[$vitri]['success'] = $thanhcong;
                $accounts[$vitri]['money'] += (int)$tiennhieu;
             echo $trang."NHẬN $yellow$tiennhieu VNĐ ".$nau."THÀNH CÔNG\r";
             sleep(2);mothai();

            } else {
                $bai++;
                $accounts[$vitri]['fail'] = $bai;
                $nhk="5";$goi = funyou();$nhk="0";
                echo $red."NHẬN TIỀN THẤT BẠI\r";sleep(2);mothai();
            }

            $accounts[$vitri]['time'] = date("d/m : H:i");
            printAllAccounts($accounts);$khinao="2";
            printTimer(10, $taikhoan);$nhk="0";
        }
    }

    // 🔄 Sau mỗi vòng, kiểm tra nếu có tài khoản mới trong tonggo.txt thì thêm vào
    $lines = file("tonggo.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $addedNew = false;

    foreach ($lines as $line) {
        $parts = explode('|', $line);
        $name = strtolower(trim($parts[3] ?? 'no_name'));

        // Kiểm tra tài khoản đã tồn tại chưa
        $exists = false;
        foreach ($accounts as $acc) {
            if ($acc['name'] === $name) {
                $exists = true;
                break;
            }
        }

        if (!$exists) {
            $accounts[] = [
                'name'      => $name,
                'token'     => trim($parts[0] ?? ''),
                'user'      => trim($parts[1] ?? ''),
                'cait'      => trim($parts[2] ?? ''),
                'idyou'     => trim($parts[5] ?? ''),
                'xgo'       => trim($parts[6] ?? ''),
                'thuyou'    => trim($parts[7] ?? ''),
                'cookie'    => trim($parts[8] ?? ''),
                'success'   => 0,
                'fail'      => 0,
                'money'     => 0,
                'money_app' => isset($parts[4]) ? (int)$parts[4] : 0,
                'time'      => date("d/m : H:i"),
            ];
            echo "🆕 Đã thêm tài khoản mới: $name\r";sleep(2);mothai();
            $addedNew = true;
        }
    }

    // Nếu có tài khoản mới thì in lại bảng
    if ($addedNew) {
        printAllAccounts($accounts);
    }
}

















































































































function bv($vanban){$str = strlen($vanban);
for($i=0;$i<=$str;$i++){echo $vanban[$i]; usleep(1000);} return 1;}
function cc($vanban){$str = strlen($vanban);
for($i=0;$i<=$str;$i++){echo $vanban[$i]; usleep(1000);} return 1;}
function GOIGET($host, $tsm = null, $data = null, $proxy = null, $requestType = "GET") {
return HAMTONG($host, $tsm, $data, $proxy, $requestType, false);}
function GOIPOST($host, $tsm = null, $data = null, $proxy = null, $requestType = "POST") {
return HAMTONG($host, $tsm, $data, $proxy, $requestType, false);}









//////////////
//////////////
function HAMTONG($host, $tsm = null, $data = null, $proxy = null, $requestType = "POST", $useCookies = false, $cookieFile = "cookie.txt") {
$ch = curl_init($host);
$options = [
CURLOPT_RETURNTRANSFER => true,
CURLOPT_HEADER => true,
CURLOPT_TIMEOUT => 30,
CURLOPT_CUSTOMREQUEST => $requestType,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTPHEADER => $tsm ?? [],
CURLOPT_POSTFIELDS => $data ?? ''];
if ($proxy) {
$parts = explode(':', $proxy);
$options[CURLOPT_PROXY] = "{$parts[0]}:{$parts[1]}";
if (isset($parts[2], $parts[3])) {
$options[CURLOPT_PROXYUSERPWD] = "{$parts[2]}:{$parts[3]}";}}
if ($useCookies) {
$options[CURLOPT_COOKIEJAR] = $cookieFile;
$options[CURLOPT_COOKIEFILE] = $cookieFile;}
curl_setopt_array($ch, $options);
$response = curl_exec($ch);
$error = curl_error($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
curl_close($ch);
$header = substr($response, 0, $headerSize);
$body = substr($response, $headerSize);
$jsonData = json_decode($body, true);
if (json_last_error() !== JSON_ERROR_NONE) $jsonData = null;
return [
'ponse' => $header . "\n" . $body,
'data' => $jsonData,
'html' => $body,
'error' => $error,
'httpCode' => $httpCode];}

