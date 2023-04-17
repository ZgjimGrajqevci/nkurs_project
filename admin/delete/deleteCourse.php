<?php

include_once '../includes/config.php';

$courseId = $_GET['id'];

$sql = "DELETE FROM courses where courseId=:courseId";

$getCourses = $conn->prepare($sql);

$getCourses->bindParam(':courseId',$courseId);

$getCourses->execute();

header('Location:../index.php');

?>