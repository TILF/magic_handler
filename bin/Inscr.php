<?php
 $sql = "INSERT INTO users(pseudo, passwd, mail, Dnaissance, Adresse, Ville) 
 			VALUES($_POST['pseudo'], $_POST['passwd'], $_POST['mail'], $_POST['Dnaissance'], $_POST['Adresse'], $_POST['Ville']"

 			if (!isset($_POST['pseudo'] || $_POST['passwd'] || $_POST['mail'] || $_POST['Dnaissance'] || $_POST['Adresse'] || $_POST['Ville'] )) 
 			{
 				die()

 				else {
 					echo "Votre isncription est prise en compte !";
 				}
 			}
?>