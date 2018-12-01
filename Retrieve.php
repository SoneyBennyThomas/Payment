<?php
$servername='localhost';
$username='root';
$password='';
$dbname='pay_stud';
$conn = mysql_connect($servername, $username,$password); 
$check=mysql_select_db($dbname);
$sql = "select ID,Password from login";
$result=mysql_query($sql);
$response=array();
while($row = mysql_fetch_array($result))
{
$temp = array();
$temp['UserId'] = $row[0]; 
 $temp['Password'] =$row[1]; 
 array_push($response, $temp);
}
mysql_close($conn);
echo json_encode($response);

?>