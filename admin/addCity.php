<?php
    include 'includes/config.php';

    $sql = 'SELECT * FROM admins';
    $getUsers = $conn->prepare($sql);
    $getUsers->execute();
    $users = $getUsers->fetchAll();

    include 'header.php';

    if (!empty($_SESSION['username'])) {

        include 'navbar.php';

    ?>

        <div class="container">
            <form action="logic/addCityLogic.php" method="post">
                <h2>Add City</h2>
                <div class="form-group">
                    <input type="text" class="form-control" name="cityName" placeholder="City Name" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-dark btn-lg btn-block">Add City</button>
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