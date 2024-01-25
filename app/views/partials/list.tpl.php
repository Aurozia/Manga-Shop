<section class="hero">
  <div class="container">
    <!-- Breadcrumbs -->
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><a href="<?= $router->generate('main-home') ?>">Home</a></li>
      <li class="breadcrumb-item active"><?= $viewData['tableObj']->getName() ?></li>
    </ol>
    <!-- Hero Content-->
    <div class="hero-content pb-5 text-center">
      <h1 class="hero-heading"><?= $viewData['tableObj']->getName() ?></h1>
      <div class="row">
        <div class="col-xl-12 offset-xl-0">
          <p class="lead text-muted"><?= ($viewData['tableName'] === 'editor') ? 'Découvrez les mangas des éditions ' . $viewData['tableObj']->getName() . '.' : $viewData['tableObj']->getSubtitle() ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="products-grid">
  <div class="container-fluid">

    <?php if ($viewData['productList']) : ?>
      <header class="product-grid-header d-flex align-items-center justify-content-between">
        <div class="mr-3 mb-3">
          Affichage <strong>1-<?= (count($viewData['productList']) > 4) ? 4 : count($viewData['productList']); ?> </strong>de <strong><?= count($viewData['productList']) ?> </strong>résultats
        </div>
        <div class="mb-3 d-flex align-items-center"><span class="d-inline-block mr-1">Trier par</span>
        <!-- <select class="custom-select w-auto border-0">
          <option value="orderby_0">Défaut</option>
          <option value="orderby_1">Nom</option>
          <option value="orderby_3">Prix</option>
        </select> -->
        <form id="form" action="" method="post">
          <select id="select" name="select" class="custom-select w-auto border-0">
            <option name="default" value="<?= $router->generate($viewData['tableName'].'-list-post', ['name' => $viewData['tableObj']->getUrl()]); ?>" <?= $_POST ? 'selected' : '' ?>>Défaut</option>
            <option name="name" value="<?= $router->generate($viewData['tableName'].'-list-byname', ['name' => $viewData['tableObj']->getUrl()]); ?>" <?= str_contains($_POST['select'], 'name') ? 'selected' : '' ?>>Nom</option>
            <option name="price" value="<?= $router->generate($viewData['tableName'].'-list-byprice', ['name' => $viewData['tableObj']->getUrl()]); ?>" <?= str_contains($_POST['select'], 'price') ? 'selected' : '' ?>>Prix</option>
          </select>
        </form>

        <script>
          const select = document.getElementById('select');
          const form = document.getElementById('form');

          select.addEventListener('change', function() {
            form.action = this.value;
            form.submit();
          });
        </script>
        </div>
      </header>
      <div class="row">
        <!-- product-->
        <?php foreach ($viewData['productList'] as $productList) : ?>
          <div class="product col-xl-3 col-lg-4 col-sm-6">
            <div class="product-image">
              <a href="<?= $router->generate('category-product', ['name' => $productList->getUrl(), 'tome' => '1']) ?>" class="product-hover-overlay-link">
                <img src="<?= $absoluteURL ?><?= $productList->getPicture() ?>" alt="Manga <?= $productList->getName() ?> cover tome 1" class="img-fluid img-thumbnail rounded mb-3 cover">
              </a>
            </div>
            <div class="product-action-buttons">
              <a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a>
              <a href="<?= $router->generate('category-product', ['name' => $productList->getUrl(), 'tome' => '1']) ?>" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">Voir</span></a>
            </div>
            <div class="py-2">
              <p class="text-muted text-sm mb-1"><?= $productList->editorName ?></p>
              <h3 class="h6 text-uppercase mb-1"><a href="<?= $router->generate('category-product', ['name' => $productList->getUrl(), 'tome' => '1']) ?>" class="text-dark"><?= $productList->getName() ?></a></h3><span class="text-muted font-weight-bold"><?= $productList->priceAmount ?> €</span>
            </div>
          </div>
        <?php endforeach ?>
        <!-- product-->
      </div>

    <?php else : ?>
      <p class="lead text-muted text-center">Pas de mangas <?= $viewData['tableObj']->getName() ?> disponible pour le moment, revenez plus tard !</p>
    <?php endif ?>

  </div>
</section>