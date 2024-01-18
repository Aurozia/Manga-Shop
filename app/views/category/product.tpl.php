<section class="hero">
  <div class="container">
    <!-- Breadcrumbs -->
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><a href="<?= $router->generate('main-home') ?>">Home</a></li>
      <li class="breadcrumb-item active">A Sign of Affection</li>
    </ol>
  </div>
</section>

<section class="products-grid">
  <div class="container-fluid">

    <div class="row">
      <!-- product-->
      <div class="col-lg-5 col-sm-12">
        <div class="product-image d-flex justify-content-center">
          <img src="<?= $absoluteURL ?>/assets/images/products/a-sign-of-affection-tome-1.jpg" alt="Manga A Sign of Affection cover tome 1" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-7 col-sm-12">
        <div class="mb-3">
          <h3 class="h3 text-uppercase mb-1">A Sign of Affection [TOME 1]</h3>
          <div class="text-muted">Auteur : <em class="font-weight-bold">Suu Morishita
            </em></div>
          <div class="text-muted">Editeur : <em class="font-weight-bold">Akata</em></div>
        </div>
        <div class="my-4">
          <div class="text-muted"><span class="h4">6.99 €</span> TTC</div>
        </div>
        <div class="product-action-buttons">
          <form action="<?= $router->generate('main-cart') ?>" method="post">
            <input type="hidden" name="product_id" value="1">
            <button class="btn btn-dark btn-buy"><i class="fa fa-shopping-cart"></i><span class="btn-buy-label ml-2">Ajouter au panier</span></button>
          </form>
        </div>
        <div class="my-5">
          <h4 class="h4 text-uppercase mb-3">Synopsis</h4>
          <p>
            Yuki est une étudiante qui, comme beaucoup d'autres, construit son quotidien autour de ses amis, des réseaux sociaux et de ce qu'elle aime. Mais quand un jour, dans le train, elle croise un jeune homme qui voyage à travers le monde, son univers va être chamboulé : ce dernier, bien que trilingue, ne connaît pas la langue des signes. Pourtant, très vite, il manifestera pour elle un intérêt bien particulier... Comment réagira-t-elle face à ce camarade d'université entreprenant et communicatif ?
          </p>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <div class="product-image">
                    <a href="<?= $router->generate('category-product', ['name' => 'a-sign-of-affection', 'tome' => '1']) ?>" class="product-hover-overlay-link">
                      <img src="<?= $absoluteURL ?>/assets/images/products/a-sign-of-affection-tome-1.jpg" alt="Manga A Sign of Affection cover tome 1" class="img-fluid rounded mb-3">
                    </a>
                  </div>
                  <a href="<?= $router->generate('category-product', ['name' => 'a-sign-of-affection', 'tome' => '1']) ?>">
                    <h5 class="text-center text-dark">Tome 1</h5>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <div class="product-image">
                    <a href="<?= $router->generate('category-product', ['name' => 'a-sign-of-affection', 'tome' => '2']) ?>" class="product-hover-overlay-link">
                      <img src="<?= $absoluteURL ?>/assets/images/products/a-sign-of-affection-tome-2.jpg" alt="Manga A Sign of Affection cover tome 2" class="img-fluid rounded mb-3">
                    </a>
                  </div>
                  <a href="<?= $router->generate('category-product', ['name' => 'a-sign-of-affection', 'tome' => '2']) ?>">
                    <h5 class="text-center text-dark">Tome 2</h5>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <div class="product-image">
                    <a href="<?= $router->generate('category-product', ['name' => 'a-sign-of-affection', 'tome' => '3']) ?>" class="product-hover-overlay-link">
                      <img src="<?= $absoluteURL ?>/assets/images/products/a-sign-of-affection-tome-3.jpg" alt="Manga A Sign of Affection cover tome 3" class="img-fluid rounded mb-3">
                    </a>
                  </div>
                  <a href="<?= $router->generate('category-product', ['name' => 'a-sign-of-affection', 'tome' => '3']) ?>">
                    <h5 class="text-center text-dark">Tome 3</h5>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <div class="product-image">
                    <a href="<?= $router->generate('category-product', ['name' => 'a-sign-of-affection', 'tome' => '4']) ?>" class="product-hover-overlay-link">
                      <img src="<?= $absoluteURL ?>/assets/images/products/a-sign-of-affection-tome-4.jpg" alt="Manga A Sign of Affection cover tome 4" class="img-fluid rounded mb-3">
                    </a>
                  </div>
                  <a href="<?= $router->generate('category-product', ['name' => 'a-sign-of-affection', 'tome' => '4']) ?>">
                    <h5 class="text-center text-dark">Tome 4</h5>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <div class="product-image">
                    <a href="<?= $router->generate('category-product', ['name' => 'a-sign-of-affection', 'tome' => '5']) ?>" class="product-hover-overlay-link">
                      <img src="<?= $absoluteURL ?>/assets/images/products/a-sign-of-affection-tome-5.jpg" alt="Manga A Sign of Affection cover tome 5" class="img-fluid rounded mb-3">
                    </a>
                  </div>
                  <a href="<?= $router->generate('category-product', ['name' => 'a-sign-of-affection', 'tome' => '5']) ?>">
                    <h5 class="text-center text-dark">Tome 5</h5>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <div class="product-image">
                    <a href="<?= $router->generate('category-product', ['name' => 'a-sign-of-affection', 'tome' => '6']) ?>" class="product-hover-overlay-link">
                      <img src="<?= $absoluteURL ?>/assets/images/products/a-sign-of-affection-tome-6.jpg" alt="Manga A Sign of Affection cover tome 6" class="img-fluid rounded mb-3">
                    </a>
                  </div>
                  <a href="<?= $router->generate('category-product', ['name' => 'a-sign-of-affection', 'tome' => '6']) ?>">
                    <h5 class="text-center text-dark">Tome 6</h5>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <div class="product-image">
                    <a href="<?= $router->generate('category-product', ['name' => 'a-sign-of-affection', 'tome' => '7']) ?>" class="product-hover-overlay-link">
                      <img src="<?= $absoluteURL ?>/assets/images/products/a-sign-of-affection-tome-7.jpg" alt="Manga A Sign of Affection cover tome 7" class="img-fluid rounded mb-3">
                    </a>
                  </div>
                  <a href="<?= $router->generate('category-product', ['name' => 'a-sign-of-affection', 'tome' => '7']) ?>">
                    <h5 class="text-center text-dark">Tome 7</h5>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <div class="product-image">
                    <a href="<?= $router->generate('category-product', ['name' => 'a-sign-of-affection', 'tome' => '8']) ?>" class="product-hover-overlay-link">
                      <img src="<?= $absoluteURL ?>/assets/images/products/a-sign-of-affection-tome-8.jpg" alt="Manga A Sign of Affection cover tome 8" class="img-fluid rounded mb-3">
                    </a>
                  </div>
                  <a href="<?= $router->generate('category-product', ['name' => 'a-sign-of-affection', 'tome' => '8']) ?>">
                    <h5 class="text-center text-dark">Tome 8</h5>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /product-->
    </div>

  </div>
</section>