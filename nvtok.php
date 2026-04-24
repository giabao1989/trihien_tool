








function toktc() {global $thanhcong, $accounts, $vitri, $tienxu, $baodi, $caigiday, $dalam;
$accounts[$vitri]['success'] = $thanhcong;
$accounts[$vitri]['money'] += (int)$tienxu;
$baodi = "ONLINE";
$accounts[$vitri]['baodi'] = $baodi;
$accounts[$vitri]['dalam'] = $dalam;
$accounts[$vitri]['time'] = date("d/m : H:i");
$caigiday="TỔNG TIỀN : ";
manageAccounts($accounts);}

function toktb() {global $bai, $vitri, $accounts;
$accounts[$vitri]['fail'] = $bai;
manageAccounts($accounts);}




function tokac () {global $url, $tsm;
$url = "https://gateway.golike.net/api/tiktok-account";
$goi = get_url($url,$tsm)['data']['data'];
$c1="\033[1;33m"; $c2="\033[1;32m"; $c3="\033[1;36m"; $nc="\033[0m";
while(1){
$pad=function($t,$l){return $t.str_repeat(' ',$l-mb_strlen($t,'UTF-8'));};
$m1=$m2=$m3=0;
foreach($goi as $k=>$v){
$m1=max($m1,mb_strlen($k,'UTF-8'));
$m2=max($m2,mb_strlen($v['id'],'UTF-8'));
$m3=max($m3,mb_strlen($v['nickname'],'UTF-8'));}
echo "\n";
foreach($goi as $k=>$v){
echo "{$c1}[".$pad($k,$m1)."]{$nc} ".
"{$c2}".$pad($v['id'],$m2+2)."{$nc}|".
"{$c3}".$pad($v['nickname'],$m3+2)."{$nc}|".
$v['unique_username']."\n";}
echo "\n"; flush();
$a = array_map('trim', explode(',', input("Chọn: (ví dụ 1,2,3,)")));
// check trùng
if(count($a) != count(array_unique($a))){
echo "Trùng số, nhập lại!\n";sleep(2);clear();
continue;}
$d=[];$ok=1;
foreach($a as $i){
if(!isset($goi[$i])){$ok=0;break;}
$d[]=[
'stt'=>$i,
'id'=>$goi[$i]['id'],
'nickname'=>$goi[$i]['nickname'],
'user'=>$goi[$i]['unique_username']];}
if($ok) return $d;
echo "Sai, nhập lại!\n";sleep(2);clear();}}
function jobtok() {global $tsm, $url, $idtok;
$url = "https://gateway.golike.net/api/advertising/publishers/tiktok/jobs?account_id=".$idtok."&data=null";
$goi = get_url($url, $tsm)['data'];['data'];
$id=$goi['lock']['ads_id'];
if (!$id) return "HET JOB";
$ozi=$goi['lock']['object_id'];
$type=$goi['lock']['type'];
$link=$goi['data']['link'];
$dabao = [
"description" => "Tôi đã làm Job này rồi",
"users_advertising_id" => $id,
"type" => "ads",
"provider" => "tiktok",
"fb_id" => $idtok,
"error_type" => 6];
$dabao1 = [
"ads_id" => $id,
"object_id" => $ozi,
"account_id" => $idtok,
"type" => $type];
if ($type == "follow" || $type == "like") {
$datau = [
"ads_id" => $id,
"account_id" => $idtok,
"async" => true,
"data" => null];
$idu = "$idtok$id";
return ['idhop' => $idu, 'oz' => $ozi, 'link' => $link, 'datanhan' => $datau, 'dabao' => $dabao, 'dabao1' => $dabao1, 'boik' => $type];
} else {
return ['loikhac' => 'LOI KHAC', 'dabao' => $dabao, 'dabao1' => $dabao1];}
}




function chekfolo() {global $link;
$opts = [
"http" => [
"method" => "GET",
"header" =>
"User-Agent: Mozilla/5.0 (Linux; Android 10)\r\n" .
"Accept: text/html\r\n" .
"Accept-Language: en-US,en;q=0.9\r\n"]];
$context = stream_context_create($opts);
$linkloi = @file_get_contents($link, false, $context);
$folol = explode('"', explode('followingCount":"', $linkloi)[1])[0];
$folod = explode('"', explode('followerCount":"', $linkloi)[1])[0];
if ($folol === "" && $folod === "") {
return "KHONG TON TAI";}
if (strpos($linkloi, 'privateAccount":true,') == true) {
return "RIENG TU";}
}
function teke() {global $link;
system("termux-open-url $link");}
function tenut () {global $ozid;
shell_exec('am start -a android.intent.action.VIEW -d "snssdk1233://user/profile/'.$ozid.'"');sleep(5);}

