






while (1) {



echo "[ 1 ] THEM AUTHU GOLOKI\n";
echo "[ 2 ] SUA  AUTHU GOLOKI ( THEO MÃNG )\n";
$bamchon = input("MOI BAN CHON : ");



if ($bamchon == 1) {
///////// 1 la nhap va them tk golike
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
$chonsua = 1;tong();
} /////while
} /// bamchon 1




if ($bamchon == 2) {
/////// 2 la sua authu golike theo vi tri da chon
$tkgo = file('tkgo.txt', FILE_IGNORE_NEW_LINES);
if (empty($tkgo[0])) return "Không có tk nào";
foreach ($tkgo as $i=>$tk){
if (!$tk) return "Đã hết tk";
[$aa1,$aa2,$aa3] = explode('|',$tk);
echo "$aa1|$aa2|$aa3\n";}
} /// bamchon 2







}



