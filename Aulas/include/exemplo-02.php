<?php 
	/*//////////////////////////////////////////////////
	Incluindo Arquivos Com Include e Require tempo: 20:00 
	//////////////////////////////////////////////////*/
	//include e require


		//include "exemplo-01.php"; // include --> trás as informações, mesmo se não estiver funcionando.
		require_once "exemplo-01.php"; // require --> trás as informações, mas é obrigatório que o código estejá funcionando ou que o local exista, caso ao contrário dá um erro fatal, e com isso para o código. Por outrás palavras, obriga a inclusão do arquivo, que exista e funcione.
		/*require_once e include_once, _once, é para que não aja laço em chamar o mesmo arquivo duas vezes, chamando um e outro, um deles tendo o mesmo, exemplo, o 0 chama o 1 e 2, mas o dois já chama o 1. com isso evita erro.*/

			$resultado = somar(10, 30);
			echo "resultado: $resultado";


?>