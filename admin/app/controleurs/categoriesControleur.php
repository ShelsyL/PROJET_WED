<?php
/*
  ./admin/app/controleurs/categoriesControleur.php
 */
 namespace App\Controleurs\CategoriesControleur;
 use \App\Modeles\CategoriesModele;

 function indexAction(\PDO $connexion) {
   // Je mets la liste des categories dans $categories
     include_once '../app/modeles/categoriesModele.php';
     $categories = CategoriesModele\findAll($connexion);
   // Je charge la vue index dans $content
     GLOBAL $content, $title;
     $title = "Gestion des catégories";
     ob_start();
       include '../app/vues/categories/index.php';
     $content = ob_get_clean();

 }

// Permet d'jouter une categorie
function addFormAction(){
  // Je charge la vue index dans $content
    GLOBAL $content, $title;
    $title = "Ajout d'une catégorie";
    ob_start();
      include '../app/vues/categories/addForm.php';
    $content = ob_get_clean();

}

function addAction(\PDO $connexion, array $data = null) {
  // Je demande au modèle d'ajouter la catégories
  include_once '../app/modeles/categoriesModele.php';
  $id = CategoriesModele\insert($connexion, $data); // Un insert me ramenera un id

  // Je redirige vers la liste des categories
  header('location: ' . BASE_URL_ADMIN  . 'categories');
}
