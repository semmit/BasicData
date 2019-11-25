<?php
	require_once('koneksi.php');
		$action_ = $_REQUEST['action'];

			if($action == "show-all"){
				$stmt=$db->prepare('SELECT * from tb_ikan');
				$stmt->execute();
			}
			else{
				//else ambil data berdasarkan key id
				$stmt=$db->prepare('SELECT * from tb_ikan WHERE id=:i');
				$stmt->execute([
					':i'=>$action]);
			}
		?>

			<div class="row">
				<?php
					if($stmt->rowCount() > 0 ): ?>
					<?php 
						while($row=$stmt->fetch(PDO: :FETCH_ASSOC)): ?>
							<?php extract($row); ?>
							<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="bck.jpg" alt="...">
							<div class="caption">
								<h3><?php echo $Nama_ikan; ?></h3>
								<p> Nama Ikan Yang Di Dapat</p>
								<p><a href="#" class="btn btn-primary" role="button">ok</a>
									<a href="#" class="btn btn-primary" role="button">Detail</a>
								</p>
							</div>
						</div>
						<?php endwhile; ?>
					<?php else: ?>
						<!-- else, jika tidak data yang dipilih kosong -->
						<div class="col-sm-6 col-md-4">
							<center>
								<h1>
									Data Tidak Ada
								</h1>	
							</center>
						</div>
				<?php endif; ?>
			</div>
