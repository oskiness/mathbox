<?php 
include('connection.php');
session_start();
$id = $_GET['ID'];
mysql_query("UPDATE tblpretest set Active = 'Yes' where ID= '$id'");
echo "<script>alert('Successfully Restore Question');
location.href='quizarchive.php'</script>";
?>