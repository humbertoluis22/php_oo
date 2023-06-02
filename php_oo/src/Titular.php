<?php 

class Titular
{
    private $cpf;
    private $nome;

    public function __construct(Cpf $cpf, string $nome)
    {
        $this->cpf= $cpf;
        $this->validaNomeTitular($nome);
        $this->nome =$nome;
    }

    public function recuperaCpf()
    {
        return $this->cpf->recuperaCpf;
    }

    public function recuperaNome()
    {
        return $this->nome;
    }

    private function validaNomeTitular( string $nomeTitular)
    {
        if(strlen($nomeTitular) < 5){
            echo "nome precisa conter pelo menos 5 caracteres";
            exit();
        }
    }


}