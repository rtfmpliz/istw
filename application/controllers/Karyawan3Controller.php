<?php

class Karyawan3Controller extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $karyawan3 = new Application_Model_Karyawan3Mapper();
        $this->view->entries = $karyawan3->fetchAll();
        // action body
    }

    public function newAction()
    {
        $request = $this->getRequest();
        $form    = new Application_Form_Karyawan3();
 
        if ($this->getRequest()->isPost()) {
            if ($form->isValid($request->getPost())) {
                $comment = new Application_Model_Karyawan3($form->getValues());
                $mapper  = new Application_Model_Karyawan3Mapper();
                $mapper->save($comment);
                return $this->_helper->redirector('index');
            }
        }
 
        $this->view->form = $form;
    }


}



