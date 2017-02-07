<?php 
	$foo = 'bar';
	$bar = 10;

	$bar = $$foo;

	$bar = 10;

	echo $foo;
?>
