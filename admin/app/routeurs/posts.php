<?php
/*
  ./admin/app/routeurs/postsRouteur.php
  ROUTES DES POSTS
  Il existe un $_GET['posts']
 */

use App\Controleurs\PostsControleur;
include_once '../app/controleurs/postsControleur.php';


switch ($_GET['posts']) {
  /*
    FORMULAIRE D'AJOUT D'UN POST
    PATTERN: index.php?posts=addForm
    CTRL: postsControleur
    ACTION: addForm
  */
  case 'addForm':
  PostsControleur\addFormAction($connexion); // Quand on affiche le formulaire, on a besoin de la base de donnée => Besoin de la liste des auteurs pour le menu déroulant.=> Donc besoin de la connexion
  break;

  /*
    LISTE DES POSTS
    PATTERN: index.php?posts
    CTRL: postsControleur
    ACTION: index
  */
    default:
     PostsControleur\indexAction($connexion);
     break;

}
