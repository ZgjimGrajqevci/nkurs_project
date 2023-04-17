<?php

    include_once 'includes/config.php';

    $sql = 'SELECT * FROM admins';
    $getUsers = $conn->prepare($sql);
    $getUsers->execute();
    $users = $getUsers->fetch();

    include('../header.php');

    if (!empty($_SESSION['username'])) {

        $adminId = $_GET['id'];
        $sql = "SELECT * from admins where adminId=$adminId";
        $getUser = $conn->prepare($sql);
        $getUser->execute();
        $user = $getUser->fetch();
 ?>

    <div class="signup-form container">
        <form role="form" action="logic/editAdminLogic.php" method="post">
            <h2>Edit</h2>
            <div class="form-group">
                <input value="<?= $user['adminId']; ?>" type="number" name="adminId"  class="form-control" placeholder="id" required>
                <input value="<?= $user['username']; ?>" type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" name="adminPassword" id="password" class="form-control" placeholder="Password" required>
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