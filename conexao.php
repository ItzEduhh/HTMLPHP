<?php

class Conexao {

	private $host = 'sql213.infinityfree.com';
	private $dbname = 'if0_40124924_crud_teste';
	private $user = 'if0_40124924';
	private $pass = 'Isachanasd098';

	public function conectar() {
		try {

			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);

			return $conexao;


		} catch (PDOException $e) {
			echo '<p>'.$e->getMessage().'</p>';
		}
	}
}

?>