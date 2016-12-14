<?php

class KaryawanController extends Zend_Controller_Action
{

    public function init()
    {
        $karyawan = new Application_Model_KaryawanMapper();
        $this->view->entries = $karyawan->fetchAll();
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }


        public function signAction()
    {
        $request = $this->getRequest();
        $form    = new Application_Form_Karyawan();
 
        if ($this->getRequest()->isPost()) {
            if ($form->isValid($request->getPost())) {
                $nama = new Application_Model_Karyawan($form->getValues());
                $mapper  = new Application_Model_KaryawanMapper();
                $mapper->save($nama);
                return $this->_helper->redirector('index');
            }
        }
 
        $this->view->form = $form;

        // action body
    }


}



