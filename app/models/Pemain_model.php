<?php 

    class Pemain_model {

        private $tabel = 'mancity';
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getAllPemain()
        {
            $this->db->query("SELECT * FROM " . $this->tabel);
            return $this->db->resultSet();
        }

        public function getPemainById($id){
            $this->db->query('SELECT * FROM ' . $this->tabel .' WHERE id=:id');
            $this->db->bind('id', $id);

            return $this->db->single();
                }
        
        public function tambahGetDataPemain($data)
        {
            $query = "INSERT INTO $this->tabel
            VALUES
            ('', :nama, :posisi, :asal, :no_punggung, 'gambar')
            ";
            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('posisi', $data['posisi']);
            $this->db->bind('asal', $data['asal']);
            $this->db->bind('no_punggung', $data['no_punggung']);

            $this->db->execute();

            return $this->db->rowCount();
        // return 0;
        }
    }

?>