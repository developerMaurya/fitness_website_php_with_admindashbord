<?php
include './connection/conn.php';

// Registration
function InsertQuery($con, $name, $email, $phone, $message)
{
    $insertQuery = "INSERT INTO `registration`(`name`, `email`,`phone`,`message`) VALUES ('$name','$email','$phone','$message')";
    $query = mysqli_query($con, $insertQuery);
    return $query;
}

// User registration
function UserRegister($con, $name, $email, $password,$usertype)
{
    $registerQuery = "INSERT INTO `userRegister`(`name`,`email`,`password`,`usertype`) VALUES ('$name','$email','$password','$usertype')";
    $query = mysqli_query($con, $registerQuery);
    return $query;
}

// Login
function LoginQuery($con, $name, $password)
{
    $loginQuery = "SELECT * FROM userRegister WHERE name='$name' AND password='$password'";
    $query = mysqli_query($con, $loginQuery);
    return $query;
}

// Admin login
function AdminLoginQuery($con, $name, $password)
{
    $loginQuery = "SELECT * FROM adminRegister WHERE name='$name' AND password='$password'";
    $query = mysqli_query($con, $loginQuery);
    return $query;
}

?>
