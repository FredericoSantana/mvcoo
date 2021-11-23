<?php
require_once __DIR__ . '/source/autoload.php';
require __DIR__ . '/form.php';

$post = $_POST;

if ($post){
  $data = (object)$post;
  var_dump($post);

  echo $data->first_name;
}