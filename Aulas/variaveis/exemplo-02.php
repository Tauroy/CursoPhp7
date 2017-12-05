<?php 
// trabalhando com unset(); e isset();
/* ultilizado para descrição e ignora comandos "/ * ... * /"    */

//unset();
/* ultilizado para apagar dados de variáveis */

//isset();
/* se existir */
/* muito ultilizado para vê se a variável foi definida ou não */

//exemplo-conteúdo-01:

	$nomeCompleto = "Yago vieira tomaz";
		
	/*  echo $nomeCompleto;
		echo "<br>";
		//unset($nomeCompleto); --> unset(); apaga os dados da variável
		echo $nomeCompleto;  */

		if (isset($nomeCompleto)){  // --> isset(); se existir
			echo $nomeCompleto;
			echo "<br>";
		}

		//exit; // aonde o php irá parar.

// Concatenação --> significa juntar os conteudos .. Exemplo:
	$nome = "Yago";
	$sobrenome= "Vieira Tomaz";

	echo $nome. " " .$sobrenome ;

?>