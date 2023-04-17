<?php

    include 'includes/config.php';

    $sql = 'SELECT * FROM admins';
    $getUsers = $conn->prepare($sql);
    $getUsers->execute();
    $users = $getUsers->fetchAll();

	include 'header.php';

    if(!empty($_SESSION['username'])){

	    include 'navbar.php';

    ?>

        <div class="container">
            <div class="text-right">
                <a href="addAdmin.php"><button class="btn btn-dark btn-md mx-2">add account</button></a>
            </div>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $key => $value) { ?>
                        <tr>
                            <th scope="row"><?= $value['adminId']; ?></th>
                            <td><?= $value['username']; ?></td>
                            <td>
                                <a href="editAdmin.php?id=<?= $value['adminId']; ?>" class="btn btn-primary btn-md mx-2">Edit</a>
                                <a href="delete/deleteAdmin.php?id=<?= $value['adminId']; ?>" class="btn btn-danger btn-md mx-2">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>


            <?php }
            else {
                ?>
                <h1>You need to be logged in </h1>
                <a href="index.php">Log in</a>

            <?php } ?>

        </div>

<?php
    include 'scripts.php';
    include 'footer.php';
    ?>

