<?php include 'set-cookie.php';
setServiceCookie('Axles', basename($_SERVER['PHP_SELF']));
?>

<?php include 'html-head.php'; ?>
<body class="boxed">
<!-- Loader -->
<div class="fh5co-loader"></div>

<div id="wrap">

  <div id="fh5co-page">
    <?php include 'header.php'; ?>
    <?php
      if (isset($_COOKIE['last5'])){
        $last5 = unserialize($_COOKIE['last5']);
      } else {
        $last5 = [];
      }
      $last5 ['Axles'] = ['service-axles.php', time()];
      setcookie('last5', serialize($last5));
    ?>
    <img src="images/services/axles.jpeg" class="img-responsive img-bordered center-block">
    <div id="fh5co-intro" class="fh5co-section">
      <div class="container">
        <div class="row row-bottom-padded-md">
          <div class="col-md-8 col-md-offset-2 text-center ts-intro">
            <h1>Axles</h1>
            <p class="fh5co-lead">Since 2001, Ronsco has been a leading manufacturer of freight and transit axles. At
              our AAR M-1003 certified axle finishing facility located in Oakville (Toronto), Ontario, we excel at
              producing a broad range of standard North American (AAR) axles as well as a variety of special designs for
              the local and international markets.</p>

            <p class="fh5co-lead">  Our capabilities include the supply of new, converted (turndown), and re-qualified axles. Quality control
              practices include ultrasonic testing, magnetic particle inspection, as well as strict dimensional and
              metallurgical controls.</p>

            <p class="fh5co-lead">  Our predominant AAR freight axle types include Class D, E, F, G, & K. We also provide a broad range of
              locomotive and transit car axles in grade F or specialty steel grades. Our manufacturing flexibility
              allows us to produce axles that range from the 914 mm through to standard 1435mm gauge.</p>

            <p class="fh5co-lead">  Our axle facility is centrally located to major intermodal and freight yards which allow us to efficiently
              deliver axles throughout North America and international markets.</p>
          </div>
        </div>
      </div>
      <?php include 'footer.php'; ?>
    </div>
  </div>

  <?php include 'html-tail.php'; ?>
</body>

