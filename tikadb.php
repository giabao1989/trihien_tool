$laytk5  = explode("\n", @file_get_contents('filetk.txt'));
$chekac1 = $laytk5[0];
$chekac2 = explode('|', $chekac1)[0];
if ($chekac2 == false) {exit;}

while (true) {
$i="-1";while (true) {$i++;
$tenac2 = $laytk5[$i];
$tenac1 = explode('|', $tenac2)[0];
$tenac2 = explode('|', $tenac2)[1];
if ($tenac1 == false) {echo"\n";break;}
//echo "[ $i ] $tenac2 | $tenac1\n";
kengang();continue;}
echo "MOI BAN CHON TAI KHOAN GOLIKE CHAY : ";
$chonac = trim(fgets(STDIN));clear();
if (!is_numeric($chonac)) {
echo "BAN DA NHAP SAI CHON LAI\n";sleep(2);clear();continue;}
elseif ($chonac >= $i || $chonac == $i) {echo "KHONG CO TAI KHOAN SO $chonac\n";sleep(2);clear();continue;}
$tenac2 = $laytk5[$chonac];
$token = explode('|', $tenac2)[3];
$user  = explode('|', $tenac2)[4];
$cait  = explode('|', $tenac2)[5];
break;}



$boo3 = explode("\n", @file_get_contents('filetk.txt'));
$cvn="-1";while(true) {$cvn++;
$boo2 = $boo3[$cvn];
$boo1 = explode('|', $boo2)[0];
if ($boo1 == false) {break;}
$v1=bodau($boo1);$hoai="tik";
$vv1="$v1$hoai.txt";
unlink($vv1);}







$ttyn = explode('|', $tenac2)[0];
$tkgolikechay1=bodau($ttyn);$hoai="tik";
$tkgolikechay="$tkgolikechay1$hoai";
$chonnhe="5001";filetk();$chonnhe="0";








/////// Chọn tài khoản để làm nhiệm vụ
$xitik = "2";
$goi2 = urltong();
if ($goi2 === "TRUA CO AC TIKTOK") {exit;}
$i = 0;
$accounts = []; // Mảng lưu tất cả tài khoản từ $goi2
// Lấy danh sách tài khoản và hiển thị
while (isset($goi2['data'][$i])) {
$acid  = $goi2['data'][$i]['id'];
$actik = $goi2['data'][$i]['unique_username'];
if (!$acid) break;
kedoc();
//echo "[$i] [$acid] $actik\n";
$accounts[] = [$acid, $actik];
$i++;}

// Tổng số tài khoản
$total = count($accounts);

// Nhập số thứ tự tài khoản muốn chạy
echo "VÍ DỤ: 0,1,2\n";
echo $trang . "CHỌN NHỮNG TÀI KHOẢN CHẠY : ";
$input = trim(fgets(STDIN));
clear();

// Kiểm tra định dạng chỉ gồm số và dấu phẩy
if (!preg_match('/^[0-9,]+$/', $input)) {
exit("❌ BẠN ĐÃ NHẬP SAI, CHỈ ĐƯỢC DÙNG SỐ VÀ DẤU PHẨY\n");}

// Chia thành mảng số thứ tự
$indexes = array_map('intval', explode(',', $input));

// Kiểm tra số thứ tự có hợp lệ không
foreach ($indexes as $n) {
if (!array_key_exists($n, $accounts)) {
exit("❌ Số thứ tự $n không hợp lệ, mảng không có!\n");
}}

// Lấy các tài khoản được chọn, lưu cả ID + tên
$selected = [];
foreach ($indexes as $n) {
$selected[] = $accounts[$n];}







while (true) {
echo"[1] NHIỆM VỤ FOLOWING\n";
echo"[2] NHIỆM VỤ THẢ TIM\n";
echo"[3] NHIỆM VỤ FOLOWING VÀ THẢ TIM\n";
echo $trang."MỜI BẠN CHỌN : ";
$chonv = trim(fgets(STDIN));clear();
if (!is_numeric($chonv)) {
echo "BAN DA NHAP SAI CHON LAI\n";sleep(2);clear();continue;}
elseif ($chonv > 3) {echo "KHÔNG CÓ NHIỆM VỤ SỐ $chonv\n";sleep(2);clear();continue;}
break;}
echo $trang."LÀM THÀNH CÔNG BAO NHIÊU JOB ĐỔI TIKTOK KHÁC : ";
$dadu = trim(fgets(STDIN));clear();



