<?php

    include_once '../includes/config.php';

    $adminId = $_GET['id'];

    $sql = "DELETE FROM admins where adminId=:adminId";

    $getUsers = $conn->prepare($sql);

    $getUsers->bindParam(':adminId',$adminId);

    $getUsers->execute();

    header('Location:../users.php');

 ?>