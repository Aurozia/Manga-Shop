<?php

namespace app\models;

use app\utils\database;
use PDO;

class Price extends coreModel
{
  private $amount;

  /**
   * Empty constructor
   */
  public function __construct()
  {
    // Do nothing
  }

  /**
   * Fonction qui récupère tous les prix dans la base de donnees
   *
   * @return array[Price] Un tableau contenant des objets de type Price
   */
  public function findAll()
  {
    // 1. Requete pour récupérer tous les prix par ordre croissant
    $sql = 'SELECT * FROM `price` ORDER BY amount ASC';

    // 2. Connexion à la BDD
    $pdo = Database::getPDO();

    // 3. Préparation de la requête
    $pdoStatement = $pdo->prepare($sql);

    // 4. Exécution de la requête
    if ($pdoStatement->execute()) {
      // 5. Recupere les resultats lie a cette requete
      // Les resultats aurait pu etre sous la forme d'un tableau associatif (PDO::FETCH__ASSOC) mais on souhaite les obtenir sous forme d'objet ! On utilise donc PDO::FETCH__CLASS en precisant la classe 'Price'
      $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'app\models\price');

      // 6. Retourne le tableau de Price
      return $results;
    } else {
      return false;
    }
  }

  /**
   * Fonction qui permet de recuperer les informations d'un prix en particulier grace a son id
   *
   * @param int $id l'id du prix en bdd
   * @return Price
   */
  public function find($id)
  {
    // 1. Requête pour récupérer UNE catégorie grâce à son nom
    $sql = 'SELECT * FROM `price` WHERE `id` = :id';

    // 2. Connexion à la BDD
    $pdo = Database::getPDO();

    // 3. Préparation de la requête
    $pdoStatement = $pdo->prepare($sql);

    // 4. Attribution des valeurs aux paramètres
    $pdoStatement->bindValue(':id', $id, PDO::PARAM_STR);

    // 5. Exécution de la requête
    if ($pdoStatement->execute()) {
      // 6. Récupération du résultat sous la forme d'un objet Price
      $result = $pdoStatement->fetchObject('app\models\price');

      // 7. Retourne l'objet Price ou null si non trouvé
      return $result !== false ? $result : null;
    } else {
      return false;
    }
  }

  /**
   * Get the value of amount
   */
  public function getAmount()
  {
    return $this->amount;
  }

  /**
   * Set the value of amount
   *
   * @return  self
   */
  public function setAmount($amount)
  {
    $this->amount = $amount;

    return $this;
  }
}
