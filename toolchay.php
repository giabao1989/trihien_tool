<?php
error_reporting(0);
function clear(){system(stripos(PHP_OS, 'WIN') === 0 ? 'cls' : 'clear');}
clear();









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



$a1 = "User-Agent: Dart/3.3 (dart:io)";
$a2 = "Content-Type: application/json";
$a3 = "version: 37";
$a4 = "origin: app";
$a6 = "Visitor: PI";


$sao = "*";
$fb1 = "host: www.facebook.com";
$fb3 = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,".$sao."/".$sao.";q=0.8,application/signed-exchange;v=b3;q=0.7";
$fb4 = "sec-fetch-site: none";
$ffb2 = "content-type: application/x-www-form-urlencoded";






$tsm22  = [$fb1, $fb2, $fb4, $ffb2, $fb14];


function lay_tsm(){global $chontsm, $fb1, $fb2, $fb3, $fb4, $ffb2, $fb14, $a1, $a2, $a3, $a4, $a5, $a6;
//////// cua bumx
    if (strpos($chontsm, '1') !== false) {
return [$a1, $a2, $a3, $a4, $a6];}
elseif (strpos($chontsm, '2') !== false) {
return [$a1, $a2, $a3, $a4, $a5, $a6];}

///// cua facebook
elseif (strpos($chontsm, '3') !== false) {
return [$fb1, $fb2, $fb3, $fb4, $fb14];}
elseif (strpos($chontsm, '4') !== false) {
return [$fb1, $fb2, $fb4, $ffb2, $fb14];}

//// cua youtube


}


function user_gen() {
$brand = trim(shell_exec('getprop ro.product.manufacturer'));
$model = trim(shell_exec('getprop ro.product.model'));
// Không check ra → dùng mặc định
if (!$brand || !$model) {
return 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36';
}
// Có check ra → gắn brand + model để tránh trùng UA
return "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 [$brand-$model]";
}



function ttaothu() {global $cokitup;
preg_match('/SAPISID=([^;]+)/', $cokitup, $m);
if (empty($m[1])) return "KHONG TIM THAY";
$sapisid = $m[1];
$t = time();
$auth = "SAPISIDHASH {$t}_" . sha1("$t $sapisid https://www.youtube.com");
return $auth;}




function input($prompt){
echo $prompt.": ";
return trim(fgets(STDIN));}




function append_safe($file, $line){
$line = trim(str_replace(["\r","\n"], '', $line));
if (file_exists($file) && filesize($file) > 0) {
$fp = fopen($file, 'rb');
fseek($fp, -1, SEEK_END);
if (fgetc($fp) !== "\n") {
file_put_contents($file, PHP_EOL, FILE_APPEND);}
fclose($fp);}
file_put_contents($file, $line.PHP_EOL, FILE_APPEND);}


function xuly($file, $data){
if (is_array($data)) {
$out = array_map(fn($v)=>clean_line($v), $data);
file_put_contents($file, implode(PHP_EOL, $out).PHP_EOL);
return;}append_safe($file, $data);}


function tong(){global $taikhoan, $matkhau, $tenfb, $cookie, $cookiyou, $tkvmk, $suacoki, $suayoutube, $chonsua;
    if ($chonsua == 1) {xuly("tkbux.txt", $taikhoan."|".$matkhau);}
elseif ($chonsua == 2) {xuly("cokie.txt", $tenfb."|".$cookie);}
elseif ($chonsua == 3) {xuly("youtube.txt", $cookiyou);}
elseif ($chonsua == 4) {xuly("tkbux.txt", $tkvmk);}
elseif ($chonsua == 5) {xuly("cokie.txt", $suacoki);}
elseif ($chonsua == 6) {xuly("youtube.txt", $suayoutube);}}



function postkmk() {global $taikhoan, $matkhau, $tsm98, $chonsua;
while (1) {
$mog3 = explode("\n", @file_get_contents('tkbux.txt'));
$mog2 = $mog3[0];
$khoan = explode('|', $mog2)[0];
if ($khoan == false) {
$taikhoan  = input("NHAP GMAI TK BUMX");clear();
$matkhau   = input("NHAP  MAT KK BUMX");clear();
} else {
$taikhoan  = explode('|', $mog2)[0];
$matkhau   = explode('|', $mog2)[1];}
$url = "https://api-v2.bumx.vn/api/authorization/login";
$data = json_encode([
'username' => $taikhoan,
'is_from_mobile' => true,
'password' => $matkhau]);
$goi = GOIPOST($url, $tsm98, $data)['data'];
$token = $goi['data']['accessToken'];
if ($token == false) {echo "SAI TAI KHOAN HOAC MAT KHAU\r";sleep(2);clear();continue;}
if ($khoan == false) {$chonsua="1";tong();}
return $token;}}


