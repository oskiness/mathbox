<?php 
include('connection.php');
session_start();
$id = $_GET['TeacherID'];
mysql_query("UPDATE teacher_login set Active = 'No' where TeacherID= '$id'");
echo "<script>alert('Successfully Delete Teacher');
location.href='teachermaintenance.php'</script>";
?>