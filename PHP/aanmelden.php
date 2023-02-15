<?php

include_once('../Includes/connect.php');
session_start();

if (isset($_SESSION['user']) != true) {
    header("location: ../index.php");
    exit();
}

if (isset($_POST['aanmelden'])) {
    $stmt = $connect->prepare("UPDATE user SET aanmelden = 1 WHERE id = ?");
    $stmt->execute([$_SESSION['id']]);
    echo '<script>alert("Je bent aangemeld voor de escape room!");</script>';
    echo '<script>setTimeout(function() { window.location.href = "../index.php"; }, 1000);</script>';
    echo 'Je wordt zo teruggestuurd';
    header('Location ../index.php');
    exit();
}
