<?php
include './config/connect.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    // Update the task status to 'completed'
    $sql = "UPDATE tasks SET status='completed' WHERE id=$id";
    if(mysqli_query($con, $sql)){
        // Redirect back to index.php after updating
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating task: " . mysqli_error($con);
    }
} else {
    echo "Task ID not provided.";
}
?>