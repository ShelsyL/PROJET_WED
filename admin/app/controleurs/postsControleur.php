<?php
/*
  ./admin/app/controleurs/postsControleur.php
 */
 namespace App\Controleurs\PostsControleur;
 use \App\Modeles\PostsModele;

 function indexAction(\PDO $connexion) {
   // Je mets la liste des posts dans $posts
     include_once '../app/modeles/postsModele.php';
     $posts = PostsModele\findAll($connexion);
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



    function addInsertAction(\PDO $connexion, array $data) { // On récupere la connexion et un tableau qui reprend les données du formulaire
      // Je demande au modele d'ajouter le post
      include_once '../app/modeles/postsModele.php';
      $id = PostsModele\insertOne($connexion, $data); // On le nomme id car quand on fait un insert, on nous renvois généralement in identifiant.
      // Je redirige vers la liste des posts => On includ pas du vue, une fois ajouter on redirige vers la liste des post
var_dump($id); die();
      // TEST => var_dump($id); die(); // var_dump($data); die();
      header('location:' . BASE_URL_ADMIN . 'posts');
    }
