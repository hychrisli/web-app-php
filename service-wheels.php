<?php include 'lib.php';
setServiceCookie('Wheels', basename($_SERVER['PHP_SELF']));
if ( isset($_GET['username'])) setUser($_GET['username']);
logVisit(25, $_GET['username']);
?>

<?php include 'html-head.php'; ?>
<body class="boxed">
<!-- Loader -->
<div class="fh5co-loader"></div>

<div id="wrap">

  <div id="fh5co-page">
    <?php include 'header.php'; ?>
    <img src="images/services/wheels.jpg" class="img-responsive img-bordered center-block">
    <div id="fh5co-intro" class="fh5co-section">
      <div class="container">
        <div class="row row-bottom-padded-md">
          <div class="col-md-8 col-md-offset-2 text-center ts-intro">
            <h1>Wheels</h1>
            <p class="fh5co-lead">Ronsco is a long-term supplier of freight and transit wheels to the North American and international
              markets through our partnership with leading international wheel manufacturing companies.</p>

            <p class="fh5co-lead">  Ronsco works closely with our customers and manufacturing partners to design and develop standard AAR and
              custom wheel designs and profiles. We have the ability to create new wheel profiles and designs to the
              exacting standards of the AAR, APTA, and other standards through the use of detailed FEA and engineering
              analysis.</p>

            <p class="fh5co-lead">  Ronsco has experienced technical and quality teams that work with our manufactures to ensure the products
              are being produced according to standards and practices that are required. Ronsco also maintains strong
              technical field experience allowing us to monitor and manage wheel performance throughout the wheel
              lifecycle.</p>
            </p>
          </div>
        </div>
      </div>
      <?php include 'footer.php'; ?>
    </div>
  </div>

  <?php include 'html-tail.php'; ?>
</body>

