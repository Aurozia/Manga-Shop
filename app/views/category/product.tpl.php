<section class="hero">
  <div class="container">
    <!-- Breadcrumbs -->
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><a href="<?= $router->generate('main-home') ?>">Home</a></li>
      <li class="breadcrumb-item active"><?= $viewData['productObj']->getName() ?></li>
    </ol>
  </div>
</section>

<section class="products-grid">
  <div class="container-fluid">

    <div class="row">
      <!-- product-->
      <div class="col-lg-5 col-sm-12">
        <div class="product-image d-flex justify-content-center">
          <img src="<?= $absoluteURL ?><?= $viewData['productObj']->getPicture() ?>" alt="Manga <?= $viewData['productObj']->getName() ?> cover tome <?= $viewData['productObj']->getTome_id() ?>" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-7 col-sm-12">
        <div class="mb-3">
          <h3 class="h3 text-uppercase mb-1"><?= $viewData['productObj']->getName() ?> [TOME <?= $viewData['productObj']->getTome_id() ?>]</h3>
          <div class="text-muted">Auteur : <em class="font-weight-bold"><?= $viewData['productObj']->getAuthor() ?>
            </em></div>
          <div class="text-muted"><a href="<?= $router->generate('editor-list', ['name' => $viewData['editorProductObj']->getUrl()]) ?>">Editeur : <em class="font-weight-bold"><?= $viewData['editorProductObj']->getName() ?></em></a></div>
        </div>
        <div class="my-4">
          <div class="text-muted"><span class="h4"><?= $viewData['priceProductObj']->getAmount() ?> €</span> TTC</div>
        </div>
        <div class="product-action-buttons">
          <form action="<?= $router->generate('main-cart') ?>" method="get">
            <input type="hidden" name="product_id" value="1">
            <button class="btn btn-dark btn-buy"><i class="fa fa-shopping-cart"></i><span class="btn-buy-label ml-2">Ajouter au panier</span></button>
          </form>
        </div>
        <div class="my-5">
          <h4 class="h4 text-uppercase mb-3">Synopsis</h4>
          <p><?= $viewData['productObj']->getDescription() ?></p>
        </div>
        <div class="container">
          <div class="row">
            <?php foreach ($viewData['nameProductObj'] as $product) : ?>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <div class="product-image">
                      <a href="<?= $router->generate('category-product', ['name' => $product->getUrl(), 'tome' => $product->getTome_id()]) ?>" class="product-hover-overlay-link">
                        <img src="<?= $absoluteURL ?><?= $product->getPicture() ?>" alt="Manga <?= $product->getName() ?> cover tome <?= $product->getTome_id() ?>" class="img-fluid rounded mb-3">
                      </a>
                    </div>
                    <a href="<?= $router->generate('category-product', ['name' => $product->getUrl(), 'tome' => $product->getTome_id()]) ?>">
                      <h5 class="text-center text-dark">Tome <?= $product->getTome_id() ?></h5>
                    </a>
                  </div>
                </div>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
      <!-- /product-->
    </div>

  </div>
</section>