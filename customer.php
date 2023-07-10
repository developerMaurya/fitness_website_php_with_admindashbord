<?php
include './connection/conn.php';
include './function.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>customer Page</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" type="text/css" href="./assets/css/customer.css" />
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post" enctype="multipart/form-data">
        <h3>Customer Review</h3>
        <label for="username">Username</label>
        <input type="text" placeholder="Enter Username" id="name" name="name">

        <label for="password">Message</label>
        <input type="text" placeholder="message" id="name" name="message">
        <label for="password">User Image</label>
        <input type="file"  id="name" name="image">

        <button type="submit" name="loginSubmit">Log In</button>
        <div class="forgetbutton">
        &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<a href="registration.php" >Create a account</a>

    </div>
    </form>
</body>
</html>
