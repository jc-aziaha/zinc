<?php
namespace App\Zfoundation\HttpKernel;

use Psr\Container\ContainerInterface;
use App\Zfoundation\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Response;

    abstract class HttpKernel implements HttpKernelInterface
    {

        /**
         * Cette propriété représente le conteneur de dépendances
         *
         * @var ContainerInterface
         */
        protected ContainerInterface $container;

        public function __construct( ContainerInterface $container)
        {
            $this->container = $container;
        }
        
        /**
         * Cette méthode du noyau lui permet de soumettre la requête
         * et de récupérer la réponse correspondante.
         *
         * @return Response
         */
        public function handleRequest() : Response
        {
            $router = $this->container->get(RouterInterface::class);

            dd($router);
        }

    }