<?php

class Application_Form_Karyawan2 extends Zend_Form
{

    public function init()
    {
        // Set the method for the display form to POST
         $this->setMethod('post');
        //         // Add an email element
        //  $this->addElement('text', 'id', array(
        //      'label'      => 'NIK:'
                   $this->addElement('text', 'email', array(
            'label'      => 'Your email address:',
            'filters'    => array('StringTrim'),
            'validators' => array(
                'EmailAddress',
            )
        )); 
        //  ));
                // Add an email element
        $this->addElement('text', 'nama', array(
            'label'      => 'Your Name:'
            
        ));

 
        // Add an email element

 
        // Add the comment element
        $this->addElement('text', 'tgllahir', array(
            'label'      => 'Tanggal Lahir:',

        ));
 
        // Add a captcha

        // Add the submit button
        $this->addElement('submit', 'submit', array(
            'ignore'   => true,
            'label'    => 'Tambah Karyawan2',
        ));
 
        // And finally add some CSRF protection
         $this->addElement('hash', 'csrf', array(
             'ignore' => true,
         ));
    }


}

