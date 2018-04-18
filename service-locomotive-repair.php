<?php include 'set-cookie.php';
setServiceCookie('Locomotive Repair', basename($_SERVER['PHP_SELF']));
?>

<?php include 'html-head.php'; ?>
<body class="boxed">
<!-- Loader -->
<div class="fh5co-loader"></div>

<div id="wrap">

  <div id="fh5co-page">
    <?php include 'header.php'; ?>
    <img src="images/services/locomotive-repair.jpg" class="img-responsive img-bordered center-block">
    <div id="fh5co-intro" class="fh5co-section">
      <div class="container">
        <div class="row row-bottom-padded-md">
          <div class="col-md-8 col-md-offset-2 text-center ts-intro">
            <h1>Locomotive Repair</h1>
            <p class="fh5co-lead">Ronsco, in conjunction with our Allrail subsidiary, provides locomotive repair
              services in our conveniently located Montreal (Coteau-du-lac) location, as well as providing mobile
              services in Montreal, Toronto, and across the province of Quebec. With a yard capacity of 100 to 120
              units, 50,000 sq-ft and 8 tracks under roof, the shop is well equipped with a pit, paint booth, 35-ton
              crane, and 50-ton jacks allowing for a variety of locomotive maintenance and overhaul projects.</p>

            <p class="fh5co-lead">We are an approved installation shop for trip optimizers on CN fleet, as well as an approved shop for
              positive train control installation (PTC).</p>
          </div>
        </div>
      </div>
      <?php include 'footer.php'; ?>
    </div>
  </div>

  <?php include 'html-tail.php'; ?>
</body>

