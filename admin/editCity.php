<?php

    include_once 'includes/config.php';

    $sql = 'SELECT * FROM admins';
    $getUsers = $conn->prepare($sql);
    $getUsers->execute();
    $users = $getUsers->fetch();

    include('../header.php');

    if (!empty($_SESSION['username'])) {

        $cityId = $_GET['id'];
        $sql = "SELECT * FROM cities where cityId=$cityId";
        $getCity = $conn->prepare($sql);
        $getCity->execute();
        $city = $getCity->fetch();

    ?>

    <div class="signup-form container">
        <form role="form" action="logic/editCityLogic.php" method="post">
            <h2>Edit</h2>
            <div class="form-group">
                <input value="<?= $city['cityId']; ?>" type="number" name="cityId"  class="form-control" placeholder="id" required>
                <input value="<?= $city['cityName']; ?>" type="text" name="cityName" class="form-control" placeholder="City" required>
            </div>
            <div class="form-group">
                <button type="submit" name="update" class="btn btn-dark btn-lg btn-block">Update</button>
            </div>
        </form>
    </div>

    <?php
}else{
    ?>
    <h1>You need to login</h1>
    <a href="index.php">here</a>
    <?php
}
?>
<?php
include('../scripts.php');
?>