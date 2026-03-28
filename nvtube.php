$jobdu = [];
$block = [];














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










function gioihan() {global $baodi, $vitri, $accounts;
$accounts[$vitri]['baodi'] = $baodi;
manageAccounts($accounts);}


function jobdu() {global $idyou;
date_default_timezone_set("Asia/Ho_Chi_Minh");
$koi = date("HdmY");
return "$idyou$koi";}


function jobtuplr() {global $idyou, $idlam, $block;
$tong2id = $idyou.$idlam;
if (in_array($tong2id, $block)) {
return "DA LAM ROI";}$block[] = $tong2id;}


function lay2tuCuoi(){global $name3;
$arr = preg_split('/\s+/', trim($name3));
return implode(' ', array_slice($arr, -2));
}




function goiecho() {global $tienxu, $acten, $vitri, $mui, $loaijob;
    if ($mui == 1) {echo "\033[1;31m$acten TRƯA THÊM COKIE [ $vitri ]\033[0m\r";}
elseif ($mui == 2) {echo "\033[1;33m$acten KÊNH YOUTUBE TRƯA THÊM [ $vitri ]\033[0m\r";}
elseif ($mui == 3) {echo "\033[1;35m$acten ĐÃ LÀM ĐỦ 25 JOB [ $vitri ]\033[0m\r";}
elseif ($mui == 4) {echo "\033[1;31m$acten ĐÃ HẾT JOB [ $vitri ]\033[0m\r";}
elseif ($mui == 5) {echo "\033[1;36m$acten CÓ JOB $loaijob [ $vitri ]\033[0m\r";}
elseif ($mui == 6) {echo "\033[1;32m$acten ĐĂNG KÝ KÊNH THÀNH CÔNG [ $vitri ]\033[0m";}
elseif ($mui == 7) {echo "\033[1;34m$acten COMMENTS THÀNH CÔNG [ $vitri ]\033[0m";}
elseif ($mui == 8) {echo "\033[1;32m$acten NHẬN THÀNH CÔNG + $tienxu Đ [ $vitri ]\033[0m";}
}









$api1 = "2." . date("Ymd") . ".00.00";




















$vovoi="COOKIE";
date_default_timezone_set("Asia/Ho_Chi_Minh");
$accounts = [];
$lines = file("tkgo.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach ($lines as $line) {
$parts = explode('|', $line);
$name3 = strtolower(trim($parts[2] ?? 'no_name'));
$name  = lay2tuCuoi();
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
    if ($idyou === "TRUA THEM COKIE") {$mui = 1; goiecho();$mui = '';sleep(2);mothai();continue;}
elseif ($idyou === "TRUA CO KENH")    {$mui = 2; goiecho();$mui = '';sleep(2);mothai();continue;}

$chaydu = jobdu();

$baodu = in_array($chaydu, $jobdu);
if ($baodu == true) {$mui = 3; goiecho();$mui = '';sleep(2);mothai();continue;}




$thanhcong = $accounts[$vitri]['success'];
$bai       = $accounts[$vitri]['fail'];
$baodi     = $accounts[$vitri]['baodi'];



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
    if ($jobtup === "KHONG TON TAI") {echo"KHONG TON TAI\r";break;}
elseif ($jobtup === "DA GIOI HAN")   {break;}
elseif ($jobtup === "HET JOB") {$mui = 4; goiecho();$mui = '';sleep(2);mothai();
if ($mi > 1) {break;}
continue;}
break;} ////cv




/// thoat vong lap job tong de chay tk khac
if ($mi > 1) {break;}
    if ($jobtup === "KHONG TON TAI") {break;}
elseif ($jobtup === "DA GIOI HAN")   {
$baodi = "GIOI HAN";gioihan();
$chaydu = jobdu();
$jobdu[] = $chaydu;break;}




$loaijob  = $jobtup['ketqua'];
$video    = $jobtup['video'];
$datanhan = $jobtup['danhan'];
$databao  = $jobtup['dabao'];
$idlam    = $jobtup['idlam'];


$dalamr = jobtuplr();
if ($dalamr === "DA LAM ROI") {baotup();continue;}





$mui = 5; goiecho();$mui = '';sleep(3);

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
$mui = 6; goiecho();$mui = '';}





elseif ($loaijob === "COMMEN") {
$binhluan  = $jobtup['binhluan'];
$tsmchon = 3;
$tsm92   = tsmtup();
$comen = commen ();
if ($comen === "KENH NAY LOI") {baotup();continue;}
if ($comen === "KHONG CO CHO BL") {baotup();continue;}
if ($comen === "COOKIE DIE") {exit;}
if ($comen === "COMMEN THAT BAI") {baotup();continue;}
$mui = 7; goiecho();$mui = '';}

sleep(3);mothai();


$tienxu = nhantup();
if ($tienxu === "THAT BAI") {echo "$acten NHAN THAT BAI\r";baotup();sleep(2);mothai();
$bai++;nhantb();continue;}
$mui = 8; goiecho();$mui = '';
$thanhcong++;
goitc();sleep(3);


} ////zx


} //// cux


updata();
} ////cxb
