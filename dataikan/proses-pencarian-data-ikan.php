<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dataikan";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die('connection Failed : '. mysqli_connect_error());
}
if(isset($_POST['submit'])){

	$Nilai_ikan = $_POST['Nilai_ikan'];


	$submit = "SELECT * FROM tb_ikan WHERE Nilai_ikan='$Nilai_ikan' ";
$query= mysqli_query($conn, $submit);

	if (!$query){
		die('SQL Error:'.mysqli_error($conn));
	}
				echo "<table>
							<center><h2>Data yang Di Pilih <br/> Berdasarkan Nilai Ikan yang di Inputkan </h2></center>
						</table>";
				echo "<table width='100%' border='1' cellspacing='0' cellpadding='3'>
						<tr style = 'text-transform:uppercase; background:#e3e3e3; color:#000;'>
						<tr>
							<th>Id</th>
							<th>Nilai Ikan</th>
							<th>Jenis Pancingan</th>
							<th>Cuaca</th>
							<th>Nama Ikan</th>
							<th>Hasil</th>
						</tr>
				<tbody>";

				while ($row = mysqli_fetch_array($query))
				{
				echo '<tr>
						<td>'.$row['id'].'</td> 
						<td>'.$row['Nilai_ikan'].'</td>
						<td>'.$row['Jenis_pancingan'].'</td>
						<td>'.$row['Cuaca'].'</td>
						<td>'.$row['Nama_ikan'].'</td>
						<td  class="right">'.$row['Hasil'].'</td>
						</tr>';
				}						
				echo "
				</tbody>
				</table>";


				mysqli_free_result($query);

				mysqli_close($conn);
			}
		
	
?>
 <center>
 	<button> <a href="pencarian.php">Kembali</a></button> 
 		 <button> <a href="semua-data.php">Semua Data</a></button>
 	 		<button> <a href="Penambahan-ikan.php">Tambah Data</a></button>
 	 		<button> <a href="Index.php">Halaman Utama</a></button>
 </center>
