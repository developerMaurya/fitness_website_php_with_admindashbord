<?php
session_start();

if (!isset($_SESSION['usertype']) && $_SESSION['usertype'] !== 'admin') {
    header('location: ../login.php');
    exit();
}

// If the URL doesn't match any specific page, redirect to the login page
if ($_SERVER['PHP_SELF'] !== '/fitness/admin/dashbord.php') {
    header('location: ../login.php');
    exit();
}

?>
<!-- Rest of the code for dashbord.php -->

<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="./assets/css/style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name"><?php echo $_SESSION['name'] ?></span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="../adminRegisterUser.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Registration</span>
                </a></li>
                <li><a href="./service.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Add Service</span>
                </a></li>
                <li><a href="../customer.php">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Add Review</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">show review</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Share</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name"><a href="adminLogout.php"> Logout</a></span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <img src="images/profile.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="text">Total Likes</span>
                        <span class="number">50,120</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-comments"></i>
                        <span class="text">Comments</span>
                        <span class="number">20,120</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-share"></i>
                        <span class="text">Total Share</span>
                        <span class="number">10,120</span>
                    </div>
                </div>
            </div>
            
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Register Users</span>
                </div>
               
                <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark table-dark text-center">
                    <td>Id</td>
                    <td>name</td>
                    <td>Email</td>
                    <td>password</td>
                    <td>usertype</td>
                </tr>
                <?php
include '../connection/conn.php';
include './adminfunction.php';
$query = allUser($con);
while ($res = mysqli_fetch_assoc($query)) {
?>
<tr class="text-center">
    <td><?php echo $res['id']; ?></td>
    <td><?php echo $res['name']; ?></td>
    <td><?php echo $res['email']; ?></td>
    <td><?php echo $res['password']; ?></td>
    <td><?php echo $res['usertype']; ?></td>
</tr>
<?php
}
?>
</table>

               
             </div>

             <!-- // incquary message -->
             <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Show All Intrested Users</span>
                </div>
               
                <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark table-dark text-center">
                    <td>Id</td>
                    <td>name</td>
                    <td>Email</td>
                    <td>mobile </td>
                    <td>message </td>
                </tr>
                <?php
                $query = IntrestedUsers($con);
                while ($ress = mysqli_fetch_array($query)) {
                ?>
                <tr class="text-center">
                    <td><?php echo $ress['id']; ?></td>
                    <td><?php echo $ress['name']; ?></td>
                    <td><?php echo $ress['email']; ?></td>
                    <td><?php echo $ress['phone']; ?></td>
                    <td><?php echo $ress['message']; ?></td>

                </tr>
                <?php
                }
                ?>
             </table>
               
             </div>
            </div>
        </div>
    </section>

    <script src="./assets/js/script.js"></script>
</body>
</html>