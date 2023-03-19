<?php
$url = "http://localhost:63342/PHP/php-darslari/news/json.php";

$file = file_get_contents($url);
echo "<pre>";
print_r(json_decode($file));