function getk() {global $tsm99;
$url = 'https://api-v2.bumx.vn/api/business/wallet';
$me = GOIGET($url, $tsm99)['data'];
$msee = $me['message'];
if (str_contains($msee, 'Phiên đăng nhập hết hạn, vui lòng đăng nhập lại!')) {return "AUTHU DIE";}
if (str_contains($msee, 'Tài khoản chưa bật kiếm tiền')) {return "TRUA BAT KIEM TIEN";}
$coi = $me['data']['balance'];}


function loa () {global $tsm99, $nv;
$data = '{"type": "'.$nv.'"}';
$url = "https://api-v2.bumx.vn/api/buff/get-new-mission";
$goi7 = GOIPOST($url, $tsm99, $data)['data'];
print_r($goi7);
$goi  = $goi7['data'][0];
if (strpos($goi, 'ok') !== false) {return "CO JOB";}
else {
$goi1 = $goi7['message'];
    if (strpos($goi1, 'Vui lòng liên kết tài khoản Facebook của bạn') !== false) {return "TRUA CO FACEBOOK";}
elseif (strpos($goi1, 'Vui lòng liên kết tài khoản Youtube của bạn') !== false) {return "TRUA CO YOUTUBE";}
elseif (strpos($goi1, 'Vui lòng liên kết tài khoản Tiktok của bạn') !== false) {return "TRUA CO TIKTOK";}
elseif (strpos($goi1, 'Bạn có nhiều nhiệm vụ chưa làm xong') !== false) {return "JOB TRUA LAM";}
elseif (strpos($goi1, 'Hiện tại đã hết nhiệm vụ loại này') !== false)   {return"HET NV";}
elseif (strpos($goi1, 'comment facebook') !== false){return "LAM COM";}
else {return "HET JOB";}
}}


function loa1 () {global $tsm99;
$url1 = "https://api-v2.bumx.vn/api/buff/mission?is_from_mobile=true";
$goi1 = GOIGET($url1, $tsm99)['data'];
return $goi1;}




function loa2 () {global $tsm99, $buff_id;
$data2 = '{"buff_id":"'.$buff_id.'"}';
$url2  = "https://api-v2.bumx.vn/api/buff/load-mission";
$goi2  = GOIPOST($url2, $tsm99, $data2)['html'];

$nv_loi = [
'Nhiệm vụ này đã đủ số lượng',
'Nhiệm vụ bị lỗi',
'This job is full'];
foreach ($nv_loi as $k) {if (str_contains($goi2, $k)) return "NHIEM VU DA XONG";}

// comment
if (str_contains($goi2,'comment_id')) {
return [
'bl'   => explode('"', explode('data":"', $goi2)[1])[0],
'c_id' => explode('"', explode('comment_id":"', $goi2)[1])[0],
'web'  => explode('"', explode('object_id":"', $goi2)[1])[0]];}

// like / cảm xúc
$web = explode('"', explode('object_id":"', $goi2)[1])[0];
$camxuc = [
1 => ['id'=>'1635855486666999','key'=>['like','Like']],
2 => ['id'=>'1678524932434102','key'=>['LOVE','love','Love','thả tim']],
3 => ['id'=>'613557422527858', 'key'=>['Thương Thương']],
4 => ['id'=>'115940658764963', 'key'=>['HaHa']],
5 => ['id'=>'478547315650144', 'key'=>['WOW']],
6 => ['id'=>'908563459236466', 'key'=>['Buồn']],
7 => ['id'=>'444813342392137', 'key'=>['Tức giận']],
];

foreach ($camxuc as $loai => $v) {
foreach ($v['key'] as $k) {
if (str_contains($goi2, $k)) {
return [
'loai'  => (string)$loai,
'cx_id' => $v['id'],
'web'   => $web];}}}return "TRUA CO";}


