<?php 
//panggil file koneksi.php agar bisa terhubung ke database
include 'koneksi.php';

//ambil email yang akan divalidasi. 
$email = $_GET['email'];

//buat perintah sql untuk query data email yang diinput user
//peintah ini akan mengambil user_id dari tabel tb_validasi untuk data yang memiliki email yang sama dengan yang dikirimkan dari jQuery
$sql = "SELECT count(`user_id`) FROM tb_validasi WHERE `email` = ?";
$stmt = $dbCon->prepare($sql);
//tambahkan parameter $email ke dalam statement. 
$stmt->execute(array($email));

$number_of_rows = $stmt->fetchColumn();

if($number_of_rows > 0)
	$result = false;
else
	$result = true;

header('Content-Type: application/json');
echo json_encode($result);