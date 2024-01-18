<section class="hero">
  <div class="container">
    <!-- Breadcrumbs -->
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><a href="<?= $router->generate('main-home') ?>">Home</a></li>
      <li class="breadcrumb-item active">Panier</li>
    </ol>
    <!-- Hero Content-->
    <div class="hero-content pb-5 text-center">
      <h1 class="hero-heading">Panier</h1>
      <div class="row">
        <div class="col-xl-8 offset-xl-2">
          <p class="lead text-muted">Vous avez 3 produits dans votre panier</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-9">
        <div class="cart">
          <div class="cart-wrapper">
            <div class="cart-header text-center">
              <div class="row">
                <div class="col-5">Produit</div>
                <div class="col-2">Prix</div>
                <div class="col-2">Quantité</div>
                <div class="col-2">Total</div>
                <div class="col-1"></div>
              </div>
            </div>
            <div class="cart-body">
              <!-- Product-->
              <div class="cart-item">
                <div class="row d-flex align-items-center text-center">
                  <div class="col-5">
                    <div class="d-flex align-items-center"><a href="<?= $router->generate('category-product', ['name' => 'hell-s-paradise', 'tome' => '13']) ?>"><img src="<?= $absoluteURL ?>/assets/images/products/hell-s-paradise-tome-13.jpg" alt="Hell's Paradise Tome 13" class="cart-item-img my-3"></a>
                      <div class="cart-title text-left"><a href="<?= $router->generate('category-product', ['name' => 'hell-s-paradise', 'tome' => '13']) ?>" class="text-uppercase text-dark"><strong>Hell's Paradise <br> [Tome 13]</strong></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-2">7.29 €</div>
                  <div class="col-2">
                    <div class="d-flex align-items-center">
                      <div class="btn btn-items btn-items-decrease">-</div>
                      <input value="1" class="form-control text-center input-items" type="text">
                      <div class="btn btn-items btn-items-increase">+</div>
                    </div>
                  </div>
                  <div class="col-2 text-center">7.29 €</div>
                  <div class="col-1 text-center"><a href="#" class="cart-remove"> <i class="fa fa-times"></i></a>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="cart-item">
                <div class="row d-flex align-items-center text-center">
                  <div class="col-5">
                    <div class="d-flex align-items-center"><a href="<?= $router->generate('category-product', ['name' => 'oshi-no-ko', 'tome' => '1']) ?>"><img src="<?= $absoluteURL ?>/assets/images/products/oshi-no-ko-tome-1.jpg" alt="Oshi No Ko Tome 1" class="cart-item-img my-3"></a>
                      <div class="cart-title text-left"><a href="<?= $router->generate('category-product', ['name' => 'oshi-no-ko', 'tome' => '1']) ?>" class="text-uppercase text-dark"><strong>Oshi No Ko <br> [Tome 1]</strong></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-2">7.95 €</div>
                  <div class="col-2">
                    <div class="d-flex align-items-center">
                      <div class="btn btn-items btn-items-decrease">-</div>
                      <input value="1" class="form-control text-center input-items" type="text">
                      <div class="btn btn-items btn-items-increase">+</div>
                    </div>
                  </div>
                  <div class="col-2 text-center">7.95 €</div>
                  <div class="col-1 text-center"><a href="#" class="cart-remove"> <i class="fa fa-times"></i></a>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="cart-item">
                <div class="row d-flex align-items-center text-center">
                  <div class="col-5">
                    <div class="d-flex align-items-center"><a href="<?= $router->generate('category-product', ['name' => 'oshi-no-ko', 'tome' => '2']) ?>"><img src="<?= $absoluteURL ?>/assets/images/products/oshi-no-ko-tome-2.jpg" alt="Oshi No Ko Tome 2" class="cart-item-img my-3"></a>
                      <div class="cart-title text-left"><a href="<?= $router->generate('category-product', ['name' => 'oshi-no-ko', 'tome' => '2']) ?>" class="text-uppercase text-dark"><strong>Oshi No Ko <br> [Tome 2]</strong></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-2">7.95 €</div>
                  <div class="col-2">
                    <div class="d-flex align-items-center">
                      <div class="btn btn-items btn-items-decrease">-</div>
                      <input value="1" class="form-control text-center input-items" type="text">
                      <div class="btn btn-items btn-items-increase">+</div>
                    </div>
                  </div>
                  <div class="col-2 text-center">7.95 €</div>
                  <div class="col-1 text-center"><a href="#" class="cart-remove"> <i class="fa fa-times"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="my-5 d-flex justify-content-between flex-column flex-lg-row"><a href="<?= $router->generate('main-home') ?>" class="btn btn-link text-muted"><i class="fa fa-chevron-left"></i> Continuer les achats</a><a href="#" class="btn btn-dark">Commander <i class="fa fa-chevron-right"></i> </a></div>
      </div>
      <div class="col-lg-3">
        <div class="block mb-5">
          <div class="block-header">
            <h6 class="text-uppercase mb-0">Récapitulatif</h6>
          </div>
          <div class="block-body bg-light pt-1">
            <p class="text-sm">Le coût de livraison est calculé en fonction des produits choisis</p>
            <ul class="order-summary mb-0 list-unstyled">
              <li class="order-summary-item"><span>Sous total</span><span>23.19 €</span></li>
              <li class="order-summary-item"><span>Livraison</span><span>10€</span></li>
              <li class="order-summary-item"><span>TVA</span><span>0€</span></li>
              <li class="order-summary-item border-0"><span>Total</span><strong class="order-summary-total">33.19 €</strong></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>