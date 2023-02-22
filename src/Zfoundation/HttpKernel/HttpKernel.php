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

            // Si le routeur détecte qu'il n'y a aucun contrôleur référencé dans le conteneur de dépendances
            if ( $router->hasNoController() ) 
            {
                return $this->generateNotFoundResponse();
            }

            // Dans le cas contraire, le noyau demande au router de s'éxécuter
            // et de lui retourner une réponse


            // Le noyau exécute le contrôleur et récupère sa réponse


            // Le noyau retourne cette réponse au contrôleur frontal
        }

        public function generateNotFoundResponse() : Response
        {
            ob_start();
            require __DIR__ . "/Resources/defaut_welcome.html.php";
            $content = ob_get_clean();

            return new Response($content, 404);
        }

    }