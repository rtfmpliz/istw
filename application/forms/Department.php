<?php

class Application_Form_Department extends Zend_Form
{

    public function init()
    {
        $this->setMethod('post');
 
        // Add an email element
        $this->addElement('text', 'dept_name', array(
            'label'      => 'Department Name:',
            'required'   => true,
            'filters'    => array('StringTrim'),

        ));
 

 
        // Add a captcha

 
        // Add the submit button
        $this->addElement('submit', 'submit', array(
            'ignore'   => true,
            'label'    => 'Input Department',
        ));
 
        // And finally add some CSRF protection
        $this->addElement('hash', 'csrf', array(
            'ignore' => true,
        ));
        /* Form Elements & Other Definitions Here ... */
    }


}

