<?php

namespace kichaiUser\Category;

use PDO;
use PDOException;

class Category
{
	private $host = 'localhost';
	private $dbname = 'kichai';
	private $user = 'root';
	private $password = '123';
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
		$query = "SELECT * FROM $this->dbname.category";
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
		$query = "DELETE FROM $this->dbname.category WHERE id=?";
		$ctgquery = $this->dbh->prepare($query);
		$flag = $ctgquery->execute([$id]);
		if ($flag) {
			return true;
		}
		return false;
	}
	public function update($id, $name)
	{
		$query = "UPDATE $this->dbname.category SET category_name=? WHERE id=?";
		$ctgquery = $this->dbh->prepare($query);
		$flag = $ctgquery->execute([$name, $id]);
		if ($flag) {
			return true;
		}
		return false;
	}
	public function create($name)
	{
		$query = "INSERT INTO $this->dbname.category (category_name) VALUES (?)";
		$ctgquery = $this->dbh->prepare($query);
		$flag = $ctgquery->execute([$name]);
		if ($flag) {
			return true;
		}
		return false;
	}

	public function getCategoryName($id)
	{
		$query = "SELECT category_name from $this->dbname.category where id = ?";
		$ctgquery = $this->dbh->prepare($query);
		$flag = $ctgquery->execute([$id]);
		return $ctgquery->fetch(PDO::FETCH_ASSOC);
	}
}