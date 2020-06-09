<?php
$admin = "admin";
$password = password_hash($admin, PASSWORD_DEFAULT);
echo $password;

?>
