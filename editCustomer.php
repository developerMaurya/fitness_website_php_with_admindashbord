<?php
include './connection/conn.php';
include './function.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    customer($con);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Customer Page</title>
 
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
        <h3>Update Customer Review</h3>
        <label for="username">Username</label>
        <input type="text" placeholder="Enter Username" id="name" name="name">

        <label for="password">Message</label>
        <input type="text" placeholder="Message" id="message" name="message">
        
        <label for="password">User Image</label>
        <input type="file" id="image" name="image">

        <button type="submit" name="customerSubmit">Submit</button>
        <div class="forgetbutton">
        &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<a href="./admin/dashbord.php" >Goto admindashboard</a>

    </div>
    </form>
</body>
</html>
