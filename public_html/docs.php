<?php

// Define your username and password
$username = "Doug";
$password = "JDSjds44$$";

if ($_POST['txtUsername'] != $username || $_POST['txtPassword'] != $password) {

?>
<style>
  body {
    margin: 0;
    padding: 0;
  }

  #background {
    position: fixed;
    height: 100%;
    width: 100%;
    background-color: #888;
  }
  
  #login-div {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 300px;
    height: 300px;
    margin: -150px 0 0 -150px;
    border: 3px #ccc solid;
    border-radius: 1em;
    background-color: #eee;
    padding: 8px;
  }
</style>
<div id="background"><div id="login-div">
<h1 style="text-align: center">Docs service login</h1>

<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <p><label for="txtUsername">Username:</label>
    <br /><input type="text" title="Enter your Username" name="txtUsername" /></p>

    <p><label for="txtpassword">Password:</label>
    <br /><input type="password" title="Enter your password" name="txtPassword" /></p>

    <p><input type="submit" name="Submit" value="Login" /></p>

</form>

</div></div>
<?php

}
else {
  $_POST = array();
?>
<h3>Shared file listing</h3>
<ul>
  <a href="ftp://saylorso@saylorsolutions.com@ftp.saylorsolutions.com/sharedocs/domains.docx" target=_blank>Domains</a>
</ul>

<?php

}

?> 