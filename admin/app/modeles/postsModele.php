<?php
/*
    ./app/modeles/postsModele.php
 */
namespace App\Modeles\PostsModele;


function findAll(\PDO $connexion) :array {
  $sql = "SELECT *, posts.id as postID
          FROM posts
          JOIN authors ON posts.author_id = authors.id
          ORDER BY posts.created_at DESC
          LIMIT 5;";

          $rs = $connexion->query($sql);
          return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
