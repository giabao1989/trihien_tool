













function layds () {global $chonhap;

// màu
$do = "\033[31m";
$xanh = "\033[32m";
$vang = "\033[33m";
$xanhduong = "\033[34m";
$reset = "\033[0m";

$tkgo = file('tkgo.txt', FILE_IGNORE_NEW_LINES);
if (!isset($tkgo[0]) || trim($tkgo[0]) === '') return "KHONG CO TK NAO";
foreach ($tkgo as $i => $tk) {
if (!$tk) continue;
$arr = explode('|', $tk);
if (count($arr) < 5) continue;

if ($chonhap == 2 || $chonhap == 5) {
if ($arr[4] == "TRUA CO KENH") {$ui = "{$do}TRUA THEM{$reset}";
$toilai = "$arr[2]|$arr[3]|$arr[4]";}

if ($arr[4] == "TRUA THEM COKIE") {$ui = "{$vang}TRUA CO COOKIE{$reset}";
$toilai = "$arr[2]|$arr[3]|$arr[4]";} else {$ui = "{$xanh}DA CO COOKIE{$reset}";
$toilai = "$arr[2]|$arr[3]|$arr[4]|$arr[5]|$arr[6]|$arr[7]";}

echo "{$xanhduong}[ $i ]{$reset} $arr[2] | $arr[3] [ {$ui} ]\n";
} /// nhap 2
elseif ($chonhap == 3) {
echo "{$xanhduong}[ $i ]{$reset} $arr[2] | $arr[3]\n";
}}
return ['somay' => count($tkgo), 'toilai' => $toilai];
}


function lds () {
// màu
$do = "\033[31m";
$xanh = "\033[32m";
$vang = "\033[33m";
$xanhduong = "\033[34m";
$reset = "\033[0m";

$tkgo = file('tkgo.txt', FILE_IGNORE_NEW_LINES);
if (!isset($tkgo[0]) || trim($tkgo[0]) === '') return "KHONG CO TK NAO";
$i = -1; while (1) {$i++;
$afk = explode('|', $tkgo[$i]);
if (!isset($afk[$i])) break;;
$pp0 = $afk[0];
$pp1 = $afk[1];
$pp2 = $afk[2];
$pp3 = $afk[3];
$pp4 = $afk[4];
if ($pp4 == "TRUA CO KENH") {
echo "{$xanhduong}[ $i ]{$reset} $pp2 | $pp3 | {$do}TRUA CO KENH{$reset}\n";}
elseif ($pp4 == "TRUA THEM COKIE") {
echo "{$xanhduong}[ $i ]{$reset} $pp2 | $pp3 | {$vang}TRUA THEM COKI{$reset}\n";
} else {
echo "{$xanhduong}[ $i ]{$reset} $pp2 | $pp3 | {$xanh}DA CO COKI{$reset}\n";
}}

echo"\n";
$chon = input("MOI BAN CHON TK ( Y LÀ THOAT KHONG CHON NUA )");clear();
if ($chon === 'y' || $chon === 'Y') return "THOAT CHON";
if ($chon === '') return "NHAP LAI";
if (!is_numeric($chon)) return "NHAP LAI";
$chon = (int)$chon;
if ($chon >= $i) return "NHAP LAI";;
$afk = explode('|', $tkgo[$chon]);
$nn0 = $afk[0];
$nn1 = $afk[1];
$nn2 = $afk[2];
$nn3 = $afk[3];
$nn4 = $afk[4];
if ($nn4 == "TRUA THEM COKIE" || $nn4 == "TRUA CO KENH") {
$tonglai = "$nn0|$nn1|$nn2|$nn3";
return ['nno' => $nn0, 'nn1' => $nn1, 'chon' => $chon, 'tonglai' => $tonglai];
} else {return "DA CO ROI";}
}
















