<?php 

namespace Alura\Banco\Modelo;


final class Cpf 
{
    private  $numero;

    public function __construct(string $numero)
    {
      $this->numero = $numero;
    }

    public function recuperaNumero():string
    {
        return $this->numero;
    }

  

}
