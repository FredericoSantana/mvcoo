<?php
require __DIR__ . '/fullstackphp/fsphp.php';
require_once __DIR__ . '/vendor/autoload.php';

/*
Creating Engines
- new League\Plates\Engine('/path/to/templates')
+ League\Plates\Engine::create('/path/to/templates', 'php')

Render context

- <?= $this->section() ?>
+ <?= $v->section() ?>

 */
use Source\Core\Route;

Route::get("/", "UserController:home");
Route::get("/editar", "UserController:edit");

Route::get("/rotas", function (){
var_dump(Route::routes());
});