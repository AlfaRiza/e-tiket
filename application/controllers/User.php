<?php 

    class User extends CI_Controller{
        public function index(){
            $data['title'] = 'Home';
            $data['group_id'] = 3;
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/navbar',$data);
            $this->load->view('user/index',$data);
            $this->load->view('templates/footer',$data);
        }

        public function AllEvent(){
            $data['title'] = 'All Event';
            $data['group_id'] = 3;
            $crud = new grocery_CRUD();
            //$data['event'] = $this->user_model->getEvent('event');
            $crud->set_table('event');
            $crud->where('is_active',1);
            $crud->unset_columns('id','id_user','is_active','created_at','updated_at');
            //$crud->set_theme('bootstrap');
            $crud->unset_edit();
            $crud->unset_delete();
            $crud->unset_add();
            $crud->unset_export();
            $crud->unset_print();

            $output = $crud->render();
        $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/navbar',$data);
            $this->load->view('user/AllEvent',$output);
            $this->load->view('templates/footer',$data);
        }

        public function MyEvent(){
            $data['title'] = 'My Event';
            $data['group_id'] = 3;
            $crud = new grocery_CRUD();
            //$data['event'] = $this->user_model->getEvent('event');
            $crud->set_table('users');
            $crud->set_relation_n_n('peserta', 'peserta_event', 'event', 'id_event', 'id_user', 'nama_event','image','tgl_mulai','tgl_selesai','waktu','tempat','kuota','biaya')->where(1);
            //$crud->set_theme('bootstrap');
            $crud->unset_edit();
            $crud->unset_delete();
            $crud->unset_add();
            $crud->unset_export();
            $crud->unset_print();

            $output = $crud->render();
        $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/navbar',$data);
            $this->load->view('user/AllEvent',$output);
            $this->load->view('templates/footer',$data);
        }
    }

?>