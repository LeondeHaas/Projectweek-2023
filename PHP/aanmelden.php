<?php

include_once('../Includes/connect.php');
session_start();
if (isset($_SESSION['user']) != true) {
    header("location: ../index.php");
} else {
    header("location: ../index.php");
}

if (isset($_POST['aanmelden'])) {
    $stmt = $connect->prepare("UPDATE user SET aanmelden = 1 WHERE id = ?");
    $stmt->execute([$_SESSION['id']]);
    header('Location ../index.php');
    exit();
}
