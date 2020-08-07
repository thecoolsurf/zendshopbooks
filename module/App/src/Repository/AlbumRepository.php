<?php
// module/App/src/Model/AlbumModel.php

namespace App\Repository;

use Zend\Db\Adapter\Driver\ResultInterface;
use App\Repository\AdapterSetup;

class AlbumRepository
{
    
    public function findAll()
    {
        $adapter  = new AdapterSetup();
        $pdo      = $adapter->getMySQL();
        $select   = $pdo->select('album');
        $stmt     = $pdo->prepareStatementForSqlObject($select);
        $rows     = $stmt->execute();
//        echo '<pre>';var_dump($rows->getResource()->fetchAll());echo '</pre>';
        if ($rows instanceof ResultInterface || $rows->isQueryResult()):
            return $rows;
        else:
            return;
        endif;
    }
    
}