Setlocal enabledelayedexpansion

FOR /R %%i in (*.php) do (
set nom=%%~ni
set chemin=%%~dpi
set chemin=!chemin:~0,-6!
set chemin=!chemin!classes
echo !chemin! >> chemin.txt
echo !nom! >> test.txt
echo phpunit --bootstrap !chemin!\!nom! --testdox-html html/result-!nom!Test.html tests/!nom!Test >> result.txt
)

endlocal
