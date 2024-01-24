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
  public function list($params)
  {
    // 1. préparation des données
    $editorObj = new editor();
    $editorFoundInDB  = $editorObj->find($params['name']);

    if ($editorFoundInDB) {
      $productsByEditorObj = new Product();
      $productsByEditorList = $productsByEditorObj->findProductsByEditor($editorFoundInDB->getId());

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
        'editor/list',
        [
          'editorObj' => $editorFoundInDB,
          'productsByEditorList' => $productsByEditorListBis
        ]
      );
    } else {
      http_response_code(404);
      $this->show('error/error404');
    }
  }
}
