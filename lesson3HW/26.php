<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	$row = 5;
	$col = 5;
	$colors = array('red','yellow','blue','gray','maroon','brown','green');
	
	echo "<table>";
	for ($i=0; $i < row; $i++) { 
		echo '<tr>';
		for ($j=0; $j < col; $j++) { 
			echo "<td style='background-color:".rand(0,count($colors))."'>".rand(0,1000)."</td>";
		}
		echo '</tr>';
	}
	echo "</table>";
 ?>
</body>
</html>

