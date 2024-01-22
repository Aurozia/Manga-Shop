<section>
  <div class="container-fluid">
    <div class="row mx-0">
      <?php foreach ($viewData['categoryForHomePage'] as $categoryForHomePage) : ?>
        <div class="col-lg-4">
          <div class="card border-0 text-center text-light shadow"><img src="<?= $absoluteURL ?><?= $categoryForHomePage->getPicture() ?>" alt="Card image" class="card-img">
            <div class="card-img-overlay d-flex align-items-center">
              <div class="w-100">
                <h2 class="display-3 font-weight-bold mb-4"><?= $categoryForHomePage->getName() ?></h2>
                <a href="<?= $router->generate('category-list', ['name' => $categoryForHomePage->getUrl()]) ?>" class="btn btn-light"><?= $categoryForHomePage->getHome_subtitle() ?>
                  <i class="fa-arrow-right fa ml-2"></i></a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
</section>