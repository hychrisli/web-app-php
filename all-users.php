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
            <h2>All Users</h2>

            <h3>www.isanlam.net</h3>
            <?php
            $ch = curl_init("http://www.isanlam.net/index.php/mydata/");
            $options = array(
              CURLOPT_CUSTOMREQUEST => "GET",        //set request type post or get
              CURLOPT_POST => false,        //set to GET
              CURLOPT_COOKIEFILE => "cookie.txt", //set cookie file
              CURLOPT_COOKIEJAR => "cookie.txt", //set cookie jar
              CURLOPT_RETURNTRANSFER => true,     // return web page
              CURLOPT_HEADER => false,    // don't return headers
              CURLOPT_FOLLOWLOCATION => false,     // follow redirects
              CURLOPT_ENCODING => "",       // handle all encodings
              CURLOPT_AUTOREFERER => true,     // set referer on redirect
              CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
              CURLOPT_TIMEOUT => 120,      // timeout on response
              CURLOPT_MAXREDIRS => 10,       // stop after 10 redirects
            );
            curl_setopt_array($ch, $options);
            $content = curl_exec($ch);
            $doc = new DOMDocument();
            $doc->loadHTML($content);
            $xpath = new DOMXPath($doc);

            $nodes = $xpath->query('//table');
            $htmlstring = $doc->saveHTML($nodes->item(0));

            print($htmlstring);
            curl_close($ch);

            ?>

            <br><br><h3>litemech.com</h3>
            <?php
            $ch = curl_init("http://litemech.com/database.php");
            $options = array(
              CURLOPT_CUSTOMREQUEST => "GET",        //set request type post or get
              CURLOPT_POST => false,        //set to GET
              CURLOPT_COOKIEFILE => "cookie.txt", //set cookie file
              CURLOPT_COOKIEJAR => "cookie.txt", //set cookie jar
              CURLOPT_RETURNTRANSFER => true,     // return web page
              CURLOPT_HEADER => false,    // don't return headers
              CURLOPT_FOLLOWLOCATION => false,     // follow redirects
              CURLOPT_ENCODING => "",       // handle all encodings
              CURLOPT_AUTOREFERER => true,     // set referer on redirect
              CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
              CURLOPT_TIMEOUT => 120,      // timeout on response
              CURLOPT_MAXREDIRS => 10,       // stop after 10 redirects
            );
            curl_setopt_array($ch, $options);
            $content = curl_exec($ch);
            $doc = new DOMDocument();
            $doc->loadHTML($content);
            $xpath = new DOMXPath($doc);

            $nodes = $xpath->query('//table');
            $htmlstring = $doc->saveHTML($nodes->item(0));

            print($htmlstring);
            curl_close($ch);

            ?>

            <br><br><h3>lamp.hychris.li</h3>
            <?php

            $sql = "SELECT * FROM USER";

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