<?php
	require ('../classes/Contas.php');


	class ContasTest extends PHPUnit_Framework_TestCase{

		public function testDepositarSuccess(){
			
			$conta = new Contas();
			$saldoAtual = $conta->getSaldo();
			$valorDeposito = 500;
			$valorAtualizado = $saldoAtual + $valorDeposito;

			$conta->depositar($valorDeposito);
			$saldoAposDeposito = $conta->getSaldo();

			$this->assertEquals($saldoAposDeposito, $valorAtualizado);
		}

		public function testSacarSuccess(){
			$conta = new Contas();
			$conta->depositar(500);
			$saldoAtual = $conta->getSaldo();
			$saque = 300;

			$retorno = $conta->sacar($saque);

			$this->assertTrue($retorno);
		}

		public function testSacarFail(){
			$conta = new Contas();
			$conta->depositar(500);
			$saldoAtual = $conta->getSaldo();
			$saque = 1000;

			$retorno = $conta->sacar($saque);

			$this->assertFalse($retorno);

		}


	}