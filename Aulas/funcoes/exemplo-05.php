<?php
	/*/////////////
		seção 7
	///////////////*/
	//funções
		//Parâmetros por Valor x por Referência
		$pessoa = array(
			'nome'=>'Yago',
			'idade' => 18 
		);


		foreach ($pessoa as $key => &$value){ /* function trocaValor(&$b){  --> quando se tem o & --> PASSAGEM DE PARÂMETRO POR REFERêNCIA*/
		
		 if(gettype($value) === 'integer') $value += 10;
		 if(gettype($value) === 'integer') echo ($value>=18)?"Informação: De maior" :"Informação: De menor";
		 
		 echo "<br>";
			echo "nomeCampo: ".$key;
			echo "<br>";
			echo "dadoCampo: ".$value;
			echo "<br>";
		}

		print_r($pessoa);


?>