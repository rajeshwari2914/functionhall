<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$con=mysqli_connect('localhost','root','','phpapitest');
$sql="select * from student";
$rs=mysqli_query($con,$sql);
$arr=array();
while($rw=mysqli_fetch_row($rs))
{

    $data['id']=$rw[0];
    $data['name']=$rw[1];
    $data['email']=$rw[2];
    $data['contact']=$rw[3];
    array_push($arr,$data);

}
echo json_encode($arr);
?>