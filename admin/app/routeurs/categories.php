<?php
/*
  ./admin/app/routeurs/categories.php
 */

 include '../app/controleurs/categoriesControleur.php';
 use \App\Controleurs\CategoriesControleur;


 switch ($_GET['categories']) {

   case 'index':
   // LISTE DES CATEGORIES
   // PATTERN: index.php?categories=index
   // CTRL: catgeoriesControleur
   // ACTION: index
     CategoriesControleur\indexAction($connexion);
     break;

     case 'addForm':
     // AJOUT CATEGORIE : FORMULAIRE
     // PATTERN: index.php?categories=addForm
     // CTRL: catgeoriesControleur
     // ACTION: addForm
       CategoriesControleur\addFormAction($connexion);
       break;

       case 'add':
       // AJOUT CATEGORIE : INSERT - Pour le slug
       // PATTERN: index.php?categories=add
       // CTRL: catgeoriesControleur
       // ACTION: add
         CategoriesControleur\addAction($connexion, [
           'name' => $_POST['name']
         ]);
         break;

}
