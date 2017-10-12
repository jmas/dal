<?php

namespace dal;


use PDO;
use dal\Record;


abstract class Repository
{

    protected $connection;
    protected $log;


    abstract protected function getTableName();


    public function __construct(PDO $connection, callable $log=null)
    {
        $this->connection = $connection;
        if ($log) {
            $this->log = $log;
        }
    }


    public function findByIdFrom($className, $id)
    {

    }


    public function findOneFor($className, $where=null, $values=[])
    {

    }


    public function findAllFor($className, $where=null, $values=[])
    {

    }


    public function countFrom($className, $where=null, $values=[])
    {
        
    }


    public function deleteWhere($className, $where=null, $values=[])
    {

    }


    public function save(Record $record)
    {

    }


    public function delete(Record $record)
    {

    }


    protected function beforeSave(Record $record)
    {
        return true;
    }


    protected function beforeInsert(Record $record)
    {
        return true;
    }


    protected function beforeUpdate(Record $record)
    {
        return true;
    }


    protected function beforeDelete(Record $record)
    {
        return true;
    }
    

    protected function afterSave(Record $record)
    {
        return true;
    }
    

    protected function afterInsert(Record $record)
    {
        return true;
    }
    

    protected function afterUpdate(Record $record)
    {
        return true;
    }
    

    protected function afterDelete(Record $record)
    {
        return true;
    }


    protected function log($query, $values=null)
    {
        if ($this->log) {
            $this->log($query, $values);
        }
    }
    
}
