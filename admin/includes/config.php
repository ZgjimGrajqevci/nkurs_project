<?php

    session_start();

    $user="nkursco_nAdmin";
    $pass="daja.super.0";
    $server="localhost:3306";
    $dbname="nkursco_database";

    try {
        $conn =new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
    } catch (PDOException $e) {
        echo "error: " . $e->getMessage();
    }

 ?>