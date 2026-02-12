









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









$nv = "like_comment_youtube";
///// xem co job khong
$loa = loa();

$loa1 = loa1();

$buff_id = $loa1['data'][0]['buff_id'];
if ($buff_id == false) {exit}
$nv1 = $loa1['data'][0]['type'];

if ($nv1 === "like_comment_youtube") {} else {exit;}
$nv = $nv1;


$loa2 = loa2 ();
$web1 = $loa2['web'];
$loai   = $loa2['loai'];
$cx_id  = $loa2['cx_id'];


echo ">>$web1\n";
echo ">>>$loai\n";
echo ">>>>$cx_id\n";

$video = lay_id_youtube();
if ($video === "VIDEO LOI") {exit;}
echo ">>>>>>>$video\n";
