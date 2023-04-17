<?php
include 'includes/config.php';

$sql = 'SELECT * FROM admins';
$getUsers = $conn->prepare($sql);
$getUsers->execute();
$users = $getUsers->fetchAll();

include 'header.php';

if (!empty($_SESSION['username'])) {

    $sql = 'SELECT * FROM courses LEFT JOIN coursesimage ON courses.courseId = coursesimage.theCourseId WHERE imageStatus IS NULL';
    $getCoursesImage = $conn->prepare($sql);
    $getCoursesImage->execute();
    $coursesImage = $getCoursesImage->fetchAll();

    include 'navbar.php';

    ?>

    <div class="container mt-5">
        <form action="logic/addCourseImageLogic.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <select class="form-control" name="theCourseId">
                        <?php foreach ($coursesImage as $key => $value) { ?>
                            <option value="<?= $value['courseId'];?>"><?= $value['courseName']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <input type="file" name="imageName" required>
                </div>
            </div>
            <div class="form-group mt-5">
                <button type="submit" name="submit" class="btn btn-dark btn-lg btn-block">Add Image</button>
            </div>
        </form>
    </div>


    <?php
}else{ ?>
    <p>You need to login <a href="index.php">here</a>.</p>
    <?php
}

include 'scripts.php';
include 'footer.php';
?>