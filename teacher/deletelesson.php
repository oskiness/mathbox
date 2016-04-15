<?php 
include('connection.php');
session_start();
$id = $_GET['ID'];
mysql_query("UPDATE tbllesson set Active = 'Yes' , Confirm = 'Deleted' where ID= '$id'");
echo "<script>alert('Successfully Delete Lesson');
location.href='lessonmaintenance.php'</script>";
?>