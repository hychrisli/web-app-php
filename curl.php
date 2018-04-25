<?php

$ch = curl_init("lamp.hychris.li/mydata.php");
$options = array(
  CURLOPT_CUSTOMREQUEST  =>"GET",        //set request type post or get
  CURLOPT_POST           =>false,        //set to GET
  CURLOPT_COOKIEFILE     =>"cookie.txt", //set cookie file
  CURLOPT_COOKIEJAR      =>"cookie.txt", //set cookie jar
  CURLOPT_RETURNTRANSFER => true,     // return web page
  CURLOPT_HEADER         => false,    // don't return headers
  CURLOPT_FOLLOWLOCATION => false,     // follow redirects
  CURLOPT_ENCODING       => "",       // handle all encodings
  CURLOPT_AUTOREFERER    => true,     // set referer on redirect
  CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
  CURLOPT_TIMEOUT        => 120,      // timeout on response
  CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
);
curl_setopt_array( $ch, $options );
$content = curl_exec($ch);
$doc = new DOMDocument();
$doc->loadHTML($content);
$xpath = new DOMXPath($doc);

$nodes = $xpath->query('//table');
$htmlstring = $doc->saveHTML($nodes->item(0));

print($htmlstring);
curl_close($ch);


