



function chutnang($tbon){
    $r="\033[0m"; $r1="\033[1;31m"; $g="\033[1;32m"; $y="\033[1;33m";
    $b="\033[1;34m"; $p="\033[1;35m"; $c="\033[1;36m"; $w="\033[1;37m";

    $menu1 = [
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


    $menu2 = [
        "{$p}╔═════════════════════════════╗{$r}",
        "{$p}║{$y}       PHẦN YOUTUBE          {$p}║{$r}",
        "{$p}╠═════════════════════════════╣{$r}",
        "{$p}║{$c} [1]{$g} SỮA  {$y}COOKIE YOUTUBE{$p}     ║{$r}",
        "{$p}║{$c} [2]{$b} XOÁ  {$y}COOKIE YOUTHUBE{$p}    ║{$r}",
        "{$p}║{$c} [3]{$b} XEM  {$y}TÀI KHOẢN YOUTUBE{$p}  ║{$r}",
        "{$p}╠═════════════════════════════╣{$r}",
        "{$p}║{$c} [4]{$w} VÀO TOOL HOẶC BẤM ENTER {$p}║{$r}",
        "{$p}╚═════════════════════════════╝{$r}",
    ];


    $menu3 = [
        "{$p}╔══════════════════════════════════════╗{$r}",
        "{$p}║{$y}         PHẦN CHỌN B U X M            {$p}║{$r}",
        "{$p}╠══════════════════════════════════════╣{$r}",
        "{$p}║{$c} [1]{$r1} XOÁ HẾT     {$y}TÀI KHOẢN TRONG FILE {$p}║{$r}",
        "{$p}║{$c} [2]{$b} XEM         {$y}SỐ LƯỢNG TÀI KHOẢN   {$p}║{$r}",
        "{$p}╠══════════════════════════════════════╣{$r}",
        "{$p}║{$c} [3]{$w} VÀO TOOL HOẶC BẤM ENTER          {$p}║{$r}",
        "{$p}╚══════════════════════════════════════╝{$r}",
    ];

        if ($tbon == 1) $menu = $menu1;
    elseif ($tbon == 2) $menu = $menu2;
    else $menu = $menu3;
    foreach ($menu as $dong){
        bv($dong."\n");
    }

}




function tkbux () {
$mog3 = explode("\n", @file_get_contents('tkbux.txt'));
$mog2 = $mog3[0];
$khoan = explode('|', $mog2)[0];
if ($khoan == false) {
return "TRUA CO TK";}}


function xemtkbux () {
$mog3 = explode("\n", @file_get_contents('tkbux.txt'));
$mog2 = $mog3[0];
$khoan = explode('|', $mog2)[0];
echo "TAI KHOAN BUMX : $khoan\n\n";}







function cokiefb () {
$mog3 = explode("\n", @file_get_contents('cokie.txt'));
$mog2 = $mog3[0];
$khoan = explode('|', $mog2)[0];
if ($khoan == false) {
return "TRUA CO FB";}}


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


function themyoutube() {
$moo9 = explode("\n", @file_get_contents('youtube.txt'));
$moo8 = $moo9[0];
$moo7 = explode('|', $moo8)[0];
if ($moo7 == false) {
return "TRUA CO";}return"DA CO ROI";}
function xemyoutube () {
$mog3 = explode("\n", @file_get_contents('youtube.txt'));
$mog2 = $mog3[0];
$khoan = explode('|', $mog2)[0];
echo "TAI KHOAN YOUTUBE : $khoan\n\n";}








//// cuabux
while (1) {$chonsua=null;
$chonsua = null;
$tkbux = tkbux();
if ($tkbux === "TRUA CO TK") {
$taikhoan = input("NHAP GMAI TK BUMX"); clear();
$matkhau  = input("NHAP  MAT KK BUMX"); clear();

$chontsm = 1;
$tsm98 = lay_tsm();
$token = postkmk();
if ($token === "SAI TAI KHOAN HOAC MAT KHAU") {
echo " >>>$token\r";
            sleep(2);
            clear();
            continue;}}
$chonsua=1;tong();
continue;}
$tbon = 3;
chutnang($tbon);
$chona = (int) input("MỜI BẠN CHỌN CHỨC NĂNG ");clear();
if ($chona == 1) {xoatong();continue;}
if ($chona == 2) {xemtkbux();continue;}
break;}







//// cua fn
while (1) {$chonn = null;$dong=null;$chonsua=null;
$cokiefb = cokiefb();
if ($cokiefb === "TRUA CO FB") {
$cookie  = input("NHAP COOKIE FACEBOOK ( BAM Y BO QUA )");clear();
if ($cookie == "y" || $cookie == "Y") {break;}
$fb14 = "Cookie: $cookie";
$uta = user_gen();
$fb2 = "user-agent: $uta";
$tsm21  = [$fb1, $fb2, $fb3, $fb4, $fb14];
$r=fb();
if ($r==="DIE COOKIE"||$r==="LOI NHE"||$r==="CHECKPOI"){
echo "$r\n";sleep(2); clear(); continue;}
$tenfb=$r['tt'];
$chonsua=2;tong();
continue;}




$tbon = 1;
chutnang($tbon);
$chonn = (int) input("MỜI BẠN CHỌN CHỨC NĂNG ");clear();
if ($chonn == '') {break;}
if ($chonn == 4 || $chonn == '') {$xemcoki = xemcoki();continue;}

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





//// cua youtube
while (1) {$chonsua=null;
$themyou = themyoutube();
if ($themyou === "TRUA CO") {
$cookiyou  = input("NHAP COOKIE YOUTUBE ( BAM Y BO QUA )");clear();
if ($cookiyou == "y" || $cookiyou == "Y") {break;}
$uta = user_gen();
$you2 = "user-agent: $uta";
$you4 = "Cookie: $cookiyou";
$tsm55 = [$you2, $you3, $you4];
$getyou = getyou();
if ($getyou === "COOKIE YOU SAI") {continue;}
$tentup = $getyou['tentup'];
$xgo    = $getyou['xgo'];
$chonsua=3;tong();
continue;} /// trua co
$tbon = 2;
chutnang($tbon);
$chonb = (int) input("MỜI BẠN CHỌN CHỨC NĂNG ");clear();
if ($chonb == 1 || $chonb == 2) {xoayou();clear();continue;}
if ($chonb == 3) {xemyoutube(); continue;}
break;}





