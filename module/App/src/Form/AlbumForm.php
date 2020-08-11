<?php
// module/App/src/Form/Album.php

namespace App\Form;

use Zend\Form\Form;

class AlbumForm extends Form
{
    public function init()
    {
        $this->setMethod('post');
        $this->addElement('text', 'email', array(
            'label'      => 'Your email address:',
            'required'   => true,
            'filters'    => array('StringTrim'),
            'validators' => array(
                'EmailAddress',
            )
        ));
        $this->addElement('textarea', 'comment', array(
            'label'      => 'Please Comment:',
            'required'   => true,
            'validators' => array(
                array('validator' => 'StringLength', 'options' => array(0, 20))
            )
        ));
        $this->addElement('submit', 'submit', array(
            'ignore'     => true,
            'label'      => 'Sign Guestbook',
        ));
        $this->addElement('hash', 'csrf', array(
            'ignore'     => true,
        ));
    }

}
