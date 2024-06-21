<?php

namespace src\Core;

use PDO;

class Connection {

	protected static $instance = null;
	private $connection = null;
	private static $dsn = 'mysql:host=mysql;dbname=bitrix';
	private static $username = 'bitrix';
	private static $password = 'password';

	private function __construct() {
		$this->connection = new PDO(self::$dsn, self::$username, self::$password);

	}

	protected function __clone() {}

	public static function getInstance() : Connection
	{
		if (self::$instance === null) {
			self::$instance = new static();
		}
		return self::$instance;
	}

	public static function connection(): \PDO
	{
		return self::getInstance()->connection;
	}

	public static function prepare($statement): \PDOStatement
	{
		return static::connection()->prepare($statement);
	}
}