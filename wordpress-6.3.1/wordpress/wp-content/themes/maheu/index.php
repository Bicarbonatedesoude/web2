<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre titre</title>
    <!-- Ajoutez d'autres balises meta, liens vers des styles, etc. si nécessaire -->
</head>
<body>

<?php
// Données dynamiques
$adresseMontreal = "2591 rue Masson, Montréal (QC) H1Y 1V7";
$adresseDrummondville = "225 rue Lindsay, Drummondville (QC) J2C 1N8";
$telephoneMontreal = "514.725.6489";
$telephoneQuebec = "819.477.7716";
$telephoneMontrealSansFrais = "1.877.725.6489";
$telephoneQuebecSansFrais = "1.800.263.7716";
$heureOuverture = "08:00 – 17:00";
?>

<header class="wp-block-template-part">
    <div class="wp-block-group is-layout-constrained wp-container-core-group-layout-1 wp-block-group-is-layout-constrained" style="padding-top: 0px; padding-right: 0px; padding-bottom: 10px; padding-left: 0px">
        <div class="wp-block-columns are-vertically-aligned-center is-layout-flex wp-container-core-columns-layout-3 wp-block-columns-is-layout-flex">
            <!-- ... (Autres divs et balises HTML du header) ... -->
            <div class="wp-block-column is-vertically-aligned-center is-layout-flow wp-block-column-is-layout-flow" style="flex-basis: 100%">
                <div class="wp-block-columns is-layout-flex wp-container-core-columns-layout-1 wp-block-columns-is-layout-flex" style="margin-top: 0px; margin-bottom: 0px">
                    <!-- Première colonne avec l'icône de l'adresse -->
                    <div class="wp-block-column is-vertically-aligned-center intrace-margin-top-n10 is-layout-flow wp-block-column-is-layout-flow" style="flex-basis: 10px">
                        <figure class="wp-block-image size-full is-resized is-style-default"><img decoding="async" src="http://localhost:45649/wp-content/themes/intrace/assets/img/maps.webp" alt="" class="wp-image-171" style="aspect-ratio: 0.6666666666666666; width: 24px; height: auto"></figure>
                    </div>
                    <!-- Deuxième colonne avec l'adresse -->
                    <div class="wp-block-column is-vertically-aligned-center is-layout-flow wp-block-column-is-layout-flow" style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; flex-basis: 185px">
                        <p style="font-size: 12px"><?= $adresseMontreal ?><br><?= $adresseDrummondville ?></p>
                    </div>
                    <!-- ... (Autres colonnes de la première section) ... -->
                </div>
            </div>
            <!-- ... (Autres divs et balises HTML du header) ... -->
        </div>
    </div>
    <!-- ... (Autres parties du header) ... -->
</header>

<!-- Le reste du contenu de votre page -->

