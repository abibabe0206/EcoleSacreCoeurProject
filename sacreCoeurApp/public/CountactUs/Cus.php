<?php 

//AUTHOR BY ONABANJI ABIOLA -->
// define variables and set to empty values

$nom_error = $pnom_error = $phn_error = $em_error = "";
$nom = $pnom = $phn = $em = $message = $success = "";

// form is submitted with post method
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (empty($_POST["nom"]))
	{
		$nom_error = "Votre nom est obligatoire";
	}
	else 
	{
		$nom = test_input($_POST["nom"]);
		
		// Checking if name only contains letters and whitespace
		
		if (!preg_match("/^[a-zA-Z ]*$/",$nom))
		{
			$nom_error = "seules les lettres et les espaces sont autorisés";
		}
	}
	
	
	if (empty($_POST["pnom"]))
	{
		$pnom_error = "Votre prenom est obligatoire";
	}
	else
	{
		$pnom = test_input($_POST["pnom"]);
		
		// Checking if name only contains letters and whitespace
		
		if (!preg_match("/^[a-zA-Z ]*$/",$nom))
		{
			$pnom_error = "seules les lettres et les espaces sont autorisés";
		}
	}
	
	
	if (empty($_POST["phn"]))
	{
		$phn_error = "Votre nom est obligatoire";
	}
	else
	{
		$phn = test_input($_POST["phn"]);
		
		// Checking if name only contains letters and whitespace
		
		if (!preg_match("/^[\+]\d{2}[\(]\d{1}[\)]\d{4}[\-]\d{5}$/i",$phn))
		{
			$phn_error = "numéro incorrect Eg.+33(0)4477-34598";
		}
	}
	
	
	if (empty($_POST["em"]))
	{
		$em_error = "Votre email est obligatoire";
	}
	else
	{
		$em = test_input($_POST["em"]);
		
		// Checking if name only contains letters and whitespace
		
		if (!filter_var($em, FILTER_VALIDATE_EMAIL))
		{
			$em_error = "email incorrect Eg. project@gmail.com";
		}
	}
	
	
	if (empty($_POST["message"]))
	{
		$message= "";
	}
	else
	{
		$message= test_input($_POST["message"]);
		
	}
	
	if ($nom_error == '' and  $phn_error == '' and  $pnom_error == '' and $em_error == '')
	{
		$message_body = '';
		unset($_POST['submit']);
		foreach ($_POST as $key => $value)
		{
			$message_body .= "$key: $value\n";
		}
		
		$to = 'abibabe0206@gmail.com';
		$subject = 'Contactez nous submit';
		$res = mail($to, $subject, $message);
		//var_dump($res);
	
		if ($res)
		{
			
			$success = "Message envoy&eacute; !!! Merci de nous contacter";
			$nom = $pnom = $phn = $em = $message = '';
		}
		else 
		{
			$success= "not sedgood";
		}
	}
}


function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>