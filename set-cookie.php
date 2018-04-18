<?php

  function setServiceCookie($name, $url){
    if (isset($_COOKIE["VISIT_TS"])){
      $visitTs = unserialize($_COOKIE['VISIT_TS']);
    } else {
      $visitTs = [];
    }

    if (isset($_COOKIE["VISIT_CNT"])){
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


