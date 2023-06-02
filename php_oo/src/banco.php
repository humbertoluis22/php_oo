<?php

require_once 'C:\Users\Humberto\Desktop\php\php_oo\php_oo\src\Conta.php';
require_once 'C:\Users\Humberto\Desktop\php\php_oo\php_oo\src\Titular.php';
require_once 'C:\Users\Humberto\Desktop\php\php_oo\php_oo\src\Cpf.php';


$primeiraConta = new Conta(new Cpf('111.111.111-22'),'humberto');
$primeiraConta ->deposita(500);
$primeiraConta -> saca(300);

echo $primeiraConta -> recuperaNomeTitular().PHP_EOL;
echo $primeiraConta -> recuperaCpfTitular().PHP_EOL;
echo $primeiraConta -> recuperaSaldo().PHP_EOL;

$segundaConta = new Conta(new Cpf('333.333.333-33'),'guilherme');
var_dump($segundaConta);

echo Conta::recuperaNumeroDeContas();