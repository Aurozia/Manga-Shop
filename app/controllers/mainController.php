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
}
