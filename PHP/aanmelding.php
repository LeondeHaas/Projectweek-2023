<?php

session_start();
if ($_SESSION['admin'] != true) {
    header("location: ../index.php");
}
// include_once('../Includes/session.php');
include_once('../Includes/connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Styles/header.css">
    <link rel="stylesheet" href="../Styles/responsive.css">
    <link rel="stylesheet" href="../Styles/styles.css">
    <link rel="stylesheet" href="../Styles/footer.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aanmeldingen</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="content">
                <div class="logo">
                    <img class="website" id="website" src="../Images/escaperoom_logo_werkbestand-removebg-preview (2).png">
                </div>
                <ul class="menu-list">
                    <div class="icon cancel-btn">
                        <i class="fas fa-times"></i>
                    </div>
                    <li><a href="admin.php">Home</a></li>
                    <li><a href="allUsers.php">Gebruikers</a></li>
                    <li><a href="aanmelding.php">Aanmeldingen</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
                <div class="icon menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>
    </header>
    <main>
    </main>
    <footer></footer>
    <script src="../Javascript/main.js"></script>
</body>

</html>