<?php 

//AUTHOR BY ONABANJI ABIOLA
// // connecting to the data base

@session_start();
include '../DBase/conn.php';

include_once 'photoDynamicForm.php';

// include_once '../InscConn/InsRGcon.php';

$bdd = getBDD();
//email

		

		// connecting to the database
		
		if (isset($_POST['parent1']) && !empty($_POST['parent1']) && isset($_POST['parent2']) && !empty($_POST['parent2']) && 
				isset($_POST['relation1']) && !empty($_POST['relation1']) && isset($_POST['relation2']) && !empty($_POST['relation2']) && 
				isset($_POST['email1']) && !empty($_POST['email1']) && isset($_POST['email2']) && !empty($_POST['email2']) && 
				isset($_POST['tel1']) && !empty($_POST['tel1']) && isset($_POST['tel2']) && !empty($_POST['tel2']) &&
				isset($_POST['BX_CNOM']) && !empty($_POST['BX_CNOM']) && isset($_POST['BX_CPnom']) && !empty($_POST['BX_CPnom']) && 
				isset($_POST['BX_age']) && !empty($_POST['BX_age']) && isset($_POST['BX_YrIns']) && !empty($_POST['BX_YrIns'])
				&& isset($_POST['photo_child']) && !empty($_POST['photo_child']))
		{
			// declearing parent variables
			$parent1= $_POST['parent1'];
			$parent2= $_POST['parent2'];
			$relation1= $_POST['relation1'];
			$relation2= $_POST['relation2'];
			$email1= $_POST['email1'];
			$email2= $_POST['email2'];
			$tel1= $_POST['tel1'];
			$tel2= $_POST['tel2'];
			
			// declearing children variable
			$BX_CNOM = $_POST['BX_CNOM'];
			$BX_CPnom = $_POST['BX_CPnom'];
			$BX_age = $_POST['BX_age'];
			$BX_YrIns = $_POST['BX_YrIns'];
			$photo =$_POST['photo_child'];

			
			
			   // selecting the user id from table userd
					$userd_id = "SELECT * FROM userd WHERE email = ? OR email = ?"; 
					$request = $bdd->prepare($userd_id);
					$par = array($email1, $email2);
					
					$request->execute($par);
					$ligne = $request->fetch();
					
					if ($ligne != null)
					{	
						
						// checking if the email in parent table is not more than one
						$check_mail = "SELECT * FROM parent WHERE email1=? OR email2 =?";
						$req = $bdd->prepare($check_mail);
						$paramemail = array($email1, $email2);
				
						$req->execute($paramemail);
						$lig = $req->fetch();
						
						// inserting into the data base
						if ($lig == 0)
						{
							// take parent id 
							
							$OldParent_id = $lig['parent_Id'];
							//insert child 
							
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
									
									$paramC = array($BX_CNOM[$i], $BX_CPnom[$i], $BX_age[$i], $BX_YrIns[$i], $cphoto[$i],  $OldParent_id);
									
									$resultChild = $childQuery->execute($paramC);
									
									
									if ( $resultChild == true)
									{
										$phase = "Merci d'avoir inscrit vos enfants dans notre. ";
										$message = 'Au plaisir de vous voir ainsi que vos enfants à la date de reprise. Merci';
										$mes = $phase."  ".$message;
										$to = $email1;
										$subject = 'Confirmation d\'inscription';
										$res = mail($to, $subject, $mes);
										header('Location: inscRDynamicWlc.php');
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
						else 							
						{
							// inserting into parent table
							$sqlParent = "INSERT INTO parent VALUES ('',?,?,?,?,?,?,?,?,?)";
							$parentQuery = $bdd->prepare($sqlParent);
							
							$userd_id = $ligne['userd_Id'];
							$param = array($parent1, $parent2, $relation1, $relation2, $email1, $email2, $tel1, $tel2, $userd_id);
							$resultParent = $parentQuery->execute($param);
							
							// checking if the parent table is good
							if ($resultParent == true)
							{
								
								// getting the last inserted id
								$parent_id = $bdd->lastInsertId('parent_Id');
								
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
												header('Location: inscRDynamicWlc.php');
												exit();
											}
											else
											{
												echo("BAD CONNECTION");
											
											}
									 }// end of checking if child section is filled
									 else
									 {
									 	echo  "<script type='text/javascript'> alert('S'il vous plaît remplir les informations des enfants !!!!
											 vous ne pouvez pas enregistrer ZERO ENFANTS !! Merci');</script> ";
									 }
									
								  } // end of for loop
							  }// end of checking if parent table is good
							  else
							  {
							    	echo 'parent connection not good';
							  }
						} //the of putting in new parent into the table
					}
		   }
		   





?>