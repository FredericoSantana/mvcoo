<?php
require_once __DIR__ . '/source/autoload.php';

$session = new \Source\Core\Session();
//$session->set("user", 1);
//
//$session->regenerate();
//
//$session->set('stats', ['name', 'email']);
//$session->unset("stats");
//
//if (!$session->has('login')){
//  echo "Logar-se";
//  $user = (new \Source\Models\User())->load(1);
//  $session->set("login", $user->data());
//}

$session->destroy();

var_dump(
  $_SESSION,
  $session->all()
);