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
    AJOUT D'UN POST: INSERT
    PATTERN: index.php?posts=addInsert
    CTRL: postsControleur
    ACTION: addInsert
  */
  case 'addInsert':
  PostsControleur\addInsertAction($connexion, [  // On envois la connexion et un tableau qui reprend l'ensemble des éléments du formulaire
    // Le formulaire est envoyé par la méthode POST
    'title'      => $_POST['title'],
    'author'     => $_POST['author'],
    'content'    => $_POST['content']
  ]);
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
