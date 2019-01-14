<?php
	
class face{

	function __construct($city, $sex, $age, $secondage){
		$this->city = $city;
		$this->sex = $sex;
		$this->age = $age;
		$this->secondage = $secondage;
		$user = 'phpmyadmin';
		$pass = '123456789';
		$this->stock = new PDO('mysql:host=localhost;dbname=lovote;charset=utf8', $user,$pass);
	}

	public function three_conditions(){
		$one = date ('Y-m-d', strtotime('today -'.$this->secondage.'years'));
		$two = date ('Y-m-d', strtotime('today -'.$this->age.'years'));
		$requete = "SELECT * FROM users WHERE email != 'NULL' && city = '".$this->city."' && sex = '".$this->sex."' && birth BETWEEN '".$one."' AND '".$two."'";
        $donnees = $this->stock->query($requete);
        $face = new face($_GET['city_name'], $_GET['sexe'], $_GET['firstage'], $_GET['secondage']);
        $face -> pop($donnees);
    }

    public function two_three_conditions(){
    	$one = date ('Y-m-d', strtotime('today -'.$this->secondage.'years'));
		$two = date ('Y-m-d', strtotime('today -'.$this->age.'years'));
		$requete = "SELECT * FROM users WHERE email != 'NULL' && city = '".$this->city."' && birth BETWEEN '".$one."' AND '".$two."'";
        $donnees = $this->stock->query($requete);
    	$face = new face($_GET['city_name'], NULL, $_GET['firstage'], $_GET['secondage']);
		$face-> pop($donnees);
    }

    public function second_conditions(){
    	$requete = "SELECT * FROM users WHERE email != 'NULL' && city = '".$this->city."' && sex = '".$this->sex."'";
    	$donnees = $this->stock->query($requete);
    	$face = new face($_GET['city_name'], $_GET['sexe'], NULL, NULL);
    	$face -> pop($donnees);
    }

    public function two_second_conditions(){
    	$one = date ('Y-m-d', strtotime('today -'.$this->secondage.'years'));
		$two = date ('Y-m-d', strtotime('today -'.$this->age.'years'));
    	$requete = "SELECT * FROM users WHERE email != 'NULL' city ='".$this->city."' && birth BETWEEN '".$one."' AND '".$two."'";
    	$donnees = $this->stock->query($requete);
    	$face = new face($_GET['city_name'], NULL, $_GET['firstage'], $_GET['secondage']);
    	$face -> pop($donnees);
    }

    public function three_second_conditions(){
    	$one = date ('Y-m-d', strtotime('today -'.$this->secondage.'years'));
		$two = date ('Y-m-d', strtotime('today -'.$this->age.'years'));
    	$requete = "SELECT * FROM users WHERE email != 'NULL' && sex ='".$this->sex."' && birth BETWEEN '".$one."' AND '".$two."'";
    	$donnees = $this->stock->query($requete);
    	$face = new face(NULL, $_GET['sexe'], $_GET['firstage'], $_GET['secondage']);
    	$face -> pop($donnees);
    }


    public function all(){
    	$requete = "SELECT * FROM users WHERE email != 'NULL'";
    	$donnees = $this->stock->query($requete);
    	$face = new face(NULL, NULL, NULL, NULL);
    	$face -> pop($donnees);
    }

	public function pop($donnees){
		while($info = $donnees->fetch()){
		echo "<div class='all_image'>";
		if(file_exists("../Profil_image/".$info['email']."/img.jpg")){
			echo "<img src='../Profil_image/".$info['email']."/img.jpg'>";
		}
		else{
		  	echo "<i class='fas fa-user'></i>";
		}
		$date = $info["birth"];
		$myDate = strstr($date, "-", true);
	  	$myAge = date("Y") - $myDate;
		echo "<div class='perso'><p>Nom : <strong>".$info['lastname']."</strong></p><p>Prenom : <strong>".$info['firstname']."</strong></p><p>Age : <strong>".$myAge."</strong></p><p>Ville : <strong>".$info['city']."</strong></p></div>";
		echo "</div>";
		}
	}
}

if(isset($_GET['city_name']) && !empty($_GET['city_name']) && isset($_GET['firstage']) && !empty($_GET['firstage']) && isset($_GET['secondage']) && !empty($_GET['secondage']) && isset($_GET['sexe']) && !empty($_GET['sexe']) && $_GET['sexe'] != 'TOUT'){
	$face = new face($_GET['city_name'], $_GET['sexe'], $_GET['firstage'], $_GET['secondage']);
	$face-> three_conditions();
}
elseif (isset($_GET['city_name']) && !empty($_GET['city_name']) && isset($_GET['firstage']) && !empty($_GET['firstage']) && isset($_GET['secondage']) && !empty($_GET['secondage']) && isset($_GET['sexe']) && !empty($_GET['sexe']) && $_GET['sexe'] == 'TOUT') {
	$face = new face($_GET['city_name'], NULL, $_GET['firstage'], $_GET['secondage']);
	$face-> two_three_conditions();
}
elseif(isset($_GET['city_name']) && !empty($_GET['city_name']) && isset($_GET['sexe']) && !empty($_GET['sexe']) && $_GET['sexe'] != "TOUT" && $_GET['firstage'] == NULL && $_GET['secondage'] == NULL){
	$face = new face($_GET['city_name'], $_GET['sexe'], NULL, NULL);
	$face -> second_conditions();	
}
elseif(isset($_GET['city_name']) && !empty($_GET['city_name']) && isset($_GET['sexe']) && !empty($_GET['sexe']) && $_GET['sexe'] != "TOUT" && isset($_GET['firstage']) && !empty($_GET['firstage']) && isset($_GET['secondage']) && !empty($_GET['secondage'])){
	$face = new face($_GET['city_name'], NULL, $_GET['firstage'], $_GET['secondage']);
	$face -> two_second_conditions();
}
elseif(isset($_GET['sexe']) && !empty($_GET['sexe']) && isset($_GET['firstage']) && !empty($_GET['firstage']) && isset($_GET['secondage']) && !empty($_GET['secondage']) ){
	$face = new face( NULL, $_GET['sexe'], $_GET['firstage'], $_GET['secondage']);
	$face -> three_second_conditions();
}
else{
	$face = new face(NULL, NULL, NULL, NULL);
	$face -> all();
}

?>