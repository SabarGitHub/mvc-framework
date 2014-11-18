<?php

/**
 * Création de l'application
 */
$app = new Core\Application\Application;

/**
 * Installation des chemins
 */
$app->installPath(require __DIR__.'/paths.php');

/**
 * Invoque le lancement de la library
 */
require $app['path.framework'].'/Core/Boot/start.php';

/**
 * Retourne l'application
 */
return $app;
