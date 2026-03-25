






/*
function xemtk () {global $bamchon;
$tkgo = file('tkgo.txt', FILE_IGNORE_NEW_LINES);
if (!isset($tkgo[0]) || trim($tkgo[0]) === '') return "KHONG CO TK NAO";
foreach ($tkgo as $i => $tk) {
if (!$tk) continue;
$arr = explode('|', $tk);
if (empty($arr[0]) || empty($arr[2]) || empty($arr[3])) continue;
if ($bamchon == 2 || $bamchon == 4) {echo "[ TK SO $i ] $arr[2]\n";}
elseif ($bamchon == 3) {echo "[ TK SO $i ] $arr[2] [ TKDN ] $arr[3]\n";}
}return ['somay' => count($tkgo)];}
*/



function xemtk () {global $bamchon;
$tkgo = file('tkgo.txt', FILE_IGNORE_NEW_LINES);
if (!isset($tkgo[0]) || trim($tkgo[0])==='') return "KHONG CO TK NAO";
foreach ($tkgo as $i=>$tk){
if(!$tk) continue;
$arr = explode('|',$tk);
if (empty($arr[0])||empty($arr[2])||empty($arr[3])) continue;
if ($bamchon==2||$bamchon==4) echo "\033[33m[ TK SO $i ]\033[0m \033[32m$arr[2]\033[0m\n";
elseif ($bamchon==3) echo "\033[33m[ TK SO $i ]\033[0m \033[32m$arr[2]\033[0m \033[36m[ TKDN ]\033[0m \033[31m$arr[3]\033[0m\n";
}return ['somay'=>count($tkgo)];}





function xoatkgo() {global $soxoa;
$tkgo = file('tkgo.txt', FILE_IGNORE_NEW_LINES);
if (isset($tkgo[$soxoa])) {
unset($tkgo[$soxoa]);
file_put_contents('tkgo.txt', implode(PHP_EOL, $tkgo) . PHP_EOL);
}}







while (1) {$bamchon=null;
echo "\033[36m=======================================\033[0m\n";
echo "\033[33m[1]\033[0m THEM AUTHU GOLOKI\n";
echo "\033[33m[2]\033[0m SUA AUTHU GOLOKI (THEO MANG)\n";
echo "\033[33m[3]\033[0m XEM CO BAO NHIEU TK GOLOKI\n";
echo "\033[33m[4]\033[0m BAN MUON XOA TK GOLOKI NAO\n";
echo "    \033[31mVAO TOOL BAM ENTER\033[0m\n";
echo "\033[36m=======================================\033[0m\n\n";
$bamchon = input("MOI BAN CHON : ");clear();





if ($bamchon == 1 || $bamchon == 2) {
///////// 1 la nhap va them tk golike

if ($bamchon == 2) {
$xemdi = xemtk();
if ($xemdi === "KHONG CO TK NAO") exit;
$raso  = $xemdi['somay'];
echo "\033[36m======================================\033[0m\n\n";
$chonso = trim(input("\033[33mCHON TAI KHOAN DE SUA AUTHU\033[0m (\033[31mENTER THOAT\033[0m) : "));
clear();

// enter hoặc rỗng
if ($chonso === '') continue;
// không phải số
if (!is_numeric($chonso)) continue;
// ép kiểu
$chonso = (int)$chonso;
// vượt giới hạn
if ($chonso >= $raso) continue;
} ////bamchon 2


while (true) {
$nhapthu = nhapthu();
    if ($nhapthu === "THOAT") {break;}
elseif ($nhapthu === "AUTHU SAI") {echo "AUTHU GOLIKE SAI NHAP LAI\r";sleep(1);clear();continue;}
$token = $nhapthu['authu'];
$user  = $nhapthu['user'];
$tsm = tsm();
$uka = "ntk.py";
$urlme = urlme();
if ($urlme === "LOI NHE") {echo "LOI NHE\n";sleep(1);clear();continue;}
$id = $urlme['id'];
$name = $urlme['name'];
$emai = $urlme['emai'];
$uname = $urlme['uname'];
$coi = $urlme['coi'];
//echo "$id | $name | $emai | $uname | $coi\n";sleep(2);clear();
echo "\033[33m$id\033[0m | \033[32m$name\033[0m | \033[36m$emai\033[0m | \033[35m$uname\033[0m | \033[31m$coi\033[0m\n";
sleep(2); clear();

if ($bamchon == 1) {$luuthu = "$token|$user|$name|$uname|id";
$chonsua = 1;tong();continue;}
elseif ($bamchon == 2) {$suathu[$chonso] = "$token|$user|$name|$uname|$id";
$chonsua = 2;tong();break;}
continue;} /////while

continue;} /// bamchon 1 2





if ($bamchon == 3) {xemtk();continue;}




if ($bamchon == 4) {
$kqx = xemtk();
if ($kqx === "KHONG CO TK NAO") {continue;}
$xora = $kqx['somay'];
echo "\033[36m======================================\033[0m\n\n";
$soxoa = trim(input("\033[33mCHON TAI KHOAN DE XOA\033[0m (\033[31mENTER THOAT\033[0m) : "));
clear();


// enter hoặc rỗng
if ($soxoa === '') continue;
// không phải số
if (!is_numeric($soxoa)) continue;
// ép kiểu
$soxoa = (int)$soxoa;
// vượt giới hạn
if ($soxoa >= $xora) continue;
xoatkgo();continue;} //// bam chon 4




$cktk = xemtk ();
if ($cktk === "KHONG CO TK NAO") {continue;}

break;} ///// while tong




