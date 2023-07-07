<?php
include '../query/query.php';
include '../connection/conn.php';

function register($con)
{
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        InsertQuery($con, $name, $email, $phone, $message);
        // header(location:'./index.php');
    }
}

function login($con)
{
    session_start();
    if (isset($_POST['loginSubmit'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $query = LoginQuery($con, $name, $password);
        if (mysqli_num_rows($query) > 0) {
            $_SESSION['name'] = $name;
            header('location: ./index.php');
        }
    }
}

function logingpage($con)
{
    session_start();
    if (isset($_SESSION['name'])) {
        header('location: ./index.php');
        exit();
    }
}

function adminlogin($con)
{
    session_start();
    if (isset($_POST['adminloginSubmit'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $query = AdminLoginQuery($con, $name, $password);
        if (mysqli_num_rows($query) > 0) {
            $_SESSION['username'] = $name;
            header('location: ../admin/dashbord.php');
        }
    }
}
// for restric to redirect url
function adminlogingpage($con)
{
    session_start();
    if (isset($_SESSION['username'])) {
        header('location: ../admin/dashbord.php');
        exit();
    }
}

function UserRegister1($con)
{
    session_start();
    if (isset($_POST['UserregisterSubmit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        UserRegister($con, $name, $email, $password);
        $_SESSION['name'] = $name;
        header('location: ./index.php');
    }
}

function allUsers($con)
{
    $query = DisplayAllUsers($con);
    return $query;
}

function IntrestedUsers($con)
{
    $query = DisplayAllInterestedUsers($con);
    return $query;
}
?>
