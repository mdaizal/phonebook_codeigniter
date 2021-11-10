<?php

class Contact_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function get_contact($id = FALSE){

        if($id ===  FALSE){
            $query = $this->db->get('contact');
            return $query->result_array();
        }

        $query = $this->db->get_where('contact', array('id' => $id));
        return $query->row_array();
        
    }

    public function set_contact(){

        $this->load->helper('url');

        $slug = url_title($this->input->post('name'), 'dash', TRUE);
        $data = array(
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'slug' => $slug
        );

        $this->db->insert('contact', $data);
    }

    public function update_contact($id){

        $this->load->helper('url');

        $slug = url_title($this->input->post('name'), 'dash', TRUE);
        $data = array(
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'slug' => $slug
        );
        
        $this->db->where('id', $id);
        $this->db->update('contact', $data);
    }

    public function delete_contact($id){
        $this->db->delete('contact', array('id' => $id));
    }
}