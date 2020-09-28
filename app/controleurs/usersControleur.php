<?php
/*
  ./app/controleurs/usersControleur.php
 */
  namespace App\Controleurs\UsersControleur;
  //use \App\Modeles\UsersModele;

function loginFormAction () {
  GLOBAL $content;
  ob_start();
    include '../app/vues/users/loginForm.php';
  $content = ob_get_clean();
}
