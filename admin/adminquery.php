<?php

include '../connection/conn.php';
// function AdminLoginQuery($con, $name, $password)
// {
//     $loginQuery = "SELECT * FROM adminRegister WHERE name='$name' AND password='$password'";
//     $query = mysqli_query($con, $loginQuery);
//     return $query;
// }
function LoginQuery($con, $name, $password)
{
    $loginQuery = "SELECT * FROM userRegister WHERE name='$name' AND password='$password'";
    $query = mysqli_query($con, $loginQuery);
    return $query;
}
function DisplayAllUsers($con)
{
    $allUsersQuery = "SELECT * FROM userRegister";
    $query = mysqli_query($con, $allUsersQuery);
    return $query;
}
function DisplayAllInterestedUsers($con)
{
    $allUsersQuery = "SELECT * FROM registration";
    $query = mysqli_query($con, $allUsersQuery);
    return $query;
}
?>