







function nhaptup() {global $tsm, $url;
print_r($tsm);
$url = "https://gateway.golike.net/api/youtube-account";
$goi = get_url($url, $tsm)['data'];
print_r($goi);
}










$i=0;


$monao3 = explode("\n", @file_get_contents('tkgo.txt'));
$monao2 = $monao3[$i];
$token  = explode('|', $monao2)[0];
if ($token == false) {exit;}
$user   = explode('|', $monao2)[1];
$tsm = tsm();



nhaptup();
