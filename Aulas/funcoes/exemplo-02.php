<?php
	/*/////////////
		seção 7
	///////////////*/
	//funções

		function ola($texto, $periodo = "Bom dia"){ //"$texto" parametros obrigatótios será sempre a esquerda, pois se não perde o sentido. 
			return "Olá $texto, $periodo!<br>";
		}

		echo ola("mundo");
		echo ola("");
		echo ola("Matheus","Boa noite");
		echo ola("Mundo","");
?>