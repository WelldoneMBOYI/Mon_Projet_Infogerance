<?php

namespace monNamespaceRouter;

class Router
{

    // La propriété qui enregistre toutes url
    /*Merge branch 'main' of https://github.com/WelldoneMBOYI/Mon_Projet_Infogerance */
    public $url;


    // La propriété qui enregistre toutes les routes 
    public $monTableauRouter = [];

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function getTitreLogin()
    {
        return "Page connexion";
    }
    public function getTitreAdmin()
    {
        return "Page administration";
    }
    public function getTitreUser()
    {
        return "Page collaborateur";
    }
    public function getTitreError()
    {
        return "Page Error";
    }

    public function getTitreAccueilClient()
    {
        return "Page d'accueil Client";
    }

    public function  getTitreCreeClient()
    {
        return "Page de creation du client";
    }

    public function matches(string $url)
    {
        $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path);
        $pathToMatch = "#^$path$";

        if (preg_match($pathToMatch, $url, $matches)) {
            $this->matches = $matches;
            return true;
        } else
            return false;
    }
}
