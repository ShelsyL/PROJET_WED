<?php
/*
	./admin/app/routeur.php
	ROUTEUR PRINCIPAL
*/

// ROUTES DES USERS
  // Si il existe une variable d'URL qui s'appelle users
  // Alors je charge le routeur users
if (isset($_GET['user'])):
  include_once '../app/routeurs/user.php';

// ROUTE PAR DEFAUT
// else:
  // include_once '../app/controleurs/usersControleur.php';
  // \App\Controleurs\UsersControleur\loginFormAction();
endif;
