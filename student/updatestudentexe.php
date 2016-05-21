<?php
include('../connection.php');
session_start();
$_SESSION['Username'];
$studid = $_SESSION['Username'];

if(isset($_POST['submit'])){

$pass = $_POST['password'];
$cpass = $_POST['cpassword'];

if($pass==$cpass)
{
 	mysql_query("UPDATE student_login set Password = '$pass' where Username = '$studid'");
	
	echo"<script>
	alert('update successful');
	location.href='studenthome.php'
	</script>";
}
else
{
	

	 echo"<script>
	alert('Password is not the same ');
	location.href='index.php'
	</script>";
}
}
?>