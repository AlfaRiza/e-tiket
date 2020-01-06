<?php 

    class Penyelenggara extends CI_Controller{
        public function index($output = null){
            // instance object
            $crud = new grocery_CRUD();
            // pilih tabel yang akan digunakan
            $crud->set_table('event');
            $crud->where('is_active',1);
            $crud->add_fields('nama_event','image','tgl_mulai', 'tgl_selesai','waktu','tempat','kuota','biaya');
            $crud->field_type('tgl_mulai', 'date');
            $crud->field_type('tgl_selesai', 'date');
            $crud->field_type('kuota', 'integer');
            $crud->field_type('biaya', 'integer');
            $crud->set_field_upload('image','assets/uploads/files');
            $crud->set_rules('nama_event','Nama Event','required|trim');
            //$crud->set_rules('image','Image','required');
            //$crud->set_rules('tgl_mulai','Tgl Mulai','required');
            //$crud->set_rules('tgl_selesai','Tgl Selesai','required');
            $crud->set_rules('waktu','Waktu','required');
            $crud->set_rules('tempat','Tempat','required');
            $crud->set_rules('kuota','Kuota','required|numeric');
            $crud->set_rules('biaya','Biaya','required|numeric');
            //$crud->where('id_user', $this->session->user('id') );
            // simpan hasilnya kedalam variabel output
            $output = $crud->render();
            // tampilkan di view 
            //$this->_example_output($output);
            $data['title'] = 'Event';
            $data['group_id'] = 2;
            $data['event'] = $this->penyelenggara_model->getEventbyIdUser('event', ['id_user' => 1]);
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/navbar',$data);
            $this->load->view('penyelenggara/index',$output, $data);
            $this->load->view('templates/footer',$data);
        }
    }



?>