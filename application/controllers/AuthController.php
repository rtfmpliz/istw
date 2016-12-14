<?php

class AuthController extends Zend_Controller_Action
{
	
	public function init()
	    {
		
		/* Initialize action controller here */
	}
	
	public function indexAction()
	    {
		$form = new Application_Form_Login();
		$request = $this->getRequest();
		if ($request->isPost()) {
			if ($form->isValid($request->getPost())) {
				// 				do something here to log in
				        // 				action body
			}
			
			
		}
		$this->view->form = $form;
	}
	
}	