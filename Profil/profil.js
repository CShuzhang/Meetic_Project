function modified_name(){
	let flag = true;

	$("#modif_name").click( function(){
		if(flag== true){
			$(".info").append("<div class='choose_name'>Votre nouveau nom : <form method='GET'> <input type='text' name='name_modified'><input type='submit'></form></div>");
			flag = false;
		}
		else{
			$('.choose_name').remove();
			flag = true;
		}
	});
}

function modified_lastname(){
	let flag = true;

	$("#modif_lastname").click( function(){
		if(flag== true){
			$(".info").append("<div class='choose_lastname'>Votre nouveau prenom : <form method='GET'> <input type='text' name='firstname_modified'><input type='submit'> </form></div>");
			flag = false;
		}
		else{
			$('.choose_lastname').remove();
			flag = true;
		}
	});
}

function modified_birth(){
	let flag = true;

	$("#modif_birth").click( function(){
		if(flag== true){
			$(".info").append("<div class='choose_birth'>Votre nouvelle date de naissance : <form method='GET'> <input type='date' name='birth_modified'><input type='submit'> </form></div>");
			flag = false;
		}
		else{
			$('.choose_birth').remove();
			flag = true;
		}
	});
}

function modified_sexe(){
	let flag = true;

	$("#modif_sexe").click( function(){
		if(flag== true){
			$(".info").append("<div class='choose_sex'>Votre nouveau sexe : <form method='GET'> <select name='sex_modified'>HOMME <option>FEMME</option><option>HOMME</option></select><input type='submit'></form></div>");
			flag = false;
		}
		else{
			$('.choose_sex').remove();
			flag = true;
		}
	});
}

function modified_city(){
	let flag = true;

	$("#modif_city").click( function(){
		if(flag== true){
			$(".info").append("<div class='choose_city'>Votre nouvelle ville: <form method='GET'> <input type='text' name='city_modified'><input type='submit'> </form></div>");
			flag = false;
		}
		else{
			$('.choose_city').remove();
			flag = true;
		}
	});
}

function modified_email(){
	let flag = true;

	$("#modif_email").click( function(){
		if(flag== true){
			$(".info").append("<div class='choose_email'>Votre nouveau email: <form method='GET'> <input id='error_mail' type='email' name='email_modified'><input type='submit'> </form></div>");
			flag = false;
		}
		else{
			$('.choose_email').remove();
			flag = true;
		}
	});
}

function modified_pass(){
	let flag = true;

	$('#modif_pass').click( function(){
		if(flag == true){
			$(".info").append("<div class='choose_pass'>Votre nouveau mot de passe: <form method='GET'> <input type='password' name='pass_modified'><input type='submit'> </form></div>");
			flag = false;
		}
		else{
			$('.choose_pass').remove();
			flag = true;
		}
	});
}

modified_name();
modified_lastname();
modified_birth();
modified_sexe();
modified_city();
modified_email();
modified_pass();

