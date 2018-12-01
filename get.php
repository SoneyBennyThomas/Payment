<?php 
require "conn.php";
$user_name=$_POST["uid"];
$sql = "SELECT * FROM student where ID like '$user_name';";
$r = mysqli_query($conn,$sql);
$result = array();
while($row = mysqli_fetch_array($r)){
    array_push($result,array(
        'ID'=>$row['ID'],
        'Name'=>$row['Name'],
        'Course'=>$row['Course'],
        'Contact'=>$row['Contact'],
        'Email'=>$row['Email'],
         'Type'=>$row['Type']
    ));
}
echo json_encode(array('result'=>$result));
mysqli_close($conn);