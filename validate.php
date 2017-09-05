<?php 
//panggil file koneksi.php agar bisa terhubung ke database
include 'koneksi.php';

//ambil username yang akan divalidasi. 
$uname = $_GET['username'];

//buat perintah sql untuk query data username yang diinput user
//peintah ini akan mengambil user_id dari tabel tb_validasi untuk data yang memiliki username yang sama dengan yang dikirimkan dari jQuery
$sql = "SELECT count(`user_id`) FROM tb_validasi WHERE `username` = ?";
$stmt = $dbCon->prepare($sql);
//tambahkan parameter $uname ke dalam statement. 
$stmt->execute(array($uname));

$number_of_rows = $stmt->fetchColumn();