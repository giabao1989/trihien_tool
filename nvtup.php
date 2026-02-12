









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

loa1();
