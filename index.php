<?php
echo 'Olá mundo<br>';
echo 'Millena jesus';

print('<h1>escrevendo</h1>');

print_r('<h2>Escrevendo de novo</h2>');

$nome = 'Millena';
$idade = 22;
$altura = 1.65;
$fumante = false;

echo '<br>';
echo $nome . '<br>';
echo $idade .'<br>';
echo $altura . '<br>';
echo $fumante . '<br>';
echo 'Olá, ' .$nome . ' Você tem ' . $idade . ' anos';

echo '<hr>';
echo gettype($nome). '<br>' ;
echo gettype($idade). '<br>';
echo gettype($altura). '<br>';
echo gettype($fumante). '<br>';

?>