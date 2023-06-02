<?php 

class Cpf 
{
    private string $numero;

    public function __construct(string $numero)
    {
      $this->numero = $numero;
    }

    public function recuperaNumero():string
    {
        return $this->numero;
    }

  

}
