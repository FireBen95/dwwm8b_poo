<?php
namespace App\Zinc\Routing;

    interface RouteInterface
    {
        /**
         * Cette méthode retourne l'url de la route
         * dont l'application attend la réception
         *
         * @return void
         */
        public function getPath() : string;


        /**
         * Cette méthode retourne le nom de la route
         * dont l'application attend la réception
         *
         * @return void
         */
        public function getName() : string;


        /**
         * Cette méthode retourne la liste des méthodes avec lesquelles
         * on peut accéder à la route
         *
         * @return void
         */
        public function getMethods() : array;
    }