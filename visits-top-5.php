<?php include 'html-head.php'; ?>
<body class="boxed">
<!-- Loader -->
<div class="fh5co-loader"></div>

<div id="wrap">

  <div id="fh5co-page">
    <?php include 'header.php'; ?>
    <div id="fh5co-intro" class="fh5co-section">
      <div class="container">
        <div class="row row-bottom-padded-md">
          <div class="col-md-8 col-md-offset-2 text-center ts-intro">
            <h1>Top 5 Visited Pages</h1>
            <?php
            $serializedVisitCnt = $_COOKIE['VISIT_CNT'];
            $visitCnt = unserialize($serializedVisitCnt);
            arsort($visitCnt);
            $cnt = 1;
            print('<ul>');
            foreach ($visitCnt as $key => $value){
              $page = unserialize($key);
              print("<li>$cnt. <a href=$page[1] style='padding-right:5em'>$page[0]</a> $value </li>");
              if ($cnt++ >= 5) break;
            }
            print('</ul>');
            ?>
          </div>
        </div>
      </div>
      <?php include 'footer.php'; ?>
    </div>
  </div>

  <?php include 'html-tail.php'; ?>
</body>

