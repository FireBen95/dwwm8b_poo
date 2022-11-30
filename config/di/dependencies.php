<?php

use Symfony\Component\HttpFoundation\Request;

    return [

        // La requête
        Request::class => Request::createFromGlobals(),

        // Liste des contôleurs
        'controllers' => [

        ],

        // Le routeur
        DI\create(Router::class)->constructor(DI\get(Request::class), DI\get('controllers')),

    ];

  
