<?php 
include('connection.php');
session_start();
$id = $_GET['StudentID'];
mysql_query("DELETE FROM student_login where StudentID= '$id'");
echo "<script>alert('Successfully Delete student');
location.href='studentmainteanance.php'</script>";
?>