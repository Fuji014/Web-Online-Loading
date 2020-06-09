<?php
require_once(__DIR__ . '/autoload.php');

use Globe\Connect\Sms;

$sms = new Sms('jerome', 'https://developer.globelabs.com.ph/dialog/oauth?app_id=aa7xhBp5zLh5rTGrpRi5g6hq6aa5hdXx');

// send message
$sms->setReceiverAddress('09051946970');
$sms->setMessage('hiii');
$sms->setClientCorrelator('');
echo $sms->sendMessage();

// send binary message
$sms->setReceiverAddress('[address]');
$sms->setUserDataHeader('[header]');
$sms->setDataEncodingScheme('[scheme]');
$sms->setMessage('[message]');
echo $sms->sendBinaryMessage();
