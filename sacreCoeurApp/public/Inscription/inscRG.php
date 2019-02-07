<!-- 22/12/2018 -->
<!-- // first making the inscription regsertion page -->
<!-- //AUTHOR BY ONABANJI ABIOLA -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/> 
		<title>
			Ecole de Sacr&eacute; Coeur ORGERES INSCRG page
		</title>
		<?php include ('../InscConn/InsRGcon.php'); $bdd = getBDD();?>
		<link rel="stylesheet" type="text/css" href="../assets/css/inscRG.css" />
		<link rel="shortcut icon" href="../assets/img/ecoleLogo.jpg" type="image/jpg" />

	</head>
	<body>
		<div class="bdy">
			<div class="mu">
				<ul>
					<li ><a href="../index.php"> ACCUEIL </a></li>
					<li ><a href="#"> INSCRIPTIONS</a></li>
				</ul>
			</div>
			<div class="inbd">
				<div class="Mwp">
					<center>
						<h2><b><em>Inscpritions</em></b> </h2>
						<img class="g" alt="pic" src="../assets/img/cl1.PNG" name="slide" >
					</center>
					
					<form name="inscRG_form" action="" method="POST">
						<label class="rq" for="email"><b> Email: </b></label>
  						<input type="email" placeholder="Votre Email" id="email" name="email" value=""><br>
  						
  										
  						<label class="rq" for="psw"><b> Mot de passe: </b></label>
  						<input type="password" placeholder="Votre Mot de passe" id="psw" name="psw" value=""><br>
  						
  						
  						<label class="rq" for="rpsw"><b> Mot de passe: </b></label>
  						<input type="password" placeholder="R&eacute;p&eacute;tez votre mot de passe" id="rpsw" name="rpsw" value=""><br>
  						
  						
  						<input type="submit" id="reg_btn" onclick="verifForm();" value=" Register"><br> 
  						<a href="inscLG.php"><input type="button" id="login_btn" value=" Return to Login"></a><br>
  						
  					</form>
				</div>
			</div>
		</div>
		<script  type="text/javascript" src="../../src/js/vilad.js"></script>
		<script  type="text/javascript" src="../../src/js/inscp.js"></script>
	</body>
</html>
