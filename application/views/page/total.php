<?php
	$user = $_SESSION['user'];
	$tb = $this->usr_model->laporan($user);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Total</title>
	<style type="text/css">
		table,tr,td,th{
			border: 1px solid black;
			border-collapse: collapse;
			padding: 10px 50px;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>Peasanan</th>
			<th>Total</th>
		</tr>
		<tr>
			<?php
				foreach ($tb as $row) {
					?>
			<td><?php echo $row["data"]?></td>
			<td><?php echo $row["total"]?></td>
					<?php
				}
			?>
		</tr>
	</table>
</body>
</html>