<?php
// module/App/src/Module.php

namespace App;

use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use App\Model\Album;
use App\Model\AlbumTable;

class Module implements ConfigProviderInterface
{
    
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
    
    public function getControllerConfig()
    {
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                AlbumTable::class => function($container) {
                    $tableGateway = $container->get(TableGateway::class);
                    return new AlbumTable($tableGateway);
                },
                TableGateway::class => function ($container) {
                    $dbAdapter = $container->get(AdapterInterface::class);
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Album());
                    return new TableGateway('album', $dbAdapter, null, $resultSetPrototype);
                },
            ],
        ];
    }

}