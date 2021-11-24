<?php
require_once __DIR__ . '/source/autoload.php';

$user = (new \Source\Models\User())->findById(1);
$user->save();

var_dump(
  $user
);