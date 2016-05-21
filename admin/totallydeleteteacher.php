<?php 
include('../connection.php');
session_start();
$ID = $_GET['ID'];
mysql_query("DELETE FROM teacher_login where ID = '$ID'");
echo "<script>alert('Successfully Delete teacher');
location.href='teacherarchive.php'</script>";
?>