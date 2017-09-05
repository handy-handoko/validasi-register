<?php 
//panggil file koneksi.php agar bisa terhubung ke database
include 'koneksi.php';

//ambil username yang akan divalidasi. 
$uname = $_GET['username'];

//buat perintah sql untuk query data username yang diinput user
$sql = "SELECT `user_id` FROM tb_validasi WHERE `username` = ?";
$stmt = $dbCon->prepare($sql);
//tambahkan parameter $uname ke dalam statement. 
$stmt->execute(array($uname));