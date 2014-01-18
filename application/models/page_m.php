<?php
/**
 * Created by PhpStorm.
 * User: avs
 * Date: 1/18/14
 * Time: 9:36 PM
 */

class Page_m extends MY_Model {
    protected $_table_name = 'pages';
    protected $_primary_key = 'id';
    protected $_primary_filter = 'intval';
    protected $_order_by = 'order';
    protected $_rules = '';
    protected $_timestamps = FALSE;

    public function __construct()
    {
        parent::__construct();
    }
} 