<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:700|Open+Sans+Condensed:300,700|Alegreya|Oswald|Cinzel:900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link href="css/contact.css" type="text/css" rel="stylesheet">
<script src="js/contact.js"></script>

<meta charset="ISO-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Expires" content="0"/>

<title>Welcome to my project portfolio!</title>
</head>

<body onload="checkEnableMessage(); updateCharCount();">
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<div id="header" class="my-header-bar">
  <h1>Saylor's Solutions</h1>
  <p>Innovative Software for Modern Businesses</p>
</div>

<div id="topmenu" class="my-top-menu-bar">
  <div class="container">
    <a href="index.php">Home</a>
    <a href="projects.html">Projects</a>
    <a href="about.html">About Me</a>
    <a href="contact.php">Contact</a>
  </div>
</div>

<div class="my-main-frame">
  <div class="my-content">
    <h3>Contact information</h3>
    <h4>I can be contacted using the form below, here are some guidelines that will help ensure a prompt reply:</h4>
    <ul>
      <li>Please be courteous and patient in your communications. I understand that your need may be dire, but it may not be the only issue being resolved at the moment.</li>
      <li>Consider <a href="http://saylorsolutions.com/mailman/listinfo/projects_saylorsolutions.com">joining the mailing list</a> for feedback from the community, or to get involved in the creative process.</li>
      <li><strong>Do not</strong> send me marketing material of any kind (spam/phishing/junk). I'm open to recruiting, but please keep it professional and don't fill my inbox.</li>
    </ul>
    <form class="contact-form" method="post" action="send_contact.php" style="margin-bottom: 64px; margin-top: 64px;">
      <label for="name">Your name</label><br>
      <input type="text" name="name" id="name" oninput="checkEnableMessage()" value="" required style="width:100%; box-sizing: border-box;"><br><br>
      <label for="email">Your email address, this information must be correct in order to receive a reply.</label><br>
      <input type="email" name="email" id="email" oninput="checkEnableMessage();checkInput('email');" value="" required style="width:100%; box-sizing: border-box;"><br><br>
      <label for="message" id="charcount">Enter your message here (0/1000 chars)</label><br>
      <textarea rows="15" oninput="updateCharCount()" name="message" id="message" maxlength="1000" disabled required></textarea><br><br>
      <input type="submit" value="Send" id="send" disabled>
    </form>
    
    <script>checkEnableMessage()</script>
    
    <h3><a href="http://saylorsolutions.com/mailman/listinfo/projects_saylorsolutions.com">Subscribe</a> to the Projects mailing list!</h3>
    <p style="text-align: center;">for bi-weekly updates on everything on the <a href="projects.html">Projects</a> page and other items of interest</p>
  </div>
</div>

</body>
</html>