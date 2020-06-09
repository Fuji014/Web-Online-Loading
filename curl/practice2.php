<?php

$header[] = "Authorization: Token 28c29dc2b3ef0622b448254bf5ab9d083adc2e20";
$header[] = "Accept: application/json";
$header[] = "Content-type: application/json";
$ch = curl_init();
error_reporting(-1);
    ini_set('display_errors', 1);
    set_time_limit(0);
curl_setopt($ch, CURLOPT_URL, "https://start.engagespark.com/api/v1/messages/sms");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, "organization_id=8244&recipient_type=mobile_number&mobile_numbers=[639051946970]&message=Sample message to you.&sender_id=engageSPARK";
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$result = curl_exec($ch);
curl_close($ch);
$result = json_decode($result);
print_r($result);
?>
