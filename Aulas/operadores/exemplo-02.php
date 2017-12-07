<?php 
	/*//////////////////////////////////////////////////
	 17. Conhecendo os Operadores do PHP tempo: 27:14 
	//////////////////////////////////////////////////*/
	
	//operador de atribuição
		// ultilizando  o "+=" e o "-=", exemplo tipico para loja.
		$valorTotal = 0;
		$valorTotal += 100; // "+=" pega o valor da variável e soma mais um valor nela.
		$valorTotal += 55;
			echo "Valor total: ".$valorTotal."<br>";

		function desconto(){ // "-=" mesma lógica, faz a diminuição do valor
			global $valorTotal;
				$valorTotal -= 30;
					echo "Desconto de 30 no valor: ".$valorTotal."<br>";
		}
			echo desconto();

		function descontoPorPorcentagem(){ //"*=" por multiplicação, ".1" é 10%. 
			global $valorTotal;
				$valorTotal *= .1;
					echo "Desconto por porcentagem de 10%: ".$valorTotal;
		}
			echo descontoPorPorcentagem();
?>