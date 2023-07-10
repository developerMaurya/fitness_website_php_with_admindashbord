<?php
include './adminquery.php';
include '../connection/conn.php';


//
function allUser($con)
{
    $query = DisplayAllUsers($con);
    return $query;
}
function IntrestedUsers($con)
{
    $query = DisplayAllInterestedUsers($con);
    return $query;
}
function logingpage($con){
    session_start();
    if (isset($_SESSION['name'])) {
        header('location: ./dashbord.php');
        exit();
    
}}

?>
