<?php
include './config/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./assets/style.css">
   <title>Display Tasks</title>
</head>

<body>
   <div class="container">
      <table>
         <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Created_at</th>
            <th>Operation</th>
         </tr>

         <?php
         $sql = "SELECT * FROM tasks";
         $result = mysqli_query($con, $sql);
         if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
               $id = $row['id'];
               $title = $row['title'];
               $description = $row['description'];
               $created_at = $row['created_at'];
               $status = $row['status'];

               echo '<tr>
        <td class="' . ($status == "completed" ? "completed" : "") . '">' . $title . '</td>
        <td class="' . ($status == "completed" ? "completed" : "") . '">' . $description . '</td>
        <td>' . $created_at . '</td>
        <td>';

               if ($status == "pending") {
                  echo '<a href="complete.php?id=' . $id . '"> Mark as Done</a>';
               } else {
                  echo 'Completed';
               }

               echo '</td></tr>'; // Close the row here
            }
         }

         ?>
         <button><a href="add.php">Add Task</a></button>
      </table>
   </div>
</body>

</html>