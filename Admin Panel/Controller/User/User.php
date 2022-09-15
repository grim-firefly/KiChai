<?php

namespace kichaiAdmin\User;

use PDO;
use PDOException;

class User
{
	private $host = 'localhost';
	private $dbname = 'kichai';
	private $user = 'root';
	private $password = 'root';
	public  $dbh = null;
	public function __construct()
	{
		try {

			$this->dbh = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
		} catch (PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		}
	}
	public function index()
	{
		$query = "SELECT id,username,email,register_at FROM $this->dbname.users";
		$ctgquery = $this->dbh->prepare($query);
		$flag = $ctgquery->execute();
		if ($flag) {
			$ctgdata = $ctgquery->fetchAll(PDO::FETCH_ASSOC);
			return $ctgdata;
		}
		return [];
	}

	public function delete($id)
	{
		$query = "DELETE FROM $this->dbname.users WHERE id=?";
		$ctgquery = $this->dbh->prepare($query);
		$flag = $ctgquery->execute([$id]);
		if ($flag) {
			return true;
		}
		return false;
	}
	public function update($id, $name)
	{
		$query = "UPDATE $this->dbname.users SET users_name=? WHERE id=?";
		$ctgquery = $this->dbh->prepare($query);
		$flag = $ctgquery->execute([$name, $id]);
		if ($flag) {
			return true;
		}
		return false;
	}
	public function create($name)
	{
		$query = "INSERT INTO $this->dbname.users (users_name) VALUES (?)";
		$ctgquery = $this->dbh->prepare($query);
		$flag = $ctgquery->execute([$name]);
		if ($flag) {
			return true;
		}
		return false;
	}
}
