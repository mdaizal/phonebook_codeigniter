<?php

class Contact extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('contact_model');
        $this->load->helper('url_helper');
    }
    
    public function index(){

        $data['contact'] = $this->contact_model->get_contact();
        $this->load->view('templates/header');
        $this->load->view('contact/index', $data);
        $this->load->view('templates/footer');
        
    }

    public function view($id = NULL){

        $data['contact'] = $this->contact_model->get_contact($id);

        if(empty($data['contact'])){
            show_404();
        }

        $this->load->view('templates/header');
        $this->load->view('contact/view', $data);
        $this->load->view('templates/footer');
    }

    public function create() {

        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('phone','Phone Number', 'required');

        if($this->form_validation->run() === FALSE){

            $this->load->view('templates/header');
            $this->load->view('contact/create');
            $this->load->view('templates/footer');
        }
        else {

            $this->contact_model->set_contact();
            redirect('contact', 'refresh');
        }
    }

    public function update($id = NULL){

        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('phone','Phone Number', 'required');

        $data['contact'] = $this->contact_model->get_contact($id);

        if(empty($data['contact'])){
            show_404();
        }
        else{
            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('contact/update', $data);
                $this->load->view('templates/footer');
            }
            else {
    
                $this->contact_model->update_contact($id);
                redirect('contact', 'refresh');
            }
        }
    }

    public function delete($id = NULL){
        if(empty($id)){
            show_404();
        }
        else{
            $this->contact_model->delete_contact($id);
            redirect('contact', 'refresh');
        }
    }
    

}