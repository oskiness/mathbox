<?php 
include('connection.php');
session_start();
$_SESSION['Username'];
$stud = $_SESSION['Username'];
if(isset($_POST['submit'])){

$fname = $_POST['firstname'];
$mname = $_POST['middlename'];
$lname = $_POST['lastname'];
$user = $_POST['username'];
$pass = $_POST['password'];
$bdate = $_POST['birthdate'];
$email = $_POST['emailaddress'];
$cnumber = $_POST['contactnumber'];

$qry = "select * from student_login where Username ='$user'";
$result = mysql_query($qry);

if($result)
    {
        if(mysql_num_rows($result) > 0 )
        {
          echo "<script>
            alert('already existed');
            location.href='profile.php';
          </script>";
        }
        else 
        {
        mysql_query("UPDATE student_login set Username = '$user' , Password = '$pass' , Firstname = '$fname' , Middlename = '$mname' , Lastname = '$lname' , EmailAddress = '$email' , ContactNumber = '$cnumber' , Birthdate = '$bdate' where ='$stud'");
      
          echo
          "<script type='text/javascript'>
              alert('Update Successful.');
              location.href='profile.php';
          </script>";
          
          
        }
    }
  }
?>