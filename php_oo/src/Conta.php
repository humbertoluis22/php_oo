<?php 

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;


    public function saca(float $valorASacar){
        if($valorASacar > $this->saldo){
            echo "saldo insuficiente".PHP_EOL;
        }else{
            $this->saldo -= $valorASacar;
        }

    }


    public function deposita(float $valorADepositar):void
    {
        if($valorADepositar < 0){
            echo "valor insuficiente para deposito!".PHP_EOL;
            return;
        }
            $this->saldo += $valorADepositar;
        
    }

    public function transfere(float $valorAtransferir , Conta $contaDestino):void
    {
        if($valorAtransferir > $this-> saldo){
            echo "valor indisponivel";
        }else{
            $this->sacar($valorAtransferir);
            $contaDestino ->depositar($valorAtransferir);
        }

    }


    public function recuperaSaldo(){
        return $this-> saldo;
    }

    public function defineCpfTitular(string $cpf)
    {
        $cpfValido = preg_match
        (
            '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$/',
            $cpf
        );
        if($cpfValido){
        return $this->cpfTitular = $cpf;
        }else{
            echo "cpf invalido, verifique as informações novamente".PHP_EOL;
        }
    }

    public function recuperaCpfTitular():string
    {
        if($this->defineCpfTitular($this->recuperaCpfTitular()) == null){
            echo "cpf invalido".PHP_EOL;
        }
       return $this->cpfTitular;
    }

    public function defineNomeTitular(string $nomeTitular):string
    {
        return $this->nomeTitular = $nomeTitular;
    }

    public function recuperaNomeTitular(){
        return $this ->nomeTitular;
    }


}

