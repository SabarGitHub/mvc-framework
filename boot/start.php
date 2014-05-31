<?php

/**
 * Création de l'application
 */
$app = new Core\Application\Application;

$petty = '../vendor/petty/framework/src';

require $petty.'/Core/Boot/start.php';

return $app;
