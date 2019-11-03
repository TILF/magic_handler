<?php 

   function get_top_page(){
      echo "
      <!DOCTYPE html>
      <html>

      <head>
         <title>Magic Handler</title>
         <link rel=\"stylesheet\" type=\"text/css\" href=\"../public/css/bootstrap.min.css\">
         <link rel=\"stylesheet\" type=\"text/css\" href=\"../public/css/page_principale.css\">
         <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
         <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
      </head>

      <body>

         <h1>Magic Handler</h1>

         <div>
         <!-- Espace Inscrits -->
            <div id=\"user\">
               <ul id=\"menu-accordeon\">
                     <li><a href=\"#\">Ev&eacute;nements</a>
                      <ul>
                           <li><a href=\"./eventcmg\">Ev&eacute;nements &eacute; venir</a></li>
                           <li><a href=\"./tournoi\">Tournois</a></li>
                           <li><a href=\"./participation\">Mes participations</a></li>
                        </ul>
                     </li>

                  <li><a href=\"#\">Impressions</a>
                        <ul>
                           <li><a href=\"./askimpress\">Demander une impression</a></li>
                           <li><a href=\"./impressOn\">Impressions en cours</a></li>
                           <li><a href=\"./impressH\">Historique des impressions</a></li>
                        </ul>
                     </li>

                     <li><a href=\"#\">Mes decks</a>
                        <ul>
                           <li><a href=\"./ImpDeck\">Importer un deck</a></li>
                           <li><a href=\"./GDeck\">G&eacute;rer les decks</a></li>
                           <li><a href=\"./DDeck\">Discussion decks</a></li>
                        </ul>
                     </li>
               </ul>
            </div>

            <!-- Partie Administrateur -->
            <div id=\"Admin\">
               <div>
                  <button id=\"Bad\"><a href=\"./Gestion_event\">G&eacute;rer les &eacute;v&eacute;nements</a></button>
               </div>

               <div>
                  <button id=\"Bad\"><a href=\"./Gestion_impressions\">G&eacute;rer les impressions</a></button>
               </div>

               <div>
                  <button id=\"Bad\"><a href=\"./Gestion_actus\">G&eacute;rer les actualit&eacute;s</a></button>
               </div>
            </div>";
   }

   function get_bas_page(){
      echo "</body></html>";
   }

   /**
    * Vérifie si l'utilisateur peut se connecter, sinon retour à la page d'acceuil
    * conseil : utiliser la table $_POST pour les informations transmises par le formulaire
    * Si la personne est connectée, créer une session
    */
   function verify_connexion(){

   }

   /**
    * Verifie si l'utilisateur est déjà connecté.
    * A implémenter sur toutes les pages du site (sauf celle ou pas beoin d'etre connecté)
    * conseil utiliser les variables de session $_SESSION
    */
   function is_loged(){

      $log = false;

      /* TODO : Si le mec est déjà connecté, log = true sinon log = false : conseil voir cours sur les if */

      return $log;
   }



/*################################################################################
                  Fonctions de traitement des données entrée/sorties
##################################################################################*/

/** 
 *  Protection des sorties (code HTML généré à destination du client).
 *
 *  Fonction à appeler pour toutes les chaines provenant de :
 *      - de saisies de l'utilisateur (formulaires)
 *      - de la bdD
 *  Permet de se protéger contre les attaques XSS (Cross site scripting)
 *  Convertit tous les caractères éligibles en entités HTML, notamment :
 *      - les caractères ayant une signification spéciales en HTML (<, >, ...)
 *      - les caractères accentués
 *
 *  @param  string  $text   la chaine à protéger    
 *  @return string  la chaîne protégée
 */
function entities_protect($str) {
    $str = trim($str);
    return htmlentities($str, ENT_QUOTES, 'UTF-8');
}

//____________________________________________________________________________
/**
 * Protection des chaînes avant insertion dans une requête SQL
 *
 * Avant insertion dans une requête SQL, toutes les chaines contenant certains caractères spéciaux (", ', ...) 
 * doivent être protégées. En particulier, toutes les chaînes provenant de saisies de l'utilisateur doivent l'être. 
 * Echappe les caractères spéciaux d'une chaîne (en particulier les guillemets) 
 * Permet de se protéger contre les attaques de type injections SQL
 *
 * @param   objet       $bd     La connexion à la base de données
 * @param   string      $str    La chaîne à protéger
 * @return  string              La chaîne protégée
 */
function bd_protect($bd, $str) {
    $str = trim($str);
    return mysqli_real_escape_string($bd, $str);
}

//____________________________________________________________________________
/**
 * Redirection de l'utilisateur vers une page donnée
 *
 * @param   String  $destination    Adresse de destination
 *
 * @return  void
 */
function redirection($destination){
    header('location: '.$destination);
    exit();
}

   
?>

