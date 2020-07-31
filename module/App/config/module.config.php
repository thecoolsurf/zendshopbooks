<?php 
// module/App/config/module.config.php

namespace App;

use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'home' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        'controller' => Controller\HomeController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'album' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/album[/:action[/:id]]',
                    'constraints'    => [
                        'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'         => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\AlbumController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\HomeController::class => InvokableFactory::class,
            Controller\AlbumController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'template_map' => [
            'layout/index'          => __DIR__ . '/../view/layout/index.phtml',
            'home/index'            => __DIR__ . '/../view/home/index.phtml',
            'error/404'             => __DIR__ . '/../view/error/404.phtml',
            'error/index'           => __DIR__ . '/../view/error/index.phtml',
            'album/index'           => __DIR__ . '/../view/album/index.phtml',
        ],
        'template_path_stack' => [
            'album'                 => __DIR__ . '/../view',
        ],
    ],
];