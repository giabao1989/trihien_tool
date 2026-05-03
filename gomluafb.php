













///// phan cua thong tin sua nhap lai cooke
function rainbow($text){
$colors = ["\033[1;31m","\033[1;33m","\033[1;32m","\033[1;36m","\033[1;34m","\033[1;35m"];
$i = 0; $out = "";
for($j=0;$j<strlen($text);$j++){
$out .= $colors[$i%count($colors)].$text[$j];
$i++;
}
return $out."\033[0m";
}
function dstt () {
cc(rainbow("[ 1 ] XEM CO BAO NHIEU FACEBOOK\n"));
cc(rainbow("[ 2 ] SUA COOKIE TUNG TAI KHOAN\n"));
cc(rainbow("[ 3 ] XOA HET COOKIE FACEBOOK\n"));
cc(rainbow("[ 4 ] XOA COOKIE FACEBOOK THEO MANG\n"));
cc(rainbow("      VAO TOOL BAM ENTER\n\n"));
}








function randColor(){
$colors = [
"\033[1;31m", // đỏ
"\033[1;32m", // xanh lá
"\033[1;33m", // vàng
"\033[1;34m", // xanh dương
"\033[1;35m", // tím
"\033[1;36m"  // cyan
];
return $colors[array_rand($colors)];
}




function xemtk() {global $choncn;
$taikk3 = explode("\n", @file_get_contents('facebook.txt'));
if (!$taikk3[0]) {return "TRUA_CO";}

$vvi = -1;
while (1) {$vvi++;
$taikk2 = $taikk3[$vvi];
$taikk1 = explode('|', $taikk2)[1];
if ($taikk1 == false) {$mii = $vvi;break;}
$taik = explode('|', $taikk2)[2];
$ff = "[ $vvi ] $taikk1 | $taik\n";
cc(randColor().$ff."\033[0m");
}




if ($choncn == 2) {
while (1) {
echo "KHONG SUA [ Y ] HOAC [ ENTER ]\n";
$chonsua = input("CHON TAI KHOAN DE SUA");
if ($chonsua == "y" || $chonsua == "y" || $chonsua == '') {return "KHONG_SUA";}
elseif ($chonsua == $mii || $chonsua > $mii) {continue;}
if (!ctype_digit($chonsua) || ($chonsua !== "0" && preg_match('/^0+/', $chonsua))) {
echo "\033[1;31mKHONG NHAP 0 O DAU (01 ❌) - NHAP SO NGUYEN\033[0m\n";
continue;
}



clear();
$taikk2 = $taikk3[$chonsua];
$id = explode('|', $taikk2)[0];
$uid = explode('|', $taikk2)[1];
$name = explode('|', $taikk2)[2];
while (1) {
echo "THOAT SUA [ Y ] HOAC [ EMTER ]\n";
$cookie = input("NHAP LAI COOKIE $name");
if ($cookie == "y" || $cookie == "Y" || $cookie == '') {return "KHONG_SUA";}
$chek = explode(';', explode('c_user=', $cookie)[1])[0];
if ($chek === $uid) {
$tongki = "$id|$uid|$name|$cookie";
return ['chonsua' => $chonsua, 'tongki' => $tongki];}
continue;} //// while1
break;} // while
} ////2



if ($choncn == 4) {
while (1) {
echo "KHONG XOA [ Y ] HOAC [ ENTER ]\n";
$chonsua = input("CHON TAI KHOAN DE XOA");
if ($chonsua == "y" || $chonsua == "y" || $chonsua == '') {return "KHONG_XOA";}
elseif ($chonsua == $mii || $chonsua > $mii) {continue;}
if (!ctype_digit($chonsua) || ($chonsua !== "0" && preg_match('/^0+/', $chonsua))) {
echo "\033[1;31mKHONG NHAP 0 O DAU (01 ❌) - NHAP SO NGUYEN\033[0m\n";
continue;}
return $chonsua;
} ///while
} //)4
}












//// tong
while (true) {
$tsm1 = heard1();
////////////////////////////////
$vi = -1; while (1) {$vi++;
$dstk = listfb();
if ($dstk === "DA_HET") {break;}
$id   = $dstk['id'];
$uid  = $dstk['uid'];
$name = $dstk['name'];
//////////////////////////////////////////////////////////
$vvi = -1;while (1) {$vvi++;
$taikk3 = explode("\n", @file_get_contents('facebook.txt'));
$taikk2 = $taikk3[$vvi];
$taikk1 = explode('|', $taikk2)[1];
if ($taikk1 == false) {break;}
if ($taikk1 == $uid)  {break;}
continue;}
if ($taikk1 == $uid)  {continue;}
//////////////////////////////////////////////////////////
$nhapki = nhapcoki();
if ($nhapki === "THOAT_NHAP") {break;}
if ($nhapki === "BO_QUA")     {continue;}
$cookie = $nhapki['cokie'];
echo "\033[1;32mDA LUU COOKIE TK \033[1;33m$name \033[1;32mVAO FILE\033[0m\n";sleep(2);clear();
$luucoki = "$id|$uid|$name|$cookie";
tONG();
continue;}
//////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////
while (1) {$choncn = null;
$hhoo = explode("\n", @file_get_contents('facebook.txt'));
if (!$hhoo[0]) {break;}
dstt();
$choncn = input("(MOI BAN CHON )");
if ($choncn == '') {clear();break;}
$hhu = xemtk();
if ($hhu === "TRUA_CO") {break;}
if ($hhu === "KHONG_SUA") {continue;}
if ($hhu === "KHONG_XOA") {continue;}
if ($choncn == 1) {continue;}
if ($choncn == 2) {clear();
$index = $hhu['chonsua'];
$tongki = $hhu['tongki'];
$luucoki = explode("\n", @file_get_contents('facebook.txt'));
$luucoki[$index] = $tongki;tong();continue;}
if ($choncn == 3) {unlink('facebook.txt');break;}
if ($choncn == 4) {
$luucoki = explode("\n", trim(@file_get_contents('facebook.txt')));
unset($luucoki[$hhu]);tong();
continue;}
break;}
clear();
$hho = explode("\n", @file_get_contents('facebook.txt'));
if (!$hho[0]) {continue;}
break;} //// tong