function nhanbux() {global $tsm99, $buff_id, $nv, $com_id, $binhluan;
$url  = "https://api-v2.bumx.vn/api/buff/submit-mission";
$data = [
"buff_id" => $buff_id,
"comment" => null,
"comment_id" => null,
"code_submit" => null,
"attachments" => [],
"link_share" => "",
"code" => "",
"is_from_mobile" => true,
"type" => $nv,
"sub_id" => null,
"data" => null];

// like poster / comment fb / comment youtube
if ($nv == 'like_poster' || $nv == 'like_comment_youtube') {
$data['comment']    = $binhluan;
$data['comment_id'] = $com_id;}

// traffic_user
if ($nv == 'traffic_user') {
$data['code_submit'] = "DONAGIFT@2026";}
$body = json_encode($data, JSON_UNESCAPED_SLASHES);
$goi2 = GOIPOST($url, $tsm99, $body)['html'];
echo "<<<<<<<$goi2\n";
$mass = explode(' coin', explode('Bạn được cộng ', $goi2)[1])[0];
if ((int)$mass > 2) {
$mm = explode('}', explode('count":', $goi2)[1])[0];
return ['mass' => (int)$mass, 'mm' => $mm];}
return "LOI NHE";}

function baoloi() {global $tsm99, $buff_id;
$json_data = ["buff_id" => $buff_id];
$body = json_encode($json_data, JSON_UNESCAPED_SLASHES);
$url  = "https://api-v2.bumx.vn/api/buff/report-buff";
$goi2 = GOIPOST($url, $tsm99, $body)['html'];}
/////////////////////////
function nhantong() {global $mlam, $mtien, $coixu;
$y="\033[1;33m"; // vàng
$g="\033[1;32m"; // xanh lá
$r="\033[1;31m"; // đỏ
$w="\033[1;37m"; // trắng
$b="\033[1;34m"; // xanh dương
$c="\033[1;36m"; // ngọc
$o="\033[38;5;208m"; // cam
$e="\033[0m";    // reset
$vg =
$g."🌾".$e." + ".$y.number_format($mtien).$e." ".$r."VNĐ".$e." ".$g."🌾".$e." "
.$o."||".$e." "
.$g."🌾".$e." ".$w.$mlam.$e." ".$b."JON".$e." ".$g."🌾".$e." "
.$o."||".$e." "
.$g."🌾".$e." ".$c.number_format($coixu).$e." ".$r."VNĐ".$e." ".$g."🌾".$e."\n";
bv($vg);}









/////////////// phan youtube\\\\\\\\\
function getyou () {global $tsm55;
$url = "https://m.youtube.com/getAccountSwitcherEndpoint";
$goi = GOIGET($url, $tsm55)['html'];
$tentup = explode('"}', explode('accountName":{"simpleText":"', $goi)[1])[0];
if (!$tentup) {return"COOKIE YOU SAI";}
$xgo  = explode('&', explode('authuser=', $goi)[1])[0];
$chano = explode('"', explode('clientCacheKey":"', $goi)[1])[0];
return ['tentup' => $tentup, 'xgo' => $xgo, 'chano' => $chano];}

