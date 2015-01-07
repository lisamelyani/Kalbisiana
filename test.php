<?php

$password  = "admin";
$format    = "$2a$10$"; // blowfish
$hash      = "MauTaupasswordsayahahaha20";
$salt      = $format . $hash;

$new_pass  = crypt($password, $salt);
echo $new_pass;

?>