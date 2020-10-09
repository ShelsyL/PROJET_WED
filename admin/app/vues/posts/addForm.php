<?php
/*
  ./admin/app/vues/posts/addForm.php
  Variables disponibles:
    -$authors: ARRAY(ARRAY(id, firstname, lastname, biography, avatar, created_at))
    -$categories: ARRAY(ARRAY(id, name, created_at))
*/
 ?>
 <style>
 h1 {
   padding-top: 6rem;
 }
 </style>

<h1 ><?php echo $title ?></h1>
<div><a href="posts">Retour vers la liste des posts</a></div>

<form action="posts/add/insert" method="post">
  <fieldset>

    <!-- DONEES DU POST -->
    <legend>Données du posts</legend>
    <div>
      <label for="title">Titre</label>
      <input type="text" name="title" id="title" />
    </div>
    <div>
      <label for="content">Texte</label>
      <textarea name="content" id="content"></textarea>
    </div>
    <div>
      <label for="media">Media</label>
      <input type="file" name="media" id="media" />
    </div>

    <!-- MENU DEROULANT DYNAMIQUE -->
    <div>
      <label for="author">Auteur</label>
        <select name="author" id="author">
          <?php foreach ($authors as $author): ?>
            <option value="<?php echo $author['id']; ?>"><?php echo $author['firstname']; ?> <?php echo $author['lastname'] ?></option>
          <?php endforeach; ?>
        </select>
    </div>
    <!-- /FIN MENU DEROULANT DYNAMIQUE -->
  </fieldset>

  <fieldset>
    <legend>Catégorie</legend>
    <!-- LISTE DYNAMIQUE DE CHECKBOXES -->
    <div>
      <?php foreach ($categories as $categorie): ?>
        <input type="checkbox" name="<?php echo $categorie['name']; ?>" id=<?php echo $categorie['id']; ?> />
        <label for="<?php echo $categorie['name']; ?>"><?php echo $categorie['name']; ?></label><br/>
      <?php endforeach; ?>

    </div>
    <!-- /FIN LISTE DYNAMIQUE DE CHECKBOXES -->
  </fieldset>

<div>
  <input type="submit" />
</div>
</form>
