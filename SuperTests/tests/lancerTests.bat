
Setlocal enabledelayedexpansion

  FOR /R %%i in (../classes/*.php) do (
    set nom=%%~ni
    set chemin=%%~dpi
    set chemin=!chemin:~0,-6!classes\!nom!.php
    phpunit --coverage-html html --bootstrap !chemin! --testdox-html html/result-!nom!Test.html !nom!Test >> result.txt
  )

endlocal