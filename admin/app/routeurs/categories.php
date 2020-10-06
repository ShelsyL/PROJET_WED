<?php
/*
  ./admin/app/routeurs/categories.php
 */

 include '../app/controleurs/categoriesControleur.php';

 switch ($_GET['categories']) {
   default:
   // LISTE DES CATEGORIES
   // PATTERN: index.php?categories=index
   // CTRL: catgeoriesControleur
   // ACTION: index
     \App\Controleurs\CategoriesControleur\indexAction($connexion);
     break;
}
