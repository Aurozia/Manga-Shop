<?php

namespace app\controllers;

use app\models\product;
use app\models\editor;
use app\models\price;

class editorController extends coreController
{
  /**
   * Shows the list of a editor
   *
   * @param [type] $params : pas utilisé
   * @return void
   */
  public function list($params, $order = null)
  {
    $tableName = 'editor';

    if (str_contains($params['name'], '/')) {
      $url = explode('/', $params['name']);
      $name = $url[0];
    }
    else {
      $name = $params['name'];
    }

    // 1. préparation des données
    $editorObj = new editor();
    $editorFoundInDB  = $editorObj->find($name);

    if ($editorFoundInDB) {
      $productsByEditorObj = new Product();

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
				$productsByEditorList = $productsByEditorObj->findAllBy($editorFoundInDB->getId(), $table = 'editor_id', $order);
			}
			else {
        $productsByEditorList = $productsByEditorObj->findProductsByEditor($editorFoundInDB->getId());
      }

      $productsByEditorListBis = [];

      foreach ($productsByEditorList as $productsByEditor) {
        if ($productsByEditor->getTome_id() === 1) {
          $priceProductObj = new Price();
          $priceProductFoundInDB = $priceProductObj->find($productsByEditor->getPrice_id());

          $productsByEditor->priceAmount = $priceProductFoundInDB->getAmount();

          array_push($productsByEditorListBis, $productsByEditor);
        }
      }

      // 2. appel de la vue
      $this->show(
        'partials/list',
        [
          'tableName' => $tableName,
          // 'editorObj' => $editorFoundInDB,
          // 'productsByEditorList' => $productsByEditorListBis,
          'tableObj' => $editorFoundInDB,
          'productList' => $productsByEditorListBis
        ]
      );
    } else {
      http_response_code(404);
      $this->show('error/error404');
    }
  }
}
