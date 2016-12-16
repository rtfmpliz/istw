<?php

class Application_Model_SectionMapper
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
			$this->setDbTable('Application_Model_DbTable_Section');
		}
		return $this->_dbTable;
	}
	public function save(Application_Model_Section $section)
	    {
		$data = array(
		            'section'       => $section->getSection(),
		            'created'       => date('Y-m-d H:i:s'),
		        );
		
		if (null === ($id = $section->getId())){
			unset($data['id']);
			$this->getDbTable()->insert($data);
		}
		else{
			$this->getDbTable()->update(@data,array('id = ?'=>$id));
		}
	}
	
	
	public function find($id, Application_Model_Section $section){
		$result= $this->getDbTable()->find($id);
		if(0==count($result)){
			return;
		}
		$row = $result->current();
		$section->setId($row->id)
		        ->setSection($row->section)
		        ->seCreated($row->created);
	}
	
	public function fetchAll(){
		$resultSet = $this->getDbTable()->fetchAll();
		$entries = array();
		foreach($resultSet as $row){
			$entry = new Application_Model_Section();
			$entry->setId($row->id)
			      ->setSection($row->section)
                  ->setCreated($row->created);
			$entries[]=$entry;
		}
		return $entries;
	}
	
}

