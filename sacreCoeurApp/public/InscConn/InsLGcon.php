<?php

 //AUTHOR BY ONABANJI ABIOLA -->
 
 // // connecting to the data base
@session_start();
include '../DBase/conn.php';

$bdd = getBDD();

if (isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["psw"]) && !empty($_POST["psw"]))
{
	$email = $_POST["email"];
	$psw = $_POST["psw"];
	
	// hashing the psw
	$hash_psw = hash('sha256', $psw);
	
	// checking the dbase for the email entered
	$varfEmail = "select * from userd where email = ? and psw =?";
	$request = $bdd->prepare($varfEmail);
	$param = array($email, $hash_psw);
	$request->execute($param);
	$ligne = $request->fetch();
	
	if ($ligne !== FALSE)
	{
		$_SESSION["email"] = $ligne["email"];
		$_SESSION["userd_Id"] = $ligne["userd_Id"];
		
		header('Location: http://localhost/sacreCoeurApp/public/Inscription/ChlidDetailPage.php');
	}
	else 
	{
		header('Location: ../Inscription/inscLG.php?connexion=ERROR,Votre_Email_N\'existe_Pas_S\'il_Vous_Plaît_Vous_Inscrire ');
// 		echo  "<script type='text/javascript'> alert('L\'adresse email saisie n\'est pas valide.');</script> ";
	}
}
?>