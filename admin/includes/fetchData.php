<?php

    include_once 'includes/config.php';

    $sql = 'SELECT * FROM admins';
    $getUsers = $conn->prepare($sql);
    $getUsers->execute();
    $users = $getUsers->fetchAll();

?>