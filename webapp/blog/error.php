<?php 
session_start();

include "menubar.php";
if(isset($_SESSION['error'])){
    echo "Odala simunaloge, Kindly Log in please!!";
    
}
?>

<?php session_destroy(); ?>