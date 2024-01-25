<?php

namespace app\controllers;

// Classe gérant les erreurs (403, 404)
class errorController extends coreController
{
  /**
   * Méthode gérant l'affichage de la page 404
   *
   * @return void
   */
  public function error404()
  {
    // On envoie le header 404
    header('HTTP/1.0 404 Not Found');

    // Puis on gère l'affichage
    $this->show('error/error404');
  }

  /**
   * Méthode gérant l'affichage de la page 403
   *
   * @return void
   */
  public function error403()
  {
    // On envoie le header 403
    header('HTTP/1.0 403 Forbidden');

    // Puis on gère l'affichage
    $this->show('error/error403');
  }
}
