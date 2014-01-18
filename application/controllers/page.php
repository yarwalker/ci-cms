<?php
/**
 * Created by PhpStorm.
 * User: avs
 * Date: 1/18/14
 * Time: 9:48 PM
 */

class Page extends Frontend_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('page_m');
    }

    public function index()
    {

    }
/*
    public function index()
    {
        $pages = $this->page_m->get(2);
        echo '<pre>'; var_dump($pages); echo '</pre>';

        $pages = $this->page_m->get_by(array('slug' => 'about'));
        echo '<pre>'; var_dump($pages); echo '</pre>';
    }

    public function save()
    {
        //$data = array('title' => 'My page','slug' => 'my-page','order' => '2','body' => 'this is my page');

        $data = array(

            'order' => '3',

        );
        $id = $this->page_m->save($data,3);
        echo '<pre>'; var_dump($id); echo '</pre>';
    }

    public function delete()
    {
        $this->page_m->delete(3);
    }
*/
} 