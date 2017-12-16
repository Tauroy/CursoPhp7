<?php
	/*/////////
	  Seção 8
	///////////*/
	  //Definindo a configuração regional com setlocale()
	  /*setlocale(category, locale)
	  		category: LC_ALL --> constante.
	  		locale:     --> Fica o padrão, no linux esse padrão é escrito de uma maneira, no windows é de outra maneira, agora com o uso do UTF8(caractéries e etc..)
	  		é mais um padrão, o correto é *COLOCAR TODOS OS PADRÕES PARA QUE RODE EM TODAS AS PLATAFORMAS. (OS TRÊS PRINCIPAIS) -->
	  		padrão --> "pt_BR";
	  		padrão com o utf --> "pt_BR.utf-8";

	  		padrão do windows:
	  		portuguese
	  */

	  setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese"); //LC_ALL --> constante. 

	  //strftime();
	  echo ucwords(strftime("%A %B")); //%A --> DIA DA SEMANA  | %B --> MES | NO SITE DO PHP TEM TODOS OS DEFINIÇÕES


?>