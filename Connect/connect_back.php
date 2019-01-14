<?php

class connect{

	function __construct($email, $password){
		$this->password = $password;
		$this->email = $email;
		$user = 'phpmyadmin';
		$pass = '123456789';
		$this->stock = new PDO('mysql:host=localhost;dbname=lovote;charset=utf8', $user,$pass);

	}

	public function requete(){
		$requete = "SELECT email, password FROM users";
		$search = $this->stock->query($requete);
		while($donnees = $search->fetch()){
			if($this->email == $donnees['email']){
				if(password_verify($this->password, $donnees['password'])){
					session_start();
					$_SESSION['email'] = $donnees['email'];
					header ("Location: ../Place/place.php?connect_email=".$this->email);
				}
				else{
					echo "<div class='error'>Mot de passe ou email incorrect !";
					exit;
				}
			}
		} 
	}
}

class verif{

	public function verif(){
		if(isset($_POST["connect_email"]) && !empty($_POST["connect_email"]) && isset($_POST["connect_pass"]) && !empty($_POST["connect_pass"])){
			$connect = new connect($_POST['connect_email'], $_POST['connect_pass']);
			$connect->requete();
		}
	}
}

$verif = new verif();
$verif->verif();

?>