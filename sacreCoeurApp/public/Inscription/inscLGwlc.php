<?php 
//AUTHOR BY ONABANJI ABIOLA -->
// This was not used in the project
// login successful page

@session_start();
if (isset($_SESSION["email"]))
{
	echo '<h2> Login Successful, Welcome -'.$_SESSION["email"].'</h2>';
	echo '<br><br><h4><a href="ChlidDetailPage.php"> Click Here to See Your Child(ren) Details </a></h4>';
}
else 
{
	header("location:inscLG.php");
}


?>