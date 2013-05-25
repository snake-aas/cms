@ECHO OFF

IF NOT EXIST "%~dp0\libs\nette\tester" (
ECHO Nette Tester is missing. You can install it using Composer:
ECHO php composer.phar update --dev
EXIT /B 2
)

md "%~dp0/tmp"

php.exe -n "%~dp0\"libs\nette\tester\Tester"\tester.php" -p php-cgi.exe -c "%~dp0tests\php-win.ini" -s %*

rmdir "%~dp0/tmp" /S /Q
