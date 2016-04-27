<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/4/27
 * Time: 14:24
 */

require_once "MY_Active_Record.php";

/**
 * 对数据库进行操作
 * Class Oms_order_active
 */
class Oms_order_active extends MY_Active_Record
{

    public function __construct()
    {
        parent::__construct();

        $this->table = "o_oms_order";
        $this->primary = "order_id";
    }


    public function updateOmsOrder($set = NULL, $where = NULL, $limit = NULL)
    {
        $this->localDb->update($this->table,$set,$where,$limit);
        return $this->localDb->affected_rows();
    }


    public function deleteOmsOrder(){

    }

    public function getOmsOrderById(){

    }

    public function getOmsOrderByOrderSn(){

    }


}