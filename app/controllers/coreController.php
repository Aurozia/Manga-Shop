<?php

namespace app\controllers;

use app\models\product;
use app\models\category;
use app\models\editor;

class coreController
{
    // Empty constructor
    public function __construct()
    {
        // Do nothing
    }

    /**
     * Shows the templates (View)
     *
     * @param [type] $viewName
     * @param array $viewData
     * @return void
     */
    // Une fonction qui va permettre d'assembler les differents templates
    protected function show($viewName, $viewData = [])
    {
        global $router;

        // Chemin absolue
        $absoluteURL = $_SERVER['BASE_URI'];

        // Récupère un tableau de tous les produits en base de donnees
        $productObj = new Product();
        $productList = $productObj->findAll();

        // Récupère un tableau de toutes les catégories en base de donnees
        $categoryObj = new Category();
        $categoryList = $categoryObj->findAll();

        // Récupère un tableau de tous les éditeurs en base de donnees
        $editorObj = new Editor();
        $editorList = $editorObj->findAll();

        require_once __DIR__ . "/../views/partials/header.tpl.php";
        require_once __DIR__ . "/../views/$viewName.tpl.php";
        require_once __DIR__ . "/../views/partials/footer.tpl.php";
    }
}
