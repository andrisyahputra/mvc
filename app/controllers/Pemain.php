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
        public function getubah(){
            // echo $_POST['id'];
            echo json_encode($this->model('Pemain_model')->getPemainById($_POST['id']));
            // $this->model('Pemain_model')->getPemainById($_POST['id']);
        }
        public function ubah()
        {
            if ($this->model('Pemain_model')->ubahDataPemain($_POST) > 0){
                Flasher::setFlash('berhasil','di ubah','success');
                header('Location: ' . BASEURL . '/pemain');
                exit;
            } else {
                Flasher::setFlash('gagal','di ubah','danger');
                header('Location: ' . BASEURL . '/pemain');
                exit;
            }
        }

        public function cari(){
            $data['judul'] = 'Cari Pemain';
            $data['pemain'] = $this->model('Pemain_model')->cariPemain();
            $this->view('templates/header', $data);
            $this->view('pemain/index', $data);
            $this->view('templates/footer');
        }
    }
?>