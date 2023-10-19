<!DOCTYPE html>
<html lang="fr-CA">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5HQFPLZYQK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-5HQFPLZYQK');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Contenu de la formation  PUB020&amp;nbsp;: WordPress sur Apical." />
    <meta name="author" content="Christiane Lagacé : https://christianelagace.com"> 
    <meta name="csrf-token" id="csrf-token" content="lm4ZOJDlaKp2yxV38IBbtMVJyoAZaWcbYxo42IeX">
    <title>Apical | Formation PUB020 : WordPress</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
    <link rel="manifest" href="../site.html">
    <link rel="mask-icon" href="../safari-pinned-tab.svg" color="#3543a0">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">        
    <meta name="robots" content="noodp" />
    <script data-ad-client="ca-pub-0968524214519104" async src="../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">   
    <link rel="stylesheet" href="chemin-vers-bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
            <a href="#" class="ouvrirpopupchristiane ouvrirpopuprecherche" data-target="#popuprecherche"><img src="https://apical.xyz/medias/commun/Rechercher-MenuSecondaire.svg" alt="Recherche" title="Rechercher"/></a>
            <a href="#" class="ouvrirpopupchristiane ouvrirpopupauthentification" data-target="#popupauthentification"><img src="https://apical.xyz/medias/commun/Login-MenuSecondaire.svg" alt="Authentification" title="" /></a>
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Basculer">
        <span class="navbar-toggler-icon"></span>
        </button>
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
              <a href="#" class="ouvrirpopupchristiane ouvrirpopupauthentification" data-target="#popupauthentification"><img src="https://apical.xyz/medias/commun/Login-MenuSecondaire.svg" alt="Authentification" title=""></a>
            </div>
            </div>
        </div>
    </div>
</nav>
</div>