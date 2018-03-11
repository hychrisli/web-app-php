<?php include 'html-head.php'; ?>

<body class="boxed">
<!-- Loader -->
<div class="fh5co-loader"></div>

<div id="wrap">

  <div id="fh5co-page">
    <?php include 'header.php'; ?>
    <!-- Header -->

    <div id="fh5co-intro" class="fh5co-section">
      <div class="container">
        <div class="row row-bottom-padded-sm">
          <div class="col-md-8 col-md-offset-2 text-center ts-intro">
            <h1>Get In Touch</h1>
            <p class="fh5co-lead">Template handcrafted by <a href="http://freehtml5.co/"
                                                             target="_blank">FreeHTMl5.co</a> Lorem ipsum dolor sit
              amet, consectetur adipisicing elit. Dolores explicabo quibusdam quae saepe non quasi quaerat adipisci eum
              dignissimos similique!</p>
          </div>
        </div>
        <div class="row row-bottom-padded-sm">
          <div class="col-md-6" id="fh5co-content">
            <form action="#" method="post">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="name">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Send Message">
              </div>
            </form>
          </div>
          <div class="col-md-4 col-md-push-1 col-sm-12 col-sm-push-0" id="fh5co-sidebar">
            <div class="fh5co-contact-info">
              <h3>Contact Info</h3>
              <?php $lines = file('./resource/contact.txt'); ?>
              <address>
                <?php echo $lines[0] ?>
              </address>
              <p>Tel: <?php echo $lines[1] ?></p>
              <p>Email: <a href="#"><?php echo $lines[2] ?></a></p>
              <p>Website: <a href="#"><?php echo $lines[3] ?></a></p>
            </div>

          </div>
        </div>


      </div>
    </div>

    <?php include 'footer.php'; ?>
  </div>
</div>

<div class="gototop js-top">
  <a href="#" class="js-gotop"><i class="icon-chevron-down"></i></a>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>

