<?php

 if(isset($_POST["btn-submit"])){

    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $duration = $_POST['sub_dur'];
    
$query = "INSERT INTO `user_data`(`user_id`, `use_fname`, `user_lname`, `user_pwd`, `user_sub`, `user_status`, `user_email`) 
     VALUES ('','$firstName','$lastName','$password','$duration','$status','$email')";
     $insert = mysqli_query($conn,$query);       
     if($insert){
        echo "<script>alert('signIn.php')</script>"; 
      
        //  echo "<script>window.location.replace('signIn.php')</script>"; 
     }
     
      }else{
        echo "<script>alert('submit button is not working')</script>"; 

  
}
?>