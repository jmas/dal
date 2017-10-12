<?php

namespace dal;


use dal\Model;


class Record extends Model
{

    protected function beforeSave()
    {
        return true;
    }


    protected function beforeInsert()
    {
        return true;
    }


    protected function beforeUpdate()
    {
        return true;
    }


    protected function beforeDelete()
    {
        return true;
    }
    

    protected function afterSave()
    {
        return true;
    }
    

    protected function afterInsert()
    {
        return true;
    }
    

    protected function afterUpdate()
    {
        return true;
    }
    

    protected function afterDelete()
    {
        return true;
    }

}
