<?php
  include_once 'header.php';
  include_once 'includes/dbh-inc.php';
?>
    <section class="main-container">
      <div class="main-wrapper">
        <h2>Home</h2>
        <?php
          if (isset($_SESSION['u_id'])) {
            echo "You are logged in!";
            echo '<form name="form1" action="includes/msg-inc.php" method="post">
                      <textarea name="msg1" placeholder="Your message"></textarea><br />
                      <button type="submit" name="submit2">Send</button><br /><br />
                    </form>';
          }
        ?>

        <div id="messagebox">
          <?php
            include_once 'includes/getmsg.php';
          ?>
        </div>
      </div>
    </section>
<?php
  include_once 'footer.php';
?>
