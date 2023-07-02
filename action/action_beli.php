<?php

include_once("../db/db.php");

$id_obat = $_POST['id_obat'];
$id_pembeli = $_POST['id_pembeli'];
$tanggal = date("Y-m-d");
$jumlah = $_POST['jumlah'];

$sql = "INSERT INTO transaksi (id, id_obat, id_pembeli, tanggal, jumlah) VALUE (NULL,'$id_obat', '$id_pembeli', '$tanggal', '$jumlah')";

$result = mysqli_query($conn, $sql);

header('Location: ../apotek.php');

?>