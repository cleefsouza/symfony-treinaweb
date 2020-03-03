<?php

/**
 * Criando composer project
 * Carregando autoload
 * Utilizando namespaces
 */

include __DIR__ . "/../vendor/autoload.php";

// use Treinaweb\Banco\Cliente;

$cliente = new Treinaweb\Banco\Cliente;
$cliente->nome = "Aryosvalldo Cleef";
$cliente->idade = 24;

$conta = new Treinaweb\Banco\ContaCorrente;
$conta->numero = "3277-8";
$conta->setCliente($cliente);

var_dump($conta);
