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
var_dump(CONF_VIEW_PATH);
var_dump(CONF_SES_PATH);

$plates = new \League\Plates\Engine();

var_dump(get_class_methods($plates));
//
//$plates->addFolder("test", __DIR__ . '/assets/views/test');
//
//if (empty($_GET['id'])) {
//  echo $plates->render('test::list', [
//    "title" => "Usuários do sistema",
//    "list" => (new \Source\Models\User())->all(5)
//  ]);
//} else {
//  echo $plates->render('test::user', [
//    "title" => "Editar usuário",
//    "user" => (new \Source\Models\User())->findById($_GET['id'])
//  ]);
//}
//
$view = new \Source\Core\View();
$view->path('test');

if (empty($_GET['id'])) {
  echo $view->render('test::list', [
    "title" => "Usuários do sistema",
    "list" => (new \Source\Models\User())->all(5)
  ]);
} else {
  echo $view->render('test::user', [
    "title" => "Editar usuário",
    "user" => (new \Source\Models\User())->findById($_GET['id'])
  ]);
}

//
//$view = new \Source\Core\View(__DIR__ . '/assets/views/test');
//
//var_dump(get_class_methods($view));
//
//$view->addFolder("test", __DIR__ . '/assets/views/test');
//
//if (empty($_GET['id'])) {
//    echo $view->render('test::list', [
//        "title" => "Usuários do sistema",
//        "list" => (new \Source\Models\User())->all(5)
//    ]);
//} else {
//    echo $view->render('test::user', [
//        "title" => "Editar usuário",
//        "user" => (new \Source\Models\User())->findById($_GET['id'])
//    ]);
//}


