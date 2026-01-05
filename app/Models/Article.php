<?php

namespace App\Models;

use DateTime;

class Article
{
    private $id;
    private string $contenu;
    private string $titre;
    private DateTime $date_creation;

    public function __construct($id,$contenu,$titre,$date_creation)
    {
        $this->id = $id;
        $this->contenu = $contenu;
        $this->titre = $titre;
        $this->date_creation = $date_creation;

    }
/*****************************ID******************************** */
    // Getter pour l'ID
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        if (is_int($id) && $id > 0) {
            $this->id = $id;
        } else {
            // Gérer l'erreur ou ignorer la modification
            echo "Erreur : ID invalide.";
        }
    }
/*****************************contenu******************************** */
    public function setcontenu(string $nouvelcontenu): void {
        if ($nouvelcontenu != '' ) {
            $this->contenu = $nouvelcontenu; 
        } else {
            echo "Erreur : le contenu doit pas être vide\n"; 
        }
    }

    // Getter : Permet de lire la valeur de le contenu
    public function getcontenu(): string {
        return $this->contenu;
    }

/*****************************TITRE******************************** */
    public function settitre(string $nouveltitre): void {
        if ($nouveltitre != '' ) {
            $this->titre = $nouveltitre; 
        } else {
            echo "Erreur : le titre doit pas être vide\n"; 
        }
    }

    // Getter : Permet de lire la valeur de le titre
    public function gettitre(): string {
        return $this->titre;
    }
    
    /*****************************date_creation******************************** */
    public function setdate_creation(DateTime $nouveldate_creation): void {
        if ($nouveldate_creation != '' ) {
            $this->date_creation = $nouveldate_creation; 
        } else {
            echo "Erreur : le date_creation doit pas être vide\n"; 
        }
    }

    // Getter : Permet de lire la valeur de le date_creation
    public function getdate_creation(): DateTime {
        return $this->date_creation;
    }
    


}

