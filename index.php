<?php

session_start();

?>

<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <link rel="stylesheet" href="Styles/styles.css">
    <link rel="stylesheet" href="Styles/header.css">
    <link rel="stylesheet" href="Styles/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- font-families -->
</head>
<header>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <nav class="navbar">
            <div class="content">
                <div class="logo">
                    <a href="./index.php"><img class="website" id="website" alt="https://media.tenor.com/BTwfZwYmtToAAAAd/yo-cuando-spinning.gif" src="./Images/escaperoom_logo_werkbestand-removebg-preview (2).png"></a>
                </div>
                <ul class="menu-list">
                    <div class="icon cancel-btn">
                        <i class="fas fa-times"></i>
                    </div>
                    <li><a href="#section-2" id="locate2">About</a></li>
                    <li><a href="#section-3" id="locate3">Join</a></li>
                    <?php
                    include_once('./Includes/connect.php');
                    if (isset($_SESSION['user']) != true) {
                        echo '<li><a href="./register.php">Register</a></li>';
                        echo '<li><a href="./login.php">Sign-in</a></li>';
                    } else {
                        echo '<li><a href="php/user.php">Profiel</a></li>';
                        echo '<li><a href="php/logout.php">Logout</a></li>';
                    }
                    ?>

                </ul>
                <div class="icon menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>

    </html>
</header>
<div class="gap"></div>

<body>
    <div class="main-container">
        <div class="text-box">
            <h1>Welkom <?php include_once('./Includes/connect.php');
                        if (isset($_SESSION['user']) != true) {
                            echo 'bij <br> de verborgen piramide van <span class="color">Heyendaal</span></h1>
            <p class="info">Welkom bij de website van onze escape room!<br> Wij hebben een Egyptische escape room gemaakt, komt u uit de 4 gethematiseerde puzels? kom en probeer hem uit.
                ROC Nijmegen - Heyedaalseweg</p>';
                        } else {
                            echo $_SESSION['name'] . ' bij <br> de verborgen piramide van <span class="color">Heyendaal</span></h1>
            <p class="info">Welkom bij de website van onze escape room!<br> Wij hebben een Egyptische escape room gemaakt, komt u uit de 4 gethematiseerde puzels? kom en probeer hem uit.
                ROC Nijmegen - Heyedaalseweg</p>';
                        } ?>
                <?php
                include_once('./Includes/connect.php');
                if (isset($_SESSION['user']) != true) {
                    echo '<button class="sign-in"><a href="login.php">Sign in</a></button>';
                    echo '<button class="register"><a href="register.php">Register</a></button>';
                }
                ?>
        </div>

        <div id="container">
            <span id="text1"></span>
            <span id="text2"></span>
        </div>

        <defs>
            <filter id="threshold">
                <feColorMatrix in="SourceGraphic" type="matrix" values="1 0 0 0 0
                                        0 1 0 0 0
                                        0 0 1 0 0
                                        0 0 0 255 -140" />
            </filter>
        </defs>

    </div>
    <div class="section-container-1">
        <div class="section-container-wrapper-1">
            <h2>How about an introduction?</h2>
            <iframe id="section-2" width="100%" height="515" src="https://www.youtube.com/embed/-obKX-mqjXQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <p class="info">Toen de rangers na de expeditie in Egypte erachter kwamen dat er een Egyptische Pyramide
                onder de grond bij heyendaal was het vervolg van de baas
                Ranger Mike Hawk zijn rangers sturen naar de Pyramide waar
                niemand ooit in is geweest. Ze zijn hier om goud te zoeken
                en om onderzoek te doen naar de mummie waar iedereen het over
                heeft als ze het hebben over de Pyramide. <br><br>Helaas blijkt het
                tijdens de uitleg van Mike dat er een booby trap geactiveerd werd
                die ervoor zorgt dat de uitgang niet meer te bereiken is
                zonder het goud. Zoek samen met alle rangers het goud om lekker zelf te houden natuurlijk maar ook om een instortende pyramide te overleven. Kijk goed om je heen alles kan een hint zijn!</p>
        </div>
    </div>
    <main>
        <div class="aanmelden-container" id=section-3>
            <div class="timer" id="timer"></div>
            <div class="tekst-timer">
                <h3>Wees niet te laat met het inschrijven voor onze escaperoom, dit is de enige keer dat u voor deze escaperoom kan doen!</h3>
                <h4>U mag zoveel vrieden, familiegenoten meenemen naar de escaperoom!</h4>
            </div>
            <div class="aanmelden-knop">
                <?php

                include_once('./Includes/connect.php');

                if (isset($_SESSION['user']) != true) {
                    echo '<div class="moet-inloggen-knop">';
                    echo '<h2>U moet een account hebben om aan te melden voor de escape room!</h2>';
                    echo '<div class="knoppen">';
                    echo '<button class="sign-in"><a href="login.php">Sign in</a></button>';
                    echo '<button class="register2"><a href="register.php">Register</a></button>';
                    echo '</div>';
                    echo '</div>';
                } else {
                    include_once('./Includes/connect.php');

                    $id = $_SESSION['id'];
                    $sql = "SELECT * FROM user WHERE id = :id AND admin = 0";
                    $stmt = $connect->prepare($sql);
                    $stmt->bindParam(':id', $id);
                    $stmt->execute();
                    $result = $stmt->fetch(PDO::FETCH_ASSOC);
                    if ($result['aanmelden'] != 1) {
                        echo '<form action="PHP/aanmelden.php" method="post">';
                        echo '<label for="aanmelden">Meldt u zich aan voor de escape room</label>';
                        echo '<input type="submit" value="Aanmelden" name="aanmelden" id="aanmelden" />';
                        echo '</form>';
                    } else {
                        echo '<h2>U bent aangemeldt voor de escape room!</h2>';
                    }
                }
                ?>
            </div>
        </div>
    </main>
</body>
<footer>
    <div class="copyright">
        <p>© de verborgen piramide van Heyendaal</p>
    </div>
</footer>
<script src="Javascript/timer.js"></script>
<script src="Javascript/main.js"></script>

</html>