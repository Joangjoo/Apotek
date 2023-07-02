<?php

include_once("../db/db.php");

// Fetch all users data from database
$email = $_POST['email'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM pembeli WHERE email = '$email'");

$user_data = mysqli_fetch_array($result);

session_start();


if ($email == $user_data['email'] and $password == $user_data['password']) {
	$_SESSION['status_login'] = TRUE;
	$_SESSION['id_pembeli'] = $user_data['id'];
	header('Location:../apotek.php');
} else {
	$_SESSION['message'] = '<h3>Anda Gagal Login</h3>';
	header('Location: ../index.php');
}

?>