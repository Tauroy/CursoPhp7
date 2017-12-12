<?php
	/*///////////////////////////////////////////////////////
	 20.Estruturas Condicionais-If, ElseIf Else tempo: 10:55 
	/////////////////////////////////////////////////////////*/
	//Estrutura de controle de fluxo ou comado de decisão.

	 /*while --> significa 'faça enquanto', muito utilizado para pegar dados do banco de dados.
	   dowhile --> executa pelo menos uma vez, essa é a diferença entre eles.*/

	 	//do while
	   	$total = 150;
	   	$desconto = 0.9;

	   		do {
	   			$total *= $desconto;

	   		}while ($total>100);

	   		echo $total;



	   ?>