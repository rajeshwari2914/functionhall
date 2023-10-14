<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");

header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$con=mysqli_connect('localhost','root','','phpapitest');
$data = json_decode(file_get_contents("php://input"));
$id=$data->id;
//echo $id;
$sql="delete from student where id=$id";

if(mysqli_query($con,$sql))
{
    echo json_encode(["status" => 'success', "msg" => "student Update."]);
}
else
{
    echo json_encode(["status" => 'fail', "msg" => "student Not Update."]);
}
?>