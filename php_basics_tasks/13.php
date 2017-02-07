<?php
	$s = rand(1,1000);
	$t = rand(10,1000);

	$speed_kmph = (s/t)*1000/3600;
	$speed_mps = s/t;

	echo "Скорость км/час: "+$speed_kmph;
	echo "Скорость м/с: "+ $speed_mps;
  ?>