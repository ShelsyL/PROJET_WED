<?php
/*
	./admin/app/routeur.php
	ROUTEUR PRINCIPAL
*/

if (isset($_GET['categories'])) :
 include_once '../app/routeurs/categories.php';

// ROUTES DES USERS
 // Si il existe une variable d'URL qui s'appelle users
 // Alors je charge le routeur users
elseif (isset($_GET['user'])):
  include_once '../app/routeurs/user.php';
endif;
