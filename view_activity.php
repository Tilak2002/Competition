<?php


include "class.php";

$val = $_POST['value'];

$obj = new DB();

$arr1 = array('rollno'=>$val);
$res1 =$obj->selectquery("activity",$arr1);

$html1 = '';
$i = 1;

while($row1=mysqli_fetch_assoc($res1)) {
    $html1 .= '<tr>';
    
    $html1 .= '<td>'.$i.'</td>';
    $html1 .= '<td>'.$row1['activity'].'</td>';
    $html1 .= '</tr>';
    
    $i++;
}
echo $html1;

?>