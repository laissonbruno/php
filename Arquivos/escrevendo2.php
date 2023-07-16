<?php 

$nome1 = 'Aquila';

file_put_contents('lista.txt', $nome1);


$nome2 = 'Aquila Silva';

file_put_contents('lista.txt', $nome2, FILE_APPEND);