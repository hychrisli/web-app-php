<?php include 'lib.php';
setServiceCookie('Railway Training', basename($_SERVER['PHP_SELF']));
if ( isset($_GET['username'])) setUser($_GET['username']);
logVisit(32, $_GET['username']);
?>

<?php include 'html-head.php'; ?>
<body class="boxed">
<!-- Loader -->
<div class="fh5co-loader"></div>

<div id="wrap">

  <div id="fh5co-page">
    <?php include 'header.php'; ?>
    <img src="images/services/railway-training.jpg" class="img-responsive img-bordered center-block">
    <div id="fh5co-intro" class="fh5co-section">
      <div class="container">
        <div class="row row-bottom-padded-md">
          <div class="col-md-8 col-md-offset-2 text-center ts-intro">
            <h1>Railway Consulting</h1>
            <p class="fh5co-lead"> AllTrain, a division of Ronsco Inc., offers a library of industry specific eLearning
               courses for the railway and airline industries. Our course library also includes generic eLearning and
               instructor-led courses. Our communication solutions allow you to get information out to employees in a
               timely, structured and cost effective fashion. Whether you are looking for a simple job aid to
               communicate a procedural change, an eLearning course to train the masses, or a full blown simulation to
               practice important job details, AllTrain provides people, experience and technology to develop the right
               solutions. AllTrain Instructional Technologists are experienced in guiding organizations of all sizes to
               reach their training objectives. Consult AllTrain’s professional team to ensure you are choosing the
               right solution for your training or communication needs and maximizing the return on your valuable
               training budgets.</p>
          </div>
        </div>
      </div>
      <?php include 'footer.php'; ?>
    </div>
  </div>

  <?php include 'html-tail.php'; ?>
</body>

