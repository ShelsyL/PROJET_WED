<?php
/*
	./public/app/controleurs/postsControleur.php
*/

namespace App\Controleurs\TagsControleur;
use \App\Modeles\TagsModele;

function indexByPostIdAction(\PDO $connexion, int $postId) {
  // Je met dans $tags la liste des tags du posts que je demande au modele.
  include_once '../app/modeles/tagsModele.php';
  $tags = TagsModele\findAllByPostId($connexion, $postId);// On ne les veut pas tous mais seulement ceux qui correspondent au post

  // Je charge la vue tags/indexByPostId directement (pas dans $content)
   	// Donc pas de ob_start();
   		include'../app/vues/tags/indexByPostId.php';
   		// include'../app/vues/tags/index.php'; => Si index, ce serait la liste complete des tags
   		// include'../app/vues/tags/indexByPostId.php'; => indexByPostId, permet d'avoir un index qui correspond au poste.
 }
