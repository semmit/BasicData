<?php
	include("config/koneksi.php");
	session_start();

	$id = $_POST['id'];
	$Nilai_ikan = $_POST['Nilai_ikan'];
	$Jenis_pancingan = $_POST['Jenis_pancingan'];
	$Nama_ikan = $_POST['Nama_ikan'];
	$Cuaca = $_POST['Cuaca'];

	$result = $conn->prepare("SELECT * FROM tb_ikan WHERE id= :i");
		$result = $conn->prepare("DELETE FROM tb_ikan (id,Nilai_ikan,Jenis_pancingan,Nama_ikan,Cuaca) VALUES (:i,:n1,:j,:n2,:c)");
		$result->bindParam(':i', $id);
		$result->bindParam(':n1', $Nilai_ikan);
		$result->bindParam(':j', $Jenis_pancingan);
		$result->bindParam(':n2', $Nama_ikan);
		$result->bindParam(':c', $Cuaca);
		$result->execute();
		header("location: /dataikan/Penghapusan-ikan.php");
	
?>