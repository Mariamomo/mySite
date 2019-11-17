<?php include "includes/db.php" ?>
<?php
   $first_name=$_POST['firstName'];
   $last_name=$_POST['lastName'];
   $age=$_POST['age'];
   $country=$_POST['country'];
$sql="INSERT INTO people (p_first_name,p_last_name,p_age,p_country) VALUES ('$first_name','$last_name','$age','$country')";


$result=mysqli_query($connection,$sql);
if (!$result){
        die('Query Failed' . mysqli_error());
    }
header("location:read.php");
?>