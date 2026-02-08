





function chutnang($tbon){
    $r="\033[0m"; $r1="\033[1;31m"; $g="\033[1;32m"; $y="\033[1;33m";
    $b="\033[1;34m"; $p="\033[1;35m"; $c="\033[1;36m"; $w="\033[1;37m";

    $menu = [
        "{$p}╔══════════════════════════════════════╗{$r}",
        "{$p}║{$y}    C O O K I E  F A C E B O O K      {$p}║{$r}",
        "{$p}╠══════════════════════════════════════╣{$r}",
        "{$p}║{$c} [1]{$g} THÊM        {$y}COOKIE               {$p}║{$r}",
        "{$p}║{$c} [2]{$b} SỬA         {$y}COOKIE               {$p}║{$r}",
        "{$p}║{$c} [3]{$b} XEM         {$y}SỐ LƯỢNG COOKIE      {$p}║{$r}",
        "{$p}╠══════════════════════════════════════╣{$r}",
        "{$p}║{$c} [4]{$w} VÀO TOOL HOẶC BẤM ENTER          {$p}║{$r}",
        "{$p}╚══════════════════════════════════════╝{$r}",
    ];

    foreach ($menu as $dong){
        bv($dong."\n");
    }
}




function nhap_cookie() {global $ke0, $chonn;
if ($chonn == 2 || $chonn == 3) {
while (1) {
$f="cokie.txt"; if(!file_exists($f)) return;
$ook=file($f,FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES); if(!$ook) return;
$g="\033[1;32m";$y="\033[1;33m";$p="\033[1;35m";$r="\033[0m";
foreach($ook as $k=>$v){
$tk=explode('|',$v)[0]; if(!$tk) continue;
$w=mb_strwidth("$k ║ $tk",'UTF-8');
$kki1 = "{$g}╔".str_repeat("═",$w+2)."╗{$r}\n";
$kki2 = "{$g}║ {$y}$k{$r} ║ {$p}$tk{$r} {$g}║{$r}\n";
$kki3 = "{$g}╚".str_repeat("═",$w+2)."╝{$r}\n";cc($kki1);cc($kki2);cc(
$kki3);} //// for
if ($chonn == 2) {
$demt = count($ook);
$dong  = input("CHON COOKIE FACEBOOK DE SUA ( Y KHONG SUA )");clear();
if ($dong == "y" || $dong == "y") {return "CHON THOAT";}
if ($dong >= $demt) {continue;}
if ($dong === '' || !ctype_digit($dong)) {continue;}
} //// chonn2
break;} /////while
if ($chonn == 3) {return;}
$cookie  = input($ke0);clear();
if ($cookie == "y" || $cookie == "y") {return "CHON THOAT";}
$uid = explode(';', explode('c_user=', $cookie)[1])[0];
if ($uid == false) {return "COOKIE SAI";}
} //// chonn23
if ($chonn == 1) {
$cookie  = input($ke0);clear();
if ($cookie == "y" || $cookie == "y") {return "CHON THOAT";}
$uid = explode(';', explode('c_user=', $cookie)[1])[0];
if ($uid == false) {return "COOKIE SAI";}} ////chonn1
return ['cookie' => $cookie, 'uid' => $uid, 'dong' => $dong];}





function xemcoki(){
$file = "cokie.txt";
if(!file_exists($file)) return "KHONG CO FILE";
$a = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
// nếu mảng số 0 không tồn tại → xóa file
if(!isset($a[0])){
unlink($file);return "DA XOA FILE";}
return explode('|', $a[0])[0]; // chỉ lấy gmail đầu
}













while (1) {$chonn = null;$dong=null;$chonsua=null;
$tbon = 2;
chutnang($tbon);
$chonn = (int) input("MỜI BẠN CHỌN CHỨC NĂNG ");clear();
if ($chonn == 4 || $chonn == '') {$xemcoki = xemcoki();
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
//luucoki();
$chonsua=2;tong();
echo"DA LUU COOKIE [ $tenfb ] VAO FILE \n";sleep(2);clear();}
if ($chonn == 2) {
$suacoki = file('cokie.txt', FILE_IGNORE_NEW_LINES);
$suacoki[$dong] = "$tenfb|$cookie";$chonsua=5;tong();;
echo"DA LUU LAI COOKIE [ $tenfb ] VAO FILE \n";sleep(2);clear();
break;}
continue;} //// while
} ///chonn123
continue;} /// while tong



