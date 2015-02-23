<?php session_start();
/*
* clase login
*/
class login{
	function __construct(){
		include('connect_database.php');
		$this->getData();
	}

	public function getData(){
		$email = $_POST['email'];
		$password = $_POST['password'];
		if($email == "" or $password == ""){
			echo "<br>";
			echo "Por favor ingresa todos los datos.";
			echo "<br>";
		}else{
			$Sintaxis='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
			if(preg_match($Sintaxis,$email)){
				$this->consultDB($email, $password);
			}else{
				echo "<br>";
				echo "Su cuenta de correo no cumple los lineamientos necesarios.";
				echo "<br>";
			}
		}
	}

	public function consultDB($email, $password){
		$enc_password = sha1($password);
		$consultUser = mysql_query("SELECT id FROM users WHERE email = '$email' and password = '$enc_password'",$this->conectar);
		if(mysql_num_rows($consultUser)){
			$array=mysql_fetch_array($consultUser);
			echo "id_user=".$array["id"];
		}else{
			echo "registrate";
		}
		//Header("Location: ../index.php");
	}
}
$login = new login();
?>