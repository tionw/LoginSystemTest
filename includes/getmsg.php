<?php
include_once 'dbh-inc.php';
$sql = "SELECT * FROM message";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<p>";
    echo $row['msg_uid'];
    echo "<br>";
    echo $row['msg_content'];
    echo "</p>";
    echo "<br><br>";
  }
} else {
  echo "There are no comments";
}
