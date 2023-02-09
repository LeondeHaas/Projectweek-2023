<?php
session_start();

if (!isset($_SESSION['admin']) || !isset($_SESSION['admin'])) {
    header("Location: ../index.html");
    exit();
}

// if (!isset($_SESSION['admin']) || !isset($_SESSION['admin']) && !isset($_SESSION['user']) || !isset($_SESSION['user'])) {
//     header("Location: index.html");
//     exit();
// }
