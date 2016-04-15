<?php 
include('connection.php');
session_start();
$id = $_GET['ID'];
mysql_query("UPDATE tblpretest set Active = 'No' where ID= '$id'");
echo "<script>alert('Successfully Delete Question');
location.href='quizmaintenance.php'</script>";
?>