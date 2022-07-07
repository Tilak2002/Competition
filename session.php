<?php

session_start();

$time = 30*60;

    if(!isset($_SESSION['tilak']))
    {
       header("location:http://localhost/Competition/index.php");
    }
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $time)) {
        session_unset();
        session_destroy();
        header("location:http://localhost/Competition/index.php");
        
    } 
    // echo "1. In If"."<br>";
    // echo "Current Time ".time()."<br>";
    // echo "LAST_ACTIVITY Time ".$_SESSION['LAST_ACTIVITY']."<br>";
    // echo "Diff Time ".($time - $_SESSION['LAST_ACTIVITY'])."<br>";
    // session_unset();
    // session_destroy();
    // header("location:http://localhost/invoice/index.php");
?>