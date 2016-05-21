<?php 
include('../connection.php');
session_start();
$_SESSION['Username'];
$admin = $_SESSION['Username'];
if(isset($_POST['submit'])){

$section = $_POST['section'];

$qry = "select ID,Section from tblsection where ID ='$admin'";
$result = mysql_query($qry);

if($result)
    {
        if(mysql_num_rows($result) > 0 )
        {
          echo "<script>
            alert('already existed');
            location.href='editsection.php';
          </script>";
        }
        else 
        {
          mysql_query("UPDATE tblsection set Section = $section where Username = $admin");
      
          echo
          "<script type='text/javascript'>
              alert('Update Successful.');
              location.href='sectionmaintenance.php';
          </script>";
          
          
        }
    }
  }
?>