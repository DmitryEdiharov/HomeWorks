<?php  
	$arr;
	
	for ($i=0; $i < 10; $i++) { 
		$arr[] = rand(0,100);
	}
	$min = $arr[0];
	$max = $arr[0];
	for ($i=0; $i < count($arr); $i++) { 
		if ($arr[$i]<$min) {
			$min = $arr[$i];
		}
		if ($arr[$i]>$max) {
			$max = $arr[$i];
		}
	}
	echo $rez;
?>