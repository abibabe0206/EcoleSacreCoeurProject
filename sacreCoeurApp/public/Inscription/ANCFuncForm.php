<?php 

//AUTHOR BY ONABANJI ABIOLA
// // connecting to the data base

@session_start();
include '../DBase/conn.php';

include_once '../InscriDynamicForm/photoDynamicForm.php';


$bdd = getBDD();


// connecting to database
		


		if (isset($_POST['BX_CNOM']) && !empty($_POST['BX_CNOM']) && isset($_POST['BX_CPnom']) && !empty($_POST['BX_CPnom'])
				&& isset($_POST['BX_age']) && !empty($_POST['BX_age']) && isset($_POST['BX_YrIns']) && !empty($_POST['BX_YrIns'])
				&& isset($_POST['photo_child']) && !empty($_POST['photo_child']))
		{
			// declearing children variable
			$BX_CNOM = $_POST['BX_CNOM'];
			$BX_CPnom = $_POST['BX_CPnom'];
			$BX_age = $_POST['BX_age'];
			$BX_YrIns = $_POST['BX_YrIns'];
			$photo =$_POST['photo_child'];
			
			// bilding the pdo 
			
			if (isset($_SESSION["email"]))
			{
				
			
				$parent = "SELECT parent_Id FROM parent, userd WHERE  parent.email1=userd.email";
				$request = $bdd->prepare($parent);
				$request->execute();
				$linge = $request->fetch();
// 				echo 'ok';
// 				var_dump($linge);
// // 				echo $parent_id;
// 				exit();
// 				die();
				if ($linge != null)
				{
					$parent_id = $linge['parent_Id'];
// 					echo 'ok';
// 					var_dump($parent_id);
// 					echo $parent_id;
// 					exit();
// 					die();
			// inserting into childs table
			
			for ($i=0; $i<=count($BX_CNOM); $i++)
			{
				
				// checking if child section is filled
				if (isset($BX_CNOM[$i]))
				{
					
					$sqlChild = "INSERT INTO child VALUES ('',?,?,?,?,?,?)";
					$childQuery = $bdd->prepare($sqlChild);
					
					// adding the photo of the child
					// creating the identifiant of the different file
					$cphoto = 'ChildsPhoto/'.$BX_CPnom.'.jpeg';
					upload('$cphoto','./ChildsPhoto', 1048576, array('png','gif','jpg','jpeg'));
					
					$paramC = array($BX_CNOM[$i], $BX_CPnom[$i], $BX_age[$i], $BX_YrIns[$i], $cphoto[$i],  $parent_id);
					
					$resultChild = $childQuery->execute($paramC);
					
					
					if ( $resultChild == true)
					{
						$phase = "Merci d'avoir inscrit vos enfants dans notre. ";
						$message = 'Au plaisir de vous voir ainsi que vos enfants à la date de reprise. Merci';
						$mes = $phase."  ".$message;
						$to = $email1;
						$subject = 'Confirmation d\'inscription';
						$res = mail($to, $subject, $mes);
						header('Location: ChlidDetailPage.php');
						exit();
					}
					else
					{
						echo("BAD CONNECTION");
						
					}
				}// end of checking if child secetion is filled or not
				else
				{
					echo  "<script type='text/javascript'> alert('S'il vous plaît remplir les informations des enfants !!!!
											 vous ne pouvez pas enregistrer ZERO ENFANTS !! Merci');</script> ";
				}
				
			} // end of for loop
				}
		}
			
		}


?>