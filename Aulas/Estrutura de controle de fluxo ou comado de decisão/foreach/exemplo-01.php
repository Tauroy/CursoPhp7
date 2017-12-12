<?php
	/*///////////////////////////////////////////////////////
	 20.Estruturas Condicionais-If, ElseIf Else tempo: 10:55 
	/////////////////////////////////////////////////////////*/
	//Estrutura de controle de fluxo ou comado de decisão.

	 /*Foreach --> 'foreach' --> 'para cada' .. para cada item 
	 				que exista "não se sabe quantos.." execute ..
					foreach ($var as $key => $value){} --> "$var" quem é que eu devo pecorrer? $meses. Para cada item que encontra ($key => varlue) o foreach vai criar uma variável para esse item que ele encontrou.
	 				*/
				
	  //foreach : ;
	 	$meses = array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");

	 	foreach ($meses as $index => $mes){ 
	 		echo "Indece: ".$index."<br>";
	 		echo "O mes é: ".$mes."<br>";
	 	}
?>