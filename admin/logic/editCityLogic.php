<?php

include_once('../includes/config.php');

if (isset($_POST['update'])) {

    $cityId = $_POST['cityId'];
    $cityName = $_POST['cityName'];

}
if (!empty($cityId)) {
    $sql = "UPDATE cities SET cityName=:cityName where cityId=$cityId";

    $updateSql = $conn->prepare($sql);

    $updateSql->bindParam(':cityName', $cityName);

    $updateSql->execute();

    header("Location:../index.php");

} else {
    echo "something went wrong!!";
}

