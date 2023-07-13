<?php 

namespace Banco\Modelo\Funcionario;
use Banco\Modelo\Pessoa;
use Banco\Modelo\CPF;

abstract class Funcionario extends Pessoa {
    
    private $salario;

    public function __construct(string $nome, CPF $cpf, float $salario) {
        parent::__construct($nome, $cpf);        
        $this->salario = $salario;
    }

    public function alterarNome(string $nome): void {
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
    }

    public function receberAumento(float $valorAumento): void {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;
    }

    public function recuperarSalario(): float {
        return $this ->salario;
    }

    abstract public function calcularBonificacao() : float;

}
