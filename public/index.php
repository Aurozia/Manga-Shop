<?php

// Utilise l'autoloader de composer pour venir charge toutes les dependances de notre projet
require_once __DIR__ . '/../vendor/autoload.php';

// Récupère le nom de la page que l'user souhaite atteindre
// L'operateur ?? permet de mettre une valeur par defaut dans le cas ou $_GET['_url'] n'est pas defini
$pageName = $_GET['_url'] ?? '/';

// Pour utiliser AltoRouter il va falloir instancier (creer un nouvel objet a partir de) la classe AltoRouter.
$router = new AltoRouter();

// Permet de definir le dossier racine de l'application
// Utilise la superglobale $_SERVER pour recuperer la valeur de notre point d'entree de l'application
// C'est grace au .htaccess que l'on a cette valeur dans la cle 'BASE_URI'
$router->setBasePath($_SERVER['BASE_URI']);

// Apres avoir instancier AltoRouter, il va falloir effectuer un mapping. C'est a dire lister les routes qui devront etre disponibles sur notre application
$router->map(
  // 1er argument => On defini la methode de la requete (on a vu les methodes GET et POST), si on veut simplement afficher une page, on utilisera la methode GET
  'GET',
  // 2eme argument => On liste le chemin, ici on fait reference a la route '/' donc la page d'accueil de notre application
  '/',
  // 3eme argument => Les informations qui contiennent ce que l'on doit executer lorsque cette route est atteinte
  [
      'method' => 'home',
      'controller' => 'mainController'
  ],
  // 4eme argument (facultatif)
  'main-home'
);

// Une fois que toutes sont definie, on va pouvoir demander a AltoRouter de verifier si la route atteinte par l'utilisation est une route qui correspond a celles que l'on a listees precedemment
$match = $router->match();

if ($match) {
    // Récupère le nom du controller à partir du target (le 3eme argument que l'on a renseigne au moment ou l'on a défini la route avec $router->map)
    $controllerToUse = $match['target']['controller'];
    // Récupère la méthode du controller à partir du target (le 3eme argument que l'on a renseigne au moment ou l'on a défini la route avec $router->map)
    $methodToCall = $match['target']['method'];

    // Crée une instance du bon controlleur, afin de pouvoir utiliser toutes les methodes de ce dernier
    $controller = new ('\app\controllers\\' . $controllerToUse)();

    // Appelle la bonne methode du controller
    $controller->$methodToCall($match['params']);
} else {
    // header('HTTP/1.0 404 Not Found');
    echo "Error 404";
}
