<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to home page
//$dataItem = new Data;
// $data =$dataItem->fetchFarmer($email,$password);
header("location: index.php");
exit;
?>