<?php
	/*///////////////////////////////////////////////////////
	 20.Estruturas Condicionais-If, ElseIf Else tempo: 10:55 
	/////////////////////////////////////////////////////////*/
	//Estrutura de controle de fluxo ou comado de decisão.

	 /*while --> significa 'faça enquanto', muito utilizado para pegar dados do banco de dados.
	   dowhile --> executa pelo menos uma vez, essa é a diferença entre eles.*/

	 	//while
	   	$condicao = true;
	   		while($condicao){
	   			// rand(); --> random .. randomicamente.. função do php;
	   			$numero = rand(1,10);
	   			if($numero === 3){
	   				echo "TRÊS!!!";
	   				$condicao = false;
	   			}

	   			echo " " .$numero. " ";
	   		}

	   ?>