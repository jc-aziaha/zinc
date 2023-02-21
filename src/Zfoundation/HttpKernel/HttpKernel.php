<?php
namespace App\Zfoundation\HttpKernel;

use Symfony\Component\HttpFoundation\Response;

    abstract class HttpKernel implements HttpKernelInterface
    {
        
        /**
         * Cette méthode du noyau lui permet de soumettre la requête
         * et de récupérer la réponse correspondante.
         *
         * @return Response
         */
        public function handleRequest() : Response
        {
            return new Response("Hello World");
        }

    }