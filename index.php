<?php
require_once __DIR__ . '/source/autoload.php';

$message = new \Source\Core\Message();

$email = "cursos@email.com";

if (!is_email($email)){
  echo $message->error("Email inválido");
}else{
  echo $message->success("email correto");
}

$passwd = "123456781234567812345678123456781234567812345678";

if (!is_passwd($passwd)){
  echo $message->error("senha inválido");
}else{
  echo $message->success("senha correto");
}

var_dump([
  url("/blog/titulo"),
  url("blog/titulo"),
]);

if (empty($_GET)) {
  redirect("?f=true");
}

var_dump(user()->load(1));