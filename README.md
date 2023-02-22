# Apprendre la programmation orientée objet en php

Je vous souhaite la bienvenue dans cette formation dans laquelle nous allons créer notre propre cadre de travail (framework).

Ce framework n'est pas à but commercial mais plutôt à but d'apprentissage.

En effet, notre objectif est de mettre en pratique les concepts de la programmation orientée objet en php.

## Les rôles du framework :

- Recevoir la requête d'un client
- La traiter
- Lui retourner la réponse correspondante

## Les prérecquis
- PHP >=8.1
- composer

## Installation

Ouvrez le terminal de votre machine et executez les commandes suivantes : 

    - composer create-project aziaha/dwwm nom_du_projet
    - cd nom_du_projet
    - composer serve


## En cas de clonage de ce repository

Ouvrez le terminal de votre machine et executez les commandes suivantes : 

    - git clone https://github.com/jc-aziaha/zinc.git
    - cd zinc
    - composer install
    - Créer le fichier .env à racine du dossier "zinc" en s'insprirant du .env.example
    - Démarrer le serveur gràca à commande : php -S localhost:8000 -d display_errors=1 -t public