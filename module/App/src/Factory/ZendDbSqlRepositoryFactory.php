<?php
// module/App/src/Factory/ZendDbSqlRepositoryFactory.php

namespace App\Factory;

use Interop\Container\ContainerInterface;
use App\Entity\Album;
use App\Model\ZendDbSqlRepository;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Hydrator\Reflection as ReflectionHydrator;
use Zend\ServiceManager\Factory\FactoryInterface;

class ZendDbSqlRepositoryFactory implements FactoryInterface
{
    
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new ZendDbSqlRepository(
            $container->get(AdapterInterface::class),
            new ReflectionHydrator(),
            new Album()
        );
    }
    
}