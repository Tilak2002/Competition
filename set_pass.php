<?php

require 'session.php';

include 'class.php';

$email = $_SESSION['tilak'];
$oldpass = $_POST['opassw'];
$new_password = $_POST['npassw'];

$obj = new DB();

$arr = array('password'=>"'$new_password'");
$arr3 = array('cpassword'=>"'$new_password'");
$arr1 = array('email'=>"'$email'");
$arr2 = array('email'=>$email);

$res = $obj->selectquery("registration",$arr2);

$row= mysqli_fetch_assoc($res);
if($oldpass == $row['password']){

    $obj->updatequery("registration",$arr,$arr1);
    $obj->updatequery("registration",$arr3,$arr1);
    echo "Data Updated Succesfully.";

}
else{
    echo "Old Password Incorrect";
}

?>