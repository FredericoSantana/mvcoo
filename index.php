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
$seo = new \Source\Support\Seo();
$seo->render(
  "Foramação Full Stack PHP Developer",
  "descrição da pagina",
  "www.freddev.com",
    "https://www.upinside.com.br/psphp/images/cover.jpg"

);
var_dump($seo->optimizer()->debug());