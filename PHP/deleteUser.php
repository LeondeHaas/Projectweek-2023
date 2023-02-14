<?php

include("../includes/connect.php");

if (isset($_GET['id'])) {
    $sql_contact = "DELETE FROM user WHERE id = :id";
    $stmt_contact = $connect->prepare($sql_contact);
    $stmt_contact->bindParam(":id", $_GET['id']);
    $stmt_contact->execute();

    header("Location: allUsers.php");
    exit();
}
