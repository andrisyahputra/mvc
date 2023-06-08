<?php
    class About {
        public function index($nama = "Andri Syahputra", $pekerjaan = "Developer")
        {
            echo "Helo nama saya $nama, saya adalah seorang $pekerjaan";
        }
        public function page()
        {
            echo "About/page";
        }
    }
?>