<?php
// module/App/src/Repository/AdapterSetup.php

namespace App\Repository;

use Zend\Db\Adapter\Adapter;
use Zend\Db\Sql\Sql;

class AdapterSetup
{
    
    /**
     * POPULATE ENTITY
     * @param objet $objet
     * @param array $row
     * @return object
     */
    public function populateEntity($objet, $row)
    {
        foreach($row as $key=>$val):
            $method = 'set'.\ucfirst($key);
            if(method_exists($objet, $method)):
                $objet->$method($val);
            endif;
        endforeach;
        return $objet;
    }

    /**
     * POPULATE ENTITIES
     * @param objet $objet
     * @param array $rows
     * @return array
     */
    public function populateEntities(object $objet, array $rows)
    {
        $entities = [];
        foreach($rows as $row):
            $entities[] = $this->populateEntity($objet,$row);
        endforeach;
        return $entities;
    }

    /* ********************************************************************** */

    public function getMySQL()
    {
        $adapter = new Adapter([
            'driver'   => 'Pdo_Mysql',
            'database' => 'zendshopbooks',
            'username' => 'admin',
            'password' => 'anarelien',
        ]);
        $sql = new Sql($adapter);
        return $sql;
    }

}
