<?php

namespace app\controllers;

class categoryController extends coreController
{
  /**
   * Shows the product
   *
   * @param [type] $params : pas utilisé
   * @return void
   */
  public function product()
  {
    $this->show(
      'category/product'
    );
  }

  /**
   * Shows the list of a category
   *
   * @param [type] $params : pas utilisé
   * @return void
   */
  public function list()
  {
    $this->show(
      'category/list'
    );
  }
}
