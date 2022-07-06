<?php

    include 'class.php';

$stuname = $_POST['stuname'];
$phy = $_POST['phy'];
$che = $_POST['che'];
$mat = $_POST['mat'];
$bio = $_POST['bio'];
$activity = $_POST['activity'];

$ob = new DB();

$arr = array('name'=>"'$stuname'");
$res = $ob->insertQuery("student",$arr);


$arr4 = array('name'=>"'$stuname'");
$res4 = $ob->insertQuery("student",$arr);
$row = mysqli_fetch_assoc($res4);

$rollno = $row['rollno'];

$arr1 = array('rollno'=>"'$rollno'",'physics'=>"'$phy'",'chemistry'=>"'$che'",'maths'=>"'$mat'",'biology'=>"'$bio'");
$res1 = $ob->insertQuery("marks",$arr1);

for($i=0;$i<count($activity);$i++){
    $arr2=array('activity'=>$activity[$i]);
   
    $arr3=array('rollno'=>"'$rollno'",'activity'=>"'$activity[$i]'");
    $ob->insertQuery("activity",$arr3);

}


?>