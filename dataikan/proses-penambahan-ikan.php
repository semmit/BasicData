<?php
	include("config/koneksi.php");
	session_start();

	$id = $_POST['id'];
	$Nilai_ikan = $_POST['Nilai_ikan'];
	$Jenis_pancingan = $_POST['Jenis_pancingan'];
	$Nama_ikan = $_POST['Nama_ikan'];
	$Cuaca = $_POST['Cuaca'];
	$Hasil = $_POST['Hasil'];

	$result = $conn->prepare("SELECT * FROM tb_ikan WHERE id= :i");
	$result->bindParam(':i', $id);
	$result->execute();
	$rows = $result->fetch(PDO::FETCH_NUM);
	if ($rows > 0) {
		?><script type="text/javascript">alert("Id Sudah Digunakan")</script> <?php
	}
	else{
		$result = $conn->prepare("INSERT INTO tb_ikan (id,Nilai_ikan,Jenis_pancingan,Nama_ikan,Cuaca,Hasil) VALUES (:i,:n1,:j,:n2,:c,:h)");
		$result->bindParam(':i', $id);
		$result->bindParam(':n1', $Nilai_ikan);
		$result->bindParam(':j', $Jenis_pancingan);
		$result->bindParam(':n2', $Nama_ikan);
		$result->bindParam(':c', $Cuaca);
		$result->bindParam(':h', $Hasil);
		$result->execute();
		header("location: /dataikan/Penambahan-ikan.php");
	}
?>