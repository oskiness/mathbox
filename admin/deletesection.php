<?php 
include('connection.php');
session_start();
$id = $_GET['ClassID'];
mysql_query("UPDATE tblsection set Active = 'No' where ID= '$id'");
echo "<script>alert('Successfully Delete Class');
location.href='sectionmaintenance.php'</script>";
?>