<?php include 'lib.php';
setServiceCookie('Contract Distribution', basename($_SERVER['PHP_SELF']));
if ( isset($_GET['username'])) setUser($_GET['username']);
logVisit(33, $_GET['username']);
?>

<?php include 'html-head.php'; ?>
<body class="boxed">
<!-- Loader -->
<div class="fh5co-loader"></div>

<div id="wrap">

  <div id="fh5co-page">
    <?php include 'header.php'; ?>
    <img src="images/services/contract-distribution.jpg" class="img-responsive img-bordered center-block">
    <div id="fh5co-intro" class="fh5co-section">
      <div class="container">
        <div class="row row-bottom-padded-md">
          <div class="col-md-8 col-md-offset-2 text-center ts-intro">
            <h1>Contract Distribution</h1>
            <p class="fh5co-lead">Ronsco’s strength is in efficiently procuring, stocking, distributing and providing
              tailored logistical services associated with railway parts that we inventory. Ronsco contract distribution
              is designed to help our clients focus on their core competencies, whether that is running a railroad, a
              repair facility, or leasing railcars. Under a contract distribution arrangement, Ronsco acts as a your
              centralized point for all your railcar and locomotive material requirements. Streamlining and
              consolidating the purchasing, logistic and inventory process, will drastically minimize the cost and
              burden on your operations. Ronsco strength is in efficiently procuring, stocking, distributing and
              logistics associated with railway parts. Let us leverage what we do best while you (our customers) focus
              on what you do best.</p>
          </div>
        </div>
      </div>
      <?php include 'footer.php'; ?>
    </div>
  </div>

  <?php include 'html-tail.php'; ?>
</body>

