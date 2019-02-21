<!DOCTYPE html>
<html>
<head>
	<title>Meja</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.7/angular.js"></script>
	<style type="text/css">
		table, tr, th{
			border: 1px solid black;
			border-collapse: collapse;
			padding: 5px 50px;
		}
	</style>
</head>
<body ng-app>
	<?php echo form_open('usr/menu_load') ?>
	<table>
		<tr>
			<th>Menu List</th>
			<th>Harga</th>
			<th>Jumlah</th>
		</tr>
	<?php $tb = $this->menu_model->menu();
	$nomeja = $_GET['nomeja'];
	?>
	<input type="hidden" name="nomeja" value="<?php echo $nomeja?>">
	<?php
	$i=0;
	foreach ($tb as $menu) {
	?>
		<tr>
			<th><input type="hidden" name="menu[]" value="<?php echo $menu["menu_list"];?>"><?php echo $menu["menu_list"];?></th>
			<th><input type="hidden" name="harga[]" value="<?php echo $menu["harga"];?>"><?php echo $menu["harga"];?></th>
			<th><input type="text" name="jumlah[]" ng-model="x<?php echo $i?>"></th>
		</tr>
	<?php
	$i++;
	}
	?>
	</table>
	<br>
	<span>Total : {{(14000*x0)+(3000*x1)}}</span><br><br>
	<input type="submit" name="submit" value="Pesan">
</body>
</html>