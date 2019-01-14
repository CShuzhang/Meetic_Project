function search(){
	let flag = true;

	$('#search').click( function(){
		if( flag == true){
			$('.filter').css("display", "flex");
			flag = false;
		}
		else{
			$('.filter').css("display", "none");
			flag = true;
		}
	});
}

search();

function list(){
	let flag = true;

	$('#profil').click( function(){
		if( flag == true){
			$('#profil').append("<li><a href='../Profil/profil.php'>Mes infos</a></li>");
			$('#profil').append("<li><a href='../Home/home.php'>Deconnexion</a></li>");
			flag = false;
		}
		else{
			$('#profil li').remove();
			flag = true;
		}
	});
}

list();