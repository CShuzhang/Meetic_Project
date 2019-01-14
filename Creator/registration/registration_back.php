<?php

class formulaire{

    function __construct($sex, $lastname, $firstname, $city, $birth, $email, $password){

        $this->sex = $sex;
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->city = $city;
        $this->birth = $birth;
        $this->email = $email;
        $this->password = $password;
        $user = 'phpmyadmin';
        $pass = '123456789';
        $this->stock = new PDO('mysql:host=localhost;dbname=lovote;charset=utf8', $user,$pass);
    }

    public function requete(){
        $requete = "INSERT INTO users (lastname, firstname, birth, sex, city, email, password) VALUES ('".$this->lastname."', '".$this->firstname."', '".$this->birth."', '".$this->sex."', '".$this->city."', '".$this->email."', '".$this->password."')";
        $donnees = $this->stock->prepare($requete);
        $donnees->execute();
    }
}


class verification{

    public function things(){

        if(isset($_GET['sexe']) && isset($_GET['lastname']) && isset($_GET['firstname']) && isset($_GET['city']) && isset($_GET['birth']) && isset($_GET['email']) && isset($_GET['mdp']) && !empty($_GET['sexe']) && !empty($_GET['lastname']) && !empty($_GET['firstname']) && !empty($_GET['city']) && !empty($_GET['birth']) && !empty($_GET['email']) && !empty($_GET['mdp']))
        {
            $verification = new verification();
            $verification->email();
        }

	}

    public function email(){

		$user = 'phpmyadmin';
		$pass = '123456789';
		$this->stock = new PDO('mysql:host=localhost;dbname=lovote;charset=utf8', $user,$pass);
		$requete_mail = "SELECT email FROM users WHERE email ='".$_GET['email']."'";
		$row = $this->stock->query($requete_mail);
		$count = $row->rowCount();

		if($count == 1){
			echo "<script>
			$('#email').css('border', '3px solid #ee332f');
			$('.email').append('<p>Ce mail est deja utiliser !</p>');
			$('.email p').css('color', '#ee332f');
			</script>";	
		}
		else{
			$verification = new verification();
			$verification->password();
			return;
		}	
	}


    public function password(){
        $pass = password_hash($_GET['mdp'], PASSWORD_DEFAULT);

        $verification = new verification();
        $verification->birth($pass);
    }

    public function birth($pass){
        $date = $_GET["birth"];
        $birthday = strtotime($date);

        if(time() - $birthday < 18 * 31536000){

            echo "<script>
            $('#birth').css('border', '3px solid #ee332f');
            $('.birth').append('<p>Vous etes trop jeune !</p>');
            $('.birth p').css('color', '#ee332f');
            </script>";
        }
        elseif(time() - $birthday > 140 * 31536000){
            echo "<script>
            $('#birth').css('border', '3px solid #ee332f');
            $('.birth').append('<p>Vous etes trop vieux !</p>');
            $('.birth p').css('color', '#ee332f');
            </script>";
        }
        else{

            $formulaire = new formulaire($_GET['sexe'], $_GET['lastname'], $_GET['firstname'], $_GET['city'], $_GET['birth'], $_GET['email'], $pass);
            $formulaire->requete();
            header ('Location: ../../Connect/connect.php');
        }
    }
}


$verification = new verification();
$verification->things();
?>