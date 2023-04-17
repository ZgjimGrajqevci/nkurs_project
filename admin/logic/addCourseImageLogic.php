<?php

// Include the database configuration file
include_once('../includes/config.php');

// File upload path
$targetDir = "../../courseImages/";
$imageName = basename($_FILES["imageName"]["name"]);
$targetFilePath = $targetDir . $imageName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

if (isset($_POST["submit"]) && !empty($_FILES["imageName"]["name"])) {
    // Allow certain file formats
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf','jfif');
    $theCourseId = $_POST['theCourseId'];
    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES["imageName"]["tmp_name"], $targetFilePath)) {
            // Insert image file name into database
            $insert = $conn->query("INSERT INTO coursesimage (theCourseId, imageName) VALUES ('" . $theCourseId . "', '" . $imageName . "')");
            if ($insert) {
                $_SESSION['status'] = "The file " . $imageName . " has been uploaded successfully.";
                header('Location:../index.php');
            } else {
                $_SESSION['status'] = "File upload failed, please try again.";
                header('Location:../index.php');
            }
        } else {
            $_SESSION['status'] = "Sorry, there was an error uploading your file.";
            header('Location:../index.php');

        }
    } else {
        $_SESSION['status'] = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        header('Location:../index.php');
    }
} else {
    $_SESSION['status'] = 'Please select a file to upload.';
    header('Location:../index.php');
}

?>