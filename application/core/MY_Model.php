<?php
/**
 * Created by PhpStorm.
 * User: avs
 * Date: 1/18/14
 * Time: 9:16 PM
 */

class MY_Model extends CI_Model {
    protected $_table_name = '';
    protected $_primary_key = 'id';
    protected $_primary_filter = 'intval';
    protected $_order_by = '';
    public $rules = '';
    protected $_timestamps = FALSE;

    public function __construct()
    {
        parent::__construct();
    }

    public function get($id = NULL, $single = FALSE)
    {
        if($id != NULL):
            $filter = $this->_primary_filter;
            $id = $filter($id);
            $this->db->where($this->_primary_key, $id);
            $method = 'row';
        elseif($single == TRUE):
            $method = 'row';
        else:
            $method = 'result';
        endif;

        // в этом массиве хранятся определенные через db поля для сортировки
        // проверим пуст или нет этот массив, если пуст то определим свое поле сортировки
        if(!count($this->db->ar_orderby))
            $this->db->order_by($this->_order_by);

        return $this->db->get($this->_table_name)->$method();
    }
    public function get_by($where, $single = FALSE)
    {
        $this->db->where($where);
        return $this->get(NULL, $single);
    }
    public function save($data, $id = NULL)
    {
        if($this->_timestamps == TRUE):
            $now = date('Y-m-d H:i:s');
            $id || $data['created'] = $now;
            $data['modified'] = $now;
        endif;
        // insert
        if($id === NULL):
            !isset($data[$this->_primary_key]) || $data[$this->_primary_key] = NULL;
            $this->db->set($data);
            $this->db->insert($this->_table_name);
            $id = $this->db->insert_id();
        // update
        else:
            $filter = $this->_primary_filter;
            $id = $filter($id);
            $this->db->set($data);
            $this->db->where($this->_primary_key, $id);
            $this->db->update($this->_table_name);
        endif;

        return $id;
    }
    public function delete($id)
    {
        if(!$id)
            return FALSE;

        $filter = $this->_primary_filter;
        $id = $filter($id);

        $this->db->where($this->_primary_key, $id);
        $this->db->limit(1);
        $this->db->delete($this->_table_name);
    }
} 