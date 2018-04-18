<?php

extract($_POST);

if ( !$USERNAME || !$PASSWORD ) {
  header("Location: login.php");
  die();
}

$userVerified = false;
$loginFile = fopen('./resource/login.txt', 'r');

while (!feof($loginFile)&&!$userVerified){

  $line = fgets($loginFile);

  $line = chop($line);
  $field = explode(",", $line, 2);

  print ($field."<br>");

  if ( $USERNAME == trim($field[0]) && $PASSWORD == trim($field[1])){
    $userVerified = true;
  }
}
fclose($loginFile);

if ( $userVerified ){
  header("Location: members.php");
  die();
} else {
  header("Location: login.php");
  die();
}
