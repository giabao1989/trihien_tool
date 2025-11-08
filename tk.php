while (true) {


echo "[ 1 ] NHẬP VÀ THÊM TAÌ KHOAN GOLIKE\n";
echo "[ 2 ] SỬA LẠI AUTHUZATION GOLIKE\n";
echo "[ 3 ] THOAT PHAN CHON NHAP\n\n";


echo "CHON DI BAN : ";
$tongchon = trim(fgets(STDIN));



$uka = "tk.py";


if ($tongchon == 1 || $tongchon == 2) {
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




if ($tongchon == 2) {
$nhuthenao = suatkgo ();
if ($nhuthenao === "KHONG SUA NUA") {echo"$nhuthenao\n";sleep(2);clear();break;}
elseif ($nhuthenao === "BAN DA NHAP SAI") {echo"$nhuthenao\n";sleep(2);clear();break;}
$token = $nhuthenao['token'];
$user  = $nhuthenao['user'];
$cait  = $nhuthenao['cait'];
$luulai= $nhuthenao['luulai'];
$nhapu = $nhuthenao['nhapu'];
} //// tongchon2






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

if ($tongchon == 2) {
echo"DA SUA AUTHUZATION $tenthat VAO FILE\n";
$chonnhe="2";
$sualaigo = explode("\n", @file_get_contents('filetk.txt'));
$sualaigo[$nhapu]="$luulai|";sleep(2);
filetk();
break;}
} ///// xitik 1
} ////while
$tongchon='';} ////tongchon1
clear();



$fui = explode("\n", @file_get_contents('filetk.txt'));
$fui1=$fui[0];
$fui2=explode('|', $fui1)[0];
if ($fui2 == false) {continue;}
break;
} /// vong lap tong
