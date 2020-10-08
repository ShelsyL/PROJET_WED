<?php
/*
  ./admin/app/routeurs/postsRouteur.php
  ROUTES DES POSTS
  Il existe un $_GET['posts']
 */

use App\Controleurs\PostsControleur;
include_once '../app/controleurs/postsControleur.php';


switch ($_GET['posts']) {

  /* LISTE DES POSTS
      PATTERN: index.php?posts
      CTRL: postsControleur
      ACTION: index
    */

    default:
     PostsControleur\indexAction($connexion);
     break;

}
