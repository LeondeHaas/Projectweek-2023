<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="Styles/styles.css" />
  <link rel="stylesheet" href="Styles/header.css" />
  <!-- font-families -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,300;1,200&display=swap" rel="stylesheet" />

  <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&display=swap" rel="stylesheet" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
</head>

<body>
  <header class="header">
    <nav class="navbar">
      <div class="content">
        <div class="logo">
          <a href="./index.php"><img class="website" id="website" alt="https://media.tenor.com/BTwfZwYmtToAAAAd/yo-cuando-spinning.gif" src="./Images/escaperoom_logo_werkbestand-removebg-preview (2).png"></a>
        </div>
        <ul class="menu-list">
          <div class="icon cancel-btn">
            <i class="fas fa-times"></i>
          </div>
          <li><a href="index.php">Home</a></li>
          <li><a href="register.php">Register</a></li>
          <li><a href="login.php">Sign-in</a></li>
        </ul>
        <div class="icon menu-btn">
          <i class="fas fa-bars"></i>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="main-container-form">
      <div class="register-form">
        <form action="PHP/register.php" method="post">
          <label for="name">Naam</label>
          <input type="text" placeholder="Jan" name="name" id="name" required />
          <label for="email">Email</label>
          <input class="css" type="email" placeholder="jan1@gmail.com" name="email" id="email" required />
          <label for="birthday">Geboortedatum</label>
          <input class="css" type="date" name="birthday" id="birthday" value="2002-01-27" min="1920-01-01" max="2022-01-01" required />
          <label for="address">Adres</label>
          <input type="text" name="address" id="address" placeholder="Amsterdam" required />
          <label for="street">Straat</label>
          <input type="text" name="street" id="street" placeholder="Amsterdamseweg 69" required />
          <label for="zipcode">Postcode</label>
          <input type="text" name="zipcode" id="zipcode" placeholder="1234AB" required />
          <label for="password">Wachtwoord</label>
          <input class="css" type="password" name="password" id="password" required />
          <input type="submit" value="submit" name="submit" id="submit" />
        </form>
      </div>
    </div>
  </main>
  <script src="../Javascript/main.js"></script>
</body>

</html>