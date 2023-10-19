<div class="boutonsbas">
</div>
</div>
</div>
<div class="push"></div>
</div>
<div class="publicite baspage">
   <div class="pubhebergement">
      <p>Site fièrement hébergé chez <a href="http://www.a2hosting.com/?aid=5ca65a17be949" target="_top">A2 Hosting</a>.</p>
      <p><a href="https://www.a2hosting.com/?aid=5ca65a17be949&amp;bid=ed1c4a67" target="_top"><img src="http://www.a2hosting.com/?aid=5ca65a17be949" alt="" title="" width="728" height="90" /></a><img style="border:0" src="https://affiliates.a2hosting.com/accounts/default1/banners/ed1c4a67.jpg" alt="" title="" width="728" height="90" /></a><img style="border:0" src="https://affiliates.a2hosting.com/scripts/imp.php?aid=5ca65a17be949&amp;bid=ed1c4a67" width="1" height="1" alt="" /></p>
   </div>
</div>
</div>
<footer>
   <div class="container">
      <div class="row">
         <div class="col text-center">© 2023 Tous droits réservés.</div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <div class="col text-center">Conception et développement de la plateforme : <span class="auteur"><a href="https://christianelagace.com/" target="_blank">Christiane Lagacé</a></span></div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <div class="col text-center mt-3">
            <a class="btn btn-primary" href="../contactde8d.html?de=https%3A%2F%2Fapical.xyz%2Fformations%2Fwordpress">Écrivez-moi&nbsp;!</a>
         </div>
      </div>
   </div>
</footer>
<div class="popupchristiane" id="popuprecherche">
   <form method="get" action="https://apical.xyz/rechercherFormationsPagesAjax">
      <input name="rechercher" type="text" id="rechercher" placeholder="Rechercher" required />
      <a id="soumettrerecherche" href="#"><img src="../medias/commun/BoutonRechercher.svg" class="boutonrechercher" title="Rechercher dans tout le site" alt="Soumettre"/></a>
   </form>
   <span class="boutonrefermer"></span>
</div>
<div class="popupchristiane" id="popupauthentification">
   <div id="menuusager" class="cache">
      <p><label id="prenomnomfamille"></label></p>
      <a class="btn btn-secondary" href="../usagers/-1/modification.html">Profil</a>
      <a class="btn btn-secondary" id="deconnecter" href="#">Déconnecter</a>
   </div>
   <div id="formulaireauthentification" >
      <span id="messageauthentification"></span>
      <form method="post" action="https://apical.xyz/usagers/authentifier" class='form-horizontal'>
         <input type="hidden" name="_token" value="lm4ZOJDlaKp2yxV38IBbtMVJyoAZaWcbYxo42IeX">
         <div class="form-group row">
            <label for="login" class="control-label col-sm-5 requis">Usager: </label>
            <div class=col-sm-6>
               <input type="text" class="form-control" name="login" id="login" autofocus>
            </div>
         </div>
         <div class="form-group row">
            <label for="motdepasse" class="control-label col-sm-5 requis">Mot de passe: </label>
            <div class=col-sm-6>
               <input type="password" class="form-control" name="motdepasse" id="motdepasse">
            </div>
         </div>
         <div class="form-group row">
            <div class="control-label col-sm-5"></div>
            <div class="col-sm-6">
               <div class="form-check">
                  <label for="resterconnecte" class="form-check-label" checked>
                  <input class="form-check-input" type="checkbox" id="resterconnecte" name="resterconnecte">
                  Rester connecté
                  </label>
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
   <span class="boutonrefermer"></span>
</div>
<div class="popupchristiane" id="popupbienvenue"></div>
<script src="../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="../js/jquery7fc6.js?id=6a07da9fae934baf3f749e876bbfdd96"></script>
<script src="../js/bootstrapa803.js?id=01dce07671c51d0027f56de26689e9b0"></script>
<script src="../js/appcaf1.js?id=f287b5ddc55a704da9893905227c6dae"></script>
<script src="../js/all39d4.js?id=8cd35d8a531c89f9a609c79b84ab0535"></script>
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

/** auteur : keenan leavey. site creer à l'aide de wordpresse.
 * presentation: salut je m'appel keenan 
 * se site est inspirer de Christiane lagacé
 */