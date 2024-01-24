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

    // 3. Exécute la requete
    $pdoStatement = $pdo->query($sql);

    // Recupere les resultats lie a cette requete
    // Les resultats auraient pu etre sous la forme d'un tableau associatif (PDO::FETCH__ASSOC) mais on souhaite les obtenir sous forme d'object ! On utilise donc PDO::FETCH__CLASS en precisant la classe 'Editor'
    $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'app\models\editor');

    // Retourne le tableau de Editor
    return $results;
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
        // 6. Récupération du résultat sous la forme d'un objet Category
        $result = $pdoStatement->fetchObject('app\models\editor');

        // 7. Retourne l'objet Category ou null si non trouvé
        return $result !== false ? $result : null;
    } else {
        // Gestion des erreurs
        // Vous pouvez logguer l'erreur, lancer une exception, ou prendre toute autre mesure nécessaire
        return null;
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
    $sql = 'SELECT * FROM `editor` WHERE `id` = ' . $id;

    // 2. Connexion à la BDD
    $pdo = Database::getPDO();

    // 3. Exécute la requete
    $pdoStatement = $pdo->query($sql);

    // On recupere le resultat sous la forme d'un objet Price
    $result = $pdoStatement->fetchObject('app\models\editor');

    // On retourne l'objet Price
    return $result;
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
