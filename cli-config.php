<?php

require 'boot/autoload.php';
require 'boot/start.php';

$entityManager = $app->setupDoctrine();

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
