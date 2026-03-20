<?php
$con = mysqli_connect('localhost', 'root', '', 'student_management');
if(!$con){
   echo "Unable to connect" . mysqli_connect_error($con);
}
?>