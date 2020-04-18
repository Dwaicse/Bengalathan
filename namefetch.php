<?php
$userid = $_SESSION['userid'];
$select_name = "SELECT * FROM user_info WHERE user_id='$userid'";
$select_result = mysqli_query($con, $select_name) or die(mysqli_error($con));
$row = mysqli_fetch_array($select_result);
$a = $row['FirstName'];
echo " ". $a." ".$row['LastName'];
?>

