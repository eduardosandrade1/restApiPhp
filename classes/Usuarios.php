<?php

	class Usuarios extends Conexao
	{
		public function mostrarTodos()
		{
			try {
				$sql = "SELECT * FROM usuarios ORDER BY id ASC";
				$sql = $this->con->prepare($sql);
				$sql->execute();

				$resultados = array();

				while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
					$resultados[] = $row;
				}

				if (!$resultados) {
					$resultados = [];
				}	
			} catch (\Throwable $e) {
				return $e;
			}

			
			return $resultados;
		}

		/**
		 * Método que faz o login do cliente
		 *
		 * @param string $login
		 * @param string $senha
		 * @return array
		 */
		public function login($login, $senha)
		{
			try {
				$sql = "SELECT * FROM usuarios WHERE login = '".$login."' AND senha = md5(".$senha.")" ;
				$sql = $this->con->prepare($sql);
				$sql->execute();

				$resultados = array();

				while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
					$resultados[] = $row;
				}

				if (!$resultados) {
					$resultados = [];
				}
			} catch (\Throwable $th) {
				return $th;
			}

			return $resultados;
		}

	}