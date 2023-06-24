<?php


$idade = 26;


// não reconhece variavel ou caractere especial
echo 'olá mundo! minha idade é '.$idade .' anos'; 

// reconhece variavel ou caractere especial
echo "olá mundo! minha idade é $idade anos";

// quebra linha
// "\n"
echo "olá mundo! minha idade é $idade anos\n";
echo "olá mundo! minha idade é $idade anos";


// quebra de linha para sistemas diferentes
echo "olá mundo!" .PHP_EOL;

// Exibir um caracter especial
echo "Eu tenho \"$idade\" anos";

echo PHP_EOL . PHP_EOL;
echo "Você só pode entrar, se tiver mais de 18 anos\n";

echo "Você tem $idade anos, pode entrar.";