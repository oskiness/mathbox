<?php 
include('connection.php');
session_start();
$id = $_GET['ClassID'];
mysql_query("UPDATE tblsection set Confirm = 'Deleted' , Active = 'Yes' where ID= '$id'");
echo "<script>alert('Successfully Delete Class');
location.href='sectionmaintenance.php'</script>";
?>