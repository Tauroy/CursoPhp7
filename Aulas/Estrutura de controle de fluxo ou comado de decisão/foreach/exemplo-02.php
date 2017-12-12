<form>
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="ok">
</form>

	<?php
	/*///////////////////////////////////////////////////////
	 20.Estruturas Condicionais-If, ElseIf Else tempo: 10:55 
	/////////////////////////////////////////////////////////*/
	//Estrutura de controle de fluxo ou comado de decisão.

	 /*Foreach -->*/
	 if (isset($_GET)){

	 	 	foreach ($_GET as $key => $value){
	 
	 	 		echo "Nome do campo: " . $key . "<br>";
	 
	 	 		echo "Valor do campo: " . $value;
	 
	 	 		echo "<hr>";}
	 	}
	 ?>