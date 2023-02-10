<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="Styles/styles.css" />
    <link rel="stylesheet" href="Styles/header.css" />
    <!-- font-families -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,300;1,200&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&display=swap"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>

  <body>
    <header class="header">
     <nav class="navbar">
            <div class="content">
                <div class="logo">
                    <a href="./index.php"></a><img class="website" id="website" alt="https://media.tenor.com/BTwfZwYmtToAAAAd/yo-cuando-spinning.gif" src="https://media.tenor.com/BTwfZwYmtToAAAAd/yo-cuando-spinning.gif">
                </div>
                <ul class="menu-list">
                    <div class="icon cancel-btn">
                        <i class="fas fa-times"></i>
                    </div>
                    <li><a href="#section-2" id="locate2">About</a></li>
                    <li><a href="./register.php">Register</a></li>
                    <li><a href="../login.php" id="locate3">Sign-in</a></li>
                </ul>
                <div class="icon menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>
    </header>
    <main>
      <div class="main-container">
        <div class="login-form">
          <form action="PHP/login.php" method="post">
            <label for="email">Email</label>
            <input
              type="email"
              placeholder="jan1@gmail.com"
              name="email"
              id="email"
              required
            />
            <label for="password">Wachtwoord</label>
            <input type="password" name="password" id="password" required />
            <input type="submit" value="submit" name="submit" id="submit" />
          </form>
        </div>
      </div>
    </main>
    <script src="../Javascript/main.js"></script>
  </body>
</html>
