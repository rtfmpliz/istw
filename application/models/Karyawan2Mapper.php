<?php

class Application_Model_Karyawan2Mapper
{
	
		protected $_dbTable;
 
    public function setDbTable($dbTable)
    {
        if (is_string($dbTable)) {
            $dbTable = new $dbTable();
        }
        if (!$dbTable instanceof Zend_Db_Table_Abstract) {
            throw new Exception('Invalid table data gateway provided');
        }
        $this->_dbTable = $dbTable;
        return $this;
    }
 
    public function getDbTable()
    {
        if (null === $this->_dbTable) {
            $this->setDbTable('Application_Model_DbTable_Karyawan2');
        }
        return $this->_dbTable;
}
        public function save(Application_Model_Karyawan2 $karyawan2)
    {
		 $data = array(
             //'id' => $karyawan2->getId(),
            'email'   => $karyawan2->getEmail(),
            'nama' => $karyawan2->getNama(),
            'tgllahir' => $karyawan2->getTgllahir(),
            'created' => date('Y-m-d H:i:s'),
        );
 
        if (null === ($id = $karyawan2->getId())) {
            unset($data['id']);
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data, array('id = ?' => $id));
        }
	}
    public function find($id, Application_Model_Karyawan2 $karyawan2)
    {
    	$result = $this->getDbTable()->find($id);
        if (0 == count($result)) {
            return;
        }
        $row = $result->current();
        $karyawan2//->setId($row->id)
                  ->setEmail($row->email)
                  ->setNama($row->nama)
                  ->setTgllahir($row->tgllahir)
                  ->setCreated($row->created);
    }
    public function fetchAll()
    {
    	$resultSet = $this->getDbTable()->fetchAll();
        $entries   = array();
        foreach ($resultSet as $row) {
            $entry = new Application_Model_Karyawan2();
            $entry->setEmail($row->email)
                        //->setId($row->id)
                  ->setNama($row->nama)
                  ->setTgllahir($row->tgllahir)
                  ->setCreated($row->created);
            $entries[] = $entry;
        }
        return $entries;
    }


}

