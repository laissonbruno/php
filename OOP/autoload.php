<?php

spl_autoload_register(function(string $nomeClasse) {
    $caminhoClasse = str_replace('Banco', 'src', $nomeClasse);
    $caminhoClasse = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoClasse);
    $caminhoClasse .= '.php';

    if (file_exists($caminhoClasse)) {
        require_once $caminhoClasse;
    }
});