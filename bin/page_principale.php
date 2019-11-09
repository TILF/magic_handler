<?php 

	// A inclure dans toutes les pages
	include('Fonctions/fonction.php');
	include('Fonctions/dataBaseAccess.php');

	// Déclaration du début de la session. A implémenter sour toutes les pages. C'est cette fonction qui récupère la table $_SESSION
	session_start();

	/* Si la personne n'est pas connectée alors on la connecte 
		Sinon c'est qu'elle est simplement en train de naviger sur le site et on lui laisse l'accès à la page.
	*/
	if(!is_loged()){
		connexion2();
	}


	/* Affiche le haut de page*/
	get_top_page();
?>



	<!-- Partie actualités, situé au centre de la page -->
	<div id="actus">Actualit&eacute;s</div>

	<!-- Accès aux compte utilisateur -->
	<div id="account">
		<ul id="menu-accordeon">
				<li><a href="#">Mon Compte</a>
					<ul>
						<li><a href="#">Mes donn&eacute;es personnelles</a></li>
						<li><a href="#">Mes param&eacute;tres</a></li>
						<li><a href="#">Mes messages</a></li>
						<li><a href="#">D&eacute;connexion</a></li>
					</ul>
				</li>
		</ul>
	</div>


<?php get_bas_page(); ?>