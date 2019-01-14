<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="matching.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<title>Place</title>
</head>
<body>

<header>
<div class='take_top'>
	<div class='top'>
		<div class='logo'>
			<a href='#'><h1>L<i class="fas fa-heart"></i>VOTE</h1></a>
		</div>
		<div class='menu'>
			<?php
				echo "<h3><a id='accueil' href='../Place/place.php'>Accueil</a></h3>";
				echo "<h3><a id='profil' href='#'>Profil</a></h3>";
			?>
			<h3><a id='search' href='#'>Recherche</a></h3>
			<h3><a id='match' href='#'>MATCHING</a></h3>
		</div>
	</div>
</div>

</header>

<div class = 'take_all'>
	<form method="GET">
		<div class=' animated filter bounceInRight slow'>
			<div class='take_filter'>
				<div class='all_city'>
					<p>Ville : </p>
					<input id='city_name' type="text" name="city_name" value='Paris'>
					<p>Sexe : </p>
					<select name='sexe'>
						<option>HOMME</option>
						<option>FEMME</option>
						<option>TOUT</option>
					</select>
				</div>
				<div class='all_age'>
					<p><span>Tranche d'age : </span></p>
					<input id='age' type="text" name='firstage' value='18'>
					<p>a</p>
					<input id='age2' type="text" name="secondage" value='25'>
				</div>
				<input type="submit" id="submit" name="sub">
			</div>
		</div>
	</form>

	<div class='take_all_image'>
		<div class='style'>
			<div class='all_perso'>
				<div class='over'>
					<?php include 'back_matching.php'; ?>
				</div>
			</div>
		</div>
	</div>
	<div class='button'>
		<div class="take_back">
			<i id='back' class="fas fa-undo-alt"></i>
		</div>
		<i id='next' class="far fa-times-circle"></i>
	</div>
</div>

<script src="matching.js"></script>

</body>
</html>