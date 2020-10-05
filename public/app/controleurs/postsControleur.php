<?php
/*
	./public/app/controleurs/postsControleur.php
*/

namespace App\Controleurs\PostsControleur;
use \App\Modeles\PostsModele;

/**
 * [indexAction description]
 * @param  PDO    $connexion [description]
 * @return [type]            [description]
 */

// Je met dans $posts la liste des 10 derniers posts que je demande au modele.
function indexAction(\PDO $connexion) {
  include_once '../app/modeles/postsModele.php';
  $posts = PostsModele\findAll($connexion);

  // Je charge la vue post/index dans $content
  GLOBAL $content;
  ob_start();
  		include'../app/vues/posts/index.php';
  	$content = ob_get_clean();
}

/**
 * [showAction description]
 * @param  PDO    $connexion [description]
 * @param  int    $id        [description]
 * @return [type]            [description]
 */

// Création de la function showAction
function showAction(\PDO $connexion, int $id) {// Qui va récupérer une connexion PDO et un entier $id
  // Je mets dans $post les infos du post que je demande au modèle
  include_once '../app/modeles/postsModele.php';
  $post = PostsModele\findOneById($connexion, $id); // Je vais chercher un par son identifiant, et je lui balance l'identifiant càd le $id qu'on a récupérer

  // Je mets dans $author les infos de l'auteur du post que je demande au modèle authorModele
    include_once '../app/modeles/authorsModele.php';
    $author = \App\Modeles\AuthorsModele\findOneById($connexion, $post['author_id']); // Je vais chercher un par son identifiant.


  // Je charge la vue show dans $content
   GLOBAL $content, $title; // Objectif => Modifier les variables donc GLOBAL
   $title = $post['title']; // Dans $title, on met le titre du post, l'info vient de la db
   // Dans $content, on va mettre une vue => Donc on doit passer par un ob_start
   ob_start();
   	include '../app/vues/posts/show.php'; // Je charge la vue
   $content = ob_get_clean(); // Je met cette vue dans $content
 }
