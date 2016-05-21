<?php 
include('../connection.php');
session_start();
$id = $_GET['ID'];
mysql_query("UPDATE tbllesson set Confirm = 'Reject' , Active = 'Yes' where ID = '$id'");
echo "<script>alert('Successfully Accept Lesson');
location.href='contentapproval.php'</script>";
?>