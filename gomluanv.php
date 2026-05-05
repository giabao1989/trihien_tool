












function times() {
global $name, $tim, $delay, $delay1, $tienxu, $loa_job, $vitri;

$i = 0;

// mảng màu
$mau = ["0;31","0;32","0;33","0;34","0;35","0;36"];

if ($tim == 1) {
while (1) {
$i++;
if ($i > $delay) {mothai();break;}

$color = $mau[array_rand($mau)];
$hhp = "\033[".$color."m$name HET_JOB [ $i | $delay ] [ $loa_job | $vitri ]\033[0m\r";

cc($hhp);
sleep(1);
}
}

if ($tim == 2) {
while (1) {
$i++;
if ($i > $delay) {mothai();break;}

$color = $mau[array_rand($mau)];
$hhp = "\033[".$color."m$name NHAN DUOC $tienxu VND [ $i | $delay ] [ $vitri ]\033[0m\r";

cc($hhp);
sleep(1);
}
}

}




function bao_face() {global $vitri, $idm, $uid, $name, $luucoki, $loitong;
$luucoki = explode("\n", @file_get_contents('facebook.txt'));
$luucoki[$vitri]="$idm|$uid|$name|$loitong";
tong();}










function goitc() {global $email, $lance, $thanhcong, $accounts, $vitri, $tienxu, $baodi, $caigiday;
$accounts[$vitri]['success'] = $thanhcong;
$accounts[$vitri]['money'] += (int)$tienxu;
$baodi = "ONLINE";
$accounts[$vitri]['baodi'] = $baodi;
$accounts[$vitri]['time'] = date("d/m : H:i");
$caigiday="$email : $lance VND : TỔNG";;
manageAccounts($accounts);}
function cktb() {global $baodi, $vitri, $accounts;
$accounts[$vitri]['baodi'] = $baodi;
manageAccounts($accounts);}
function nhantb() {global $bai, $vitri, $accounts;
$accounts[$vitri]['fail'] = $bai;
manageAccounts($accounts);}
function updata() {global $accounts;
echo"KIEM TRA FILE\r";
$lines = file("tkgo.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$addedNew = false;
foreach ($lines as $line) {
$parts = explode('|', $line);
$name3 = strtolower(trim($parts[2] ?? 'no_name'));
$arr = preg_split('/\s+/', trim($name3));
$name = implode(' ', array_slice($arr, -2));
$ckcoki = $parts[3];
$yu = explode(';', explode('c_user', $ckcoki)[1])[0];
if ($yu == false) {$baodi = "OFF";} else {$baodi = "ONLINE";}
// Kiểm tra tài khoản đã tồn tại chưa
$exists = false;
foreach ($accounts as $acc) {
if ($acc['name'] === $name) {
$exists = true;break;}}
if (!$exists) {
$accounts[] = [
'name'      => $name,
'success'   => 0,
'fail'      => 0,
'dalam'     => 0,
'money'     => 0,
'baodi'     => $baodi,
'time'      => date("d/m : H:i"),];
echo "🆕 Đã thêm tài khoản mới: $name\r";sleep(2);mothai();
$addedNew = true;}}
// Nếu có tài khoản mới thì in lại bảng
if ($addedNew) {manageAccounts($accounts);}}








function fb2 () {global $tsm2, $uid;
$url   = "https://www.facebook.com";
$goi   = GOIGET($url, $tsm2)['html'];
$name  = explode('"', explode('USER_ID":"'.$uid.'","NAME":"', $goi)[1])[0];
$name = json_decode('"'.$name.'"');
if ($name == false) {return "LOI_NHE";}
$fb_sdg = explode('"}', explode('DTSGInitialData",[],{"token":"', $goi)[1])[0];
if ($fb_sdg == true) {return $fb_sdg;}
$fb_sdg1 = explode('"', explode('["DTSGInitData",[],{"token":"', $goi)[1])[0];
if ($fb_sdg1 == true) {return $fb_sdg;}
$fb_sdg2 = explode('"}', explode('async_get_token":"', $goi)[1])[0];
if ($fb_sdg2 == true) {return $fb_sdg;}
return "LAY_KHONG_RA";}
///////////////////////////////////////////////////
function fb3 () {global $cx_id, $uid, $id_job, $tsm3, $fb_dtsg;
$base = base64_encode("feedback:$id_job");
$docid = "24198888476452283";
$vaitim = '{"input":{"feedback_id":"'.$base.'","feedback_reaction_id":"'.$cx_id.'","feedback_source":"NEWS_FEED","actor_id":"'.$uid.'","client_mutation_id":"1","session_id":"","is_tracking_encrypted":true,"tracking":["{}"],"attribution_id_v2":"CometHomeRoot.react,comet.home,via_cold_start"},"useDefaultActor":false}';
$data = http_build_query([
'av' => $uid,
'__user' => $uid,
'fb_dtsg' => $fb_dtsg,
'variables' => $vaitim,
'doc_id' => $docid]);
sleep(rand(5,9));
$url = "https://www.facebook.com/api/graphql/";
$goi_raw = GOIPOST($url, $tsm3, $data);
if (!is_array($goi_raw) || !isset($goi_raw['data'])) {return "LAM_NV_LOI";}
$goi1 = substr(json_encode($goi_raw['data']), 0, 4000);
if (str_contains($goi1, '828281030927956') || str_contains($goi1, '601051028565049') || str_contains($goi1, '1501092823525282')) {return "CHECK_POI";}
if (str_contains($goi1, '1390008') || str_contains($goi1, '1404078')) {return "CHAN_TT";}
$chek = explode('"', explode('node":{"id":"'.$cx_id.'","localized_name":"', $goi1)[1])[0];
if ($chek == false) {return "LAM_NV_LOI";}}
///////////////////////////////////////////////////
function laycx () {global $type;
    if ($type === "LIKE" || $type === "like" || $type === "Like") {$loai = "1635855486666999";$incon = "👍";}
elseif ($type === "LOVE" || $type === "Love" || $type === "thả tim") {$loai = "1678524932434102";$incon = "❤️";}
elseif ($type === "Thương Thương" || $type === "THƯONG THƯƠNG") {$loai = "613557422527858";$incon = "🤗";}
elseif ($type === "HaHa" || $type === "Haha" || $type === "HAHA") {$loai = "115940658764963";$incon = "😆";}
elseif ($type === "WOW" || $type === "Wow" || $type === "wow") {$loai = "478547315650144";$incon = "😮";}
elseif ($type === "BUỒN" || $type === "Buồn" || $type === "Sad") {$loai = "908563459236466";$incon = "😢";}
elseif ($type === "ANGRY" || $type === "Angry") {$loai = "444813342392137";$incon = "😡";}
return ['loai' => $loai, 'incon' => $incon];}
///////////////////////////////////////////////////
function layid () {global $link;
$tsm = [
"user-agent: Mozilla/5.0",
"content-type: application/x-www-form-urlencoded"];
$data = "link=$link";
$url = "https://id.traodoisub.com/api.php";
$goi = GOIPOST($url, $tsm, $data)['data'];
$id  = $goi['post_id'];
if ($id == false) {return "LAY_LOI";}
return $id;}






function dutg($gio = 1){
static $end = null;
date_default_timezone_set("Asia/Ho_Chi_Minh");
if($end === null){
$end = strtotime("+$gio hour");}
if(time() >= $end){
return "DANG_NHAP_LAI";
}}











$delay  = input("NHAP TIME TIM JOB");
$delay1 = input("NHAN THANH CONG CHO BAO LAU LAY JOB");
clear();




$vovoi="COOKIE";
date_default_timezone_set("Asia/Ho_Chi_Minh");
$accounts = [];
$lines = file("facebook.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach ($lines as $line) {
$parts = explode('|', $line);
$name3 = strtolower(trim($parts[2] ?? 'no_name'));
$name  = lay2tuCuoi();
$ckcoki = $parts[3];

if ($ckcoki === "DIECOKI")  {$baodi="DIECOKI";}
if ($ckcoki === "CHECPOI")  {$baodi="CHECPOI";}
if ($ckcoki === "KHOA TK")  {$baodi="KHOA TK";}

else {$baodi = "ONLINE";}
$accounts[] = [
'name'      => $name,
'success'   => 0,
'fail'      => 0,
'dalam'     => 0,
'money'     => 0,
'baodi'     => $baodi,
'time'      => date("d/m : H:i"),];}
$caigiday="$email : $lance VND : TỔNG";
manageAccounts($accounts);








while (1) {

$filetup = file("facebook.txt", FILE_IGNORE_NEW_LINES);
$vitri = -1; while (1) {$vitri++;
$acc       = $accounts[$vitri];
$acten  = $acc['name'];
if ($acten == false) {break;}



$tach = explode('|', $filetup[$vitri]);


$thanhcong = $accounts[$vitri]['success'];
$bai       = $accounts[$vitri]['fail'];
$baodi     = $accounts[$vitri]['baodi'];


$idm   = $tach[0];
$uid    = $tach[1];
$name    = $tach[2];
$cookie   = $tach[3];

if ($cookie === "DIE_COKI")       {continue;}
if ($cookie === "CHECK_POI")      {continue;}
if ($cookie === "CHAN_TUONG_TAC") {continue;}

if ($baodi === "DIECOKI" || $baodi === "CHECPOI" || $baodi === "CHANTT") {$baodi="ONLINE";cktb();}





while (1) {$loa_job = 0;
$dutg = dutg(1);
if ($dutg === "DANG_NHAP_LAI") {
$ads3 = explode("\n", @file_get_contents('tongtk.txt'));
$ads2 = $ads3[0];
$taikhoan = explode('|', $ads2)[0];
$taikhoan = explode('|', $ads2)[1];
while (true) {
$tsm = heard();
$tokent = login ();
if ($tokent === "TOKEN_LOI") {continue;}
$token = $tokent['token'];
break;}}







while (1) {$loa_job++;
$tsm1 = heard1();
$job = get_job();
if ($job === "HET_JOB") {
if ($loa_job > 3) {mothai();break;}
$tim=1;times();continue;}
break;}
if ($loa_job > 3) {break;}



$i_d    = $job['id'];
$link   = $job['link'];
$type   = $job['type'];
$id_jobb = $job['take'];


$dem = strlen($id_jobb);
if(strpos($link, 'reel') == true) {$dem = 50;}
if ($dem > 40) {$dem = '';
$id_job = layid ();
if ($id_job === "LAY_LOI") {continue;}
} else {$id_job = $id_jobb;}

echo"$id_job\r";


$tsm6 = tsm();
$id_op = xac_nhan1();
if ($id_op === "NHAN_LOI") {continue;}




$tsm1 = heard1();
$xac_nhan2 = xac_nhan2();
if ($xac_nhan2 === "THAT_BAI") {continue;}









$io++;
$tsmchon = 1;
$tsm2 = heard2();
$fb_dtsg = fb2();
if ($fb_dtsg === "LOI_NHE") {
if ($io > 3) {$io = 0;
$baodi="DIECOKI";cktb();$loitong="DIE_COKI";bao_face();break;}
continue;}

if ($fb_dtsg === "LAY_KHONG_RA") {
if ($io > 3) {$io = 0;
$baodi="DIECOKI";cktb();$loitong="DIE_COKI";bao_face();break;}
continue;}


$io = 0;
$camsuc = laycx();
$cx_id  = $camsuc['loai'];
$incon  = $camsuc['incon'];


mothai();
echo "BAT DAU $type\r";sleep(3);
$tsmchon = 2;
$tsm3 = heard2();
$ketqua = fb3();
if ($ketqua === "CHECK_POI") {$baodi = "CHECPOI";cktb();$loitong="CHECK_POI";bao_face();break;}
if ($ketqua === "CHAN_TT")   {$baodi = "CHANTT";cktb()();$loitong="CHAN_TT";bao_face();break;}
if ($ketqua === "LAM_NV_LOI") {$hui = 1;}


$tsm6    = tsm();
if ($hui == 1) {bao_loi();$hui = '';$bai++;nhantb();continue;}

mothai();
echo "BAT DAU NHAN TIEN\r";sleep(3);mothai();

$tienxu = nhan_tien();
if ($tienxu === "NHAN_THAT_BAI") {$bai++;nhantb();bao_loi;continue;}
$thanhcong++;
goitc();
$tim=2;times();
updata();
}




















}
}

