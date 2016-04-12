<?php 
include('connection.php');
session_start();
$ID = $_GET['ID'];
mysql_query("DELETE FROM tblsection where ID = '$ID'");
echo "<script>alert('Successfully Delete Class');
location.href='assignsection.php'</script>";
?>