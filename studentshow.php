<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$con=mysqli_connect('localhost','root','','phpapitest');
$data = json_decode(file_get_contents("php://input"));
$id=$data->id;
$sql="select * from student where id=$id";
$rs=mysqli_query($con,$sql);
$arr=array();
while($rw=mysqli_fetch_row($rs))
{

    $data1['id']=$rw[0];
    $data1['name']=$rw[1];
    $data1['email']=$rw[2];
    $data1['contact']=$rw[3];
    array_push($arr,$data1);

}
echo json_encode($arr);

?>