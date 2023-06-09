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
        public function tambah(){
            // var_dump($_POST);
            if ($this->model('Pemain_model')->tambahGetDataPemain($_POST) > 0){
                Flasher::setFlash('berhasil','Ditambahkan','success');
                header('Location: ' . BASEURL . '/pemain');
                exit;
            } else {
                Flasher::setFlash('gagal','Ditambahkan','danger');
                header('Location: ' . BASEURL . '/pemain');
                exit;
            }
        }
        public function hapus($id){
            // var_dump($_POST);
            if ($this->model('Pemain_model')->hapusDataPemain($id) > 0){
                Flasher::setFlash('berhasil','dihapus','success');
                header('Location: ' . BASEURL . '/pemain');
                exit;
            } else {
                Flasher::setFlash('gagal','dihapus','danger');
                header('Location: ' . BASEURL . '/pemain');
                exit;
            }
        }
    }
?>