<?php
// module/App/src/Controller/Publics/AlbumController.php

namespace App\Controller\Publics;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use App\Repository\AlbumRepository;
use App\Form\AlbumForm;

class AlbumController extends AbstractActionController
{

    public function listingAction()
    {
        $albums = new AlbumRepository();
        return new ViewModel([
            'albums' => $albums->findAll(),
        ]);
    }
    
    public function editAction()
    {
        $album = new AlbumRepository();
        $form = new AlbumForm();
        $this->view->form = $form->setData($album->findById());
        $this->render('form');
        return new ViewModel([
            'form' => $form,
        ]);
    }
    
}
