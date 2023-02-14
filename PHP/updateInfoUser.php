<?php

include_once('../Includes/connect.php');

if (isset($_POST['updateuser'])) {

    $sql = "UPDATE user SET name = :name, email = :email, birthday = :birthday, address = :address, street = :street, zipcode = :zipcode, password = :password WHERE id = :id";

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_POST['id']);
    $stmt->bindParam(":name", $_POST['name']);
    $stmt->bindParam(":email", $_POST['email']);
    $stmt->bindParam(":birthday", $_POST['birthday']);
    $stmt->bindParam(":address", $_POST['address']);
    $stmt->bindParam(":street", $_POST['street']);
    $stmt->bindParam(":zipcode", $_POST['zipcode']);
    $stmt->bindParam(":password", $_POST['password']);
    $stmt->execute();

    header("Location: allUsers.php");
    exit();
}
