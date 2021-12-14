<?php 
      $host="localhost";
      $user="root";
      $pass="";
      $db="sp_project";
      $conn = mysqli_connect($host,$user,$pass,$db);

      if($conn){
          echo "<script>alert('Run') </script>";
      }else{
        echo "<script>alert('Not Run') </script>";
      }
?>