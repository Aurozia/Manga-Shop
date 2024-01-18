<section class="hero">
  <div class="container">
    <!-- Breadcrumbs -->
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><a href="<?= $router->generate('main-home') ?>">Home</a></li>
      <li class="breadcrumb-item active">Shonen</li>
    </ol>
    <!-- Hero Content-->
    <div class="hero-content pb-5 text-center">
      <h1 class="hero-heading">Shonen</h1>
      <div class="row">
        <div class="col-xl-8 offset-xl-2">
          <p class="lead text-muted">Explorez notre sélection de mangas Shonen disponibles ici, proposant des histoires dynamiques, des héros audacieux et des aventures captivantes.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="products-grid">
  <div class="container-fluid">

    <header class="product-grid-header d-flex align-items-center justify-content-between">
      <div class="mr-3 mb-3">
        Affichage <strong>1-4 </strong>de <strong>4 </strong>résultats
      </div>
      <div class="mb-3 d-flex align-items-center"><span class="d-inline-block mr-1">Trier par</span>
        <select class="custom-select w-auto border-0">
          <option value="orderby_0">Défaut</option>
          <option value="orderby_1">Nom</option>
          <option value="orderby_3">Prix</option>
        </select>
      </div>
    </header>
    <div class="row">
      <!-- product-->
      <div class="product col-xl-3 col-lg-4 col-sm-6">
        <div class="product-image">
          <a href="<?= $router->generate('category-product', ['name' => 'dandadan', 'tome' => '1']) ?>" class="product-hover-overlay-link">
            <img src="<?= $absoluteURL ?>/assets/images/products/dandadan-tome-1.jpg" alt="Manga DanDaDan cover tome 1" class="img-fluid img-thumbnail rounded mb-3 cover">
          </a>
        </div>
        <div class="product-action-buttons">
          <a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a>
          <a href="<?= $router->generate('category-product', ['name' => 'dandadan', 'tome' => '1']) ?>" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">Voir</span></a>
        </div>
        <div class="py-2">
          <p class="text-muted text-sm mb-1">Crunchyroll</p>
          <h3 class="h6 text-uppercase mb-1"><a href="<?= $router->generate('category-product', ['name' => 'dandadan', 'tome' => '1']) ?>" class="text-dark">DanDaDan</a></h3><span class="text-muted font-weight-bold">7.29 €</span>
        </div>
      </div>
      <!-- /product-->
      <!-- product-->
      <div class="product col-xl-3 col-lg-4 col-sm-6">
        <div class="product-image">
          <a href="<?= $router->generate('category-product', ['name' => 'hell-s-paradise', 'tome' => '1']) ?>" class="product-hover-overlay-link">
            <img src="<?= $absoluteURL ?>/assets/images/products/hell-s-paradise-tome-1.jpg" alt="Manga Hell's Paradise cover tome 1" class="img-fluid img-thumbnail rounded mb-3 cover">
          </a>
        </div>
        <div class="product-action-buttons">
          <a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a>
          <a href="<?= $router->generate('category-product', ['name' => 'hell-s-paradise', 'tome' => '1']) ?>" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">Voir</span></a>
        </div>
        <div class="py-2">
          <p class="text-muted text-sm mb-1">Crunchyroll, Kazé</p>
          <h3 class="h6 text-uppercase mb-1"><a href="<?= $router->generate('category-product', ['name' => 'hell-s-paradise', 'tome' => '1']) ?>" class="text-dark">Hell's Paradise</a></h3><span class="text-muted">7.29 €</span>
        </div>
      </div>
      <!-- /product-->
      <!-- product-->
      <div class="product col-xl-3 col-lg-4 col-sm-6">
        <div class="product-image">
          <a href="<?= $router->generate('category-product', ['name' => 'kaiju-no-8', 'tome' => '1']) ?>" class="product-hover-overlay-link">
            <img src="<?= $absoluteURL ?>/assets/images/products/kaiju-no-8-tome-1.jpg" alt="Manga Kaiju No. 8 cover tome 1" class="img-fluid img-thumbnail rounded mb-3 cover">
          </a>
        </div>
        <div class="product-action-buttons">
          <a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a>
          <a href="<?= $router->generate('category-product', ['name' => 'kaiju-no-8', 'tome' => '1']) ?>" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">Voir</span></a>
        </div>
        <div class="py-2">
          <p class="text-muted text-sm mb-1">Crunchyroll, Kazé</p>
          <h3 class="h6 text-uppercase mb-1"><a href="<?= $router->generate('category-product', ['name' => 'kaiju-no-8', 'tome' => '1']) ?>" class="text-dark">Kaiju No. 8</a></h3><span class="text-muted">6.99 €</span>
        </div>
      </div>
      <!-- /product-->
      <!-- product-->
      <div class="product col-xl-3 col-lg-4 col-sm-6">
        <div class="product-image">
          <a href="<?= $router->generate('category-product', ['name' => 'oshi-no-ko', 'tome' => '1']) ?>" class="product-hover-overlay-link">
            <img src="<?= $absoluteURL ?>/assets/images/products/oshi-no-ko-tome-1.jpg" alt="Manga Oshi No Ko cover tome 1" class="img-fluid img-thumbnail rounded mb-3 cover">
          </a>
        </div>
        <div class="product-action-buttons">
          <a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a>
          <a href="<?= $router->generate('category-product', ['name' => 'oshi-no-ko', 'tome' => '1']) ?>" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">Voir</span></a>
        </div>
        <div class="py-2">
          <p class="text-muted text-sm mb-1">Kurokawa</p>
          <h3 class="h6 text-uppercase mb-1"><a href="<?= $router->generate('category-product', ['name' => 'oshi-no-ko', 'tome' => '1']) ?>" class="text-dark">Oshi No Ko</a></h3><span class="text-muted">7.95 €</span>
        </div>
      </div>
      <!-- /product-->

    </div>

  </div>
</section>