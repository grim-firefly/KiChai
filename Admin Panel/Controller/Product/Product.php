<?php

namespace kichaiAdmin\Product;

use PDO;
use PDOException;

class Product
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
	public function index()
	{
		$query = "SELECT * FROM $this->dbname.product";
		$queryP = $this->dbh->prepare($query);
		$flag = $queryP->execute();
		if ($flag) {
			$products = $queryP->fetchAll(PDO::FETCH_ASSOC);
			return $products;
		}
		return [];
	}
	public function getProduct($id){
		$query = "SELECT * FROM $this->dbname.product WHERE id=?";
		$queryP = $this->dbh->prepare($query);
		$flag = $queryP->execute([$id]);
		if ($flag) {
			$products = $queryP->fetchAll(PDO::FETCH_ASSOC);
			return $products;
		}
		return [];
	}
	public function delete($id)
	{
		$query = "DELETE FROM $this->dbname.product WHERE id=?";
		$queryP = $this->dbh->prepare($query);
		$flag = $queryP->execute([$id]);
		if ($flag) {
			return true;
		}
		return false;
	}


	public function update($id, $name)
	{
		$query = "UPDATE $this->dbname.product SET category_name=? WHERE id=?";
		$queryP = $this->dbh->prepare($query);
		$flag = $queryP->execute([$name, $id]);
		if ($flag) {
			return true;
		}
		return false;
	}
	public function create($name)
	{
		$query = "INSERT INTO $this->dbname.product (category_name) VALUES (?)";
		$queryP = $this->dbh->prepare($query);
		$flag = $queryP->execute([$name]);
		if ($flag) {
			return true;
		}
		return false;
	}
}
