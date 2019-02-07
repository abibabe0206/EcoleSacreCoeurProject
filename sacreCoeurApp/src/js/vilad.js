
//AUTHOR BY ONABANJI ABIOLA

//verifiie le formulaire d'enregistrement d'un nouveau user	
function verifForm() 
{ var message = ""; var message1="Veuillez entrer ";

	
	if ( document.inscRG_form.email.value == "" ) { message += "- Veuillez entrer votre adresse email !\n";} 
	
	if ( document.inscRG_form.psw.value == "" ) { message += "- Veuillez entrer un mot de passe valide !\n";} 
	if ( document.inscRG_form.rpsw.value == "" ) { message += "- Veuillez entrer la confirmation de votre mot de passe !\n";} 
		
	if (document.inscRG_form.psw.value!=document.inscRG_form.rpsw.value) {message+="-Le champ 'Mot de passe' et le champ 'Confirmez le mot de passe' doivent \u00eatre identiques\n";}
		
	if (message!="") {
		alert (message);
	}
	else {
		document.Formulaire_nvprod.submit();
	}
}



// the validation function for the dynamic form and add new children form
var counter = 0;
function validations(form) 
{
	var field; var i=1;
	do
		{
			field=form[i];
			if(field.value=='')
				{
					alert('S\'il vous plaît remplir le formulaire !!!!! Vous ne pouvez pas soumettre le formulaire VIDE. Merci');
					return false;
				}
			i++;
		}
	while(i<counter);
}





























