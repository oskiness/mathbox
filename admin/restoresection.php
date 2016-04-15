<?php 
include('connection.php');
session_start();
$id = $_GET['ClassID'];
mysql_query("UPDATE tblsection set Active = 'Yes' where ID = '$id'");
echo "<script>alert('Successfully Restore Section');
location.href='sectionarchive.php'</script>";
?>