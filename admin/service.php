<?php
include '../connection/conn.php';
include './adminfunction.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    service($con);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Service Page</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" type="text/css" href="./assets/css/service.css" />
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post" enctype="multipart/form-data">
        <h3>Service Review</h3>
        <label for="name">name</label>
        <input type="text" placeholder="Enter servicename" id="name" name="name">

        <label for="image">service Image</label>
        <input type="file" id="image" name="image">

        <button type="submit" name="serviceSubmit">Submit</button>
        <div class="forgetbutton">
        &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<a href="./dashbord.php" >Goto dashbord page</a>

    </div>
    </form>
</body>
</html>
