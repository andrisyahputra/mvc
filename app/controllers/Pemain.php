<?php
    class Pemain extends Controller {

        public function index(){
            $data['judul'] = 'Pemain';
            $data['pemain'] = $this->model('Pemain_model')->getAllPemain();
            $this->view('templates/header', $data);
            $this->view('pemain/index', $data);
            $this->view('templates/footer');
        }
        public function detail($id){
            $data['judul'] = 'Detail Pemain';
            $data['pemain'] = $this->model('Pemain_model')->getPemainById($id);
            $this->view('templates/header', $data);
            $this->view('pemain/detail', $data);
            $this->view('templates/footer');
        }
    }
?>