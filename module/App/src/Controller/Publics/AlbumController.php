<?php
// module/App/src/Controller/Publics/AlbumController.php

namespace App\Controller\Publics;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use App\Model\AlbumModel;

class AlbumController extends AbstractActionController
{

    public function indexAction()
    {
        $albums = new AlbumModel();
//        echo '<pre>';
//        var_dump($albums);
//        echo '</pre>';
        return new ViewModel([
            'albums' => $albums->findAll(),
        ]);
    }
    
}
