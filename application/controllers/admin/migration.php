<?php
/**
 * Created by PhpStorm.
 * User: avs
 * Date: 1/16/14
 * Time: 11:45 PM
 */

class Migration extends Admin_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->library('migration');
        if ( ! $this->migration->current())
        {
            show_error($this->migration->error_string());
        }
        else
        {
            echo 'Migration worked';
        }
    }
} 