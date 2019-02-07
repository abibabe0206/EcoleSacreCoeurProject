<!-- 22/12/2018 -->
<!-- // first making the contact us -->
<!-- //AUTHOR BY ONABANJI ABIOLA -->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/> 
		<title>
			Ecole de Sacr&eacute; Coeur ORGERES contact us page
		</title>
		<?php include ('Cus.php');?>
		<link rel="stylesheet" type="text/css" href="../assets/css/CU.css" />
		<link rel="shortcut icon" href="../assets/img/ecoleLogo.jpg" type="image/jpg" />

	</head>
	<body>
		<div class="bdy">
			<div class="mu">
				<ul>
					<li ><a href="../index.php"> ACCUEIL </a></li>
					<li ><a href="#"> CONTACTEZ NOUS</a></li>
				</ul>
			</div>
			<div class="inbd">
				<table class="tdr">
					<tr>
						<td >
							<table>
								<tr>
									<td> <h3> Phone Number: </h3> <p> +33 (0)2-99-57-63-17 </p> </td>
								</tr>
								<tr>
									<td> <h3> Email: </h3> <p> project@gmail.com </p> </td>
								</tr>
								<tr>
									<td> <h3> Address: </h3> <p>  4 rue du Coteau,<br> 35230 ORGERES </p> </td>
								</tr>
							</table>
							<div id="map">
							 	<script async defer
   									 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmoWqw9M1zN63leL-tLN4rMYLxkras5OY&callback=initMap">
   								 </script>
   								 <script  type="text/javascript" src="../../src/js/appnew.js"></script>
							</div>
						</td>
						<td>
							<div class="cu">
								<form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
									<h3> Contactez nous </h3>
									
										<label class="rq" for="nom"><b>Nom: </b></label>
  										<input type="text" placeholder="Votre Nom" id="nom" name="nom" value="<?= $nom ?>"><br>
  										<span class="error"> <?= $nom_error ?></span><br>
  										
  										<label class="rq" for="prenom"><b>Prenom: </b></label>
  										<input type="text" placeholder="Votre Prenom" id="pnom" name="pnom" value="<?= $pnom ?>"><br>
  										<span class="error"> <?= $pnom_error ?></span><br>
  										
  										<label class="rq" for="phoneNumber"><b> Num&eacute;ro: </b></label>
  										<input type="tel" placeholder="Votre Num&eacute;ro" id="phn" name="phn" value="<?= $phn ?>"><br>
  										<span class="error"> <?= $phn_error ?></span><br>
  										
  										<label class="rq" for="email"><b> Email: </b></label>
  										<input type="email" placeholder="Votre Email" id="em" name="em" value="<?= $em ?>"><br>
  										<span class="error"> <?= $em_error ?></span><br>
  										
  										<label class="rq" for="message"><b> Message: </b></label>
  										<textarea type="text" placeholder="Votre Message......."  id="message" name="message" value="<?= $message?>"></textarea><br>
  										
  										<div class="success"><?= $success; ?></div>
  										<div id="lower">
  											<input type="submit" value=" Submit"><br>
  										</div>
  										
								</form>
								
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
		
	</body>
</html>
