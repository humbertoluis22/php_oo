<?php

require_once '/home/oem/Desktop/php_oo/src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta ->deposita(500);
$primeiraConta -> defineCpfTitular('503.131.898-8');
$primeiraConta -> defineNomeTitular('Humberto luis');
$primeiraConta -> saca(300);

echo $primeiraConta -> recuperaCpfTitular().PHP_EOL;
echo $primeiraConta -> recuperaNomeTitular().PHP_EOL;
echo $primeiraConta -> recuperaSaldo().PHP_EOL;