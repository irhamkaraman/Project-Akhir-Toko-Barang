<?php
$currentUrl = "/praktikumpemweb/project_akhir";

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'toko_db';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
  die("Koneksi database gagal: " . mysqli_connect_error());
}

define('BASE_URL', 'http://localhost/praktikumpemweb/project_akhir');