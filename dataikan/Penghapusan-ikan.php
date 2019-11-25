<!DOCTYPE html>
<html>
<head>
	<title>Data Ikan</title>
	<style type="text/css">
		body{
			font-family: arial;
			font-size: 14px;
			background-color: #222;
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

					<h2><center>FORM<br/>PENGHAPUSAN DATA</center></h2>

				<form action="delete-data-ikan.php" method="post" class="login-container">
					<center><div>
						<input type="Number" name="id" placeholder="id">
					</div>
					<div style="margin-top: 10px;">
						<input type="Number" name="Nilai_ikan" placeholder="Nilai_ikan">
					</div>
					<div style="margin-top: 10px;">
						<input type="Jenis_pancingan" name="Jenis_pancingan" placeholder="Jenis_pancingann">
					</div>
					<div style="margin-top: 10px;">
						<input type="Nama_ikan" name="Nama_ikan" placeholder="Nama_ikan">
					</div>
					<div style="margin-top: 10px;">
						<input type="Cuaca" name="Cuaca" placeholder="Cuaca">
					</div>
					<div style="margin-top: 10px;">
						<input type="submit" name="submit" value="submit" class="btn" />
					</div></center>
				</form>
			</div>
			<h2> <a href="semua-data.php">DATA IKAN</a></h2>
</body>
</html>