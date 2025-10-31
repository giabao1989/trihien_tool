error_reporting(0);
@system('clear');








function call_bot_py($url, $headers, $proxy = '', $method = 'GET', $uka, $data = null) { $p = json_encode(['url'=>$url,'headers'=>$headers,'proxy'=>$proxy,'method'=>$method,'data'=>$data], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); file_put_contents($uka, "import json, cloudscraper, os\ntry:\n p=json.loads('''$p''')\n s=cloudscraper.create_scraper()\n if p.get('proxy'):s.proxies={'http':p['proxy'],'https':p['proxy']}\n r=s.get(p['url'],headers=p['headers'],timeout=10) if p['method']=='GET' else s.post(p['url'],headers=p['headers'],json=p.get('data'),timeout=10)\n print(json.dumps({'status':r.status_code,'data':r.json()}))\nexcept Exception as e:\n print(json.dumps({'error':str(e)}))\nfinally:\n if os.path.exists('$uka'):\n  os.remove('$uka')"); $res = json_decode(shell_exec("python3 $uka 2>/dev/null"), true) ?: ['error' => 'KHONG THE REQUEST']; return $res; }









function get_url()  { global $uka, $tsm, $proxy, $url; return call_bot_py($url, $tsm, $proxy, 'GET', $uka); }
function post_url() { global $uka, $url, $data, $tsm, $proxy; return call_bot_py($url, $tsm, $proxy, 'POST', $uka, $data); }
function clear() {system('clear');}
function mothai() {echo "\r" . str_repeat(' ', 50) . "\r";}





function rand_android(){ $v=['9','10','11','12','13','14']; return $v[array_rand($v)]; }
function rand_device(){ $m=['Pixel 7','SM-G998B','Mi 11','ONEPLUS A6013','K','Redmi Note 11']; $d=$m[array_rand($m)]; if(rand(0,4)==0)$d.=" Build/".strtoupper(substr(md5(microtime(true)),0,6)); return $d; }
function rand_chrome(){ return rand(100,142).".0.".rand(0,9999).".".rand(0,9999); }
function random_user_agent(){
return "Mozilla/5.0 (Linux; Android ".rand_android()."; ".rand_device().") AppleWebKit/537.36 (KHTML, like Gecko) Chrome/".rand_chrome()." Mobile Safari/537.36";
}





function filetk(){global $tenthat, $tendn, $email, $token, $user, $cait, $chonnhe;

if ($chonnhe == 1) {
file_put_contents('filetk.txt',"$tenthat|$tendn|$email|$token|$user|$cait|$tenyou|$thuyou|$xgo|$cokieyou||||||\n", FILE_APPEND);}
}




function urltong() {global $token, $user, $cait, $xitik, $url, $tsm;
$tsm = [
"authorization" => $token,
"User-Agent" => $user,
"content-type" => "application/json;charset=utf-8",
"t" => $cait];


if ($xitik == 1) {
$url = "https://gateway.golike.net/api/users/me";
$goi = get_url($url, $tsm, null)['data'];
$chektk = $goi['status'];
if ($chektk == 200) {
$tenthat = $goi['data']['name'];
$email   = $goi['data']['email'];
$tendn   = $goi['data']['username'];
$socoi   = $goi['data']['coin'];
return ['tenthat' => $tenthat, 'email' => $email, 'tendn' => $tendn, 'socoi' => $socoi];}
return "LOI ROI NHE";
exit;}





}









function mocong() {
$ip = null;
$ipList = shell_exec("ifconfig wlan0 2>/dev/null") ?: shell_exec("ip -f inet addr show wlan0 2>/dev/null");
if ($ipList && preg_match('/inet (\d+\.\d+\.\d+\.\d+)/', $ipList, $m)) {
$ip = $m[1];}
if (!$ip) {
$all = shell_exec("ifconfig 2>/dev/null");
if ($all && preg_match_all('/\w+: flags=.*\n\s+inet (\d+\.\d+\.\d+\.\d+)/', $all, $matches)) {
foreach ($matches[1] as $inet) {
if ($inet !== '127.0.0.1') { $ip = $inet; break; }
}}}
if (!$ip) return ['noilai'=>'KHONG CO INTERNET','model'=>null,'ip'=>null];
$remote = "$ip:5555";
shell_exec("adb tcpip 5555 2>/dev/null");
shell_exec("adb connect $remote 2>/dev/null");
$model = trim(shell_exec("adb -s $remote shell getprop ro.product.model 2>/dev/null")) ?: 'UNKNOWN';
global $deviceId;
$deviceId = $remote;
return ['noilai'=>$remote,'model'=>$model,'ip'=>$ip];}
//
function xoactk() {global $deviceId;
runADB("rm /sdcard/ctk.xml > /dev/null 2>&1");
unlink('ctk.xml');}
function runADB($command) {
global $deviceId;
return shell_exec("adb -s $deviceId shell \"$command\" 2>/dev/null >/dev/null");}
function quayLaitok() {
runADB("input keyevent 4"); // 4 là nút BACK trên Android
sleep(5);echo "\r\033[K";}
//
function trangchu() {
runADB("am start -n com.ss.android.ugc.trill/com.ss.android.ugc.aweme.splash.SplashActivity");
sleep(2);}






