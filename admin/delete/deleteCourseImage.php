<?php

    include_once '../includes/config.php';

    $courseImageId = $_GET['id'];

    $sql = "SELECT * FROM coursesimage where imageId= $courseImageId" ;
    $getCoursesImage = $conn->prepare($sql);
    $getCoursesImage->execute();
    $courseImage = $getCoursesImage->fetch();

        $data=$courseImage['imageName'];
        $dir = "../../courseImages";
        $dirHandle = opendir($dir);
        while ($file = readdir($dirHandle)) {
            if($file==$data) {
                unlink($dir."/".$file);//give correct path,
            }
        }
        closedir($dirHandle);

    $deletion = "DELETE FROM coursesimage where imageId=:id";

    $getCoursesImage = $conn->prepare($deletion);

    $getCoursesImage->bindParam(':id', $courseImageId);

    $getCoursesImage->execute();


header('Location:../index.php');

?>
