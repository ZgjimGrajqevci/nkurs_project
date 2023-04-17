<?php
include 'includes/config.php';

$sql = 'SELECT * FROM admins';
$getUsers = $conn->prepare($sql);
$getUsers->execute();
$users = $getUsers->fetchAll();

include 'header.php';

if (!empty($_SESSION['username'])) {

    $sql = 'SELECT * FROM cities';
    $getCity = $conn->prepare($sql);
    $getCity->execute();
    $city = $getCity->fetchAll();

    include 'navbar.php';

    ?>

<div class="container">
    <form id="addCourses" action="logic/addCoursesLogic.php" method="post" enctype="multipart/form-data">
        <h1>Add a Course</h1>
        <p class="alert-danger">Don't leave Spaces Behind!!</p>
        <div class="row d-flex py-3">
            <div class="form-group col-md-8">
                <h3>Name</h3>
                <input type="text" class="form-control" name="courseName" placeholder="Course Name" autocomplete="off" required>
            </div>
            <div class="col-md-4 d-flex flex-column">
                <h3>Price</h3>
                <div class="d-flex">
                    <div class="form-group">
                        <input type="number" class="form-control" name="coursePriceFrom" autocomplete="off" placeholder="Form">
                    </div>
                    <p class="px-3">-</p>
                    <div class="form-group">
                        <input type="number" class="form-control" name="coursePriceTo" autocomplete="off" placeholder="To">
                    </div>
                </div>
                <p><span class="text-danger">1-1</span>=sipas ofertës || <span class="text-danger">blank</span>=i pacaktuar</p>
            </div>
        </div>

        <div class="d-flex row py-3">
            <div class="col-lg-6">
                <h3>City</h3>
                <div class="d-flex row">
                    <div class="form-group col-md-12">
                        <select class="form-control" name="courseCity">
                            <option value="">-- Choose City --</option>
                            <?php foreach ($city as $key => $value) { ?>
                                <option value="<?= $value[1];?>"><?= $value[1]; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h3>Places</h3>
                <div class="row d-flex">
                    <div class="form-group col-md-12 d-flex">
                        <select class="form-control" name="courseLocationsAmount">
                            <option value="">-- How many places --</option>
                            <option value="1 Pikë">1 Pikë</option>
                            <option value="2 Pika">2 Pika</option>
                            <option value="3 Pika">3 Pika</option>
                            <option value="4 Pika">4 Pika</option>
                            <option value="5 Pika">5 Pika</option>
                            <option value="6 Pika">6 Pika</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-3">
            <h3>Addresses</h3>
            <div class="form-group d-flex">
                <input type="text" class="form-control mr-2" name="courseLocation1" placeholder="Street, Nr.14, Town" autocomplete="off">
                <input type="text" class="form-control ml-2" name="courseLocationLink1" placeholder="Location Link" autocomplete="off" >
            </div>
            <div class="form-group d-flex">
                <input type="text" class="form-control mr-2" name="courseLocation2" placeholder="Street, Nr.14, Town" autocomplete="off">
                <input type="text" class="form-control ml-2" name="courseLocationLink2" placeholder="Location Link" autocomplete="off">
            </div>
            <div class="form-group d-flex">
                <input type="text" class="form-control mr-2" name="courseLocation3" placeholder="Street, Nr.14, Town" autocomplete="off">
                <input type="text" class="form-control ml-2" name="courseLocationLink3" placeholder="Location Link" autocomplete="off">
            </div>
            <div class="form-group d-flex">
                <input type="text" class="form-control mr-2" name="courseLocation4" placeholder="Street, Nr.14, Town" autocomplete="off">
                <input type="text" class="form-control ml-2" name="courseLocationLink4" placeholder="Location Link" autocomplete="off">
            </div>
            <div class="form-group d-flex">
                <input type="text" class="form-control mr-2" name="courseLocation5" placeholder="Street, Nr.14, Town" autocomplete="off">
                <input type="text" class="form-control ml-2" name="courseLocationLink5" placeholder="Location Link" autocomplete="off">
            </div>
            <div class="form-group d-flex">
                <input type="text" class="form-control mr-2" name="courseLocation6" placeholder="Street, Nr.14, Town" autocomplete="off">
                <input type="text" class="form-control ml-2" name="courseLocationLink6" placeholder="Location Link" autocomplete="off">
            </div>
        </div>

        <div class="py-3">
            <h3>Numbers</h3>
            <div class="form-group d-flex">
                <input type="text" class="form-control mr-2" name="courseNumber1" placeholder="383 44 123 456" autocomplete="off">
                <input type="text" class="form-control ml-2 " name="courseNumberLocation1" placeholder="Place" autocomplete="off">
            </div>
            <div class="form-group d-flex">
                <input type="text" class="form-control mr-2" name="courseNumber2" placeholder="383 44 123 456" autocomplete="off">
                <input type="text" class="form-control ml-2 " name="courseNumberLocation2" placeholder="Place" autocomplete="off">
            </div>
            <div class="form-group d-flex">
                <input type="text" class="form-control mr-2" name="courseNumber3" placeholder="383 44 123 456" autocomplete="off">
                <input type="text" class="form-control ml-2" name="courseNumberLocation3" placeholder="Place" autocomplete="off">
            </div>
            <div class="form-group d-flex">
                <input type="text" class="form-control mr-2" name="courseNumber4" placeholder="383 44 123 456" autocomplete="off">
                <input type="text" class="form-control ml-2 " name="courseNumberLocation4" placeholder="Place" autocomplete="off">
            </div>
            <div class="form-group d-flex">
                <input type="text" class="form-control mr-2" name="courseNumber5" placeholder="383 44 123 456" autocomplete="off">
                <input type="text" class="form-control ml-2" name="courseNumberLocation5" placeholder="Place" autocomplete="off">
            </div>
            <div class="form-group d-flex">
                <input type="text" class="form-control mr-2" name="courseNumber6" placeholder="383 44 123 456" autocomplete="off">
                <input type="text" class="form-control ml-2" name="courseNumberLocation6" placeholder="Place" autocomplete="off">
            </div>
        </div>

        <div class="row py-3">
            <div class="col-lg-6">
                <h3>Schedule</h3>
                <table class="table table-light">
                    <small class="alert-danger">If is closed that day leave it blank!!</small>
                    <tbody>
                        <tr>
                            <td>Hënë:</td>
                            <td><input type="time" class="form-control" name="courseScheduleOpen1"></td>
                            <td> <input type="time" class="form-control" name="courseScheduleClose1"></td>
                        </tr>
                        <tr>
                            <td><p>Martë:</p></td>
                            <td><input type="time" class="form-control" name="courseScheduleOpen2"></td>
                            <td><input type="time" class="form-control" name="courseScheduleClose2"></td>
                        </tr>
                        <tr>
                            <td><p>Mërkurë:</p></td>
                            <td><input type="time" class="form-control" name="courseScheduleOpen3"></td>
                            <td><input type="time" class="form-control" name="courseScheduleClose3"></td>
                        </tr>
                        <tr>
                            <td><p>Enjte:</p></td>
                            <td><input type="time" class="form-control" name="courseScheduleOpen4"></td>
                            <td> <input type="time" class="form-control" name="courseScheduleClose4"></td>
                        </tr>
                        <tr>
                            <td><p>Premte:</p></td>
                            <td><input type="time" class="form-control" name="courseScheduleOpen5"></td>
                            <td><input type="time" class="form-control" name="courseScheduleClose5"></td>
                        </tr>
                        <tr>
                            <td><p>Shtunë:</p></td>
                            <td><input type="time" class="form-control" name="courseScheduleOpen6"></td>
                            <td><input type="time" class="form-control" name="courseScheduleClose6"></td>
                        </tr>
                        <tr>
                            <td><p>Diele:</p></td>
                            <td><input type="time" class="form-control" name="courseScheduleOpen7"></td>
                            <td><input type="time" class="form-control" name="courseScheduleClose7"></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col-lg-6">

                <h3>Email</h3>
                <div class="form-group py-2">
                    <input type="email" class="form-control" name="courseEmail" placeholder="Email" autocomplete="off">
                </div>

                <h3>Website</h3>
                <div class="d-flex row py-2">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="courseWebsite" placeholder="Website" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="courseWebsiteLink" placeholder="Website Link" autocomplete="off">
                    </div>
                </div>

                <h3>Facebook</h3>
                <div class="d-flex row py-2">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="courseFb" placeholder="Facebook" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="courseFbLink" placeholder="Facebook Link" autocomplete="off">
                    </div>
                </div>

                <h3>Instagram</h3>
                <div class="d-flex row py-2">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="courseInsta" placeholder="Instagram" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="courseInstaLink" placeholder="Instagram Link" autocomplete="off">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group py-2">
            <h3>Info</h3>
            <textarea type="text" class="form-control" name="courseInfo" placeholder="Course Info" form="addCourses" style="height: 200px;"></textarea>
        </div>

        <h3>Services</h3>
        <div>
            <small class="alert-danger">Add them in numbers order!!!</small>
            <div class="d-flex">
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="courseService1" placeholder="Course Service 1" autocomplete="off" required>
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="courseService2" placeholder="Course Service 2" autocomplete="off">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="courseService3" placeholder="Course Service 3" autocomplete="off">
                </div>
            </div>
            <div class="d-flex">
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="courseService4" placeholder="Course Service 4" autocomplete="off">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="courseService5" placeholder="Course Service 5" autocomplete="off">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="courseService6" placeholder="Course Service 6" autocomplete="off">
                </div>
            </div>
            <div class="d-flex">
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="courseService7" placeholder="Course Service 7" autocomplete="off">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="courseService8" placeholder="Course Service 8" autocomplete="off">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="courseService9" placeholder="Course Service 9" autocomplete="off">
                </div>
            </div>
            <div class="d-flex">
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="courseService10" placeholder="Course Service 10" autocomplete="off">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="courseService11" placeholder="Course Service 11" autocomplete="off">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="courseService12" placeholder="Course Service 12" autocomplete="off">
                </div>
            </div>

        </div>


        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-dark btn-lg btn-block">Add course</button>
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