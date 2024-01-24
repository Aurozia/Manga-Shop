<?php

namespace app\models;

use app\utils\database;
use PDO;

class Category extends coreModel
{
  private $name;
  private $subtitle;
  private $picture;
  private $url;
  private $home_order;
  private $home_subtitle;

  /**
   * Empty constructor
   */
  public function __construct()
  {
    // Do nothing
  }

  /**
   * Fonction qui récupère toutes les catégories dans la base de donnees
   *
   * @return array[Category] Un tableau contenant des objets de type Category
   */
  public function findAll()
  {
    // 1. Requete pour récupérer toutes les catégories par ordre alphabétique
    $sql = 'SELECT * FROM `category` ORDER BY `name` ASC';

    // 2. Connexion à la BDD
    $pdo = Database::getPDO();

    // 3. Exécute la requete
    $pdoStatement = $pdo->query($sql);

    // Recupere les resultats lie a cette requete
    // Les resultats auraient pu etre sous la forme d'un tableau associatif (PDO::FETCH__ASSOC) mais on souhaite les obtenir sous forme d'object ! On utilise donc PDO::FETCH__CLASS en precisant la classe 'Category'
    $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'app\models\category');

    // Retourne le tableau de Category
    return $results;
  }

  /**
   * Fonction qui permet de recuperer les informations d'une catégorie en particulier grace a son id
   *
   * @param int $name le nom de la catégorie en bdd
   * @return Category
   */
  public function find($name)
  {
      // 1. Requête pour récupérer UNE catégorie grâce à son nom
      $sql = 'SELECT * FROM `category` WHERE `name` = :name';
  
      // 2. Connexion à la BDD
      $pdo = Database::getPDO();
  
      // 3. Préparation de la requête
      $pdoStatement = $pdo->prepare($sql);
      
      // 4. Attribution des valeurs aux paramètres
      $pdoStatement->bindValue(':name', $name, PDO::PARAM_STR);
  
      // 5. Exécution de la requête
      if ($pdoStatement->execute()) {
          // 6. Récupération du résultat sous la forme d'un objet Category
          $result = $pdoStatement->fetchObject('app\models\Category');
  
          // 7. Retourne l'objet Category ou null si non trouvé
          return $result !== false ? $result : null;
      } else {
          // Gestion des erreurs
          // Vous pouvez logguer l'erreur, lancer une exception, ou prendre toute autre mesure nécessaire
          return null;
      }
  }

  /**
   * Fonction qui permet de recuperer les 3 catégories à mettre en avant sur la home page
   *
   * @return array[Category] Un tableau contenant des objets de type Category
   */
  public function findCategoriesForHomePage()
  {
  // 1. Requete pour récupérer les 3 catégories
      $sql = 'SELECT * FROM `category` WHERE home_order > 0 ORDER BY home_order ASC LIMIT 3';

  // 2. Connexion à la BDD
  $pdo = Database::getPDO();

  // 3. Exécute la requete
  $pdoStatement = $pdo->query($sql);

      // On Recupere les resultats lie a cette requete
      // Les resultats auraient pu etre sous la forme d'un tableau associatif (PDO::FETCH__ASSOC) mais on souhaite les obtenir sous forme d'object ! On utilise donc PDO::FETCH__CLASS en precisant la classe 'Category'
      $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'app\models\category');

      // On retourne l'objet Category
      return $results;
  }

  /**
   * Get the value of name
   */ 
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */ 
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of subtitle
   */ 
  public function getSubtitle()
  {
    return $this->subtitle;
  }

  /**
   * Set the value of subtitle
   *
   * @return  self
   */ 
  public function setSubtitle($subtitle)
  {
    $this->subtitle = $subtitle;

    return $this;
  }

  /**
   * Get the value of picture
   */ 
  public function getPicture()
  {
    return $this->picture;
  }

  /**
   * Set the value of picture
   *
   * @return  self
   */ 
  public function setPicture($picture)
  {
    $this->picture = $picture;

    return $this;
  }

    /**
   * Get the value of url
   */ 
  public function getUrl()
  {
    return $this->url;
  }

  /**
   * Set the value of url
   *
   * @return  self
   */ 
  public function setUrl($url)
  {
    $this->url = $url;

    return $this;
  }

  /**
   * Get the value of home_order
   */ 
  public function getHome_order()
  {
    return $this->home_order;
  }

  /**
   * Set the value of home_order
   *
   * @return  self
   */ 
  public function setHome_order($home_order)
  {
    $this->home_order = $home_order;

    return $this;
  }

  /**
   * Get the value of home_subtitle
   */ 
  public function getHome_subtitle()
  {
    return $this->home_subtitle;
  }

  /**
   * Set the value of home_subtitle
   *
   * @return  self
   */ 
  public function setHome_subtitle($home_subtitle)
  {
    $this->home_subtitle = $home_subtitle;

    return $this;
  }
}
