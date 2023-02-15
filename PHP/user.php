<?php

session_start();
if ($_SESSION['user'] != true) {
  header("location: ../index.php");
}

include_once('../Includes/connect.php');

$id = $_SESSION['id'];
$sql = "SELECT * FROM user WHERE id = :id";
$stmt = $connect->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

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
          <img class="website" id="website" src="../Images/escaperoom_logo_werkbestand-removebg-preview (2).png" alt="https://media.tenor.com/R5IECfIf34YAAAAd/fish-spinning.gif">
        </div>
        <ul class="menu-list">
          <div class="icon cancel-btn">
            <i class="fas fa-times"></i>
          </div>
          <li><a href="../index.php">Home</a></li>
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
      <h1 class="welkom-gebruiker">Welkom <?php echo $_SESSION['name']; ?></h1>
      <div class="info-gebruiker">
        <h2>Gebruikersinformatie</h2>
        <div class="user-box">
          <p><strong>Naam:</strong> <span id="user-name"><?php echo $_SESSION['name']; ?></span></p>
          <p><strong>Email:</strong> <span id="user-email"><?php echo $_SESSION['email']; ?></span></p>
          <p><strong>Geboortedatum:</strong> <span id="user-birthday"><?php echo $_SESSION['birthday']; ?></span></p>
          <p><strong>Adres:</strong> <span id="user-aanmelden"><?php echo $_SESSION['address']; ?></span></p>
          <p><strong>Straat:</strong> <span id="user-street"><?php echo $_SESSION['street']; ?></span></p>
          <p><strong>Postcode:</strong> <span id="user-zipcode"><?php echo $_SESSION['zipcode']; ?></span></p>
          <p><strong>Wachtwoord:</strong> <span id="user-password"><?php echo $_SESSION['password']; ?></span></p>
          <?php
          if ($result['aanmelden'] == 1) {
            echo '<h1>U heeft zich aangemeldt voor de escape room!</h1>';
          } else {
            echo '<li><a href="../index.php#section-3">Aanmelden voor de escape room</a></li>';
          }
          ?>
        </div>

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