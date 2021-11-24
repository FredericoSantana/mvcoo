<?php
require_once __DIR__ . '/source/autoload.php';

$user = (new \Source\Models\User())->findById(1);
//$user->password = 12345678;
$user->save();

var_dump(
  $user,
  password_get_info(12345678),
  password_get_info(passwd(12345678))
);