<?php

$ch = curl_init("localhost/mydata.php");
$content = curl_exec($ch);
$regex = '#<table>(.*?)</table>#';
$res = preg_match($regex, $content,$match );

print($match[0]);
curl_close($ch);


