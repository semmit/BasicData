<!DOCTYPE html>
<html>
<head>
	<title>Data Ikan</title>
	<style type="text/css">
		body{
			font-family: arial;
			font-size: 14px;
			background-image: url("img/background1.jpg");
			background-repeat: no-repeat, repeat;
			background-position: left;
		}
		#bacground{

		}

		#utama{
			width: 300px;
			margin: 0 auto;
			margin-top: 12%;
		}

		#judul{
			padding: 15px;
			text-align: center;
			color: #fff;
			font-size: 20px;
			background-color: #339966;
			border-top-right-radius: 10px;
			border-top-left-radius: 10px;
			border-bottom: 3px solid #336686;
		}

		#inputan{
			background-color: #ccc;
			padding: 20px;
			border-bottom-right-radius: 10px;
			border-bottom-left-radius: 10px;
		}
		input {
			padding: 10px;
			border: 0;
		}

		.lg{
			width: 240px;
		}

		.btn:hover{
			background-color: #336686;
			cursor: pointer;
		}
		
	</style>
</head>
<body>
	<div id="utama">
		<div id="judul">
		DATABASE GAME 
	</div>
			<div id="inputan">
				<div class="login">
					<div class="login-triangle"></div>

					<h2><center>FORM<br/>PENAMBAHAN  IKAN</center></h2>

				<form action="proses-penambahan-ikan.php" method="post" class="login-container">
					<center><div>
						<input type="Number" name="id" placeholder="id ikan 1~100">
					</div>
					<div style="margin-top: 10px;">
						<input type="Number" name="Nilai_ikan" placeholder="Nilai Ikan kelipatan 100">
					</div>
					<div style="margin-top: 10px;">
						<input type="Nama_ikan" name="Nama_ikan" placeholder="Nama ikan">
					</div>
					<div style="margin-top: 10px;">
						<label>Pilih Alat Pancingan :
						<select name="Jenis_pancingan" required="">
							<optgroup  label="Pancingan 1" >
							<option>Merk 1</option>
							<option>Merk 2</option>
							<option>Merk 3</option>
								<optgroup label="Pancingan 2">
								<option>Merk 4</option>
								<option>Merk 5</option>
								<option>Merk 6</option>
						</select>
						</label>
					</div>
					<div style="margin-top: 10px;">
						<label>Pilih Cuaca :
							<select name = "Cuaca" >
								<option>Pagi</option>
								<option>Siang</option>
								<option>Malam</option>
							</select>
						</label>
					</div>
					<div style="margin-top: 10px;">
						<label>Pilih Hasil :
							<select name = "Hasil">
								<option>Dapat</option>
								<option>Tidak Dapat</option>
							</select>
						</label>
					</div>
						<div style="margin-top: 10px;">
							<input type="submit" name="submit" value="submit" class="btn" />
						
						</div>
				</form>
			</div>
		<div style="margin-top: 10px;">
			<button><a href="index.php">Halaman Awal</a></button>
			<button><a href="semua-data.php">DATA</a></button>
			<button><a href="">Refresh</button>
		</div>
</body>
</html>