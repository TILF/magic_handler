<?php

	include('Fonctions/fonction.php');
	include('Fonctions/dataBaseAccess.php');

	/* Vérifie si la personne est connectée */
	if(is_loged()){

	}else{
		verify_connexion();
	}


	/* Affiche le haut de page*/
	get_top_page();

?>

<!-- Accès au compte utilisateur -->
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
	
<!-- Formulaire de demande d'impression -->
	<div id="askI">
		<form class="form-inline" id="askI2">
  			<div class="form-group">
    			<label for="card">Carte</label>
    			<input type="card" class="form-control" id="name">
 			</div>

 			<div class="select">
 				<select name="Edition" size="1">
 					<option>Eight Edition</option>
 					<option>Mirrodin</option>
 					<option>Darksteel</option>
 					<option>Fifth Dawn</option>
 					<option>Champions of Kamigawa</option>
 					<option>Unhinged</option>
 					<option>Betrayers of Kamigawa</option>
 					<option>Saviors of Kamigawa</option>
 					<option>Ninth Edition</option>
 					<option>Ravnica: City of Guilds</option>
 					<option>Guildpact</option>
 					<option>Dissension</option>
 				</select>
 			</div>

 			<div class="select">
 				<select name="Quantité" size="1">
 					<option>1</option>
 					<option>2</option>
 					<option>3</option>
 					<option>4</option>
 				</select>
 			</div>

  			<div>
  				<button type="Ajouter" class="btn btn-primary" id="btn">Ajouter</button>
  			</div>
		</form>
	</div>

<!-- Cette partie serait les demandes qui viennent d'être réalisée pour les modifier si besoin dans les 15min pour ensuite valider les demandes en gros ça serait en dessous de la barre d'ajout...  -->
	<div></div>

<?php get_bas_page(); ?>