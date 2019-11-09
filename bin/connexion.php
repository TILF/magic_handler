

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../public/css/magic.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title></title>
</head>
<body>
	<div>
		<h1 id="titre1" class="titre">Magic Handler</h1>

	</div>
	
	<div id="content">
		<div id="bloc_login">
			<form action="page_principale.php" method="post">
				<div>
					<h2 id="titre2" class="titre">Connexion</h2>
				</div>
				<div>
					<label>Identifiant</label>
					<input type="text"  class="form-control" name="identifiant">
				</div>

				<div>
					<label>Mot de passe</label>
					<input type="password"  class="form-control" name="password">
				</div>

				<div class="form-bloc">
					<input type="checkbox"  name="Rememberme"> Se souvenir de moi
				</div>

				<div class="center form-bloc"> 
					<button type="submit" name="Connexion" value= 'Connexion' class="btn btn-success">Valider</button>
				</div>

				<div class="form-bloc">
					<p><a href="">Mot de passe perdu ?</a></p>
					<p><a href="./inscription.html"> Inscrivez-vous ! </a></p>
				</div>
			</form>
		</div>
	</div>

	
</body>
</html>