$uka = "nhapthu.py";
////tong
while (1) {$chonhap = '';
inra();
$chonhap = input("MỜI BẠN CHỌN");clear();
if ($chonhap == 2 || $chonhap == 3) {
while (1) {
$layds = layds ();echo"\n";
if ($layds === "KHONG CO TK NAO") {unlink('tkgo.txt');clear();break;}
$raso = $layds['somay'];
if ($chonhap == 2) {
$chonso = input("CHON TK DE SUA AUTHU GOLIKE ( Y KHONG SUA )");clear();}
if ($chonhap == 3) {
$chonso = input("CHON TK GOLIKE DE XOA ( Y KHONG XOA )");clear();}
if ($chonso === 'y' || $chonso === 'Y') break;
if ($chonso === '') continue;
if (!is_numeric($chonso)) continue;
// ép kiểu
$chonso = (int)$chonso;
// vượt giới hạn
if ($chonso >= $raso) continue;
break;} //// while
if ($layds === "KHONG CO TK NAO") {continue;}
if ($chonso === 'y' || $chonso === 'Y') continue;
if ($chonhap == 3) {
$xoathu = file('tkgo.txt', FILE_IGNORE_NEW_LINES);
unset($xoathu[$chonso]);$chonsua = 3; tong();$chonsua = '';
continue;}
$laitoi = $layds['toilai'];
} ////// 2 ,3
////p1
if ($chonhap == 1 || $chonhap == 2 || $chonhap == 5) {
if ($chonhap == 5) {layds ();echo"\n";continue;}
////n1
while (1) {
$hhui = layds();
if ($hhui === "KHONG CO TK NAO") {unlink('tkgo.txt');}
$nhapthu = nhapthu();
if ($nhapthu === "THOAT") {break;}
elseif ($nhapthu === "AUTHU SAI"){continue;}
$token = $nhapthu['authu'];
$user  = $nhapthu['user'];
$tsm = tsm();
$goiurlme = urlme();
if ($goiurlme === "LOI NHE") {continue;}
if ($chonhap == 2) {
$suathu = file('tkgo.txt', FILE_IGNORE_NEW_LINES);
$suathu[$chonso] = "$token|$user|$laitoi";
$chonsua = 2;tong();$chonsua = '';
echo "DA LUU LAI AUTHU GOLIKE\r";sleep(3);clear();break;}
$ttp = "$goiurlme";
$goitup = gotup ();
if ($goitup === "TRUA CO KENH") {echo "TRUA CO KENH\n";
$luuthu = "$token|$user|$ttp$goitup";
$chonsua = 1; tong();$chonsua = '';
echo "DA LUU AUTHU GOLIKE VAO FILE ( NHUNG TRUA THEN KENH YOUTUBE VAO GILIKE)\r";sleep(3);clear();
continue;}
$tenyou  = $goitup['tenyou'];
$kenhyou = $goitup['kenhyou'];
///// h1
while (1) {$tsmchon = '';
$cokitup = input("NHAP COOKUE YOUTUBE ( $tenyou ) [ THOAT NHAP BAM [ y ]");clear();
if ($cokitup == "y" || $cokitup == "y") {break;}
$thutup = ttaothu();
if ($thutup === "KHONG TIM THAY") {echo"COOKIE NAY SAI\n";sleep(3);clear();continue;}
$tsmchon = 1; $tsm55 = tsmtup();
$myoutup = getyou ();
if ($myoutup === "COOKIE SAI") {echo"COKIE SAI NHAP LAI\n";sleep(1);clear();continue;}
$chanel  = $myoutup['chano'];$xgo = $myoutup['xgo'];
if ($chanel === $kenhyou) {echo"COOKIE NAY KHONG KHOP VOI KENH DK VOI GOLIKE\n";sleep(3);clear();continue;}
$luuthu = "$token|$user|$ttp$xgo|$tenyou|$kenhyou|$thutup|$cokitup";
$chonsua = 1; tong();$chonsua = '';$cokitup = '';
echo "DA LUU AUTHU GOLIKE VA COOKIE YOUTUBE VA FILE\r";sleep(3);clear();
break;} ///h1
if ($cokitup == "y" || $cokitup == "y") {$tao="TRUA THEM COKIE";
$luuthu = "$token|$user|$ttp$tao";
$chonsua = 1; tong();$chonsua = '';$cokitup='';
echo "DA LUU AUTHU GOLIKE VAO FILE ( TRUA CO COOKIE YOUTUBE )\r";sleep(3);clear();continue;}
} ////n1
continue;} //// p1




//// chonhap 4
if ($chonhap == 4) {
///po1
while (true) {
$lds = lds();
if ($lds === "KHONG CO TK NAO")  {unlink('tkgo.txt');break;}
elseif ($lds === "THOAT CHON")   {clear();break;}
elseif ($lds === "NHAP LAI")     {echo"CHON SAI\r";sleep(2);clear();continue;}
elseif ($lds === "DA CO ROI")    {echo"TK NAY DA CO COOKIE YOUTUBE ROI\n";sleep(2);clear();continue;}
$token   = $lds['nno'];
$user    = $lds['nn1'];
$tonglai = $lds['tonglai'];
$xchon   = $lds['chon'];
$tsm = tsm();
$goitup = gotup ();
if ($goitup === "TRUA CO KENH") {echo"TK NAY TRUA THEM KENH YOUTUBE VAO GOLIKE\n";sleep(3);clear();continue;}
$tenyou  = $goitup['tenyou'];
$kenhyou = $goitup['kenhyou'];
/// pp2
while (true) {
$cokitup = input("NHAP COOKUE YOUTUBE ( $tenyou ) [ THOAT NHAP BAM [ y ]");clear();
if ($cokitup == "y" || $cokitup == "y") {break;}
$thutup = ttaothu();
if ($thutup === "KHONG TIM THAY") {echo"COOKIE NAY SAI\n";sleep(3);clear();continue;}
$tsmchon = 1; $tsm55 = tsmtup();
$myoutup = getyou ();
if ($myoutup === "COOKIE SAI") {echo"COKIE SAI NHAP LAI\n";sleep(1);clear();continue;}
$chanel  = $myoutup['chano'];$xgo = $myoutup['xgo'];
if ($chanel === $kenhyou) {echo"COOKIE NAY KHONG KHOP VOI KENH DK VOI GOLIKE\n";sleep(3);clear();continue;}
$suathu = file('tkgo.txt', FILE_IGNORE_NEW_LINES);
$suathu[$xchon] = "$tonglai|$xgo|$tenyou|$kenhyou|$thutup|$cokitup";
$chonsua = 2;tong();$chonsua = '';
echo "DA LUU LAI COOKIE YOUTUBE VAO FILE\r";sleep(3);clear();
break;} /// pp2
} ///// po1
continue;} ///// 4
















} //// tong
