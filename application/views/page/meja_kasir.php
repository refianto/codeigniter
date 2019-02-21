<!DOCTYPE html>
<html>
<head>
	<title>List Meja</title>
	<style type="text/css">
		table, tr, th{
			border: 1px solid black;
			border-collapse: collapse;
			padding: 5px 50px;
		}
	</style>
	<?php
		function ses_des($value)
		{
			unset($_SESSION[$value]);
		}
	?>
</head>
<body>
	<table>
		<tr>
			<th>No Meja</th>
			<th>Setatus</th>
			<th>Keterangan</th>
		</tr>
		<?php
			$jmlmeja = $this->json_model->jmlmeja();
			foreach ( json_decode($jmlmeja) as $no_meja) {
		?>
		<tr>
			<th><?php echo $no_meja?></th>
			<th>
				<?php
					if (isset($_SESSION[$no_meja])){
						echo "penuh";
					}else{
						echo "Kosong";
					}
				?>
			</th>
			<th>
				<?php
					if (isset($_SESSION[$no_meja])){
						?>
						<a href="unset/?sess=<?php echo $no_meja?>">Bayar</a>
						<?php
					}else{
						echo "-";
					}
				?>
			</th>
		</tr>
		<?php
			}
		?>
	</table>
</body>
</html>