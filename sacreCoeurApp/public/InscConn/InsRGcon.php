
 <?php 
//AUTHOR BY ONABANJI ABIOLA 
// // connecting to the data base 
 @session_start();
 include '../DBase/conn.php';

 $bdd = getBDD();

		// connecting function
				if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['psw']) && !empty($_POST['psw']) && isset($_POST['rpsw']) && !empty($_POST['rpsw']))
				{
					
					// declaring the varialbes
					$email= $_POST['email'];
					$psw = $_POST['psw'];
					$rpsw = $_POST['rpsw'];
					
					// checking if the email is valid
					if (filter_var($email, FILTER_VALIDATE_EMAIL))
					{
						// Adding a condition to the password
						if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{3,}$#', $psw))
						{
							// Checking if there already exist an email
							$check_mail = "select count(*) as newEmail from userd where email=?";
							$request = $bdd->prepare($check_mail);
							$param = array($email);
							
							$request->execute($param);
							$ligne = $request->fetch();
							
							// inserting into the data base
							if ($ligne['newEmail'] == 0)
							{
								$sql = "INSERT INTO userd VALUES ('',?,?)";
								$request = $bdd->prepare($sql);
								
								// hinding the password
								$hash_psw = hash('sha256', $psw);
								
								$param = array($email, $hash_psw);
								$result = $request->execute($param);
							
								// checking if the connection was good
								if ($result == true)
								{
									//Sending Notifilcation to email
									
									$phase = "Cliquez sur le lien suivant pour continuer l\'inscription de votre enfant";
									$message = 'http://localhost/sacreCoeurApp/public/InscriDynamicForm/inscRGDyn.php';
									$mes = $phase."  ".$message;
									$to = $email;
									$subject = 'Continuez votre inscription';
									$res = mail($to, $subject, $mes);
									header('Location: ../Inscription/inscRGwlc.php');
										exit();
								}
								else 
								{
									echo  "<script type='text/javascript'> alert('Connection not good');</script> ";
								}
							}
							else 
							{
								echo  "<script type='text/javascript'> alert('L\'adresse email saisie existe d&eacute;ja.  veuillez revenir à la LOGIN PAGE');</script> ";
							}
						}
						else 
						{
							echo  "<script type='text/javascript'> 
										alert('Votre mot de passe doit respecter la synthaxe suivante: au moins un caract&egrav;re majuscule, des caract&egrav;res minuscules, des chiffres et des caract&egrav;res sp&eacute;aux ');
									</script> ";
						}
					}
					else 
					{
						echo  "<script type='text/javascript'> alert('L\'adresse email saisie n\'est pas valide.');</script> ";
					}
				}

?>