<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="registration.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<title>S'inscrire</title>
</head>
<body>

<div class='animated formulaire fadeInUp slow'>
	<div class='take_formu'>
		<form metho=POST>
			<h5>MON PROFIL</h5>

			<div class='me'>
				<p>JE SUIS UN/UNE :</p>
				<select name='sexe'>
					<option>HOMME</option>
					<option>FEMME</option>
				</select>
			</div>

			<div class='lastname'>
				<p>MON NOM :</p>
				<input type="text" name="lastname" required>
			</div>

			<div class='firstname'>
				<p>MON PRENOM :</p>
				<input type="text" name="firstname" required>
			</div>

			<div class='city'>
				<p>T'HABITE OU ?</p>
				<input type="text" name="city" required>
			</div>

			<div class='birth'>
				<p>JE SUIS NE/NEE</p>
				<input id='birth' type="date" name="birth" required>
			</div>

			<div class='email'>
				<p>MON EMAIL</p>
				<input id='email' type="email" name="email" required>
			</div>

			<div class='mdp'>
				<p>MOT DE PASSE</p>
				<input type="password" name="mdp" required>
			</div>

			<div class='valid'>
				<input type="submit" name="valid", value='ENVOYER'>
			</div>
		</form>
	</div>
</div>
</body>
</html>
<?php
include 'registration_back.php';
?>