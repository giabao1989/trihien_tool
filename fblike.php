
















$nom4 = explode("\n", @file_get_contents('tkbux.txt'));
$nom3 = $nom4[0];
$taikhoan = explode('|', $nom3)[0];
$matkhau  = explode('|', $nom3)[1];

$chontsm=1;
$tsm98 = lay_tsm();
$token = postkmk();

$chontsm=2;
$a5 = "authorization: $token";
$tsm99= lay_tsm();
$coixu = getk();
if ($coixu === "AUTHU DIE") {exit;}
elseif ($coixu === "TRUA BAT KIEM TIEN") {exit;}


$yuu++;if ($yuu == 1){kengang1();echo"\n";}









///////// batvdau chay toool
$mivi=-1;
while (1) {$mivi++;
$chaylike = chaylike();
if ($chaylike === "HET FB") {break;}
$namefb = $chaylike['namefb'];
$cookie = $chaylike['mcoki'];



////// cho nay loa job




$fb14 = "Cookie: $cookie";
$uta = user_gen();
$fb2 = "user-agent: $uta";
$tsm21  = [$fb1, $fb2, $fb3, $fb4, $fb14];
$tsm22  = [$fb1, $fb2, $fb4, $ffb2, $fb14];
$uid = explode(';', explode('c_user=', $cookie)[1])[0];
$tsm80 = [$fb2];


$nv = "like_facebook";
///// xem co job khong
$loa = loa();
    if ($loa === "CO JOB") {}
elseif ($loa === "HET NV" || $loa === "HET JOB") {continue;}
elseif ($loa === "JOB TRUA LAM") {}
elseif ($loa === "LAM COM") {$nv='like_poster';$loaa = loa();}





///////// vong lap lay mang cua job
$bivi=-1; while (1) {$bivi++;
$loa1 = loa1();
$buff_id = $loa1['data'][$bivi]['buff_id'];
if ($buff_id == false) {break;}
$nv1 = $loa1['data'][$bivi]['type'];
if ($nv1 == "like_facebook" || $nv1 == "like_poster") {} else {
baoloi();sleep(2);mothai();continue;}
$nv = $nv1;


$loa2 = loa2 ();
if ($loa2 === "NHIEM VU DA XONG") {echo"$loa2\r";continue;}
$web1 = $loa2['web'];
$id = doilink();
$dem1 = strlen($id);
if ($dem1 < 3 || $dem1 > 30) {continue;}
$loai   = $loa2['loai'];
$cx_id  = $loa2['cx_id'];
echo "$namefb LAM NV [ $id ]\r";sleep(1);mothai();

$loanao = fb ();
    if ($loanao === "DIE COOKIE") {break;}
elseif ($loanao === "LOI NHE")    {continue;}
elseif ($loanao === "CHECKPOI 282" || $loanao === "CHECKPOI 956" || $loanao === "CHECKPOI 049"){
break;}
$fb_dtsg=$loanao['fb_sg'];

$notong = tonghop();
    if ($notong === "CHECK POI")        {break;}
elseif ($notong === "THA TIM LOI")      {echo"THA TIM LOI NHE\r";sleep(2);baoloi();continue;}
elseif ($notong === "CHAN TT")          {break;}
elseif ($notong === "TRUA CO")          {echo"TRUA CO\r";baoloi();continue;}
elseif ($notong === "COMMENT BI AN")    {baoloi();continue;}
elseif ($notong === "COMMENT THAT BAI") {echo"$notong\r";baoloi();sleep(2);mothai();continue;}
echo "KET QUA $notong\r";sleep(2);mothai();



$nhanbux = nhanbux();
if ($nhanbux === "LOI NHE") {baoloi();continue;}
$baku++;if($baku == 1){echo"\n";kengang();}
$mtien = $nhanbux['mass'];
$mlam  = $nhanbux['mm'];
$coixu += $mtien;
nhantong();tineo();



continue;} ////bivi












} ////mivi



