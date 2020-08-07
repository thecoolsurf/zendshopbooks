<?php
// module/App/src/Controller/Publics/AlbumController.php

namespace App\Controller\Publics;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use App\Repository\AlbumRepository;

class AlbumController extends AbstractActionController
{

    public function indexAction()
    {
        $albums = new AlbumRepository();
        return new ViewModel([
            'albums' => $albums->findAll(),
        ]);
    }
    
}
