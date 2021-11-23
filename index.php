<?php
require_once __DIR__ . '/source/autoload.php';

use Source\Database\Connect;

$model = new \Source\Models\UserModel();

$user = $model->boostrap(
  "Frederico",
  "Santana",
  "fred@email.com",
  12345678
);
var_dump($user);


if (!$model->find($user->email)){
  echo "<p class='trigger warning'>Cadastro</p>";
  $user->save();
}else{
  echo "<p class='trigger warning'>Read</p>";
}

var_dump($user);
