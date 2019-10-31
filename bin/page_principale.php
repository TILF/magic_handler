<?php 
	include('fonction.php');

	/* Vérifie si la personne est connectée */
	if(is_loged()){

	}else{
		verify_connexion();
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