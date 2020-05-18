<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	$komputer = array("Motherboard", //0
	"Processor", //1
	"Hard Disk", //2
	"PC Cooler", //3
	"VGA Card", //4
	"SSD" //5
);
	 ?>
	<ol>
		<?php 
		for ($i = 0;$i < count($komputer); $i++) {
			echo "<li>$komputer[$i]</li>";
		} ?>
	</ol>
	<hr>



</body>
</html>