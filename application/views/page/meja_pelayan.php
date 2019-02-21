 <!DOCTYPE html>
<html>
<head>
	<title>Meja</title>
	<style type="text/css">
		table, tr, th{
			border: 1px solid black;
			border-collapse: collapse;
			padding: 5px 50px;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>No Meja</th>
			<th>Keterangan</th>
		</tr>
		<?php 
		$jmlmeja = $this->json_model->jmlmeja();
		foreach (json_decode($jmlmeja) as $no_meja) {	
		?>
		<tr>
			<th><?php echo $no_meja;?></th>
			<th>
				<?php
					if (isset($_SESSION[$no_meja])){
						echo "penuh";
					}else{
						?>
						<a href="menu/?nomeja=<?php echo $no_meja?>">Kosong</a>
						<?php
					}
				?>
			</th>
		</tr>
		<?php
		}
		?>
	</table>
	<a href="laporan">Laporan</a>
</body>
</html>