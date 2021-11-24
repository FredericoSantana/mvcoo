<?php
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$email = (new \Source\Core\Email())->boostrap(
  "Olá mundo, esse é o meu email top.",
  "<h1>Olá mundo!</h1><p>Essa é uma mensagem via rotina da aplicação.</p>",
  "fredericosantana11@gmail.com",
  "Mim mesmo"
);

$email->attach("logo.png", "logo");

if ($email->send()){
  echo message()->success("Email enviado com sucesso");
}else{
  echo $email->message();
}