<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
</head>
<body>
	<table border="1" cellpadding="3" cellspacing="0">
		<tr>
			<th>Kolom 1</th>
			<th>Kolom 2</th>
			<th>Kolom 3</th>
			<th>Kolom 4</th>
			<th>Kolom 5</th>
		</tr>
<?php 
	$a = 1;
	while ($a <= 5) {
		echo "<tr>";
		for ($b = 1; $b <= 5; $b++){
			echo "<td> Baris $a, Kolom $b </td>";
		}
		$a++;
	}
 ?>
	</table>

</body>
</html>