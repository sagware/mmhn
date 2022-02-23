@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../yooper/php-text-analysis/textconsole
php "%BIN_TARGET%" %*
