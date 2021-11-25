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
$t = new \Source\Support\Thumb();
var_dump($t);

echo "<img src='{$t->make("images/2021/11/nome-do-arquivo.jpg", 300)}' alt='' title=''>";
echo "<img src='{$t->make("images/2021/11/nome-do-arquivo.jpg", 150, 150)}' alt='' title=''>";


$t->flush("images/2021/11/nome-do-arquivo.jpg");