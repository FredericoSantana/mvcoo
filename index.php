<?php
require_once __DIR__ . '/source/autoload.php';

var_dump(get_defined_constants(true)['user']);

use Source\Core\Connect;

$read = Connect::getInstance()->prepare("SELECT * FROM users LIMIT 1,1");
$read->execute();
var_dump($read->fetchAll());

use Source\Models\User;

$user = (new User())->load(1);
var_dump($user);