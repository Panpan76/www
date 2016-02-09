<?php

function afficherContenu($contenu){
  foreach($contenu as $cle => $element){
    echo '<div>'.$element.'</div>';
  }
}

function listeProjets($dossier, $ajout = false){
  $projets = scandir($dossier);
  foreach($projets as $cle => $projet){
    $test = $dossier.'/'.$projet;
    if(!is_dir($test) || $projet === ".." || $projet === "."){
      unset($projets[$cle]);
    }
  }
  if($ajout){
    $projets[] = '<span onclick="popupFormulaire(\'projet\')">Ajouter un projet</span>';
  }
  return $projets;
}

function listeLibraires($dossier, $ajout = false){
  $librairies = scandir($dossier);
  foreach($librairies as $cle => $librairie){
    if($librairie === ".." || $librairie === "."){
      unset($librairies[$cle]);
    }
  }
  if($ajout){
    $librairies[] = '<a href="test.php">Ajouter une libraire</a>';
  }
  return $librairies;
}

function listeFonctions($dossier, $ajout = false){
  $fonctions = scandir($dossier);
  foreach($fonctions as $cle => $fonction){
    if($fonction === ".." || $fonction === "."){
      unset($fonctions[$cle]);
    }
  }
  if($ajout){
    $fonctions[] = '<a href="test.php">Ajouter une fonction</a>';
  }
  return $fonctions;
}
?>
