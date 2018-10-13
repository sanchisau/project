<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login check</title>
</head>
<body>
<?php

require_once('conn.php');
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT Name FROM restaurants where Name= '$username' AND password='$password'";
$rs = mysqli_query($conn, $sql);
$rc = mysqli_fetch_array($rs) ;

if($rc[0])
{
  header("location:createOrder.php");
}
else
{
  echo 'not this account'.mysql_error();
}
 

?>
</body>
</html>