<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?= $absoluteURL ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $absoluteURL ?>/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= $absoluteURL ?>/assets/css/styles.css">
  <title>oShop | Manga Shop</title>
</head>

<body>
  <header>
    <div class="top-bar">
      <div class="container-fluid">
        <div class="row d-flex align-items-center">
          <div class="col-sm-7 d-none d-sm-block">
            <ul class="list-inline mb-0">
              <li class="list-inline-item pr-3 mr-0">
                <i class="fa fa-phone"></i> 01 02 03 04 05
              </li>
              <li class="list-inline-item px-3 border-left d-none d-lg-inline-block">Livraison offerte à partir de 50€
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-cart navbar-expand-lg navbar-sticky navbar-airy navbar-light">
      <div class="container-fluid">
        <!-- Navbar Header  -->
        <a href="<?= $router->generate('main-home') ?>" class="navbar-brand">oShop</a>
        <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
        <!-- Navbar Collapse -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a href="<?= $router->generate('main-home') ?>" class="nav-link active">Accueil</a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Mangas</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="<?= $router->generate('category-product', ['name' => '@ellie', 'tome' => 1]) ?>">@Ellie</a>
                  <a class="dropdown-item" href="<?= $router->generate('category-product', ['name' => 'a-sign-of-affection', 'tome' => 1]) ?>">A Sign Of Affection</a>
                  <a class="dropdown-item" href="<?= $router->generate('category-product', ['name' => 'criminelles-fiancailles', 'tome' => 1]) ?>">Criminelles Fiançailles</a>
                  <a class="dropdown-item" href="<?= $router->generate('category-product', ['name' => 'dandadan', 'tome' => 1]) ?>">DanDaDan</a>
                  <a class="dropdown-item" href="<?= $router->generate('category-product', ['name' => 'frieren', 'tome' => 1]) ?>">Frieren</a>
                  <a class="dropdown-item" href="<?= $router->generate('category-product', ['name' => 'hell-s-paradise', 'tome' => 1]) ?>">Hell's Paradise</a>
                  <a class="dropdown-item" href="<?= $router->generate('category-product', ['name' => 'kaiju-no-8', 'tome' => 1]) ?>">Kaiju No. 8</a>
                  <a class="dropdown-item" href="<?= $router->generate('category-product', ['name' => 'les-carnets-de-l-apothicaire', 'tome' => 1]) ?>">Les Carnets de l'Apothicaire</a>
                  <a class="dropdown-item" href="<?= $router->generate('category-product', ['name' => 'oshi-no-ko', 'tome' => 1]) ?>">Oshi No Ko</a>
                  <a class="dropdown-item" href="<?= $router->generate('category-product', ['name' => 'ton-visage-au-clair-de-lune', 'tome' => 1]) ?>">Ton visage au Clair de Lune</a>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Catégories</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="<?= $router->generate('category-list', ['name' => 'josei']) ?>">Josei</a>
                  <a class="dropdown-item" href="<?= $router->generate('category-list', ['name' => 'seinen']) ?>">Seinen</a>
                  <a class="dropdown-item" href="<?= $router->generate('category-list', ['name' => 'shojo']) ?>">Shojo</a>
                  <a class="dropdown-item" href="<?= $router->generate('category-list', ['name' => 'shonen']) ?>">Shonen</a>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Éditeurs</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="<?= $router->generate('editor-list', ['name' => 'akata']) ?>">Akata</a>
                  <a class="dropdown-item" href="<?= $router->generate('editor-list', ['name' => 'pika']) ?>">Pika</a>
                  <a class="dropdown-item" href="<?= $router->generate('editor-list', ['name' => 'crunchyroll']) ?>">Crunchyroll</a>
                  <a class="dropdown-item" href="<?= $router->generate('editor-list', ['name' => 'kana']) ?>">Kana</a>
                  <a class="dropdown-item" href="<?= $router->generate('editor-list', ['name' => 'kaze']) ?>">Kazé</a>
                  <a class="dropdown-item" href="<?= $router->generate('editor-list', ['name' => 'ki-oon']) ?>">Ki-oon</a>
                </div>
              </div>
            </li>
          </ul>
          <div class="d-flex align-items-center justify-content-between justify-content-lg-end mt-1 mb-2 my-lg-0">
            <!-- Search Button-->
            <div class="nav-item navbar-icon-link">
              <a href="#" class="navbar-icon-link"><i class="fa fa-search"></i></a>
            </div>
            <!-- User Not Logged - link to login page-->
            <div class="nav-item">
              <a href="#" class="navbar-icon-link"><i class="fa fa-user"></i></a>
            </div>
            <!-- Cart Dropdown-->
            <div class="nav-item dropdown">
              <a href="<?= $router->generate('main-cart') ?>" class="navbar-icon-link d-lg-none">
                <span class="badge badge-secondary">New</span>
              </a>
              <div class="d-none d-lg-block">
                <a id="cartdetails" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="<?= $router->generate('main-cart') ?>" class="navbar-icon-link dropdown-toggle">
                  <i class="fa fa-shopping-cart"></i>
                  <span class="badge badge-secondary">3</span>
                </a>
                <div aria-labelledby="cartdetails" class="dropdown-menu dropdown-menu-right p-4">
                  <div class="navbar-cart-product-wrapper">
                    <!-- cart item-->
                    <div class="navbar-cart-product">

                      <div class="w-100">

                        <div> <a href="<?= $router->generate('category-product', ['name' => 'hell-s-paradise', 'tome' => '13']) ?>" class="navbar-cart-product-link">Hell's Paradise [Tome 13]</a><small class="d-block text-muted">Quantité : 1 </small><strong class="d-block text-sm">7.29 €
                          </strong></div>
                      </div>

                    </div>
                    <div class="navbar-cart-product">

                      <div class="w-100">

                        <div> <a href="<?= $router->generate('category-product', ['name' => 'oshi-no-ko', 'tome' => '1']) ?>" class="navbar-cart-product-link">Oshi No Ko [Tome 1]</a><small class="d-block text-muted">Quantité : 1 </small><strong class="d-block text-sm">7.95 €
                          </strong></div>

                      </div>
                    </div>
                    <div class="navbar-cart-product">

                      <div class="w-100">

                        <div> <a href="<?= $router->generate('category-product', ['name' => 'oshi-no-ko', 'tome' => '2']) ?>" class="navbar-cart-product-link">Oshi No Ko [Tome 2]</a><small class="d-block text-muted">Quantité : 1 </small><strong class="d-block text-sm">7.95 €
                          </strong></div>

                      </div>
                    </div>

                    <!-- total price-->
                    <div class="navbar-cart-total"><span class="text-uppercase text-muted">Total</span><strong class="text-uppercase">23.19 €</strong></div>
                    <!-- buttons-->
                    <div class="d-flex justify-content-between">
                      <a href="<?= $router->generate('main-cart') ?>" class="btn btn-link text-dark mr-3">Voir le panier <i class="fa-arrow-right fa"></i></a>
                      <a href="#" class="btn btn-outline-dark">Commander</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>