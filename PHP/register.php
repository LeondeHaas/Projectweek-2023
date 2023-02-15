<?php

session_start();

include_once('../Includes/connect.php');

if (isset($_POST['submit'])) {

    $sql = "INSERT INTO user (name, email, birthday, address, street, zipcode, profile, password) VALUES(:name, :email, :birthday, :address, :street, :zipcode, :profile, :password)";

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":name", $_POST['name']);
    $stmt->bindParam(":email", $_POST['email']);
    $stmt->bindParam(":birthday", $_POST['birthday']);
    $stmt->bindParam(":address", $_POST['address']);
    $stmt->bindParam(":street", $_POST['street']);
    $stmt->bindParam(":zipcode", $_POST['zipcode']);
    $stmt->bindParam(":profile", $_POST['profile']);
    $stmt->bindParam(":password", $_POST['password']);
    $stmt->execute();
    $rowcount = $stmt->rowCount();
    $user = $stmt->fetch();

    $_SESSION['admin'] = false;
    $_SESSION['user'] = true;
    $_SESSION['loggedIn'] = true;
    $_SESSION['id'] = $user["id"];
    $_SESSION['name'] = $_POST["name"];
    $_SESSION['email'] = $_POST["email"];
    $_SESSION['birthday'] = $_POST["birthday"];
    $_SESSION['address'] = $_POST["address"];
    $_SESSION['street'] = $_POST["street"];
    $_SESSION['zipcode'] = $_POST["zipcode"];
    $_SESSION['password'] = $_POST["password"];

    header("Location: logout.php");
    exit();
}
