<?php include "includes/db.php" ?>
<?php session_start(); ?>

<?php

       
        $_SESSION['username'] = null;
        $_SESSION['user_password'] = null;
        $_SESSION['user_name'] = null;
        $_SESSION['user_email'] = null;
        $_SESSION['user_age'] = null;
        $_SESSION['user_phonenumber'] = null;
header("location:sampleWork.php");
       
?>