<?php

namespace app\controllers;

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

        require_once __DIR__ . "/../views/partials/header.tpl.php";
        require_once __DIR__ . "/../views/$viewName.tpl.php";
        require_once __DIR__ . "/../views/partials/footer.tpl.php";
    }
}
