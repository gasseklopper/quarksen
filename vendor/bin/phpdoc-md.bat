@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../victorjonsson/markdowndocs/bin/phpdoc-md
php "%BIN_TARGET%" %*
