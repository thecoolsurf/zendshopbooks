<?php
// Application/src/Controller/HomeController.php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class HomeController extends AbstractActionController
{
    
    public function indexAction()
    {
        return new ViewModel();
    }
    
}
