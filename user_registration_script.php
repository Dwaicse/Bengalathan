<?php
require 'include\common.php';
$firstname = mysqli_real_escape_string($con,$_POST['firstname']);
$lastname =mysqli_real_escape_string($con, $_POST['lastname']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$phone = $_POST['Phone'];
$birthdate = $_POST['birthdate'];
$gender = $_POST['r1'];
$userid = mysqli_real_escape_string($con,$_POST['userid']);
$password = md5(mysqli_real_escape_string($con,$_POST['password']));
$validate = "SELECT emailid FROM user_info where emailid='$email'";
$select_query_result = mysqli_query($con,$validate) or die (mysqli_error($con));
$total_rows = mysqli_num_rows($select_query_result);

$p1 = "SELECT phone FROM user_info where phone='$phone'";
$select_query_result1 = mysqli_query($con,$p1) or die (mysqli_error($con));
$total_rows1 = mysqli_num_rows($select_query_result1);

$p1 = "SELECT user_id FROM user_info where user_id='$userid'";
$select_query_result2 = mysqli_query($con,$p1) or die (mysqli_error($con));
$total_rows2 = mysqli_num_rows($select_query_result1);
if($total_rows2>0){
    echo 'This userid is already taken!';
}
elseif($total_rows>0 || $total_rows1>0)
{
    echo 'User is already Registered!';
}
 else {
$user_registration_query = "insert into user_info(FirstName,LastName,emailid,user_id,password,Dob,Gender,phone) 
         values ('$firstname','$lastname','$email','$userid','$password','$birthdate','$gender','$phone')";

$user_registration_submit = mysqli_query($con, $user_registration_query)
        or die(mysqli_error($con));
echo "User Inserted Successfully!";
header('location:login.php');
 }

?>




