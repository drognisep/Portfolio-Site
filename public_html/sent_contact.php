<?php
$error = false;
if(isset($_GET['error'])) {
  $error = true;
  $emsg = isset($_GET['error_msg']) ? $_GET['error_msg'] : "";
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/contact.css">
    <script src="js/contact.js"></script>
    <title>
      <?php if($error) { echo "Error occured"; } else { echo "Success!"; }?>
    </title>
  </head>
  <body>
    <div class="contact-container" style="background-color: rgb(193,220,232);">
      <div class="contact-form" style="position: absolute; top: 50%; margin-top: -64px; padding: 32px 16px 32px 16px; text-align: center; color: rgb(193,220,232);">
        <?php
          if($error) {
            echo "<h3>Error Occured!</h3>";
            echo "<p>\"".$emsg.",\" ";
            echo "click <a href='contact.php'>here</a> to try again.</p>";
          } else {
            echo "<h3>Thank you for reaching out to me</h3>";
            echo "<p>Your feedback is very important to me and someone will be contacting you soon!</p>";
            echo "<p>Click <a href='contact.php'>here</a> to send another "
            . "message, ";
            echo "or <a href='index.php'>here</a> to go back to the main "
            . "page.</p>";
          }
        ?>
      </div>
    </div>
  </body>
</html>
