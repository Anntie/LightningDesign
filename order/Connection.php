<?php
require("config.php");
class Connection
{
	private $pdo;

	public function __construct() {
		try {
			$this->pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);
			$this->pdo->exec("SET GLOBAL time_zone = '" . DB_TIMEZONE . "'");
		} catch(PDOException $e) {
			throw '2';
		}
	}

	public function __destruct() {
		$this->pdo = null;
	}

	public function getConnection() {
		return $this->pdo;
	}
}
?>
