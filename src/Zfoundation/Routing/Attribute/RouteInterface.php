<?php
namespace App\Zfoundation\Routing\Attribute;

    interface RouteInterface
    {

        /**
         * Cette méthode retourne l'uri de l'url de la route 
         *
         * @return string
         */
        public function getPath() : string;

        
        /**
         * Cette méthode retourne le nom de la route
         *
         * @return string
         */
        public function getName() : string;


        /**
         * Cette méthode retourne les méthodes d'accès autorisées.
         *
         * @return array
         */
        public function getMethods() : array;

        

        /**
         * Cette méthode vérifie s'il y a des paramètres.
         * C'est à dire des données passées dynamiquement à la route.
         *
         * @return boolean
         */
        public function hasParameters() : bool;


        /**
         * Cette méthode récupètres les paramètres.
         *
         * @return array
         */
        public function fetchParameters() : array;
        
        
    }