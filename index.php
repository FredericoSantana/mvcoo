<?php
require_once __DIR__ . '/source/autoload.php';

$model = new \Source\Models\User();

$user = $model->find("id = :id", "id=1");

var_dump($user);

$user = $model->findById(2);
var_dump($user);

$user = $model->findByEmail("sidney38@email.com.br");
var_dump($user);

$list = $model->all(2,5);
var_dump($list);

$user = $model->boostrap(
  "Frederico",
  "Santana",
  "fred@email.com.br",
  "1234"
);

if ($user->save()) {
  echo message()->success("Cadastro realizado com sucesso");
}else{
  echo $user->message();
  echo message()->info($user->message()->json());
}

$user = (new \Source\Models\User())->findById(52);
$user->first_name = "Iara";
$user->last_name = "Neves";
$user->password = passwd(321654789);

if ($user->save()) {
  echo message()->success("Cadastro atualizados com sucesso");
}else{
  echo $user->message();
  echo message()->info($user->message()->json());
}

var_dump($user);

