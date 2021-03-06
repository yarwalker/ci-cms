<?php
class Admin_Controller extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['meta_title'] = 'My awesome CMS';
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('user_m');

        // login check
        // сделаем проверку везде кроме авторизации и выхода из админки
        $exception_uris = array(
            'admin/user/login',
            'admin/user/logouot'
        );
        if(in_array(uri_string(), $exception_uris) == FALSE):
            if($this->user_m->loggedin() == FALSE):
                redirect('admin/user/login');
            endif;
        endif;
    }
}