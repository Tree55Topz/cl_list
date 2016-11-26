<?php 
    require("config.php"); 
    unset($_SESSION['user']);
	unset($_SESSION['loggedin']);

    header("Location: index.php"); 
    die("Redirecting to: index.php");
?>