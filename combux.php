












$authu = tkvmk();
if ($authu === "SAI TAI KHOAN HOAC MAT KHAU") {echo"$authu\n";exit;}


$a5 = "authorization: $authu";
$tsm99 = [$a1, $a2, $a3, $a4, $a5, $a6];


$coixu = getk();
if ($coixu === "AUTHU SAI" || $coixu === "AUTHU DIE"){exit;}




$nv = "follow_youtube";


echo ">>>$cokitup\n";


$thutup = ttaothu();
$uta = user_gen();

$you2 = "user-agent: $uta";
$you1 = "authorization: $thutup";
$you4 = "Cookie: $cokitup";
$tsm55 = [$you2, $you3, $you4];
$getyou = getyou ();
if ($getyou === "COOKIE YOU SAI") {exit;}
$tentup = $getyou['tentup'];
$xgo    = $getyou['xgo'];
echo ">$tentup | $xgo\n";
loa();

$loa1com = loa1();
$buff_id = $loa1com['data'][0]['buff_id'];
echo ">>>>><<<<<<$buff_id\n";


//print_r($loa1com);



$loa2com = loa2();
$binhluan = $loa2com['bl'];
$web  = $loa2com['web'];
$com_id = $loa2com['c_id'];
echo ">>$binhluan\n";
echo ">>>$c_id\n";
echo ">>$web\n";

$video = lay_id_youtube();
if ($video === "VIDEO LOI") {exit;}


echo ">>>$video\n";











$you5 = "x-goog-authuser: $xgo";
$tsm56 = [$you1, $you3, $you2, $you5, $you6, $you4];
print_r($tsm56);


$commen = commen ();
if ($commen === "TIM LOI NHe" || $commen === "COMMEN THAT BAI") {echo">>$commen";exit;}
echo ">>$commen\n";sleep(2);






nhanbux();
