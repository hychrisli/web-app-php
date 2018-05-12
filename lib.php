<?php

function setServiceCookie($name, $url)
{
  if (isset($_COOKIE["VISIT_TS"])) {
    $visitTs = unserialize($_COOKIE['VISIT_TS']);
  } else {
    $visitTs = [];
  }

  if (isset($_COOKIE["VISIT_CNT"])) {
    $visitCnt = unserialize($_COOKIE['VISIT_CNT']);
  } else {
    $visitCnt = [];
  }
  $key = serialize([$name, $url]);
  $visitTs [$key] = time();
  if (isset($visitCnt[$key])) $visitCnt[$key] += 1;
  else $visitCnt[$key] = 1;
  $serializedVisitTs = serialize($visitTs);
  $serializedVisitCnt = serialize($visitCnt);
  setcookie("VISIT_TS", $serializedVisitTs);
  setcookie("VISIT_CNT", $serializedVisitCnt);
}

function setUser($username){
  if (isset($username)) {
    setcookie("USER", $username);
  }
}

function getUsername()
{
  if ( isset($_COOKIE["USER"]))
    return $_COOKIE["USER"];
  else
    return "NULL";
}

function logVisit ($productId, $username){

  $DBUSER = getenv('MARKET_DB_USER');
  $DBPASS = getenv('MARKET_DB_PASS');
  $HOST = getenv('MARKET_HOST');

  $conn = new mysqli($HOST, $DBUSER, $DBPASS, 'marketplace');
  if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
  }
  $conn->set_charset("utf8");

  if ( ! isset($username) ) $username = getUsername();
  if ( $username !== "NULL") $username = "'$username'";

  $datetime = date('Y-m-d H:i:s');
  $sql = "INSERT INTO VISIT_LOG(productId, username, visitTs) VALUES($productId,$username,'$datetime');";
  $sql .= "UPDATE PRODUCT SET totVisits = totVisits + 1 where productId = $productId;";
  $conn->multi_query($sql);
}
