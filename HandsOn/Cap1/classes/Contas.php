<?php

	class Contas{
		private $saldo = 0;

		public function depositar($valor){
			$this->saldo +=$valor;
		}

		public function getSaldo(){

		return $this->saldo;
		}

		public function sacar($valor){
			if($this->saldo>=$valor){
				$this->saldo -=$valor;
				return true;
			}

			return false;
		}
	}

	

