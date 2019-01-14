<?php
class profil{

	function __construct($email){
		$this->email = $email;
		$user = 'phpmyadmin';
		$pass = '123456789';
		$this->stock = new PDO('mysql:host=localhost;dbname=lovote;charset=utf8', $user,$pass);
	}

	public function requete(){
		$requete = "SELECT * FROM users WHERE email = '".$this->email."'";
        $donnees = $this->stock->query($requete);

        while($info = $donnees->fetch()){
        	echo "<div class='info'>";
        	echo "<div class='word_lastname'><p>Mon nom : </p></div>";
        	echo "<div class='word_firstname'><p> Mon prenom : </p></div>";
        	echo "<div class='word_birth'><p> Ma date de naissance : </p></div>";
        	echo "<div class='word_sex'><p> Mon sexe : </p></div>";
        	echo "<div class='word_city'><p> Ma ville : </p></div>";
        	echo "<div class='word_email'><p> Mon email : </p></div>";
        	echo "<div class='word_pass'><p> Mon mot de passe : </p></div>";
        	echo "</div>";

        	echo "<div class='my_info'>";
        	echo "<div class='lastname'><p><strong>".$info['lastname']."</strong></p></div>";
        	echo "<div class='firstname'><p><strong>".$info['firstname']."</strong></p></div>";
        	echo "<div class='birth'><p><strong>".$info['birth']."</strong></p></div>";
        	echo "<div class='sex'><p><strong>".$info['sex']."</strong></p></div>";
        	echo "<div class='city'><p><strong>".$info['city']."</strong></p></div>";
        	echo "<div class='email'><p><strong>".$info['email']."</strong></p></div>";
        	echo "<div class='pass'><i class='fas fa-circle'></i><i class='fas fa-circle'></i><i class='fas fa-circle'></i><i class='fas fa-circle'></i><i class='fas fa-circle'></i><i class='fas fa-circle'></i></div>";
        	echo "</div>";
        }
	}
}

$profil = new profil($_SESSION["email"]);
$profil->requete();
?>