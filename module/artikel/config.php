<?php

$config['host'] = 'localhost';
$config['username'] = 'root';
$config['password'] = '';
$config['db_name'] = 'latihan_db';

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>