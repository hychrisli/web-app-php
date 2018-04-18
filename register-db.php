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

            <?php
            extract($_POST);
            $isError = false;

            if (isset($SUBMIT)) {
              if (
                $FIRSTNAME == "" ||
                $LASTNAME == "" ||
                $EMAIL == "" ||
                $ADDRESS == "" ||
                $HOMEPHONE == "" ||
                $CELLPHONE == "")
                $isError = true;

              if (!$isError) {

                $sql = "INSERT INTO USER (first_name, last_name, email, address,  home_phone, cell_phone)" .
                  "VALUE('$FIRSTNAME', '$LASTNAME', '$EMAIL', '$ADDRESS', '$HOMEPHONE', '$CELLPHONE')";

                $DBUSER = getenv('LAMP_DB_USER');
                $DBPASS = getenv('LAMP_DB_PASS');

                $conn = new mysqli('localhost', $DBUSER, $DBPASS, 'lamp');
                if ($conn->connect_error) {
                  die("Connection failed:" . $conn->connect_error);
                }

                if ($conn->query($sql) === TRUE) {
                  print "New Record created successfully";
                } else
                  die ("Error" . $conn->error);
              }
            }
            ?>

          </div>
        </div>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </div>
</div>

<?php include 'html-tail.php'; ?>
</body>
