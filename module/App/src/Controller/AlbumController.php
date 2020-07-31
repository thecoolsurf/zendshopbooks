<?php
//module/App/src/Controller/AlbumController.php

namespace App\Controller;

use App\Model\AlbumTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AlbumController extends AbstractActionController
{
    
    private $table;

    public function __construct()
    {
        $this->table = [];
    }

    public function indexAction()
    {
        return new ViewModel([
//            'albums' => $this->table->fetchAll(),
            'albums' => [],
        ]);
    }

    public function addAction()
    {
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }
    
}
