<?php

class Application_Form_Karyawan3 extends Zend_Form
{

    public function init()
    {
        // Set the method for the display form to POST
        $this->setMethod('post');
         $this->addElement('text', 'nama', array(
            'label'      => 'Your name :',
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
            'label'      => 'tanggal Lahir:',
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
            'label'    => 'Sign Karyawan3',
        ));
 
        // And finally add some CSRF protection
        $this->addElement('hash', 'csrf', array(
            'ignore' => true,
        ));
    }


}

