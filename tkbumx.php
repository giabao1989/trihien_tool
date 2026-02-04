while (1) { $tbon = 1; chutnang($tbon);
$chon = (int) input("MỜI BẠN CHỌN CHỨC NĂNG ");clear();
////////////// 1 \\\\\\\\\\\\\\\\\
if ($chon == 1) {
$tsm98    = [$a1, $a2, $a3, $a4, $a6];echo"$hho";
$gmai1    = input("Nhập email");clear();echo"$hho";
$matkhau  = input("Nhập mật khẩu");clear();echo"$hho";
$token = tkvmk();
if ($token === "SAI TAI KHOAN HOAC MAT KHAU") {echo"$token\r";sleep(2);clear();continue;}
luuthu();echo"ĐÃ LUU TÀI KHOẢN\r";sleep(2);clear();continue;} //////chon1
elseif ($chon == 2) {xoa_tk_hoi('tkvmk.txt');continue;} ////chon2
elseif ($chon == 3) {xoa_het();continue;} ////chon3
elseif ($chon == 4) {xoa_tk_hoi('tkvmk.txt');continue;} ////chon4
$xemgmai = xemgmai();
if ($xemgmai === "DA XOA FILE" || $xemgmai === "KHONG CO FILE") {continue;}
break;
clear();} ////while





$tkchay = chontkchay();
$tkchay1 = explode('|', $tkchay)[0];
echo "\033[38;5;208mBAN DA CHON TK BMUX $tkchay1\033[0m\n";
sleep(2); clear();




while (1) {$chonn = null;$dong=null;
$tbon = 2;
chutnang($tbon);
$chonn = (int) input("MỜI BẠN CHỌN CHỨC NĂNG ");clear();
if ($chonn == 4) {$xemcoki = xemcoki();
if ($xemcoki === "KHONG CO FILE" || $xemcoki === "DA XOA FILE") {continue;}break;}
if ($chonn == 1 || $chonn == 2 || $chonn == 3) {
if ($chonn == 1) {$ke0="NHAP COOKIE FACEBOOK ( THOAT BAM Y )";}
if ($chonn == 2) {$ke0="NHAP LAI COOKIE FACEBOOK ( KHONG SUA BAM Y )";}
if ($chonn == 3) {nhap_cookie();continue;}
while (1) {
$okie = nhap_cookie();
if ($okie === "CHON THOAT") {break;}
if ($okie === "COOKIE SAI") {continue;}
$cookie = $okie['cookie'];
$uid    = $okie['uid'];
$dong   = $okie['dong'];
$fb14 = "Cookie: $cookie";
$uta = user_gen();
$fb2 = "user-agent: $uta";
$tsm21  = [$fb1, $fb2, $fb3, $fb4, $fb14];
$r=fb();
if ($r==="DIE COOKIE"||$r==="LOI NHE"||$r==="CHECKPOI"){
echo "$r\n";sleep(2); clear(); continue;}
$tenfb=$r['tt'];
if ($chonn == 1) {
luucoki();
echo"DA LUU COOKIE [ $tenfb ] VAO FILE \n";sleep(2);clear();}
if ($chonn == 2) {
$suacoki = file($tkchay1.'.txt', FILE_IGNORE_NEW_LINES);
$suacoki[$dong] = "$tenfb|$cookie";suacoki();
echo"DA LUU LAI COOKIE [ $tenfb ] VAO FILE \n";sleep(2);clear();
break;}
continue;} //// while
} ///chonn123
continue;} /// while tong
