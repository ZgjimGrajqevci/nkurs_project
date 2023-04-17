<?php

    include_once('../includes/config.php');

	if(isset($_POST['submit']))
	{
        $username = $_POST['username'];

        $tempPass = $_POST['adminPassword'];
        $adminPassword = password_hash($tempPass,PASSWORD_DEFAULT);

        $sql = "INSERT INTO admins(username,adminPassword) VALUES (:username,:adminPassword)";

        $insertSql = $conn->prepare($sql);

        $insertSql->bindParam(':username', $username);
        $insertSql->bindParam(':adminPassword', $adminPassword);

        $insertSql->execute();

        header('Location:../users.php');
    }
    else
    {
        header('Location:../users.php');
    }

    ?>