<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fancy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="BOOTSTRAP/css/bootstrap.css">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Blogs</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="discover.php" class="nav-link">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a href="blogs.php" class="nav-link">FIND BLOGS</a>
                </li>
                <?php
                if (isset($_SESSION["userid"])){
                    echo "<li class='nav-item'><a href='profile.php' class='nav-link'>PROFILE</a></li>";
                    echo "<li class='nav-item'><a href='includes/logout.inc.php' class='nav-link'>LOG OUT</a></li>";
                }
                else{
                    echo "<li class='nav-item'><a href='login.php' class='nav-link'>LOG IN</a></li>";
                    echo "<li class='nav-item'><a href='signup.php' class='nav-link'>SIGN UP</a></li>";
                }
                ?>

            </ul>
        </div>
    </div>
</nav>
<section class="text-dark text-center pt-5 mt-5">