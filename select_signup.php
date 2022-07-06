<?php
    require 'session.php';
    include 'class.php';

$ob = new DB();


$email = $_POST['email'];
$pass = $_POST['pass'];

$arr = array('email'=>$email,'password'=>$pass);
$res = $ob -> selectquery("registration",$arr);
$check_user=mysqli_num_rows($res);

if($check_user){
    $_SESSION['tilak'] = $email;
    echo "true";
}
else{   
    echo "false";
}
?>