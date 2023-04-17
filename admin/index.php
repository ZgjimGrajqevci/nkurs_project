<?php

    include_once 'includes/config.php';

    $sql = 'SELECT * FROM admins';
    $getUsers = $conn->prepare($sql);
    $getUsers->execute();
    $users = $getUsers->fetchAll();

    include 'header.php';

    if(!empty($_SESSION['username'])){

        $sql = 'SELECT * FROM cities';
        $getCity = $conn->prepare($sql);
        $getCity->execute();
        $city = $getCity->fetchAll();

        $sql = 'SELECT * FROM courses';
        $getCourses = $conn->prepare($sql);
        $getCourses->execute();
        $course = $getCourses->fetchAll();

        $sql = 'SELECT * FROM coursesimage LEFT OUTER JOIN courses ON coursesimage.theCourseId = courses.courseId GROUP BY coursesimage.imageId';
        $getCoursesImage = $conn->prepare($sql);
        $getCoursesImage->execute();
        $courseImage = $getCoursesImage->fetchAll();

        include 'navbar.php';

    ?>
    
    <div class="container">
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'course')" id="defaultOpen">course</button>
            <button class="tablinks" onclick="openCity(event, 'image')">image</button>
            <button class="tablinks" onclick="openCity(event, 'city')" >city</button>
        </div>
        <?php
        if (isset($_SESSION['status']) && $_SESSION['status'] !=''){
        echo '<p class="text-dark">' .  $_SESSION['status'] . '</p>';
        unset($_SESSION['status']);
        }
        ?>
        <div id="city" class="tabcontent">
            <a href="addCity.php"><button class="btn btn-dark btn-md mx-2">Add City</button></a>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">City ID</th>
                        <th scope="col">City</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($city as $key => $value) { ?>
                    <tr>
                        <th scope="row"><?= $value['cityId']; ?></th>
                        <td><?= $value['cityName']; ?></td>
                        <td class="d-flex">
                            <a href="editCity.php?id=<?= $value['cityId']; ?>" class="btn btn-primary btn-md mx-2">Edit</a>
                            <a href="delete/deleteCity.php?id=<?= $value['cityId']; ?>" class="btn btn-danger btn-md mx-2">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div id="course" class="tabcontent">
            <a href="addCourse.php"><button class="btn btn-dark btn-md mx-2">Add Course</button></a>
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">Course ID</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Course City</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($course as $key => $value) { ?>
                    <tr>
                        <th scope="row"><?= $value['courseId']; ?></th>
                        <td><?= $value['courseName']; ?></td>
                        <td><?= $value['courseCity']; ?></td>
                        <td class="d-flex">
                            <a href="editCourse.php?id=<?= $value['courseId']; ?>" class="btn btn-primary btn-md mx-2">Edit</a>
                            <a href="delete/deleteCourse.php?id=<?= $value['courseId']; ?>" class="btn btn-danger btn-md mx-2">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div id="image" class="tabcontent">
            <a href="addCourseImage.php"><button class="btn btn-dark btn-md mx-2">Add Course Image</button></a>
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Course Id</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($courseImage as $key => $value)  { ?>
                    <tr>
                        <th scope="row"><?= $value['imageId']; ?></th>
                        <td><?= $value['theCourseId']; ?></td>
                        <td><?= $value['courseName']; ?></td>
                        <td>
                            <?php
                            $imageURL = '../courseImages/'.$value["imageName"];
                            ?>
                            <img src="<?= $imageURL;?>" alt="" width="100px">
                        </td>
                        <td class="d-flex">
                            <a href="delete/deleteCourseImage.php?id=<?= $value['imageId']; ?>" class="btn btn-danger btn-md mx-2">Delete</a>
                        </td>
                    </tr>
                <?php
                    }   ?>
                </tbody>
            </table>
        </div>
    </div>

<?php
    } else{
    ?>

    <div class="container">
        <form class="signup-form" action="logic/loginLogic.php" method="post">
            <h2>Login</h2>
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username" required="required">
            </div>
            <div class="form-group">
                <input type="password" id="loginPassword" class="form-control" name="adminPassword" placeholder="Password" required="required">
            </div>
            <div>
                <?php
                if (isset($_SESSION['statusError']) && $_SESSION['statusError'] !=''){
                echo '<p class="text-danger">' .  $_SESSION['statusError'] . '</p>';
                unset($_SESSION['statusError']);
                }
                ?>
            </div>
            <div class="form-group">
                <button type="submit" name="login" class="btn btn-dark btn-lg btn-block">Login</button>
            </div>
        </form>
    </div>

<?php

    }

    include 'scripts.php';
    include 'footer.php';

    ?>