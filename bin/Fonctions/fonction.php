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
                           <li><a href=\"./impressask\">Demander une impression</a></li>
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


   function connexion2(){

      //Etape 1, vérifier que les informations saisies dans le formulaire sont bien présente dans $_POST, sinon il y a erreur et on revient à l'écran de connexion
      //Cette vérification empêche une personne d'accéder à la page en tapant l'adresse URL directement.
      if(!$_POST['identifiant'] || !$_POST['password'])
        redirection('deconnexion.php');

      //Sinon, on vérifie que les identifiants soient corrects (pour le moment on dit que c'est 'admin' 'admin')
      // Si ce n'est pas le cas on retourne à la connexion
      // Pour le moment on ne gère pas le message d'erreur
      if(connectByIdPass($_POST['identifiant'], $_POST['password']) === 0)
        redirection('deconnexion.php');

      //Si on arrive là c'est que tout est ok, alors on connecte la personne en assignant 
      $_SESSION['identifiant'] = $_POST['identifiant'];

   }

   /**
    * Verifie si l'utilisateur est déjà connecté.
    * A implémenter sur toutes les pages du site (sauf celle ou pas beoin d'etre connecté)
    * conseil utiliser les variables de session $_SESSION
    */
   function is_loged(){

      //Manière plus courte de l'écrire
      //C'est un opérateur ternaire, vérifie la validité comme pour un if. Si c'est vrai alors renvoie la premiere partie, sinon la seconde.
      //C'est compliqué à lire au début mais ca fait gagner en lisibilité de code quand on a l'habitude
      return isset($_SESSION['identifiant']) ? true : false;
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



// La fonction de connexion n'est pas appelée dans ta page principale du coup ce code n'est jamais exécuté !
   function connexion(){

    $identifiant  = Admin;
    $password     = Admin;

    // empty s'ultilise sur un tableau en entier ex : empty($_POST)
    // Pour vérifier la présence d'une valeur du tableau en particulier, utilise isset($_POST['connexion'])
    // Attention toutefois ici connexion n'a pas de majuscule alors que ton bouton dans ton formulaire en as une
    if (isset($_POST['Connexion'])) {

        $identifiant = $_POST['identifiant'];
        $password = $_POST['password'];
        

      if(empty($_POST['identifiant'] || $_POST['password']))
      {
        // ici l'écho va se faire sur la page en cours, mais ton message disparait car header fait une redirection sur une autre page
        // on verra plus tard comment récupérer le message d'erreur
        echo "Pseudo manquant ou mot de passe manquant !";
        header("location : /connexion.php");
        exit();
      }

      else if (isset($_POST['identifiant']) && isset($_POST['password'])) 
        {
        
          $identifiant === $_POST['identifiant'];
          $password === $_POST['password'];


        // Le session start est à placer au début du code de tes pages. Il sert à récupérer le tableau $_SESSION et maintenir les id de connexion tout au long du parcours de l'utilisateur
        //session_start();
         
          $_SESSION['identifiant'] = $_POST['identifiant'];
          $_SESSION['password'] = $_POST['password'];
          $_SESSION['ouvert'] = true;
          header("location : /page_principale.php");
        }
       
      else{
          header("location : /connexion.php");
          }
        }
  }
?>