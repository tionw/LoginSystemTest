<?php

session_start();
if(isset($_POST['submit2'])){
  include_once 'dbh-inc.php';
  $uid = $_SESSION['u_uid'];
  $msg1 = $_POST['msg1'];

  //Error handers
  //Check for empty fields
  if(empty($msg1)) {
    header("Location: ../index.php?msg=empty");
    exit();
  } else{
    $sql = "INSERT INTO message (msg_uid, msg_content) VALUES ('$uid', '$msg1');";
    mysqli_query($conn, $sql);
    header("Location: ../index.php?msg=success");
    exit();
  }

} else{
  header("Location: ../index.php");
  exit();
}
