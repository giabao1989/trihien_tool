







function fb2 () {global $tsm2, $uid;
$url   = "https://www.facebook.com";
$goi   = GOIGET($url, $tsm2)['html'];
$name  = explode('"', explode('USER_ID":"'.$uid.'","NAME":"', $goi)[1])[0];
$name = json_decode('"'.$name.'"');
if ($name == false) {return "LOI_NHE";}
$fb_sdg = explode('"}', explode('DTSGInitialData",[],{"token":"', $goi)[1])[0];
if ($fb_sdg == true) {return $fb_sdg;}
$fb_sdg1 = explode('"', explode('["DTSGInitData",[],{"token":"', $goi)[1])[0];
if ($fb_sdg1 == true) {return $fb_sdg;}
$fb_sdg2 = explode('"}', explode('async_get_token":"', $goi)[1])[0];
if ($fb_sdg2 == true) {return $fb_sdg;}
return "LAY_KHONG_RA";}
///////////////////////////////////////////////////
function fb3 () {global $cx_id, $uid, $id_job, $tsm3, $fb_dtsg;
$base = base64_encode("feedback:$id_job");
$docid = "24198888476452283";
$vaitim = '{"input":{"feedback_id":"'.$base.'","feedback_reaction_id":"'.$cx_id.'","feedback_source":"NEWS_FEED","actor_id":"'.$uid.'","client_mutation_id":"1","session_id":"","is_tracking_encrypted":true,"tracking":["{}"],"attribution_id_v2":"CometHomeRoot.react,comet.home,via_cold_start"},"useDefaultActor":false}';
$data = http_build_query([
'av' => $uid,
'__user' => $uid,
'fb_dtsg' => $fb_dtsg,
'variables' => $vaitim,
'doc_id' => $docid]);
sleep(rand(5,9));
$url = "https://www.facebook.com/api/graphql/";
$goi_raw = GOIPOST($url, $tsm3, $data);
if (!is_array($goi_raw) || !isset($goi_raw['data'])) {return "LAM_NV_LOI";}
$goi1 = substr(json_encode($goi_raw['data']), 0, 4000);
if (str_contains($goi1, '828281030927956') || str_contains($goi1, '601051028565049') || str_contains($goi1, '1501092823525282')) {return "CHECK_POI";}
if (str_contains($goi1, '1390008') || str_contains($goi1, '1404078')) {return "CHAN_TT";}
$chek = explode('"', explode('node":{"id":"'.$cx_id.'","localized_name":"', $goi1)[1])[0];
if ($chek == false) {return "LAM_NV_LOI";}}
///////////////////////////////////////////////////
function laycx () {global $type;
    if ($type === "LIKE" || $type === "like" || $type === "Like") {$loai = "1635855486666999";$incon = "👍";}
elseif ($type === "LOVE" || $type === "Love" || $type === "thả tim") {$loai = "1678524932434102";$incon = "❤️";}
elseif ($type === "Thương Thương" || $type === "THƯONG THƯƠNG") {$loai = "613557422527858";$incon = "🤗";}
elseif ($type === "HaHa" || $type === "Haha" || $type === "HAHA") {$loai = "115940658764963";$incon = "😆";}
elseif ($type === "WOW" || $type === "Wow" || $type === "wow") {$loai = "478547315650144";$incon = "😮";}
elseif ($type === "BUỒN" || $type === "Buồn" || $type === "Sad") {$loai = "908563459236466";$incon = "😢";}
elseif ($type === "ANGRY" || $type === "Angry") {$loai = "444813342392137";$incon = "😡";}
return ['loai' => $loai, 'incon' => $incon];}
///////////////////////////////////////////////////
function layid () {global $link;
$tsm = [
"user-agent: Mozilla/5.0",
"content-type: application/x-www-form-urlencoded"];
$data = "link=$link";
$url = "https://id.traodoisub.com/api.php";
$goi = GOIPOST($url, $tsm, $data)['data'];
$id  = $goi['post_id'];
if ($id == false) {return "LAY_LOI";}
return $id;}








/////// chay tool
while (1) {$loa_job = 0;
while (1) {$loa_job++;
$tsm1 = heard1();
$job = get_job();
if ($job === "HET_JOB") {
if ($loa_job > 6) {mothai();break;}
echo"HET JOB [ $loa_job ]\r";sleep(5);continue;}
break;}
if ($loa_job > 6) {break;}



$i_d    = $job['id'];
$link   = $job['link'];
$type   = $job['type'];
$id_jobb = $job['take'];


$dem = strlen($id_jobb);
if(strpos($link, 'reel') == true) {$dem = 50;}
if ($dem > 40) {$dem = '';
$id_job = layid ();
if ($id_job === "LAY_LOI") {continue;}
} else {$id_job = $id_jobb;}




$tsm6 = tsm();
$id_op = xac_nhan1();
if ($id_op === "NHAN_LOI") {continue;}




$tsm1 = heard1();
$xac_nhan2 = xac_nhan2();
if ($xac_nhan2 === "THAT_BAI") {continue;}











$tsmchon = 1;
$tsm2 = heard2();
$fb_dtsg = fb2();
if ($fb_dtsg === "LOI_NHE") {continue;}
if ($fb_dtsg === "LAY_KHONG_RA") {continue;}


$camsuc = laycx();
$cx_id  = $camsuc['loai'];
$incon  = $camsuc['incon'];


$tsmchon = 2;
$tsm3 = heard2();
$ketqua = fb3();
if ($ketqua === "CHECK_POI") {break;}
if ($ketqua === "CHAN_TT") {break;}
if ($ketqua === "LAM_NV_LOI") {$hui = 1;}


$tsm6    = tsm();

if ($hui == 1) {bao_loi();$hui = '';continue;}




$nhan_tien = nhan_tien();
if ($nhan_tien === "NHAN_THAT_BAI") {bao_loi;continue;}
echo "$incon THANH CONG + $nhan_tien VND\n";
sleep(5);

}









