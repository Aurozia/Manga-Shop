<?php

namespace app\controllers;

use app\models\product;
use app\models\category;
use app\models\editor;
use app\models\price;

class categoryController extends coreController
{
  /**
   * Shows the product
   *
   * @param [type] $params : pas utilisé
   * @return void
   */
  public function product($params)
  {
    // 1. créer une nouvelle instance de Product "vide" (modifie pas ses attributs)
    $productObj = new Product();
    // 2. executer la fonction find de Product en passant par l'intance qui a été créée
    $productFoundInDB = $productObj->find($params['name'], $params['tome']);

    if ($productFoundInDB) {
      // 1. créer une nouvelle instance de Editor "vide" (modifie pas ses attributs)
      $editorProductObj = new Editor();
      // 2. executer la fonction find() de Editor en passant par l'intance que je viens de créer pour récupérer le nom de l'éditeur via editor_id de product
      $editorProductFoundInDB = $editorProductObj->findById($productFoundInDB->getEditor_id());

      // 1. créer une nouvelle instance de Price "vide" (modifie pas ses attributs)
      $priceProductObj = new Price();
      // 2. executer la fonction find() de Price en passant par l'intance que je viens de créer pour récupérer le prix via price_id de product
      $priceProductFoundInDB = $priceProductObj->find($productFoundInDB->getPrice_id());

      $nameProductFoundInDB = $productObj->findProductsByName($productFoundInDB->getName());

      $this->show(
        'category/product',
        [
          'product_url' => $params['name'],
          'product_tome' => $params['tome'],
          'productObj' => $productFoundInDB,
          'editorProductObj' => $editorProductFoundInDB,
          'priceProductObj' => $priceProductFoundInDB,
          'nameProductObj' => $nameProductFoundInDB
        ]
      );
    } else {
      http_response_code(404);
      $this->show('error/error404');
    }
  }

  /**
   * Shows the list of a category
   *
   * @param [type] $params : pas utilisé
   * @return void
   */
  public function list($params, $order = null)
  {
    $tableName = 'category';

    if (str_contains($params['name'], '/')) {
      $url = explode('/', $params['name']);
      $name = $url[0];
    }
    else {
      $name = $params['name'];
    }

    // 1. préparation des données
    $categoryObj = new category();
    $categoryFoundInDB  = $categoryObj->find($name);

    if ($categoryFoundInDB) {
      $productsByCategoryObj = new Product();

      if(!empty($_POST)) {
				if (isset($_POST['select'])) {
					$selectedOption = $_POST['select'];
					if (str_contains($selectedOption, 'by-name')) {
						$order = 'name';
					} else if (str_contains($selectedOption, 'by-price')) {
						$order = 'price_id';
					} else {
						$order = 'null';
					}
				}
			}

      if($order!==null) {
				$productsByCategoryList = $productsByCategoryObj->findAllBy($categoryFoundInDB->getId(), $table = 'category_id', $order);
			}
			else {
        $productsByCategoryList = $productsByCategoryObj->findProductsByCategory($categoryFoundInDB->getId());
      }

      $productsByCategoryListBis = [];

      foreach ($productsByCategoryList as $productsByCategory) {
        if ($productsByCategory->getTome_id() === 1) {

          $editorProductObj = new Editor();
          $editorProductFoundInDB = $editorProductObj->findById($productsByCategory->getEditor_id());

          $priceProductObj = new Price();
          $priceProductFoundInDB = $priceProductObj->find($productsByCategory->getPrice_id());

          $productsByCategory->editorName = $editorProductFoundInDB->getName();
          $productsByCategory->priceAmount = $priceProductFoundInDB->getAmount();

          array_push($productsByCategoryListBis, $productsByCategory);
        }
      }

      // 2. appel de la vue
      $this->show(
        'partials/list',
        [
          'tableName' => $tableName,
          // 'categoryObj' => $categoryFoundInDB,
          // 'productsByCategoryList' => $productsByCategoryListBis,
          'tableObj' => $categoryFoundInDB,
          'productList' => $productsByCategoryListBis
        ]
      );
    } else {
      http_response_code(404);
      $this->show('error/error404');
    }
  }
}
