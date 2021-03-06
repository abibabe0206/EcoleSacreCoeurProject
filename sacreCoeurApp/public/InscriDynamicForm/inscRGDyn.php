<!-- 22/12/2018 -->
<!-- // first making the inscription  dynamic registion page -->

<!-- //AUTHOR BY ONABANJI ABIOLA -->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/> 
		<title>
			Ecole de Sacr&eacute; Coeur ORGERES INSCRG Dynamic page
		</title>
		<?php include('dynFuncFrom.php'); $bdd = getBDD();?>
		<link rel="stylesheet" type="text/css" href="../assets/css/INRGDY.css" />
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
						<h2><b><em>Inscpritions Form</em></b> </h2>
					</center>
					
					<form name="inscRGDY_form" id="inscRGDY_form" action="" method="POST" onsubmit="return validations(this)">
						<fieldset class="row1">
							<legend> Information des Parents. </legend>
							
							<table id="parentTable" class="form" border="1">
								<tbody>
									<tr>
										<p>
											<td>
												<label class="rq" for="parent1"> Parent 1: </label>
												<input class="nom" type="text"  name="parent1" id="parent1" placeholder=" Votre NOM et PRENOM" >
											</td>
											<td>
												<label class="rq" for="relation1"> Relation 1: </label>
												<input type="text"  name="relation1" id="relation1" placeholder="Votre Relation &agrave; l'enfant" >
											</td>
											<td>
												<label class="rq" for="email1"> Email 1: </label>
												<input type="email"  name="email1" id="email1" placeholder="Votre Email" >
											</td>
											<td>
												<label class="rq" for="tel1"> Num&eacute;ro 1: </label>
												<input type="text"  name="tel1" id="tel1" placeholder="Votre Num&eacute;ro" >
											</td>
										</p>
									</tr>
								</tbody>
							</table>
							
							<table id="parentTable" class="form" border="1">
								<tbody>
									<tr>
										<p>
											<td>
												<label for="parent2"> Parent 2: </label>
												<input class="nom" type="text" name="parent2" id="parent2" placeholder=" Votre NOM et PRENOM" >
											</td>
											<td>
												<label for="relation2"> Relation 2: </label>
												<input type="text" name="relation2" id="relation2" placeholder="Votre Relation &agrave; l'enfant" >
											</td>
											<td>
												<label for="email1"> Email 2: </label>
												<input type="email" name="email2" id="email2" placeholder="Votre Email" >
											</td>
											<td>
												<label for="tel2"> Num&eacute;ro 2: </label>
												<input type="text" name="tel2" id="tel2" placeholder="Votre Num&eacute;ro" >
											</td>
										</p>
									</tr>
								</tbody>
							</table>
							<div class="clear"></div>					
						</fieldset>
  						
  						<fieldset class="row2">
							<legend> Informations sur l'enfant. </legend>
							<p>
								<input class="AD" type="button" value="Ajouter un Enfant." onclick="addChildRow('childTable')">
								<input class="RM" type="button" value="Retirer l'enfant." onclick="deleteChildRow('childTable')">
								<p><b style="color: red; font-size: 16px">(Toutes les actions s'appliquent uniquement aux entr&eacute;es avec des cases &agrave; cocher coch&eacute;es.)</b></p>
							</p>
							<table id="childTable" class="form" border="1">
								<tbody>
									<tr>
										<p>
											<td><input type="checkbox"  name="chk[]" id="chk[]" checked="checked"></td>
											<td>
												<label class="rq" for="BX_CNOM"> Nom: </label>
												<input type="text"  name="BX_CNOM[]" id="BX_CNOM[]" placeholder="Votre NOM">
											</td>
											<td>
												<label class="rq" for="BX_CPnom"> Prenom: </label>
												<input type="text"  name="BX_CPnom[]" id="BX_CPnom[]" placeholder="Votre PNOM" >
											</td>
											<td>
												<label class="rq" for="BX_age"> &Acirc;ge: </label>
												<select id="BX_age[]" class="age" name="BX_age[]">
													<option value="0">00 an</option>
													<option value="1">01 an</option>
													<option value="2">02 an</option>
													<option value="3">03 an</option>
													<option value="4">04 an</option>
													<option value="5">05 an</option>
													<option value="6">06 an</option>
													<option value="7">07 an</option>
													<option value="8">08 an</option>
													<option value="9">09 an</option>
													<option value="10">10 ans</option>
													<option value="11">11 ans</option>
													<option value="12">12 ans</option>
													<option value="13">13 ans</option>
													<option value="14">14 ans</option>
													<option value="15">15 ans</option>
												</select>
											</td>
											<td>
												<label class="rq" for="BX_YrIns"> Ann&eacute;e: </label>
												<input type="text" name="BX_YrIns[]" id="BX_YrIns[]" placeholder="Ann&eacute;e d'inscription" >
											</td>
											<td>
												<label class="rq" for="BX_photo"> Ajouter une photo (JPG, PNG ou GIF |max. 1Mo) </label>
												<input type="hidden" name="max_file_size" value="1048576" />
												<input type="file" name="photo_child[]" id="photo_cild[]" > 
											</td>
										</p>
									</tr>
								</tbody>
							</table>
							<div class="clear"></div>					
						</fieldset>
						<fieldset>
							<legend>Termes et Conditions.</legend>
							<p class="agreement">
								<div class="tooltip">
								<input  type="checkbox" value="">
								
								<label class="rq" for="TC"> <i>J'accepte les termes et conditions.</i> </label>
								<span>
									Vous acceptez les termes et conditions de notre &eacute;cole qui est <br>
									 en accord avec la loi fran&ccedil;aise article 467. Merci d'avoir pris <br>
									 connaissance des termes et conditions.
								</span>
								</div>
							</p>
							<div class="clear"></div>
						</fieldset>
						<div class="sb">
						<input type="submit" id="submit" name="submit" value=" Register"><br> 
						</div>
  					</form>
				</div>
			</div>
		</div>
		<script  type="text/javascript" src="../../src/js/InRgDy.js"></script>
		<script  type="text/javascript" src="../../src/js/vilad.js"></script>
	</body>
</html>
