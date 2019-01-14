<?php

class modification{

	function __construct(){
		$user = 'phpmyadmin';
		$pass = '123456789';
		$this->stock = new PDO('mysql:host=localhost;dbname=lovote;charset=utf8', $user,$pass);
	}

	public function name($name){
		$this->name = $name;
		$requete = "UPDATE users SET lastname='".$this->name."' WHERE email='".$_SESSION['email']."'";
		$donnees = $this->stock->prepare($requete);
		$donnees->execute();
		header ('Location: ../Profil/profil.php');

	}

	public function firstname($firstname){
		$this->firstname = $firstname;
		$requete = "UPDATE users SET firstname='".$this->firstname."' WHERE email='".$_SESSION['email']."'";
		$donnees = $this->stock->prepare($requete);
		$donnees->execute();
		header ('Location: ../Profil/profil.php');
	}

	public function birth($birth){
		$this->birth = $birth;
        $birthday = strtotime($this->birth);

        if(time() - $birthday < 18 * 31536000){
            echo "<script>alert('Vous etes trop jeune !')</script>";
        }
        elseif(time() - $birthday > 140 * 31536000){
            echo "<script>alert('Vous etes trop vieux !') </script>";
        }
        else{
	       	$requete = "UPDATE users SET birth='".$this->birth."' WHERE email='".$_SESSION['email']."'";
			$donnees = $this->stock->prepare($requete);
			$donnees->execute();
			header ('Location: ../Profil/profil.php');
        }
	}

	public function sexe($sex){
		$this->sex = $sex;
		$requete = "UPDATE users SET sex='".$this->sex."' WHERE email='".$_SESSION['email']."'";
		$donnees = $this->stock->prepare($requete);
		$donnees->execute();
		header ('Location: ../Profil/profil.php');
	}

	public function city($city){
		$this->city = $city;
		$requete = "UPDATE users SET city='".$this->city."' WHERE email='".$_SESSION['email']."'";
		$donnees = $this->stock->prepare($requete);
		$donnees->execute();
		header ('Location: ../Profil/profil.php');
	}

	public function email($email){
		$this->email = $email;
		$requete_mail = "SELECT email FROM users WHERE email ='".$this->email."'";
		$row = $this->stock->query($requete_mail);
		$count = $row->rowCount();

		if($count == 1){
			echo "<script>alert('Email deja pris !');</script>";	
		}
		else{
			$this->email = $email;
			rename("../Profil_image/".$_SESSION['email']."/", "../Profil_image/".$this->email."/" );

			$requete = "UPDATE users SET email='".$this->email."' WHERE email='".$_SESSION['email']."'";
			$donnees = $this->stock->prepare($requete);
			$donnees->execute();
			header ('Location: ../Connect/connect.php');
		}
	}

	public function pass($pass){
		echo $this->pass = $pass;
		$pass = password_hash($this->pass, PASSWORD_DEFAULT);
		$requete = "UPDATE users SET password='".$pass."' WHERE email='".$_SESSION['email']."'";
		$donnees = $this->stock->prepare($requete);
		$donnees->execute();
		header ('Location: ../Connect/connect.php');
	}
	public function delete($delete){
		unlink('../Profil_image/'.$_SESSION['email']."/img.jpg");
		$this->delete = $delete;
		$requete = "UPDATE users SET email = 'NULL' WHERE email='".$_SESSION['email']."'";
		$donnees = $this->stock->prepare($requete);
		$donnees->execute();
		header("Location: ../Home/home.php");
	}
}

$modif = new modification();

if(isset($_GET['name_modified']) && !empty($_GET['name_modified'])){
	$modif -> name($_GET['name_modified']);
}

if(isset($_GET['firstname_modified']) && !empty($_GET['firstname_modified'])){
	$modif -> firstname($_GET['firstname_modified']);
}

if(isset($_GET['birth_modified']) && !empty($_GET['birth_modified'])){
	$modif -> birth($_GET['birth_modified']);
}

if(isset($_GET['sex_modified']) && !empty($_GET['sex_modified'])){
	$modif -> sexe($_GET['sex_modified']);
}

if(isset($_GET['city_modified']) && !empty($_GET['city_modified'])){
	$modif -> city($_GET['city_modified']);
}

if(isset($_GET['email_modified']) && !empty($_GET['email_modified'])){
	$modif -> email($_GET['email_modified']);
}

if(isset($_GET['pass_modified']) && !empty($_GET['pass_modified'])){
	$modif -> pass($_GET['pass_modified']);
} 

if(isset($_GET['deleted'])){
	if($_GET['deleted'] == 'check'){
		$modif -> delete($_GET['deleted']);
	}
}

?>