<?php
require "Model.Db.Class.php";
require "Profil.Class.php";

// use monModel;
// use monModel\Model;
// use monProfil;
// use monProfil\Profil;
/*Lorsqu'on instancie la class ProfilManager elle instancie la class profil au niveau de la methode SelectProfil
Mais celle-ci sera instanciée sur dans la class profilController */

// namespace monProfilManager;

use PDO;

class ProfilManager extends Model
{
    private $mesProfils;


    // Permet d'obtenir les profils
    public function GetProfil()
    {
        return $this->mesProfils;
    }

    // Ajout du profil dans l'attribut mesProfils
    public function AddProfil($profil)
    {
        return $this->mesProfils = $profil;
    }

    // Selection et chargement des profils dans la base de donnees
    public function SelectProfil()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM profil");
        $req->execute();
        $profils = $req->fetchAll(pdo::FETCH_ASSOC); //On charge les profils dans l'attributs mesProfils
        $req->closeCursor();

        foreach ($profils as $profil) {
            $pro = new Profil($profil['PR_ID'], $profil['PR_NAME'], $profil['PR_STATUS'], $profil['PR_CREATION_DATE'], $profil['PR_EDIT_DATE']);
            // On appel à la fonction AddProfil
            $this->AddProfil($profils);
        }
    }

    public function DisplayProfil()
    {
        // print_r($this->mesProfils);
    }
}
/*
$profil2 = new Profil();
$profil2->SelectProfil();
var_dump(($profil2->GetProfil()));
*/