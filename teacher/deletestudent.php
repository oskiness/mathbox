<?php 
include('connection.php');
session_start();
$id = $_GET['StudentID'];
mysql_query("UPDATE student_login set Active = 'No' where StudentID= '$id'");
echo "<script>alert('Successfully Delete student');
location.href='studentmaintenance.php'</script>";
?>