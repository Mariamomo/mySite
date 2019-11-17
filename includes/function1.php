<?php include "db.php"?>
<?php
    function showRows(){
    global $connection;
    if(isset($_POST['submit'])){
   $username= $_POST['username'];
   $password = $_POST['password'];
   
    
    $query = "SELECT * FROM user WHERE username = '{$username}' ";
    
    $result = mysqli_query($connection, $query);
    if(!$result){
        die('Query Failed' . mysqli_error());    
    }
    $row = mysqli_fetch_array($result);
    if($row['username']==$username && $row['user_password'] == $password)
    {
    ?>
                        <tr><td><img src="<?php echo $row['user_image']?>" height="150px"; width="100px";></td></tr>
                        <tr><td><?php echo $row['user_Name']?></td></tr>
                        <tr><td><?php echo $row['user_email']?></td></tr>
                        <tr><td><?php echo $row['user_age']?></td></tr>
                        <tr><td><?php echo $row['user_phonenuumber']?></td></tr>
  
                   
             
    <?php
        
}
    else{
        header("Refresh: 0; url=sampleWork.php");
    }
}
}
?>

 