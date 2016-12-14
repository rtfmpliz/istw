<?php

class DepartmentController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
                $department = new Application_Model_DepartmentMapper();
        $this->view->entries = $department->fetchAll();
        // action body
    }

    public function newAction()
    {
        $request = $this->getRequest();
        $form    = new Application_Form_Department();
 
        if ($this->getRequest()->isPost()) {
            if ($form->isValid($request->getPost())) {
                $dept_name = new Application_Model_Department($form->getValues());
                $mapper  = new Application_Model_DepartmentMapper();
                $mapper->save($dept_name);
                return $this->_helper->redirector('index');
            }
        }
 
        $this->view->form = $form;
        // action body
    }


}