function commen () {global $video, $tsm56, $binhluan;
$url = "https://m.youtube.com/youtubei/v1/next?prettyPrint=false";
$url1= "https://m.youtube.com/youtubei/v1/comment/create_comment?prettyPrint=false";
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
$dau  = json_encode($dauu1, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
$goi = GOIPOST($url, $tsm56, $dau, null)['html'];
$ji=0; while (1) {$ji++;
$token = explode('"',explode('continuationCommand":{"token":"',$goi)[$ji])[0];
if ($ji > 9) {return "TIM LOI NHE";}
$dem = strlen($token);
if ($dem < 100) {continue;}
if ($dem > 350) {continue;}


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
$dau1  = json_encode($datay, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
$goi1 = GOIPOST($url, $tsm56, $dau1, null)['html'];
$cret = explode('"',explode('createCommentParams":"', $goi1)[1])[0];
if (!$cret) {continue;}


$datay2 = [
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
$dau2   = json_encode($datay2, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
$goi2   = GOIPOST($url1, $tsm56, $dau2, null)['html'];
$ketqua = explode('"}]}}',explode('feedbackText":{"runs":[{"text":"',$goi2)[1])[0];
if ($ketqua == 'Comment added') {return "COMMEN THANH CONG";}
return "COMMEN THAT BAI";
} ////ji
}

function lay_id_youtube(){global $web;
preg_match('/([0-9A-Za-z_-]{11})/', $web, $m);
$deovi = $m[1] ?? '';
if (!$deovi) return "VIDEO LOI";
return $deovi;}


////////////////// facebook \\\\\\\\\\\\\\\\\\\\
function camxuc_id() {global $cxx;
$list = [
1 => "1635855486666999", // Like
2 => "1678524932434102", // Love
3 => "613557422527858", // thuong thuong
4 => "115940658764963", // haha
5 => "478547315650144", // woa
6 => "908563459236466", /// buon
7 => "444813342392137", // phan no
];return $list[$cxx];}

function fb() {global $tsm21, $uid;
$url = "https://www.facebook.com/";
$goi = GOIGET($url, $tsm21)['html'];
    if (str_contains($goi, 'Quên mật khẩu'))     {return "DIE COOKIE";}
elseif (str_contains($goi, 'Đăng nhập gần đây')) {return "DIE COOKIE";}
elseif (str_contains($goi, '1501092823525282'))  {return "CHECKPOI";}
elseif (str_contains($goi, '828281030927956'))   {return "CHECKPOI";}
elseif (str_contains($goi, '601051028565049'))   {return "CHECKPOI";}
$htee='["DTSGInitialData",[],{"token":"';
$fb_sg = explode('"', explode($htee, $goi)[1])[0];
if ($fb_sg == false) {return "LOI NHE";}
$tt = explode('"', explode('USER_ID":"'.$uid.'","NAME":"', $goi)[1])[0];
$noma = json_decode('"' . $tt. '"');
return ['fb_sg' => $fb_sg, 'tt' => $noma];}

function tonghop() {
global $fb_dtsg, $tsm22, $uid, $id, $cx, $nv, $binhluan;
$base = base64_encode("feedback:$id");
if ($nv == "like_poster") {$docid = "24615176934823390";
$vaitim = '{"input":{"client_mutation_id":"1","actor_id":"'.$uid.'","feedback_id":"'.$base.'","message":{"ranges":[],"text":"'.$binhluan.'"}}}';}
if ($nv == "like_facebook") {$docid = "24198888476452283";
$vaitim = '{"input":{"feedback_id":"'.$base.'","feedback_reaction_id":"'.$cx.'","feedback_source":"NEWS_FEED","actor_id":"'.$uid.'","client_mutation_id":"1","session_id":"","is_tracking_encrypted":true,"tracking":["{}"],"attribution_id_v2":"CometHomeRoot.react,comet.home,via_cold_start"},"useDefaultActor":false}';}
$data = http_build_query([
'av' => $uid,
'__user' => $uid,
'fb_dtsg' => $fb_dtsg,
'variables' => $vaitim,
'doc_id' => $docid]);
sleep(rand(5,9)); mothai();
$url1 = "https://www.facebook.com/api/graphql/";
$goi_raw = GOIPOST($url1, $tsm22, $data);
if (!is_array($goi_raw) || !isset($goi_raw['data'])) {return "THA TIM LOI";}
$goi1 = substr(json_encode($goi_raw['data']), 0, 4000);

if (str_contains($goi1, '828281030927956') || str_contains($goi1, '601051028565049') || str_contains($goi1, '1501092823525282')) {
return "CHECK POI";}
if (str_contains($goi1, '1390008') || str_contains($goi1, '1404078')) {
return "CHAN TT";}
//////))
if ($nv == "like_facebook") {
if (!str_contains($goi1, 'node":{"id":"'.$cx.'","localized_name":"')) {
return "THA TIM LOI";}
$loaicx = explode('"}', explode('node":{"id":"'.$cx.'","localized_name":"', $goi1)[1])[0];
$noma = json_decode('"' . $loaicx. '"');
if (in_array($noma, ["Like","Thích","Yêu thích","Thương thương","Haha","Wow","Buồn","Phẫn nộ","Love","Care"])) {
$node = "$noma THANH CONG";
return $node;
} else {return "THA TIM LOI";}}
////////////////
if ($nv == "like_poster") {
if (!str_contains($goi1, 'attachments":[],"comment_menu_tooltip":"')) {
return "COMMENT THAT BAI";}
$loc   = explode('"', explode('attachments":[],"comment_menu_tooltip":"', $goi1)[1])[0];
$nokeo = json_decode('"' . $loc. '"');
if ($nokeo == "Chỉnh sửa hoặc xóa bình luận này" || $nokeo == "Edit or delete this") {
return "COMMEN THANH CONG";
} else {return "COMMENT THAT BAI";}}
return "THA TIM LOI"; // THEM: return cuoi an toan
}



































$chontsm = 1;
$tsm98 = lay_tsm();
$token = postkmk();



























