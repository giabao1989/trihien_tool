









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





$tuta4 = explode("\n", @file_get_contents('youtube.txt'));
$tuta3 = $tuta4[0];
$cokitup = explode('|', $tuta3)[2];
$xgo     = explode('|', $tuta3)[1];


$thutup = ttaothu();
$uta = user_gen();



$you2 = "user-agent: $uta";
$you1 = "authorization: $thutup";
$you4 = "Cookie: $cokitup";
$you5 = "x-goog-authuser: $xgo";


$nv = "like_comment_youtube";
///// xem co job khong/
$loa = loa();

$loa1 = loa1();

$buff_id = $loa1['data'][0]['buff_id'];
if ($buff_id == false) {exit;}
$nv1 = $loa1['data'][0]['type'];

if ($nv1 === "like_comment_youtube") {} else {echo"ba con de\n";exit;}
$nv = $nv1;


$loa2 = loa2 ();
if ($loa2 === "NHIEM VU DA XONG") {echo"<<<<<<<$loa2\n";}
$web1 = $loa2['web'];
$loai   = $loa2['loai'];
$cx_id  = $loa2['cx_id'];


echo ">>$web1\n";
echo ">>>$loai\n";
echo ">>>>$cx_id\n";

$video = lay_id_youtube();
if ($video === "VIDEO LOI") {exit;}
echo ">>>>>>>$video\n";


$tsm57 = [$you2, $you4];
$nvideo = checkVideo();
if (in_array($nvideo, $loi)) {echo "VIDEO BI LOI\n";exit;}



$tsm56 = [$you1, $you3, $you2, $you5, $you6, $you4];
$commen = commen ();
if ($commen === "TIM LOI NHE" || $commen === "COMMEN THAT BAI") {echo">>$commen";baoloi();exit;}
echo ">>$commen\n";sleep(2);



$nhanbux = nhanbux();
