<?php
	/*//////////////////////////////////////////////////
	 17. Conhecendo os Operadores do PHP tempo: 27:14 
	//////////////////////////////////////////////////*/
	
	//operadores de comparação
	 	$a = 50.0;
	 	$b = 50;
	 	var_dump($a > $b);
	 	echo "<br>";
	 	var_dump($a < $b);
	 	echo "<br>";
	 	var_dump($a == $b); //" == " verifica se são iguais, para saber se até no tipo (identicos) é igual se ultiliza --> " === ".
	 	echo "<br>";
	 	var_dump($a === $b);
	 	//" === " é operador de igualdade de identidade.
	 	//" == " apenas igualdade de valor.

	 	//diferente
	 	echo "<br>";
	 	var_dump($a != $b);
		////diferente até no tipo de dado
	 	echo "<br>";
	 	var_dump($a !== $b);
?>