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
            <h2>Members</h2>
            <?php
              $memberFile = fopen('./resource/members.txt', 'r');
              while ( !feof($memberFile) ) {
                $line = fgets($memberFile);
                echo "<p>$line</p>";
              }
            ?>
          </div>
        </div>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </div>
</div>

<?php include 'html-tail.php'; ?>
</body>
