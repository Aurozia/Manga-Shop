<?php

namespace app\controllers;

class mainController extends coreController
{
  /**
   * Shows the home page
   *
   * @param [type] $params : pas utilisé
   * @return void
   */
  // Method that will display the home page
  public function home()
  {
    $this->show(
      'main/home'
    );
  }

  /**
   * Shows the home page
   *
   * @param [type] $params : pas utilisé
   * @return void
   */
  // Method that will display the cart page
  public function cart()
  {
    $this->show(
      'main/cart'
    );
  }
}
