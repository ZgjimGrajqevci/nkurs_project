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

        <div class="signup-form container">
            <form role="form" action="logic/addAdminLogic.php" method="post">
                <h2>Register</h2>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                </div>
                <div class="form-group">
                    <input type="password" id="registerPassword" class="form-control" name="adminPassword" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-dark btn-lg btn-block">Register Now</button>
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