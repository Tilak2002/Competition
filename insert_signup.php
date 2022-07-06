<?php

    include 'class.php';

$ob = new DB();

$uname = $_POST['uname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];


$arr = array('username'=>"'$uname'",'email'=>"'$email'",'mobile'=>"'$mobile'",'password'=>"'$pass'",'cpassword'=>"'$cpass'");

$res = $ob -> insertQuery('registration',$arr);
// $check_user=mysqli_num_rows($res);



?>