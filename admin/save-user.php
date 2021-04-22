<?php
if(isset($_POST['save'])){
  include "config.php";

  $fname =mysqli_real_escape_string($conn,$_POST['fname']);
  $lname = mysqli_real_escape_string($conn,$_POST['lname']);
  $user = mysqli_real_escape_string($conn,$_POST['user']);
  $password = mysqli_real_escape_string($conn,md5($_POST['password']));
  $role = mysqli_real_escape_string($conn,$_POST['role']);

  $sql = "SELECT username FROM user WHERE username = '{$user}'";

  $result = mysqli_query($conn, $sql) or die("Query Failed.");

  if(mysqli_num_rows($result) > 0){
    echo "<p style='color:red;text-align:center;margin: 10px 0;'>UserName already Exists.</p>";
  }else{
    $sql1 = "INSERT INTO user (first_name,last_name, username, password, role)
              VALUES ('{$fname}','{$lname}','{$user}','{$password}','{$role}')";
    if(mysqli_query($conn,$sql1)){
      header("Location: {$hostname}/admin/users.php");
    }else{
      echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert User.</p>";
    }
  }
} 

 ?>