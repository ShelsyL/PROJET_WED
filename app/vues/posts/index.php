<?php
/*
	./app/vues/posts/index.php
	Variables disponibles :
    	- $posts : ARRAY(ARRAY(id, title, content, created_at, image, author_id, categorie_id))
*/
?>

<div class="blog_left_sidebar">

<!-- LISTE DES ARTICLES/POSTS -->
  <?php
    foreach ($posts as $post):
      $created_at = strtotime($post['created_at']); // On transforme la date en champs de type date
      ?>

    <!-- <?php var_dump($post); ?> -->

    <article class="blog_item">
        <div class="blog_item_img">
            <img class="card-img rounded-0" src="assets/img/blog/<?php echo $post['image'] ?>" alt="">
            <a href="#" class="blog_item_date">
                <h3><?php echo date('d', $created_at) ?></h3>
                <p><?php echo date('M', $created_at) ?></p>
            </a>
        </div>

        <div class="blog_details">
            <a class="d-inline-block" href="single-blog.html">
                <h2><?php echo $post['title'] ?></h2>
            </a>
            <p><?php echo $post['content'] ?></p>
            <ul class="blog-info-link">
                <li><a href="#"><i class="fa fa-user"></i><?php echo $post['categorie_name'] ?></a></li>
            </ul>
        </div>
    </article>
  <?php endforeach; ?>

    <nav class="blog-pagination justify-content-center d-flex">
        <ul class="pagination">
            <li class="page-item">
                <a href="#" class="page-link" style="width: auto; padding: 0 1em;">More posts</a>
            </li>
        </ul>
    </nav>
</div>
