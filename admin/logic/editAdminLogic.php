<?php

    include_once('../includes/config.php');

    if (isset($_POST['update'])) {

        $adminId = $_POST['adminId'];
        $username = $_POST['username'];
        $adminPassword = password_hash($_POST['adminPassword'], PASSWORD_DEFAULT);

    }
    if (!empty($adminId)) {
        $sql = "UPDATE admins SET username=:username , adminPassword=:adminPassword where adminId=$adminId";

        $updateSql = $conn->prepare($sql);

        $updateSql->bindParam(':username',$username);
        $updateSql->bindParam(':adminPassword',$adminPassword);

        $updateSql->execute();

        header("Location:../users.php");

    }
    else{
        echo "something went wrong!!";
    }

?>