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
            <h2>Search For User</h2>
            <p>Select a field to searchc</p>
            <form class="form-horizontal" method="post">
              <div class="form-group">
                <label class="control-label col-sm-2" for="field">Field</label>
                <div class="col-sm-10">
                  <select class="form-control" id="field" name="FIELD" required autofocus>
                    <option selected='selected'>*</option>
                    <option>name</option>
                    <option>email</option>
                    <option>phone</option>
                  </select>
                </div>
                <label class="control-label col-sm-2" for="pattern">Pattern</label>
                <div class="col-sm-10">
                  <input class="form-control" id="pattern" type="text" name="PATTERN"/>
                </div>
              </div>
              <button type="submit" name="SUBMIT" class="btn btn-default">Search</button>
            </form>

            <?php
            extract($_POST);

            if (isset($SUBMIT)) {

              $sql = "SELECT * FROM USER WHERE lower($FIELD)  LIKE '%" . $PATTERN . "%'";
              $PATTERN = strtolower($PATTERN);

              if ($FIELD === 'name')
                $sql = "SELECT * FROM USER WHERE lower(first_name) LIKE '%" . $PATTERN . "%'" .
                  "or lower(last_name) LIKE '%" . $PATTERN . "%'";
              else if ($FIELD === 'phone')
                $sql = "SELECT * FROM USER WHERE lower(home_phone) LIKE '%" . $PATTERN . "%'" .
                  " or lower(cell_phone) LIKE '%" . $PATTERN . "%'";

              $DBUSER = getenv('LAMP_DB_USER');
              $DBPASS = getenv('LAMP_DB_PASS');

              $conn = new mysqli('localhost', $DBUSER, $DBPASS, 'lamp');
              if ($conn->connect_error) {
                die("Connection failed:" . $conn->connect_error);
              }

              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                print (
                "<table border = \"1\" cellpadding = \"3\" cellspacing = \"2\">
                    <tr>
                      <td>First Name</td>
                      <td>Last Name</td>
                      <td>Email</td>
                      <td>Address</td>
                      <td>Home Phone</td>
                      <td>Cell Phone</td>
                    </tr>"
                );
                while ($row = $result->fetch_assoc()) {
                  print ("<tr>");
                  foreach ($row as $key => $value) {
                    print("<td>$value</td>");
                  }
                  print ("</tr>");
                }
                print("</table>");
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
