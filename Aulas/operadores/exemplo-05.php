<?php 
	/*//////////////////////////////////////////////////
	 17. Conhecendo os Operadores do PHP tempo: 27:14 
	//////////////////////////////////////////////////*/
	//Dois tipos novos de operadores do php 7


	//space ship
	$a = 35;
	$b = 35;

		//var_dump($a<=>$b); // " <=> " space ship.

	// ?? Ignora o o valor nulo e passa para o próximo, evitando de mostrar o erro.
	$c = NULL;
	$d = NULL;
	$e = 10;
	echo $c ?? $d ?? $e;

?>