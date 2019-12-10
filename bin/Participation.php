<?php

	include('Fonctions/fonction.php');
	include('Fonctions/dataBaseAccess.php');

	session_start();
	/* Vérifie si la personne est connectée */
	if(is_loged()){

	}else{
		verify_connexion();
	}


	/* Affiche le haut de page*/
	get_top_page();

?>

	<!-- Accès aux compte utilisateur -->
	<div id="account">
		<ul id="menu-accordeon">
				<li><a href="#">Mon Compte</a>
					<ul>
						<li><a href="#">Mes donn&eacute;es personnelles</a></li>
						<li><a href="#">Mes param&eacute;tres</a></li>
						<li><a href="#">Mes messages</a></li>
						<li><a href="deconnexion.php">D&eacute;connexion</a></li>
					</ul>
				</li>
		</ul>
	</div>
	
<?php get_bas_page(); ?>