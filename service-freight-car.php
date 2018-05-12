<?php include 'lib.php';
setServiceCookie('Freight Car', basename($_SERVER['PHP_SELF']));
if ( isset($_GET['username'])) setUser($_GET['username']);
logVisit(26, $_GET['username']);
?>

<?php include 'html-head.php'; ?>
<body class="boxed">
<!-- Loader -->
<div class="fh5co-loader"></div>

<div id="wrap">

  <div id="fh5co-page">
    <?php include 'header.php'; ?>
    <img src="images/services/freight-car.png" class="img-responsive img-bordered center-block">
    <div id="fh5co-intro" class="fh5co-section">
      <div class="container">
        <div class="row row-bottom-padded-md">
          <div class="col-md-8 col-md-offset-2 text-center ts-intro">
            <h1>Freight Car Parts</h1>
            <p class="fh5co-lead">Ronsco carries an extensive array of common replacement parts for all types of
              railcars, locomotives, and track componentry. This product offering is designed to support the material
              requirements of railways, railcar maintenance facilities, new car builders, leasing companies, shippers,
              and all other railcar owners. Replacements parts are distributed out of strategically located warehousing
              facilities in Edmonton (Alberta), Hamilton (Ontario), & Coteau-du-lac (Montreal,Quebec).</p>
          </div>
        </div>
      </div>
      <?php include 'footer.php'; ?>
    </div>
  </div>

  <?php include 'html-tail.php'; ?>
</body>

