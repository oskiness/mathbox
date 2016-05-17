<?php 
include('connection.php');
session_start();
$_SESSION['Username'];
$admin = $_SESSION['Username'];
if(isset($_POST['submit'])){

$fname = $_POST['firstname'];
$mname = $_POST['middlename'];
$lname = $_POST['lastname'];
$section = $_POST['section'];

$qry = "select * from student_login where Username ='$user'";
$result = mysql_query($qry);

if($result)
    {
        if(mysql_num_rows($result) > 0 )
        {
          echo "<script>
            alert('already existed');
            location.href='editstudent.php';
          </script>";
        }
        else 
        {

          mysql_query("UPDATE student_login SET Firstname = $fname, Middlename = $mname, Lastname = $lname, Section = $section WHERE Username = $admin");
          
      
          echo
          "<script type='text/javascript'>
              alert('Update Successful.');
              location.href='studentmaintenance.php';
          </script>";
          
          
        }
    }
  }
?>