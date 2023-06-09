<?php
    class About extends Controller{
        public function index($nama = "Andri Syahputra", $pekerjaan = "Developer", $umur = "23")
        {
            // echo "Helo nama saya $nama, saya adalah seorang $pekerjaan";
            $data['judul'] = "About Me";
            $data['nama'] = $nama;
            $data['pekerjaan'] = $pekerjaan;
            $data['umur'] = $umur;
            $this->view('templates/header', $data);
            $this->view('about/index', $data);
            $this->view('templates/footer');
        }
        public function page()
        {
            $data['judul'] = 'Pages';
            $this->view('templates/header', $data);
            $this->view('about/page');
            $this->view('templates/footer');
        }
    }
?>