<html>
<head>
	<title>
		Form Pilihan Data
	</title>
</head>
<body>
	<p>
		&nbsp;
	</p>
</body>
</html>

<script language="Javascript1.2">
	function pilih(id){
		location.replace("pilihan-data.php?id="+id);
	}
</script>

<?php
include "config/koneksi.php";
	
	if($_GET['']!==""){
		$id=$_GET['id'];

			$query=mysqli_query("SELECT * FROM tb_ikan WHERE id= :id");
			?>
				<tr>
					<td width="195" valign="top">
						<select Nilai_ikan="id" id="id" onchange="pilih(this.value)">
							<option value="0" selected="selected">Pilih Nilai 
							</option>
							<?php
							$query_limit=mysqli_query("SELECT * FROM tb_ikan");

							while ($row=mysqli_fetch_array($query_limit)) 
							{
								?><option value="<?php echo $row['id'];?>"<?php echo $row['Nilai_ikan'];
								?>
								</option><?php
							}
							?>
						</select>
					</td>
				</tr>

					<table border="1">
						<tr>
							<th>Id</th>
							<th>Nilai Ikan</th>
							<th>Jenis Pancingan</th>
							<th>Nama Ikan</th>
							<th>Cuaca</th>
						</tr>
						<?php
						while ($row=mysqli_fetch_array($query)) 
						{	
						?>
						<tr>
							<td>
								<?php echo $c=$c+1;?>	
							</td>
								<td>
									<?php echo $row['Nilai_ikan'];?>
								</td>
									<td>
										<?php echo $row['Jenis_pancingan'];?>
									</td>
										<td>
											<?php echo $row['Nama_ikan'];?>
										</td>
											<td>
												<?php echo $row['Cuaca'];?>
											</td>
						</tr>
						<?php
						}
						?></table><?php
					}
					?>