<?php
namespace Banco\servicos;

use Banco\Modelo\Autenticavel;

class Autenticador { 
    public function tentarLogin(Autenticavel $autenticavel, string $senha) : void {
        if ($autenticavel->PodeAutenticar($senha)) {
            echo 'ok. Usuário logado no sistema';
        } else {
            echo 'Senha incorreta';
        }
    }
}
