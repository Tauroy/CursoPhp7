<?php 
	/*//////////////////////////////////////////////////
	 		    18. Strings em PHP tempo: 21:09
	//////////////////////////////////////////////////*/
	//strings

	 	//diferença de "" e ''
	 		/* "" --> aceota varial junto com o conteudo da strings. 
	 			'' --> fala que todo o conteúdo é string*/
	 		$nome = "yago tomaz";
	 			echo "Nome: $nome"; // tela: Nome: yago tomaz
	 			echo "<br>";
	 			echo 'Nome: $nome'; // tela: Nome: $nome
	 			echo "<br>";
	 		
	 	//strtoupper --> deixa todo o dado em maiúsculo.
	 		$nome = strtoupper($nome);
	 			echo "Nome: $nome";
	 			echo "<br>";
	 	
	 	//strtolower --> deixa todo o dado em minusculo.
	 		$nome = strtolower($nome);
	 			echo "Nome: $nome";
	 			echo "<br>";

	 	//ucwords --> deixa as primeira letras em maiúculo.
	 		$nome = ucwords($nome);
	 			echo "Nome: $nome";
	 			echo "<br>";

	 	//str_replace --> faz a subistuição de um determinado valor indicado.
	 		$nome = str_replace ("T","¨|¨",$nome);
	 			echo "Nome: $nome";
	 			echo "<br>";

	 	//ucfirst --> deixa só a primeira letra em maiúscula.
	 		$nome = str_replace ("¨|¨","t",$nome);
	 		$nome = ucfirst($nome);
	 			echo "Nome: $nome";
	 			echo "<br>";

?>