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
