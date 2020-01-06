<?php 

    class Admin extends CI_Controller{
        public function index(){
            $data['title'] = 'Dashboard';
            $data['group_id'] = 1;
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/navbar',$data);
            $this->load->view('user/index',$data);
            $this->load->view('templates/footer',$data);
        }
    }




?>