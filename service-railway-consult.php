<?php include 'lib.php';
setServiceCookie('Railway Consulting', basename($_SERVER['PHP_SELF']));
if ( isset($_GET['username'])) setUser($_GET['username']);
logVisit(31, $_GET['username']);
?>

<?php include 'html-head.php'; ?>
<body class="boxed">
<!-- Loader -->
<div class="fh5co-loader"></div>

<div id="wrap">

  <div id="fh5co-page">
    <?php include 'header.php'; ?>
    <img src="images/services/railway-consulting.jpg" class="img-responsive img-bordered center-block">
    <div id="fh5co-intro" class="fh5co-section">
      <div class="container">
        <div class="row row-bottom-padded-md">
          <div class="col-md-8 col-md-offset-2 text-center ts-intro">
            <h1>Railway Consulting</h1>
            <p class="fh5co-lead">AllRail is the consulting services division of Ronsco Inc., focused solely on railway
              related projects. These services include Transportation and Capacity Planning, Engineering Services, Rail
              Operations, Yard/Track Layout, Technical Specification Preparation, Tender Document Preparation, Expert
              Witness, Rail Bridge design and inspection, Rail car design and modification, Locomotive Upgrade and
              Modification, Site Inspections. Whether it’s the opening of a new mine, plant expansion or improved
              efficiency of your rail operation, we can plan, design and help implement solutions that will improve
              efficiency at your operation. We provide our rail expertise to freight, intercity and commuter passenger
              rail operators, private industries as well as different levels of government. </p>
          </div>
        </div>
      </div>
      <?php include 'footer.php'; ?>
    </div>
  </div>

  <?php include 'html-tail.php'; ?>
</body>

