<?php

include_once('../includes/config.php');

if (isset($_POST['login'])) {

	$username = $_POST['username'];
	$adminPassword = $_POST['adminPassword'];

	$sql = "SELECT adminId, username, adminPassword FROM admins where username=:username";

	$insertSql = $conn->prepare($sql);
	$insertSql->bindParam(':username', $username);
	$insertSql->execute();

	$current_user = $insertSql->fetch();
	$hash_password = $current_user['adminPassword'];

	if (password_verify( $adminPassword, $hash_password)) {
		$_SESSION['username'] = $username;
		header('Location:../index.php');
	}
	else{
		$_SESSION['statusError'] = "Couldn't login, try again";
		header('Location:../index.php');
	}
  }
?>


