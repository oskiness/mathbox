<?php 
include('../connection.php');
session_start();
$id = $_GET['StudentID'];
mysql_query("UPDATE student_login set Active = 'Yes' where StudentID= '$id'");
echo "<script>alert('Successfully Restore student');
location.href='studentarchive.php'</script>";
?>