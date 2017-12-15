<?php
	/*/////////////
		seção 7
	///////////////*/
	//funções
		//Parâmetros por Valor x por Referência

		/* function trocaValor(&$b){  --> quando se tem o & --> PASSAGEM DE PARÂMETRO POR REFERêNCIA*/

		$a = 10;

		function trocaValor(&$b){
			$b += 50;
			return $b;
		}

		echo trocaValor($a); //¨¨
		echo "<br>";
		echo trocaValor($a); //¨¨
		echo "<br>";
		echo $a;
?>