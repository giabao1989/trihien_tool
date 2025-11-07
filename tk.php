
echo "[ 1 ] NHẬP VÀ THÊM TAÌ KHOAN GOLIKE\n";
echo "[ 2 ] SỬA LẠI AUTHUZATION GOLIKE\n";
echo "[ 3 ] THOAT PHAN CHON NHAP\n\n";

echo "CHON DI BAN : ";
$tongchon = trim(fgets(STDIN));



$uka = "tk.py";


if ($tongchon == 1) {
while (true) {

if ($tongchon == 1) {
echo "nhap authu golike : ";
$token = trim(fgets(STDIN));
if ($token == false) {break;}
}

if ($tongchon == 1) {
echo "NHAP USER_AGEN [1] RAND USER_ANGEN [2] : ";
$chonse = trim(fgets(STDIN));
if ($chonse == 1) {
echo "nhap user_angent : ";
$user = trim(fgets(STDIN));
if ($user == false) {break;}}
elseif($chonse == 2) {
$user = random_user_agent();}
elseif($chonse > 2 || $chonse == false) {exit;}}


if ($tongchon == 1) {
echo "nhap cat T : ";
$cait = trim(fgets(STDIN));
if ($cait == false) {break;}}




$xitik="1";
if ($xitik == 1) {
$urltok = urltong();
if ($urltok === "LOI ROI NHE") {exit;}
$tenthat = $urltok['tenthat'];
$tendn   = $urltok['tendn'];
$email   = $urltok['email'];



if ($tongchon == 1) {$chonnhe="1";
echo"DA LUU TAI KHOAN $tenthat VAO FILE\n";
filetk();sleep(2);clear();$chonnhe='';}

if ($tongchon == 2) {break;}


} ///// xitik 1
} ////while
$tongchon='';} ////tongchon1
clear();
