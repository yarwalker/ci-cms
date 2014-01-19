<?php
/**
 * Created by PhpStorm.
 * User: avs
 * Date: 1/16/14
 * Time: 11:16 PM
 */

class MY_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['error'] = array();
        $this->data['site_name'] = config_item('site_name');
    }
}