<?php

namespace app\models;

use app\utils\database;
use PDO;

class Product extends coreModel
{
    private $name;
    private $author;
    private $description;
    private $picture;
    private $url;
    private $status;
    private $tome_id;
    private $category_id;
    private $editor_id;
    private $price_id;

    /**
     * Empty constructor
     */
    public function __construct()
    {
        // Do nothing
    }

    /**
     * Fonction qui récupère toutes les produits dans la base de donnees
     *
     * @return array[Product] Un tableau contenant des objets de type Product
     */
    public function findAll()
    {
        // 1. Requete pour récupérer tous les produits par ordre alphabétique (String)
        $sql = 'SELECT * FROM `product` WHERE `tome_id` = 1 ORDER BY name';

        // 2. Connexion à la BDD
        $pdo = Database::getPDO();

        // 3. Exécute la requete
        $pdoStatement = $pdo->query($sql);

        // Recupere les resultats lie a cette requete
        // Les resultats auraient pu etre sous la forme d'un tableau associatif (PDO::FETCH__ASSOC) mais on souhaite les obtenir sous forme d'object ! On utilise donc PDO::FETCH__CLASS en precisant la classe 'Product'
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'app\models\product');

        // Retourne le tableau de Product
        return $results;
    }

    /**
     * Fonction qui permet de recuperer les informations d'un produit en particulier grace a son url
     *
     * @param string $url l'url du produit en bdd
     * @param int $tome le tome du produit en bdd
     * @return Product
     */
    public function find($url, $tome)
    {
        // 1. Requete pour récupérer UN produit grace a son url (String)
        $sql = "SELECT * FROM `product` WHERE `url` = '{$url}' AND `tome_id` = '{$tome}'";

        // 2. Connexion à la BDD
        $pdo = Database::getPDO();

        // 3. Exécute la requete
        $pdoStatement = $pdo->query($sql);

        // On recupere le resultat sous la forme d'un objet Product
        $result = $pdoStatement->fetchObject('app\models\product');

        // On retourne l'objet Product
        return $result;
    }

    /**
     * Fonction qui permet de recuperer les produits de même nom en particulier
     *
     * @return array[Product] Un tableau contenant des objets de type Product
     */
    public function findProductsByName($name)
    {
        $escapedName = "'" . addslashes($name) . "'";

        // 1. Requete pour récupérer tous les produits par rapport au nom en particulier
        $sql = "SELECT * FROM `product` WHERE `name` = $escapedName";
    
        // 2. Connexion à la BDD
        $pdo = Database::getPDO();

        // 3. Exécute la requete
        $pdoStatement = $pdo->query($sql);

        // On Recupere les resultats lie a cette requete
        // Les resultats auraient pu etre sous la forme d'un tableau associatif (PDO::FETCH__ASSOC) mais on souhaite les obtenir sous forme d'object ! On utilise donc PDO::FETCH__CLASS en precisant la classe 'Product'
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'app\models\product');

        // On retourne le tableau de Product
        return $results;
    }

    /**
     * Fonction qui permet de recuperer les produits d'une catégorie en particulier
     *
     * @return array[Product] Un tableau contenant des objets de type Product
     */
    public function findProductsByCategory($id)
    {
        // 1. Requete pour récupérer tous les produits par rapport  a une catégorie en particulier
        $sql = 'SELECT * FROM `product` WHERE `category_id` = ' . $id;

        // 2. Connexion à la BDD
        $pdo = Database::getPDO();

        // 3. Exécute la requete
        $pdoStatement = $pdo->query($sql);

        // On Recupere les resultats lie a cette requete
        // Les resultats auraient pu etre sous la forme d'un tableau associatif (PDO::FETCH__ASSOC) mais on souhaite les obtenir sous forme d'object ! On utilise donc PDO::FETCH__CLASS en precisant la classe 'Product'
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'app\models\product');

        // On retourne le tableau de Product
        return $results;
    }

    /**
     * Fonction qui permet de recuperer les produits d'un type de produits en particulier
     *
     * @return array[Product] Un tableau contenant des objets de type Product
     */
    public function findProductsByEditor($id)
    {
        // 1. Requete pour récupérer tous les produits par rapport  a un éditeur en particulier
        $sql = 'SELECT * FROM `product` WHERE `editor_id` = ' . $id;

        // 2. Connexion à la BDD
        $pdo = Database::getPDO();

        // 3. Exécute la requete
        $pdoStatement = $pdo->query($sql);

        // On Recupere les resultats lie a cette requete
        // Les resultats auraient pu etre sous la forme d'un tableau associatif (PDO::FETCH__ASSOC) mais on souhaite les obtenir sous forme d'object ! On utilise donc PDO::FETCH__CLASS en precisant la classe 'Product'
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'app\models\product');

        // On retourne l'objet Product
        return $results;
    }

    /**
     * Fonction qui permet de recuperer les produits d'une marque en particulier
     *
     * @return array[Product] Un tableau contenant des objets de type Product
     */
    public function  findProductsByPrice($id)
    {
        // 1. Requete pour récupérer tous les produits par rapport  a un prix en particulier
        $sql = 'SELECT * FROM `product` WHERE price_id = ' . $id;

        // 2. Connexion à la BDD
        $pdo = Database::getPDO();

        // 3. Exécute la requete
        $pdoStatement = $pdo->query($sql);

        // On Recupere les resultats lie a cette requete
        // Les resultats auraient pu etre sous la forme d'un tableau associatif (PDO::FETCH__ASSOC) mais on souhaite les obtenir sous forme d'object ! On utilise donc PDO::FETCH__CLASS en precisant la classe 'Product'
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'app\models\product');

        // On retourne l'objet Product
        return $results;
    }

    /**
     * Fonction qui permet de recuperer les produits d'une catégorie en particulier + qui trie les produits par nom/prix de la catégorie en question
     *
     * @return array[Product] Un tableau contenant des objets de type Product
     */
    public function findAllBy($id, $order)
    {
        // 1. Requete pour récupérer tous les produits d'une catégorie en particulier + qui trie les produits par nom/prix de la catégorie en question
        $sql = 'SELECT * FROM `product` WHERE `category_id` = ' . $id . ' ORDER BY ' . $order . ' ASC';

        // 2. Connexion à la BDD
        $pdo = Database::getPDO();

        // 3. Exécute la requete
        $pdoStatement = $pdo->query($sql);

        // On Recupere les resultats lie a cette requete
        // Les resultats auraient pu etre sous la forme d'un tableau associatif (PDO::FETCH__ASSOC) mais on souhaite les obtenir sous forme d'object ! On utilise donc PDO::FETCH__CLASS en precisant la classe 'Product'
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'app\models\product');

        // On retourne l'objet Product
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
     * Get the value of author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

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
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of tome_id
     */
    public function getTome_id()
    {
        return $this->tome_id;
    }

    /**
     * Set the value of tome_id
     *
     * @return  self
     */
    public function setTome_id($tome_id)
    {
        $this->tome_id = $tome_id;

        return $this;
    }

    /**
     * Get the value of category_id
     */
    public function getCategory_id()
    {
        return $this->category_id;
    }

    /**
     * Set the value of category_id
     *
     * @return  self
     */
    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }

    /**
     * Get the value of editor_id
     */
    public function getEditor_id()
    {
        return $this->editor_id;
    }

    /**
     * Set the value of editor_id
     *
     * @return  self
     */
    public function setEditor_id($editor_id)
    {
        $this->editor_id = $editor_id;

        return $this;
    }

    /**
     * Get the value of price_id
     */
    public function getPrice_id()
    {
        return $this->price_id;
    }

    /**
     * Set the value of price_id
     *
     * @return  self
     */
    public function setPrice_id($price_id)
    {
        $this->price_id = $price_id;

        return $this;
    }
}
