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
            <h1>Last 5 Visited Pages</h1>
            <?php
              $serialized_data = $_COOKIE['VISIT_TS'];
              $visitTs = unserialize($serialized_data);
              arsort($visitTs);
              $cnt = 1;
              print('<ul>');
              foreach ($visitTs as $key => $value){
                $page = unserialize($key);
                $date = date('m/d/Y h:i:s a', $value);
                print("<li>$cnt. <a href=$page[1] style='padding-right:5em'>$page[0]</a> $date </li>");
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

