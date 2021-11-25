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
$total = db()->query("SELECT COUNT(id) as total FROM users")->fetch()->total;

$getPage = filter_input(INPUT_GET, "page", FILTER_VALIDATE_INT);

$pager = new \Source\Support\Pager("?page=");
$pager->pager($total, 5, $getPage, 2);

echo <<<style
<style>
.paginator {
display: block;
text-align: center;
    list-style: none;
    padding: 0;
    margin-top: 30px;
}

.paginator_item {
    display: inline-block;
    margin: 0 10px;
    padding: 4px 12px;
    background: #A287E7;
    color: #fff;
    text-decoration: none;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}

.paginator_item:hover {
    background: #8A6ED5;
}

.paginator_active,
.paginator_active:hover {
    background: #cccccc;
}
</style>
style;


$users = (new \Source\Models\User())->all($pager->limit(), $pager->offset());
foreach ($users as $user) {
  $register = date_fmt($user->created_at);
  echo <<<user
    <article>
    <h1>{$user->first_name} {$user->last_name}</h1>
    <p>{$user->email} - Registrado em {$register}</p>
</article>
user;

}

  echo $pager->render();


var_dump($total);