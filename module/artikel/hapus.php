<?php
// memanggil koneksi database
include_once("config.php");

// mengambil nilai id dari GET
$id = $_GET['id'];

// menghapus data di database sesuai id
$result = mysqli_query($mysqli, "DELETE FROM pengguna WHERE id= '$id'");

// redirect ke index
header("Location:index.php");
?>