<?php
// SET SITE URL
$app = "//{$_SERVER['SERVER_NAME']}/";
// ADMIN DASH

$base = "//".$_SERVER['SERVER_NAME']."/";

// GET REFER
// $refer = $_GET['refer'];
$refer = $_SERVER['HTTP_REFERER'];
// Actual Link
$actual_link = "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// GET USER AGENT
$useragent = $_SERVER['HTTP_USER_AGENT'];
//echo $useragent;
if (strpos($useragent, "Windows")){
    $useragent = "pc";
} else{
    $useragent = "mobile";
}
// TELEGRAM CONTACT
$telegram = "https://t.me/slowdmelendez360";

// USERTYPE
$userType = $row['type'];

// CALC SUBSCRIPTION
$futuro = strtotime($row['fecha']);
$presente = time();
$left = $futuro - $presente;
$daysleft = round((($left/24)/60)/60);

if (-$daysleft > 0){
    $susdisabled = 'disabled';
} else{
    $susdisabled = '';
}
?>