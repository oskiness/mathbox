<?php 
include('connection.php');
session_start();
$id = $_GET['ID'];
mysql_query("UPDATE tbllesson set Active = 'Yes' , Confirm = 'Yes' where ID= '$id'");
echo "<script>alert('Successfully Restore Lesson');
location.href='lessonarchive.php'</script>";
?>