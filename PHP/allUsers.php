<?php

session_start();
if ($_SESSION['admin'] != true) {
    header("location: ../index.php");
}

include_once('../Includes/connect.php');


$sql = "SELECT * FROM user WHERE admin = 0 ";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

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
    <title>Gebruikers</title>
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
        <div class="alluser-container">
            <h1>Alle gebruikers</h1>
            <table class="table-alluser">
                <tr>
                    <th>ID</th>
                    <th>Naam</th>
                    <th>Email</th>
                    <th>Geboortedatum</th>
                    <th>Adres</th>
                    <th>Straat</th>
                    <th>Postcode</th>
                    <th>Aanpassen</th>
                    <th>Verwijderen</th>
                </tr>
                <?php

                foreach ($result as $user) {

                    echo '<tr>';
                    echo '<td>' . $user['id'] . '</td>';
                    echo '<td>' . $user['name'] . '</td>';
                    echo '<td>' . $user['email'] . '</td>';
                    echo '<td>' . $user['birthday'] . '</td>';
                    echo '<td>' . $user['address'] . '</td>';
                    echo '<td>' . $user['street'] . '</td>';
                    echo '<td>' . $user['zipcode'] . '</td>';
                    echo '<td class="user-update"><a href="updateUser.php?id=' . $user['id'] . '">Aanpassen</a></td>';
                    echo '<td class="user-delete"><a href="deleteUser.php?id=' . $user['id'] . '">Verwijderen</a></td>';
                    echo '</tr>';
                }
                ?>
            </table>
        </div>
    </main>
</body>

</html>