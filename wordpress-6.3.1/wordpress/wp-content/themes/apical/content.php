<div class="container">
<div id="listefavoris"></div>
<div id="dernierespagesvisitees"></div>
<div class="contenuprincipal">
<hr class="divider">
<h1 id="titreh1" class="text-center">    Formation PUB020&nbsp;: WordPress, 2023</h1>
<hr class="divider bas">
<div class="contenu">
<div id="chapitresformation" data-formation-id="36">
   <div class="boutonshaut">
      <div class="float-left">
      </div>
      <div class="float-right">
         <a id="developperreduire" href="#" class="btn btn-secondary" role="button" data-developper="Tout développer" data-reduire="Tout réduire">Tout développer</a>
      </div>
      <div class="push"></div>
   </div>
   <div id="dragchapitres">
      <script>
         // Fonction pour basculer l'affichage du commentaire
         function toggleComment(postID) {
         var commentaire = document.getElementById('commentaire-' + postID);
         
         if (commentaire.style.display === 'none' || commentaire.style.display === '') {
         commentaire.style.display = 'block';
         } else {
         commentaire.style.display = 'none';
         }
         }
         
         // Ajoutez un gestionnaire d'événements de clic à chaque titre
         var titres = document.querySelectorAll('.titrealigneboutons');
         titres.forEach(function(titre) {
         var postID = titre.getAttribute('data-postid'); // Récupère l'ID du post depuis un attribut data
         titre.addEventListener('click', function() {
         toggleComment(postID);
         });
         });
      </script>
      <?php while (have_posts()) : the_post(); ?>
      <?php
         $postID = get_the_ID(); // Récupère l'ID du post
         $titrePost = get_the_title(); // Récupère le titre du post
         $commentairePost = get_the_excerpt(); // Récupère le commentaire du post
         ?>
      <div class="card border-bottom-0">
         <div class="card-header">
            <a href="" onclick="toggleComment(<?php echo esc_attr($postID); ?>);">
            <span class="titrealigneboutons" data-postid="<?php echo esc_attr($postID); ?>" data-toggle="commentaire">
            <?php echo esc_html($titrePost); ?>
            </span>
            </a>
            <div class="float-right boutonsalignes"></div>
         </div>
         <div class="collapse" aria-expanded="false" id="commentaire-<?php echo esc_attr($postID); ?>"data-postid="<?php echo esc_attr($postID); ?>">
            <div class="card-body aucune-marge-haut-bas listefichesajax">
               <span><?php echo esc_html($commentairePost); ?></span>
            </div>
         </div>
      </div>
      <?php endwhile; ?>
   </div>
</div>