<?php
	$day = rand(-1,20);
	switch ($day) {
		case '1':
		case '2':
		case '3':
		case '4':
		case '5':		
			echo "Это выходной день";
			break;
		case '6':
		case '7':
			echo "Это выходной день";
			break;

		default: 
			echo "Неизвестнйы день";
			break;
	}
  ?>