<?php 
include('connection.php');
session_start();
mysql_query("update student_login set Prof='Gabby' where Confirm = '1'");
mysql_query("update student_login set Status ='Registered' where Confirm = '1'");
mysql_query("update student_login set Active ='1' where Confirm = '1'");
echo "<script>alert('Successfully Add all the Students');
location.href='pendingstudent.php'</script>";
?>	