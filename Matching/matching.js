
function update(n){
	value = 200 * n;
	$('.over').css("transform", "translateX(-" + value +"px)");
}

n = 0;
limit = $(".over")[0].children.length; 

$('#next').click( function(){
	if(n == limit - 1){
		alert("Pas plus de resultat !")
	} 
	else{
		n += 1;
		update(n);
	}
});

$('#back').click( function(){
	if(n == 0){
		alert("Tu cherches quoi !")
	} 
	else{
		n -= 1;
		console.log(n);
		update(n);
	}
});

function search(){
	let flag = true;

	$('#search').click( function(){
		if( flag == true){
			$('.filter').css("display", "flex");
			$('.take_all_image').css("paddingTop", "1em");
			flag = false;
		}
		else{
			$('.filter').css("display", "none");
			$('.take_all_image').css("paddingTop", "10em");
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
