<?php

    include 'class.php';

    $obj = new DB();

    $val = $_POST['value'];

    $arr = array('rollno'=>$val);

    $obj->deletequery("activity",$arr);
    $obj->deletequery("marks",$arr);
    $obj->deletequery("student",$arr);

?>