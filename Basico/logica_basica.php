<?php

$idade = 16;

echo "Você só pode entrar entrar se tiver mais do que 18 anos" . PHP_EOL;

// If = se // else = se não
if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar";
} else {
    echo "Você tem $idade anos. Você não pode entrar" . PHP_EOL;
    ;
}


// duas variaveis

$nome = "Laisson";
$idade2 = 26;
if ($idade2 >= 18 && $nome == "laisson") {
    echo "Você tem $idade anos, e seu nome é $nome. Pode entrar";
} else {
    echo "Você tem $idade anos e seu nome não é Laisson. Você não pode entrar" . PHP_EOL;
    ;
}



$idade3 = 19;
$numeroPessoa = 1;

echo "Você só pode entrar se tiver a partir de 18 anos ou a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade3 >= 18) {
    echo "Você tem $idade3 anos. Pode entrar Sozinho.";
} else if ($idade3 >= 16 && $numeroPessoa > 1) {
    echo "Você tem $idade anos, e está acompanhado, então pode entrar.";
} else {
    echo "Você só tem $idade3 anos. Você não pode entrar.";
}

echo PHP_EOL;