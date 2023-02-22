<?php

use Whoops\Run;
use Dotenv\Dotenv;
use Whoops\Handler\PrettyPageHandler;
use Symfony\Component\HttpFoundation\Request;

    /**
     * ----------------------------------------------------
     * Hello!
     * 
     * Voici le fichier de configuration permettant 
     * d'amorcer l'application.
     * ----------------------------------------------------
    */


    // Chargement de l'autoloader de composer
    require __DIR__ . "/../vendor/autoload.php";


    // Chargement des constantes représentant des raccourcis
    require __DIR__ . "/constants/app.php";


    // Chargement de Whoops pour avoir des messages d'erreurs un peu plus stylés
    // et permettre de debugger plus facilement
    $whoops = new Run;
    $whoops->pushHandler(new PrettyPageHandler);
    $whoops->register();


    // Chargement des variables d'environnement
    $dotenv = Dotenv::createImmutable(ROOT);
    $dotenv->load();


    // Chargement du conteneur de dépendances
    $container = require __DIR__ . "/di/container.php";

    
    