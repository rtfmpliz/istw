<?php

class Application_Form_Section extends Zend_Form
{

    public function init()
    {
        $this->setMethod('post');
 
        // Add an email element
        $this->addElement('text', 'section', array(
            'label'      => 'New Section:',
            'required'   => true,
            'filters'    => array('StringTrim')

            
        ));
        $this->addElement('submit', 'submit', array(
            'ignore'   => true,
            'label'    => 'Add Section',
        ));
        $this->addElement('hash', 'csrf', array(
            'ignore' => true,
        ));
        /* Form Elements & Other Definitions Here ... */
    }


}

