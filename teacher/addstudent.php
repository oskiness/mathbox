<?php 
include('connection.php');
session_start();
$Username = $_GET['Username'];
mysql_query("update student_login set status='OK' where Username = '$Username'");
mysql_query("update student_login set Password ='student' where Username = '$Username'");
echo "<script>alert('Successfully Add to your Student List');
location.href='addclass.php'</script>";
?>