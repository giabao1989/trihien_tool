















function dangky () {global $tsm05, $linkweb, $api;
$i="0";
$rawUrl = $linkweb; // nhập gì cũng được
$url8 = preg_replace('#^(https?:\/\/)?(m\.)?(www\.)?youtube\.com#', 'https://www.youtube.com', $rawUrl);
$html = GOIGET($url8, $tsm05)['html'];
$html = preg_replace_callback('/\\\\x([0-9A-Fa-f]{2})/', fn($m) => chr(hexdec($m[1])), $html);
preg_match('/channel\/(UC[0-9A-Za-z_-]+)/', $html, $m);
$kenh = $m[1];
if ($kenh == false) {return "KENH NAY LOI";}
while (true) {$i++;
$pama = explode('"', explode(''.$kenh.'","params":"', $html)[$i])[0];
if ($pama == false) {return "KENH NAY LOI";break;}
$dem = strlen($pama);
if ($dem > 13) {echo"DANG TIM LAI\r";continue;}
return ['pama' => $pama, 'kenh' => $kenh];}}
//////////////////////////////////////////////////////
//////////////////////////////////////////////////////
function dangky1() {global $tsm92, $api1, $kenh, $pama;
$web  = "https://m.youtube.com/youtubei/v1/subscription/subscribe?prettyPrint=false";
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
if (str_contains($ponui, 'Your session has expired')) {return "COOKIE DIE";}
$dangky  = explode('"}]}',explode('responseText":{"runs":[{"text":"',$ponui)[1])[0];
if ($dangky == 'Subscription added'){
}else{return "DANG KY LOI";}}
//////////////////////////////////////////////////////
//////////////////////////////////////////////////////
//////////////////////////////////////////////////////
function commen (){global $binhluan, $tsm92, $video, $api1;
$inn = "https://m.youtube.com/youtubei/v1/next?prettyPrint=false";
$link3= "https://m.youtube.com/youtubei/v1/comment/create_comment?prettyPrint=false";
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
preg_match('/"token":"(Eg0[^"]+)"/', $link1, $m);
if (empty($m[1])) return "KENH NAY LOI";
$token = $m[1];
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
if ($cret == false) {return "KHONG CO CHO BL";}
////////////////////////////////
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
if (str_contains($nhancom, 'Your session has expired')) {return "COOKIE DIE";}
$hcom = explode('"}]}}',explode('feedbackText":{"runs":[{"text":"',$nhancom)[1])[0];
if ($hcom == 'Comment added') {
}else{return "COMMEN THAT BAI";}}




function goitc() {global $thanhcong, $accounts, $vitri, $tienxu;
$accounts[$vitri]['success'] = $thanhcong;
$accounts[$vitri]['money'] += (int)$tienxu;
echo "$tengo NHAN THANH CONG [ $tienxu ] \r";sleep(2);mothai();
$baodi = "ONLINE";
$accounts[$vitri]['baodi'] = $die;
$accounts[$vitri]['time'] = date("d/m : H:i");
$caigiday="TỔNG TIỀN CỦA TẤT CẢ TÀI KHOẢN ";
manageAccounts($accounts);
}

function nhantb() {global $bai, $vitri, $accounts;
$accounts[$vitri]['fail'] = $bai;
manageAccounts($accounts);}



$api1 = "2." . date("Ymd") . ".00.00";




















$vovoi="COOKIE";
date_default_timezone_set("Asia/Ho_Chi_Minh");
$accounts = [];
$lines = file("tkgo.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach ($lines as $line) {
$parts = explode('|', $line);
$name = strtolower(trim($parts[2] ?? 'no_name'));
$ckcoki = $parts[4];
if ($ckcoki === "TRUA THEM COKIE") {$baodi="TR THEM";}
elseif ($ckcoki === "TRUA CO KENH") {$baodi="TRUA CO";} else {$baodi="ONLINE";}


$accounts[] = [
'name'      => $name,
'success'   => 0,
'fail'      => 0,
'dalam'     => 0,
'money'     => 0,
'baodi'     => $baodi,
'time'      => date("d/m : H:i"),];}
$caigiday="TRƯA KIẾM ĐỰOC ĐỒNG NÀO ";
manageAccounts($accounts);


////cxb
while (1) {

////////////cux
$filetup = file("tkgo.txt", FILE_IGNORE_NEW_LINES);
$vitri = -1; while (1) {$vitri++;
$acc       = $accounts[$vitri];
$acten  = $acc['name'];
if ($acten == false) {break;}


$tach = explode('|', $filetup[$vitri]);
$idyou   = $tach[4];
    if ($idyou === "TRUA THEM COKIE") {echo"$acten TRUA THEM COKIE\r";sleep(2);mothai();continue;}
elseif ($idyou === "TRUA CO KENH")   {echo"$acten KENH YOUTUBE TRUA THEM\r ";sleep(2);mothai();continue;}



$token   = $tach[0];
$user    = $tach[1];
$xgo     = $tach[5];
$authu   = $tach[8];
$cokitup = $tach[9];







///zx
while (1) {$mi=0;
//// cv
while (1) {$mi++;$tsmchon='';
$uka = "nvtup.py";
$tsm = tsm();
$jobtup = jobtup ();
    if ($jobtup === "KHONG TON TAI") {echo"KHONG TON TAI\n";exit;}
elseif ($jobtup === "DA GIOI HAN") {echo "DA GIOI HAN\n";exit;}
elseif ($jobtup === "HET JOB") {echo "DA HET JOB\r";sleep(10);mothai();
if ($mi > 1) {break;}
continue;}
break;} ////cv


/// thoat vong lap job tong de chay tk khac
if ($mi > 1) {break;}



$loaijob  = $jobtup['ketqua'];
$video    = $jobtup['video'];
$datanhan = $jobtup['danhan'];
$databao  = $jobtup['dabao'];

echo "CÓ JOB $loaijob\r";sleep(3);

if ($loaijob === "DANG KY") {
$linkweb = $jobtup['link'];
$tsmchon = 2;
$tsm05   = tsmtup();
$dangky = dangky();
if ($dangky === "KENH NAY LOI") {baotup();continue;}
$pama = $dangky['pama'];
$kenh = $dangky['kenh'];
$tsmchon = 3;
$tsm92   = tsmtup();
$dangky1 = dangky1();
if ($dangky1 === "COOKIE DIE") {baotup();continue;}
if ($dangky1 === "DANG KY LOI") {baotup();continue;}
$bao="ĐĂNG KÝ KÊNH THÀNH CÔNG";}





elseif ($loaijob === "COMMEN") {
$binhluan  = $jobtup['binhluan'];
$tsmchon = 3;
$tsm92   = tsmtup();
$comen = commen ();
if ($comen === "KENH NAY LOI") {baotup();continue;}
if ($comen === "KHONG CO CHO BL") {baotup();continue;}
if ($comen === "COOKIE DIE") {exit;}
if ($comen === "COMMEN THAT BAI") {baotup();continue;}
$bao="COMMENTS THÀNH CÔNG";}

echo "$bao\r";sleep(3);mothai();


$tienxu = nhantup();
if ($tienxu === "THAT BAI") {echo "NHAN THAT BAI\r";baotup();sleep(2);mothai();
$bai++;nhantb();continue;}
$thanhcong++;
goitc();sleep(10);


} ////zx







} //// cux



} ////cxb
