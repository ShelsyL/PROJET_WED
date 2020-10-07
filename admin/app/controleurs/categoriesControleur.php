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


// Permet d'jouter une categorie => Va vers la page d'ajout d'une categorie
function addFormAction(){
  // Je charge la vue index dans $content
    GLOBAL $content, $title;
    $title = "Ajout d'une catégorie";
    ob_start();
      include '../app/vues/categories/addForm.php';
    $content = ob_get_clean();
}


// Permet d'ajouter une catégorie sur la page d'ajout et de l'envoyer vers le formulaire
function addAction(\PDO $connexion, array $data = null) {
  // Je demande au modèle d'ajouter la catégories
  include_once '../app/modeles/categoriesModele.php';
  $id = CategoriesModele\insert($connexion, $data); // Lorsqu'on ajoute une categorie, on ajoute un id au formulaire

  // Je redirige vers la liste des categories vers admin/categories
  header('location: ' . BASE_URL_ADMIN  . 'categories');
}


// Permet de supprimer une catégorie via id
function deleteAction(\PDO $connexion, int $id) {
  // Je demande au modèle de de supprimer la categorie
  include_once '../app/modeles/categoriesModele.php';
  $return = CategoriesModele\delete($connexion, $id); //$return car il ne renvois pas d'id, on aura un boolen (true(1), false(0))

  // Je redirige vers la liste des categories
  header('location: ' . BASE_URL_ADMIN  . 'categories');
}
