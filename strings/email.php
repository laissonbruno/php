<?php

// $string = <<<FINAL
// Uma Linha
// Segunda Linha
// etc
// FINAL;

function geraEmail(): void {
    $conteudoEmail = <<<FINAL
        
    Olá, Pessoa!

    Estamos entrando em contato para 

    {motivo do contato}

    {assinatura}
    
    FINAL;

    echo $conteudoEmail;
}

geraEmail();