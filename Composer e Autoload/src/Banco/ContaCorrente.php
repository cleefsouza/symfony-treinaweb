<?php

namespace Treinaweb\Banco;

class ContaCorrente
{

	public $numero;
	private $cliente;

	public function setCliente(Cliente $cliente)
	{
		$this->cliente = $cliente;
	}

}