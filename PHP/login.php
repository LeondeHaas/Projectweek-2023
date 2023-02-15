<?php
include_once('../Includes/connect.php');

if (isset($_POST["submit"])) {
    $sql = "SELECT * FROM user WHERE email = :email AND password = :password";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":email", $_POST["email"]);
    $stmt->bindParam(":password", $_POST["password"]);
    $stmt->execute();
    $rowcount = $stmt->rowCount();
    $user = $stmt->fetch();
    if ($rowcount >= 1) {
        if ($user['admin'] == 1) {
            password_verify($_POST["password"], $user["password"]);
            session_start();
            $_SESSION['id'] = $user['id'];
            $_SESSION['admin'] = true;
            $_SESSION['user'] = false;
            $_SESSION['loggedIn'] = true;
            $_SESSION['name'] = $user["name"];
            $_SESSION['email'] = $user["email"];
            $_SESSION['birthday'] = $user["birthday"];
            $_SESSION['address'] = $user["address"];
            $_SESSION['street'] = $user["street"];
            $_SESSION['zipcode'] = $user["zipcode"];
            $_SESSION['password'] = $user["password"];


            header("location: admin.php");
        } else {
            password_verify($_POST["password"], $user["password"]);
            session_start();
            $_SESSION['id'] = $user['id'];
            $_SESSION['admin'] = false;
            $_SESSION['user'] = true;
            $_SESSION['loggedIn'] = true;
            $_SESSION['name'] = $user["name"];
            $_SESSION['email'] = $user["email"];
            $_SESSION['birthday'] = $user["birthday"];
            $_SESSION['address'] = $user["address"];
            $_SESSION['street'] = $user["street"];
            $_SESSION['zipcode'] = $user["zipcode"];
            $_SESSION['password'] = $user["password"];
            header("location: ../index.php");
        }
    } else {
        header("location: ../login.php");
    }
}

// $sql = "SELECT * FROM user WHERE email = :email";
// $stmt = $connect->prepare($sql);
// $stmt->bindParam(":email", $_POST["email"]);
// $stmt->execute();
// $user = $stmt->fetch();

// if (password_verify($_POST["password"], $user["password"])) {
//     //password is correct
//     if ($user['admin'] == 1) {
//         session_start();
//         $_SESSION['id'] = $user['id'];
//         $_SESSION['admin'] = true;
//         $_SESSION['user'] = true;
//         $_SESSION['loggedIn'] = true;
//         $_SESSION['name'] = $user["name"];
//         $_SESSION['email'] = $user["email"];
//         header("location: admin.php");
//         exit();
//     } else {
//         session_start();
//         $_SESSION['id'] = $user['id'];
//         $_SESSION['admin'] = false;
//         $_SESSION['user'] = true;
//         $_SESSION['loggedIn'] = true;
//         $_SESSION['name'] = $user["name"];
//         $_SESSION['email'] = $user["email"];
//         header("location: user.php");
//         exit();
//     }
// } else {
//     header("location: ../index.html");
//     exit();
// }
