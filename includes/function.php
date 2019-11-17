<?php include "db.php"?>
   <?php
    function readRows(){
    global $connection;
    $query ="SELECT * FROM people";
    $result = mysqli_query($connection,$query);
    if (!$result){
        die('Query Failed' . mysqli_error());
    }
     while($row=mysqli_fetch_assoc($result)){
              
    ?>    
                  <tr>
                  <td><?php echo $row['p_first_name']?></td>
                  <td><?php echo $row['p_last_name']?></td>
                  <td><?php echo $row['p_age']?></td>
                  <td><?php echo $row['p_country']?></td>
       
                   
              </tr>
               
            <?php    
               
           } 
}
?>
<?php 
function profile(){
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
   echo $row['user_Name'];
}
    else{
        header("Refresh: 0; url=sampleWork.php");
    }
}
}
?>



