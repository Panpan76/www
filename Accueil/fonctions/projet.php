<?php

function nouveauProjet($nom){
  mkdir('../../'.$nom);
  mkdir('../../'.$nom.'/classes');
  mkdir('../../'.$nom.'/tests');
  mkdir('../../'.$nom.'/tests/html');
  $f = fopen('../../'.$nom.'/tests/lancerTests.bat', "a+");
  fputs($f, "
Setlocal enabledelayedexpansion

  FOR /R %%i in (../classes/*.php) do (
    set nom=%%~ni
    set chemin=%%~dpi
    set chemin=!chemin:~0,-6!classes\!nom!.php
    phpunit --coverage-html html --bootstrap !chemin! --testdox-html html/result-!nom!Test.html !nom!Test >> result.txt
  )

endlocal");
  fclose($f);
}

?>
