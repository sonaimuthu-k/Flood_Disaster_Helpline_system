<?php
@ob_start();
session_start();
    require 'connection.php';
    if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="select * from user where email='$email' and password='$password'";
    $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($result);
    if($rows_fetched==0){
        $error= "Wrong email or password. Please try again.";
        header( "location:../login.php?error=".$error);
    }else{
        $row=mysqli_fetch_array($result);
        $_SESSION['email']=$row['email'];
        $_SESSION['name']=$row['name'];
        $_SESSION['user_id']=$row['id'];
        $msg= $_SESSION['name'].' have logged in.';
        header( "location:../rprofile.php?msg=".$msg);
    } 
  }
?>