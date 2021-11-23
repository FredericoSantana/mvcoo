<?php
require_once __DIR__ . '/source/autoload.php';

$message = new \Source\Core\Message();
var_dump($message, get_class_methods($message));

$error = $message->success("Essa é uma mensagem de sucesso!");

var_dump([
  $message->getText(),
  $message->getType(),
  $message->render()
]);

echo $message->info("Essa é uma mensagem renderizada");
echo $message->success("Essa é uma mensagem renderizada");
echo $message->warning("Essa é uma mensagem renderizada");
echo $message->error("Essa é uma mensagem renderizada");

$session = new \Source\Core\Session();

$message->success("Essa é uma mensagem flash")->flash();

if ($flash = $session->flash()){
  echo $flash;
  var_dump([
    $flash->getText(),
    $flash->getType()
  ]);
}

var_dump($_SESSION, $session->all());