<?php

session_start();
if ($_SESSION['user'] != true) {
  header("location: ../index.php");
}

include_once('../Includes/connect.php');

// $user_id = $_SESSION['id'];

// $sql = "SELECT * FROM user WHERE id = :user_id";
// $stmt = $connect->prepare($sql);
// $stmt->execute(['id' => $user_id]);
// $user = $stmt->fetch();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../Styles/header.css">
  <link rel="stylesheet" href="../Styles/responsive.css">
  <link rel="stylesheet" href="../Styles/styles.css">
  <link rel="stylesheet" href="../Styles/footer.css">
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
          <img class="website" id="website" src="https://media.tenor.com/R5IECfIf34YAAAAd/fish-spinning.gif" alt="https://media.tenor.com/R5IECfIf34YAAAAd/fish-spinning.gif">
        </div>
        <ul class="menu-list">
          <div class="icon cancel-btn">
            <i class="fas fa-times"></i>
          </div>
          <li><a href="#section-2" id="locate2">About</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
        <div class="icon menu-btn">
          <i class="fas fa-bars"></i>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="user-container">
      <div class="info-gebruiker">
        <h1 class="welkom-gebruiker">Welkom <?php echo $_SESSION['name']; ?></h1>
      </div>
    </div>
  </main>
  <footer>
    <div class="copyright">
      <p>© Copyright De verborgen Pyramide van Heyendaal</p>
    </div>
  </footer>
  <script src="../Javascript/main.js"></script>
</body>

</html>