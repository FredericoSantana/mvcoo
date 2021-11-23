<?php
require_once __DIR__ . '/source/autoload.php';

use Source\Database\Connect;

$pdo = Connect::getInstance();

$read = $pdo->query("SELECT * FROM users LIMIT 2");
foreach ($read->fetchAll(PDO::FETCH_CLASS, \Source\Database\Entity\UserEntity::class) as $user) {
    var_dump($user, $user->getFirstName());
}
