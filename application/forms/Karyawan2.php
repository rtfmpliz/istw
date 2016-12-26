<?php

class Application_Form_Karyawan2 extends Zend_Form
{

    public function init()
    {
        // Set the method for the display form to POST
        $this->setMethod('post');
                // Add an email element
        $this->addElement('text', 'id', array(
            'label'      => 'NIK:',
            'required'   => true,
            'filters'    => array('StringTrim'),
            
        ));
                // Add an email element
        $this->addElement('text', 'nama', array(
            'label'      => 'Your Name:',
            'required'   => true,
            'filters'    => array('StringTrim'),
            
        ));

 
        // Add an email element
        $this->addElement('text', 'email', array(
            'label'      => 'Your email address:',
            'required'   => true,
            'filters'    => array('StringTrim'),
            'validators' => array(
                'EmailAddress',
            )
        ));
 
        // Add the comment element
        $this->addElement('text', 'tgllahir', array(
            'label'      => 'Tanggal Lahir:',
            'required'   => true,

        ));
 
        // Add a captcha

        // Add the submit button
        $this->addElement('submit', 'submit', array(
            'ignore'   => true,
            'label'    => 'Sign Guestbook',
        ));
 
        // And finally add some CSRF protection
        $this->addElement('hash', 'csrf', array(
            'ignore' => true,
        ));
    }


}

