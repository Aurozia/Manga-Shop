<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Default</title>
</head>
<body>

<nav>
    <ul>
        <li><a href="<?= $router->generate('main-home') ?>">Accueil</a></li>
        <li><a href="<?= md5(time()) ?>">404</a></li>
    </ul>
</nav>
