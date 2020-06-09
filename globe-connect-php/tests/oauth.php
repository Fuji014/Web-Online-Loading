<?php
require_once(__DIR__ . '/autoload.php');

use Globe\Connect\Oauth;

$oauth = new Oauth('aa7xhBp5zLh5rTGrpRi5g6hq6aa5hdXx', '373cdf812b4303b43909141f848b3ff589f45c1a13616c06438f1bb943134773');

// get redirect url
echo $oauth->getRedirectUrl();

// get access token
$oauth->setCode('21589344 (Cross-telco: Not Available)');
echo $oauth->getAccessToken();
