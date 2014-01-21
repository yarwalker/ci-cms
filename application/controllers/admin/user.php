<?php

class User extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        $dashboard_uri = 'admin/dashboard';

        // если юзер залогинен, то перенаправляем его в админку
        $this->user_m->loggedin() == FALSE || redirect($dashboard_uri);

        $rules = $this->user_m->rules;
        $this->form_validation->set_rules($rules);

        if($this->form_validation->run() == TRUE)
        {
            // We can login and redirect
            if($this->user_m->login() == TRUE):
                redirect($dashboard_uri);
            else:
                $this->session->set_flashdata('error', 'That email/password combination does not exist!');
                redirect('admin/user/login', 'refresh');
            endif;
        }

        $this->data['subview'] = 'admin/user/login';
        $this->load->view('admin/_layout_modal', $this->data);
    }

    public function logout()
    {
        $this->user_m->logout();
        redirect('admin/user/login');
    }
} 