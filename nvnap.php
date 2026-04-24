

















function menap () {
    global $nenap, $menap;

    $i = 0;

    // list màu
    $mau = [31,32,33,34,35,36,37];

    if ($nenap == 1) {
        while (1) {
            $i++;

            if ($i > $menap) {mothai(); break;}

            $c = $mau[array_rand($mau)];

            echo "\033[".$c."m HẾT JOB [ $i | $menap ]\033[0m\r";
            sleep(1);
        }
    }

    if ($nenap == 2) {
        while (1) {
            $i++;

            if ($i > $menap) {mothai(); break;}

            $c = $mau[array_rand($mau)];

            echo "\033[".$c."m ĐỢI HẾT $menap | $i GIÂY  LẤY JOB MỚI\033[0m\r";
            sleep(1);
        }
    }
}





function acnat() {global $tsm, $url;
$url = "https://gateway.golike.net/api/snapchat-account";
$goi = get_url($url, $tsm)['data'];
$idnap = $goi['data'][0]['id'];
if ($idnap == false) {return "KHONG CO";}
$ten_nap = $goi['data'][0]['snap_username'];
return ['idnap' => $idnap, 'tennap' => $ten_nap];
}



function jobnap() {global $tsm, $url, $idnap;
$url = "https://gateway.golike.net/api/advertising/publishers/snapchat/jobs?account_id=$idnap";
$goi = get_url($url, $tsm)['data'];
$uid = $goi['lock']['ads_id'];
if ($uid == false) {return "HET JOB";}
$o_z = $goi['lock']['object_id'];



$datanhan = [
"account_id" => $idnap,
"ads_id" => $uid];
$databao = [
"account_id" => $idnap,
"ads_id" => $uid,
"object_id" => $o_z];
return ['uid' => $uid, 'oz' => $o_z, 'tanhan' => $datanhan, 'tabao' => $databao];
}






function appnap() {global $oz;
shell_exec('am start -a android.intent.action.VIEW -d "https://snapchat.com/add/'.$oz.'" 2>/dev/null');
}





function napnhan() {global $url, $data, $tsm, $tanhan;
$data = $tanhan;
$url = "https://gateway.golike.net/api/advertising/publishers/snapchat/complete-jobs";
$goi = post_url($url, $tsm, $data)['data'];
$mass1 = $goi['message'];
$mass = explode(' ', explode('Số jobs đã làm trong ngày ', $mass1)[1])[0];
if ($mass < 0 || $mass == 0 || $mass == false) {return "LOI NHAN";}
$tiena = $goi['data']['prices'];
$tienb += $tiena;
return ['tiena' => $tiena, 'tienb' => $tienb, 'mass' => $mass];
}



function baonap() {global $url, $data, $tsm, $tabao;
$data = $tabao;
$url = "https://gateway.golike.net/api/advertising/publishers/snapchat/skip-jobs";
$goi = post_url($url, $tsm, $data)['data'];
}



function naptc() {global $thanhcong, $accounts, $vitri, $tienxu, $baodi, $caigiday, $dalam, $nago;
$accounts[$vitri]['success'] = $thanhcong;
$accounts[$vitri]['money'] += (int)$tienxu;
$baodi = "ONLINE";
$accounts[$vitri]['baodi'] = $baodi;
$accounts[$vitri]['dalam'] = $dalam;
$accounts[$vitri]['time'] = date("d/m : H:i");
$caigiday="$nago : ";
manageAccounts($accounts);}

function naptb() {global $bai, $vitri, $accounts, $nago;
$accounts[$vitri]['fail'] = $bai;
$caigiday="$nago : ";
manageAccounts($accounts);}















$filetup = file("tkgo.txt", FILE_IGNORE_NEW_LINES);
$tach = explode('|', $filetup[$chontai]);
$token   = $tach[0];
$user    = $tach[1];
$nago    = $tach[2];


$tsm = tsm();
$uka = "snat.py";
$acnap = acnat();
if ($acnap === "KHONG CO") {exit;}




$menap = input("LAM XONG 1 JOB DOI BAO LAU LAM.JOB TIEP");clear();





$tennap = $acnap['tennap'];
$idnap  = $acnap['idnap'];

$vovoi = "ID";
$accounts = [];
$accounts[] = [
    'name'    => $tennap,
    'success' => 0,
    'fail'    => 0,
    'dalam'   => 0,
    'money'   => 0,
    'baodi'   => $idnap,
    'time'    => date("d/m : H:i"),
];


$caigiday="$nago ";
manageAccounts($accounts);



/////////////////////////////////////////////
$vitri = 0;
$thanhcong = $accounts[$vitri]['success'];
$bai       = $accounts[$vitri]['fail'];




while (1) {
$jobnap = jobnap();
if ($jonap === "HET JOB") {
$nenap = 1; menap();
continue;}






$oz     = $jobnap['oz'];
$tanhan = $jobnap['tanhan'];
$tabao  = $jobnap['tabao'];


appnap();
echo "DOI HET 10 GIAY NHAN TIEN\r";sleep(10);




$napnhan = napnhan();
if ($napnhan === "LOI NHAN") {
$bai++;naptb();
baonap();sleep(2);continue;}
$tienxu = $napnhan['tiena'];
$dalam  = $napnhan['mass'];
$thanhcong++;naptc();
$nenap = 2; menap();


}