function sln() {global $tikten;
$tui = "https://www.tiktok.com/@" . $tikten;
$opts = [
"http" => [
"method" => "GET",
"header" =>
"User-Agent: Mozilla/5.0 (Linux; Android 10)\r\n" .
"Accept: text/html\r\n" .
"Accept-Language: en-US,en;q=0.9\r\n"]];
$context = stream_context_create($opts);
$minh = @file_get_contents($tui, false, $context);
$sln = (int) explode(',', explode('followingCount":', $minh)[1])[0];
return $sln;
}





function nhantok() {global $data, $tsm, $url, $tiena, $tienb;
$url = "https://gateway.golike.net/api/advertising/publishers/tiktok/complete-jobs";
$goi = post_url($url, $tsm, $data)['data'];['data'];
$mass1 = $goi['message'];
$mass = explode(' ', explode('Số jobs đã làm trong ngày ', $mass1)[1])[0];
if ($mass < 0 || $mass == 0 || $mass == false) {return "LOI NHAN";}
$tiena = $goi['data']['prices'];
$tienb += $tiena;
return ['tiena' => $tiena, 'tienb' => $tienb, 'mass' => $mass];}
function baotok() { global $url, $data, $dabao, $dabao1, $tsm;
$data = $dabao;
$url = "https://gateway.golike.net/api/report/send";
post_url($url, $tsm, $data)['data'];
$data = $dabao1;
$url = "https://gateway.golike.net/api/advertising/publishers/tiktok/skip-jobs";
$goi1 =   post_url($url, $tsm, $data)['data'];}
function chantok () {global $chantok, $idhop;
$chanlai = in_array($idhop, $chantok);
if ($chanlai == true) {return "DA LAM ROI";}}











$tienb = 0;
$filetup = file("tkgo.txt", FILE_IGNORE_NEW_LINES);
$tach = explode('|', $filetup[$chontai]);
$token   = $tach[0];
$user    = $tach[1];
$nago    = $tach[2];


$tsm = tsm();
$uka = "tokac.py";
$dachon = tokac();
$vovoi="MẢNG";
date_default_timezone_set("Asia/Ho_Chi_Minh");
$accounts = [];
foreach ($dachon as $tk) {
$accounts[] = [
'name'    => strtolower($tk['user']),
'success' => 0,
'fail'    => 0,
'dalam'   => 0,
'money'   => 0,
'baodi'   => $tk['stt'],
'time'    => date("d/m : H:i"),];}
$caigiday="$nago ";
manageAccounts($accounts);





/////////////////////////////////////////////
$vitri = 0;
$acten = $dachon[$vitri]['nickname'];
$idtok = $dachon[$vitri]['id'];
$tikten = $dachon[$vitri]['user'];
echo ">$acten | $idtok $tikten\n";
$thanhcong = $accounts[$vitri]['success'];
$bai       = $accounts[$vitri]['fail'];



while (1) {
while (1) {
$job = jobtok();

if ($job === "HET JOB") {echo "HET JOB\r";
$het1++;
if ($het1 >= 100) {break;}
sleep(5);mothai();continue;}
$het1 = 0;
break;}




if ($het1 >= 100) {$het1 = 0;break;}




$dabao = $job['dabao'];
$dabao1 = $job['dabao1'];
$loikhac = $job['loikhac'];
$boik = $job['boik'];
if ($loikhac === "LOI KHAC") {baotok();continue;}












$link = $job['link'];
if ($boik === "follow") {
$chek = chekfolo();
if ($chek === "KHONG TON TAI" || $chek === "RIENG TU") {
echo "$chek\r";baotok();sleep(2);mothai();continue;}
} else {echo"JOB KHONG HO TRO\r";baotok();sleep(2);mothai();continue;}



$idhop = $job['idhop'];
$baocao = chantok();
if ($baocao === "DA LAM ROI") {echo"$baocao\r";baotok();sleep(2);mothai();continue;}



$data = $job['datanhan'];
$ozid = $job['oz'];
$chantok[]=$idhop;


if ($boik === "follow") {
$slg2 = sln();
tenut();



$zi = 0;
while (1) {$zi++;
$slg3 = sln();
if ($slg3 > $slg2) {break;}
if ($zi > 5 || $zi == 5) {break;}
echo "TRUA FOLO [ $zi ]\n";sleep(2);
continue;}
}



if ($zi > 5 || $zi == 5) {$zi=0;$nha++;
if ($nha >= 5) {$nha=0;break;}
continue;}
$nha=0;





echo "FOLO THANH CONG\r";sleep(5);mothai();
$nhantok = nhantok();
if ($nhantok === "LOI NHAN") {
$bai++;toktb();
baotok();sleep(2);continue;}
$tienxu = $nhantok['tiena'];
$dalam  = $nhantok['mass'];
$thanhcong++;toktc();
sleep(5);
if ($mass >= 100) {break;}
}

