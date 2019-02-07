<?php

//AUTHOR BY ONABANJI ABIOLA
@session_start();

function getBDD(){
	try
	{
		
		$con = new PDO('mysql:host=localhost;dbname=ecolesacrecoeur;charset=utf8', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $con;
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
		return null;
	}
}
?>


