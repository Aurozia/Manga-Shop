<?php

namespace app\controllers;

class editorController extends coreController
{
  /**
   * Shows the list of a editor
   *
   * @param [type] $params : pas utilisé
   * @return void
   */
  public function list()
  {
    $this->show(
      'editor/list'
    );
  }
}
