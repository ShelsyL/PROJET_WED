<?php
/*
  ./admin/app/controleurs/categoriesControleur.php
 */
 namespace App\Controleurs\CategoriesControleur;

 function indexAction(\PDO $connexion) {
   // Je mets la liste des categories dans $categories
     include_once '../app/modeles/categoriesModele.php';
     $categories = \App\Modeles\CategoriesModele\findAll($connexion);
   // Je charge la vue index dans $content
     GLOBAL $content, $title;
     ob_start();
       include '../app/vues/categories/index.php';
     $content = ob_get_clean();
     $title = "Liste des catégories";
 }
