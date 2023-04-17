<?php

    include_once('../includes/config.php');

    if (isset($_POST['update'])) {

        $courseId = $_POST['courseId'];

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

    }
    if (!empty($courseId)) {
        $sql = "UPDATE courses SET courseName=:courseName, coursePriceFrom=:coursePriceFrom, coursePriceTo=:coursePriceTo, courseCity=:courseCity, courseLocation1=:courseLocation1, courseLocation2=:courseLocation2, courseLocation3=:courseLocation3, courseLocation4=:courseLocation4, courseLocation5=:courseLocation5, courseLocation6=:courseLocation6, courseLocationLink1=:courseLocationLink1, courseLocationLink2=:courseLocationLink2, courseLocationLink3=:courseLocationLink3, courseLocationLink4=:courseLocationLink4, courseLocationLink5=:courseLocationLink5, courseLocationLink6=:courseLocationLink6, courseLocationsAmount=:courseLocationsAmount, courseNumber1=:courseNumber1, courseNumber2=:courseNumber2, courseNumber3=:courseNumber3, courseNumber4=:courseNumber4, courseNumber5=:courseNumber5, courseNumber6=:courseNumber6, courseNumberLocation1=:courseNumberLocation1, courseNumberLocation2=:courseNumberLocation2, courseNumberLocation3=:courseNumberLocation3, courseNumberLocation4=:courseNumberLocation4,courseNumberLocation5=:courseNumberLocation5,courseNumberLocation6=:courseNumberLocation6, courseScheduleOpen1=:courseScheduleOpen1, courseScheduleOpen2=:courseScheduleOpen2, courseScheduleOpen3=:courseScheduleOpen3, courseScheduleOpen4=:courseScheduleOpen4, courseScheduleOpen5=:courseScheduleOpen5, courseScheduleOpen6=:courseScheduleOpen6,  courseScheduleOpen7=:courseScheduleOpen7, courseScheduleClose1=:courseScheduleClose1, courseScheduleClose2=:courseScheduleClose2, courseScheduleClose3=:courseScheduleClose3, courseScheduleClose4=:courseScheduleClose4, courseScheduleClose5=:courseScheduleClose5, courseScheduleClose6=:courseScheduleClose6, courseScheduleClose7=:courseScheduleClose7, courseEmail=:courseEmail, courseWebsite=:courseWebsite, courseWebsiteLink=:courseWebsiteLink, courseFb=:courseFb, courseFbLink=:courseFbLink, courseInsta=:courseInsta, courseInstaLink=:courseInstaLink, courseInfo=:courseInfo, courseService1=:courseService1, courseService2=:courseService2, courseService3=:courseService3, courseService4=:courseService4, courseService5=:courseService5, courseService6=:courseService6, courseService7=:courseService7, courseService8=:courseService8, courseService9=:courseService9, courseService10=:courseService10, courseService11=:courseService11, courseService12=:courseService12 where courseId=$courseId";

        $updateSql = $conn->prepare($sql);

        $updateSql->bindParam(':courseName',$courseName);

        $updateSql->bindParam(':coursePriceFrom',$coursePriceFrom);
        $updateSql->bindParam(':coursePriceTo',$coursePriceTo);

        $updateSql->bindParam(':courseCity',$courseCity);

        $updateSql->bindParam(':courseLocation1',$courseLocation1);
        $updateSql->bindParam(':courseLocation2',$courseLocation2);
        $updateSql->bindParam(':courseLocation3',$courseLocation3);
        $updateSql->bindParam(':courseLocation4',$courseLocation4);
        $updateSql->bindParam(':courseLocation5',$courseLocation5);
        $updateSql->bindParam(':courseLocation6',$courseLocation6);

        $updateSql->bindParam(':courseLocationLink1',$courseLocationLink1);
        $updateSql->bindParam(':courseLocationLink2',$courseLocationLink2);
        $updateSql->bindParam(':courseLocationLink3',$courseLocationLink3);
        $updateSql->bindParam(':courseLocationLink4',$courseLocationLink4);
        $updateSql->bindParam(':courseLocationLink5',$courseLocationLink5);
        $updateSql->bindParam(':courseLocationLink6',$courseLocationLink6);

        $updateSql->bindParam(':courseLocationsAmount',$courseLocationsAmount);

        $updateSql->bindParam(':courseNumber1',$courseNumber1);
        $updateSql->bindParam(':courseNumber2',$courseNumber2);
        $updateSql->bindParam(':courseNumber3',$courseNumber3);
        $updateSql->bindParam(':courseNumber4',$courseNumber4);
        $updateSql->bindParam(':courseNumber5',$courseNumber5);
        $updateSql->bindParam(':courseNumber6',$courseNumber6);

        $updateSql->bindParam(':courseNumberLocation1',$courseNumberLocation1);
        $updateSql->bindParam(':courseNumberLocation2',$courseNumberLocation2);
        $updateSql->bindParam(':courseNumberLocation3',$courseNumberLocation3);
        $updateSql->bindParam(':courseNumberLocation4',$courseNumberLocation4);
        $updateSql->bindParam(':courseNumberLocation5',$courseNumberLocation5);
        $updateSql->bindParam(':courseNumberLocation6',$courseNumberLocation6);

        $updateSql->bindParam(':courseScheduleOpen1',$courseScheduleOpen1);
        $updateSql->bindParam(':courseScheduleOpen2',$courseScheduleOpen2);
        $updateSql->bindParam(':courseScheduleOpen3',$courseScheduleOpen3);
        $updateSql->bindParam(':courseScheduleOpen4',$courseScheduleOpen4);
        $updateSql->bindParam(':courseScheduleOpen5',$courseScheduleOpen5);
        $updateSql->bindParam(':courseScheduleOpen6',$courseScheduleOpen6);
        $updateSql->bindParam(':courseScheduleOpen7',$courseScheduleOpen7);

        $updateSql->bindParam(':courseScheduleClose1',$courseScheduleClose1);
        $updateSql->bindParam(':courseScheduleClose2',$courseScheduleClose2);
        $updateSql->bindParam(':courseScheduleClose3',$courseScheduleClose3);
        $updateSql->bindParam(':courseScheduleClose4',$courseScheduleClose4);
        $updateSql->bindParam(':courseScheduleClose5',$courseScheduleClose5);
        $updateSql->bindParam(':courseScheduleClose6',$courseScheduleClose6);
        $updateSql->bindParam(':courseScheduleClose7',$courseScheduleClose7);

        $updateSql->bindParam(':courseEmail',$courseEmail);

        $updateSql->bindParam(':courseWebsite',$courseWebsite);
        $updateSql->bindParam(':courseWebsiteLink',$courseWebsiteLink);

        $updateSql->bindParam(':courseFb',$courseFb);
        $updateSql->bindParam(':courseFbLink',$courseFbLink);

        $updateSql->bindParam(':courseInsta',$courseInsta);
        $updateSql->bindParam(':courseInstaLink',$courseInstaLink);

        $updateSql->bindParam(':courseInfo',$courseInfo);

        $updateSql->bindParam(':courseService1',$courseService1);
        $updateSql->bindParam(':courseService2',$courseService2);
        $updateSql->bindParam(':courseService3',$courseService3);
        $updateSql->bindParam(':courseService4',$courseService4);
        $updateSql->bindParam(':courseService5',$courseService5);
        $updateSql->bindParam(':courseService6',$courseService6);
        $updateSql->bindParam(':courseService7',$courseService7);
        $updateSql->bindParam(':courseService8',$courseService8);
        $updateSql->bindParam(':courseService9',$courseService9);
        $updateSql->bindParam(':courseService10',$courseService10);
        $updateSql->bindParam(':courseService11',$courseService11);
        $updateSql->bindParam(':courseService12',$courseService12);

        $updateSql->execute();

        header("Location:../index.php");

    } else {
        echo "something went wrong!!";
    }

?>
