<?php
namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    public function calcularBonificacao():float
    {
        return $this-> recuperaSalario();
    }

    public function podeAutenticar(string $senha):bool
    {
        return $senha === '1234';
    }
}