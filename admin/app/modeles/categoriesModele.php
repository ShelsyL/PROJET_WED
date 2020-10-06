<?php
/*
  ./admin/app/modeles/categoriesModele.php
 */
 namespace App\Modeles\CategoriesModele;

 function findAll(\PDO $connexion) {
   $sql = "SELECT *
           FROM categories
           ORDER BY name ASC;";
   $rs = $connexion->query($sql);
   return $rs->fetchAll(\PDO::FETCH_ASSOC);
 }

// function avec slug
//  function insert(\PDO $connexion, array $data = null){
//    $sql = " INSERT INTO categories
//             SET titre = :titre,
//                 slug  = :slug;";
//             $rs = $connexion->prepare($sql);
//             $rs->bindValue(':titre', $data['titre'], \PDO::PARAM_STR);
//             $rs->bindValue(':slug', \Noyau\Fonctions\slugify($data['titre']), \PDO::PARAM_STR);
//             $rs->execute();
//             return $connexion->lastInsertId();
//  }

 function insert(\PDO $connexion, array $data = null){
   $sql = " INSERT INTO categories
            SET name = :name;";
            $rs = $connexion->prepare($sql);
            $rs->bindValue(':name', $data['name'], \PDO::PARAM_STR);
            $rs->execute();
            return $connexion->lastInsertId();
 }
