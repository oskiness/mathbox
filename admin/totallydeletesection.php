<?php 
include('../connection.php');
session_start();
$ID = $_GET['ClassID'];
mysql_query("DELETE FROM tblsection where ID = '$ID'");
echo "<script>alert('Successfully Delete class');
location.href='sectionarchive.php'</script>";
?>