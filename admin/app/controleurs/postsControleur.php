<?php
/*
  ./admin/app/controleurs/postsControleur.php
 */
 namespace App\Controleurs\PostsControleur;
 use \App\Modeles\PostsModele;

 function indexAction(\PDO $connexion) {
   // Je mets la liste des posts dans $posts
     include_once '../app/modeles/postsModele.php';
     $posts = postsModele\findAll($connexion);
   // Je charge la vue index dans $content
     GLOBAL $content, $title;
     $title = "Liste des posts";
     ob_start();
       include '../app/vues/posts/index.php';
     $content = ob_get_clean();
 }
