<!-- 22/12/2018 -->
<!-- // first making the Children's information page -->
<!-- //AUTHOR BY ONABANJI ABIOLA -->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/> 
		<title>
			Ecole de Sacr&eacute; Coeur ORGERES INSCLG wlc page
		</title>
		<?php @session_start(); include '../DBase/conn.php';$bdd = getBDD();?>
		<link rel="stylesheet" type="text/css" href="../assets/css/ChildDetail.css" />
		<link rel="shortcut icon" href="../assets/img/ecoleLogo.jpg" type="image/jpg" />

	</head>
	<body>
		<div class="bdy">
			<div class="mu">
				<ul>
					<li ><a href="../index.php"> ACCUEIL </a></li>
					<li ><a href="AddNewChild.php"> AJOUTER UN EFANT</a></li>
				</ul>
				<a href="LogOut.php"><input type="button" id="reg_btn" value=" Déconnexion"></a>
			</div>
			<div class="inbd">
				<div class="Mwp">
					<center>
						<h2><b><em>Information des enfants</em></b> </h2>
						<img class="g" alt="pic" src="../assets/img/cl1.PNG" name="slide" >
					</center>
					
					    <h2><b><em> Merci de vous &ecirc;tre connect&eacute;. <?php if (isset($_SESSION["email"])){echo $_SESSION["email"];}?>
					    <br> Les inscriptions de votre enfant ou de vos enfants figurent ci-dessous. 
					    <br>s'il vous plaît assurez-vous de déconnecter. </em></b> </h2>
					    <table>
					    	<thead>
					    		<tr COLSPAN=2 BGCOLOR="#6D8FFF">
					    			<th> ChildNom </th>
					    			<th> ChildPrenom </th>
					    			<th> Age </th>
					    			<th> Year of Inscription </th>
					    			<th> ChildPhoto </th>
					    		</tr>
					    	</thead>
					    	<tbody>
					    		<?php 
					    		if (isset($_SESSION['email']))
					    		{
					    		// checking if it is the last email that entered is the info we get
					    			$userd_id = "SELECT *FROM userd WHERE email = ?";
									$reqcheck = $bdd->prepare($userd_id);
									$param = array($_SESSION['email']);
									
									$reqcheck ->execute($param);
									$ligne = $reqcheck->fetch();
									
					    			// selecting data dbase
					    			if ($ligne !=0)
					    			{
					    				$rq = $bdd->prepare('SELECT parent.email1 AS goodMail FROM parent');
// 					    				
					    				$rq->execute();
					    				$rw=$rq->fetch(PDO::FETCH_ASSOC);
					    				if (isset($_SESSION['email']) == $rw)
					    				{
				    					
					    					$request = $bdd->prepare('SELECT child.child_nom, child.child_prenom, 
																		child.age, child.YrOfInsc, child.photo
																		 FROM parent JOIN userd ON parent.userd_Id=userd.userd_Id
																		 LEFT OUTER JOIN child ON parent.parent_Id=child.parent_Id
																		WHERE parent.email1 = ?	 LIMIT 0, 10');
					    				
					    		
										$good = $rw['goodMail'];
					    				$request->execute(array($good));
					    				
					    				// displaying yhe rows in the dbase table.
					    				while ($row=$request->fetch(PDO::FETCH_ASSOC))
					    				{
					    					extract($row);
					    		?>
					    					<tr>
					    						<td> <?php echo $row['child_nom']; ?> </td>
					    						<td> <?php echo $row['child_prenom']; ?> </td>
					    						<td> <?php echo $row['age']; ?> </td>
					    						<td> <?php echo $row['YrOfInsc']; ?> </td>
					    						<td> <?php echo $row['photo']; ?> </td>
					    					</tr>
					    		<?php 
					    				}
					    				}
					    			}
					    		  }
					    		?>
					    	</tbody>
					    </table>
					    <br>
					    <br>
				</div>
			</div>
		</div>
		<script  type="text/javascript" src="../../src/js/inscp.js"></script>
	</body>
</html>
