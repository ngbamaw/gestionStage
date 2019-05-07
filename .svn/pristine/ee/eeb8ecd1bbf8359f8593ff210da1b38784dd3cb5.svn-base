//VAR
var input = $('input');

var verif = $("#verif");

var password = $('#signup_studiant_plainPassword_first');
var parentPassword = password.parent();
var confirmation = $('#signup_studiant_plainPassword_second');

var lastname = $('#last-name');
var firstname = $('#first-name');
var code_postal = $('#postal-code');
var num = $('#phone');
var email = $('#mail');


$('form').submit(function (e) {
		verif.html(' ');
		if(/*!cancelSend() && */!verificationPassword(password, parentPassword)){
			$('form').submit();
		}
		else{
			e.preventDefault();
		}	
});



/*function cancelSend() {
	var bool = false;
	
    input.css('border-color', '#e5e5e5');

    if(!checkName(firstname.val())){
        firstname.css("border-color", "red");
        verif.append("<span>- Au moins une lettre</span><br>");
        bool=true;
    }
    if(!checkName(lastname.val())){
        lastname.css("border-color", "red");
        verif.append("<span>- Au moins une lettre</span><br>");
        bool=true;
    }
    if (!checkNum(num.val())) {
        num.css("border-color", "red");
        verif.append("<span>- Le numéro de téléphone n'est pas valide<br>");
        bool=true;
    }
    if(!checkMail(email.val())){
        email.css("border-color", "red");
        verif.append("<span>- L'email n'est pas valide</span><br>");
        bool=true;
    }

    animationFormError(bool)
    
    return bool;
}*/

//function who check and analyze password give by users
function verificationPassword(password, parentPassword){
    
    var bool = false;

    if(!password.val().match(/(?=.*[A-Z])/)){
        verif.append("<span>- Au moins une lettre majuscule</span><br>")
        password.parent().css('border-color', 'red');
        bool = true;
    }
    if(!password.val().match(/(?=.*[a-z])/)){
        verif.append("<span>- Au moins une lettre minuscule</span><br>")
        password.parent().css('border-color', 'red');
        bool = true;
    }
    if(!password.val().match(/(?=.*\d)/)){
        verif.append("<span>- Au moins un chiffre</span><br>")
        password.parent().css('border-color', 'red');
        bool = true;
    }
    if(!password.val().match(/(?=.*[-+!*$@%_])/)){
        verif.append("<span>- au moins un de ces caractères spéciaux : $ @ % * + - _ ! </span><br>")
        password.parent().css('border-color', 'red');
        bool = true;
    }
    if(!password.val().match(/.{8,}/)){
        verif.append("<span>- Au moins 8 caractères</span><br>")
        password.parent().css('border-color', 'red');
        bool = true;
    }
    if(password.val()!==confirmation.val()){
    	console.log("coucou");
        confirmation.css("border-color", "red");
        verif.append("<span>- Les mots de passe ne correspondent pas</span><br>");
        bool=true;
    }

    if(bool==false){
        verif.remove();
        password.parent().css("border-color", "cornflowerblue");
    }

    animationFormError(bool);
    
    return bool;
}

function animationFormError(bool){
	if(bool){
		$('html,body').animate({scrollTop: verif.offset().top}, 'slow');
		verif.css("margin", "auto");
	    verif.css("width", "50%");
	    verif.css("margin-top", "1em");
	    verif.css("margin-bottom", "1em");
	    verif.css("background-color", "#f8d7da");
	    verif.css("color", "#721c24");
	}
}

//regex functions

/*function checkName(name){
    return name.match(/.+/);
}
function checkNum(num) {
    return num.match(/^0[1-8][0-9]{8}$/);
}

function checkMail(email){
    return email.match(/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/);
}*/
