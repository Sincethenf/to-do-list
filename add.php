<?php
include './config/connect.php';
if(isset($_POST['submit'])){
   $title = $_POST['title'];
   $description = $_POST['description'];
   $created_at = $_POST['created_at'];

   $sql = "INSERT INTO tasks (title, description, created_at) VALUES ('$title','$description','$created_at')";
   $result = mysqli_query($con, $sql);

   if($result){
      echo "<script>alert('Task Added Successfuly!')</script>";
      echo "<script>window.open('index.php', '_self')</script>";
   }  else {
      echo "Error" . mysqli_connect_error($con);
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Add</title>
</head>
<body>
   <div class="container">
      <h1>Add TDL</h1>
      <div class="form-con">
         <form method="POST">
            <label for="">Title</label>
            <input type="text" name="title" required>

            <label for="">Description</label>
            <input type="tex" name="description" required>

            <label for="">Created at</label>
            <input type="date" name="created_at" required>

            <input type="submit" name="submit">
         </form>
      </div>
   </div>
</body>
</html>