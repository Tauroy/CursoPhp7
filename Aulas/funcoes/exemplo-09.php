<?php
	/*/////////////
		seção 7
	///////////////*/
	//funções
		//Funções anônima --> é uma função que não tem nome ou return.
			/* Vai passar uma função com algum parâmetro function anônima, vai atribuir alguma função a variável "FUNCTION ANÔNIMA", não tem nome na function, não tem return*/
			
			function test($callback){
				
				//Processo lento

				$callback();

			}

			test(function(){ 
				echo "Terminou!"; 
			});
		?>