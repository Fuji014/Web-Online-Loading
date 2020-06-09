<?php

$content = array(
"organization_id" => 8244,
"recipient_type" => "mobile_number",
"mobile_numbers" => ["639051946970"],
"message" => "Sample message to you.",
"sender_id" => "engageSPARK"
);
$content = http_build_query($content);
$header[] = "Authorization: Token 28c29dc2b3ef0622b448254bf5ab9d083adc2e20";
$header[] = "Content-type: application/json ";
$url="https://start.engagespark.com/api/v1/messages/sms";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
$result = curl_exec($curl);
curl_close($curl);
$result = json_decode($result);
print_r($result);

?>
