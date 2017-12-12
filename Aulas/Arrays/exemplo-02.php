<?php
	/*////////////////
	 25.Arrays em PHP.
	//////////////////*/
	//Arrays.

	//Array bidimencional 
	$carros[0][0] = "GM";
	$carros[0][1] = "Cobalt";
	$carros[0][2] = "Onix";
	$carros[0][3] = "Camaro";

	$carros[1][0] = "Ford";
	$carros[1][1] = "Fiesta";
	$carros[1][2] = "Fusion";
	$carros[1][3] = "Eco Sport";

	echo $carros[0][3];

	echo end($carros[1]); // end(); puxa a ultima informação desse arrey $carros[1] --> linha da Ford, end --> traga o ultimo que vc tem dentro dessa possição. 
?>