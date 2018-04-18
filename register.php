<?php include 'html-head.php'; ?>
<body class="boxed">
<!-- Loader -->
<div class="fh5co-loader"></div>

<div id="wrap">

  <div id="fh5co-page">
    <?php include 'header.php'; ?>
    <div id="fh5co-intro" class="fh5co-section">
      <div class="container">
        <div class="row row-bottom-padded-md">
          <div class="col-md-8 col-md-offset-2 text-center ts-intro">
            <h2>Users</h2>
            <p>Please register with information below: </p>
            <form class="form-horizontal" action='register-db.php' method = "post">
              <div class="form-group">
                <label class="control-label col-sm-2" for="firstName">First Name:</label>
                <div class="col-sm-10">
                  <input class="form-control" type = "text" id="firstName" name="FIRSTNAME" placeholder="Chris" required autofocus/>
                </div>
                <label class="control-label col-sm-2" for="lastName">Last Name:</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" id="lastName" name="LASTNAME" placeholder="Li" required/>
                </div>
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                  <input class="form-control" type="email" id="email" name = "EMAIL" placeholder="me@email.com" required/>
                </div>
                <label class="control-label col-sm-2" for="address">Address:</label>
                <div class="col-sm-10">
                  <input class="form-control" type = "text" id="address" name = "ADDRESS" placeholder="California" required/>
                </div>
                <label class="control-label col-sm-2" for="cellPhone">Cell Phone:</label>
                <div class="col-sm-10">
                  <input class="form-control" type = "text" id="cellPhone" name = "CELLPHONE" placeholder="1234567890" required/>
                </div>
                <label class="control-label col-sm-2" for="homePhone">Home Phone:</label>
                <div class="col-sm-10">
                  <input class="form-control" type = "text" id="homePhone" name = "HOMEPHONE" placeholder="1234567890" required/>
                </div>
              </div>
              <button type="submit" name="SUBMIT" class="btn btn-default">Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php include 'footer.php'; ?>
  </div>
</div>

<?php include 'html-tail.php'; ?>
</body>
