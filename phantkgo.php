


function xemtk () {
$tkgo = file('tkgo.txt', FILE_IGNORE_NEW_LINES);
if (empty($tkgo[0])) return "KHONG CO TK NAO";
foreach ($tkgo as $i => $tk) {
if (!$tk) return "Đã hết tk";
$arr = explode('|', $tk);
if (empty($arr[0])) continue; // check authu
echo "$i $arr[2]\n"; // in tên
}}




while (1) {
echo "[ 1 ] THEM AUTHU GOLOKI\n";
echo "[ 2 ] SUA  AUTHU GOLOKI ( THEO MÃNG )\n";
$bamchon = input("MOI BAN CHON : ");clear();



if ($bamchon == 1 || $bamchon == 2) {
///////// 1 la nhap va them tk golike

if ($bamchon == 2) {
$xemdi = xemtk();
if ($xemdi === "KHONG CO TK NAO") {exit;}
echo"======================================\n\n";
$chonso = input("CHON TAI KHOAN DE SUA AUTHU : ");} ////bamchon 2


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
echo "$id | $name | $emai | $uname | $coi\n";

if ($bamchon == 1) {$chonsua = 1;tong();}
elseif ($bamchon == 2) {
$suathu[$chonso] = "$token|$user|$name";
$chonsua = 2;tong();break;}



} /////while




} /// bamchon 1 2















}



