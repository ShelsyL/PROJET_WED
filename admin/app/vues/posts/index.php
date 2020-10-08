<?php
/*
  ./admin/app/vues/posts/index.php
  Variables disponibles:
    - $posts ARRAY(ARRAY(id, title, content, created_at, image, author_id, categori_id))
 */
 ?>
 <!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #708090;
  color: white;
}
h1 {
  padding-top: 6rem;
}
</style>
</head>

<h1 ><?php echo $title ?></h1>
<div><a href="posts/add/form" style="">Ajouter un post</a></div>

<table id="customers">
  <thead>
    <tr>
      <th>Id</th>
      <th>Titre</th>
      <th>DatePublication</th>
      <th>Texte</th>
      <th>Media</th>
      <th>Auteur</th>
      <th>Modifier | Supprimer</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($posts as $post): ?>
      <tr>
        <td><?php echo $post['id']; ?></td>
        <td><?php echo $post['title']; ?></td>
        <td><?php echo $post['created_at']; ?></td>
        <td><?php echo \Noyau\Fonctions\tronquer($post['content'], 50); ?></td>
        <td><img src="<?php echo $post['image']; ?>" alt="" style="width: 50;"></td>
        <td><?php echo $post['firstname']; ?> <?php echo $post['lastname']; ?></td>
        <td>
          <a href="#">Edit</a> |
          <a href="#">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>

  </tbody>
</table>
