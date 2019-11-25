<!DOCTYPE html>
<html>
<head>
	<title>Data Ikan</title>
	<style type="text/css">
		body{
			font-family: arial;
			font-size: 14px;
			background-image: url("img/background1.jpg");
			background-size: 100%;
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
			padding: 10px;
			border-bottom-right-radius: 10px;
			border-bottom-left-radius: 10px;
		}
		input{
			padding: 10px;
			border: 0;
		}
		#h2{
			font-size:8px;
		}
		.lg{
			width: 240px;
		}
		.btn{
			background-color: #336686;
			border-radius: 10px;
			color: #fff;
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
		DataBase
	</div>
			<div id="inputan">
				<form action="proses-pencarian-data-ikan.php" method="post">
					<p>Masukkan Nilai  (min 100)</p>
					<div style="margin-top: 10px;">
						<input type="number" name="Nilai_ikan" id="Nilai_ikan" placeholder="Nilai Ikan" class="lg">
					</div>
					<div style="margin-top: 10px;">
						<input type="submit" value="submit" name="submit" placeholder="submit" class="btn"/>
					</div>
				</form>	
			</div>
			<script type="text/javascript">
				function validasi(){
					
					var Nilai_ikan = document.getElementById("Nilai_ikan").value;
					
					if (Nilai_ikan!="") {
						return true;
					}else{
						alert('HARAP ISI SEMUA DATA DENGAN LENGKAP !');
						return false;
					}
				}
			</script>
	</body>
	</html>
				