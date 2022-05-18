<?php

require_once __DIR__.'/lib/ship.php';
require_once __DIR__.'/lib/battleManager.php';
require_once __DIR__.'/lib/shipLoader.php';
require_once __DIR__.'/lib/battleResult.php';

// DB CONFIGURATION INFO
$configuration = array(
    'db_dsn' =>'mysql:host=localhost;dbname=OOPShips',
    'db_user' => 'root',
    'db_pass' => '',
);