<?php 
    include('config/constant.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side Menu Bar</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/18d5ea76e0.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="#" class="logo">
                    <img src="logo.png" alt="">
                    <span class="nav-item">SOLEIL RESTAURANT</span>
                </a>
            </li>
            <li><a href="index.php">
                <i class="fas fa-home"></i>
                <span class="nav-item">Home</span>
            </a></li>
            <li><a href="login.php">
                <i class="fas fa-user"></i>
                <span class="nav-item">Profile</span>
            </a></li>
            <li><a href="book.php">
                <i class="fas fa-wallet"></i>
                <span class="nav-item">Reservation</span>
            </a></li>
            <li><a href="reservation.php">
                <i class="fas fa-chart-bar"></i>
                <span class="nav-item">Reservation Details</span>
            </a></li>
            <li><a href="help.php">
                <i class="fas fa-question-circle"></i>
                <span class="nav-item">Help</span>
            </a></li>
            <li><a href="#" class="logout">
                <i class="fas fa-sign-out-alt"></i>
                <span class="nav-item">Log out</span>
            </a></li>
        </ul>
    </nav>