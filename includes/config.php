<?php

$conn = new mysqli("localhost:3306","nkursco_nUser","lura.skiri.29","nkursco_database");
if ($conn->connect_error) {
    die("Connection Failed!".$conn->connect_error);
}

?>