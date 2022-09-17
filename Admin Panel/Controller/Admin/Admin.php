<?php

namespace kichaiAdmin\Admin;

use PDO;
use PDOException;

class Admin
{
	private $host = 'localhost';
	private $dbname = 'kichai';
	private $user = 'root';
	private $password = '';
	public  $dbh = null;
	public function __construct()
	{
		try {

			$this->dbh = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
		} catch (PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		}
	}
	// reurn all user
	public function logIn($username, $password)
	{
		$query = "SELECT * FROM $this->dbname.admin WHERE (username = :username OR email= :username ) AND password = :pass ";
		$queryP = $this->dbh->prepare($query);
		$flag = $queryP->execute(['username' => $username, 'pass' => $password]);

		if ($flag) {
			$data = $queryP->rowCount();
			if ($data>0) {
				return true;
			}
			return false;
		}
		return false;
	}
}
