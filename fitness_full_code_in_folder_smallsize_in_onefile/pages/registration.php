<?php

include '../connection/conn.php';
include '../function/function.php';
UserRegister1($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Login Page</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css" />
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post">
        <h3>Registration Here</h3>
        <label for="username">Username</label>
        <input type="text" placeholder="Enter Username" id="name" name="name">
        <label for="email">email</label>
        <input type="email" placeholder="Enter email" id="name" name="email">
        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">

        <button type="submit" name="UserregisterSubmit">sumbit</button>
        <div class="forgetbutton">
        &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<a href="login.php" >Goto Login Page</a>
    </div>
    </form>
</body>
</html>