<?php

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://wwww.developer.globelabs.com.ph/oauth/access_token');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curl);
curl_close($curl);

 ?>
