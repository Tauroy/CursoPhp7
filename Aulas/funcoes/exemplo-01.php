<?php
	/*/////////////
		seção 7
	///////////////*/
	//funções

$a = 11.00;
$b = 2;

function Soma()
{
    global $a, $b;

    $b = $a + $b;
    return "A soma é: ".$b;
}

echo Soma();
$soma = soma();
echo "<br>";
echo strlen($soma);
?>