<?php

include "class.php";

$val = $_POST['value'];

$obj = new DB();

$arr = array('rollno'=>$val);
$res =$obj->selectquery("marks",$arr);



$html = '';
$i = 1;

while($row=mysqli_fetch_assoc($res)) {
    $html .= '<tr>';
    
    $html .= '<td>'.$i.'</td>';
    $html .= '<td>'.$row['physics'].'</td>';
    $html .= '<td>'.$row['chemistry'].'</td>';
    $html .= '<td>'.$row['maths'].'</td>';
    $html .= '<td>'.$row['biology'].'</td>';
    $html .= '</tr>';
    
    $i++;
}
echo $html;





?>