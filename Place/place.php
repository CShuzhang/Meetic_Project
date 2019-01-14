<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="place.css">
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
			<h3><a id='match' href='../Matching/matching.php'>MATCHING</a></h3>
		</div>
	</div>

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
</div>

</header>

</body>

</html>

<?php
	include 'place_back.php';
?>
<script src="place.js"></script>