<?php
session_start();
session_destroy();
echo "
    <script>alert('You have been successfuly logout');
    location.href='../index.php'</script>";

?>