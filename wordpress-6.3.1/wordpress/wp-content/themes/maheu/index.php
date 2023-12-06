<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="chemin/vers/style.css"> <!-- Ajoutez le chemin correct vers votre fichier style.css -->
    <title>Ma première page PHP</title>
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

</body>
</html>
