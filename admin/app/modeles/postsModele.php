<?php
/*
    ./app/modeles/postsModele.php
 */
namespace App\Modeles\PostsModele;


function findAll(\PDO $connexion) :array {
  $sql = "SELECT *, posts.id as postID
          FROM posts
          JOIN authors ON posts.author_id = authors.id
          ORDER BY posts.id DESC
          LIMIT 5;";

          $rs = $connexion->query($sql);
          return $rs->fetchAll(\PDO::FETCH_ASSOC);
}


function insertOne(\PDO $connexion, array $data) :int {
  $sql = "INSERT INTO posts
          SET title      = :title,
              content    = :content,
              author_id  = :author,
              created_at = NOW();";

          $rs = $connexion->prepare($sql);
          $rs->bindValue(':title',   $data['title'],   \PDO::PARAM_STR);
          $rs->bindValue(':content', $data['content'], \PDO::PARAM_STR);
          $rs->bindValue(':author',  $data['author'],  \PDO::PARAM_INT); // INT car c'est l'identifiant
          $rs->execute();
          return $connexion->lastInsertId(); // Renvois le numéro de l'enregistrement qui vient d'etre ajouté dans la db
}
