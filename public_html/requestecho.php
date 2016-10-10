<!DOCTYPE html>
<html>
<head>
<title>Request parameters</title>
</head>
<body>
<?php
// Request parm echo
if(isset($_POST)) {
?>
<h3>POST Request parameters</h3>
  <ul>
<?php
  foreach($_POST as $key => $val) {
?>
    <li> <?php echo $key; ?>: <?php echo $val; ?> </li>
<?php
  }
?>
  </ul>
<?php
} else {
?>
<p><strong>No POST parameters found</strong></p>
<?php
}
?>

<?php
// Request parm echo
if(isset($_GET)) {
?>
<!DOCTYPE html>

<h3>GET Request parameters</h3>
  <ul>
<?php
  foreach($_GET as $key => $val) {
?>
    <li> <?php echo $key; ?>: <?php echo $val; ?> </li>
<?php
  }
?>
  </ul>
<?php
} else {
?>
<p><strong>No GET parameters found</strong></p>
<?php
}
?>