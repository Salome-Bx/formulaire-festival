<?php

class User
{
  private $_id;
  private $_nom;
  private $_prenom;
  private $_mail;
  private $_telephone;
  private $_adresse;
  // private $_password;

  /**
   * Création d'un nouvel utilisateur
   * @param string $nom      Le nom de l'utilisateur
   * @param string $prenom   Le prénom de l'utilisateur
   * @param string $mail     Le mail de l'utilisateur
   * @param string $password Le mot de passe chiffré de l'utilisateur
   * @param int $id       L'id de l'utilisateur si on le connait, sinon rien.
   */
  function __construct(string $nom, string $prenom, string $mail, string $password, int|string $id = "à créer")
  {

    $this->setId($id);
    $this->setNom($nom);
    $this->setPrenom($prenom);
    $this->setMail($mail);
    $this->setPassword($password);
  }

  public function getId(): int
  {
    return $this->_id;
  }
  public function setId(int|string $id): void
  {
    if (is_string($id) && $id === "à créer") {
      $this->_id = $this->CreerNouvelId();
    } else {
      $this->_id = $id;
    }
  }
  public function getNom(): string
  {
    return $this->_nom;
  }
  public function setNom(string $nom): void
  {
    $this->_nom = $nom;
  }
  public function getPrenom(): string
  {
    return $this->_prenom;
  }
  public function setPrenom(string $prenom): void
  {
    $this->_prenom = $prenom;
  }
  public function getMail(): string
  {
    return $this->_mail;
  }
  public function setMail(string $mail): void
  {
    $this->_mail = $mail;
  }
  public function getPassword(): string
  {
    return $this->_password;
  }
  public function setPassword(string $password): void
  {
    $this->_password = $password;
  }

  private function CreerNouvelId()
  {

    $Database = new Database();
    $utilisateurs = $Database->getAllUtilisateurs();

    // On crée un tableau dans lequel on stockera tous les ids existants.
    $IDs = [];

    foreach ($utilisateurs as $utilisateur) {
      $IDs[] = $utilisateur->getId();
    }

    // Ensuite, on regarde si un chiffre existe dans le tableau, et si non, on l'incrémente
    $i = 1;
    $unique = false;
    while ($unique === false) {
      if (in_array($i, $IDs)) {
        $i++;
      } else {
        $unique = true;
      }
    }
    return $i;
  }

  public function getObjectToArray(): array
  {
    return [
      "id" => $this->getId(),
      "nom" => $this->getNom(),
      "prenom" => $this->getPrenom(),
      "mail" => $this->getMail(),
      "password" => $this->getPassword()
    ];
  }
}
