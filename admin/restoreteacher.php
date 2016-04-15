<?php 
include('connection.php');
session_start();
$id = $_GET['TeacherID'];
mysql_query("UPDATE teacher_login set Active = 'Yes' where TeacherID= '$id'");
echo "<script>alert('Successfully restore Teacher');
location.href='teacherarchive.php'</script>";
?>