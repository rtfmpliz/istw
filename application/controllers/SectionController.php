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

    public function newAction()
    {
        $request = $this->getRequest();
        $form    = new Application_Form_Section();
 
        if ($this->getRequest()->isPost()) {
            if ($form->isValid($request->getPost())) {
                $section = new Application_Model_Section($form->getValues());
                $mapper  = new Application_Model_SectionMapper();
                $mapper->save($section);
                return $this->_helper->redirector('index');
            }
        }
 
        $this->view->form = $form;
        
        // action body
    }


}



