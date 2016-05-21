<?php 
include('../connection.php');
session_start();
$_SESSION['Username'];
$admin = $_SESSION['Username'];
if(isset($_POST['submit'])){

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$mname = $_POST['middlename'];
$email = $_POST['email'];
$section = $_POST['section'];


$qry = "select * from teacher_login where Username ='$user'";
$result = mysql_query($qry);

if($result)
    {
        if(mysql_num_rows($result) > 0 )
        {
          echo "<script>
            alert('already existed');
            location.href='editteacher.php';
          </script>";
        }
        else 
        {

          mysql_query("INSERT into student_login(Firsntame,Lastname,Middlename,Email,Section)
            values('$fname','$lname','$mname','$email','$section')");
          
      
          echo
          "<script type='text/javascript'>
              alert('Update Successful.');
              location.href='teachermaintenance.php';
          </script>";
          
          
        }
    }
  }
?>