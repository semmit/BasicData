	<body onload="window.print()">
				<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dataikan";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die('connection Failed : '. mysqli_connect_error());
}

$sql = 'SELECT id, Nilai_ikan, Jenis_pancingan, Nama_ikan, Cuaca, Hasil FROM tb_ikan';

$query= mysqli_query($conn, $sql);

	if (!$query){
		die('SQL Error:'.mysqli_error($conn));
	}
	echo "<table>
						<center><h2>Semua DATA Ikan <br/>
						Nama / jenis ikan di Game Memancing </h2></center><hr/></table>";

	echo "<table width='100%'  border='1' cellspacing='0' cellpadding='3'>
         			 <tr style='text-transform:uppercase; background:#e3e3e3; color:#000;'>
			
					<tr>
								<th>ID</th>
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
?>

