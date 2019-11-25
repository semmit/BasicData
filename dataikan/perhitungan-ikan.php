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
		Perhitungan
	</div>
			<div id="inputan">
				<form action="proses-perhitungan-data-ikan.php" method="POST">
					<p>Perhitungan Nilai</p>
					<div style="margin-top: 10px;">
						<input type="number" name="NilaiIkan1" placeholder="Nilai Pancingan 100-1000" class="lg">
					</div>
					<div style="margin-top:10px;">
						<input type="number" name="NilaiIkan2" placeholder="Berat Umpan 1grams- 1kg" class="lg">
					</div>
					<div style="margin-top: 10px;">
						<input type="submit" value="submit" name="submit" class="btn"/>
       					 
					</div>
				</form>	
			</div>
			<script type="text/javascript">
				function validasi(){
					var Nilai_ikan = document.getElementById("Nilai_Ikan1, NilaiIkan2").value;
					
					if (Nilai_ikan1!="") {
						return true;
					}else{
						alert('HARAP ISI SEMUA DATA DENGAN LENGKAP !');
						return false;
					}
				}
			</script>
	</body>