<?php
include './config/connect.php';
if(isset($_GET['deleteid']))
   $id=$_GET['deleteid'];

   $sql = "DELETE FROM tasks WHERE id=$id";
   $result = mysqli_query($con, $sql);
   if($result){
      echo "<script>alert('Deleted Successfuly')</script>";
      echo "<script>window.open('index.php', '_self')</script>";
   } else {
      echo "Error" . mysqli_connect_error();
   }
?>