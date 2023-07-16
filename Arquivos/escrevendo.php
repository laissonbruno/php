<?php 

// $arquivo = fopen('nomes.txt', 'w');

// $nome = 'Aquila';

// fwrite($arquivo, $nome);

// fclose($arquivo);

$arquivo = fopen('nomes.txt', 'a');

$nome = 'Aquila';

fwrite($arquivo, $nome);

fclose($arquivo);