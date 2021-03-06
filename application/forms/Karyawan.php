<?php

class Application_Form_Karyawan extends Zend_Form
{

    public function init()
    {
        // Set the method for the display form to POST
        $this->setMethod('post');
 
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
        $this->addElement('text', 'nama', array(
            'label'      => 'Please Nama:',
            'required'   => true,

        ));
 
        // Add a captcha
        // $this->addElement('captcha', 'captcha', array(
        //     'label'      => 'Please enter the 5 letters displayed below:',
        //     'required'   => true,
        //     'captcha'    => array(
        //         'captcha' => 'Figlet',
        //         'wordLen' => 5,
        //         'timeout' => 300
        //     )
        // ));
 
        // Add the submit button
        $this->addElement('submit', 'submit', array(
            'ignore'   => true,
            'label'    => 'Sign Karyawan',
        ));
 
        // And finally add some CSRF protection
        $this->addElement('hash', 'csrf', array(
            'ignore' => true,
        ));
        /* Form Elements & Other Definitions Here ... */
    }


}

