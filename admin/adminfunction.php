<?php
include './adminquery.php';
include '../connection/conn.php';


// show all user
function allUser($con)
{
    $query = DisplayAllUsers($con);
    return $query;
}
// insert user 
function IntrestedUsers($con)
{
    $query = DisplayAllInterestedUsers($con);
    return $query;
}
// without logout can not go to login page 
function logingpage($con){
    session_start();
    if (isset($_SESSION['name'])) {
        header('location: ./dashbord.php');
        exit();
    
}}
// add serviec
// function service($con)
// {
//     if (isset($_POST['serviceSubmit'])) {
//         $name = $_POST['name'];
//         $image = $_FILES['image']['name'];

//         // Specify the directory where you want to store the uploaded images
//         $targetDir = "../assets/upload/";
//         $targetFile = $targetDir . basename($_FILES["image"]["name"]);
        
//         // Move the uploaded file to the desired directory
//         move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

//         // Get the file path relative to the project root
//         $imagePath = "" . $targetFile;

//         serviceQuery($con, $name,$imagePath);
//     }
// }


function service($con)
{
    if (isset($_POST['serviceSubmit'])) {
        $name = $_POST['name'];
        $image = $_FILES['image']['name'];

        // Specify the directory where you want to store the uploaded images
        $targetDir = "../assets/uploads/";
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
        
        // Move the uploaded file to the desired directory
        move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

        // Get the file path relative to the project root
        $imagePath = "assets/uploads/" . basename($_FILES["image"]["name"]);

        serviceQuery($con, $name, $imagePath);
    }
}


?>
