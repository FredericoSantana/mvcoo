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
use Source\Support\Upload;
$upload = new Upload();

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

if ($post && $post['send'] == "image") {
  $u = $upload->image($_FILES['file'], $post['name'], 50);
  if ($u) {
//    echo "<img src='{$u}' style='width: 100%'>";
    var_dump($u);
  }else{
    echo $upload->message();
  }
}

$formSend = "image";
require __DIR__ . '/form.php';

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

if ($post && $post['send'] == "file") {
  var_dump($post, ($_FILES ?? ""));
  $u = $upload->file($_FILES['file'], $post['name']);
  if ($u) {
//    echo "<a target='_blank' href='{$u}'>Ver Arquivo</a>";
    echo "<p class='trigger info'><a target='_blank' href='{$u}'>Ver Arquivo</a></p>";
  }else{
    echo $upload->message();
  }
}

$formSend = "file";
require __DIR__ . '/form.php';

$formSend = "media";
require __DIR__ . '/form.php';

$upload->remove(__DIR__ . "/storage/uploads/files/2021/11/teste.pdf");