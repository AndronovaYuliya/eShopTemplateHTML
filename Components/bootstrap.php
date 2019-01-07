<?php

require dirname(__FILE__,2). '/vendor/autoload.php';

use CostumLogger\CostumLogger;
use Components\Core\Router;
use Components\Core\Database;

$log=new CostumLogger();
Router::routing();

$log->warning('Costum warning');

$db = Database::getInstance();
$mysqli = $db->getConnection();

$qr = $db->createTables();



