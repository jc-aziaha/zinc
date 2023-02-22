<?php
namespace App\Zfoundation\Routing;

    interface RouterInterface
    {

        /**
         * Cette méthode du routeur lui permet de stocker les routes
         * dans un tableau tout en prenant soin de les trier
         * en fonction de leur nom.
         *
         * @param array $controllers
         * @return void
         */
        public function addRoutes(array $controllers = []) : void;


        /**
         * Cette méthode du routeur lui permet de s'exécuter 
         * et de retourner le controleur en charge de la requête.
         *
         * @return array|null
         */
        public function run() : ?array;


        /**
         * Cette méthode du routeur lui permet de retourner l'information censée être au niveau de la barre d'url
         * associée à cette route.
         *
         * @return string
         */
        public function generatePath(string $route_name, ?array $parameters = []) : string;

    }