while (true) {
echo $trang."[ 1 ] CHẠY LIÊN TỤC [ 2 ] CHẬY HẾT TÀI KHOẢN TẮT : ";
$chaylientuc = trim(fgets(STDIN));clear();
if (!is_numeric($chaylientuc)) {
echo "BAN DA NHAP SAI CHON LAI\n";sleep(2);clear();continue;}
elseif ($chaylientuc > 2) {sleep(2);clear();continue;}
break;}




unlink('tonglike.txt');







////// doan lay tk da chon de lam khung dep chay lan dau
$trivi="-1";while(true){$trivi++;
$nokit = count($selected);
$acbok = $selected[$trivi][1];
$acuid = $selected[$trivi][0];
if ($acbok == false) {$chonnhe="0";break;}
$chonnhe="5000";filetk();}






date_default_timezone_set("Asia/Ho_Chi_Minh");
$accounts = [];
$lines = file("".$tkgolikechay.".txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach ($lines as $line) {
$parts = explode('|', $line);
$name = strtolower(trim($parts[0] ?? 'no_name'));
$accounts[] = [
'name'      => $name,
'idtok'     => trim($parts[2] ?? ''),
'success'   => 0,
'fail'      => 0,
'dalam'     => 0,
'money'     => 0,
'mangtok'   => trim($parts[1] ?? ''),
'time'      => date("d/m : H:i"),];}
$caigiday="TRƯA KIẾM ĐƯỢC ĐỒNG NÀO ";
manageAccounts($accounts);




