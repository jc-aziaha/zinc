<?php
namespace App\Zfoundation\Routing;

use App\Zfoundation\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Request;

    class Router implements RouterInterface
    {

        /**
         * Cette propriété représente la liste de tous les contrôleurs de l'application
         *
         * @var array
         */
        private array $controllers = [];


        /**
         * Cette propriété représente l'objet contenant toutes les données de la requête du client
         *
         * @var Request
         */
        private Request $request;

        
        /**
         * Les données que reçoit le router en paramètres dès la construction de l'objet
         * proviennent du conteneur de dépendances
         *
         * @param Request $request
         * @param array $controllers
         */
        public function __construct(Request $request, array $controllers = [])
        {
            $this->request     = $request;
            $this->controllers = $controllers;
        }
        
        /**
         * Cette méthode du routeur lui permet de stocker les routes
         * dans un tableau tout en prenant soin de les trier
         * en fonction de leur nom.
         *
         * @param array $controllers
         * @return void
         */
        public function addRoutes(array $controllers) : void
        {

        }


        /**
         * Cette méthode du routeur lui permet de s'exécuter 
         * et de retourner le controleur en charge de la requête.
         *
         * @return array|null
         */
        public function run() : ?array
        {

        }


        /**
         * Cette méthode du routeur lui permet de retourner l'information censée être au niveau de la barre d'url
         * associée à cette route.
         *
         * @return string
         */
        public function generatePath(string $route_name, ?array $parameters = []) : string
        {

        }


        /**
         * Cette propriété u routeur lui permet de vérifier si le tableau des contrôleurs est vide ou non. 
         *
         * Elle retourne "true" si le tableau est vide, "false" dans le cas contraire.
         * 
         * @return boolean
         */
        public function hasNoController() : bool
        {
            return empty($this->controllers) ? true : false;
        }
    }