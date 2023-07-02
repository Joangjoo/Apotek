<?php

include_once("../db/db.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "INSERT INTO pembeli (id, nama, email, password) VALUE (NULL,'$nama', '$email', '$password')";

$result = mysqli_query($conn, $sql);

header('Location: ../index.php');

?>