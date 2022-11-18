<?php
require "../models/private/ProfilManager.Class.php";

class ProfilController
{
    private $monProfilControl;

    // On instancie la class profil et on selectionne egalement les profil et on les stockes dans l'attributs monProfilControl
    public function __construct()
    {
        $this->monProfilControl = new ProfilManager;
        $this->monProfilControl->SelectProfil();
    }

    public function DisplayProfil()
    {
        // On reccupere tous les profils qui sont dans l'attribut monProfilControl et on les stockes dans monProfil
        $monProfil = $this->monProfilControl->GetProfil();
        include "../views/view_admin/profil.template.self.php";
    }
}
