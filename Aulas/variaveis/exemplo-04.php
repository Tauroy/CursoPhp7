<?php 
/* Muito ultil para log de acsso, saber as informações tipo o ip, aonde acesso.. 
   para ter um controle e segurança em cima do usuário */

//converção de variavel
   /* $nome = (int)$_GET["a"]; // (int) converção para inteiro
      var_dump($nome); */

//Variável global, ultilizada para pegar o ip do usuário.
      $ip = $_SERVER ["REMOTE_ADDR"]; 
      echo "IP: " .$ip;
      echo "<br>";

//Variável global, pegando o caminho de acesso.
      $diretorio = $_SERVER ["SCRIPT_NAME"];
      echo "Diretorio: " .$diretorio;
?>