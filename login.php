<?php
require "conn.php";
$user_name=$_POST["uid"];
$user_pass=$_POST["pass"];
$mysql_qry="select * from login where ID like '$user_name' and Password like '$user_pass';";
$result = mysqli_query($conn,$mysql_qry);

if(mysqli_num_rows($result) > 0)
{
 echo "Login success";
 
}
else
{
 echo "Login not success";
 
}


?>