//// vong lap chay tk lien tuc
while (true) {



$j = "-1";
//for ($ii = 0; $j < count($accc); $j++) {

for ($j = 0; $j < count($accounts); $j++) {






$acc       = $accounts[$j];
$acten  = $acc['name'];
if ($acten == false) {break;}
$vitri     = $j;
$thanhcong = $accounts[$j]['success'];
$bai       = $accounts[$j]['fail'];
$dalam     = $accounts[$j]['dalam'];
$acid      = $acc['idtok'];
$mangtok   = $acc['mangtok'];

$caigiday="TỔNG SỐ TIỀN KIẾM ĐƯỢC ";
$vitri = $j;









$mocong = mocong();
$deviceId = $mocong['noilai'];
if ($deviceId === "KHONG CO INTERNET") {echo">>>>$devideId\n";exit;}





while (true) {trangchu();xuatdup();sleep(1);
$mangy="0";
$dotoa  = laylike();
    if ($dotoa === "TRUA CO MANG") {}
elseif ($dotoa === "LOI TONG NHE") {} else {
$tikdo = $dotoa['toado'];
bamchuyentk();break;}
//////////////
$uiy = tong1();
if ($uiy === "KHONG LAY DUOC") {xoactk();
luotdi();luotdi();continue;}
//break;}




xoactk();sleep(1);xuatdup();sleep(2);
$mangy="1";
$dotoa  = laylike();
    if ($dotoa === "TRUA CO MANG") {

$bbui = bamtong();
if ($bbui === "KHONG LAY DUOC") {unlink('tonglike.txt');
xoactk();quaylaitok();luotdi();luotdi();
continue;}
sleep(1);xoactk();

}
elseif ($dotoa === "LOI TONG NHE") {
unlink('tonglike.txt');
xoactk();quaylaitok();luotdi();luotdi();continue;
} else {
$tikdo = $dotoa['toado'];
bamchuyentk();}

break;} /// while cho chuyen tk


////// doan nay doi tk tik
xuatdup();sleep(1);
$xmlPath = "ctk.xml";
$ktt = extractUsernamesAndBounds($xmlPath);
$xemtk = extractUsernamesAndBounds("ctk.xml");
$tktik = $xemtk[0]['username'];
//$tikdo = $xemtk[0]['bounds'];
if ($tktik === "Thêm tài khoản") {continue;}
elseif ($tktik == $acten) {$bie="3";quayLaitok();$bie="1";quayLaitok();} else {}
////////////////
$doitk = doitk();
    if ($doitk === "KHONG CO TRONG FILE") {echo"[ $acten ] KHÔNG CÓ TRÔNG FILE\r";sleep(2);mothai();continue;}
elseif ($doitk === "KHONG KHOP TAI KHOAN") {echo"[ $acten ] KHÔNG KHỚP NHÉ\r";sleep(2);mothai();continue;}
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//// chay nhiem vu
$bie="1";quayLaitok();xoactk();echo "LOGIN $acten\r";sleep(10);luotdi();mothai();






///// vong lap chay lai kob
while (true) {$li="0";
$uka = "tiktok.py";
$xitik="3";
while (true) {$li++;
$goinhe = urltong();
$uid    = $goinhe['uidjob'];
if ($uid === "HET JOB") {echo "HET JOB\r";sleep(2);mothai();
if ($li > 15) {break;}
continue;} /////vong lap lay lai job
$type   = $goinhe['type'];
$link   = $goinhe['link'];
$ozid   = $goinhe['ozid'];
if ($type == "comment") {$xitik="5";urltong();continue;}
break;} /////li
///// khong lay duic job thoat tool doi tk
if ($li > 10) {break;}

echo "NHIEM VU $type\r";

///// folo
if ($chonv == 1) {
$chekfolo = chekfolo();
if ($chekfolo === "LINK KHA DUNG" || $chekfolo === "LINK KHONG TON TAI" || $chekfolo === "TAI KHOAN RIENG TU") {echo"$chekfolo\r";$xitik="5";urltong();continue;}
$sln1 = sln();
tenutlo();xuatdup();bamfolo();xoactk();}


elseif ($chonv == 2) {
$chekvideo = chekvideo();
if ($chekvideo === "VIDEO KHA DUNG") {echo"$chekvideo\r";$xitik="5";urltong();mothai();continue;}
tenuttim();sleep(1);bamlike();}


elseif ($chonv == 3) {
if ($type == "follow") {
$chekfolo = chekfolo();
if ($chekfolo === "LINK KHA DUNG" || $chekfolo === "LINK KHONG TON TAI" || $chekfolo === "TAI KHOAN RIENG TU") {echo"$chekfolo\r";$xitik="5";urltong();mothai();continue;}
$sln1 = sln();
tenutlo();xuatdup();bamfolo();xoactk();}
//////////////////
elseif ($type == "like") {$chekvideo = chekvideo();
if ($chekvideo === "VIDEO KHA DUNG") {echo"$chekvideo\r";sleep(1);mothai();$xitik="5";urltong();mothai();continue;}
tenuttim();sleep(1);bamlike();}
} /////chonv 3



if ($type == "follow") {
$sln2 = sln();
if ($sln2 < $sln1 || $sln2 == $sln1) {$vio++;
if ($vio > 3) {echo "TÀI KHOẢN TIKTOK $acten NHÃ FOLO\r";sleep(1);mothai();$bie="1";quayLaitok();$vio="0";break;}
echo "CHECK TÀI KHOẢN TIKTOK $acten\r";sleep(1);mothai();;
$xitik="5";urltong();sleep(1);quayLaitok();continue;}


echo "[ $acten ] $type THÀNH CÔNG\r";
$bie="1";quayLaitok();sleep(1);luotdi();sleep(1);luotdi();
$vio="0";} /////chonv 1,3


echo "[ $acten ] ĐỢI HẾT 5 GIÂY NHẬN TIỀN\r";sleep(10);mothai();

$xitik="4";
$nhanroi = urltong();
if ($nhanroi === "NHAN TIEN LOI") {$bai++;
$accounts[$vitri]['fail'] = $bai;
echo "NHAN TIEN LOI [ $acten ]\r";sleep(2);

$xitik="5";urltong();mothai();continue;} else {

$tienxu = $nhanroi['tienxu'];
$dalam  = $nhanroi['dalam'];
$thanhcong++;
$accounts[$vitri]['dalam'] = $dalam;
$accounts[$vitri]['success'] = $thanhcong;
$accounts[$vitri]['money'] += (int)$tienxu;

echo "NHAN THANH CONG $tienxu [ $acten ]\r";sleep(2);



}

$accounts[$vitri]['time'] = date("d/m : H:i");
manageAccounts($accounts);


if ($thanhcong > $dadu || $thanhcong == $dadu) {echo"ĐỐI TÀI KHOẢN\r";unlink('tonglike.txt');break;}
$khinao="2";
printTimer(15, $acten);$khinao="0";



continue;} ///// vong lap chay lai kob
} //// while $j


    if ($chaylientuc == 1) {continue;}
elseif ($chaylientuc == 2) {exit;}


} ///// vong lap chay tk lien tuc
