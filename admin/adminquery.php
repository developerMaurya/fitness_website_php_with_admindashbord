<?php

include '../connection/conn.php';

function LoginQuery($con, $name, $password)
{
    $loginQuery = "SELECT * FROM userRegister WHERE name='$name' AND password='$password'";
    $query = mysqli_query($con, $loginQuery);
    return $query;
}
// display all register user 
function DisplayAllUsers($con)
{
    $allUsersQuery = "SELECT * FROM userRegister";
    $query = mysqli_query($con, $allUsersQuery);
    return $query;
}
// display all interested user 
function DisplayAllInterestedUsers($con)
{
    $allUsersQuery = "SELECT * FROM registration";
    $query = mysqli_query($con, $allUsersQuery);
    return $query;
}
// add service
function serviceQuery($con, $name,$image)
{
    $serviceQuery = "INSERT INTO `services`(`name`,`image`) VALUES ('$name','$image')";
    $query = mysqli_query($con, $serviceQuery);
    return $query;
}

?>