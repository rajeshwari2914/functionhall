<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect('localhost','root','','phpapitest');

$name=$data->name;
$email=$data->email;
$contact=$data->contact;

$sql="insert into student(name,email,contact)values('$name','$email',$contact)";
if(mysqli_query($con,$sql))
{
    echo json_encode(["status" => 'success', "msg" => "student Inserted."]);
}
else
{
    echo json_encode(["success" => 0, "msg" => "student Not Inserted."]);
}
?>