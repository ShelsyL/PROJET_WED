<?php
/*
  ./app/vues/categories/index.php
  Variables disponibles:
    - $categories ARRAY(ARRAY(id, namen created_at))
 */
 ?>
 <div class="jumbotron">
   <h1>Gestion des catégories</h1>
   <p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>
 </div>
 <div class="">
     <a href="#">Add a category</a>
 </div>
 <table class="table table-striped">
   <thead>
     <tr>
       <th>#</th>
       <th>Name</th>
       <th>Created_at</th>
       <th>Actions</th>
     </tr>
   </thead>
   <tbody>
     <!-- Boucle pour les catégories -->
     <?php foreach ($categories as $categorie): ?>
       <tr>
         <td><?php echo $categorie['id']; ?></td>
         <td><?php echo $categorie['name']; ?></td>
         <td><?php echo $categorie['created_at']; ?></td>
         <td>
           <a href="#">Edit</a> |
           <a href="#">Delete</a>
         </td>
       </tr>
     <?php endforeach; ?>
   </tbody>
 </table>
