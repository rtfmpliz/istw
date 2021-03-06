<?php

class Application_Model_Section
{
	protected $_section;
	protected $_created;
	protected $_id;
	
	public function __construct(array $options = null)
	    {
		if(is_array($options)){
			$this->setOptions($options);
		}
	}
	
	public function __set($name,$value)
	    {
		$method = 'set' . $name;
		if(('mapper' == $name) || !method_exists($this,$method)) {
			throw new Exception('Invalid Section property');
		}
        return $this->$method($value);
	}

    public function __get($name)
    {
        $method = 'get' . $name;
        if (('mapper' ==$name) || !method_exists($this,$method)){
            throw new Exception('Invalid Section Property');
        }
        return $this->$method();
    }
	
	public function setOptions(array $options)
    {
        $methods = get_class_methods($this);
        foreach ($options as $key => $value){
            $method = 'set' . ucfirst($key);
            if (in_array($method, $methods)){
                $this->$method($value);
            }
        }
        return $this;
    }
	
    public function setSection($text)
    {
        $this->_section = (string) $text;
        return $this;
    }

    public function getSection()
    {
        return $this->_section;
    }
    public function setCreated($ts)
    {
        $this->_created = $ts;
        return $this;
    }
 
    public function getCreated()
    {
        return $this->_created;
    }
 
    public function setId($id)
    {
        $this->_id = (int) $id;
        return $this;
    }
 
    public function getId()
    {
        return $this->_id;
    }



}

