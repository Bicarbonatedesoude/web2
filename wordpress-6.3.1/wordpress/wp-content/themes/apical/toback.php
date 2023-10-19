<!DOCTYPE html>
<html lang="fr-CA">
<head>
  <meta http-equiv="content-type" content="text/html; charset=us-ascii">
  <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Contenu de la formation PUB020&amp;nbsp;: WordPress sur Apical.">
  <meta name="author" content="Christiane Lagacé : https://christianelagace.com">
  <meta name="csrf-token" id="csrf-token" content="lm4ZOJDlaKp2yxV38IBbtMVJyoAZaWcbYxo42IeX">
  <title>Apical | Formation PUB020 : WordPress</title>
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="manifest" href="site.html">
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#3543a0">
  <meta name="msapplication-TileColor" content="#2b5797">
  <meta name="theme-color" content="#ffffff">
  <meta name="robots" content="noodp">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet"><!-- Inclure Bootstrap CSS (Assurez-vous que le chemin du fichier est correct) -->
  
  <!-- Inclure Bootstrap CSS (Assurez-vous que le chemin du fichier est correct) -->
<link rel="stylesheet" href="chemin-vers-bootstrap.min.css">

<!-- Inclure jQuery (Nécessaire pour Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Inclure Bootstrap JavaScript (Assurez-vous que le chemin du fichier est correct) -->
<script src="chemin-vers-bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body id="messtyles">
  <div class="aucunepubauto">
    <div class="logo fix-menu" id="zoneentete">
      <div class="container">
        <div class="avant"></div>
        <div class="apres">
          <div id="menuicones" class="porteuroffset fix-menu" data-verticaloffset="47" data-horizontaloffset="0">
            <a href="../../../wp-admin/index.php"><img src="https://apical.xyz/medias/commun/Accueil-MenuSecondaire.svg" alt="Accueil" title="Accueil"></a> 
            <a href="#" class="ouvrirpopupchristiane ouvrirpopuprecherche" data-target="#popuprecherche"><img src="https://apical.xyz/medias/commun/Rechercher-MenuSecondaire.svg" alt="Recherche" title="Rechercher"></a>
             <a href="#" class="ouvrirpopupauthentification" data-target="#popupauthentification"><img src="https://apical.xyz/medias/commun/Login-MenuSecondaire.svg" alt="Authentification" title="Aide"></a>
          
          
            </div>
        </div>
        <div class="centre">
          <a href="#"><img src="https://apical.xyz/medias/fr/LogoApical-blanc.svg" alt="Apical, ma plateforme d'apprentissage"></a>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light py-lg-3" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Apical</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
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
          </ul>
          <div class="iconespourmobile">
            <div id="menuicones" class="porteuroffset fix-menu" data-verticaloffset="47" data-horizontaloffset="0">
              <a href="#"><img src="https://apical.xyz/medias/commun/Accueil-MenuSecondaire.svg" alt="Accueil" title="Accueil"></a> 
              <a href="#" class="ouvrirpopupchristiane ouvrirpopuprecherche" data-target="#popuprecherche"><img src="https://apical.xyz/medias/commun/Rechercher-MenuSecondaire.svg" alt="Recherche" title="Rechercher"></a> 
              <a href="#" class="ouvrirpopupchristiane ouvrirpopupauthentification" data-target="#popupauthentification"><img src="https://apical.xyz/medias/commun/LoginFait-MenuSecondaire.svg" alt="Authentification" title=""></a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <div class="container">
    <div id="listefavoris"></div>
    <div id="dernierespagesvisitees"></div>
    <div class="contenuprincipal">
      <hr class="divider">
      <h1 id="titreh1" class="text-center">Formation PUB020 : WordPress, 2023</h1>
      <hr class="divider bas">
      <div class="contenu">
        <div id="chapitresformation" data-formation-id="36">
          <div class="boutonshaut">
            <div class="float-left"></div>
            <div class="float-right">
            <a id="developperreduire" href="#" class="btn btn-secondary" role="button" data-developper="Tout développer" data-reduire="Tout réduire">Tout développer</a>
            </div>
            <div class="push"></div>
          </div>
          <div id="dragchapitres">
            <div id="informationDiv"></div>
            
            
             <!-- Assurez-vous d'ajouter ce code dans une balise script avant la fermeture du corps </body> -->
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
        <a href="#" onclick="toggleComment(<?php echo esc_attr($postID); ?>);">
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

        
        <div class="boutonsbas">
      </div>
    </div>
  </div>
  <div class="push"></div>
  <div class="publicite baspage">
    <div class="pubhebergement">
    <p>Site fièrement hébergé chez <a href="http://www.a2hosting.com/?aid=5ca65a17be949" target="_top">A2 Hosting</a>.
    <p><a href="https://www.a2hosting.com/?aid=5ca65a17be949&amp;bid=ed1c4a67" target="_top"><img src="https://affiliates.a2hosting.com/accounts/default1/banners/ed1c4a67.jpg" alt="" title="" width="728" height="90" /></a><img style="border:0" src="https://affiliates.a2hosting.com/scripts/imp.php?aid=5ca65a17be949&amp;bid=ed1c4a67" width="1" height="1" alt="" /></p>
 </div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col text-center">
          © 2023 Tous droits réservés.
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col text-center">
          Conception et développement de la plateforme : <span class="auteur"><a href="https://christianelagace.com/" target="_blank">Christiane Lagacé</a></span>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col text-center mt-3">
          <a class="btn btn-primary" href="contactde8d.html?de=https%3A%2F%2Fapical.xyz%2Fformations%2Fwordpress">Écrivez-moi&nbsp;!</a>
        </div>
      </div>
    </div>
  </footer>
  <div class="popupchristiane" id="popuprecherche">
    <form method="get" action="https://apical.xyz/rechercherFormationsPagesAjax">
      <input name="rechercher" type="text" id="rechercher" placeholder="Rechercher" required=""> <a id="soumettrerecherche" href="#"><img src="" class="boutonrechercher" title="Rechercher dans tout le site" alt="Soumettre"></a>
    </form>
  </div>
  <div class="popupchristiane" id="popupauthentification">
    <div id="menuusager">
      <p><label id="prenomnomfamille"></label></p><a class="btn btn-secondary" href="usagers/-1/modification.html">Profil</a> <a class="btn btn-secondary" id="deconnecter" href="#">Déconnecter</a>
    </div>
    <div id="formulaireauthentification">
      <span id="messageauthentification"></span>
      <form method="post" action="https://apical.xyz/usagers/authentifier" class='form-horizontal'>
        <input type="hidden" name="_token" value="lm4ZOJDlaKp2yxV38IBbtMVJyoAZaWcbYxo42IeX">
        <div class="form-group row">
          <label for="login" class="control-label col-sm-5 requis">Usager:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="login" id="login" autofocus="">
          </div>
        </div>
        <div class="form-group row">
          <label for="motdepasse" class="control-label col-sm-5 requis">Mot de passe:</label>
          <div class="col-sm-6">
            <input type="password" class="form-control" name="motdepasse" id="motdepasse">
          </div>
        </div>
        <div class="form-group row">
          <div class="control-label col-sm-5"></div>
          <div class="col-sm-6">
            <div class="form-check">
              <label for="resterconnecte" class="form-check-label" checked><input class="form-check-input" type="checkbox" id="resterconnecte" name="resterconnecte"> Rester connecté</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="control-label col-sm-5"></div>
          <div class="col-sm-6">
            <a id="soumettreauthentification" class="btn btn-secondary" href="#">Soumettre</a>
          </div>
        </div>
        <div class="form-group row">
          <div class="control-label col-sm-5"></div>
          <div class="col-sm-6">
            <a href="https://apical.xyz/usagers/creation">Nouvel usager</a>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="popupchristiane" id="popupbienvenue"></div>
  <script>


        $(function () {
            $('.reinitialiserCookiesMenuFormations').click(function (event) {
                event.preventDefault();
                var jqxhr = $.get("../reinitialiserCookiesMenuFormations.html")
                    .done(function (response, textStatus, jqXHR) {
                        $('.consulterecemment').remove();
                        afficherPopupInformation('La liste des dernières formations consultées a été réinitialisée avec succès !');
                    })
                    .fail(function (jqXHR, textStatus, errorThrown) {
                        afficherPopupErreur('Un problème empêche la réinitialisation de la liste des dernières formations consultées.');
                    });
            });
        });
  </script> 



<script>
$(document).ready(function() {
    // Fonction pour basculer l'affichage de tous les commentaires
    function toggleAllComments() {
        $(".collapse.comment").toggleClass("show");
    }

    // Gestionnaire de clic pour le bouton "Tout développer"
    $("#developperreduire").click(function(e) {
                e.preventDefault();
                toggleAllComments();
                var newText = ($(this).text() === 'Tout développer') ? 'Tout réduire' : 'Tout développer';
                $(this).text(newText);
            });
        });
</script>

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
        var postID = titre.getAttribute('data-id'); // Récupère l'ID du post depuis un attribut data
        titre.addEventListener('click', function() {
            toggleComment(postID);
        });
    });


</script>

</body>
</html>
