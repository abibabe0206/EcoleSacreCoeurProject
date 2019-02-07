<?php 
//AUTHOR BY ONABANJI ABIOLA -->

// Log Out Page
@session_start();
@session_destroy();

header("location: inscLG.php");


?>