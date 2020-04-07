<?php

	ob_start('ob_gzhandler');
	session_start();
	require_once './Fonctions/dataBaseAccess.php';

	//die(print_r($_POST));

	// Vérifier si la personne n'est pas déjà loged, sinon la renvoyer du l'index
	
	$bd = bd_connect();

	 $sql = "INSERT INTO users(pseudo, passwd, mail, Dnaissance, Adresse, Ville) 
 			VALUES('". $_POST['Pseudo'] ."', '" . $_POST['Passwd'] . "', '" . $_POST['Mail'] . "' , '19910625' , '" . $_POST['adresse'] . "', '" . $_POST['Ville'] . "')";

	if (!isset($_POST['Pseudo']) || !isset($_POST['Passwd']) || !isset($_POST['Mail']) || !isset($_POST['adresse']) || !isset($_POST['Ville'])) 
	{
		die('Il manque des infos en POST');
	}else {
		$res = mysqli_query($bd, $sql) or bd_erreur($bd, $sql);
		die("Votre isncription est prise en compte !");
	}


 	/* Définies mais jamais utilisées ? */ 

 	/*
 	function inspseudo(){

 		$pseudo = isset($_POST["pseudo"]) ? intval($_POST["pseudo"]) : '';
 		$motif = "/ˆ[a-z][a-z0-9_#*$]{7,}/i"; 
 		}

 		

 	function inspasswd(){

 		$passwd = isset($_POST["passwd"]) ? intval($_POST["passwd"]) : '';
 		$motif =  "/ˆ[a-z][a-z0-9_#*$]{7,}/i"; 

			if (preg_match($motif,$mot_de_passe) == 0) {
				return "Mot de passe invalide";
			else{
			} 
		}

 	function insmail(){

 		$insmail = isset($_POST["mail"]) ? intval($_POST["mail"]) : '';
 			if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $_POST['email']))
        		{
          			$mail = $insmail;
        		}
     		 else
       			{
          			return "Adresse eMail invalide";
        		}
 			}
 	}

 	function insDnaissance(){

 		$Dnaissance = isset($_POST["Dnaissance"]) ? intval($_POST["Dnaissance"]) : '';
 		$format_date = "#ˆ([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})$#"; 
 		$jma = explode(’/’,$Dnaissance);  
			if ((preg_match($format_date,$Dnaissance) == 0)) || ((! checkdate($jma[1],$jma[0],$jma[2])){ 
				return "Date invalide!"
 		}
 			else{

 			}

 	function insAdresse(){

 		$Adresse = isset($_POST["Adresse"]) ? intval($_POST["Adresse"]) : '';
 		}

 	function insVille(){

 		$Ville = isset($_POST["Ville"]) ? intval($_POST["Ville"]) : '';
 		}	

 	*/	
?>