<?php

session_start();
if ($_SESSION['admin'] != true) {
    header("location: ../index.html");
}
// include_once('../Includes/session.php');
include_once('../Includes/connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Styles/header.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="content">
                <div class="logo">
                    <a href="#">Escape Room Name</a>
                </div>
                <ul class="menu-list">
                    <div class="icon cancel-btn">
                        <i class="fas fa-times"></i>
                    </div>
                    <li><a href="#section-1" id="locate-1">Intro</a></li>
                    <li><a href="#section-2" id="locate-2">About</a></li>
                    <li><a href="#section-3" id="locate-3">Register</a></li>
                </ul>
                <div class="icon menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>
    </header>
    <main>hoi</main>
    <footer></footer>
    <script src="../Javascript/main.js"></script>
</body>

</html>