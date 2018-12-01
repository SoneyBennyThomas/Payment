<?php
require "conn.php";
$user_id=$_POST["uid"];
$user_name=$_POST["uname"];
$user_course=$_POST["ucourse"];
$user_cont=$_POST["ucont"];
$user_email=$_POST["uemail"];
$user_type=$_POST["utype"];

$user_pass=$_POST["upass"];

$mysql_qry="insert into student values('$user_id','$user_name','$user_course','$user_cont','$user_email','$user_type')";
$mysql_qry2="insert into login values('$user_id','$user_pass')";

if($conn->query($mysql_qry)===TRUE && $conn->query($mysql_qry2)===TRUE)
{
 echo "Inserted Successfully";
}
else
{
 echo "Error: ". $mysql_qry . "<br>" . $conn->error;

}
$conn->close();
?>