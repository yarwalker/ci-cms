<?php
/**
 * Created by PhpStorm.
 * User: avs
 * Date: 1/16/14
 * Time: 11:13 PM
 */

class Dashboard extends Admin_Controller {
    public function __construct()
    {
        parent::__construct();
       // $this->load->model('user');
       // $this->user->isloggedin();
    }

    public function index()
    {
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function modal()
    {
        $this->load->view('admin/_layout_modal', $this->data);
    }
}