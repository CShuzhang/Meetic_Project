<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="connect.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<title>Connexion</title>
</head>
<body>

<div class="animated connect fadeInDown slow">
	<div class='take_connect'>
		<form method="POST">
			<h5>CONNEXION</h5>
			<div class='connect_email'>
				<p>MON EMAIL :</p>
				<input type="email" name="connect_email">
			</div>

			<div class='connect_mdp'>
				<p>MON MOT DE PASSE</p>
				<input type="password" name="connect_pass">
			</div>

			<div class='redirection'>
				<a href="../Creator/registration/registration.php">Pas de compte ?</a>
			</div>

			<div class='valid_connect'>
				<input type="submit" name="valid_connect", value='ENVOYER'>
			</div>
		</form>
	</div>
</div>
</body>
</html>

<?php
include 'connect_back.php';
?>