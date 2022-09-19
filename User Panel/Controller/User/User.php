<?php

namespace kichaiUser\User;

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

	public function createNewUser($info)
	{
		try {

			$statement = $this->dbh->prepare("INSERT INTO users(username, email, password) VALUES(:username, :email, :password)");
			$statement->execute(
				[
					'username' => $info['username'],
					'email' => $info['email'],
					'password' => $info['password']
				]
			);

			session_start();
			$_SESSION['toast'] = 'Account created! Now log in.';
		} catch (PDOException $e) {
			echo 'Error: ' . $e->getMessage();
			die();
		}
	}

	public function UserLogin($info)
	{
		try {

			$statement = $this->dbh->prepare("SELECT * FROM users WHERE email= :email");
			$data = $statement->execute(
				[
					'email' => $info['email']
				]
			);

			$data = $statement->fetchAll(PDO::FETCH_ASSOC);

			if (isset($data[0]['email'])) {
				if ($data[0]['password'] == $info['password']) {
					session_start();
					$_SESSION['username'] = $data[0]['username'];
					$_SESSION['email'] = $data[0]['email'];
					 $_SESSION['userid'] = $data[0]['id'];


					header('Location: ../view/home.php');
				} else {
					session_start();
					$_SESSION['toast'] = 'Incorrect username or password!';
					header('Location: ../view/login-signup.php');
				}
			} else {
				session_start();
				$_SESSION['toast'] = 'Incorrect username or password!';
				header('Location: ../view/login-signup.php');
			}

			die();
		} catch (PDOException $e) {
			echo 'Error: ' . $e->getMessage();
			die();
		}
	}


	// reurn all user
	public function index()
	{
		$query = "SELECT id,username,email,register_at FROM $this->dbname.users WHERE banned=0";
		$ctgquery = $this->dbh->prepare($query);
		$flag = $ctgquery->execute();
		if ($flag) {
			$ctgdata = $ctgquery->fetchAll(PDO::FETCH_ASSOC);
			return $ctgdata;
		}
		return [];
	}
	//all banned user
	public function bannedUser()
	{
		$query = "SELECT id,username,email,register_at FROM $this->dbname.users WHERE banned=1";
		$ctgquery = $this->dbh->prepare($query);
		$flag = $ctgquery->execute();
		if ($flag) {
			$ctgdata = $ctgquery->fetchAll(PDO::FETCH_ASSOC);
			return $ctgdata;
		}
		return [];
	}
	// delete user
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
	// soft banned single user
	public function bannThisUser($id)
	{
		$query = "UPDATE $this->dbname.users SET banned=? WHERE id=?";
		$ctgquery = $this->dbh->prepare($query);
		$flag = $ctgquery->execute([1, $id]);
		if ($flag) {
			return true;
		}
		return false;
	}
	// permanently banned user
	public function bannThisUserPermanently($id)
	{
		$query = "UPDATE $this->dbname.users SET banned=? WHERE id=?";
		$ctgquery = $this->dbh->prepare($query);
		$flag = $ctgquery->execute([2, $id]);
		if ($flag) {
			return true;
		}
		return false;
	}
	// remove from banned
	public function removeFromBanned($id)
	{
		$query = "UPDATE $this->dbname.users SET banned=? WHERE id=?";
		$ctgquery = $this->dbh->prepare($query);
		$flag = $ctgquery->execute([0, $id]);
		if ($flag) {
			return true;
		}
		return false;
	}
	// counter number of user
	public function CountUser()
	{
		$query = "SELECT COUNT(id) FROM $this->dbname.users";
		$ctgquery = $this->dbh->prepare($query);
		$flag = $ctgquery->execute();
		if ($flag) {
			$ctgdata = $ctgquery->fetch(PDO::FETCH_NUM);
			return $ctgdata[0];
		}
		return 0;
	}


	// no work
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