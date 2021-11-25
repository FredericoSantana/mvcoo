<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php
    require_once __DIR__ . '/vendor/autoload.php';
    $seo = new \Source\Support\Seo();
    echo $seo->render(
        "Foramação Full Stack PHP Developer",
        "descrição da pagina",
        "www.freddev.com",
        "https://www.upinside.com.br/psphp/images/cover.jpg"

    );
    ?>
</head>
<body>
<h1><?= $seo->title; ?></h1>
<h1><?= $seo->description; ?></h1>

</body>
</html>
