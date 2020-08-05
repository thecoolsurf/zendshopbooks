<?php
// module/App/src/Controller/Publics/AlbumController.php

namespace App\Controller\Publics;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use App\Repository\AlbumRepository;
use App\Model\ZendDbSqlRepository;

class AlbumController extends AbstractActionController
{

     public function getAlbumTable()
     {
         if (!$this->albumTable) {
             $sm = $this->getServiceLocator();
             $this->albumTable = $sm->get('Album\Model\AlbumTable');
         }
         return $this->albumTable;
     }
     
    public function indexAction()
    {
        $albums = new AlbumRepository();
        return new ViewModel([
            'albums' => $albums->findAll(),
        ]);
    }
    
}
