<?php
//##########################################################################
// ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
// Visit www.itexmo.com/developers.php for more info about this API
//##########################################################################
function itexmo($number,$message,$apicode){
$url = 'https://www.itexmo.com/php_api/api.php';
$itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
$param = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($itexmo),
    ),
);
$context  = stream_context_create($param);
return file_get_contents($url, false, $context);}
//##########################################################################
$body = "help me lord";
$number = "09051946970";
$api = "TR-LOADR299064_9ZWCQ";

$result = itexmo($number,$body,$api);
if ($result == ""){
  echo "0";
}else if($result == 0){
echo  "1";
}else {
  echo "0";
}

?>
