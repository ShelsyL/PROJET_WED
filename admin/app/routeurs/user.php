<?php
/*
  ./admin/app/routeurs/usersRouteur.php
  ROUTES DES USERS
 */
// use \App\Controleurs\UserContoleur;
include '../app/controleurs/userControleur.php';

switch ($_GET['user']) {
  case 'logout':
  // DECONNEXION DU USER
    // LOGOUT
    // PATTERN: index.php?user=logout
    // CTRL: usersControleur
    // ACTION: logout
    \App\Controleurs\UserControleur\logoutAction();
    break;

    default:
     // code...
     break;

}
