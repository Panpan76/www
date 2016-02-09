<div id="barre_nav">
  <div>Accueil</div>
  <div>Projets
    <?php
      $projets = listeProjets("../", true);
      afficherContenu($projets);
    ?>
  </div>
  <div>Librairies
    <?php
      $librairies = listeLibraires("librairies", true);
      afficherContenu($librairies);
    ?>
  </div>
  <div>Fonctions
    <?php
      $fonctions = listeFonctions("fonctions", true);
      afficherContenu($fonctions);
    ?>
  </div>
</div>
