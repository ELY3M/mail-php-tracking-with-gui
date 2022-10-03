<?php
// laat de pixel in 
header('Content-Type: image/gif');
readfile('footer.gif');

$date = date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);
$device = ($_SERVER['HTTP_USER_AGENT']);
#$ip = $_SERVER['REMOTE_ADDR'];
$ip = ($_SERVER['REMOTE_ADDR']);
$ref = $_SERVER['HTTP_REFERER'];
$id = $_GET["id"];
$txt = "email read on ". $date. " id: ". $id ."  with the IP Address: ".$ip." User Agent: ". $device . " From: ".$ref;
$log = file_put_contents('log.txt', $txt.PHP_EOL , FILE_APPEND);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
$response   = curl_exec($ch);
exit;
?>

