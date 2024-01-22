<?php

namespace app\controllers;

use app\models\category;

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
		// 1. créer une nouvelle instance de Category "vide" (modifie pas ses attributs)
    $categoryObj = new Category();

		// 2. executer la fonction findCategoriesForHomePage() de Category en passant par l'intance que je viens de créer
		$categoryForHomePage = $categoryObj->findCategoriesForHomePage();

    $this->show(
      'main/home',
      [
          'categoryForHomePage' => $categoryForHomePage
      ]
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
