<?php

session_start();
if ($_SESSION['user'] != true) {
  header("location: ../index.html");
}
include_once('../Includes/connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet1" href="./Styles/header.css">
  <link rel="stylesheet2" href="./Styles/responsive.css">
  <link rel="stylesheet3" href="./Styles/styles.css">
  <link rel="stylesheet4" href="./Styles/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <!-- font-families -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,300;1,200&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&display=swap" rel="stylesheet">
  <title>Gebruiker</title>
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
          <li><a href="logout.php" id="locate-3">Logout</a></li>
        </ul>
        <div class="icon menu-btn">
          <i class="fas fa-bars"></i>
        </div>
      </div>
    </nav>
  </header>
  <main></main>
  <footer>
    <div class="footerbar">
      <p>© Copyright De verborgen Pyramide van Heyendaal</p>
    </div>
  </footer>
  <script src="../Javascript/main.js"></script>
</body>

</html>