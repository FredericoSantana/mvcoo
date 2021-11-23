<?php
require_once __DIR__ . '/source/autoload.php';

use Source\Database\Connect;

$model = new \Source\Models\UserModel();

$user = $model->load(1);

var_dump($user, "{$user->first_name} {$user->last_name}");

$user = $model->find("willian28@email.com.br");

var_dump($user, "{$user->first_name} {$user->last_name}");

$all = $model->all(5);

/** @var  \Source\Models\UserModel $user */
foreach ($all as $user) {
  $user->first_name = "Fred";
  var_dump($user, "{$user->first_name} {$user->last_name}");
}
