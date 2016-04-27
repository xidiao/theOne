<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/4/27
 * Time: 14:17
 */
class MY_Active_Record extends MY_Model
{

    public $table;
    public $primary;

    /**
     * @var CI_DB_active_record
     */
    public $localDb;

    public function __construct()
    {
        parent::__construct();

        $this->localDb = & $this->db;
    }


    public function findOne($primaryId){

        $this->localDb->where("{$this->primary}",$primaryId);

        $query = $this->localDb->get($this->table);
        return $query->row_array();
    }

    public function findAll($where = []){
        if(!empty($where)){
            $this->localDb->where($where);
        }
        $query = $this->localDb->get($this->table);
        return $query->result_array();
    }


    /**
     * @return mixed
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * @return mixed
     */
    public function getTable()
    {
        return $this->table;
    }

}