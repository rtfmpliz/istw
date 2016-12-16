<?php

class SectionController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $section = new Application_Model_SectionMapper();
        $this->view->entries = $section->fetchAll();
        // action body
    }


}

