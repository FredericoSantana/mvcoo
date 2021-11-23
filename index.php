<?php
require_once __DIR__ . '/source/autoload.php';

use Source\Database\Connect;

$model = new \Source\Models\UserModel();

$user = $model->load(51);
$user->destroy();
var_dump($user);
