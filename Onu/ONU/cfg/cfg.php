<?php

class Banco {

	public function abreConexao()  {
		$host = "localhost";
		$db = "BD_CrtL_SPM";
		$user = "root";
		$pass = "";

		$pdo = null;

		try {
			$pdo = new PDO("mysql:host=".$host.";dbname=".$db."",$user,$pass);
		} catch (Exception $e) {
			echo "Erro ao conectar!" . $e->getMessage();
		}

		return $pdo;
	}
}