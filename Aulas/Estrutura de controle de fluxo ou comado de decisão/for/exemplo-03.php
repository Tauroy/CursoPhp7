<?php
	/*///////////////////////////////////////////////////////
	 20.Estruturas Condicionais-If, ElseIf Else tempo: 10:55 
	/////////////////////////////////////////////////////////*/
	//Estrutura de controle de fluxo ou comado de decisão.

	 /*For --> loop */
	 	//for : trabalhando com for
	 	echo "<select>";
	 		for ($i=date("Y"); $i >= date("Y")-10 ; $i--){
	 				echo '<option value="'.$i.'">'.$i.'</option>';
	 		}
	 	echo "</select>";
?>