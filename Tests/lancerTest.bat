set /p class= Quel classe tester ? 
phpunit --bootstrap %class%.php --testdox-html html/result-%class%Test.html %class%Test > result.txt
pause

pause

pause
