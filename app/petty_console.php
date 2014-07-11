<?php

require __DIR__.'/../boot/autoload.php';

$app = require __DIR__.'/../boot/start.php';

$app->runConsole();
