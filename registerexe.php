<?php 
include('connection.php');
if(isset($_POST['submit'])){

$Pass = 'student';
$Firstname = $_POST['Firstname'];
$Middlename = $_POST['Middlename'];
$Lastname = $_POST['Lastname'];
$EmailAddress = $_POST['EmailAddress'];
$Status = 'No';
$Confirm = 1;
$Prof = 0;

$qry = "select * from student_login where Firstname ='$Firstname'";
$result = mysql_query($qry);
if($result)
    {
        if(mysql_num_rows($result) > 0 )
        {
          echo "<script>
            alert('Account is already Existed');
            location.href='register.php';
          </script>";

        }
        else 
        {
        mysql_query("INSERT into student_login(Password,Firstname,Middlename,Lastname,EmailAddress,Status,Confirm,Prof) values('$Pass','$Firstname','$Middlename','$Lastname','$EmailAddress','$Status','$Confirm','$Prof')");
          echo 
          "<script type='text/javascript'>
              alert('Success!Proceed to next step');
              location.href='./student/studenthome.php';
          </script>";
          
          
        }
    }
  }
?>