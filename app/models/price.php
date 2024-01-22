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

    // 3. Exécute la requete
    $pdoStatement = $pdo->query($sql);

    // Recupere les resultats lie a cette requete
    // Les resultats auraient pu etre sous la forme d'un tableau associatif (PDO::FETCH__ASSOC) mais on souhaite les obtenir sous forme d'object ! On utilise donc PDO::FETCH__CLASS en precisant la classe 'Price'
    $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'app\models\price');

    // Retourne le tableau de Price
    return $results;
  }

  /**
   * Fonction qui permet de recuperer les informations d'un prix en particulier grace a son id
   *
   * @param int $id l'id du prix en bdd
   * @return Price
   */
  public function find($id)
  {
    // 1. Requete pour récupérer UN prix grace a son id
    $sql = 'SELECT * FROM `price` WHERE `id` = ' . $id;

    // 2. Connexion à la BDD
    $pdo = Database::getPDO();

    // 3. Exécute la requete
    $pdoStatement = $pdo->query($sql);

    // On recupere le resultat sous la forme d'un objet Price
    $result = $pdoStatement->fetchObject('app\models\price');

    // On retourne l'objet Price
    return $result;
  }

  /**
   * Get the value of amount
   */
  public function getAmout()
  {
    return $this->amount;
  }

  /**
   * Set the value of amount
   *
   * @return  self
   */
  public function setAmout($amount)
  {
    $this->amount = $amount;

    return $this;
  }
}
