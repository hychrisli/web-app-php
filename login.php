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
            <h2>Login</h2>
            <p>Please type in your username and password</p>
            <form action = "login-verify.php" method = "post">
              <div>Username:</div>
              <input type = "text" name = "USERNAME" placeholder="Admin" required autofocus/>
              <div>Password:</div>
              <input type = "password" name = "PASSWORD" placeholder="***" required/>
              <br>
              <input type = "submit" name = "LOGIN" value = "Login"/>
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
