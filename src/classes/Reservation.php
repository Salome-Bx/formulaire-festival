<?php

class Reservation
{
    private $_id;
    private $_nbrReservation;
    private $_typeRerservation;
    private $_prixTotalReservation;
    private $_nuit;
    private $_prixTotalNuit;
    private $_nbrEnfant;
    private $_nbrCasqueEnfant;
    private $_prixTotalCasqueEnfant;
    private $_nbrDescenteLuge;
    private $_prixDescenteLuge;
    public $_prixTotal;

    function __construct(int $nbrReservation, string $typeRerservation, string $nuit, bool $nbrEnfant, int $nbrCasqueEnfant, int $nbrDescenteLuge, int|string $id = "à créer")
    {
        $this->setId($id);
        $this->setNbrReservation($nbrReservation);
        $this->setTypeRerservation($typeRerservation);
        $this->setPrixTotalReservation($typeRerservation);
        $this->setNuit($nuit);
        $this->setPrixTotalNuit($nuit);
        $this->setNbrEnfant($nbrEnfant);
        $this->setNbrCasqueEnfant($nbrCasqueEnfant);
        $this->setPrixTotalCasqueEnfant($nbrCasqueEnfant);
        $this->setNbrDescenteLuge($nbrDescenteLuge);
        $this->setPrixDescenteLuge($nbrDescenteLuge);
    }


    ////////////Function copier-coller////////////
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


    ////////////Nos fonctions////////////
    public function getNbrReservation(): int
    {
        return $this->_nbrReservation;
    }
    public function setNbrReservation(int $nbrReservation): void
    {
        $this->_nbrReservation = $nbrReservation;
    }

    public function getTypeRerservation(): string
    {
        return $this->_typeRerservation;
    }
    public function setTypeRerservation(string $typeRerservation): void
    {
        $this->_typeRerservation = $typeRerservation;
    }

    public function getPrixTotalReservation(): int
    {
        return $this->_prixTotalReservation;
    }
    public function setPrixTotalReservation(string $typeRerservation): int
    {
        if ($typeRerservation === '') {
            //Là il faut compléter pour que suivant le type de reservation ça nous renvoit un prix (ici j'ai mis 40 pour l'exemple)

            return $this->_prixTotalReservation = 40 * $this->getNbrReservation();
        }
    }

    public function getNuit(): string
    {
        return $this->_nuit;
    }
    public function setNuit(string $nuit): void
    {
        $this->_nuit = $nuit;
    }

    public function getPrixTotalNuit(): int
    {
        return $this->_prixTotalNuit;
    }
    public function setPrixTotalNuit(string $nuit): int
    {
        if ($nuit === '') {
            //Là il faut compléter pour que suivant le nombre et le type de nuit (tente ou camion) ça nous renvoit un prix (ici j'ai mis 5 pour l'exemple)
            return $this->_prixTotalNuit = 5;
        }
    }

    public function getNbrEnfant(): bool
    {
        return $this->_nbrEnfant;
    }
    public function setNbrEnfant(bool $nbrEnfant): void
    {
        $this->_nbrEnfant = $nbrEnfant;
    }

    public function getNbrCasqueEnfant(): string
    {
        return $this->_nbrCasqueEnfant;
    }
    public function setNbrCasqueEnfant(string $nbrCasqueEnfant): void
    {
        $this->_nbrCasqueEnfant = $nbrCasqueEnfant;
    }

    public function getPrixTotalCasqueEnfant(): int
    {
        return $this->_prixTotalCasqueEnfant;
    }
    public function setPrixTotalCasqueEnfant(int $nbrCasqueEnfant): void
    {
        $this->_prixTotalCasqueEnfant = $nbrCasqueEnfant * 2;
    }

    public function getNbrDescenteLuge(): string
    {
        return $this->_nbrDescenteLuge;
    }
    public function setNbrDescenteLuge(string $nbrDescenteLuge): void
    {
        $this->_nbrDescenteLuge = $nbrDescenteLuge;
    }

    public function getPrixDescenteLuge(): int
    {
        return $this->_prixDescenteLuge;
    }
    public function setPrixDescenteLuge(int $nbrDescenteLuge): void
    {
        $this->_prixDescenteLuge = $nbrDescenteLuge * 5;
    }



    ////////////Attention fonciton copié coller, qui n'est pas à jour avec notre code////////////
    // private function CreerNouvelId()
    // {
    //     $Database = new Database();
    //     $utilisateurs = $Database->getAllUtilisateurs();

    //     // On crée un tableau dans lequel on stockera tous les ids existants.
    //     $IDs = [];

    //     foreach ($utilisateurs as $utilisateur) {
    //         $IDs[] = $utilisateur->getId();
    //     }
    // }

    ////////////Nos fonctions////////////
    public function calculerPrix(): int
    {
        $prixTotal = $this->getPrixTotalReservation() + $this->getPrixTotalNuit() + $this->getPrixTotalCasqueEnfant() + $this->getPrixTotalCasqueEnfant() + $this->getPrixDescenteLuge();
        return $this->_prixTotal = $prixTotal;
    }
}
