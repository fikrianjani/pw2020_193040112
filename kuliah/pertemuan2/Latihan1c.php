<?php 
	$a = "A";
	$b = "B";
	$c = "C";
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 </head>
 <body>
 	<style>
 		.container {
 			border: 1 px solid;
 			width: 300px;
 			height: 300px;
 		}
 		.box {
 			border: 1px solid;
 			width: 80px;
 			height: 80px;
 			margin: 5px 0 0 5px;
 			text-align: center;
 			float: left;
 		}
 		.clear {
 			clear: both;
 		}
 	</style>
 	<div class="container">
 		<div class="box"><?php echo $a; ?></div>
 		<div class="box"><?php echo $a; ?></div>
 		<div class="box"><?php echo $a; ?></div>
 		<div class="box"><?php echo $b; ?></div>
 		<div class="box"><?php echo $b; ?></div>
 		<div class="clear"></div>
 		<div class="box"><?php echo $c; ?></div>
 	</div>
 
 </body>
 </html>