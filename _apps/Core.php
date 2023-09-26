<?php

//Write your custome class/methods here
namespace Apps;

class Core extends Model
{


	/** @return exit  */
	public function __construct()
	{
		parent::__construct();
	}

public function UserLogin($email, $password) {
	$sql = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
	$result = mysqli_query($this->dbCon, $sql);
	if ($result->num_rows) {
		$result = mysqli_fetch_object($result);
		return $result->id;
	}
	return false;
}
public function GetUserInfo($id) {
	$sql = "SELECT * FROM `users` WHERE `id`='$id'";
	$result = mysqli_query($this->dbCon, $sql);
	if ($result->num_rows) {
		$result = mysqli_fetch_object($result);
		return $result;
	}
	return false;
}
public function GetUserInfoUserName($username) {
	$sql = "SELECT * FROM `users` WHERE `username`='$username'";
	$result = mysqli_query($this->dbCon, $sql);
	if ($result->num_rows) {
		$result = mysqli_fetch_object($result);
		return $result;
	}
	return false;
}
public function UserRegister($name, $email, $username, $password, $referer) {
	$sql = "INSERT INTO `users`(`name`, `username`, `email`,  `password`,  `referer`) VALUES ('$name','$username','$email','$password','$referer')";
return mysqli_query($this->dbCon, $sql);
	
}

}
