<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
   // protected function _initDoctype()
    //{
     //   $this->bootstrap('view');
     //   $view = $this->getResource('view');
     //   $view->doctype('XHTML1_STRICT');
     //    $view->headScript()->appendFile($this->_view->baseUrl('js/bootstrap.min.js'));
    	// $view->headLink()->prependStylesheet($this->_view->baseUrl('css/bootstrap.min.css'));
    //}
     protected function _initView()
     {
         $view=new Zend_View();
     	$view->headScript()->appendFile($view->baseUrl('bootstrap.min.js'));
     	//$view->headLink()->prependStylesheet($view->baseUrl('/../../application/css/bootstrap.min.css'));
         $view->headLink()->prependStylesheet($view->baseUrl('bootstrap.min.css'));
          $viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('ViewRenderer');
          $viewRenderer->setView($view);
          return $this->_view;
     }


}

