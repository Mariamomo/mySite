<?php include "includes/db.php" ?>

             
<?php
   $user_name=$_POST['username'];
   $user_password=$_POST['password'];
   $name=$_POST['Name'];
   $user_email=$_POST['email'];
   $age=$_POST['age'];
   $user_phoneNumber=$_POST['phonenumber'];
   $files = $_FILES['image'];

   $filename=$files['name'];
    $fileerror=$files['error'];
    $filetmp=$files['tmp_name'];
$fileext= explode('.',$filename);
$filecheck = strtolower(end($fileext));

$fileextstored= array('png','jpg','jpeg');
if(in_array($filecheck, $fileextstored)){
    
    $destinationfile = 'image/upload/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);
    



$sql="INSERT INTO user (username,user_password,user_Name,user_email,user_age,user_phonenuumber, user_image) VALUES ('$user_name','$user_password','$name','$user_email','$age','$user_phoneNumber', '$destinationfile')";


$result=mysqli_query($connection,$sql);
if (!$result){
        die('Query Failed' . mysqli_error());
    }
header("location:sampleWork.php");
    }
?>