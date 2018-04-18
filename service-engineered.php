<?php include 'set-cookie.php';
setServiceCookie('Engineered Parts', basename($_SERVER['PHP_SELF']));
?>

<?php include 'html-head.php'; ?>
<body class="boxed">
<!-- Loader -->
<div class="fh5co-loader"></div>

<div id="wrap">

  <div id="fh5co-page">
    <?php include 'header.php'; ?>
    <img src="images/services/engineered-parts.jpg" class="img-responsive img-bordered center-block">
    <div id="fh5co-intro" class="fh5co-section">
      <div class="container">
        <div class="row row-bottom-padded-md">
          <div class="col-md-8 col-md-offset-2 text-center ts-intro">
            <h1>Engineered Products</h1>
            <p class="fh5co-lead">Ronsco works with our customers for the design, manufacture, and distribution of a
              broad range of specialty track and engineered components. Ronsco provides a broad range of services which
              includes, project management, engineering design, manufacturing, quality and testing services.</p>

            <p class="fh5co-lead">  We have successfully managed and delivered many major multiyear projects with major transit and heavy rail
              customers.</p>
          </div>
        </div>
      </div>
      <?php include 'footer.php'; ?>
    </div>
  </div>

  <?php include 'html-tail.php'; ?>
</body>

