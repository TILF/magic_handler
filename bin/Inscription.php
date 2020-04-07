

<!DOCTYPE html>
<html>
<head>
	<title>Inscription Membres</title>
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../public/css/inscription.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<meta http-equiv="Content-Type" content="text/html; charset="UTF-8">
</head>

<body>
<!-- Bloc inscription -->
	<div id="content">
		<div> 
			<h1 id="Ins">Inscription</h1>
		</div>

		<form id="bloc_login" method="post" form action= Inscr.php>

  			<div id="P1" class="form-row">

    			<div class="form-group col-md-6">
      				<label for="inputEmail">Email</label>
      				<input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="Mail">
    			</div>

          <div class="form-group col-md-6">
              <label for="inputPseudo">Pseudo</label>
              <input type="text" class="form-control" id="inputPseudo4" placeholder="Pseudo" maxlength="12" name="Pseudo">
          </div>

    			<div class="form-group col-md-6">
      				<label for="inputPassword">Mot de Passe</label>
      				<input type="password" class="form-control" id="inputPassword4" placeholder="Mot de passe" maxlength="12" name="Passwd">
    			</div>
  			</div>

  			<div class="form-group">
    			<label for="inputAddress">Adresse</label>
    			<input type="text" class="form-control" id="inputAddress" placeholder="9c rue de.." name="adresse">
  			</div>

  			<div class="form-group">
    			<label for="inputAddress2">Compl&eacute;ment adresse</label>
    			<input type="text" class="form-control" id="inputAddress2" placeholder="Appartement, studio, ou étage">
  			</div>

  			<div id="P2" class="form-row">

    			<div class="form-group col-md-6">
      				<label for="inputCity">Ville</label>
      				<input type="text" class="form-control" id="inputCity" name="Ville">
    			</div>

    			<div class="form-group col-md-4">
     	 			<label for="inputState">Pays</label>
      				<select id="inputState" class="form-control">
        			<option selected>Choose...</option>
        			<option>France</option>
        			<option>Allemagne</option>
        			<option>Belgique</option>
      				</select>
    			</div>

    			<div class="form-group col-md-2">
     	 			<label for="inputZip">Code postal</label>
      				<input type="text" class="form-control" id="inputZip" name="Zipcode">
    			</div>
  			</div>

			<div id=valider>
				<button class="btn btn-light" input type="submit">S'inscrire</button>
			</div>

		</form>

		<div id=back>
			<a href="./index.html" class="btn btn-outline-light">Retour</a>		 
			<!-- ../ Veux dire retour au dossier prédédent, du coup il cherchait index.html dans le dossier magicHandler. ./ veux dire, cherche dans le dossier courrant. Il va donbc bien chercher dans le même dossier que la pade d'inscritpion.-->
		</div>

	</div>

</body>
</html>