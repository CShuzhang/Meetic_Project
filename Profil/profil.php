<?php
	session_start();
	include "upload.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="profil.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<title>Profil</title>
</head>
<body>

<header>
<div class='take_top'>
	<div class='top'>
		<div class='logo'>
			<a href='#'><h1>L<i class="fas fa-heart"></i>VOTE</h1></a>
		</div>
		<div class='menu'>
			<h3><a id='search' href='../Place/place.php'>Accueil</a></h3>
		</div>
	</div>
</div>


</div>

</header>

	<div class='take_image'>
		<div class='image'>
			
			<?php 
				if(file_exists("../Profil_image/".$_SESSION['email']."/img.jpg")){
					echo "<div class='myImage'>";
					echo "<h4>MA PHOTO</h4>";
					echo "<img src='../Profil_image/".$_SESSION['email']."/img.jpg'";
					echo "</div>";
				}
				else{
					echo "<div class='myImage'>";
					echo "<strong><h4>MA PHOTO</h4></strong>";
					echo "<img src='../Profil_image/img.png'";
					echo "</div>";
				}

			?>
			<form method='POST' enctype="multipart/form-data">
				<input type="file" name="image">
				<input type="submit" name="send_image">
			</form>
		</div>
	</div>

	<div class='my_profil'>
		<div class='write'>
			<strong><h4>MON PROFIL</h4></strong>
			<div class='take_profil'>
				<?php
				include "profil_back.php";
				?>
				<div class='modif_info'>
					<p><i id='modif_name'class="fas fa-pen"></i></p>
					<p><i id='modif_lastname' class="fas fa-pen"></i></p>
					<p><i id='modif_birth' class="fas fa-pen"></i></p>
					<p><i id='modif_sexe' class="fas fa-pen"></i></p>
					<p><i id='modif_city' class="fas fa-pen"></i></p>
					<p><i id='modif_email' class="fas fa-pen"></i></p>
					<p><i id='modif_pass' class="fas fa-pen"></i></p>
				</div>
			</div>
		</div>
	</div>

<script src="profil.js"></script>

<div class='delete'>
	<form method='GET'>
		<label for="deleted"><strong>SUPPRIMER MON COMPTE !</strong></label>
		<input type="checkbox" value='check' name="deleted">
		<input type="submit" name="okay_delete">
	</form>
</div>

<?php
	include 'modif_info.php';
?>

</body>
</html>