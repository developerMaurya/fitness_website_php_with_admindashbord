<?php
include './query/query.php';
include './connection/conn.php';

// registration
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
// login page
function login($con)
{
    if (isset($_POST['loginSubmit'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $query = LoginQuery($con, $name, $password);
        $row = mysqli_fetch_array($query);

        if ($row) {
            if ($row["usertype"] == "user") {
                $_SESSION['name'] = $name;
                header('location: ./index.php');
                exit();
            } elseif ($row["usertype"] == "admin") {
                $_SESSION['name'] = $name;
                $_SESSION['usertype'] = $row["usertype"];
                header('location: ./admin/dashbord.php');
                exit();
            }
        } else {
            header('location: ./login.php');
            exit();
        }
    }
}

  // restriced for without logout you can access login page  
    function logingpage($con){
        session_start();
        if (isset($_SESSION['name'])) {
            header('location: ./index.php');
            exit();
        
    }}

// user registration
function UserRegister1($con)
{
    session_start();
    if (isset($_POST['UserregisterSubmit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $usertype = $_POST['usertype'];
        UserRegister($con, $name, $email, $password,$usertype);
        $_SESSION['name'] = $name;
        header('location: ./index.php');
    }
}
// add customer review
function customer($con)
{
    if (isset($_POST['customerSubmit'])) {
        $name = $_POST['name'];
        $message = $_POST['message'];
        $image = $_FILES['image']['name'];

        // Specify the directory where you want to store the uploaded images
        $targetDir = "assets/uploads/";
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
        
        // Move the uploaded file to the desired directory
        move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

        // Get the file path relative to the project root
        $imagePath = "fitness/" . $targetFile;

        customerQuery($con, $name, $message, $imagePath);
    }
}
// get all customer review
function customerReview($con)
{
    $query=customerReviewQuery($con);
    return $query;
    }

// get all services
function services($con)
{
    $query=servicesQuery($con);
    return $query;
    }
?>
