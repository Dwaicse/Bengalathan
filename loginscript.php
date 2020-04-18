<?php
require 'include\common.php';
$userid = mysqli_real_escape_string($con,$_POST['userid']);
$password = md5($_POST['password']);
$select_user_id = "SELECT user_id FROM user_info where user_id = '$userid' and password = '$password'";
$select_enroll_id = "SELECT Enroll_ID FROM user_info where user_id = '$userid' and password = '$password'";
$query_result1 = mysqli_query($con,$select_user_id) or die(mysqli_error($con));
$query_result2 = mysqli_query($con, $select_enroll_id) or die(mysqli_error($con));
$total_rows1 = mysqli_num_rows($query_result1);
if($total_rows1>0 )
{
    echo 'login successful!';
    $row = mysqli_fetch_array($query_result2);
    $a = $row['Enroll_ID'];
 $logininfo = "insert into logininfo (id,user_id) values('$a','$userid')";
 $logininfo_submit = mysqli_query($con, $logininfo) or die(mysqli_error($con));
 $row = mysqli_fetch_array($query_result1);
$_SESSION['userid'] = $row['user_id'];
$_SESSION['id'] = $row['Enroll_ID'];
header('location:index.php');
}
 elseif($total_rows1==0)
 {
   $error = "Please Enter Correct User-id or Password!";
   $_SESSION["error"]=$error;
   header('location: login.php?error='.$error);   
}

?>

