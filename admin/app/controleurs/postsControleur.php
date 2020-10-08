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

  function addFormAction(\PDO $connexion) {
    // Je vais chercher la liste des auteurs
    include_once '../app/modeles/auteursModele.php';
    $authors = \App\Modeles\AuteursModele\findAll($connexion);
    // Je vais chercher la liste des catégories
    include_once '../app/modeles/categoriesModele.php';
    $categories = \App\Modeles\CategoriesModele\findAll($connexion);

    // Je charge la vue addForm (le formulaire) dans $content
    GLOBAL $content, $title;
    $title = "Ajout d'un post";
    ob_start();
      include '../app/vues/posts/addForm.php';
    $content = ob_get_clean();

  }
