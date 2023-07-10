<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location: ./adminlogin.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" />
   
    <title>dashbord</title>
</head>
<body>
    <h1>Welcome to Admin dashbord - <?php echo $_SESSION['username'] ?></h1>
    <button class='btn btn-primary'><a href="adminLogout.php" class="text-white">Logout</a></button>
</body>
</html>