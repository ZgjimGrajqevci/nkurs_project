<?php

include_once '../includes/config.php';

$cityId = $_GET['id'];

$sql = "DELETE FROM cities where cityId=:cityId";

$getCourses = $conn->prepare($sql);

$getCourses->bindParam(':cityId',$cityId);

$getCourses->execute();

header('Location:../index.php');

?>