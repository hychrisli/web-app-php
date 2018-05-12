<?php include 'lib.php';
setServiceCookie('Rail Car Repair', basename($_SERVER['PHP_SELF']));
if ( isset($_GET['username'])) setUser($_GET['username']);
logVisit(30, $_GET['username']);
?>

<?php include 'html-head.php'; ?>
<body class="boxed">
<!-- Loader -->
<div class="fh5co-loader"></div>

<div id="wrap">

  <div id="fh5co-page">
    <?php include 'header.php'; ?>
    <img src="images/services/railcar-repair.jpg" class="img-responsive img-bordered center-block">
    <div id="fh5co-intro" class="fh5co-section">
      <div class="container">
        <div class="row row-bottom-padded-md">
          <div class="col-md-8 col-md-offset-2 text-center ts-intro">
            <h1>Rail Car Repair</h1>
            <p class="fh5co-lead">Programs, as well as specially engineered railcar conversion projects. We currently
              operate in a modern facility west of Montreal (Coteau-du-lac), Quebec as well as providing mobile services
              in Halifax, Montreal, Valleyfield, and across the province of Quebec.</p>
          </div>
        </div>
      </div>
      <?php include 'footer.php'; ?>
    </div>
  </div>

  <?php include 'html-tail.php'; ?>
</body>

