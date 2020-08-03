<?php
// module/App/src/Controller/Publics/HomeController.php

namespace App\Controller\Publics;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class HomeController extends AbstractActionController
{
    
    public function indexAction()
    {
        return new ViewModel();
    }
    
}
