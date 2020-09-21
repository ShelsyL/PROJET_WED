<?php
/*
	./app/vues/posts/sh.php
	Variables disponibles :
    	- $post : ARRAY(id, title, content, created_at, image, author_id, categorie_id)
*/
?>
<div class="single-post">
   <div class="feature-img">
      <img class="img-fluid" src="assets/img/blog/<?php echo $post['image']; ?>" alt="">
   </div>
   <div class="blog_details">
      <h2><?php echo $post['title'] ?></h2>

      <!-- TAGS LIST -->
        <?php
       // On inclus le controleur tags
        include_once '../app/controleurs/tagsControleur.php';
      // On lance (la liste des tags qui correspondent au post) l'action indexByPostIdAction (index, car c'est une liste de chose mais par PostID)
        \App\Controleurs\TagsControleur\indexByPostIdAction($connexion, $post['id']); // On lui balance la connexion et le postId
      ?>
      
      <p class="excert"><?php echo $post['content'] ?></p>
   </div>
</div>

<div class="blog-author">
   <div class="media align-items-center">
      <img src="assets/img/blog/author.png" alt="">
      <div class="media-body">
         <a href="#">
            <h4>Harvard milan</h4>
         </a>
         <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
            our dominion twon Second divided from</p>
      </div>
   </div>
</div>
