<?php
/*
  ./app/routeurs/users.php
  ROUTES DES USERS
  $_GET['users']
 */
  // On charge le controleur avant car on doit le charger pour tous les cas ci dessous
  include_once '../app/controleurs/usersControleur.php';

  // Si la valeur de user égal login, je passe par cette route.
  // Sinon ce sera une erreur 404

switch ($_GET['users']) {
  case 'loginForm':
    // FOMULAIRE DE CONNEXION AU BACKOFFICE
    // PATTERN: ?users=login
    // CTRL: usersControleur
    // ACTION: loginForm
	\App\Controleurs\UsersControleur\loginFormAction();
    break;

  default:
    // Je charge un 404
    break;
}
