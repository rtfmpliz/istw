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


}

