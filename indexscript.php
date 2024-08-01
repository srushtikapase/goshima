<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "db_goshima"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_GET['submit']))
{
	$sql="select email from newsletter_signup where email='$_GET[email]'";
	$result=mysqli_query($con,$sql);
	if($row=mysqli_fetch_assoc($result))
	{
		header('location:index.php?success=2');
	}
	else
	{
		$query = "insert into newsletter_signup(email,status) values('$_GET[email]','active')";
		mysqli_query($con,$query);
		header('location:index.php?success=1');
	}
}
elseif(isset($_POST['send_message']))
{
		$query = "insert into message(fullname,emailid,message) values('$_POST[name]','$_POST[email]','$_POST[message]')";
		echo $query;
		mysqli_query($con,$query);
		header('location:index.php?message=1');
	
}
mysqli_close($con);




?>