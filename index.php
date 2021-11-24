<?php
require_once __DIR__ . '/source/autoload.php';

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
if ($post) {
  $data = (object)$post;

  if (!csrf_verify($post)){
    $error = message()->error("Erro ao enviar, favor tente novamente");
  }else{
    $user = new \Source\Models\User();
    $user->boostrap(
      $data->first_name,
      $data->last_name,
      $data->email,
      $data->password
    );

    if (!$user->save()) {
      echo $user->message();
    }else{
      echo message()->success("Cadastro realizado com sucesso");
//      unset($data);
    }

    var_dump($user->data());
  }

  var_dump($data);
}

require 'form.php';