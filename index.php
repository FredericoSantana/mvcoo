<?php
require_once __DIR__ . '/source/autoload.php';

$string = "Essa é uma string, nela temos um under_score e um guarda-chuva";
$message = new \Source\Core\Message();
echo $message->info(str_slug($string));
echo $message->info(str_studly_case($string));
echo $message->info(str_camel_case($string));
echo $message->info(str_title($string));
echo $message->info(str_limit_words($string, 10));
echo $message->info(str_limit_chars($string, 48));