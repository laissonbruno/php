<?php 

$arquivo = fopen('lista.txt', 'r');

// linha a linha
// while (!feof($arquivo)) {
//     $nome = fgets($arquivo);
// }

// ler o arquivo todo
$tamanhoArquivo = filesize('lista.txt');
$nomes = fread($arquivo, $tamanhoArquivo);

fclose($arquivo);

