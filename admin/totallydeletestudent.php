<?php 
include('connection.php');
session_start();
$ID = $_GET['ID'];
mysql_query("DELETE FROM student_login where ID = '$ID'");
echo "<script>alert('Successfully Delete student');
location.href='studentarchive.php'</script>";
?>