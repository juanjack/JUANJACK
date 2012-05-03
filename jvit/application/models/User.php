<?php

class Application_Model_User extends Zend_Db_Table_Abstract
{
    // set db table name
    protected $_name = 'user';
    
    public function getUser(){
        $row = $this->fetchRow("id = 1");
                if($row){
                        return $row->toArray();
                }else{
                        throw new Exception("can't read from DB");
                }
    }
}