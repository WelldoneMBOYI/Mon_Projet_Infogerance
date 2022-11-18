<?php

namespace controllers\monNamespaceController;

class ControllerProjet
{


    public function index()
    {
        echo "je suis la homepage";
    }

    public function show(int $id)
    {
        echo "Je suis le post" . $id;
    }
}