</head>
<body>

    <!-- Informations en haut de la page -->
    <div>
        <!-- Adresse -->
        <div>
            <img src="http://localhost:45649/wp-content/themes/intrace/assets/img/maps.webp" alt="" width="24px">
            <p style="font-size:12px">2591 rue Masson,<br>Montréal (QC) H1Y 1V7 </p>
            <p style="font-size:12px">225 rue Lindsay, Drummondville (QC) J2C 1N8</p>
        </div>

        <!-- Téléphone -->
        <div>
            <img src="http://localhost:45649/wp-content/themes/intrace/assets/img/phone.webp" alt="" width="31px">
            <p style="font-size:12px">Montréal : <a href="tel:514-725-6489">514.725.6489</a> / Centre du Québec : <a href="tel:819-447-7716">819.477.7716</a> </p>
            <p style="font-size:12px">Montréal sans frais : <a href="tel:1-877-725-6489">1.877.725.6489</a> / Centre du Québec  sans frais : <a href="tel:1-800-263-7716">1.800.263.7716</a></p>
        </div>

        <!-- Heures d'ouverture -->
        <div>
            <img src="http://localhost:45649/wp-content/themes/intrace/assets/img/clock-2.webp" alt="" width="33px">
            <p style="font-size:12px; text-align:right;">Ouvert : Lundi - Vendredi </p>
            <p style="font-size:12px; text-align:right;">08:00 – 17:00</p>
        </div>
    </div>

    <!-- Séparateur -->
    <hr class="wp-block-separator has-text-color has-intrace-body-text-color has-css-opacity has-intrace-body-text-background-color has-background is-style-wide"/>

    <!-- Groupe de colonnes -->
    <div class="wp-block-group" style="padding-top:30px">
        <div class="wp-block-columns intrace-margin-top-n10">
            <!-- ... Reste du code des colonnes ... -->
        </div>
    </div>


    <div class="container">
    <div class="row">

        <!-- Premier élément -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <figure class="wp-block-image size-large">
                    <img src="https://static.wixstatic.com/media/ba9fcd_347ca3bbf4704b76a7cd345a0df158b2~mv2.jpg/v1/fill/w_723,h_474,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/ba9fcd_347ca3bbf4704b76a7cd345a0df158b2~mv2.jpg" alt="" class="card-img-top">
                </figure>
                <div class="card-body">
                    <h2 class="card-title has-text-align-center has-intrace-primary-color has-text-color has-heading-3-font-size" style="font-style:normal;font-weight:600;letter-spacing:1px">Residentiel</h2>
                    <p class="card-text has-text-align-center has-intrace-body-text-color has-text-color has-heading-6-font-size" style="font-style:normal;font-weight:300"></p>
                    <div class="wp-block-buttons is-content-justification-center is-layout-flex wp-container-core-buttons-layout-3 wp-block-buttons-is-layout-flex">
                        <div class="wp-block-button is-style-custombuttonborder2">
                            <a class="wp-block-button__link wp-element-button" href="#" style="padding-top:12px;padding-bottom:12px">voir les services offerts</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ... (Répétez la structure pour les autres éléments) ... -->

    </div>
</div>

<!-- Le reste du contenu de votre page -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
Dans cet exemple, j'ai ajouté des classes Bootstrap comme col-lg-4 col-md-6 mb-4 pour chaque élément, ce qui signifie que sur un grand écran (lg), chaque élément prendra 4 colonnes sur les 12 disponibles (donc 3 éléments par ligne), et sur un écran moyen (md), chaque élément prendra 6 colonnes sur les 12 disponibles (donc 2 éléments par ligne).

Assurez-vous d'inclure les fichiers CSS et JS de Bootstrap pour que cela fonctionne correctement. Vous pouvez ajuster ces classes en fonction de vos besoins spécifiques.

User
non mais se que j aimmais moi c etait le 3x2
ChatGPT
D'accord, si vous souhaitez avoir une disposition de 3 éléments par ligne en deux lignes, vous pouvez modifier les classes Bootstrap en conséquence. Voici comment vous pourriez ajuster le code :

php
Copy code
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre titre</title>
    <!-- Ajoutez d'autres balises meta, liens vers des styles, etc. si nécessaire -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php
// Ajoutez des variables pour les données dynamiques si nécessaire
?>

<div class="container">
    <div class="row">

        <!-- Premier élément -->
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <figure class="wp-block-image size-large">
                    <img src="https://static.wixstatic.com/media/ba9fcd_347ca3bbf4704b76a7cd345a0df158b2~mv2.jpg/v1/fill/w_723,h_474,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/ba9fcd_347ca3bbf4704b76a7cd345a0df158b2~mv2.jpg" alt="" class="card-img-top">
                </figure>
                <div class="card-body">
                    <h2 class="card-title has-text-align-center has-intrace-primary-color has-text-color has-heading-3-font-size" style="font-style:normal;font-weight:600;letter-spacing:1px">Residentiel</h2>
                    <p class="card-text has-text-align-center has-intrace-body-text-color has-text-color has-heading-6-font-size" style="font-style:normal;font-weight:300"></p>
                    <div class="wp-block-buttons is-content-justification-center is-layout-flex wp-container-core-buttons-layout-3 wp-block-buttons-is-layout-flex">
                        <div class="wp-block-button is-style-custombuttonborder2">
                            <a class="wp-block-button__link wp-element-button" href="#" style="padding-top:12px;padding-bottom:12px">voir les services offerts</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ... (Répétez la structure pour les autres éléments) ... -->

    </div>
</div>

<!-- Le reste du contenu de votre page -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
