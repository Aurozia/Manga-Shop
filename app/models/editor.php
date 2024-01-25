<?php

namespace app\models;

use app\utils\database;
use PDO;

class Editor extends coreModel
{
  private $name;
  private $url;

  /**
   * Empty constructor
   */
  public function __construct()
  {
    // Do nothing
  }

  /**
   * Fonction qui récupère tous les éditeurs dans la base de donnees
   *
   * @return array[Editor] Un tableau contenant des objets de type Editor
   */
  public function findAll()
  {
    // 1. Requete pour récupérer tous les éditeurs par ordre alphabétique
    $sql = 'SELECT * FROM `editor` ORDER BY name';

    // 2. Connexion à la BDD
    $pdo = Database::getPDO();

    // 3. Préparation de la requête
    $pdoStatement = $pdo->prepare($sql);

    // 4. Exécution de la requête
    if ($pdoStatement->execute()) {
      // 5. Recupere les resultats lie a cette requete
      // Les resultats aurait pu etre sous la forme d'un tableau associatif (PDO::FETCH__ASSOC) mais on souhaite les obtenir sous forme d'objet ! On utilise donc PDO::FETCH__CLASS en precisant la classe 'Editor'
      $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'app\models\editor');

      // 6. Retourne le tableau de Editor
      return $results;
    } else {
      return false;
    }
  }

  /**
   * Fonction qui permet de recuperer les informations d'un éditeur en particulier grace a son id
   *
   * @param int $id l'id de l'éditeur en bdd
   * @return Editor
   */
  public function find($name)
  {
    // 1. Requête pour récupérer UNE catégorie grâce à son nom
    $sql = 'SELECT * FROM `editor` WHERE `name` = :name';

    // 2. Connexion à la BDD
    $pdo = Database::getPDO();

    // 3. Préparation de la requête
    $pdoStatement = $pdo->prepare($sql);

    // 4. Attribution des valeurs aux paramètres
    $pdoStatement->bindValue(':name', $name, PDO::PARAM_STR);

    // 5. Exécution de la requête
    if ($pdoStatement->execute()) {
      // 6. Récupération du résultat sous la forme d'un objet Editor
      $result = $pdoStatement->fetchObject('app\models\editor');

      // 7. Retourne l'objet Editor ou null si non trouvé
      return $result !== false ? $result : null;
    } else {
      return false;
    }
  }

  /**
   * Fonction qui permet de recuperer les informations d'un éditeur en particulier grace a son id
   *
   * @param int $id l'id de l'éditeur en bdd
   * @return Editor
   */
  public function findById($id)
  {
    // 1. Requete pour récupérer UN prix grace a son id
    $sql = 'SELECT * FROM `editor` WHERE `id` = :id';

    // 2. Connexion à la BDD
    $pdo = Database::getPDO();

    // 3. Préparation de la requête
    $pdoStatement = $pdo->prepare($sql);

    // 4. Attribution des valeurs aux paramètres
    $pdoStatement->bindValue(':id', $id, PDO::PARAM_INT);

    // 5. Exécution de la requête
    if ($pdoStatement->execute()) {
      // 6. On recupere le resultat sous la forme d'un objet Editor
      $result = $pdoStatement->fetchObject('app\models\editor');

      // 7. On retourne l'objet Editor
      return $result;
    } else {
      return false;
    }
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
}
