<?php

class Application_Model_Karyawan3Mapper
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
            $this->setDbTable('Application_Model_DbTable_Karyawan3');
        }
        return $this->_dbTable;
    }
 
    public function save(Application_Model_Karyawan3 $karyawan3)
    {
        $data = array(
            'nama'   => $karyawan3->getNama(),
            'email'   => $karyawan3->getEmail(),
            'tgllahir' => $karyawan3->getTgllahir(),
            'created' => date('Y-m-d H:i:s'),
        );
 
        if (null === ($id = $karyawan3->getId())) {
            unset($data['id']);
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data, array('id = ?' => $id));
        }
    }
 
    public function find($id, Application_Model_Karyawan3 $karyawan3)
    {
        $result = $this->getDbTable()->find($id);
        if (0 == count($result)) {
            return;
        }
        $row = $result->current();
        $karyawan3->setId($row->id) 
                   ->setNama($row->nama)
                  ->setEmail($row->email)
                  ->setTgllahir($row->tgllahir)
                  ->setCreated($row->created);
    }
 
    public function fetchAll()
    {
        $resultSet = $this->getDbTable()->fetchAll();
        $entries   = array();
        foreach ($resultSet as $row) {
            $entry = new Application_Model_Karyawan3();
            $entry->setId($row->id)
            ->setNama($row->nama)
                  ->setEmail($row->email)
                  ->setTgllahir($row->tgllahir)
                  ->setCreated($row->created);
            $entries[] = $entry;
        }
        return $entries;
    }


}

