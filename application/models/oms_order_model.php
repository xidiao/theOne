<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/4/27
 * Time: 14:25
 */

/**
 *
 * 接受控制器参数
 * 处理业务逻辑
 *
 * Class Oms_order_model
 */
class Oms_order_model extends MY_Model
{

    /**
     * @var Oms_order_active
     */
    public $omsOrderActive;

    public function __construct()
    {
        parent::__construct();

        $this->load->model('db/oms_order_active');
        $this->omsOrderActive = $this->oms_order_active;
    }


    public function getOmsOrder(){



    }




}