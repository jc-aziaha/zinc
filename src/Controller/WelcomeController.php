<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

    class WelcomeController
    {
        #[Route(path: "/", name: "welcome.index", methods: ["GET"])]
        public function index() : Response
        {
            dd("page d'accueil");
        }

        #[Route(path: "/test", name: "welcome.test", methods: ["GET"])]
        public function test() : Response
        {
            dd("page de test");
        }

        #[Route(path: "/user/{id}/edit", name: "welcome.edit", methods: ["GET"])]
        public function edit() : Response
        {
            dd("page edit");
        }
    }