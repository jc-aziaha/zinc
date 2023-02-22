<?php

use Symfony\Component\HttpFoundation\Request;

    return [

        // L'objet contenant toutes les données de la requête
        Request::class => Request::createFromGlobals(),

    ];
