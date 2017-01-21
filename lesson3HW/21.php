<?php  
	$some_string;
	for ($i=1; $i < 10; $i++) { 

		unset($some_string)
		for ($j=0; $j < $i; $j++) { 
			$some_string .="$i";
		}
		echo $some_string;
		echo </br>
	}
?>