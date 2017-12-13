<?php
//session_id('6624uijst2h3hhmem033nlclobarray'); // Recuperando o ID.
require_once("config.php");
session_regenerate_id(); // gera novamente uma id de sessão diferente.

echo session_id();

var_dump($_SESSION);
?>