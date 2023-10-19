<?php get_header(); ?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
   </head>
   <body>
      <div class="container">
      <div id="listefavoris"></div>
      <div id="dernierespagesvisitees"></div>
      <div class="contenuprincipal">
      <hr class="divider">
      <h1 id="titreh1" class="text-center">   page des perdus</h1>
      <hr class="divider bas">
      <?php
         // Emplacement de votre menu personnalisé (assurez-vous que cet emplacement existe)
         $menu_location = 'apical';
         // Récupère le menu par son emplacement
         $menu_items = wp_get_nav_menu_items($menu_location);
         // Parcourt les éléments du menu
         foreach ($menu_items as $item) {
             $class = '';
             if ($item->current) {
                 $class = 'active';
             }
         ?>
      <a href="%3C?php%20echo%20esc_url($item-%3Eurl);%20?%3E" class="nav-link text-uppercase text-expanded &lt;?php echo esc_attr($class); ?&gt;"><?php echo esc_html($item->title); ?></a>
      </li><?php
         }
         ?>
   </body>
</html>