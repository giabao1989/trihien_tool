






function layds () {;
$tkgo = file('tkgo.txt', FILE_IGNORE_NEW_LINES);
if (!isset($tkgo[0]) || trim($tkgo[0])==='') return "KHONG CO TK NAO";
foreach ($tkgo as $i=>$tk){
if(!$tk) continue;
$arr = explode('|',$tk);
if (empty($arr[0])||empty($arr[2])||empty($arr[3])) continue;
echo "\033[33m[ TK SO $i ]\033[0m \033[32m$arr[2]\033[0m \033[36m[ TKDN ]\033[0m \033[31m$arr[3]\033[0m\n";
}return ['somay'=>count($tkgo)];}




function nhaptup() {global $tsm, $url;
$url = "https://gateway.golike.net/api/youtube-account";
$goi = get_url($url, $tsm)['data'];
$idtup = $goi['data'][0]['id'];
if ($idtup == false) {return "TRUA CO KENH";}
$vname   = $goi['data'][0]['username'];
$nametup = $goi['data'][0]['name'];
$chane   = $goi['data'][0]['channel_id'];
return ['idtup' => $idtup, 'vname' => $vname, 'nametup' => $nametup, 'chane' => $chane];}


function getyou () {global $tsm55;
$url = "https://m.youtube.com/getAccountSwitcherEndpoint";
$goi = GOIGET($url, $tsm55)['html'];
$tentup = explode('"}', explode('accountName":{"simpleText":"', $goi)[1])[0];
if (!$tentup) {return"COOKIE YOU SAI";}
$xgo  = explode('&', explode('authuser=', $goi)[1])[0];
$chano = explode('"', explode('clientCacheKey":"', $goi)[1])[0];
return ['xgo' => $xgo, 'chano' => $chano];}




while (1) {$chonsua=null;



$layds = layds();
if ($layds === "KHONG CO TK NAO") {exit;}
echo "\033[36m======================================\033[0m\n\n";
$nayso = $layds['somay'];
$chontk = trim(input("\033[33mCHON TAI KHOAN DE NHAP COOKIE YOUTUBE\033[0m (\033[31mENTER THOAT\033[0m) : "));
// enter hoặc rỗng
if ($chontk === '') continue;
// không phải số
if (!is_numeric($chontk)) continue;
// ép kiểu
$chontk = (int)$chontk;
// vượt giới hạn
if ($chontk >= $nayso) continue;






$monao3 = explode("\n", @file_get_contents('tkgo.txt'));
$monao2 = $monao3[$chontk];
$token  = explode('|', $monao2)[0];
if ($token == false) {exit;}
$user   = explode('|', $monao2)[1];


$tsm = tsm();
$uka = "nhaptup.py";
$nhaptup = nhaptup();
if ($nhaptup === "TRUA CO KENH") {continue;}
$idtup   = $nhaptup['idtup'];
$vname   = $nhaptup['vname'];
$nametup = $nhaptup['nametup'];
$chane   = $nhaptup['chane'];
$cokitup = input("NHAP COOKIE YOUTUBE ( $nametup ) ");

$chonsua = 1;
$tsm55  = tsmtup();
$goiyou = getyou();
if ($goiyou === "COOKIE YOU SAI") {continue;}
$xgo    = $goiyou['xgo'];
$chano  = $goiyou['chano'];
if ($chano === $chane) {echo"COOKIE YOUTUBE NAY KHONG KHOP\r";sleep(2);clear();continue;}

echo "DA LUU COKIE $nanetup vao file\n";sleep(2);clear();

$thuyou = ttaothu();
$lucokitup = "$idtup|$vname|$nametup|$chane|$xgo|$thuyou|$user|$cokitup";
$chonsua = 3;tong();
} /////while





