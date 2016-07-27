<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php
  // this is a simple logout
  // session_start();
  $_SESSION["admin_id"] = null;
  $_SESSION["username"] = null;
  redirect_to("login.php");
?>

<?php
  // this is another version that destroy session
  // assuming nothing else in session to keep
  // session_start();
  // $_SESSION = array();
  // if (isset($_COOKIE[session_name()])) {
  //   setcookie(session_name(), '', time()-42000, '/');
  // }
  // session_destroy(); 
  // redirect_to("login.php");
?>