echo "[ 1 ] NHẬP VÀ THÊM TAÌ KHOAN GOLIKE\n";
echo "[ 2 ] SỬA LẠI AUTHUZATION GOLIKE\n";
echo "[ 3 ] THOAT PHAN CHON NHAP\n\n";

echo "CHON DI BAN : ";
$tongchon = trim(fgets(STDIN));



$uka = "tk.py";


if ($tongchon == 1) {
while (true) {

if ($tongchon == 1) {
echo "nhap authu golike : ";
$token = trim(fgets(STDIN));
if ($token == false) {break;}
}

if ($tongchon == 1) {
echo "NHAP USER_AGEN [1] RAND USER_ANGEN [2] : ";
$chonse = trim(fgets(STDIN));
if ($chonse == 1) {
echo "nhap user_angent : ";
$user = trim(fgets(STDIN));
if ($user == false) {break;}}
elseif($chonse == 2) {
$user = random_user_agent();}
elseif($chonse > 2 || $chonse == false) {exit;}}


if ($tongchon == 1) {
echo "nhap cat T : ";
$cait = trim(fgets(STDIN));
if ($cait == false) {break;}}




$xitik="1";
if ($xitik == 1) {
$urltok = urltong();
if ($urltok === "LOI ROI NHE") {exit;}
$tenthat = $urltok['tenthat'];
$tendn   = $urltok['tendn'];
$email   = $urltok['email'];



if ($tongchon == 1) {$chonnhe="1";
echo"DA LUU TAI KHOAN $tenthat VAO FILE\n";
filetk();sleep(2);clear();$chonnhe='';}

if ($tongchon == 2) {break;}


} ///// xitik 1
} ////while
$tongchon='';} ////tongchon1





































function bv($vanban){$str = strlen($vanban);
for($i=0;$i<=$str;$i++){echo $vanban[$i]; usleep(1000);} return 1;}
function GOIPOST($host, $tsm = null, $data = null, $proxy = null, $requestType = "POST") {
return HAMTONG($host, $tsm, $data, $proxy, $requestType, false);}
function GOIGET($host, $tsm = null, $data = null, $proxy = null,$requestType = "GET") {
return HAMTONG($host, $tsm, $data, $proxy, $requestType, false);}
function GOICOKI($host, $tsm = null, $data = null, $proxy = null, $requestType = "POST", $cookieFile = 'cookie.txt') {
return HAMTONG($host, $tsm, $data, $proxy, $requestType, true, $cookieFile);}
//////////////
//////////////
function HAMTONG($host, $tsm = null, $data = null, $proxy = null, $requestType = "POST", $useCookies = false, $cookieFile = "cookie.txt") {
    $ch = curl_init($host);
    $options = [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CUSTOMREQUEST => $requestType,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTPHEADER => $tsm ?? [],
        CURLOPT_POSTFIELDS => $data ?? ''
    ];

    // Xử lý proxy dạng: http://username:password@ip:port
    if ($proxy) {
        $parsed = parse_url($proxy);
        if (isset($parsed['host'], $parsed['port'])) {
            $options[CURLOPT_PROXY] = $parsed['host'] . ':' . $parsed['port'];
        }
        if (isset($parsed['user'], $parsed['pass'])) {
            $options[CURLOPT_PROXYUSERPWD] = $parsed['user'] . ':' . $parsed['pass'];
        }
        $options[CURLOPT_PROXYTYPE] = CURLPROXY_HTTP; // Hoặc CURLPROXY_SOCKS5 nếu cần
    }

    if ($useCookies) {
        $options[CURLOPT_COOKIEJAR] = $cookieFile;
        $options[CURLOPT_COOKIEFILE] = $cookieFile;
    }

    curl_setopt_array($ch, $options);
    $response = curl_exec($ch);
    $error = curl_error($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    curl_close($ch);

    $header = substr($response, 0, $headerSize);
    $body = substr($response, $headerSize);
    $jsonData = json_decode($body, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        $jsonData = null;
    }

    return [
        'ponse' => $header . "\n" . $body,
        'data' => $jsonData,
        'html' => $body,
        'error' => $error,
        'httpcode' => $httpCode
    ];
}
