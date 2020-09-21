<?php
/*
	./app/modeles/tagsModele.php
*/
namespace App\Modeles\TagsModele;

/**
 * [findAllByPostId description]
 * @param  PDO   $connexion [description]
 * @param  int   $postid    [description]
 * @return array            [description]
 */

function findAllByPostId (\PDO $connexion, int $postId) :array {
	$sql = "SELECT *
    		  FROM tags t
          JOIN posts_has_tags pht ON t.id = pht.tag_id
          WHERE pht.post_id = :postId
			    ORDER BY t.name ASC;";
  // On a un paramètre extérieur, donc on doit faire un prepare
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':postId', $postId, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC); // On retourne un tableau indéxé de tableau associatif
}
