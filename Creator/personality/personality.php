<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="personality.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<title>Personality</title>
</head>
<body>

<div class ="animated formulaire fadeInUp slow">
	<div class="take_formu">
		<form metho=POST>
			<h5>MA PERSONNALITE</h5>

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
				<input type="date" name="birth" required>
			</div>

			<div class='email'>
				<p>MON EMAIL</p>
				<input type="email" name="email" required>
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