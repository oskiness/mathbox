<?php 
include('../connection.php');
session_start();
$id = $_GET['TeacherID'];
mysql_query("DELETE FROM teacher_login where TeacherID= '$id'");
echo "<script>alert('Successfully Delete Teacher');
location.href='teachermaintenance.php'</script>";
?>