<?php 


namespace Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\Autenticavel;


class Gerente extends Funcionario implements Autenticavel
{
    public function calcularBonificacao():float
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar(string $senha):bool
    {
        return $senha === '4321';
    }
}