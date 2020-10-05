<?php
/*
	./public/app/modeles/categoriesModele.php
*/
namespace App\Modeles\CategoriesModele;

/**
 * [findAllByPostId description]
 * @param  PDO   $connexion [description]
 * @return array            [description]
 */
function findAll (\PDO $connexion) :array {
	$sql = "SELECT *
    		  FROM categories
			    ORDER BY name ASC;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC); // On retourne un tableau indéxé de tableau associatif dans $catégories (./app/vues/template/partials/_aside.php)
}
