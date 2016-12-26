<?php

class Karyawan2Controller extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
    	$karyawan2 = new Application_Model_Karyawan2Mapper();
        $this->view->entries = $karyawan2->fetchAll();
        // action body
    }

public function newAction()
    {
         $request = $this->getRequest();
         $form    = new Application_Form_Karyawan2();
 
         if ($this->getRequest()->isPost()) {
             if ($form->isValid($request->getPost())) {
                 //$nama = new Application_Model_Karyawan2($form->getValues());
                 //$email = new Application_Model_Karyawan2($form->getValues());
                 //$tgllahir = new Application_Model_Karyawan2($form->getValues());
                 $email= new Application_Model_Karyawan2($form->getValues());
                 $mapper  = new Application_Model_Karyawan2Mapper();
                 // Zend_Debug::dump($id);
                 $mapper->save($email);
                // return $this->_helper->redirector('index');
             }
         }
 
         $this->view->form = $form;
     }
    

}



