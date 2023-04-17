<?php

    include_once('../includes/config.php');

    if(isset($_POST['submit'])) {

        $courseName = $_POST['courseName'];

        $coursePriceFrom = $_POST['coursePriceFrom'];
        $coursePriceTo = $_POST['coursePriceTo'];

        $courseCity = $_POST['courseCity'];

        $courseLocation1 = $_POST['courseLocation1'];
        $courseLocation2 = $_POST['courseLocation2'];
        $courseLocation3 = $_POST['courseLocation3'];
        $courseLocation4 = $_POST['courseLocation4'];
        $courseLocation5 = $_POST['courseLocation5'];
        $courseLocation6 = $_POST['courseLocation6'];

        $courseLocationLink1 = $_POST['courseLocationLink1'];
        $courseLocationLink2 = $_POST['courseLocationLink2'];
        $courseLocationLink3 = $_POST['courseLocationLink3'];
        $courseLocationLink4 = $_POST['courseLocationLink4'];
        $courseLocationLink5 = $_POST['courseLocationLink5'];
        $courseLocationLink6 = $_POST['courseLocationLink6'];

        $courseLocationsAmount = $_POST['courseLocationsAmount'];

        $courseNumber1 = $_POST['courseNumber1'];
        $courseNumber2 = $_POST['courseNumber2'];
        $courseNumber3 = $_POST['courseNumber3'];
        $courseNumber4 = $_POST['courseNumber4'];
        $courseNumber5 = $_POST['courseNumber5'];
        $courseNumber6 = $_POST['courseNumber6'];

        $courseNumberLocation1 = $_POST['courseNumberLocation1'];
        $courseNumberLocation2 = $_POST['courseNumberLocation2'];
        $courseNumberLocation3 = $_POST['courseNumberLocation3'];
        $courseNumberLocation4 = $_POST['courseNumberLocation4'];
        $courseNumberLocation5 = $_POST['courseNumberLocation5'];
        $courseNumberLocation6 = $_POST['courseNumberLocation6'];

        $courseScheduleOpen1 = $_POST['courseScheduleOpen1'];
        $courseScheduleOpen2 = $_POST['courseScheduleOpen2'];
        $courseScheduleOpen3 = $_POST['courseScheduleOpen3'];
        $courseScheduleOpen4 = $_POST['courseScheduleOpen4'];
        $courseScheduleOpen5 = $_POST['courseScheduleOpen5'];
        $courseScheduleOpen6 = $_POST['courseScheduleOpen6'];
        $courseScheduleOpen7 = $_POST['courseScheduleOpen7'];

        $courseScheduleClose1 = $_POST['courseScheduleClose1'];
        $courseScheduleClose2 = $_POST['courseScheduleClose2'];
        $courseScheduleClose3 = $_POST['courseScheduleClose3'];
        $courseScheduleClose4 = $_POST['courseScheduleClose4'];
        $courseScheduleClose5 = $_POST['courseScheduleClose5'];
        $courseScheduleClose6 = $_POST['courseScheduleClose6'];
        $courseScheduleClose7 = $_POST['courseScheduleClose7'];

        $courseEmail = $_POST['courseEmail'];

        $courseWebsite = $_POST['courseWebsite'];
        $courseWebsiteLink = $_POST['courseWebsiteLink'];

        $courseFb = $_POST['courseFb'];
        $courseFbLink = $_POST['courseFbLink'];

        $courseInsta = $_POST['courseInsta'];
        $courseInstaLink = $_POST['courseInstaLink'];

        $courseInfo = $_POST['courseInfo'];

        $courseService1 = $_POST['courseService1'];
        $courseService2 = $_POST['courseService2'];
        $courseService3 = $_POST['courseService3'];
        $courseService4 = $_POST['courseService4'];
        $courseService5 = $_POST['courseService5'];
        $courseService6 = $_POST['courseService6'];
        $courseService7 = $_POST['courseService7'];
        $courseService8 = $_POST['courseService8'];
        $courseService9 = $_POST['courseService9'];
        $courseService10 = $_POST['courseService10'];
        $courseService11 = $_POST['courseService11'];
        $courseService12 = $_POST['courseService12'];

        $sql = "INSERT INTO courses( courseName, coursePriceFrom, coursePriceTo, courseCity, courseLocation1, courseLocation2, courseLocation3, courseLocation4, courseLocation5, courseLocation6, courseLocationLink1, courseLocationLink2, courseLocationLink3, courseLocationLink4, courseLocationLink5, courseLocationLink6, courseLocationsAmount, courseNumber1, courseNumber2, courseNumber3, courseNumber4, courseNumber5, courseNumber6, courseNumberLocation1, courseNumberLocation2, courseNumberLocation3, courseNumberLocation4, courseNumberLocation5, courseNumberLocation6, courseScheduleOpen1, courseScheduleOpen2, courseScheduleOpen3, courseScheduleOpen4, courseScheduleOpen5, courseScheduleOpen6, courseScheduleOpen7, courseScheduleClose1, courseScheduleClose2, courseScheduleClose3, courseScheduleClose4, courseScheduleClose5, courseScheduleClose6, courseScheduleClose7, courseEmail, courseWebsite, courseWebsiteLink, courseFb, courseFbLink, courseInsta, courseInstaLink, courseInfo, courseService1, courseService2, courseService3, courseService4, courseService5, courseService6, courseService7, courseService8, courseService9, courseService10, courseService11, courseService12) 
        VALUES ( :courseName, :coursePriceFrom, :coursePriceTo, :courseCity, :courseLocation1, :courseLocation2, :courseLocation3, :courseLocation4, :courseLocation5, :courseLocation6, :courseLocationLink1, :courseLocationLink2, :courseLocationLink3, :courseLocationLink4, :courseLocationLink5, :courseLocationLink6, :courseLocationsAmount, :courseNumber1, :courseNumber2, :courseNumber3, :courseNumber4, :courseNumber5, :courseNumber6, :courseNumberLocation1, :courseNumberLocation2, :courseNumberLocation3, :courseNumberLocation4, :courseNumberLocation5, :courseNumberLocation6, :courseScheduleOpen1, :courseScheduleOpen2, :courseScheduleOpen3, :courseScheduleOpen4, :courseScheduleOpen5, :courseScheduleOpen6, :courseScheduleOpen7, :courseScheduleClose1, :courseScheduleClose2, :courseScheduleClose3, :courseScheduleClose4, :courseScheduleClose5, :courseScheduleClose6, :courseScheduleClose7, :courseEmail, :courseWebsite, :courseWebsiteLink, :courseFb, :courseFbLink, :courseInsta, :courseInstaLink, :courseInfo, :courseService1, :courseService2, :courseService3, :courseService4, :courseService5, :courseService6, :courseService7, :courseService8, :courseService9, :courseService10, :courseService11, :courseService12)";

        $insertSql = $conn->prepare($sql);

        $insertSql->bindParam(':courseName',$courseName);

        $insertSql->bindParam(':coursePriceFrom',$coursePriceFrom);
        $insertSql->bindParam(':coursePriceTo',$coursePriceTo);

        $insertSql->bindParam(':courseCity',$courseCity);

        $insertSql->bindParam(':courseLocation1',$courseLocation1);
        $insertSql->bindParam(':courseLocation2',$courseLocation2);
        $insertSql->bindParam(':courseLocation3',$courseLocation3);
        $insertSql->bindParam(':courseLocation4',$courseLocation4);
        $insertSql->bindParam(':courseLocation5',$courseLocation5);
        $insertSql->bindParam(':courseLocation6',$courseLocation6);

        $insertSql->bindParam(':courseLocationLink1',$courseLocationLink1);
        $insertSql->bindParam(':courseLocationLink2',$courseLocationLink2);
        $insertSql->bindParam(':courseLocationLink3',$courseLocationLink3);
        $insertSql->bindParam(':courseLocationLink4',$courseLocationLink4);
        $insertSql->bindParam(':courseLocationLink5',$courseLocationLink5);
        $insertSql->bindParam(':courseLocationLink6',$courseLocationLink6);

        $insertSql->bindParam(':courseLocationsAmount',$courseLocationsAmount);

        $insertSql->bindParam(':courseNumber1',$courseNumber1);
        $insertSql->bindParam(':courseNumber2',$courseNumber2);
        $insertSql->bindParam(':courseNumber3',$courseNumber3);
        $insertSql->bindParam(':courseNumber4',$courseNumber4);
        $insertSql->bindParam(':courseNumber5',$courseNumber5);
        $insertSql->bindParam(':courseNumber6',$courseNumber6);

        $insertSql->bindParam(':courseNumberLocation1',$courseNumberLocation1);
        $insertSql->bindParam(':courseNumberLocation2',$courseNumberLocation2);
        $insertSql->bindParam(':courseNumberLocation3',$courseNumberLocation3);
        $insertSql->bindParam(':courseNumberLocation4',$courseNumberLocation4);
        $insertSql->bindParam(':courseNumberLocation5',$courseNumberLocation5);
        $insertSql->bindParam(':courseNumberLocation6',$courseNumberLocation6);

        $insertSql->bindParam(':courseScheduleOpen1',$courseScheduleOpen1);
        $insertSql->bindParam(':courseScheduleOpen2',$courseScheduleOpen2);
        $insertSql->bindParam(':courseScheduleOpen3',$courseScheduleOpen3);
        $insertSql->bindParam(':courseScheduleOpen4',$courseScheduleOpen4);
        $insertSql->bindParam(':courseScheduleOpen5',$courseScheduleOpen5);
        $insertSql->bindParam(':courseScheduleOpen6',$courseScheduleOpen6);
        $insertSql->bindParam(':courseScheduleOpen7',$courseScheduleOpen7);

        $insertSql->bindParam(':courseScheduleClose1',$courseScheduleClose1);
        $insertSql->bindParam(':courseScheduleClose2',$courseScheduleClose2);
        $insertSql->bindParam(':courseScheduleClose3',$courseScheduleClose3);
        $insertSql->bindParam(':courseScheduleClose4',$courseScheduleClose4);
        $insertSql->bindParam(':courseScheduleClose5',$courseScheduleClose5);
        $insertSql->bindParam(':courseScheduleClose6',$courseScheduleClose6);
        $insertSql->bindParam(':courseScheduleClose7',$courseScheduleClose7);

        $insertSql->bindParam(':courseEmail',$courseEmail);

        $insertSql->bindParam(':courseWebsite',$courseWebsite);
        $insertSql->bindParam(':courseWebsiteLink',$courseWebsiteLink);

        $insertSql->bindParam(':courseFb',$courseFb);
        $insertSql->bindParam(':courseFbLink',$courseFbLink);

        $insertSql->bindParam(':courseInsta',$courseInsta);
        $insertSql->bindParam(':courseInstaLink',$courseInstaLink);

        $insertSql->bindParam(':courseInfo',$courseInfo);

        $insertSql->bindParam(':courseService1',$courseService1);
        $insertSql->bindParam(':courseService2',$courseService2);
        $insertSql->bindParam(':courseService3',$courseService3);
        $insertSql->bindParam(':courseService4',$courseService4);
        $insertSql->bindParam(':courseService5',$courseService5);
        $insertSql->bindParam(':courseService6',$courseService6);
        $insertSql->bindParam(':courseService7',$courseService7);
        $insertSql->bindParam(':courseService8',$courseService8);
        $insertSql->bindParam(':courseService9',$courseService9);
        $insertSql->bindParam(':courseService10',$courseService10);
        $insertSql->bindParam(':courseService11',$courseService11);
        $insertSql->bindParam(':courseService12',$courseService12);

        $insertSql->execute();

        header('Location:../index.php');
    }
    else{
        header('Location:../index.php');
    }

?>

