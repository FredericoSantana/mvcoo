<?php
require_once __DIR__ . '/source/autoload.php';

use Source\Database\Connect;

$pdo = Connect::getInstance();

var_dump($pdo,
    Connect::getInstance()->errorInfo()
);
