<?php 

class Conta
{
    private $titular;
    private $saldo;
    private static $numeroDeContas = 0;


    public function __construct(Titular $titular)
    {
        $this->titular= $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function  __destruct()
    {
        self::$numeroDeContas--;
    }


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

    public function recuperaNomeTitular()
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular():string
    {   
       return $this->titular->recuperaCpf();
    }



    public static function recuperaNumeroDeContas():int
    {
        return self::$numeroDeContas;
    } 


}

