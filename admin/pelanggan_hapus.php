<?php
require_once __DIR__ . '/../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM pelanggan WHERE pelanggan_id = '$id'");
header("Location: pelanggan.php");
exit;
?>