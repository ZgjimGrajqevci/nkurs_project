<?php

    include_once('../includes/config.php');

    if(isset($_POST['submit'])) {

        $cityName = $_POST['cityName'];

        $sql = "INSERT INTO cities(cityName) VALUES (:cityName)";

        $insertSql = $conn->prepare($sql);

        $insertSql->bindParam(':cityName', $cityName);

        $insertSql->execute();

        header('Location:../index.php');
    }
    else
    {
        header('Location:../index.php');
    }

?>
