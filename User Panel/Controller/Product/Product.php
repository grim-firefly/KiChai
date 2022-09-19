<?php

namespace kichaiUser\Product;

use PDO;
use PDOException;

class Product
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
		$query = "SELECT * FROM $this->dbname.product";
		$queryP = $this->dbh->prepare($query);
		$flag = $queryP->execute();
		if ($flag) {
			$products = $queryP->fetchAll(PDO::FETCH_ASSOC);
			return $products;
		}
		return [];
	}
	public function getProduct($id)
	{
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
	public function fileValidate($fileName)
	{

		if (empty($fileName)) {
			return false;
		}
		$file_ext = strtolower(pathinfo($fileName)['extension']);
		$extensions = array("jpeg", "jpg", "png", "gif");
		if (in_array($file_ext, $extensions) === false) {
			return false;
		}

		return true;
	}
	public function productImgUpload($fileName, $fileTmp)
	{
		if ($this->fileValidate($fileName)) {
			move_uploaded_file($fileTmp, "../../../uploads/products/" . $fileName);
			return true;
		}
		return false;
	}
	public function update($productInfo)
	{
		$id = $productInfo['id'];
		$getThisProduct = $this->getProduct($id);
		$fileName = $getThisProduct[0]['product_img'];
		if (isset($productInfo['fileName'])) {
			$fileName = $productInfo['fileName'];
		}
		$query = "UPDATE $this->dbname.product SET title=? ,category_id=?,price=?,quantity=?,description=?,product_img=? WHERE id=?";
		$queryP = $this->dbh->prepare($query);
		$flag = $queryP->execute([$productInfo['Product-title'], $productInfo['category_id'], $productInfo['price'], $productInfo['qty'], $productInfo['product-description'], $fileName, $id]);
		if ($flag) {
			return true;
		}
		return false;
	}
	public function create($productInfo)
	{
		$fileName = '';
		if (isset($productInfo['fileName'])) {
			$fileName = $productInfo['fileName'];
		}
		$query = "INSERT INTO $this->dbname.product(title,category_id,price,quantity,description,product_img) values(?,?,?,?,?,?)";
		$queryP = $this->dbh->prepare($query);
		$flag = $queryP->execute([$productInfo['Product-title'], $productInfo['category_id'], $productInfo['price'], $productInfo['qty'], $productInfo['product-description'], $fileName]);
		if ($flag) {
			return true;
		}
		return false;
	}

	public function addtocart($info)
	{

		try {
			// 	echo"<pre>";
			// 	print_r ($info['item_name']);

			$statement = $this->dbh->prepare("INSERT INTO cart(ItemName, Price) VALUES(:ItemName, :Price)");
			$statement->execute(
				[
					'ItemName' => $info['item_name'],
					'Price' => $info['price']

				]
			);

			session_start();
			$_SESSION['toast'] = 'Added to Cart Successfully';
		} catch (PDOException $e) {
			echo 'Error: ' . $e->getMessage();
			die();
		}
	}

	public function CountCartItem()
	{
		$query = "SELECT COUNT(id) FROM $this->dbname.cart";
		$countquery = $this->dbh->prepare($query);
		$flag = $countquery->execute();
		if ($flag) {
			$countquery = $countquery->fetch(PDO::FETCH_NUM);
			return $countquery[0];
		}
		return 0;
	}
}