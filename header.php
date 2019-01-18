<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login System</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/socket.io/socket.io.js"></script>
    <script src="/main.js"></script>
    <script type="text/javascript">
      // var msginput = document.getElementById("msg1");
      // var msgarea = document.getElementById("msg-area");
      // function update() {
      //   $.get("includes/getmsg.php", function(data) {
      //     document.getElementById("messagebox").innerHTML = data;
      //   });
      // }
      //   // var message = msginput.value;
      //   // var xmlhttp = new XMLHttpRequest();
      //   // var output = "";
      //   // xmlhttp.onreadystatechange = function() {
      //   //   if (xmlhttp.readyState==4 && xmlhttp.status==200){
      //   //     var response = xmlhttp.responseText.split("\n")
      //   //     var rl = response.length
      //   //     var item = "";
      //   //     for (var i = 0; i < rl; i++) {
      //   //       item = response[i].split("\\");
      //   //       if (item[1] != undefined) {
      //   //         output += item[1];
      //   //       }
      //   //     }
      //   //     msgarea.innerHTML = output;
      //   //     msgarea.scrollTop = msgarea.scrollHeight;
      //   //   }
      //   // }
      //   // xmlhttp.open("GET","includes/getmsg.php?u_uid=" + , true);
      //   // xmlhttp.send();
      // }
      // setInterval(function() { update(); }, 500);
    </script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <nav>
        <div class="main-wrapper">
          <ul>
            <li><a href="index.php">Home</a></li>
          </ul>
          <div class="nav-login">
            <?php
              if (isset($_SESSION['u_id'])) {
                echo '<form class="" action="includes/logout-inc.php" method="post">
                              <button type="submit" name="submit">Logout</button>
                            </form>';
              } else{
                echo '<form class="" action="includes/login-inc.php" method="post">
                              <input type="text" name="uid" placeholder="Username/email">
                              <input type="password" name="pwd" placeholder="password">
                              <button type="submit" name="submit">Login</button>
                            </form>
                            <a href="signup.php">Sign up</a>';
              }
            ?>
          </div>
        </div>
      </nav>
    </header>
