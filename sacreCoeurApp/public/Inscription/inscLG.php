<!-- 22/12/2018 -->
<!-- // first making the inscription login page -->
<!-- //AUTHOR BY ONABANJI ABIOLA -->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/> 
		<title>
			Ecole de Sacr&eacute; Coeur ORGERES INSCLG page
		</title>
		<?php include ('../InscConn/InsLGcon.php'); $bdd = getBDD();?>
		<link rel="stylesheet" type="text/css" href="../assets/css/inscLG.css" />
		<link rel="shortcut icon" href="../assets/img/ecoleLogo.jpg" type="image/jpg" />

	</head>
	<body>
		<div class="bdy">
			<div class="mu">
				<ul>
					<li ><a href="../index.php"> ACCUEIL </a></li>
					<li ><a href="#"> CONNEXION</a></li>
				</ul>
			</div>
			<div class="inbd">
				<div class="Mwp">
					<center>
						<h2><b><em>Connexion</em></b> </h2>
						<img class="g" alt="pic" src="../assets/img/cl1.PNG" name="slide" >
					</center>
					
					<form action="" method="POST">
						<label class="rq" for="email"><b> Email: </b></label>
  						<input type="email" placeholder="Votre Email" id="email" name="email" ><br>
  						
  										
  						<label class="rq" for="psw"><b> Mot de passe: </b></label>
  						<input type="password" placeholder="Votre Mot de passe" id="psw" name="psw" ><br>
  						
  						<input type="submit" id="login_btn" onclick="verifForm();" name="login_btn" value=" Login"><br> 
  						<a href="inscRG.php"><input type="button" id="reg_btn" value=" Register"></a><br>
  					</form>
				</div>
			</div>
		</div>
		<script  type="text/javascript" src="../../src/js/vilad.js"></script>
		<script  type="text/javascript" src="../../src/js/inscp.js"></script>
	</body>
</html>
