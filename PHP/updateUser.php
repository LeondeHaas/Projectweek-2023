<?php

include_once('../Includes/connect.php');
session_start();
if ($_SESSION['admin'] != true) {
    header("location: ../index.php");
}


$id = $_GET['id'];
$sql = "SELECT * FROM user WHERE id = :id";
$stmt = $connect->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/header.css">
    <link rel="stylesheet" href="../Styles/responsive.css">
    <link rel="stylesheet" href="../Styles/styles.css">
    <link rel="stylesheet" href="../Styles/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,300;1,200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&display=swap" rel="stylesheet">
    <title>Gebruiker aanpassen</title>
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
        <div class="update-user-container-form">
            <div class="register-form">
                <form action="updateInfoUser.php" method="post">
                    <label for="id">ID gebruiker</label>
                    <input type="text" name="id" placeholder="Id gebruiker" value="<?php echo $result['id']; ?>" readonly>
                    <label for="name">Naam</label>
                    <input type="text" placeholder="jan" name="name" id="name" value="<?php echo $result['name']; ?>" required />
                    <label for="email">Email</label>
                    <input class="css" type="email" placeholder="jan1@gmail.com" name="email" id="email" value="<?php echo $result['email']; ?>" required />
                    <label for="birthday">Geboortedatum</label>
                    <input class="css" type="date" name="birthday" id="birthday" value="<?php echo $result['birthday']; ?>" min="1920-01-01" max="2022-01-01" required />
                    <label for="address">Adres</label>
                    <input type="text" name="address" id="address" placeholder="Amsterdam" value="<?php echo $result['address']; ?>" required />
                    <label for="street">Straat</label>
                    <input type="text" name="street" id="street" placeholder="Amsterdamseweg 69" value="<?php echo $result['street']; ?>" required />
                    <label for="zipcode">Postcode</label>
                    <input type="text" name="zipcode" id="zipcode" placeholder="1234AB" value="<?php echo $result['zipcode']; ?>" required />
                    <label for="password">Wachtwoord</label>
                    <input class="css" type="password" name="password" id="password" required />
                    <input type="submit" value="Aanpassen" name="updateuser" id="updateuser" />
                    <div class="terug-knop"><a href="allUsers.php">Ga terug</a></div>
                </form>
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