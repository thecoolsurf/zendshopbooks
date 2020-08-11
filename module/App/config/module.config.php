<?php 
// module/App/config/module.config.php

namespace App;

use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'db' => [
        'driver'   => 'Pdo',
        'database' => 'blog',
        'username' => 'root',
        'password' => 'mysql'
    ],
    'router' => [
        'routes' => [
            'home' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        'controller' => Controller\Publics\HomeController::class,
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
                        'controller' => Controller\Publics\AlbumController::class,
                        'action'     => 'listing',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\Publics\HomeController::class => InvokableFactory::class,
            Controller\Publics\AlbumController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'template_map' => [
            'layout/index' => __DIR__ . '/../view/layout/index.phtml',
            'home/index' => __DIR__ . '/../view/home/index.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
            'album/listing' => __DIR__ . '/../view/album/listing.phtml',
        ],
        'template_path_stack' => [
            'app' => __DIR__ . '/../view',
        ],
        'default_template_suffix' => 'phtml',
        'display_exceptions' => false,
        'exception_template' => 'error/index',
    ],
];
