<?php
/**
 * Created by PhpStorm.
 * User: avs
 * Date: 1/20/14
 * Time: 12:35 AM
 */

class User_M extends MY_Model {

    protected $_table_name = 'users';
    protected $_order_by = 'name';
    public $rules = array(
        'email' => array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|xss_clean'
        ),
        'password' => array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required'
        )
    );

    public function __construct()
    {
        parent::__construct();
    }

} 