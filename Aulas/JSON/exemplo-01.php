	<?php
	/*////////////////
	 	  26.Json.
	//////////////////*/
	//Json.
	/*Json --> é ultilizado práticamente em qualquer linguagem, json: javascript object notation --> faz a comunicação de sistemas, exemplo de PHP para Java ..*/

	$pessoas = array();
	 //essa função criar um item dentro do arrey, depois de já estar criado.
	 array_push($pessoas, array(
	 'nome'=>'Yago',
	 'idade'=>'18'
	)); 

	 array_push($pessoas, array(
	 'nome'=>'Matheus',
	 'idade'=>'17'
	));

	//JSON
	 echo json_encode($pessoas); // Gerando JSON
	?>