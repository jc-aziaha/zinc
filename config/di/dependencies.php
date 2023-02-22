<?php

use App\Zfoundation\Routing\Router;
use App\Zfoundation\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Request;

    return [

        // L'objet contenant toutes les données de la requête
        Request::class => Request::createFromGlobals(),

        // La liste de tous les contrôleurs de l'application
        "controllers" => [
            "App\Controller\WelcomeController"
        ],

        RouterInterface::class => DI\create(Router::class)->constructor(DI\get(Request::class), DI\get("controllers")),

    ];
