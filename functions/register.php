<?php session_start();
class Register{
	function __construct(){
		include('connect_database.php');
		$this->getData();
	}

	public function getData(){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$surname_1 = $_POST['surname1'];
		$surname_2 = $_POST['surname2'];
		$phone = $_POST['phone'];
		$direction = $_POST['direction'];
		$credit_card = $_POST['creditcard'];
	}
}
$register = new Register();
?>